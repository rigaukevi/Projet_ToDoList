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

/*Route::get('/', function () {
	return view('welcome');
})->middleware('guest');*/

// Task Routes
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

// Authentication Routes...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::delete('/task/{task}', 'TaskController@destroy');

Route::get('/',[
	'as'=>'homeLink',
	'uses'=>'LinkController@homeLink'
]);

Route::get('/register',[
	'as'=>'registerLink',
	'uses'=>'LinkController@registerLink'
]);
Route::post('auth/register', [
	'as' => 'postRegister',
	'uses' => 'LinkController@registerLink'
]);



//  About Routes
Route::get('/about',[
	'as'=>'aboutLink',
	'uses'=>'LinkController@aboutLink'
]);

Route::get('/login',[
	'as'=>'loginLink',
	'uses'=>'LinkController@loginLink'
]);