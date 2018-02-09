<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\Customer;
use App\Order;
use App\OrderItem;
use App\Inventory;
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
        //dd($addresses, $id);
    	$cart_items = Cart::content(); //get all shopping cart item.
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

        $user_id = \Auth::user()->id;
        //dd($user_id);
        $customer_id = \Auth::user()->customer->id;
        $mytime = \Carbon\Carbon::now();
        $addressChecked = $_POST['payment_address'];

            
        $this->saveCartInfo($request, $user_id, $customer_id, $mytime, $addressChecked);
      
        return redirect()->route('checkoutSuccess');
    }

    public function saveCartInfo(Request $request, $user_id, $customer_id, $mytime, $addressChecked)
    {
        $customer = Customer::find($customer_id)->update([

            'first_name' => request ('first_name'),
            'last_name' => request ('last_name'),
            'phone' => request ('mobile'),

        ]);

        //check if user checkd for new address.
        if($addressChecked == 'new'){
            
            $full_address = request('full_address');
            $get_street = explode(',',trim($full_address))[0];
            $street_address = request('route');
            
            //check if user street address is get.
            if($street_address == null){

                $address = Address::create([
                    'house_no' => request('new_house_address'),
                    'street_address' => request('street_address'),
                    'route' => $get_street,  
                    'city' => request('locality'),
                    'state' => request('state'),
                    'country' => request('country'),
                    'user_id' => $user_id,
                ]);
            }elseif($get_street != $street_address){

                $address = Address::create([
                    'house_no' => request('new_house_address'),
                    'street_address' => $get_street,
                    'route' => request('route'),  
                    'city' => request('locality'),
                    'state' => request('state'),
                    'country' => request('country'),
                    'user_id' => $user_id,
                ]);
            }else{
                $address = Address::create([
                    'house_no' => request('new_house_address'),
                    'street_address' => request('street_address'),
                    'route' => request('route'),  
                    'city' => request('locality'),
                    'state' => request('state'),
                    'country' => request('country'),
                    'user_id' => $user_id,
                ]);
            }
            $order = Order::create([
                'user_id' => $user_id,
                'payment_id' => request('payment_method'),  
                'address_id' => $address->id,  
                'order_description' => request('comment'),     
                'order_date' => $mytime->toDateString(),             
            ]);

        }elseif($addressChecked == 'my_location'){ // if user checkd for use my current address.

            $address = Address::create([
                'street_address' => request('street_address'),
                'route' => request('route'),  
                'city' => request('locality'),
                'state' => request('state'),
                'country' => request('country'),
                'latitude' => request('latitude'),
                'longitude' => request('longitude'),
                'user_id' => $user_id,
            ]);

            $order = Order::create([
                'user_id' => $user_id,
                'payment_id' => request('payment_method'),  
                'address_id' => $address->id,  
                'order_description' => request('comment'),     
                'order_date' => $mytime->toDateString(),             
            ]);
        }else{
            $order = Order::create([
                'user_id' => $user_id,
                'payment_id' => request('payment_method'),  
                'address_id' => request('payment_address_id'),  
                'order_description' => request('comment'),     
                'order_date' => $mytime->toDateString(),             
            ]);
        }
        //Get all the cart content.
        $cart_items = Cart::content();

        foreach($cart_items as $cart_item){

            $product_id = $cart_item->id;
            $order_qty = $cart_item->qty;
            $exist_qty = Inventory::find($product_id)->quantity_in_stock;
            $new_qty = $exist_qty - $order_qty;
            
            $orderItem = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cart_item->id,  
                'product_color' => $cart_item->options->color,  
                'product_size' => $cart_item->options->size,  
                'quantity' => $cart_item->qty,     
                'total_price' => $cart_item->total,             
            ]);
            $updateInventory = Inventory::find($product_id)->update([
                'quantity_in_stock' => $new_qty,
            ]);
        }

        //if order item store in database then distroy shopping cart.
        if($customer && $order && $orderItem ){
            Cart::destroy();
            return true;
        }
    }
}
