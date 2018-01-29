<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart_items = Cart::instance('shopping')->content();
        //dd($cart_items);
        return view('front_end.pages.show_cart', compact('cart_items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_to_cart(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        $data['id'] = $product_id;
        $data['name'] = $product->pro_name;
        $data['price'] = $product->productDetail->pro_price;
        $data['qty'] = request('quantity');
        $data['options']['image'] = $product->productDetail->pro_image;
        $data['options']['size'] = request('product_size');
        $data['options']['color'] = request('product_color');

        
        //Cart::destroy();
        Cart::instance('shopping')->add($data);
        return back()->withMsgsuccess($product->pro_name. ' added to shopping cart');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_to_cart(Request $request, $id)
    {
        $new_qty = request('quantity');
        Cart::instance('shopping')->update($id, $new_qty);
        return redirect('/show-cart')->withMsgsuccess('Product Cart Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_to_cart($id)
    {
        Cart::instance('shopping')->remove($id);
        return back()->withMsgsuccess('Product Cart Successfully Deleted');
    }
}
