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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* JSON Web Token */
Route::post('register', 'AuthenticateController@register');
Route::post('login', 'AuthenticateController@login');
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('student_info', 'AuthenticateController@student_info');
    Route::get('download', 'AuthenticateController@download');
    Route::post('action_event', 'AuthenticateController@action_event');
    Route::post('portfolio_event', 'AuthenticateController@portfolio_event');
});
