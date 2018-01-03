@extends ('front_end.layouts.master')

@section ('page_title','Account Register')

@section ('main_content')

<div class="container">

  <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="#">Register</a></li>
  </ul>
 
  <div class="row">
    <div id="content" class="col-sm-9">
      <h1>Register Account</h1>
      <p>If you already have an account with us, please login at the <block><a href="{{ url('account/login') }}">login page</a></block>.</p>

      <form action="{{ route('registerUser') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
        <fieldset id="account">
          <legend>Your Personal Details</legend>
          
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
            <div class="col-sm-10">
              <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" id="input-firstname" class="form-control" />
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
            <div class="col-sm-10">
              <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" id="input-lastname" class="form-control" />
             </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail" id="input-email" class="form-control" />
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Phone Number</label>
            <div class="col-sm-10">
              <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone" id="input-telephone" class="form-control" />
            </div>
          </div>
        
        <fieldset>
          <legend>Your Password</legend>
          <div class="form-group required {{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="col-sm-2 control-label" for="input-password">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />

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
              <input type="password" name="password_confirmation" value="" placeholder="Password Confirm" id="input-confirm" class="form-control" />

              @if ($errors->has('password'))
                  <span class="help-block">
                      <block>{{ $errors->first('password') }}</block>
                  </span>
              @endif
            </div>
          </div>
        </fieldset>
        
        <div class="buttons">
          <div class="pull-form">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
          </div>
        </div>
      </form>
      </div>
</div>
</div>

</div>

@endsection