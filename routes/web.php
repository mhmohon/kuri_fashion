<?php

use App\User;
use App\Notifications\NewOrder;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/







require __DIR__. '/web/cart&checkout.php';

require __DIR__. '/web/wishlist.php';

require __DIR__ . '/web/dashboard.php';

require __DIR__ . '/web/category.php';

require __DIR__ . '/web/product.php';

require __DIR__ . '/web/order.php';

require __DIR__ . '/web/review.php';

require __DIR__ . '/web/user_customer.php';

require __DIR__ . '/web/backend_customer.php';



Auth::routes();

Route::get('/test', function () {

	//$user = User::find(1);
	User::find(1)->notify(new NewOrder);
    return view('front_end.layouts.email.order_success_email');
});

Route::get('mark-as/read&notify_id={id}', 'dashboardController@notifyRead')->name('markAsRead');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about-us', 'PageController@aboutUs')->name('aboutUs');
Route::get('/contact-us', 'PageController@contactUs')->name('contactUs');
Route::post('/contact-us', 'PageController@sendMail')->name('sendContactMail');

Route::get('/all-product/view/','HomeController@allProductDetails')->name('viewAllProduct');
//All product search and range
Route::get('/all-product/view/sort_by={Name}&order={name}','HomeController@sort_order')->name('viewProductOrder');

Route::get('/all-product/view/by_price/min={minprice}&max={maxprice}','HomeController@sort_price')->name('viewProductPrice');
// end All product search and range
Route::get('/single-product/{id}/view/','HomeController@singleProductDetails')->name('viewSingleProduct');

Route::post('/product/search', 'HomeController@searchProduct')->name('productSearch');

Route::get('/all-product/category/view&category_id={id}','HomeController@productByCategory')->name('viewProductByCategory');

//For user comparison.
Route::get('/show/product-comparison', 'CompareController@index')->name('compareIndex');

Route::get('/comparison/add&product_id={id}', 'CompareController@add_to_compare')->name('compareAdd');

Route::get('/comparison/delete&compare_id={id}', 'CompareController@delete_to_compare')->name('compareDelete');



