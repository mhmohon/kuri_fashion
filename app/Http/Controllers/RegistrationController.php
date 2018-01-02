<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    //
    public function index()
    {
    	return view ('front_end.pages.account.register');
    }

    public function store()
    {
    	//validate the form
    	$this->validate(request(), [

    		'first_name' => 'required|min:2',
    		'last_name' => 'required|min:2',
    		'email' => 'required|email',
    		'phone' => 'required',
    		'password' => 'required|min:3|confirmed'

    	]);

    	$user = User::Create([
    		'first_name' => request('first_name'),
    		'last_name' => request('last_name'),
    		'email' => request('email'), 
    		'phone' => request('phone'),  		
    		'password' => bcrypt(request('password'))
    		
    	]);

    	if($user){
    		auth()->login($user);
    		return redirect('/dashboard')->with('msgsuccess','User Created Sucessfully');
    	}
    }
}
