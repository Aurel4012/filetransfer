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

Route::get('/', 'WelcomeController@index')->name('home');
Route::post('/upload', 'WelcomeController@upload')->name('upload');
Route::get('/download/{id}', 'FileController@index')->name('download');
Route::get('/forcedownload/{id}', 'FileController@download')->name('forcedl');
Route::get('/thanks', function()
{
    return view('thanks');
})->name('thanks');
 

Auth::routes();

//Route::get('/click/id', 'FileClickController@index')->name('click');

Route::get('/admin', 'HomeController@index');
