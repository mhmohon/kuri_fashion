<?php

Route::group(['middleware'=>'auth'],function(){

	Route::get('/dashboard', ['middleware'=>'check-role:superAdmin|admin|staff','uses'=>'DashboardController@index'])->name('dashboardHome');

	//For Add banner
	Route::get('/dashboard/banner', ['middleware'=>'check-role:superAdmin|admin|staff','uses'=>'BannerController@index'])->name('bannerIndex');

	Route::get('/dashboard/banner/create', ['middleware'=>'check-role:superAdmin|admin','uses'=>'BannerController@create'])->name('bannerCreate');

	Route::post('/dashboard/banner/create', ['middleware'=>'check-role:superAdmin|admin','uses'=>'BannerController@store'])->name('bannerStore');

	Route::get('/dashboard/banner/{id}/edit', ['middleware'=>'check-role:superAdmin|admin','uses'=>'BannerController@edit'])->name('bannerEdit');

	Route::post('/dashboard/banner/{id}/update', ['middleware'=>'check-role:superAdmin|admin','uses'=>'BannerController@update'])->name('bannerUpdate');

	Route::get('/dashboard/banner/{id}/delete', ['middleware'=>'check-role:superAdmin|admin','uses'=>'BannerController@destroy'])->name('bannerDelete');
});

