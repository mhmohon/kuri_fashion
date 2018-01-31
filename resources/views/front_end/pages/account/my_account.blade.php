@extends ('front_end.layouts.master')

@section ('page_title','My Account')

@section ('main_content')
	
<div class="container">
	<ul class="breadcrumb">
		<li><a href="/"><i class="fa fa-home"></i></a></li>
		<li><a href="#"> Account</a></li>
	</ul>
	<div class="row">
	    <div id="content" class="col-md-10">
	    	<div class="col-md-5">
	        	<h2>My Account</h2>
		        <ul class="list-unstyled">
		            <li>
		            	
		                <a href="{{ route('accountInfoEdit', Auth::user()->id) }}">Edit your account information</a>
		            </li>
		            <li>
		                <a href="{{ route('accountPasswordEdit', Auth::user()->id) }}">Change your password</a>
		            </li>
		            <li>
		                <a href="{{ route('accountAddressShow', Auth::user()->id) }}">Modify your address book entries</a>
		            </li>
		            <li>
		                <a href="{{ route('wishlistIndex') }}">Modify your wish list</a>
		            </li>
		        </ul>
	        </div>
	        <div class="col-md-5">
		        <h2>My Orders</h2>
		        <ul class="list-unstyled">
		            <li>
		                <a href="{{ route('accountOrderShow', Auth::user()->id) }}">View your order history</a>
		            </li>
		            <li>
		                <a href="{{ route('accountAddressShow', Auth::user()->id) }}">Downloads</a>
		            </li>
		            
		            <li>
		                <a href="{{ route('home') }}">View your return requests</a>
		            </li>
		            
		            <li>
		                <a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=account/recurring">Recurring payments</a>
		            </li>
		        </ul>
	        </div>
	    </div>

	</div>

		
</div>



@endsection
