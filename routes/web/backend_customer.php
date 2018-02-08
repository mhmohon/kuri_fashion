<?php

Route::group(['middleware'=>'auth'],function(){

	Route::get('/dashboard/customer-list', ['middleware'=>'check-role:superAdmin|admin|staff','uses'=>'CustomerBackendController@index'])->name('customerList');

	Route::get('/dashboard/customer/view&user_id={id}', ['middleware'=>'check-role:superAdmin|admin|staff','uses'=>'CustomerBackendController@view'])->name('customerView');


	Route::get('/dashboard/customer/edit&user_id={id}', ['middleware'=>'check-role:superAdmin|admin','uses'=>'CustomerBackendController@edit'])->name('customerEdit');

	Route::post('/dashboard/customer/update&user_id={id}', ['middleware'=>'check-role:superAdmin|admin','uses'=>'CustomerBackendController@update'])->name('customerUpdate');

	//Add new address of customer
	Route::get('/dashboard/customer/address/add&user_id={id}', ['middleware'=>'check-role:superAdmin|admin','uses'=>'CustomerBackendController@add_address'])->name('customerAddAddress');

	Route::post('/dashboard/customer/address/add&user_id={id}', ['middleware'=>'check-role:superAdmin|admin','uses'=>'CustomerBackendController@add_address_store'])->name('customerStoreAddress');

	Route::get('/dashboard/customer/address/edit&address_id={id}', ['middleware'=>'check-role:superAdmin|admin','uses'=>'CustomerBackendController@edit_address'])->name('customerEditAddress');

	Route::post('/dashboard/customer/address/update&address_id={id}', ['middleware'=>'check-role:superAdmin|admin','uses'=>'CustomerBackendController@update_address'])->name('customerUpdateAddress');

	//Delete address of customer
	Route::get('/dashboard/customer/address/delete&address_id={id}', ['middleware'=>'check-role:superAdmin|admin','uses'=>'CustomerBackendController@delete_address'])->name('customerDeleteAddress');

});

