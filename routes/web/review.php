<?php
Route::group(['middleware'=>'auth'],function(){

	//For Admin user.
	Route::get('/dashboard/product-review/view','ReviewBackEndController@index')->name('reviewAll');

	Route::get('/dashboard/product-review/view-edit&review_id={id}','ReviewBackEndController@edit')->name('reviewEdit');

	Route::post('/dashboard/product-review/update&review_id={id}','ReviewBackEndController@update')->name('reviewUpdate');

	Route::get('/dashboard/product-review/delete&review_id={id}','ReviewBackEndController@destroy')->name('reviewDelete');



	//For Customer user.
	Route::post('/product-review/product_id={id}',['middleware'=>'check-role:customer','uses'=>'ReviewController@store'])->name('ReviewStore');
});







