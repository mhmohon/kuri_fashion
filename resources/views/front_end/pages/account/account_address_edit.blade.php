@extends ('front_end.layouts.master')

@section ('page_title','Address Book')

@section ('main_content')

<div class="container">
	<ul class="breadcrumb">
		<li><a href="/"><i class="fa fa-home"></i></a></li>
		<li><a href="{{ route('myAccount') }}"> Account</a></li>
		<li><a> Edit Information</a></li>
	</ul>
	<div class="row">
	

	    <!-- layouts for header -->
	    @include ('front_end.layouts.sidebar_account')

	    <div id="content" class="col-sm-9">
	      	<h1>Edit Address</h1>

			{!! Form::open(['route'=>['checkoutStore'],'class'=>'form-horizontal form-payment','name'=>'checkout','id'=>'checkoutsubmit']) !!}

			<div class="form-group">
	            <label class="col-sm-2 control-label" for="input-firstname">House No.</label>
	            <div class="col-sm-10">
	              <input type="text" name="house_no" value="{{ $address->house_no }}" placeholder="Your house address" id="house_no" class="form-control"data-validation="required"/>
	            </div>
          	</div>
          	
          	<div class="form-group">
	            <label class="col-sm-2 control-label" for="input-firstname">Address</label>
	            <div class="col-sm-10">
		            <input type="text" name="full_address" id="autocomplete" onFocus="geolocate()" value="{{ $address->street_address.', '.$address->route.', '. $address->city}}" placeholder="Your Full address" class="form-control" data-validation="required"/>
	            </div>
          	</div>
          	
          	
			
			<div class="buttons">
	          <div class="pull-left pull-form">
	            <button type="submit" class="btn btn-primary">
	                Continue
	            </button>
	          </div>
	          <div class="pull-right">
	            <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
	          </div>
	        </div>
			{{ Form::close() }}
	  	</div>
	</div>


</div>

@endsection

@section('extra_scripts')

	<script type="text/javascript" src="{{ asset('js/plugins/autcomplete.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVW0FORtm8JXJZpN1pWnmzLiZD_UoyIYE&libraries=places&callback=initAutocomplete"
        async defer></script>

@endsection