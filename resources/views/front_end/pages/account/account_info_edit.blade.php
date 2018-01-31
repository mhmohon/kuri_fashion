@extends ('front_end.layouts.master')

@section ('page_title','My Account Information')

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
	      <h1>My Account Information</h1>

	      <form action="{{ route('accountInfoUpdate', $user->id) }}" method="post" id="registration-form" enctype="multipart/form-data" class="form-horizontal">
	        {{ csrf_field() }}

	        <fieldset id="account">
	          <legend>Your Personal Details</legend>
	          <div class="form-group required">
	            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
	            <div class="col-sm-10">
	              <input type="text" name="first_name" value="{{ $user->customer->first_name }}" placeholder="First Name" id="input-firstname" class="form-control" data-validation="length" data-validation-length="3-12" 
	             data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)"/>
	            </div>
	          </div>
	          <div class="form-group required">
	            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
	            <div class="col-sm-10">
	              <input type="text" name="last_name" value="{{ $user->customer->last_name }}" placeholder="Last Name" id="input-lastname" class="form-control" />
	             </div>
	          </div>
	          <div class="form-group required {{ $errors->has('email') ? ' has-error' : '' }}">
	            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
	            <div class="col-sm-10">
	              <input type="email" name="email" value="{{ $user->email }}" placeholder="E-Mail" id="input-email" class="form-control" data-validation="email"/>

	              @if ($errors->has('email'))
	                  <span class="help-block">
	                      <block>{{ $errors->first('email') }}</block>
	                  </span>
	              @endif
	            </div>
	          </div>
	          <div class="form-group required">
	            <label class="col-sm-2 control-label" for="input-telephone">Phone Number</label>
	            <div class="col-sm-10">
	              <input type="text" name="phone" value="{{ $user->customer->phone }}" placeholder="Phone" id="input-telephone" class="form-control" data-validation="length number" data-validation-length="max11"/>
	            </div>
	              
	          </div>
	       	</fieldset>
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
	      </form>
	    </div>
	  </div>
	</div>

		
</div>

@endsection
