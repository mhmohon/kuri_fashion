<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Customer;
use App\Address;
use App\Order;

class CustomerBackendController extends Controller
{
    public function index()
    {
        
        $customers = Customer::latest()->get();

        return view ('back_end.pages.customer.view_customer', compact('customers'));
    }

    public function view($id)
    {
        
        $user = User::find($id);
        $customer_orders = Order::where('user_id', $id)->get();
        $total_order_delivery = Order::where('user_id', $id)
                                ->select('user_id', DB::raw('count(*) as total'))
                                ->where('status', 'delivered')
                                ->groupBy('user_id')
                                ->get();

        //dd($total_order_delivery);
        
        return view ('back_end.pages.customer.view_customer_detail', compact('user','customer_orders'));
    }

    public function edit($id)
    {
        
        $user = User::find($id);
        $addresses = Address::where('user_id', $id)->get();
        return view ('back_end.pages.customer.edit_customer', compact('user','addresses'));
    }
    public function update(Request $request,$id)
    {
        $this->validate(request(),[
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'user_type' => 'required',
            'user_status' => 'required',
            'customer_phone' => 'required|string|min:11',
            'customer_email' => 'required|string|email|unique:users,email,'.$id,

        ]);

        $user = User::find($id)->update([
            'email' => request('customer_email'),
            'user_status' => request('user_status'),
        ]);

        $customer = Customer::where('user_id', $id)->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'phone' => request('customer_phone'),
            'user_type' => request('user_type'),
            'user_id' => $id,
        ]);

        if($user && $customer){
            
            return redirect()->back()->with('msgsuccess','Profile updated successfully');
        }
    }

    public function add_address($id)
    {
        $user = User::find($id);
        return view ('back_end.pages.customer.add_address',compact('user'));
    }

    public function add_address_store(Request $request, $id)
    {
        $validate = $this->validate(request(),[

            'full_address' => 'required'

        ]);

        $full_address = request('full_address');
        $get_street = explode(',',trim($full_address))[0];
        $street_address = request('route');
        
        //check if user street address is get.
        if($street_address == null){

            $address = Address::create([
                'house_no' => request('house_no'),
                'street_address' => request('street_address'),
                'route' => $get_street,  
                'city' => request('locality'),
                'state' => request('state'),
                'country' => request('country'),
                'user_id' => $id,
            ]);

        }elseif($get_street != $street_address){

            $address = Address::create([
                'house_no' => request('house_no'),
                'street_address' => $get_street,
                'route' => request('route'),  
                'city' => request('locality'),
                'state' => request('state'),
                'country' => request('country'),
                'user_id' => $id,
            ]);
        }else{
            $address = Address::create([
                'house_no' => request('house_no'),
                'street_address' => request('street_address'),
                'route' => request('route'),  
                'city' => request('locality'),
                'state' => request('state'),
                'country' => request('country'),
                'user_id' => $id,
            ]);
        } 
        return redirect()->route('customerEdit',$id)->withMsgsuccess('Address Added successfully');
    }

    public function edit_address($address_id)
    {
        $address = Address::find($address_id);
        return view ('back_end.pages.customer.edit_address',compact('address'));
    }
    //update customer existing address
    public function update_address(Request $request, $address_id)
    {   
        
        $addressUser = Address::find($address_id);
        $validate = $this->validate(request(),[

            'full_address' => 'required'

        ]);

        $full_address = request('full_address');
        $get_street = explode(',',trim($full_address))[0];
        $route = request('route');
        
        //check if user street address is get.
        if($route == null){

            $address = Address::find($address_id)->update([
                'house_no' => request('house_no'),
                'street_address' => request('street_address'),
                'route' => $get_street,  
                'city' => request('locality'),
                'state' => request('state'),
                'country' => request('country'),
                
            ]);

        }elseif($get_street != $route){

            $address = Address::find($address_id)->update([
                'house_no' => request('house_no'),
                'street_address' => $get_street,
                'route' => request('route'),  
                'city' => request('locality'),
                'state' => request('state'),
                'country' => request('country'),
                
            ]);
        }else{
            $address = Address::find($address_id)->update([
                'house_no' => request('house_no'),
                'street_address' => request('street_address'),
                'route' => request('route'),  
                'city' => request('locality'),
                'state' => request('state'),
                'country' => request('country'),
                
            ]);
        }
        return redirect()->route('customerEdit',$addressUser->user_id)->withMsgsuccess('Address Updated successfully');
    }
    //Delete customer existing address
    public function delete_address($address_id)
    {
        $address = Address::find($address_id);
        $orders = Order::where('address_id', $address_id)->get();
        foreach ($orders as $order) {
            if ($order->status == 'delivered') {

                Address::find($address_id)->delete();
                return redirect()->back()->withMsgsuccess('Address deleted successfully');
            } else {
               return redirect()->back()->withMsginfo('This address is used in any orders, which is not delivered yet');
            }
            
        }

        Address::find($address_id)->delete();
        return redirect()->back()->withMsgsuccess('Address deleted successfully');
    }
    
}
