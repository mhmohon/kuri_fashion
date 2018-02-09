@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title','Edit Order')

@section ('main_content')

<!-- Start content -->

	<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">Edit Order<small> Data.</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="{{ route('home') }}">Dashboard</a>
                    </li>
                     <li>
                        <a href="{{ route('orderIndex') }}">Order list</a>
                    </li>
                    <li class="active">
                        Edit Order detail
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <!-- /row -->
    <div class="row">
      <div class="col-sm-12">
        <div class="portlet">
          <div class="portlet-heading portlet-default">
            <h3 class="portlet-title text-dark">
              Order ID #{{ $order->id }}
            </h3>
            <div class="clearfix"></div>
          </div>
          <div id="bg-default" class="panel-collapse collapse in">
            <div class="portlet-body">
            
            {!! Form::open(['route'=>['orderUpdate',$order->id,$order->address->id],'class'=>'form-horizontal m-b-30','files' => true,'name'=>'editOrderForm']) !!}                      
              <div class='row'>
                <!-- Left Side -->

                <div class="col-md-12">
                <div class="order-infomation col-md-6">
                    <h4>General Information</h4>
                  <div class="form-group">
                    <label for="order_date" class="col-md-6 control-label txt-left">Order Date</label>
                    <div class="col-md-6">
                      <input for="order_date" type="date" class="form-control" name="order_date" value="{{ $order->order_date }}" data-validation="required">              
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="order_status" class="col-md-6 control-label txt-left">Order Status</label>
                    <div class="col-md-6">
                      {!! Form::select('order_status',['pending'=>'Pending','confirm'=>'Confirm','ready'=>'Ready','delivered'=>'Delivered','returned'=>'Returned'],$order->status,['class'=>'form-control select','required','data-validation'=>'required']) !!}             
                    </div>
                  </div>
                </div>
                
                <!-- Customer Information -->
                <div class="order-infomation col-md-6">
                    <h4>Customer Information</h4>                             
                    <div class="form-group">
                        <label for="customer_name" class="col-md-6 control-label txt-left">Customer Name</label>
                        <div class="col-md-6">
                          <input class="form-control" required="required" name="customer_name" type="text" value="{{ $order->user->customer->first_name.' '.$order->user->customer->last_name }}" data-validation="required">

                        @if ($errors->has('customer_name'))
                            <span class="text-danger help-block">
                                <block>{{ $errors->first('customer_name') }}</block>
                            </span>
                        @endif             
                        </div>
                    </div>  

                    <div class="form-group">
                        <label for="customer_email" class="col-md-6 control-label txt-left">Customer Email</label>
                        <div class="col-md-6">
                          
                          <input class="form-control" required="required" name="customer_email" type="email" value="{{ $order->user->email }}" data-validation="required email">

                        @if ($errors->has('customer_email'))
                            <span class="text-danger help-block">
                                <block>{{ $errors->first('customer_email') }}</block>
                            </span>
                        @endif            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="customer_phone" class="col-md-6 control-label txt-left">Customer Phone</label>
                        <div class="col-md-6">
                          <input class="form-control" placeholder="Enter Customer phone number" required="required" name="customer_phone" type="text" value="{{ $order->user->customer->phone }}" data-validation="required number length" data-validation-length="max11">
                          @if ($errors->has('customer_phone'))
                            <span class="text-danger help-block">
                                <block>{{ $errors->first('customer_phone') }}</block>
                            </span>
                        @endif              
                        </div>
                    </div>
                </div>
                
                </div>
                <!-- /Left Side -->

                <!-- Right Side -->
                <div class="col-md-12">
                
                 <!-- Delivery Address -->
                <div class="order-infomation col-md-6">
                  <h4>Shipping Address</h4>
                    <div class="form-group {{ $errors->has('house_no') ? ' has-error' : '' }}">
                        <label for="house_no" class="col-md-4 control-label txt-left">House No.</label>
                        <div class="col-md-8">
                             <input class="form-control" placeholder="Enter House No." name="house_no" type="text" value="{{ $order->address->house_no }}">

                            @if ($errors->has('house_no'))
                                <span class="text-danger help-block">
                                    <block>{{ $errors->first('house_no') }}</block>
                                </span>
                            @endif                  
                         </div>
                    </div>
                    <div class="form-group {{ $errors->has('full_address') ? 'has-error' : '' }} ">
                        <label for="full_address" class="col-md-4 txt-left control-label">Full Address</label>
                        <div class="col-md-8">
                        @if($order->address->street_address)
                            <input type="text" name="full_address" id="autocomplete" onFocus="geolocate()" value="{{ $order->address->street_address.', '.$order->address->route.', '. $order->address->city}}" placeholder="Customer Full address" class="form-control" data-validation="required"/>
                        @else
                            <input type="text" name="full_address" id="autocomplete" onFocus="geolocate()" value="{{ $order->address->route.', '. $order->address->city.', '.$order->address->state}}" placeholder="Customer Full address" class="form-control" data-validation="required"/>
                        @endif
                            @if ($errors->has('full_address'))
                                <span class="text-danger help-block">
                                    <block>{{ $errors->first('full_address') }}</block>
                                </span>
                            @endif                  
                         </div>
                    </div>

                    <!-- Address Hidden Field -->

                    <input type="hidden" id="street_address" value="{{ $order->address->street_address }}" name="street_address"></input>
                    <input type="hidden" id="route" value="{{ $order->address->route }}" name="route"></input>
                     
                      
                   <input type="hidden" id="locality" value="{{ $order->address->city }}" name="locality"></input>
                    <input type="hidden" id="administrative_area_level_1" value="{{ $order->address->state }}" name="state"></input>
                        
                    <input type="hidden" id="postal_code" name="postal_code"></input>
                    <input type="hidden" id="country" value={{ $order->address->country }} name="country"></input>
                    <!-- /Address Hidden Field -->

                </div> 
                

                <!-- Customer Information -->
                <div class="order-infomation col-md-6">
                    <h4>Payment Information</h4>                       
                    <div class="form-group">
                        <label for="payment_type" class="col-md-6 control-label txt-left">Payment Type</label>
                        <div class="col-md-6">
                            {!! Form::select('payment_type',$payment_type,$order->payment_id,['class'=>'form-control','required','data-validation'=>'required']) !!}       
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Currency" class="col-md-6 control-label txt-left">Currency</label>
                        <div class="col-md-6">
                          <label for="Currency" class="control-label">BDT</label>              
                        </div>
                    </div>
                    
                </div> 
                </div>
                <!-- /Right Side -->

                <!-- Items to Invoice  --> 
                <div class="col-md-12">
                    <h4>Order Items</h4>

                    <div class="table-responsive">

                        <table id="" class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Product</th>                  
                                    <th>Product Detail</th>                  
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>                

                            @if($order->orderItems->count())
                            @foreach ($order->orderItems as $key => $orderItem)
                                <tr>
                                    <td>#{{ ($key+1) }}</td>
                                    <td>
                                        {{ $orderItem->product->productDetail->pro_name }}
                                        
                                    </td>
                                    <td>
                                        Code: {{ $orderItem->product->pro_code }}
                                        <br>
                                        Size: {{ $orderItem->product_size }}
                                        <br>
                                        Color: {{ $orderItem->product_color }}
                                    </td>
                                    <td>৳ {{ number_format($orderItem->product->productDetail->pro_price) }}</td>
                                    <td width="8%">
                                    
                                        <input type="number" name="quantity{{ $orderItem->id }}" value="{{ $orderItem->quantity }}" class="form-control">

                                    </td>

                                    <td>৳ {{ number_format($orderItem->quantity * $orderItem->product->productDetail->pro_price) }}</td>
                                    <td class="text-center">
                                        
                                       <button type="submit" formaction="{{  route('orderQuantityUpdate', $orderItem->id) }}" class="btn btn-sm btn-warning"><i class="mdi mdi-cloud-upload mdi-35px"></i></i>
                                        </button>

                                        <button type="submit" formaction="{{  route('orderItemDelete', $orderItem->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i>
                                        </button>

                                                                                                    
                                    </td>

                                </tr>
                            @endforeach
                            @else
                                <tr class="text-center">
                                    <td colspan="7">User have no Orders</td>
                                </tr>
                            @endif                                                        
                            </tbody>
                            
                        </table>

                    </div>
                </div>

                 
                <div class="col-md-12">
                
                 <!-- Order Comment -->
                <div class="order-infomation col-md-6">
                  <h4>Order Comment</h4>                               
                    <div class="form-group col-md-12">
   
                        <textarea id="" class="form-control" name="order_description" type="text">{{ $order->order_description }}</textarea> 
  
                    </div>
                </div> 
                

                <!-- Order Total Price -->
                <div class="order-infomation col-md-6">
                    <h4>Order Total Price</h4>                       
                    <div class="table-responsive">
                        <table class="table text-right table table-bordered table-hover">                                                
                            <tbody>
                            @foreach(getOrderItemQP($order->id) as $orderTotal)
                                <tr>
                                    <td><strong>Sub-total:</strong></td>
                                    <td width="150px" class="text-right">৳{{ number_format($orderTotal->TotalPrice) }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Shipping Cost:</strong></td>
                                    <td width="150px" class="text-right">৳100</td>
                                </tr>
                                <tr>
                                    <td><strong>Grand Total</strong></td>
                                    <td width="150px" class="text-right">৳{{ number_format($orderTotal->TotalPrice + 100) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    
                </div> 
                </div>
                
                  
              </div>
              {{ Form::submit('Update', ['name' => 'order_submit','class'=>'btn btn-danger waves-light']) }}
                
                <a href="{{ URL::previous() }}" class="btn btn-info waves-light">Back</a>
            {{ Form::close() }}

            </div> 
          </div>
          
          
        </div>  
      </div>        
    </div>           
    <!-- /row -->


@endsection

@section('scripts')

    <script type="text/javascript" src="{{ asset('js/plugins/autcomplete.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVW0FORtm8JXJZpN1pWnmzLiZD_UoyIYE&libraries=places&callback=initAutocomplete"
        async defer></script>

@endsection


