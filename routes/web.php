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


// Home Controller
Route::get('/', 'HomeController@show');

// Guitar Controller
Route::get('/guitars', 'GuitarsController@index');
Route::post('/guitars', 'GuitarsController@store');
Route::get('guitars/create', 'GuitarsController@create');
Route::get('/guitars/{guitar}', 'GuitarsController@show');
Route::get('/guitars/{guitar}/edit', 'GuitarsController@edit');
Route::put('/guitars/{guitar}', 'GuitarsController@update');