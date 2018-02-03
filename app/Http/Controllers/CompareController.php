<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CompareController extends Controller
{
    
    public function index()
    {
        $compare_items = Cart::instance('compare')->content();
        return view('front_end.pages.show_compare', compact('compare_items'));
    }

    public function add_to_compare(Request $request, $product_id)
    {
        
        $product = Product::find($product_id);
        //dd($product);
        $data['id'] = $product_id;
        $data['name'] = $product->pro_name;
        $data['qty'] = '1';
        $data['price'] = $product->productDetail->pro_price;
        $data['options']['image'] = $product->productDetail->pro_image;
        $data['options']['sizes'] = $product->productDetail->pro_size;
        $data['options']['colors'] = $product->productDetail->pro_other_colors;
        $data['options']['weight'] = $product->productDetail->pro_weight;
        $data['options']['avg_rating'] = $product->avg_rating;
        $data['options']['rating_count'] = $product->rating_count;
        $data['options']['stock'] = $product->inventory->quantity_in_stock;
        //check if same product is store in compare.
        $cart_items = Cart::instance('compare')->content();
        //dd($cart_items->count());
        if($cart_items->count() > 3){

            return back()->withMsgerror("Maximum products to compare is 4. You need to first removed a product from product <a href='/show/product-comparison'>comparison list</a>");
        }
        foreach ($cart_items as $cart_item) {
        	
        	if($cart_item->id == $product_id){
        		//Cart::instance('compare')->destroy();
        		return back()->withMsginfo($product->pro_name. " is already added to your <a href='/show/product-comparison'>product comparison</a>");
        	}
        }
        
        Cart::instance('compare')->add($data);
        return back()->withMsgsuccess("You have successfully added ".$product->pro_name." to your <a href='/show/product-comparison'>product comparison</a>");
    }

    public function delete_to_compare($id)
    {
        Cart::instance('compare')->remove($id);
        return back()->withMsgsuccess('You have modified your product comparison successfully');
    }
}
