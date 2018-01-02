<?php

Route::get('/dashboard/category', 'CategoryController@index');

Route::get('/dashboard/category/create', 'CategoryController@create');

Route::post('/dashboard/category','CategoryController@store')->name('categoryStore');

Route::get('/dashboard/category/{id}/edit','CategoryController@edit')->name('categoryEdit');

Route::post('/dashboard/category/{id}/update','CategoryController@update')->name('categoryUpdate');





