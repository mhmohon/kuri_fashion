<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductDetail;
use App\Review;

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
    public function test()
    {
        return view('front_end.pages.test');
    }
    public function singleProductDetails($id)
    {
        
        //Get All the latest product.
        $reviews = Review::where('product_id', $id)->get();

        $product = Product::find($id);

        $product_colors = explode(",", $product->productDetail->pro_other_colors);
        //dd($review);
        $product_sizes = explode(",", $product->productDetail->pro_size);
        return view('front_end.pages.single_product',compact('product','product_colors','product_sizes','reviews'));
    }

    public function productByCategory($id)
    {  
        $category = Category::find($id);
        $products = Product::where('category_id', $id)->get();

        return view('front_end.pages.show_product_category',compact('products','category'));
    }
}
