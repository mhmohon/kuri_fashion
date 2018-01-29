<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class WishlistController extends Controller
{
    
    public function index()
    {
        $wishlist_items = Cart::instance('wishlist')->content();
        return view('front_end.pages.show_wishlist', compact('wishlist_items'));
    }

    public function add_to_wishlist(Request $request, $product_id)
    {
        
        $product = Product::find($product_id);
        $data['id'] = $product_id;
        $data['name'] = $product->pro_name;
        $data['qty'] = '1';
        $data['price'] = $product->productDetail->pro_price;
        $data['options']['image'] = $product->productDetail->pro_image;
        $data['options']['stock'] = $product->inventory->quantity_in_stock;
        //check if same product is store in wishlist.
        $cart_items = Cart::instance('wishlist')->content();
        foreach ($cart_items as $cart_item) {
        	
        	if($cart_item->id == $product_id){
        		//Cart::instance('wishlist')->destroy();
        		return back()->withMsginfo($product->pro_name. " already added to your <a href='/show-wishlist'>Wishlist</a>");

        	}	
        }
        
        Cart::instance('wishlist')->add($data);
        return back()->withMsgsuccess($product->pro_name." added to your <a href='/show-wishlist'>Wishlist</a>");

    }

    public function delete_to_wishlist($id)
    {
        Cart::instance('wishlist')->remove($id);
        return back()->withMsgsuccess('Your Wishlist Item Successfully Deleted');
    }
}
