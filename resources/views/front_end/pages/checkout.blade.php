@extends ('front_end.layouts.master')

@section ('page_title','Checkout')

@section ('main_content')
	
<div class="container">
	<ul class="breadcrumb">
		<li><a href="/"><i class="fa fa-home"></i></a></li>
		<li><a href="/show-cart">Shopping Cart</a></li>
		<li><a href="/checkout"> Checkout</a></li>
	</ul>

	    
<!-- main content -->
	<div class="row">
		<div id="content" class="col-sm-12">
		
			<div class="so-onepagecheckout layout1 is_customer">
				  <div class="col-right col-sm-8 col-xs-12">
					<div class="row">
					
					{!! Form::open(['route'=>['checkoutStore'],'class'=>'form-horizontal form-payment','name'=>'checkout','id'=>'checkoutsubmit']) !!}

					  <section class="section-left  col-lg-6 col-sm-12">
						<div class="checkout-content checkout-shipping-methods">
							  <h2 class="secondary-title"><i class="fa fa-user"></i>Personal Information</h2>
							  <div class="box-inner">
								<div class="form-group required">
									<label class="col-sm-4 control-label" for="input-firstname">First Name</label>
									<div class="col-sm-8">
									
									  <input type="text" name="first_name" value="{{ Auth::user()->customer->first_name }}" placeholder="First Name" id="input-firstname" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12" data-validation-error-msg="First name has to be an alphanumeric value (3-12 chars)">
									
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-4 control-label" for="input-lastname">Last Name</label>
									<div class="col-sm-8">
									
									  <input type="text" name="last_name" value="{{ Auth::user()->customer->last_name }}" placeholder="Last Name" id="input-lastname" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12" data-validation-error-msg="Last name has to be an alphanumeric value (3-12 chars)">
									
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-4 control-label" for="input-mobile">Mobile</label>
									<div class="col-sm-8">
									
									  <input type="text" name="mobile" value="{{ Auth::user()->customer->phone }}" placeholder="First Name" id="input-mobile" class="form-control" data-validation="length number" data-validation-length="max11">
									
									</div>
								</div>
							  </div>
						</div>
					
						<div class="checkout-content checkout-payment-form">
						  <h2 class="secondary-title"><i class="fa fa-location-arrow"></i>Delivery Address </h2>
						  <div class="box-inner">
							  
								<div class="radio radio-info row_bottom">
									<input type="radio" name="payment_address" checked value="existing" id="existing">
		                                            
		                            <label for="existing">I want to use an existing address</label>
								</div>

								<div id="payment-existing">
									<select name="payment_address_id" data-validation="required" class="form-control">

										@if($addresses->count())
		                                    @foreach($addresses as $address)
		                                    	@if($address->street_address)
		                                    	<option value="{{ $address->id }}">
		                                    		{{ $address->street_address.', '.$address->route.', '. $address->city}}</option>
		                                    	@else
		                                    		<option value="{{ $address->id }}">
		                                    		{{ $address->route.', '. $address->city}}</option>
		                                    	@endif
		                                    @endforeach
	                                    @else
	                                    	<option value="">You have no saved address</option>
	                                    @endif
   
                                    </select>       
								</div>
							  
								<div class="radio radio-info row_bottom">
									<input type="radio" name="payment_address" value="new" id="new_address">		                                            
		                            <label for="new_address"> I want to use a new address </label>
								</div>
								<div id="payment-new">
									
									<div class="form-group">
									  <input type="text" name="new_house_address" placeholder="House No." data-validation="required" id="input-payment-address-1" class="form-control">
									</div>
									
									<div class="form-group">
										<input id="autocomplete" placeholder="Enter your full address" onFocus="geolocate()" name="full_address" type="text" class="form-control"></input>
									</div>
									
								</div>
								<!-- Use my location -->
								<div class="radio radio-info row_bottom">
									<input type="radio" name="payment_address" id="my_location" value="my_location" onclick="getMyLocation()">		                                            
		                            <label for="my_location"> Use my current Location </label>
								</div>
								<div id="my-address">
									<div class="" id="map" style="width:350px; height: 250px;">
										
									</div>
									<div style="padding-top: 10px;">
										<input id="my_full_address" type="text" class="form-control"></input>
									</div>
									
								</div>
								
								<!-- /Use my location -->

								<!-- Address Hidden Field -->

								<input type="hidden" id="street_address" name="street_address"></input>
							    <input type="hidden" id="route" name="route"></input>
							     
							      
							   <input type="hidden" id="locality" name="locality"></input>
							    <input type="hidden" id="administrative_area_level_1" name="state"></input>
							        
							    <input type="hidden" id="postal_code" name="postal_code"></input>
							    <input type="hidden" id="country" name="country"></input>
								
								<!-- Get Client latitude and longitude -->
							    <input type="hidden" id="latitude" name="latitude"></input>
							    <input type="hidden" id="longitude" name="longitude"></input>
									      
									    
								<!-- /Address Hidden Field -->
						  </div>
						</div>
						                        	                        		
						<div class="ship-payment">
							
							<div class="checkout-content checkout-payment-methods">
							  <h2 class="secondary-title"><i class="fa fa-credit-card"></i>Payment Method</h2>
							  <div class="box-inner">
							    
								
								<div class="radio radio-info">
									<input type="radio" name="payment_method" value="1" id="cod" data-validation="required" data-validation-error-msg="You have to select payment method">
													
									<label for="cod"> Cash On Delivery   </label>
									@if ($errors->has('payment_method'))
		                                <span class="text-danger help-block">
		                                    <block>{{ $errors->first('payment_method') }}</block>
		                                </span>
		                            @endif
								</div>
							  </div>
							</div>
						</div>
					  </section>
					  <section class="section-right col-xs-12">
					  	
						<div class="checkout-content checkout-cart">
						  <h2 class="secondary-title"><i class="fa fa-shopping-cart"></i>Shopping Cart</h2>
						  <div class="box-inner">
							<div class="table-responsive checkout-product">
							  <table class="table table-bordered table-hover">
								<thead>
								  <tr>
									<th class="text-left name" colspan="2">Product Name</th>
									<th class="text-center quantity">Quantity</th>
									<th class="text-center price">Unit Price</th>
									<th class="text-right total">Total</th>
								  </tr>
								</thead>
								<tbody>
								@if($cart_items->count())
								<!-- Loop for show Cart Item -->
								@foreach($cart_items as $cart_item)

								  <tr>
									<td class="text-left name" colspan="2">
									  <a href="{{ route('viewSingleProduct',$cart_item->id) }}"><img src="{{ asset('images/product/'.$cart_item->options->image)}}" alt="{{ $cart_item->name }}" title="{{ $cart_item->name }}" class="img-thumbnail" height="80" width="80"></a>
									  <a href="{{ route('viewSingleProduct',$cart_item->id) }}">{{ $cart_item->name }}</a>
									  <br>     
	                                  <small>Color: {{ $cart_item->options->color }}</small>
	                                  <br>	             
	                                  <small>Size: {{ $cart_item->options->size }}</small>
									</td>

									<td class="text-left quantity">
									
									  <div class="input-group">
										<input type="text" disabled name="quantity" value="{{ $cart_item->qty }}" size="1" class="form-control">
										
									  </div>
									</td>
									<td class="text-right price">৳ {{ number_format($cart_item->price) }}</td>
									<td class="text-right total">৳ {{  number_format($cart_item->total) }}</td>
								  </tr>

								@endforeach
								@else
								  <tr>
								  	<td class="text-center no-product" colspan="5">
								  		There is no product
								  	</td>
								  </tr>
								@endif
									
								</tbody>
								<tfoot>
								  <tr>
									<td colspan="4" class="text-left">Sub-Total:</td>
									<td class="text-right">৳{{ Cart::subtotal() }}</td>
								  </tr>
								  <tr>
								  	@php 
				                		$shippingCost = 100;
				                	@endphp
									<td colspan="4" class="text-left">Shipping Cost:</td>
									<td class="text-right">৳{{ $shippingCost }}</td>
								  </tr>
								  <tr>
								  	@php
				                		$subTotal = Cart::subtotal();
				                		$subTotal = str_replace(',', '', $subTotal);
				                		$total = number_format($subTotal + $shippingCost);
				                	@endphp
									<td colspan="4" class="text-left">Total:</td>
									<td class="text-right">৳ {{ $total }}</td>
								  </tr>
								</tfoot>
							  </table>

							</div>
							
						  </div>
						</div>
						<div class="checkout-content confirm-section">
						  <h2 class="secondary-title"><i class="fa fa-comment"></i>Add Comments About Your Order</h2>
						  <div class="box-inner">
							<textarea name="comment" rows="8" placeholder="E.g. Call me for confirmed" class="form-control requried" data-validation="length" data-validation-length="3-200" data-validation-error-msg="Order Comment must be in (3-200 chars)"></textarea>

							@if ($errors->has('comment'))
                                <span class="text-danger help-block">
                                    <block>{{ $errors->first('comment') }}</block>
                                </span>
                            @endif	
						  </div>
						  
						  <div class="confirm-order">
							<button id="so-checkout-confirm-button" data-loading-text="Loading..." class="btn btn-primary button confirm-button">Confirm Order</button>
							<div class="pull-right">
					            <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
					        </div>
						  </div>                            
						</div>
					</section>

					{!! Form::close() !!}
					</div>
				</div>
			</div>

			
		</div>
    </div>
</div>

<!-- main content -->
	    
</div>

@endsection

@section('extra_scripts')
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>   
        window.onload = function() {
            document.getElementById('payment-new').style.display = 'none';
            document.getElementById('my-address').style.display = 'none';
            
        }
        
        $(document).ready(function(){
		    
		    $("#existing").click(function(){
		        $("#payment-existing").fadeIn("slow");
		        $("#my-address").hide(1000);
		        $("#payment-new").hide(1000);
		    });
		    $("#new_address").click(function(){
		        $("#payment-new").fadeIn("slow");
		        $("#my-address").hide(1000);
		        $("#payment-existing").hide(1000);
		    });
		    $("#my_location").click(function(){
		        $("#my-address").fadeIn("slow");
		        $("#payment-existing").hide(1000);
		        $("#payment-new").hide(1000);
		        getMyLocation();
		    });
		});
    </script>

    <script type="text/javascript" src="{{ asset('js/plugins/autcomplete.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/my_location.js') }}"></script>
	



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVW0FORtm8JXJZpN1pWnmzLiZD_UoyIYE&sensor=true"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVW0FORtm8JXJZpN1pWnmzLiZD_UoyIYE&libraries=places&callback=initAutocomplete"
        async defer></script>

@endsection


