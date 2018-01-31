<?php
//For Admin dashboard Route.

Route::get('/dashboard/products/', 'ProductBackEndController@index')->name('productIndex');
Route::get('/dashboard/products/create', 'ProductBackEndController@create')->name('productCreate');
Route::post('/dashboard/products', 'ProductBackEndController@store')->name('productStore');

Route::get('/dashboard/products/{id}/edit','ProductBackEndController@edit')->name('productEdit');
Route::post('/dashboard/products/{id}/update', 'ProductBackEndController@update')->name('productUpdate');

//For Customer Route.
Route::get('/single-product/{id}/view/','HomeController@singleProductDetails')->name('viewSingleProduct');

Route::get('/all-product/view/','HomeController@allProductDetails')->name('viewAllProduct');

Route::get('/all-product/category/view&category_id={id}','HomeController@productByCategory')->name('viewProductByCategory');