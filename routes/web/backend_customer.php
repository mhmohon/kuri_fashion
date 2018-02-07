<?php

Route::group(['middleware'=>'auth'],function(){

	Route::get('/dashboard/customer-list', ['middleware'=>'check-role:superAdmin|admin|staff','uses'=>'CustomerBackendController@index'])->name('customerList');

	Route::get('/dashboard/customer/{id}/view', ['middleware'=>'check-role:superAdmin|admin|staff','uses'=>'CustomerBackendController@view'])->name('customerView');


	Route::get('/dashboard/customer/{id}/edit', ['middleware'=>'check-role:superAdmin|admin','uses'=>'CustomerBackendController@edit'])->name('customerEdit');

	Route::post('/dashboard/customer/{id}/update', ['middleware'=>'check-role:superAdmin|admin','uses'=>'CustomerBackendController@update'])->name('customerUpdate');

});

