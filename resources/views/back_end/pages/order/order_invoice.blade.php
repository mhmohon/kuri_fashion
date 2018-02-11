@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title','Invoice Print')

@section ('main_content')

<!-- Start content -->


    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">Invoice <small> Print Order Invoice.</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Order</a>
                    </li>
                    <li class="active">
                        Invoice
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <!-- /row -->
	<div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">
                    <h4>Invoice</h4>
                </div> -->
                <div class="panel-body">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h3><img src="{{ asset('images/logo.png')}}" alt="" height="80"> Kuri Fashion</h3>
                        </div>
                        <div class="pull-right m-t-30 text-right">
                            <h4 class="m-b-0">INVOICE</h4>
                            <p>#INV-1</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="pull-left">
                                <strong>Customer Info:</strong>
                                <h4 class="m-b-10">{{ $order->user->customer->first_name.' '.$order->user->customer->last_name }}</h4>
                                <address>

                                @if($order->address->street_address)                                              
                                    {{ $order->address->street_address.', '.$order->address->route.', '. $order->address->city}}
                                    <br>
                                @else
                                    {{ $order->address->route.', '. $order->address->city.', '.$order->address->state}}
                                    <br>
                                @endif
                                    {{ $order->user->customer->phone }}
                                </address>
                            </div>
                            <div class="pull-right text-right">
                                <p><strong>Print Date: </strong>
                                <br>{{date('Y-m-d')}}</br>
                                <strong>Delivery Date: </strong>
                                @if($order->delivery_date)
                                    <br>{{$order->delivery_date}}</p>
                                @else
                                    <br>Not Delivery Yet</p>
                                @endif
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="m-h-50"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table m-t-30 m-b-0 table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="50px;">#</th>
                                            <th>Product</th>
                                            <th>QTY</th>
                                            <th width="150px" class="text-right">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if($order->orderItems->count())
                                    @foreach ($order->orderItems as $key => $orderItem)
                                        <tr>
                                            <td>{{ ($key+1) }}</td>
                                            <td>
                                                <b>{{ $orderItem->product->productDetail->pro_name }}</b><br>
                                                <small>
                                                Code: {{ strtoupper($orderItem->product->pro_code) }}
                                                
                                                Size: {{ strtoupper($orderItem->product_size) }}
                                                
                                                Color: {{ ucfirst($orderItem->product_color) }} 

                                                </small>
                                            </td>
                                            <td>
                                                {{ $orderItem->quantity }}
                                            </td>
                                            <td class="text-right">৳{{ number_format($orderItem->quantity * $orderItem->product->productDetail->pro_price) }}</td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr class="text-center">
                                            <td colspan="4">User have no Orders</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">                                        
                        <div class="col-xs-12">
                            <table class="table text-right table table-bordered table-hover">     
                                <tbody>
                                @foreach(getOrderItemQP($order->id) as $orderTotal)                                     
                                    <tr>
                                        <td><strong>Vat Rate:</strong></td>
                                        <td width="150px" class="text-right">0%</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sub-total:</strong></td>
                                        <td width="150px" class="text-right">৳{{ number_format($orderTotal->TotalPrice) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Shipping Cost:</strong></td>
                                        <td width="150px" class="text-right">৳100</td>
                                    </tr>
                                   
                                    <tr>
                                        <td><strong>Total Due:</strong></td>
                                        <td width="150px" class="text-right">৳{{ number_format($orderTotal->TotalPrice + 100) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>      
                    <div class="row">
                        <div class="col-md-12 m-t-20">
                            <p class="text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
                        </div><!-- end col -->
                    </div>
                    <div class="hidden-print">
                        <div class="pull-right">
                            <a href="javascript:window.print()" class="btn btn-danger waves-effect waves-light"><i class="fa fa-print"></i> Print</a>
                            <a href="{{ URL::previous() }}" class="btn btn-info waves-light">Back</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- end row -->

@endsection