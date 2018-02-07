@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title','Banners')

@section ('main_content')
	
	<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">Banner <small> All Banners Data.</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="{{ route('dashboardHome') }}">Dashboard</a>
                    </li>
                    <li class="active">
                        Banners
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
                        Banner <small>Records</small>
                    </h3>
                    
                    <div class="clearfix"></div>
                </div>    
                <div id="bg-default" class="panel-collapse collapse in">
                    <div class="portlet-body">
                  
                        <div class="table-responsive">

                            <table id="datatable" class="table table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Banner Title</th>
                                        <th>Banner Image</th>                      
                                        <th>Publication Status</th>                                        
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>                

                                  
								@foreach ($banners as $key => $banner)
                                    <tr>
                                        <td>{{ ($key+1) }}</td>
                                        <td>{{ $banner->name }}</td>
                                        <td>{{ $banner->image }}</td>
                                    @if( $banner->publication_status == 0)
                                        <td class="text-center">
                                            <span class="label label-warning"> Unpublished</span>
                                        </td>
                                    @else
                                        <td class="text-center">
                                            <span class="label label-default"> Published</span>
                                        </td>
                                    @endif
                    
                                        
                                        <td class="text-center">
                                        	
                                        	<a href="{{ route('bannerEdit',$banner->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('bannerDelete',$banner->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?')"><i class="fa fa-trash-o"></i></a>
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

@endsection
