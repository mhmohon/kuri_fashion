<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;
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
        
        return view ('back_end.pages.customer.view_customer_detail', compact('user','customer_orders'));
    }
    
}
