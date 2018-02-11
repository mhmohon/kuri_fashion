<?php
Route::group(['middleware'=>'auth'],function(){
//For Admin dashboard Route.
	Route::get('/dashboard/customer-list', ['middleware'=>'check-role:superAdmin|admin|staff','uses'=>'CustomerBackendController@index'])->name('customerList');

	Route::get('/dashboard/orders/', ['middleware'=>'check-role:superAdmin|admin|staff','uses'=>'OrderBackEndController@index'])->name('orderIndex');

	Route::get('/dashboard/orders/{id}/view',['middleware'=>'check-role:superAdmin|admin','uses'=>'OrderBackEndController@show'])->name('orderView');

	Route::get('/dashboard/orders/{id}/edit',['middleware'=>'check-role:superAdmin|admin','uses'=>'OrderBackEndController@edit'])->name('orderEdit');

	Route::post('/dashboard/orders', ['middleware'=>'check-role:superAdmin|admin','uses'=>'OrderBackEndController@store'])->name('orderstore');

	Route::post('/dashboard/orders/update/order_id={order_id}&address_id={address_id}', ['middleware'=>'check-role:superAdmin|admin','uses'=>'OrderBackEndController@update'])->name('orderUpdate');

	//Only OrderItem update or delete.
	Route::post('/dashboard/orders/update&order_item={id}', ['middleware'=>'check-role:superAdmin|admin','uses'=>'OrderBackEndController@updateQuantity'])->name('orderQuantityUpdate');

	Route::post('/dashboard/orders/delete&order_item={id}', ['middleware'=>'check-role:superAdmin|admin','uses'=>'OrderBackEndController@deleteItem'])->name('orderItemDelete');

	//Only Print Order.
	Route::get('/dashboard/orders/invoice&order_id={id}', ['middleware'=>'check-role:superAdmin|admin|staff','uses'=>'OrderBackEndController@invoice'])->name('orderInvoice');
});

