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

// Home Routes...
Route::get('/', 'IndexController@index');
Route::get('/home', function() {
	return redirect('/');
});

// Profile Routes...
Route::get('/profile', 'ProfileController@profile');
Route::post('/profile', 'ProfileController@save');

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// API Routes...
Route::get('api/{resource}/{id}', 'APIController@getResource');
Route::put('api/{resource}/{id}', 'APIController@updateResource');
Route::post('api/{resource}', 'APIController@insertResource');
Route::delete('api/{resource}/{id}', 'APIController@deleteResource');

// Contact Routes...
Route::get('contacts', 'ContactsController@index');
Route::get('contacts/edit', function() {
	return redirect('contacts');
});
Route::get('contacts/edit/{id}', 'ContactsController@edit');
Route::get('contacts/create', 'ContactsController@create');
Route::get('contacts/{id}', 'ContactsController@show');
Route::post('contacts/store', 'ContactsController@store');

// Lead Routes...
Route::get('leads', 'LeadsController@index');
Route::get('leads/edit', function() {
	return redirect('leads');
});
Route::get('leads/edit/{id}', 'LeadsController@edit');
Route::get('leads/create', 'LeadsController@create');
Route::get('leads/{id}', 'LeadsController@show');
Route::post('leads/store', 'LeadsController@store');
