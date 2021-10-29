<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::prefix('v1')->namespace('Api\V1')->group(function () {
    Route::post('/auth/login', 'AuthController@login');
    Route::get('/auth/logout', 'AuthController@logout');
    Route::post('/auth/register', 'AuthController@register');


    Route::apiResource('countries', 'CountryController');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
