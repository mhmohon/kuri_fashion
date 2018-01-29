<?php
//For Admin dashboard Route.

Route::get('/show-cart', 'CartController@index')->name('cartIndex');
Route::post('/add-to-cart/product_id={id}', 'CartController@add_to_cart')->name('cartAdd');
Route::get('/delete-to-cart/cart_id={id}', 'CartController@delete_to_cart')->name('cartDelete');
Route::post('/update-to-cart/cart_id={id}', 'CartController@update_to_cart')->name('cartUpdate');
//For user Checkout.
Route::get('/checkout', 'CheckoutController@index')->name('checkoutIndex');
Route::post('/checkout', 'CheckoutController@store')->name('checkoutStore');


Route::get('/show-wishlist', 'WishlistController@index')->name('wishlistIndex');
Route::get('/add-to-wishlist/product_id={id}', 'WishlistController@add_to_wishlist')->name('wishlistAdd');
Route::get('/delete-to-wishlist/wishlist_id={id}', 'WishlistController@delete_to_wishlist')->name('wishlistDelete');