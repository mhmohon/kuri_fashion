<?php
//For Admin dashboard Route.

Route::get('/show-cart', 'CartController@index')->name('cartIndex');
Route::post('/add-to-cart/product_id={id}', 'CartController@add_to_cart')->name('cartAdd');
Route::get('/delete-to-cart/cart_id={id}', 'CartController@delete_to_cart')->name('cartDelete');
Route::post('/update-to-cart/cart_id={id}', 'CartController@update_to_cart')->name('cartUpdate');

Route::get('/checkout', 'CartController@checkout')->name('checkout');