<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(
		'as' => 'index',
		'uses' => 'HomeController@index',
));

// Route::resource('password', 'RemindersController', array(
//     'only' => array('index', 'store', 'show', 'update')
// ));

Route::get('/movie/{id}', 'HomeController@index');
Route::get('/search/{key}', 'ActorController@search');
Route::get('/actor/{id}', 'ActorController@index');
Route::get('/login', 'UserController@index');
Route::post('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');
Route::controller('password', 'RemindersController');

Route::group(array('prefix' => 'admin'), function()
{
	Route::get('actors', 'ActorController@adminIndex');
	Route::get('actors/edit/{id}', 'ActorController@edit');

	Route::get('movies', 'MovieController@index');
	Route::get('movies/edit/{id}', 'MovieController@edit');
});
