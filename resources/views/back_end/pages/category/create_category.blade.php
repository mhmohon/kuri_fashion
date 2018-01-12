@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title','Categories')

@section ('main_content')

<!-- Start content -->

	<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">Add Category <small> Add New Category Data.</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="active">
                        Add Category
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
                        Category Form <small>Requierd</small>
                    </h3>
                  
                    <div class="clearfix"></div>
                </div>
                <div id="bg-default" class="panel-collapse collapse in">
                    <div class="portlet-body">                           
                    	<div class='row'>
                    		<div class="col-md-6 col-md-offset-3"> 
	                            <form method="POST" action="{{ route('categoryStore') }}" accept-charset="UTF-8" class="form-horizontal m-b-30">
	                            	{{ csrf_field() }}
	                            	<div class="form-group {{ $errors->has('category_name') ? ' has-error' : '' }}">
	                                    <label for="category_name" class="col-md-12 control-label txt-left">Category Name</label>
	                                    <div class="col-md-12">
	                                         <input class="form-control" placeholder="Enter Category Name" required="required" name="category_name" type="text" value="{{ old('category_name') }}">

                                             @if ($errors->has('category_name'))
                                                <span class="text-danger help-block">
                                                    <block>{{ $errors->first('category_name') }}</block>
                                                </span>
                                            @endif					
	                             		 </div>
	                                </div>                          

		                            <div class="form-group {{ $errors->has('category_description') ? 'has-error' : '' }} ">
	                                    <label for="category_name" class="col-md-12 txt-left control-label">Category Description</label>
	                                    <div class="col-md-12">
	                                        <input class="form-control" placeholder="Enter Category Description" required="required" name="category_description" type="text" value="{{ old('category_description') }}">	

                                            @if ($errors->has('category_description'))
                                                <span class="text-danger help-block">
                                                    <block>{{ $errors->first('category_name') }}</block>
                                                </span>
                                            @endif  				
	                                    </div>
	                                </div>
                                   <div class="form-group {{ $errors->has('category_description') ? 'has-error' : '' }} ">
                                        <label for="category_name" class="col-md-12 txt-left control-label">Publication Status</label>
                                        <div class="col-md-12">
                                            <select id="level_id" name="category_status" class="form-control select" required="required" name="customer_id" tabindex="-1" aria-hidden="true">
                                                <option>--- Select Publication Status ---</option>
                                                <option value="1">Published</option>
                                                <option value="0">Unpublished</option>
                                                           
                                            </select>
                                        </div>
                                    </div> 
				                    <input class="btn btn-danger waves-light" type="submit" value="Submit">
				                </form>
                                
				            </div>
			            </div>
			        </div>  
		        </div>        
            </div>
        </div>
    </div>            
    <!-- /row -->

    
    
@endsection


