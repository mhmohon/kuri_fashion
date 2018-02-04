<?php
Route::group(['middleware'=>'auth'],function(){
	
	Route::get('/account/my-account', ['middleware'=>'check-role:customer','uses'=>'PageController@my_account'])->name('myAccount');

	Route::get('/account/my-account/edit&account_id={id}', ['middleware'=>'check-role:customer','uses'=>'UserController@edit'])->name('accountInfoEdit');

	Route::post('/account/my-account/update&account_id={id}', ['middleware'=>'check-role:customer','uses'=>'UserController@update_info'])->name('accountInfoUpdate');

	// Account Password Change
	Route::get('/account/my-account/password/edit&account_id={id}', ['middleware'=>'check-role:customer','uses'=>'UserController@edit_password'])->name('accountPasswordEdit');

	Route::post('/account/my-account/password/update&account_id={id}', ['middleware'=>'check-role:customer','uses'=>'UserController@update_password'])->name('accountPasswordUpdate');

	// Account Address Change
	Route::get('/account/my-account/address/account_id={id}', ['middleware'=>'check-role:customer','uses'=>'UserController@show_address'])->name('accountAddressShow');

	Route::get('/account/my-account/address/edit&address_id={id}', ['middleware'=>'check-role:customer','uses'=>'UserController@edit_address'])->name('accountAddressEdit');

	Route::post('/account/my-account/address/update&address_id={id}', ['middleware'=>'check-role:customer','uses'=>'UserController@update_address'])->name('accountAddressUpdate');

	// My Order History
	Route::get('/account/my-account/order/all&account_id={id}', ['middleware'=>'check-role:customer','uses'=>'UserController@show_order'])->name('accountOrderShow');

	Route::get('/account/my-account/order/single&order_id={id}', ['middleware'=>'check-role:customer','uses'=>'UserController@info_order'])->name('accountOrderInfo');

	Route::post('/account/my-account/order/update&order_id={id}', ['middleware'=>'check-role:customer','uses'=>'UserController@update_address'])->name('accountAddressUpdate');
});