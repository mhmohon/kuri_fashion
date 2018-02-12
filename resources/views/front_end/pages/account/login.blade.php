@extends ('front_end.layouts.master')

@section ('page_title','Account Login')

@section ('main_content')

<div class="breadcrumbs">
    <div class="container">
        <h2 class="current-name">Account Login</h2>

    </div>
    <ul class="breadcrumb">
        <li><a href=""><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="#">Login</a></li>
    </ul>
</div>
<div class="container">

    <div class="row">
        <!-- layouts for header -->
        @include ('front_end.layouts.sidebar_account')

        <div id="content" class="col-sm-9">
            <div class="row">

                <div class="col-sm-6">

                    <div class="well well-form col-sm-12">

                        <h2>Registered Customer</h2>
                        <p><strong>I am a registered customer</strong></p>

                        {!! Form::open(['route'=>['loginCheck'],'name'=>'login']) !!}

                            <div class="form-group required {{ $errors->has('email') ? 'has-error' : ''}} ">
                                <label class="control-label" for="input-email">E-Mail Address</label>

                                <input type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" id="input-email" class="form-control" required autofocus>
                                @if ($errors->has('email'))
                                  <span class="help-block">
                                    <block>{{ $errors->first('email') }}
                                    </block>
                                  </span> 
                                @endif

                            </div>

                            <div class="form-group required {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="control-label" for="input-password">Password</label>

                                <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" /> 

                                @if ($errors->has('password'))
                                  <span class="help-block">
                                  <block>{{ $errors->first('password') }}</block></span>
                                @endif

                            </div>

                            <div class="form-group">

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>

                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary pull-left">
                                    Login
                                </button>

                                <a class="pull-right" href="{{ route('password.request') }}">Forgot Your Password?</a>

                            </div>

                        {{ Form::close() }}

                        <column id="column-login" class="col-sm-8 pull-right">
                            <div class="row">
                                <div class="social_login pull-right" id="so_sociallogin">
                                </div>
                            </div>
                        </column>

                    </div>

                    

                </div>
                <div class="col-sm-6">
                    <div class="well well-form col-sm-12">

                        <h2>New Customer</h2>
                        <p><strong>Register Account</strong></p>
                        <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                        <a href="{{ url('account/register') }}" class="btn btn-primary">Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection