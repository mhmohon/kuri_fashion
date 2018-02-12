<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class PageController extends Controller
{
    public function checkout_success()
    {
    	return view ('front_end.pages.checkout_success');
    }
    public function my_account()
    {
    	return view ('front_end.pages.account.my_account');
    }
    public function aboutUs()
    {
    	return view('front_end.pages.about_us');
    }
    public function contactUs()
    {
    	return view('front_end.pages.contact_us');
    }
    public function sendMail(Request $request)
    {
    	$validate = $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'enquiry' => 'required|min:3',
        ]);
        $data = array(
        	'name' => request('name'),
        	'email' => request('email'),
        	'bodyMessage' => request('enquiry'),
        );
        Mail::send('front_end.layouts.email.contact',$data,function($message) use($data){
        	$message->from($data['email']);
        	$message->to('mohon.diit33@gmail.com');

        });
        return redirect()->back()->with('msgsuccess','Your message send successfully');
    }
}
