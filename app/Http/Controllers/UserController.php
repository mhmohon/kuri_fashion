<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Customer;
use App\Address;
use App\Order;
class UserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    //For Address Show.
    public function show_address($id)
    {
        $addresss = Address::where('user_id', $id)->get();
        
        if($id == Auth::user()->id){
            return view ('front_end.pages.account.account_address_show',compact('addresss'));
        }
        return back()->withMsgerror('You cannot access other user information');
    }

    //For My all Order Show.
    public function show_order($id)
    {

        $orders = Order::where('user_id', $id)->get();
        
        if($id == Auth::user()->id){
            return view ('front_end.pages.account.order_all_show',compact('orders','orderItems'));
        }
        return back()->withMsgerror('You cannot access other user information');
    }

    //For My single Order Show.
    public function info_order($id)
    {

        $order = Order::find($id);
        return view ('front_end.pages.account.order_single_show',compact('order'));
      
        //return back()->withMsgerror('You cannot access other user information');
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        if($id == Auth::user()->id){
            return view ('front_end.pages.account.account_info_edit',compact('user'));
        }
        return back()->withMsgerror('You cannot access other user information');
    }

    //For Password Edit.
    public function edit_password($id)
    {

        if($id == Auth::user()->id){
            return view ('front_end.pages.account.account_pass_edit');
        }
        return back()->withMsgerror('You cannot access other user information');
    }

    //For Address Edit.
    public function edit_address($id)
    {
        $address = Address::find($id);

        
        return view ('front_end.pages.account.account_address_edit',compact('address'));
        
        //return back()->withMsgerror('You cannot access other user information');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_info(Request $request, $id)
    {
        $this->validate(request(),[
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,

        ]);

        $user = User::find($id)->update([
            'email' => request('email'),
        ]);

        $customer = Customer::where('user_id', $id)->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'phone' => request('phone'),
            'user_id' => $id,
        ]);

        if($user && $customer){
            
            return redirect()->route('myAccount')->with('msgsuccess','Profile updated successfully');
        }
    }

    //For Password Update.
    public function update_password(Request $request, $id)
    {
        $this->validate(request(),[

            'password' => 'required|min:6|confirmed'

        ]);

        $user = User::find($id)->update([
            'password' => bcrypt(request('password')),
        ]);

        
            
        return redirect()->route('myAccount')->with('msgsuccess','Password updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
