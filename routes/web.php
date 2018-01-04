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



Route::get('/', 'PageController@home');

Route::get('/single_product','HomeController@s_product');

Route::get('/home', 'HomeController@index')->name('home');




require __DIR__ . '/web/dashboard.php';

require __DIR__ . '/web/category.php';



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
