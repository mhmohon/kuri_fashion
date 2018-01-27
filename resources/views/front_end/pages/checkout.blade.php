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
					  <section class="section-left  col-lg-6 col-sm-12">
						<div class="checkout-content checkout-payment-form">
						  <h2 class="secondary-title"><i class="fa fa-user"></i>Billing Address </h2>
						  <div class="box-inner">
							<form class="form-horizontal form-payment">
							  
								<div class="radio radio-info row_bottom">
									<input type="radio" name="payment_address" checked value="existing" id="existing" onclick="hidediv()">
		                                            
		                            <label for="existing">I want to use an existing address</label>
								</div>
								<div id="payment-existing">
									<select name="payment_address_id" class="form-control">
									  <option value="15">Mosharrf hossain                                    , Motijheel, Dhaka                                    , Dhaka, Bangladesh</option>
									</select>
								</div>
							  
								<div class="radio radio-info row_bottom">
									<input type="radio" name="payment_address" value="new" id="new" onclick="showdiv()">		                                            
		                            <label for="new"> I want to use a new address </label>
								</div>
							<div id="payment-new">
								
								<div class="form-group required">
								  <input type="text" name="payment_address_1" value="" placeholder="Address *" id="input-payment-address-1" class="form-control">
								</div>
								
								<div class="form-group">
									<select data-default-region-id="" required="1" data-msg-required="Required field" class="form-control ft-region-dropdown placeholder" name="payment_country_id" id="state">
									  <option value="" selected="selected">Please select</option>
									</select>
								</div>
								<div class="form-group required">
									
									<select required="1" data-msg-required="Required field" class="form-control placeholder" data-state-label="Loading..." data-empty-label="Please select" name="payment_zone_id" id="city">

										<option value="" selected="selected">Please select</option>
									</select>
								</div>
							  </div>
							</form>    
						  </div>
						</div>
						<input type="hidden" name="default_zone_id" id="default_zone_id" value="3655">                        	                        		
						<div class="ship-payment">
						<div class="checkout-content checkout-shipping-methods">
						  <h2 class="secondary-title"><i class="fa fa-location-arrow"></i>Shipping Method</h2>
						  <div class="box-inner">
							<p><strong>Flat Rate</strong></p>
							<div class="radio">
							  <label>
								<input type="radio" name="shipping_method" value="flat.flat" checked="checked">
								Flat Shipping Rate - $8.00                                </label>
							</div>
						  </div>
						</div>
						<div class="checkout-content checkout-payment-methods">
						  <h2 class="secondary-title"><i class="fa fa-credit-card"></i>Payment Method</h2>
						  <div class="box-inner">
							
							<div class="radio radio-info">
								<input type="radio" name="payment_method" value="cod" id="cod">
												
								<label for="cod"> Cash On Delivery   </label>
							</div>
						  </div>
						</div>
						</div>
					  </section>
					  <section class="section-right col-xs-12">
						<div class="checkout-content checkout-cart">
						  <h2 class="secondary-title"><i class="fa fa-shopping-cart"></i>Shopping Cart (80.00kg)</h2>
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
								  <tr>
									<td class="text-left name" colspan="2">
									  <a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=61"><img src="http://opencart.opencartworks.com/themes/so_jenzo/image/cache/catalog/product/12-80x80.jpg" alt="Biltong kielbasa" title="Biltong kielbasa" class="img-thumbnail"></a>
									  <a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=61" class="product-name">Biltong kielbasa</a>
									</td>
									<td class="text-left quantity">
									  <div class="input-group">
										<input type="text" name="quantity[260]" value="3" size="1" class="form-control">
										<span class="input-group-btn">
										  <span data-toggle="tooltip" title="" data-product-key="260" class="btn-delete" data-original-title="Remove"><i class="fa fa-trash-o"></i></span>
										  <span data-toggle="tooltip" title="" data-product-key="260" class="btn-update" data-original-title="Update"><i class="fa fa-refresh"></i></span>
										</span>
									  </div>
									</td>
									<td class="text-right price">$56.00</td>
									<td class="text-right total">$168.00</td>
								  </tr>
								  
									<td class="text-left name" colspan="2">
									  <a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=143"><img src="http://opencart.opencartworks.com/themes/so_jenzo/image/cache/catalog/product/10-80x80.jpg" alt="Alcatra boudin" title="Alcatra boudin" class="img-thumbnail"></a>
									  <a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=143" class="product-name">Alcatra boudin</a>
									</td>
									<td class="text-left quantity">
									  <div class="input-group">
										<input type="text" name="quantity[230]" value="5" size="1" class="form-control">
										<span class="input-group-btn">
										  <span data-toggle="tooltip" title="" data-product-key="230" class="btn-delete" data-original-title="Remove"><i class="fa fa-trash-o"></i></span>
										  <span data-toggle="tooltip" title="" data-product-key="230" class="btn-update" data-original-title="Update"><i class="fa fa-refresh"></i></span>
										</span>
									  </div>
									</td>
									<td class="text-right price">$66.00</td>
									<td class="text-right total">$330.00</td>
								  </tr>
								</tbody>
								<tfoot>
								  <tr>
									<td colspan="4" class="text-left">Sub-Total:</td>
									<td class="text-right">$1,528.00</td>
								  </tr>
								  <tr>
									<td colspan="4" class="text-left">Flat Shipping Rate:</td>
									<td class="text-right">$5.00</td>
								  </tr>
								  <tr>
									<td colspan="4" class="text-left">Eco Tax (-2.00):</td>
									<td class="text-right">$2.00</td>
								  </tr>
								  <tr>
									<td colspan="4" class="text-left">VAT (20%):</td>
									<td class="text-right">$1.00</td>
								  </tr>
								  <tr>
									<td colspan="4" class="text-left">Total:</td>
									<td class="text-right">$1,536.00</td>
								  </tr>
								</tfoot>
							  </table>
							</div>
							<div id="payment-confirm-button" class="payment-cod">
							  <h2 class="secondary-title"><i class="fa fa-credit-card"></i>Payment Details</h2>
							  <div class="buttons">
								<div class="pull-right">
								  <input type="button" value="Confirm Order" id="button-confirm" class="btn btn-primary" data-loading-text="Loading...">
								</div>
							  </div>
							  <script type="text/javascript"><!--
								  $('#button-confirm').on('click', function() {
								  $.ajax({
									type: 'get',
									url: 'index.php?route=extension/payment/cod/confirm',
									cache: false,
									beforeSend: function() {
									  $('#button-confirm').button('loading');
									}
									,
									complete: function() {
									  $('#button-confirm').button('reset');
									}
									,
									success: function() {
									  location = 'http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=checkout/success';
									}
								  }
										);
								}
														 );
								//--></script>
							</div>
						  </div>
						</div>
						<div class="checkout-content confirm-section">
						  <h2 class="secondary-title"><i class="fa fa-comment"></i>Add Comments About Your Order</h2>
						  <div class="box-inner">
							<textarea name="comment" rows="8" class="form-control requried"></textarea>
						  </div>
						  <div class="checkbox check-terms">
							<label>
							  <input type="checkbox" name="agree" value="1">
							  I have read and agree to the <a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=information/information/agree&amp;information_id=5" class="agree"><b>Terms And Conditions</b></a>                                </label>
						  </div>
						  <div class="confirm-order">
							<button id="so-checkout-confirm-button" data-loading-text="Loading..." class="btn btn-primary button confirm-button">Confirm Order</button>
						  </div>                            
						</div>
					  </section>
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

    </script>

@endsection
