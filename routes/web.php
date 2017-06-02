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

Route::get('about', function () {
	return view('about');
});

Route::get('contact', function () {
	return view('contact');
});

