@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title','Products')

@section ('main_content')
	
	<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">Product <small> All Products Data.</small></h3> 
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

    <!-- Top Product List -->
     <div class="row">
        <div class="col-sm-12">
            <div class="portlet">
                <div class="portlet-heading portlet-default">
                    <h3 class="portlet-title text-dark">Top Product List</h3>
                    
                    <div class="clearfix"></div>
                </div>    
                <div id="bg-default" class="panel-collapse collapse in">
                    <div class="portlet-body">
                  
                        <div class="table-responsive">

                            <table id="datatable-1" class="table table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Code</th>
                                        <th>price</th>                  
                                        <th>level</th>
                                        <th>Other's Colour</th>
                                        <th>Category</th>                                                         
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>                
                                  
                                @foreach ($products as $key => $product)

                                    @if($product->productDetail->pro_level == 'top')
                                    <tr>
                                        <td>{{ ($key+1) }}</td>
                                        <td>{{ $product->pro_code }}</td>
                                        <td>{{ $product->productDetail->pro_price }}</td>
                                        <td>{{ ucfirst($product->productDetail->pro_level) }}</td>
                                        <td>{{ ucwords($product->productDetail->pro_other_colors) }}</td>
                                        <td>{{ $product->category->cat_name }}</td>

                                        <td class="text-center">
                                            <a href="" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>

                                            <a href="{{ route('productEdit',$product->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach                                                             
                                </tbody>
                            </table> 
                        </div>
                    </div>    
                </div>
            </div>    
        </div>
    </div>
    <!-- /Top Product List -->

     <!-- Top Product List -->
     <div class="row">
        <div class="col-sm-12">
            <div class="portlet">
                <div class="portlet-heading portlet-default">
                    <h3 class="portlet-title text-dark">Trending Product List</h3>
                    
                    <div class="clearfix"></div>
                </div>    
                <div id="bg-default" class="panel-collapse collapse in">
                    <div class="portlet-body">
                  
                        <div class="table-responsive">

                            <table id="datatable-1" class="table table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Code</th>
                                        <th>Description</th>
                                        <th>price</th>                  
                                        <th>level</th>
                                        <th>Other's Colour</th>
                                        <th>Category</th>                                                         
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>                
                                  
                                @foreach ($products as $key => $product)

                                @if($product->pro_level == 'trend')
                                    <tr>
                                        <td>{{ ($key+1) }}</td>
                                        <td>{{ $product->pro_code }}</td>
                                        <td>{{ $product->pro_info }}</td>
                                        <td>{{ $product->pro_price }}</td>
                                        <td>{{ $product->pro_level }}</td>
                                        <td>{{ $product->pro_other_colors }}</td>
                                        <td>{{ $product->cat_id }}</td>

                                        <td class="text-center">
                                            <a href="" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>

                                            <a href="{{ route('productEdit',$product->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @else
                                    
                                        <tr>There is no trending products in database.</tr>
                                    
                                @endif
                                @endforeach                                                             
                                </tbody>
                            </table> 
                        </div>
                    </div>    
                </div>
            </div>    
        </div>
    </div>

    <!-- /Top Product List -->

	<!-- All Product List -->
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet">
                <div class="portlet-heading portlet-default">
                    <h3 class="portlet-title text-dark">All Products</h3>
                    
                    <div class="clearfix"></div>
                </div>    
                <div id="bg-default" class="panel-collapse collapse in">
                    <div class="portlet-body">
                  
                        <div class="table-responsive">

                            <table id="datatable" class="table table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Code</th>
                                        <th>price</th>                  
                                        <th>level</th>
                                        <th>Other's Colour</th>
                                        <th>Category</th>                                                         
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>                

                                  
								@foreach ($products as $key => $product)
                                    <tr>
                                        <td>{{ ($key+1) }}</td>
                                        <td>{{ $product->pro_code }}</td>
                                        <td>{{ $product->productDetail->pro_price }}</td>
                                        <td>{{ $product->productDetail->pro_level }}</td>
                                        <td>{{ $product->productDetail->pro_other_colors }}</td>
                                        <td>{{ $product->category->cat_name }}</td>
 
                                        <td class="text-center">
                                        	<a href="" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>

                                        	<a href="{{ route('productEdit',$product->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
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
