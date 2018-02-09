@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title','All Orders')

@section ('main_content')
	
	<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">Order <small> All Orders Data.</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="active">
                        Customer
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
        
    </div>
    <!-- end row -->

	<!-- All Product List -->
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet">
                <div class="portlet-heading portlet-default">
                    <h3 class="portlet-title text-dark">All Orders</h3>
                    
                    <div class="clearfix"></div>
                </div>    
                <div id="bg-default" class="panel-collapse collapse in">
                    <div class="portlet-body">
                  
                        <div class="table-responsive">

                            <table id="datatable" class="table table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Serial No.</th>
                                        <th>Placed By</th>                  
                                        <th>Purchase Date</th>
                                        <th>Delivery Date</th>
                                        <th class="text-center">Order Status</th>
                                        <th>Total Cost</th>                                                    
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>                

                                  
								@foreach ($orders as $key => $order)
                                    <tr>
                                        <td>#{{ ($key+1) }}</td>
                                        <td>{{ $order->user->customer->first_name.' '.$order->user->customer->last_name }}</td>
                                        <td>{{ $order->order_date }}</td>

                                    @if( $order->status == 'delivered') 
                                        <td>{{ $order->delivery_date }}</td>
                                    @else
                                        <td>Not Delivery Yet</td>
                                    @endif
                                        
                                    @if( $order->status == 'pending')
                                        <td class="text-center">
                                            <span class="label label-warning"> Pending</span>
                                        </td>
                                    @elseif($order->status == 'confirm')
                                        <td class="text-center">
                                            <span class="label label-default"> Confirm</span>
                                        </td>
                                    @elseif($order->status == 'ready')
                                        <td class="text-center">
                                            <span class="label label-primary"> Ready</span>
                                        </td>
                                    @elseif($order->status == 'delivered')
                                        <td class="text-center">
                                            <span class="label label-success"> Delivered</span>
                                        </td>
                                    @elseif($order->status == 'returned')
                                        <td class="text-center">
                                            <span class="label label-danger"> Returned</span>
                                        </td>
                                    @endif
                                    
                                    @if($order->orderItems->count())
                                    
                                        @foreach (getOrderItemQP($order->id) as $orderItem)

                                            <td>৳ {{ $orderItem->TotalPrice }}</td>
                                        @endforeach
                                    @else
                                        <td>৳0</td>
                                    @endif  
                                        <td class="text-center">
                                            
                                            <a href="http://lily-tms.herokuapp.com/orders/19" class="btn btn-sm btn-info"><i class="fa fa-print"></i></a>

                                            <a href="{{ route('orderView',$order->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>

                                            <a href="{{ route('orderEdit',$order->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            
                                        </td>
                                        
                                    </tr>
                                @endforeach                                                            
                                </tbody>
                            </table> 
                        </div>
                    </div>    
                </div>
            </div>    
        </div>
    </div>
    <!-- /All Product List -->
    
   
  

@endsection
