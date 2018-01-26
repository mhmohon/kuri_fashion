<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductDetail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front_end.pages.home');
    }
    public function singleProductDetails($id)
    {
        
        $product = Product::find($id);

        $product_colors = explode(",", $product->productDetail->pro_other_colors);
        //dd($product_colors);
        $product_sizes = explode(",", $product->productDetail->pro_size);
        return view('front_end.pages.single_product',compact('product','product_colors','product_sizes'));
    }
}
