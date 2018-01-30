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
									@if(checkPermission(['admin','superAdmin','staff']))
									  <input type="text" name="first_name" value="{{ Auth::user()->staff->first_name }}" placeholder="First Name" id="input-firstname" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12" data-validation-error-msg="First name has to be an alphanumeric value (3-12 chars)">
									@else
									  <input type="text" name="first_name" value="{{ Auth::user()->customer->first_name }}" placeholder="First Name" id="input-firstname" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12" data-validation-error-msg="First name has to be an alphanumeric value (3-12 chars)">
									@endif
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-4 control-label" for="input-lastname">Last Name</label>
									<div class="col-sm-8">
									@if(checkPermission(['admin','superAdmin','staff']))
									  <input type="text" name="last_name" value="{{ Auth::user()->staff->last_name }}" placeholder="Last Name" id="input-lastname" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12" data-validation-error-msg="Last name has to be an alphanumeric value (3-12 chars)">
									@else
									  <input type="text" name="last_name" value="{{ Auth::user()->customer->last_name }}" placeholder="Last Name" id="input-lastname" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12" data-validation-error-msg="Last name has to be an alphanumeric value (3-12 chars)">
									@endif
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-4 control-label" for="input-mobile">Mobile</label>
									<div class="col-sm-8">
									@if(checkPermission(['admin','superAdmin','staff']))
									  <input type="text" name="mobile" value="{{ Auth::user()->staff->phone }}" placeholder="First Name" id="input-mobile" class="form-control" data-validation="length number" data-validation-length="max11">
									@else
									  <input type="text" name="mobile" value="{{ Auth::user()->customer->phone }}" placeholder="First Name" id="input-mobile" class="form-control" data-validation="length number" data-validation-length="max11">
									@endif
									</div>
								</div>
							  </div>
						</div>
					
						<div class="checkout-content checkout-payment-form">
						  <h2 class="secondary-title"><i class="fa fa-location-arrow"></i>Delivery Address </h2>
						  <div class="box-inner">
							  
								<div class="radio radio-info row_bottom">
									<input type="radio" name="payment_address" checked value="existing" id="existing" onclick="hidediv()">
		                                            
		                            <label for="existing">I want to use an existing address</label>
								</div>

								<div id="payment-existing">
									<select name="payment_address_id" class="form-control">

										@if($addresses->count())
		                                    @foreach($addresses as $address)
		                                    	<option value="{{ $address->id }}">
		                                    		{{ $address->street_address.', '.$address->region.', '. $address->city}}</option>
		                                    @endforeach
	                                    @else
	                                    	<option value="">You have no saved address</option>
	                                    @endif
   
                                    </select>       
								</div>
							  
								<div class="radio radio-info row_bottom">
									<input type="radio" name="payment_address" value="new" id="new" onclick="showdiv()">		                                            
		                            <label for="new"> I want to use a new address </label>
								</div>
								<div id="payment-new">
									
									<div class="form-group">
									  <input type="text" name="payment_address_1" value="" placeholder="Street Address" id="input-payment-address-1" class="form-control">
									</div>
									
									<div class="form-group">
										<select data-msg-required="Required field" class="form-control" name="payment_country_id" id="division">
										  <option value="" selected="selected">Please select</option>
										</select>
									</div>
									<div class="form-group">
										
										<select data-msg-required="Required field" class="form-control" data-state-label="Loading..." data-empty-label="Please select" name="payment_zone_id" id="region">

											<option value="" selected="selected">Please select</option>
										</select>
									</div>
								</div>
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
									<td class="text-right">৳{{ Cart::instance('shopping')->subtotal() }}</td>
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
				                		$subTotal = Cart::instance('shopping')->subtotal();
				                		$subTotal = str_replace(',', '', $subTotal);
				                		$total = number_format($subTotal + $shippingCost);
				                	@endphp
									<td colspan="4" class="text-left">Total:</td>
									<td class="text-right">৳ {{ $total }}</td>
								  </tr>
								</tfoot>
							  </table>
							  <input type="hidden" name="total_cost" value="{{ $total }}">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>   
        window.onload = function() {
            document.getElementById('payment-new').style.display = 'none';
        }
        function hidediv(){
            document.getElementById('payment-new').style.display = 'none';
            document.getElementById('payment-existing').style.display = 'block';
        }
        function showdiv(){
            document.getElementById('payment-new').style.display = 'block';
            document.getElementById('payment-existing').style.display = 'none';
        }
        $.validate({
		    modules : 'location, date, security, file', 
		});

    </script>

@endsection

