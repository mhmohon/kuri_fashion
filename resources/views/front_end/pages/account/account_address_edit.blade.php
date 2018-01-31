@extends ('front_end.layouts.master')

@section ('page_title','Address Book')

@section ('main_content')

<div class="container">
	<ul class="breadcrumb">
		<li><a href="/"><i class="fa fa-home"></i></a></li>
		<li><a href="{{ route('myAccount') }}"> Account</a></li>
		<li><a href="#"> Edit Information</a></li>
	</ul>
	<div class="container">
	<div class="row">

	    <!-- layouts for header -->
	    @include ('front_end.layouts.sidebar_account')

	    <div id="content" class="col-sm-9">
	      	<h1>Edit Address</h1>

			{!! Form::open(['route'=>['checkoutStore'],'class'=>'form-horizontal form-payment','name'=>'checkout','id'=>'checkoutsubmit']) !!}

			<div class="form-group">
	            <label class="col-sm-2 control-label" for="input-firstname">Street Address</label>
	            <div class="col-sm-10">
	              <input type="text" name="street_address" value="{{ $address->street_address }}" placeholder="Street Address" id="street_address" class="form-control" data-validation="length alphanumeric" data-validation="required"/>
	            </div>
          	</div>
          	
          	<div class="form-group">
	            <label class="col-sm-2 control-label" for="input-firstname">City</label>
	            <div class="col-sm-10">
		            <select data-validation="required" class="form-control" data-state-label="Loading..." data-empty-label="Please select" name="payment_zone_id" id="region">

						<option value="" selected="selected">Please select</option>
					</select>
	            </div>
          	</div>
          	
          	<div class="form-group">
	            <label class="col-sm-2 control-label" for="input-firstname">Region</label>
	            <div class="col-sm-10">
		            <select data-validation="required" class="form-control" name="payment_country_id" id="division">
						<option value="" selected="selected">Please select</option>
					</select>
	            </div>
          	</div>
			
			<div class="buttons">
	          <div class="pull-left pull-form">
	            <button type="submit" class="btn btn-primary">
	                Continue
	            </button>
	          </div>
	          <div class="pull-right">
	            <button type="submit" class="btn btn-primary">
	                Back
	            </button>
	          </div>
	        </div>
			{{ Form::close() }}
	  	</div>
	</div>

		
</div>



@endsection
