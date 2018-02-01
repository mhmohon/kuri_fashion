@php
    $page_title = 'Review'
@endphp
@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title',"Edit $page_title")

@section ('main_content')

<!-- Start content -->

	<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">Edit {{ $page_title }}<small> Data.</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="{{ route('home') }}">Dashboard</a>
                    </li>
                     <li>
                        <a href="#">{{ $page_title }} list</a>
                    </li>
                    <li class="active">
                        Edit {{ $page_title }} Status
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

        {!! Form::open(['route'=>['reviewUpdate',$review->id],'class'=>'form-horizontal m-b-30','name'=>'reviewUpdate']) !!} 
        <div class="portlet">
          <div class="portlet-heading portlet-default">
            <h3 class="portlet-title text-dark">
              Review ID #{{ $review->id }}
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
                    <label for="order_date" class="col-md-6 control-label txt-left">Review Date</label>
                    <div class="col-md-6">
                      <label for="order_date" class="control-label">{{ $review->created_at->format('d/m/Y') }}</label>              
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="order_status" class="col-md-6 control-label txt-left">Review Status</label>
                    <div class="col-md-6">
                      {!! Form::select('review_status',['0'=>'Unpublished','1'=>'Published'],$review->publication_status,['class'=>'form-control select','required','data-validation'=>'required']) !!}               
                    </div>
                  </div>
                </div>
                
                <!-- Customer Information -->
                <div class="order-infomation col-md-6">
                    <h4>User Information</h4>                             
                    <div class="form-group">
                        <label for="customer_name" class="col-md-6 control-label txt-left">User Name</label>
                        <div class="col-md-6">
                          <label for="customer_name" class="control-label">{{ $review->user->customer->first_name.' '.$review->user->customer->last_name }}</label>              
                        </div>
                    </div>  

                    <div class="form-group">
                        <label for="name_in_review" class="col-md-6 control-label txt-left">Name In Review</label>
                        <div class="col-md-6">
                            <input for="name_in_review" type="text" class="form-control" name="name_in_review" value="{{ $review->name }}" data-validation="required">  
                        </div>
                    </div>
                </div>
                
                </div>
                <!-- /Left Side -->

                

                <div class="col-md-12">
                    
                    <div class="order-infomation col-md-6">
                        <h4>Rating Given</h4>                               
                        <div class="form-group col-md-12"> 
                            <div class="ratings">
                            @for ($i=1; $i <= 5 ; $i++)
                              <span class="star-left mdi mdi-star{{ ($i <= $review->rating) ? '' : '-empty'}}"></span>
                              <span class="mdi mdi-star-outline{{ ($i <= 5-$review->rating) ? '' : '-empty'}}"></span>
                            @endfor
                                <p>Rating given {{ $review->rating }} out of 5.</p>
                            </div>

                            <input type="hidden" name="rating" value="{{ $review->rating }}">
                            <input type="hidden" name="product" value="{{ $review->product_id }}">
                        </div>
                    </div>
                    <!-- Review Comment -->
                    <div class="order-infomation col-md-6">
                      <h4>Review Text</h4>                               
                        <div class="form-group col-md-12">
       
                            <textarea id="" class="form-control" disabled name="product_description" type="text">{{ $review->comment }}</textarea> 
      
                        </div>
                    </div> 
  
                </div>
                
                  
              </div> 
                <input class="btn btn-danger waves-light" type="submit" value="Update">
                <a href="{{ URL::previous() }}" class="btn btn-info waves-light">Go To Back</a>
            </div> 
          </div>
          
          
        </div>

        {!! Form::close() !!}

      </div>        
    </div>           
    <!-- /row -->


@endsection


