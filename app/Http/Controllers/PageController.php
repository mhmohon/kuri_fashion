<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    //
    public function home()
    {
    	$products = Product::latest()->get();	
    	return view ('front_end.pages.home',compact('products'));
    }
}
