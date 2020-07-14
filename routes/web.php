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

Route::get('/', 'HomeController@index');
Route::get('message/{id}/edit', 'HomeController@edit')->where(['id' => '[0-9]+']);
Route::post('add', 'HomeController@addMessage');
Route::post('update/{id}', 'HomeController@updateMessage');
