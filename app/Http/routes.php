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


// Route::get('/', 'UrlController@index');
// Route::controllers([
//     'auth' => 'Auth\AuthController',
//     'password' => 'Auth\PasswordController',
// ]);

// Route::get('/home', ['middleware' => 'auth', function () {
//     return view('home');
// }]);

Route::get('/', function () {
     return view('auth.login');
});

Route::resource('urls','UrlController');

Route::get('urls/create', 'UrlController@create');
Route::get('urls/list', 'UrlController@list');
