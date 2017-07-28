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

Route::get('/', 'ListingsController@index')->name('index');
Route::get('/show/{id}', 'ListingsController@show')->name('show');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/index', 'ListingsController@index')->name('index');
Route::get('/create', 'ListingsController@create')->name('create');
Route::post('/store', 'ListingsController@store')->name('store');
Route::get('/edit/{id}', 'ListingsController@edit')->name('edit');
Route::post('/update/{id}', 'ListingsController@update')->name('update');
Route::get('delete/{id}', 'ListingsController@destroy')->name('delete');
