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

Route::get('/','PagesController@Home');
Route::post('/propiedades','PagesController@Store');
Route::get('/galerias/{id?}', 'PagesController@galerias')->name('galerias');
//Route::get('/','PagesController@ListarPropiedades');