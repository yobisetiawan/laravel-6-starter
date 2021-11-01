<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRegister extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            /**
             * @OA\Parameter(
             *   parameter="AuthRegister_name",
             *   name="name",
             *   @OA\Schema(
             *     type="string"
             *   ),
             *   in="query",
             *   required=true
             * )
             */
            'name' => 'required',

            /**
             * @OA\Parameter(
             *   parameter="AuthRegister_email",
             *   name="email",
             *   @OA\Schema(
             *     type="string"
             *   ),
             *   in="query",
             *   required=true
             * )
             */

            'email' => 'required|email|unique:users,email',

            /**
             * @OA\Parameter(
             *   parameter="AuthRegister_password",
             *   name="password",
             *   @OA\Schema(
             *     type="string"
             *   ),
             *   in="query",
             *   required=true
             * )
             */
            'password' => 'required',
        ];
    }
}
