@extends ('front_end.layouts.master')

@section ('page_title','Account Register')

@section ('main_content')

<div class="breadcrumbs">
    <div class="container">
        <h2 class="current-name">Register Account</h2>

    </div>
    <ul class="breadcrumb">
        <li><a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="#">Register</a></li>
    </ul>
</div>
<div class="container">
  <div class="row">
    <!-- layouts for header -->
    @include ('front_end.layouts.sidebar_account')
    <div id="content" class="col-sm-9">
      <h1>Register Account</h1>
      <p>If you already have an account with us, please login at the <block><a href="{{ url('account/login') }}">login page</a></block>.</p>

      <form action="{{ route('registerUser') }}" method="post" id="registration-form" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
        <fieldset id="account">
          <legend>Your Personal Details</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
            <div class="col-sm-10">
              <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" id="input-firstname" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12" 
             data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)"/>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
            <div class="col-sm-10">
              <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" id="input-lastname" class="form-control" />
             </div>
          </div>
          <div class="form-group required {{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail" id="input-email" class="form-control" data-validation="email"/>

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
              <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone" id="input-telephone" class="form-control" data-validation="length number" data-validation-length="max11"/>
            </div>
              
          </div>
        </fieldset>
        <fieldset>
          <legend>Your Password</legend>
          <div class="form-group required {{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="col-sm-2 control-label" for="input-password">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password_confirmation" value="" placeholder="Password" id="input-password" class="form-control" data-validation="strength" data-validation-strength="2" data-validation-help="Som help info..."/>

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


@endsection

