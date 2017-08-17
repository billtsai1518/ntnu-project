<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::get('dashboard', 'HomeController@index');

Route::get('createclass', 'ClassesController@create');
Route::post('createclass', 'ClassesController@store');

Route::get('joinclass', 'ClassesController@join_class');
Route::post('joinclass', 'ClassesController@join_store');

Route::get('classes-{id}', 'ClassesController@classes_view');
Route::post('classes-{id}', 'ClassesController@classes_store');

Route::get('user-{id}', 'UserController@user_view');

Route::get('setting', 'UserController@setting_view');
Route::post('setting', 'UserController@setting_store');

Route::get('about', function () {
	return view('about');
});

Route::get('contact', function () {
	return view('contact');
});

