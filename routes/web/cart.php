<?php


Route::get('/show-cart', 'CartController@index')->name('cartIndex');
Route::post('/add-to-cart/product_id={id}', 'CartController@add_to_cart')->name('cartAdd');
Route::get('/delete-to-cart/cart_id={id}', 'CartController@delete_to_cart')->name('cartDelete');
Route::post('/update-to-cart/cart_id={id}', 'CartController@update_to_cart')->name('cartUpdate');

//For user Checkout.
Route::get('/checkout', 'CheckoutController@index')->name('checkoutIndex');
Route::post('/checkout', 'CheckoutController@store')->name('checkoutStore');
