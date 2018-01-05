<?php

Route::group(['middleware'=>'auth'],function(){

	Route::get('/dashboard', ['middleware'=>'check-role:superAdmin|admin|staff','uses'=>'DashboardController@index'])->name('dashboardHome');
});

