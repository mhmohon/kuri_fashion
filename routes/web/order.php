<?php

//For Admin dashboard Route.

Route::get('/dashboard/orders/', 'OrderBackEndController@index')->name('orderIndex');
Route::get('/dashboard/orders/create', 'OrderBackEndController@create')->name('orderCreate');
Route::post('/dashboard/orders', 'OrderBackEndController@store')->name('orderstore');

Route::get('/dashboard/orders/{id}/view','OrderBackEndController@show')->name('orderView');
Route::get('/dashboard/orders/{id}/edit','OrderBackEndController@edit')->name('orderEdit');
Route::post('/dashboard/orders/{id}/update', 'OrderBackEndController@update')->name('orderUpdate');

//Only OrderItem update or delete.
Route::post('/dashboard/orders/update&order_item={id}', 'OrderBackEndController@updateQuantity')->name('orderQuantityUpdate');

Route::post('/dashboard/orders/delete&order_item={id}', 'OrderBackEndController@deleteItem')->name('orderItemDelete');


