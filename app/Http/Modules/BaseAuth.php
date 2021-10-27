<?php

namespace App\Http\Modules;

use App\Events\UserForgotPasswordEvent;
use App\Events\UserRegisterEvent;
use App\Events\UserResetPasswordEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthForgotPassword;
use App\Http\Requests\AuthLogin;
use App\Http\Requests\AuthRegister;
use App\Http\Requests\AuthResetPassword;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BaseAuth extends Controller
{

    public function login(AuthLogin $request)
    {

        $query = User::where('email', strtolower($request->input('email')));

        $this->__queryGetUserLogin($query);

        $user = $query->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            return $this->__successLogin($user);
        }

        $this->__erroLogin();
    }

    public function __erroLogin()
    {
        throw new Exception("Invalid Credential", 500);
    }

    public function __queryGetUserLogin($query)
    {
        return $query;
    }

    public function __successLogin($user)
    {
        return ['token' => $user->createToken('personal')->accessToken];
    }

    public function logout()
    {
        $user = Auth::user();
        if ($user) {
            $user->token()->revoke();
        }

        return $this->__successLogout();
    }

    public function __successLogout()
    {
        return ['success' => true];
    }

    public function register(AuthRegister $request)
    {
        return $this->DBSafe(function () use ($request) {
            $user = new User();

            $data = $request->validated();

            $data = $this->__beforeFillRegister($data);

            $user->fill($data);

            $user->save();

            event(new UserRegisterEvent($user));

            return $this->__successRegister($user);
        });
    }

    public function __successRegister($user)
    {
        return $this->__successLogin($user);
    }

    public function __beforeFillRegister($data)
    {
        $data['email'] = strtolower($data['email']);
        $data['password'] = Hash::make($data['password']);
        return $data;
    }


    public function forgotPassword(AuthForgotPassword $request)
    {
        $query = User::where('email', strtolower($request->input('email')));

        $this->__queryGetUserForgotPassword($query);

        $user = $query->first();

        if ($user) {
            event(new UserForgotPasswordEvent($user));
            return $this->__successForgotPassword($user);
        }

        $this->__errorForgotPassword();
    }

    public function __queryGetUserForgotPassword($query)
    {
        return $query;
    }

    public function __successForgotPassword($user)
    {
        return ['success' => true];
    }

    public function __errorForgotPassword()
    {
        throw new Exception("User Not Found", 404);
    }


    public function resettPassword(AuthResetPassword $request)
    {
        $query = User::where('id', $request->input('user_id'));

        $this->__queryGetUserResetPassword($query);

        $user = $query->first();

        if ($user) {
            event(new UserResetPasswordEvent($user));
            return $this->__successResetPassword($user);
        }

        $this->__errorResetPassword();
    }

    public function __queryGetUserResetPassword($query)
    {
        return $query;
    }

    public function __successResetPassword($user)
    {
        return ['success' => true];
    }

    public function __errorResetPassword()
    {
        throw new Exception("User Not Found", 404);
    }
}
