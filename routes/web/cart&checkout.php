<?php


Route::get('/show-cart', 'CartController@index')->name('cartIndex');
Route::post('/add-to-cart/product_id={id}', 'CartController@add_to_cart')->name('cartAdd');
Route::get('/delete-to-cart/cart_id={id}', 'CartController@delete_to_cart')->name('cartDelete');
Route::post('/update-to-cart/cart_id={id}', 'CartController@update_to_cart')->name('cartUpdate');

//For user Checkout.
Route::group(['middleware'=>'auth'],function(){

	Route::get('/checkout', ['middleware'=>'check-role:customer','uses'=>'CheckoutController@index'])->name('checkoutIndex');

	Route::post('/checkout', ['middleware'=>'check-role:customer','uses'=>'CheckoutController@store'])->name('checkoutStore');
	
	Route::get('/checkout-success', ['middleware'=>'check-role:customer','uses'=>'PageController@checkout_success'])->name('checkoutSuccess');
});