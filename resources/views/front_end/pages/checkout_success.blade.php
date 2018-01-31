@extends ('front_end.layouts.master')

@section ('page_title','Your order has been placed!')

@section ('main_content')
	
<div class="container">
	<ul class="breadcrumb">
		<li><a href="/"><i class="fa fa-home"></i></a></li>
		<li><a href="/show-cart"> Shopping Cart</a></li>
		<li><a href="/show-cart"> Checkout</a></li>
		<li><a href="#"> Success</a></li>
	</ul>
	<div class="row">
	    <div id="content" class="col-sm-12">
	        <h1>Your order has been placed!</h1>
	        <p>Your order has been successfully processed!</p>
	        <p>You can view your order history by going to the
	            <a href="#"><strong>my account</strong></a> page and by clicking on
	            <a href="#"><strong>history</strong></a>.</p>
	        <p>If your purchase has an associated download, you can go to the account
	            <a href="#"><strong>downloads</strong></a> page to view them.</p>
	        <p>Please direct any questions you have to the
	            <a href="#"><strong>store owner</strong>s</a>.</p>
	        <p>Thanks for shopping with us online!</p>
	        <div class="buttons">
	            <div class="pull-right">
	                <a href="{{ route('home') }}" class="btn btn-primary">Continue</a>
	            </div>
	        </div>
	    </div>
	</div>
</div>



@endsection
