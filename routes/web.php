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

<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');


Route::post('/save', 'PenginapController@save');
Route::get('/all', 'PenginapController@all');
Route::get('/edit/{id}', 'PenginapController@edit');
Route::post('/update/{id}', 'PenginapController@update');
Route::get('/delete/{id}', 'PenginapController@delete');
Route::get('/search', 'PenginapController@search');
=======
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
>>>>>>> d95ca556616939069706c50c9b61eb9f2dba09c5
