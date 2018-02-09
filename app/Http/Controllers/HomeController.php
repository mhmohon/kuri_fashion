<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductDetail;
use App\Category;
use App\Review;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('front_end.pages.home');
    }

    public function allProductDetails()
    {  
        $categories = Category::where('publication_status',1)->get();
            
        $productDetails = ProductDetail::where('pro_status',1)->paginate(10);
        
        return view('front_end.pages.show_all_product', compact('productDetails'));
    }

    public function sort_order($short, $orderby)
    {
        $productDetails = ProductDetail::where('pro_status',1)
                                        ->orderBy($short,$orderby)
                                        ->paginate(10);
                                        
        return view('front_end.pages.show_all_product', compact('productDetails'));
    }

    public function sort_price($min, $max)
    {  
        //dd($min, $max);
        $productDetails = ProductDetail::where('pro_status',1)
                                        ->whereBetween('pro_price', [$min, $max])
                                        ->paginate(10);

        return view('front_end.pages.show_all_product', compact('productDetails'));
    }
    public function searchProduct(Request $request)
    {
        $input = $request->input('search_value');
        $products = Product::where('pro_name','Like','%'.$input.'%')->get();
        //dd($products);
        return view('front_end.pages.show_product_category',compact('products','input'));
    }

    public function singleProductDetails($id)
    {
        
        //Get All the latest product.
        $reviews = Review::where('product_id', $id)
                            ->where('publication_status',1)
                            ->get();

        $product = Product::find($id);

        $product_colors = explode(",", $product->productDetail->pro_other_colors);

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
