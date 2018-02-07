<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Wishlist;

class WishlistController extends Controller
{
    
    public function index()
    {
        
        $wishlist_items = Wishlist::latest()->get();
        return view('front_end.pages.show_wishlist', compact('wishlist_items'));
    }

    public function add_to_wishlist(Request $request, $product_id)
    {
        
        //$product_id = Product::find($product_id);
        $user_id = \Auth::user()->id;
        
        //dd($product_id, $user_id);
        //check if same product is store in wishlist.
        $wishlist_items = Wishlist::latest()->get();
        foreach ($wishlist_items as $wishlist_item) {
        	
        	if($wishlist_item->product_id == $product_id && $wishlist_item->user_id == $user_id){
        		
        		return back()->withMsginfo(" This item already added to your <a href='/show-wishlist'>Wishlist</a>");

        	}	
        }
        
        Wishlist::create([
            'user_id' => $user_id,
            'product_id' => $product_id,  
            
        ]);
        return back()->withMsgsuccess("This item added to your <a href='/show-wishlist'>Wishlist</a>");

    }

    public function delete_to_wishlist($id)
    {
        Wishlist::find($id)->delete();
        return back()->withMsgsuccess('Your Wishlist Item Successfully Deleted');
    }
}
