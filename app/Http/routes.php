<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/check', function () {
	$isAdmin = Auth::user()->hasRole('administrator'); // pass role slug as parameter
	dd($isAdmin);
});


Route::group(['prefix' => 'backend', 'middleware' => ['auth', 'rbac:is,administrator']], function () {
	Route::get('index', 'AdminController@index');
	Route::resource('users', 'Admin\UserController');
});

// Route::group(['prefix' => 'backend', 'middleware' => ['auth', 'rbac:is,interviwer']], function () {
// 	Route::get('index', 'AdminController@index');
// 	Route::get('users', 'AdminController@index');
// });

// Route::group(['prefix' => 'backend', 'middleware' => ['auth', 'rbac:is,data-entry']], function () {
// 	Route::get('index', 'AdminController@index');
// 	Route::get('users', 'AdminController@index');
// });