@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title','Edit Order')

@section ('main_content')

<!-- Start content -->

	<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">View Order<small> Data.</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                     <li>
                        <a href="#">Order list</a>
                    </li>
                    <li class="active">
                        View Order detail
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
                                          
              <div class='row'>
                <!-- Left Side -->

                <div class="col-md-12">
                <div class="order-infomation col-md-6">
                    <h4>General Information</h4>
                  <div class="form-group">
                    <label for="order_date" class="col-md-6 control-label txt-left">Order Date</label>
                    <div class="col-md-6">
                      <label for="order_date" class="control-label">{{ $order->order_date }}</label>              
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="order_status" class="col-md-6 control-label txt-left">Order Status</label>
                    <div class="col-md-6">
                      <label for="order_status" class="control-label">{{ ucfirst($order->status) }}</label>              
                    </div>
                  </div>
                </div>
                
                <!-- Customer Information -->
                <div class="order-infomation col-md-6">
                    <h4>Customer Information</h4>                             
                    <div class="form-group">
                        <label for="customer_name" class="col-md-6 control-label txt-left">Customer Name</label>
                        <div class="col-md-6">
                          <label for="customer_name" class="control-label">{{ $order->user->customer->first_name.' '.$order->user->customer->last_name }}</label>              
                        </div>
                    </div>  

                    <div class="form-group">
                        <label for="customer_email" class="col-md-6 control-label txt-left">Customer Email</label>
                        <div class="col-md-6">
                          <label for="customer_email" class="control-label">{{ $order->user->email }}</label>              
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="customer_phone" class="col-md-6 control-label txt-left">Customer Phone</label>
                        <div class="col-md-6">
                          <label for="customer_phone" class="control-label">{{ $order->user->customer->phone }}</label>              
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
                    <div class="form-group">
                        <label for="delivery_address" class="col-md-6 control-label txt-left">
                            {{ $order->user->customer->first_name.' '.$order->user->customer->last_name }}
                            <br>
                            {{ ucfirst($order->address->street_address) }}
                            <br>
                            {{ ucfirst($order->address->region) }}
                            <br>
                            {{ ucfirst($order->address->city) }}
                        </label>
                    </div>
                </div> 
                

                <!-- Customer Information -->
                <div class="order-infomation col-md-6">
                    <h4>Payment Information</h4>                       
                    <div class="form-group">
                        <label for="payment_type" class="col-md-6 control-label txt-left">Payment Type</label>
                        <div class="col-md-6">
                          <label for="payment_type" class="control-label">{{ ucfirst($order->payment->method_detail) }}</label>              
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
                                    <th>Sub-Total</th>
                                </tr>
                            </thead>
                            <tbody>                

                              
                            @foreach ($order->orderItems as $key => $orderItem)
                                <tr>
                                    <td>#{{ ($key+1) }}</td>
                                    <td>
                                        {{ $orderItem->product->pro_name }}
                                        
                                    </td>
                                    <td>
                                        Code: {{ $orderItem->product->pro_code }}
                                        <br>
                                        Size: {{ $orderItem->product_size }}
                                        <br>
                                        Color: {{ $orderItem->product_color }}
                                    </td>
                                    <td>৳ {{ $orderItem->product->productDetail->pro_price }}</td>
                                    <td>{{ $orderItem->quantity }}</td>

                                    <td>৳ {{ $orderItem->quantity * $orderItem->product->productDetail->pro_price }}</td>
                                    
                                    
                                </tr>
                            @endforeach                                                            
                            </tbody>
                            
                        </table>

                    </div>
                </div>

                 
                <div class="col-md-12">
                
                 <!-- Order Comment -->
                <div class="order-infomation col-md-6">
                  <h4>Order Comment</h4>                               
                    <div class="form-group col-md-12">
   
                        <textarea id="" class="form-control" name="product_description" type="text">{{ $order->order_description }}</textarea> 
  
                    </div>
                </div> 
                

                <!-- Order Total Price -->
                <div class="order-infomation col-md-6">
                    <h4>Order Total Price</h4>                       
                    <div class="table-responsive">
                        <table class="table text-right table table-bordered table-hover">                                                
                            <tbody> 
                                <tr>
                                    <td><strong>Sub-total:</strong></td>
                                    <td width="150px" class="text-right">৳{{ $orderItem->quantity * $orderItem->product->productDetail->pro_price }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Shipping Cose:</strong></td>
                                    <td width="150px" class="text-right">৳100</td>
                                </tr>
                                <tr>
                                    <td><strong>Grand Total</strong></td>
                                    <td width="150px" class="text-right">৳{{ $orderItem->total_price }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    
                </div> 
                </div>
                
                  
              </div> 
                <input class="btn btn-danger waves-light" type="submit" value="Submit">
                <input class="btn btn-danger waves-light" type="submit" value="Back">
            </div> 
          </div>
          
          
        </div>  
      </div>        
    </div>           
    <!-- /row -->


@endsection

@section('scripts')

    <script>
       
        function upperCaseF(txt){
            setTimeout(function(){
                txt.value = txt.value.toUpperCase();
            }, 400);
        }
        window.onload = function() {
            document.getElementById('upload_img').style.display = 'none';
        }
        function hidediv(){
            document.getElementById('upload_img').style.display = 'none';
        }
        function showdiv(){
            document.getElementById('upload_img').style.display = 'block';
        }

    </script>

@endsection


