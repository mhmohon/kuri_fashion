@extends ('front_end.layouts.master')

@section ('page_title','Account Login')

@section ('main_content')

<div class="container">

  <ul class="breadcrumb">
        <li><a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=account/account">Account</a></li>
        <li><a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=account/register">Login</a></li>
  </ul>


  <div class="row">
   
    <div class="col-sm-5">
      
      <div class="well well-form col-sm-12">    
        
        <h2>Registered Customer</h2>
        <p><strong>I am a registered customer</strong></p>
        <form action="{{ route('loginUser') }}" method="post" enctype="multipart/form-data">

          {{ csrf_field() }}
          
          <div class="form-group required {{ $errors->has('email') ? 'has-error' : ''}} ">
            <label class="control-label" for="input-email">E-Mail Address</label>
            
              <input type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" id="input-email" class="form-control" />

              @if ($errors->has('email'))
                  <span class="help-block">
                      <block>{{ $errors->first('email') }}</block>
                  </span>
              @endif
            
          </div>
                 
          <div class="form-group required {{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label" for="input-password">Password</label>
            
              <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />

              @if ($errors->has('password'))
                  <span class="help-block">
                      <block>{{ $errors->first('password') }}</block>
                  </span>
              @endif
     
          </div>
  
            <input type="submit" value="Login" class="btn btn-primary pull-left">  
    
        </form>
          <div>
            <a href="#">Forgotten Password</a>
          </div>

          <column id="column-login" class="col-sm-8 pull-right">
            <div class="row">
              <div class="social_login pull-right" id="so_sociallogin">
              </div>
            </div>
          </column>
                        
      </div>

        @if(count($errors))
            @foreach($errors->all() as $error)
              {{ $error }}
            @endforeach
        @endif
     
    </div>
     <div class="col-sm-5">
      <div class="well well-form col-sm-12">    
        
        <h2>New Customer</h2>
        <p><strong>Register Account</strong></p>
        <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
        <a href="{{ url('account/register') }}" class="btn btn-primary">Continue</a>
      </div>
    </div>
  </div>
</div>

@endsection