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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kontak','KontakController@index');
Route::get('/kontak/{id}','KontakController@show');
Route::post('/kontak/store','KontakController@store');
Route::post('/kontak/update/{id}','KontakController@update');
Route::post('/kontak/delete/{id}','KontakController@destroy');