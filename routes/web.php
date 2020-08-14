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
Route::get('admin', 'HomeController@admin');
Route::get('message/edit/{id}', 'HomeController@edit')->where(['id' => '[0-9]+']);
Route::post('message/add', 'HomeController@addMessage');
Route::post('message/update/{id}', 'HomeController@updateMessage');
Route::get('message/delete/{id}', 'HomeController@deleteMessage');
