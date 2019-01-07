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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/save', 'PenginapController@save');
Route::get('/all', 'PenginapController@all');
Route::get('/edit/{id}', 'PenginapController@edit');
Route::post('/update/{id}', 'PenginapController@update');
Route::get('/delete/{id}', 'PenginapController@delete');
Route::get('/search', 'PenginapController@search');