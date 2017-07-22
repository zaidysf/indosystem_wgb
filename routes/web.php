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

Route::get('/', 'FrontController@index')->name('front');
Route::post('/', 'FrontController@guest_post')->name('guest.post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::delete('/guest/delete/{id}', 'HomeController@guest_delete')->name('guest.delete');
