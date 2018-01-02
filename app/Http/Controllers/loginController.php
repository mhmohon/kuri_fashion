<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class loginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }
    //
    public function index()
    {
        return view ('front_end.pages.login');
    }
    //Login to page
    public function store()
    {
        //Check user credential and login them
        if(! auth()->attempt(request (['email','password']))){

            return back()->withErrors([
                'message' => 'please check your credential'
            ]);
        }
        return redirect('/dashboard');
    }
    //code for logout
    public function destroy()
    {
        auth()->logout();

        return redirect('/register');

    }
}
