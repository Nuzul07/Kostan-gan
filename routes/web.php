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

Route::get('/','HomeController@welcome');

Auth::routes();

Route::get('/', 'AdminController@index');

Route::prefix('admin')->group(function(){
	Route::get('/', 'AdminController@index');
	Route::get('/kamar', 'AdminController@indexkamar');
	Route::get('/kamar/add', 'AdminController@addkamar');
	Route::post('/kamar/save', 'AdminController@savekamar');
	Route::get('/kamar/edit/{id}', 'AdminController@editkamar');
	Route::post('/kamar/update', 'AdminController@updatekamar');
	Route::get('/kamar/delete/{id}', 'AdminController@deletekamar');
});