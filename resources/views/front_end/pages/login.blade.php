@extends ('front_end.layouts.master')

@section ('page_title','Register')

@section ('main_content')

<div class="container">

  <ul class="breadcrumb">
        <li><a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=account/account">Account</a></li>
        <li><a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=account/register">Login</a></li>
      </ul>
    <div class="row">
      <div id="content" class="col-sm-9">
      <h1>Login Account</h1>
      
      <form action="{{ route('loginUser') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
        
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail" id="input-email" class="form-control" />
            </div>
          </div>
                 
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
            </div>
          </div>
          
        
          <div class="buttons">
          <div class="pull-right">
            <input type="submit" value="Continue" class="btn btn-primary" />
          </div>
        </div>
        @if(count($errors))
            @foreach($errors->all() as $error)
              {{ $error }}
            @endforeach
        @endif
      </form>
      </div>
</div>
</div>

</div>

@endsection