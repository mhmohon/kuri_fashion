<?php
//For Admin dashboard Route.

Route::get('/dashboard/products/', 'ProductBackEndController@index')->name('productIndex');
Route::get('/dashboard/products/create', 'ProductBackEndController@create')->name('productCreate');
Route::post('/dashboard/products', 'ProductBackEndController@store')->name('productStore');

Route::get('/dashboard/products/{id}/edit','ProductBackEndController@edit')->name('productEdit');
Route::post('/dashboard/products/{id}/update', 'ProductBackEndController@update')->name('productUpdate');

//For Customer Route.

Route::get('/products/product-details/product-id={id}', 'HomeController@singleProductDetails')->name('singleProductDetails');