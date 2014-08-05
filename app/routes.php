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

Route::get('/movie/{id}', 'HomeController@index');
Route::get('/search/{key}', 'ActorController@search');
Route::get('/actor/{id}', 'ActorController@index');
Route::get('/login', 'UserController@index');
Route::post('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');

Route::get('/admin/actors', 'ActorController@adminIndex');
Route::get('/admin/actors/edit/{id}', 'ActorController@edit');