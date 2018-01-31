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

	      <form action="{{ route('accountPasswordUpdate', Auth::user()->id) }}" method="post" id="registration-form" enctype="multipart/form-data" class="form-horizontal">
	        {{ csrf_field() }}

	        <fieldset>
	          <legend>Your Password</legend>
	          <div class="form-group required {{ $errors->has('password') ? ' has-error' : '' }}">
	            <label class="col-sm-2 control-label" for="input-password">Password</label>
	            <div class="col-sm-10">
	              <input type="password" name="password_confirmation" value="" placeholder="Password" id="input-password" class="form-control" data-validation="strength" data-validation-strength="2" data-validation-help="You have to put atleast 8 character and a special character e.g. !	# $	% & ' (	) *	+ , - . :"/>

	              @if ($errors->has('password'))
	                  <span class="help-block">
	                      <block>{{ $errors->first('password') }}</block>
	                  </span>
	              @endif
	            </div>
	              
	          </div>
	          
	          <div class="form-group required {{ $errors->has('password') ? ' has-error' : '' }}">
	            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
	            <div class="col-sm-10">
	              <input type="password" name="password" value="" placeholder="Password Confirm" id="input-confirm" class="form-control" data-validation="confirmation"/>

	              @if ($errors->has('password'))
	                  <span class="help-block">
	                      <block>{{ $errors->first('password') }}</block>
	                  </span>
	              @endif
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
