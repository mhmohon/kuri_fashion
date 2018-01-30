<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\Customer;
use App\Order;
use App\OrderItem;
use Cart;


class CheckoutController extends Controller
{
    
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$id = \Auth::user()->id;
    	$addresses = Address::where('user_id', $id)->get();
    	$cart_items = Cart::instance('shopping')->content(); //get all shopping cart item.
        if($cart_items->count()){
            return view('front_end.pages.checkout',compact('addresses','cart_items'));
        }else{
            return redirect('/show-cart')->withMsgerror('You have empty shopping cart');
        }
        
    }

    public function store(Request $request)
    {
        
        //Validation
        $validate = $this->validate(request(),[

            'payment_method' => 'required',
            'comment' => 'required'

        ]);

        $id = \Auth::user()->id;
        $customer_id = \Auth::user()->customer->id;
        $mytime = \Carbon\Carbon::now();
        $addressChecked = $_POST['payment_address'];
        
        $total = str_replace(',', '', $request->get('total_cost'));
        
            
        $this->saveCartInfo($request, $id, $customer_id, $mytime, $addressChecked, $total);
      
        return redirect('/home')->withMsgsuccess('Category created successfully');
    }

    public function saveCartInfo(Request $request, $id, $customer_id, $mytime, $addressChecked,$total)
    {
        $customer = Customer::find($customer_id)->update([

            'first_name' => request ('first_name'),
            'last_name' => request ('last_name'),
            'phone' => request ('mobile'),

        ]);

        if($addressChecked == 'new'){

            $address = Address::create([
                'street_address' => request('payment_address_1'),
                'region' => request('payment_zone_id'),  
                'city' => request('payment_country_id'),
                'user_id' => $id,
            ]);

            $order = Order::create([
                'user_id' => $id,
                'payment_id' => request('payment_method'),  
                'address_id' => $address->id,  
                'order_description' => request('comment'),     
                'order_date' => $mytime->toDateString(),             
            ]);
        }else{
            $order = Order::create([
                'user_id' => $id,
                'payment_id' => request('payment_method'),  
                'address_id' => request('payment_address_id'),  
                'order_description' => request('comment'),     
                'order_date' => $mytime->toDateString(),             
            ]);
        }
        //Get all the cart content.
        $cart_items = Cart::instance('shopping')->content();

        foreach($cart_items as $cart_item){
            $orderItem = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cart_item->id,  
                'product_color' => $cart_item->options->color,  
                'product_size' => $cart_item->options->size,  
                'quantity' => $cart_item->qty,     
                'total_price' => $total,             
            ]);
        }

        //if order item store in database then distroy shopping cart.
        if($customer && $order && $orderItem ){
            Cart::instance('shopping')->destroy();
            return true;
        }
    }
}
