@php
	$title = 'Order Information'
@endphp

@extends ('front_end.layouts.master')

@section ('page_title', $title)

@section ('main_content')

<div class="container">
	<ul class="breadcrumb">
		<li><a href="/"><i class="fa fa-home"></i></a></li>
		<li><a href="{{ route('myAccount') }}"> Account</a></li>
		<li><a href="{{ route('myAccount') }}"> Order history</a></li>
		<li><a href="#"> {{ $title }}</a></li>
	</ul>
	<div class="container">
	<div class="row">

	    <!-- layouts for header -->
	    @include ('front_end.layouts.sidebar_account')

	    <div id="content" class="col-sm-9">
		    <h2>{{ $title }}</h2>
		    <table class="table table-bordered table-hover">
		        <thead>
		            <tr>
		                <td class="text-left" colspan="2">Order Details</td>
		            </tr>
		        </thead>
		        <tbody>
		            <tr>
		                <td class="text-left" style="width: 50%;">
		                    <b>Order ID:</b> #{{ $order->id }}
		                    <br>

		                    <b>Date Added:</b> {{ $order->order_date }}</td>
		                <td class="text-left" style="width: 50%;">
		                    <b>Payment Method:</b> {{ title_case($order->payment->method_detail) }}
		                    <br>
		                    <b>Order Status:</b> {{ ucfirst($order->status) }}
		                    
		            </tr>
		        </tbody>
		    </table>
		    <table class="table table-bordered table-hover">
		        <thead>
		            <tr>
		                <td class="text-left" style="width: 50%; vertical-align: top;">Delivery Address</td>
		            </tr>
		        </thead>
		        <tbody>
		            <tr>
		                <td class="text-left">
		                	{{ title_case($order->user->customer->first_name. ' '. $order->user->customer->last_name) }}
		                    <br>{{ $order->address->street_address }}
		                    <br>{{ $order->address->region }}
		                    <br>{{ renameCity($order->address->city) }}
		                    <br>Bangladesh
			            </td>
		            </tr>
		        </tbody>
		    </table>
		    <div class="table-responsive">
		        <table class="table table-bordered table-hover">
		            <thead>
		                <tr>
		                    <td class="text-left">Product Name</td>
		                    <td class="text-left">Model</td>
		                    <td class="text-right">Quantity</td>
		                    <td class="text-right">Price</td>
		                    <td class="text-right">Total</td>
		                    <td style="width: 20px;"></td>
		                </tr>
		            </thead>
		            <tbody>
		            @foreach ($order->orderItems as $orderItem)
		                <tr>
		                    <td class="text-left">{{ $orderItem->product->pro_name }} </td>
		                    <td class="text-left">{{ $orderItem->product->pro_code }}</td>
		                    <td class="text-right">{{ $orderItem->quantity }}</td>
		                    <td class="text-right">৳ {{ $orderItem->product->productDetail->pro_price }}</td>
		                    <td class="text-right">৳ {{ $orderItem->quantity * $orderItem->product->productDetail->pro_price }}</td>
		                    <td class="text-right" style="white-space: nowrap;">
		                        <a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Reorder">
		                            <i class="fa fa-shopping-cart"></i>
		                        </a>
		                    </td>
		                </tr>
		                
		            </tbody>
		            @endforeach
		            <tfoot>
		                <tr>
		                    <td colspan="3"></td>
		                    <td class="text-right">
		                        <b>Sub-Total</b>
		                    </td>
		                    <td class="text-right">৳{{  $orderItem->total_price-100 }}</td>
		                    <td></td>
		                </tr>
		                <tr>
		                    <td colspan="3"></td>
		                    <td class="text-right">
		                        <b>Shipping Cost</b>
		                    </td>
		                    <td class="text-right">৳100</td>
		                    <td></td>
		                </tr>
		           
		                <tr>
		                    <td colspan="3"></td>
		                    <td class="text-right">
		                        <b>Grand Total</b>
		                    </td>
		                    <td class="text-right">৳{{ $orderItem->total_price }}</td>
		                    <td></td>
		                </tr>
		            </tfoot>
		        </table>
		    </div>
		    <table class="table table-bordered table-hover">
		        <thead>
		            <tr>
		                <td class="text-left">Order Comments</td>
		            </tr>
		        </thead>
		        <tbody>
		            <tr>
		                <td class="text-left">{{ $order->order_description }}</td>
		            </tr>
		        </tbody>
		    </table>
		    <div class="buttons clearfix">
		        <div class="pull-left">
		            <a href="#" class="btn btn-primary">Continue</a>
		        </div>
		    </div>
		</div>

	</div>

		
</div>



@endsection
