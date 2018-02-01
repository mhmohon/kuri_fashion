@php
    $page_title = 'Review'
@endphp
@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title',"All $page_title")

@section ('main_content')
	
	<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">{{ $page_title }} <small> All {{ $page_title }} Data.</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="active">
                        {{ $page_title }}
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
                    <h3 class="portlet-title text-dark">All {{ $page_title }}</h3>
                    
                    <div class="clearfix"></div>
                </div>    
                <div id="bg-default" class="panel-collapse collapse in">
                    <div class="portlet-body">
                  
                        <div class="table-responsive">

                            <table id="datatable" class="table table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Placed By</th>                  
                                        <th>Product</th>                  
                                        <th>Rating</th>
                                        <th>Date</th>
                                        <th class="text-center">Review Status</th>
                                                                                       
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>                

                                  
								@foreach ($reviews as $key => $review)
                                    <tr>
                                        <td>#{{ ($key+1) }}</td>
                                        <td>{{ $review->user->customer->first_name.' '.$review->user->customer->last_name }}</td>

                                        <td>{{ $review->product->pro_name}}</td>
                                        <td>
                                            <div class="ratings">
                                            @for ($i=1; $i <= 5 ; $i++)
                                              <span class="star-left mdi mdi-star{{ ($i <= $review->rating) ? '' : '-empty'}}"></span>
                                              <span class="mdi mdi-star-outline{{ ($i <= 5-$review->rating) ? '' : '-empty'}}"></span>
                                            @endfor
                                            </div>
                                        </td>
                                        <td>{{ $review->created_at->format('d/m/Y') }}</td>

                                    
                                    @if( $review->publication_status == '0')
                                        <td class="text-center">
                                            <span class="label label-warning"> Unpublished</span>
                                        </td>
                                    @elseif($review->publication_status == '1')
                                        <td class="text-center">
                                            <span class="label label-default"> Published</span>
                                        </td>
                                    @endif

                                        
                                        <td class="text-center">
                                            
                                            <a href="{{ route('reviewEdit',$review->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>

                                            <a href="{{ route('reviewDelete',$review->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?')"><i class="fa fa-trash-o"></i></a>
                                        
                                                                                    
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
