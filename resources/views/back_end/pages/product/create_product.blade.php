@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title','Products')

@section ('main_content')

<!-- Start content -->

	<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">Add Product<small> Add New Product Data.</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="active">
                        Add Product
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
                        Product Form <small>Requierd</small>
                    </h3>
                  
                    <div class="clearfix"></div>
                </div>
                <div id="bg-default" class="panel-collapse collapse in">
                    <div class="portlet-body">                           
	                   <form method="POST" action="{{ route('productStore') }}" accept-charset="UTF-8" class="form-horizontal m-b-30" enctype="multipart/form-data">
	                       {{ csrf_field() }}
                        <div class='row'>
                            <div class="col-md-6"> 
                            	<div class="form-group {{ $errors->has('product_code') ? ' has-error' : '' }}">
                                    <label for="product_code" class="col-md-12 control-label txt-left">Product Code</label>
                                    <div class="col-md-12">
                                         <input class="form-control" placeholder="Enter Product Code" required="required" name="product_code" type="text" value="{{ old('product_code') }}">

                                         @if ($errors->has('product_code'))
                                            <span class="text-danger help-block">
                                                <block>{{ $errors->first('product_code') }}</block>
                                            </span>
                                        @endif					
                             		 </div>
                                </div>

                                <div class="form-group {{ $errors->has('product_name') ? ' has-error' : '' }}">
                                    <label for="product_name" class="col-md-12 control-label txt-left">Product Name</label>
                                    <div class="col-md-12">
                                         <input class="form-control" placeholder="Enter Product Name" required="required" name="product_name" type="text" value="{{ old('product_name') }}">

                                         @if ($errors->has('product_name'))
                                            <span class="text-danger help-block">
                                                <block>{{ $errors->first('product_name') }}</block>
                                            </span>
                                        @endif                  
                                     </div>
                                </div> 

                               <div class="row">                             
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Prodcut Level</label>
                                        
                                        <div class="col-md-12">
                                            <select id="level_id" name="product_level" class="form-control select" required="required" tabindex="-1" aria-hidden="true">
                                                <option>--- Select Product Level ---</option>
                                                <option value="top">Top</option>
                                                <option value="feature">Feature</option>
                                                <option value="trend">Trend</option>             
                                                <option value="usual">Usual</option>             
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('product_status') ? ' has-error' : '' }}">
                                        <label for="product_Status" class="col-md-12 control-label txt-left">Product Status</label>
                                        <div class="col-md-12">
                                            <select id="level_id" name="product_status" class="form-control select" required="required" tabindex="-1" aria-hidden="true">
                                                <option>--- Select Product Status ---</option>
                                                <option value="1">Enable</option>
                                                <option value="0">Disable</option>           
                                            </select>
                                        </div>
                                    </div>  
                                </div>
                                </div>
            
                            </div>

                            <div class="col-md-6"> 
                                
                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('product_price') ? ' has-error' : '' }}">
                                            <label for="product_price" class="col-md-12 control-label txt-left">Price</label>
                                            <div class="col-md-12">
                                                <input class="form-control" placeholder="Enter Product Price" required="required" name="product_price" type="number" value="{{ old('product_price') }}">

                                                @if ($errors->has('product_price'))
                                                    <span class="text-danger help-block">
                                                        <block>{{ $errors->first('product_price') }}</block>
                                                    </span>
                                                @endif                  
                                            </div>
                                        </div>  
                                    </div>
                                    <!-- Product Category -->
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('product_category') ? ' has-error' : '' }}">
                                            <label class="col-md-6">Category</label>
                                            <a href="{{ url('dashboard/category/create') }}" class="col-md-6" id="new_category" class="pull-right">
                                                <span class="glyphicon glyphicon-plus"></span> Add Category
                                            </a>
                                            <div class="col-md-12">
                                                <select id="product_id" name="product_category" class="form-control select2 select2-hidden-accessible" required="required" tabindex="-1" aria-hidden="true">                                          
                                                    <option>--- Select Product Category ---</option>
                                                    @foreach($categories as $cat)
                                                    
                                                        <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
                                                    @endforeach  
                                                     
                                                </select>
                                                
                                                @if ($errors->has('product_category'))
                                                    <span class="text-danger help-block">
                                                        <block>{{ $errors->first('product_category') }}</block>
                                                    </span>
                                                @endif  
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product Category -->
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('product_category') ? ' has-error' : '' }}">
                                        <label class="col-md-6">Category</label>
                                        <a href="{{ url('dashboard/category/create') }}" class="col-md-6" id="new_category" class="pull-right">
                                            <span class="glyphicon glyphicon-plus"></span> Add Category
                                        </a>
                                        <div class="col-md-12">
                                            <select id="product_id" name="product_category" class="form-control select2 select2-hidden-accessible" required="required" tabindex="-1" aria-hidden="true">                                          
                                                <option>--- Select Product Category ---</option>
                                                @foreach($categories as $cat)
                                                
                                                    <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
                                                @endforeach  
                                                 
                                            </select>
                                            
                                            @if ($errors->has('product_category'))
                                                <span class="text-danger help-block">
                                                    <block>{{ $errors->first('product_category') }}</block>
                                                </span>
                                            @endif  
                                        </div>
                                    </div>
                                </div>

                     
                                    
                               <div class="form-group {{ $errors->has('product_description') ? 'has-error' : '' }} ">
                                    <label for="product_description" class="col-md-12 txt-left control-label">Product Description</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" placeholder="Enter Product Description" required="required" name="product_description" type="text" value="{{ old('product_description') }}"></textarea> 

                                        @if ($errors->has('product_description'))
                                            <span class="text-danger help-block">
                                                <block>{{ $errors->first('product_description') }}</block>
                                            </span>
                                        @endif                  
                                    </div>
                                </div>  

                            
                                
                            </div>

                            <div class="form-group col-md-8">

                                <label for="product_description" class="col-md-12 txt-left control-label form-lbl">Available Colour</label>
                                <div class="form-group form-ckbox">
                                      <input type="checkbox" name="colors[]" value="red" id="checkbox101" class="filled-in chk-col-red">
                                      <label for="checkbox101">Red</label>
                                      
                                     
                                      <input type="checkbox" name="colors[]" value="blue" class="filled-in chk-col-blue" id="checkbox102" >

                                      <label for="checkbox102">Blue</label>

                                      <input type="checkbox" name="colors[]" value="yellow" class="filled-in chk-col-yellow" id="checkbox103">
                                      <label for="checkbox103">Yellow</label>

                                      <input type="checkbox" name="colors[]" value="black" class="filled-in chk-col-black" id="checkbox104">
                                      <label for="checkbox104">Black</label>

                                      <input type="checkbox" name="colors[]" value="purple" class="filled-in chk-col-purple" id="checkbox105">
                                      <label for="checkbox105">Purple</label>

                                      <input type="checkbox" name="colors[]" value="brown" class="filled-in chk-col-brown" id="checkbox106">
                                      <label for="checkbox106">Brown</label>

                                      <input type="checkbox" name="colors[]" value="lime" class="filled-in chk-col-lime" id="checkbox107">
                                      <label for="checkbox107">Lime</label>

                                </div>  
                                                       
                            </div> 

                            <!-- Upload Image -->
                           
                            <div class="col-md-9 col-md-offset-1" data-bind="fileDrag: fileData">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <img style="height: 150px;" class="img-rounded  thumb" data-bind="attr: { src: fileData().dataURL }, visible: fileData().dataURL">
                                        <div data-bind="ifnot: fileData().dataURL">
                                            <label class="drag-label">Drag file here</label>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="file" name="product_image" data-bind="fileInput: fileData, customFileInput: {
                                          buttonClass: 'btn btn-success',
                                          fileNameClass: 'disabled form-control',
                                          onClear: onClear,
                                        }" accept="image/*">
                                    </div>
                                </div>
                            </div>

                        </div>
                             <input class="btn btn-danger waves-light" type="submit" value="Submit">
				        </form>
			        </div>  
		        </div>        
            </div>
        </div>
    </div>            
    <!-- /row -->

    
    
@endsection


