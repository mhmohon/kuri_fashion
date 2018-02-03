@extends ('front_end.layouts.master')

@section ('page_title','Address Book')

@section ('main_content')

<div class="container">
	<ul class="breadcrumb">
		<li><a href="/"><i class="fa fa-home"></i></a></li>
		<li><a href="{{ route('myAccount') }}"> Account</a></li>
		<li><a href="#"> Edit Information</a></li>
	</ul>
	<div class="row">

	    
	    <div id="content" class="col-sm-9">
	      <h1>My Account Information</h1>

	      <div class="table-responsive">
			    <table class="table table-bordered table-hover">
			        <tbody>
			        	@foreach($addresss as $address)
			            <tr>
			                <td class="text-left">{{ title_case($address->user->customer->first_name. ' '. $address->user->customer->last_name) }}
			                    @if($address->street_address)
			                    	<br>{{ $address->street_address }}
			                    @endif
			                    <br>{{ $address->route }}
			                    <br>{{ $address->city }}
			                    <br>{{ $address->state }}
			                    
			                </td>
			                <td class="text-right">
			                    <a href="{{ route('accountAddressEdit', $address->id) }}" class="btn btn-info">Edit</a> &nbsp;
			                    <a href="#" class="btn btn-danger">Delete</a>
			                </td>
			            </tr>
			            @endforeach
			        </tbody>
			    </table>
			</div>
			<div class="buttons clearfix">
		        <div class="pull-left"><a href="" class="btn btn-default">New Address</a></div>
		        <div class="pull-right"><a href="" class="btn btn-primary">Back</a></div>
		    </div>
	  </div>

	  	<!-- layouts for sidebar_account -->
	    @include ('front_end.layouts.sidebar_account')

	</div>	
</div>



@endsection
