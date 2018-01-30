<?php

//For Admin dashboard Route.

Route::get('/dashboard/orders/', 'OrderBackEndController@index')->name('orderIndex');
Route::get('/dashboard/orders/create', 'OrderBackEndController@create')->name('orderCreate');
Route::post('/dashboard/orders', 'OrderBackEndController@store')->name('orderstore');

Route::get('/dashboard/orders/{id}/view','OrderBackEndController@show')->name('orderView');
Route::get('/dashboard/orders/{id}/edit','OrderBackEndController@edit')->name('orderEdit');
Route::post('/dashboard/orders/{id}/update', 'OrderBackEndController@update')->name('orderUpdate');

//For Customer Route.
Route::get('/single-product/{id}/view/','HomeController@singleProductDetails')->name('viewSingleProduct');