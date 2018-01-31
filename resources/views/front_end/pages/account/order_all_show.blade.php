@php
	$title = 'Order History'
@endphp

@extends ('front_end.layouts.master')

@section ('page_title', $title)

@section ('main_content')

<div class="container">
	<ul class="breadcrumb">
		<li><a href="/"><i class="fa fa-home"></i></a></li>
		<li><a href="{{ route('myAccount') }}"> Account</a></li>
		<li><a href="#"> {{ $title }}</a></li>
	</ul>
	<div class="container">
	<div class="row">

	    <!-- layouts for header -->
	    @include ('front_end.layouts.sidebar_account')

	    <div id="content" class="col-sm-9">
	      <h1>{{ $title }}</h1>

	      <div class="table-responsive">
		    <table class="table table-bordered table-hover">
		        <thead>
		            <tr>
		                <td class="text-right">Order ID</td>
		                <td class="text-left">Customer Name</td>
		                <td class="text-right">No. of Products</td>
		                <td class="text-left">Status</td>
		                <td class="text-right">Total</td>
		                <td class="text-left">Date Added</td>
		                <td></td>
		            </tr>
		        </thead>
		        <tbody>
		        	@foreach($orders as $order)
		            <tr>
		                <td class="text-center">#{{ $order->id }}</td>
		                <td class="text-left">{{ title_case($order->user->customer->first_name. ' '. $order->user->customer->last_name) }}</td>
							
						@foreach(getOrderItemQP($order->id) as $orderD)	
		                	<td class="text-right">{{ $orderD->TotalQuantity }}</td>
		                	<td class="text-left">{{ ucfirst($order->status) }}</td>
		                	<td class="text-right">BDT {{ $orderD->TotalPrice }}</td>
						@endforeach
						
						
		                <td class="text-left">{{ $order->order_date }}</td>
		                <td class="text-right">
		                    <a href="{{ route('accountOrderInfo', $order->id) }}" data-toggle="tooltip" title="" class="btn btn-info" data-original-title="View">
		                        <i class="fa fa-eye"></i>
		                    </a>
		                </td>
		            </tr>
		            @endforeach
		        </tbody>
		    </table>
		</div>
	  </div>
	</div>

		
</div>



@endsection
