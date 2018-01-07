<?php

Route::get('/dashboard/products/create', 'ProductController@create')->name('productCreate');
Route::post('/dashboard/products', 'ProductController@store')->name('productStore');
