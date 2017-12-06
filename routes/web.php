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

Route::get('/admin', 'HomeController@index');
Route::post('/upload', 'WelcomeController@upload')->name('upload');
Route::get('/', 'WelcomeController@index');
Route::get('/home', 'WelcomeController@index')->name('welcome');
Auth::routes();


Route::get('/download/id', 'FileController@index')->name('download');
Route::get('/click/id', 'FileClickController@index')->name('click');
