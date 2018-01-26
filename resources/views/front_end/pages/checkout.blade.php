@extends ('front_end.layouts.master')

@section ('page_title','Show Cart')

@section ('main_content')
	
<div class="container">
	<ul class="breadcrumb">
		<li><a href="/"><i class="fa fa-home"></i></a></li>
		<li><a href="/">Cart</a></li>
		<li><a href="/show-cart"> Checkout</a></li>
	</ul>

	    
	<!-- main content -->
    <section class="form-box">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
				
					<!-- Form Wizard -->
				<div class="form-wizard form-header-modarn form-body-material">
					
					
                	<form role="form" action="" method="post" class="form-horizontal has-validation-callback">

                		<h3>Complete all step to confirm order</h3>
                		
						
						<!-- Form progress -->
                		<div class="form-wizard-steps form-wizard-tolal-steps-4">
                			<div class="form-wizard-progress">
                			    <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
                			</div>
							<!-- Step 1 -->
                			<div class="form-wizard-step active">
                				<div class="form-wizard-step-icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                				<p>Account</p>
                			</div>
							<!-- Step 1 -->
							
							<!-- Step 2 -->
                			<div class="form-wizard-step">
                				<div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                				<p>Personal Address</p>
                			</div>
							<!-- Step 2 -->
							
							<!-- Step 3 -->
                		    <div class="form-wizard-step">
                				<div class="form-wizard-step-icon"><i class="fa fa-credit-card" aria-hidden="true"></i></div>
                				<p>Payment</p>
                			</div>
							<!-- Step 3 -->
							
							<!-- Step 4 -->
							<div class="form-wizard-step">
                				<div class="form-wizard-step-icon"><i class="fa fa-file-text" aria-hidden="true"></i></div>
                				<p>Confirm</p>
                			</div>
							<!-- Step 4 -->
                		</div>
						<!-- Form progress -->
                		
						
						<!-- Form Step 1 -->
                		<fieldset>
							<!-- Progress Bar -->
							<div class="progress">
							  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
							  </div>
							</div>
							<!-- Progress Bar -->
                		    <h4>Account Information: <span>Step 1 - 4</span></h4>
                			<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
					            <label class="col-sm-2 control-label" for="input-email">E-Mail Address:</label>
					            <div class="col-sm-8">
					              <input type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail" id="input-email" class="form-control" data-validation="email"/>

					              @if ($errors->has('email'))
					                  <span class="help-block">
					                      <block>{{ $errors->first('email') }}</block>
					                  </span>
					              @endif
					            </div>
					        </div>

                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
					            <label class="col-sm-2 control-label" for="input-password">Password</label>
					            <div class="col-sm-8">
					              <input type="password" name="password_confirmation" value="" placeholder="Password" id="input-password" class="form-control"/>

					              @if ($errors->has('password'))
					                  <span class="help-block">
					                      <block>{{ $errors->first('password') }}</block>
					                  </span>
					              @endif
					            </div>
					              
					        </div>
							
							
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-next">Next</button>
                            </div>
                        </fieldset>
						<!-- Form Step 1 -->

						<!-- Form Step 2 -->
                        <fieldset>
							<!-- Progress Bar -->
							<div class="progress">
							  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
							  </div>
							</div>
							<!-- Progress Bar -->
                            <h4>Billing Address Information : <span>Step 2 - 4</span></h4>
                			<div class="form-group">
                			    <label>First Name: <span>*</span></label>
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="First Name" placeholder="First Name" class="form-control required">
								</div>
                            </div>
                            <div class="form-group">
                			    <label>Last Name: <span>*</span></label>
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="Last Name" placeholder="Last Name" class="form-control required">
								</div>
                            </div>
							<div class="form-group">
                			    <label>Gender : </label>
                                <label class="radio-inline">
								  <input type="radio" name="Gender" value="option1" checked="checked"> Male
								</label>
								<label class="radio-inline">
								  <input type="radio" name="Gender" value="option2"> Female
								</label>
                            </div>
							<div class="container-fluid">
							<div class="row form-inline">
							<div class="form-group col-md-3 col-xs-3">
                                <label>Date Of Birth: </label>
							</div>
							<div class="form-group col-md-3 col-xs-3">
								<label>Day: </label>
                                <select class="form-control">
								  <option>01</option>
								  <option>02</option>
								  <option>03</option>
								  <option>04</option>
								  <option>05</option>
								</select>
							</div>
							<div class="form-group col-md-3 col-xs-3">
								<label>Month: </label>
                                <select class="form-control">
								  <option>Jan</option>
								  <option>Feb</option>
								  <option>Mar</option>
								  <option>Apr</option>
								  <option>May</option>
								</select>
							</div>
							<div class="form-group col-md-3 col-xs-3">
								<label>Year: </label>
                                <select class="form-control">
								  <option>2017</option>
								  <option>2018</option>
								  <option>2019</option>
								  <option>2020</option>
								  <option>2021</option>
								</select>
							</div>
                            </div>
							</div>
							<div style="clear:both;"></div>
							<div class="form-group">
                			    <label>Phone: <span>*</span></label>
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" name="Phone" placeholder="Phone" class="form-control required">
								</div>
                            </div>
                            <div class="form-group">
                			    <label>Address: <span>*</span></label>
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                <input type="text" name="Address" placeholder="Address" class="form-control required">
								</div>
                            </div>
							<div class="form-group">
                			    <label>Zip Code: <span>*</span></label>
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-plus"></i></span>
                                <input type="text" name="Zip Code" placeholder="Zip Code" class="form-control required">
								</div>
                            </div>
							<div class="form-group">
                			    <label>State: <span>*</span></label>
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                <input type="text" name="State" placeholder="State" class="form-control required">
								</div>
                            </div>
							<div class="form-group">
                			    <label>Country: </label>
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                <select class="form-control">
								  <option>Australia</option>
								  <option>America</option>
								  <option>Bangladesh</option>
								  <option>Canada</option>
								  <option>England</option>
								</select>
								</div>
                            </div>
							
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="button" class="btn btn-next">Next</button>
                            </div>
                        </fieldset>
						<!-- Form Step 2 -->

						<!-- Form Step 3 -->
                        <fieldset>
							<!-- Progress Bar -->
							<div class="progress">
							  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
							  </div>
							</div>
							<!-- Progress Bar -->
                            <h4>Payment Information: <span>Step 3 - 4</span></h4>
                			<div class="form-group">
                			    <label>Payment Type : </label>
                                <label class="radio-inline">
								  <input type="radio" name="Payment" value="option1" checked="checked"> Master Card
								</label>
								<label class="radio-inline">
								  <input type="radio" name="Payment" value="option2"> Visa Card
								</label>
                            </div>
                            <div class="form-group">
                			    <label>Holder Name: <span>*</span></label>
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="Holder Name" placeholder="Holder Name" class="form-control required">
								</div>
                            </div>
							<div class="container-fluid">
							<div class="row form-inline">
							<div class="form-group col-md-6 col-xs-6">
								<label>Card Number: <span>*</span></label>
                                <input type="text" name="Card Number" placeholder="Card Number" class="form-control required">
							</div>
							<div class="form-group col-md-6 col-xs-6">
								<label>CVC: <span>*</span></label>
                                <input type="text" name="CVC" placeholder="CVC" class="form-control required">
							</div>
                            </div>
							</div>
							<br/>
							<div class="container-fluid">
							<div class="row form-inline">
							<div class="form-group col-md-3 col-xs-3">
								<label>Expiry Date: </label>
							</div>
							<div class="form-group col-md-3 col-xs-3">
								<label>Month: </label>
                                <select class="form-control">
								  <option>Jan</option>
								  <option>Feb</option>
								  <option>Mar</option>
								  <option>Apr</option>
								  <option>May</option>
								</select>
							</div>
							<div class="form-group col-md-3 col-xs-3">
								<label>Year: </label>
                                <select class="form-control">
								  <option>2017</option>
								  <option>2018</option>
								  <option>2019</option>
								  <option>2020</option>
								  <option>2021</option>
								</select>
							</div>
                            </div>
							</div>
							<br/>
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="button" class="btn btn-next">Next</button>
                            </div>
                        </fieldset>
						<!-- Form Step 3 -->
						
						<!-- Form Step 4 -->
						<fieldset>
							<!-- Progress Bar -->
							<div class="progress">
							  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
							  </div>
							</div>
							<!-- Progress Bar -->
                            <h4>Confirm Details: <span>Step 4 - 4</span></h4>
							<div style="clear:both;"></div>
                			<div class="table-responsive">
							  <table class="table">
								<tr><th>Name</th><td>Abdul Kuddus</td></tr>
								<tr><th>Email</th><td>some@ex.com</td></tr>
								<tr><th>Phone</th><td>0123456789</td></tr>
								<tr><th>User</th><td>Abdulkuddus99</td></tr>
								<tr><th>Gender</th><td>Male</td></tr>
								<tr><th>Address</th><td>House #06 kallayanpur, Dhaka</td></tr>
								<tr><th>Zip Code</th><td>1207</td></tr>
								<tr><th>Country</th><td>Bangladesh</td></tr>
								<tr><th>Card Type</th><td>Master Card</td></tr>
							  </table>
							</div>
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="submit" class="btn btn-submit">Submit</button>
                            </div>
                        </fieldset>
						<!-- Form Step 4 -->
                	
                	</form>
					
					</div>
					<!-- Form Wizard -->
                </div>
            </div>
                
        </div>
    </section>
<!-- main content -->
	    
</div>



@endsection
