<?php

Route::group(['middleware'=>'auth'],function(){

	//For user wishlist.
	Route::get('/show-wishlist', ['middleware'=>'check-role:customer','uses'=>'WishlistController@index'])->name('wishlistIndex');

	Route::get('/wishlist/add&product_id={id}', ['middleware'=>'check-role:customer','uses'=>'WishlistController@add_to_wishlist'])->name('wishlistAdd');

	Route::get('/wishlist/delete&wishlist_id={id}', ['middleware'=>'check-role:customer','uses'=>'WishlistController@delete_to_wishlist'])->name('wishlistDelete');

	//For user comparison.
	Route::get('/show/product-comparison', ['middleware'=>'check-role:customer','uses'=>'CompareController@index'])->name('compareIndex');

	Route::get('/comparison/add&product_id={id}', ['middleware'=>'check-role:customer','uses'=>'CompareController@add_to_compare'])->name('compareAdd');

	Route::get('/comparison/delete&compare_id={id}', ['middleware'=>'check-role:customer','uses'=>'CompareController@delete_to_compare'])->name('compareDelete');
});

