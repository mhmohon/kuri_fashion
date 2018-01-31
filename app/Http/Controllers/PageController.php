<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function checkout_success()
    {
    	return view ('front_end.pages.checkout_success');
    }
    public function my_account()
    {
    	return view ('front_end.pages.account.my_account');
    }
}
