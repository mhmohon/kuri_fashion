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
    	$cart_items = Cart::content(); //get all cart item.
        return view('front_end.pages.checkout',compact('addresses','cart_items'));
    }

    public function store(Request $request)
    {
        

        $id = \Auth::user()->id;
        $customer_id = \Auth::user()->customer->id;
        $mytime = \Carbon\Carbon::now();
        $addressChecked = $_POST['payment_address'];
        
        $total = str_replace(',', '', $request->get('total_cost'));
        
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

            $orderItem = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => request('product_id'),  
                'product_color' => request('product_color'),  
                'product_size' => request('product_size'),  
                'quantity' => request('quantity'),     
                'total_price' => $total,             
            ]);
            dd($order,$orderItem,$customer);
      
        return view('front_end.pages.checkout');
    }
}
