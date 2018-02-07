@extends ('front_end.layouts.master')

@section ('page_title','Show Cart')

@section ('main_content')
	
<div class="container">
	<ul class="breadcrumb">
		<li><a href="/"><i class="fa fa-home"></i></a></li>
		<li><a href="/show-cart"> Show Cart</a></li>
	</ul>

	@if(Cart::count())
	<div class="row">
	    <div id="content" class="col-sm-12">
	        <h1>Shopping Cart </h1>
	        
	            <div class="table-responsive">
	                <table class="table table-bordered">
	                    <thead>
	                        <tr>
	                            <td class="text-center">Image</td>
	                            <td class="text-left">Product Name</td>
	                            <td class="text-left">Model</td>
	                            <td class="text-left">Quantity</td>
	                            <td class="text-left">Unit Price</td>
	                            <td class="text-right">Total Price</td>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    @foreach($cart_items as $cart_item)
	                        <tr>
	                            <td class="text-center">
	                                <a href="{{ route('viewSingleProduct',$cart_item->id) }}"><img src="{{ asset('images/product/'.$cart_item->options->image)}}" alt="{{ $cart_item->name }}" title="{{ $cart_item->name }}" class="img-thumbnail" height="90" width="120"></a>
	                            </td>
	                            <td class="text-left"><a href="{{ route('viewSingleProduct',$cart_item->id) }}">{{ $cart_item->name }}</a>
	                                <br>     
	                                <small>Color: {{ $cart_item->options->color }}</small>
	                                <br>	             
	                                <small>Size: {{ $cart_item->options->size }}</small>
	                                <br>
	                                <small>Date: {{ $cart_item->options->order_date }} </small>
	                                
	                            </td>
	                            <td class="text-left">p2</td>
	                            <td class="text-left">
	                                {!! Form::open(['route'=>['cartUpdate',$cart_item->rowId],'name'=>'updateToCart']) !!}
	                                <div class="input-group btn-block txt_color" style="max-width: 200px;">
	                                    <input type="number" name="quantity" value="{{ $cart_item->qty }}" size="1" class="form-control" style="min-width: 50px;">
	                                    <span class="input-group-btn">
					                    <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="fa fa-refresh"></i>
					                    </button>

					                    <a href="{{ route('cartDelete', $cart_item->rowId) }}" data-toggle="tooltip" class="btn btn-danger"  data-original-title="Remove"><i class="fa fa-times-circle"></i></a>
					                    </span>
					                </div>
					                {!! Form::close() !!}
	                            </td>
	                            <td class="text-left">BDT {{ number_format($cart_item->price) }}</td>
	                            <td class="text-right">BDT {{  number_format($cart_item->total) }}</td>
	                        </tr>
	                    @endforeach
	                    </tbody>
	                </table>
	            </div>
	       

	    </div>
	</div>

	<br>
	<div class="row">
	    <div class="col-sm-4 col-sm-offset-8">
	        <table class="table table-bordered">
	            <tbody>
	                <tr>
	                    <td class="text-right"><strong>Sub-Total:</strong></td>
	                    <td class="text-right">BDT {{ Cart::subtotal() }}</td>
	                </tr>
	                <tr>
	                	@php 
	                		$shippingCost = 100;
	                	@endphp
	                    <td class="text-right"><strong>Shipping Cost:</strong></td>
	                    <td class="text-right">BDT {{ $shippingCost }}</td>
	                </tr>
	                <tr>
	                	@php
	                		$subTotal = Cart::subtotal();
	                		$subTotal = str_replace(',', '', $subTotal);
	                		$total = number_format($subTotal + $shippingCost);
	                	@endphp
	                    <td class="text-right"><strong>Total:</strong></td>
	                    <td class="text-right">BDT {{ $total }}</td>
	                </tr>
	            </tbody>
	        </table>
	    </div>
	</div>
	
	<div class="buttons clearfix">
	    <div class="pull-left"><a href="/home" class="btn btn-default">Continue Shopping</a></div>
	    <div class="pull-right"><a href="{{ url('/checkout') }}" class="btn btn-primary">Checkout</a></div>
	</div>
	@else

	<div class="row">
		<div id="content" class="bg-page-404 col-sm-12">
			<div class="text-center">
				
				<h1>Shopping Cart</h1>
				<p>Your shopping cart is empty!</p>
				<a href="{{ url('/home') }}" class="btn btn-primary" title="Continue">Continue</a>
			</div>
		
		 </div>
	</div>
	@endif

</div>



@endsection
