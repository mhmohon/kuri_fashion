<?php

Route::group(['middleware'=>'auth'],function(){

	//For user wishlist.
	Route::get('/show-wishlist', ['middleware'=>'check-role:customer','uses'=>'WishlistController@index'])->name('wishlistIndex');

	Route::get('/wishlist/add&product_id={id}', ['middleware'=>'check-role:customer','uses'=>'WishlistController@add_to_wishlist'])->name('wishlistAdd');

	Route::get('/wishlist/delete&wishlist_id={id}', ['middleware'=>'check-role:customer','uses'=>'WishlistController@delete_to_wishlist'])->name('wishlistDelete');

	
});

