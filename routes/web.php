<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about-me', function () {
    return view('/about-me');
});

Route::get('/datamahasiswa', 'MahasiswaController@index')->name('datamahasiswa');
Route::get('/tambahmahasiswa', 'MahasiswaController@create')->name('tambahmahasiswa');
Route::post('/simpanmahasiswa', 'MahasiswaController@store')->name('simpanmahasiswa');
Route::get('/editmahasiswa/{id}', 'MahasiswaController@edit')->name('editmahasiswa');
Route::post('/updatemahasiswa/{id}', 'MahasiswaController@update')->name('updatemahasiswa');
Route::get('/deletemahasiswa/{id}', 'MahasiswaController@destroy')->name('deletemahasiswa');