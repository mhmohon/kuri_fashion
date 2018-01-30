<?php


Route::post('/product-review/product_id={id}','ReviewController@store')->name('ReviewStore');

Route::get('/dashboard/category/{id}/edit','CategoryController@edit')->name('categoryEdit');

Route::post('/dashboard/category/{id}/update','CategoryController@update')->name('categoryUpdate');





