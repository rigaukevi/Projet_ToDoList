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



Route::get('/',[
	'as'=>'homeLink',
	'uses'=>'LinkController@homeLink'
]);

Route::get('/home', [
	'as'=> 'truehome',
	'uses'=> 'LinkController@truehome'
]);

//Routes pour l'enregistrement

Route::get('/login',[
	'as'=>'loginLink',
	'uses'=>'LinkController@loginLink'
]);

Route::get('auth/register', [
	'as' => 'getRegister',
	'uses' => 'Auth\AuthController@getRegister'
]);
Route::post('auth/register', [
	'as' => 'postRegister',
	'uses' => 'Auth\AuthController@postRegister'
]);

//routes pour l'authentification
Route::get('auth/login', [
		'as'=>'getLogin',
	'uses'=>'Auth\AuthController@getLogin'
]);

Route::post('auth/login', [
	'as'=>'postLogin',
	'uses'=>'Auth\AuthController@postLogin'
]);

//Route de déconnexion
Route::get('auth/logout', [
	'as' =>'logout',
	'uses' =>	'Auth\AuthController@getLogout']);


//  About Routes
Route::get('/about',[
	'as'=>'aboutLink',
	'uses'=>'LinkController@aboutLink'
]);



// Task Routes
Route::get('/tasks',[
	'as'=>'getTask',
	'uses'=>'TaskController@index'
]);

Route::post('/task',[
	'as'=>'postTask',
	'uses'=>'TaskController@store'
]);

Route::delete('/task/{task}', 'TaskController@destroy');


