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
                        <a href="{{ route('dashboardHome') }}">Dashboard</a>
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

                    {!! Form::open(['route'=>'productStore','class'=>'form-horizontal m-b-30 btn-disabled','files' => true]) !!}                          
	                   
                        <div class='row'>
                            <div class="col-md-6"> 
                            	<div class="form-group {{ $errors->has('product_code') ? ' has-error' : '' }}">
                                    <label for="product_code" class="col-md-12 control-label txt-left">Product Code</label>
                                    <div class="col-md-10">
                                        <input class="form-control" onkeydown="upperCaseF(this)" placeholder="Enter Product Code" required="required" name="product_code" type="text" value="{{ old('product_code') }}" data-validation="length alphanumeric" data-validation-length="3-12" 
                                        data-validation-error-msg="Product Code has to be an alphanumeric value (3-12 chars)">

                                        @if ($errors->has('product_code'))
                                            <span class="text-danger help-block">
                                                <block>{{ $errors->first('product_code') }}</block>
                                            </span>
                                        @endif					
                             		 </div>
                                </div>

                                <div class="form-group {{ $errors->has('product_name') ? ' has-error' : '' }}">
                                    <label for="product_name" class="col-md-12 control-label txt-left">Product Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control" placeholder="Enter Product Name" required="required" name="product_name" type="text" value="{{ old('product_name') }}">

                                        @if ($errors->has('product_name'))
                                            <span class="text-danger help-block">
                                                <block>{{ $errors->first('product_name') }}</block>
                                            </span>
                                        @endif                  
                                     </div>
                                </div>
                                <div class="form-group {{ $errors->has('product_color') ? ' has-error' : '' }}">
                                    <label for="product_color" class="col-md-12 control-label txt-left">Product Color</label>
                                    <div class="col-md-10">
                                        <input class="form-control" placeholder="Enter Product Color" required="required" name="product_color" type="text" value="{{ old('product_color') }}" data-validation="required">

                                        @if ($errors->has('product_color'))
                                            <span class="text-danger help-block">
                                                <block>{{ $errors->first('product_color') }}</block>
                                            </span>
                                        @endif                  
                                     </div>
                                </div> 
            
                            </div>
                            <!-- /Left Side -->


                            <!-- Right Side -->
                            <div class="col-md-6">      
                                <div class="row">
                                    <!-- Product Price -->
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('product_price') ? ' has-error' : '' }}">
                                            <label for="product_price" class="col-md-12 control-label txt-left">Price</label>
                                            <div class="col-md-12">
                                                <input class="form-control" placeholder="Enter Product Price" required="required" name="product_price" type="number" value="{{ old('product_price') }}" data-validation="required number" data-validation-allowing="float">

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
                                                {!! Form::select('product_category',$categories,null,['class'=>'form-control select2','required','id'=>'product_id','placeholder'=>'--- Select Product Category ---','data-validation'=>'required']) !!}
                                                
                                                @if ($errors->has('product_category'))
                                                    <span class="text-danger help-block">
                                                        <block>{{ $errors->first('product_category') }}</block>
                                                    </span>
                                                @endif  
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               <div class="row">                             
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('product_level') ? ' has-error' : '' }}">
                                        <label class="col-md-12 txt-left control-label">Prodcut Level</label>
                                        
                                        <div class="col-md-12">
                                            {!! Form::select('product_level',['top'=>'Top','feature'=>'Feature','trend'=>'Trend','usual'=>'Usual'],null,['class'=>'form-control select','required','placeholder'=>'--- Select Product Status ---','data-validation'=>'required']) !!}

                                             @if ($errors->has('product_level'))
                                                <span class="text-danger help-block">
                                                    <block>{{ $errors->first('product_level') }}</block>
                                                </span>
                                            @endif 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('product_status') ? ' has-error' : '' }}">
                                        <label for="product_Status" class="col-md-12 txt-left control-label">Product Status</label>
                                        <div class="col-md-12">
                                        {!! Form::select('product_status',['1'=>'Enable','2'=>'Disable'],null,['class'=>'form-control select','required','placeholder'=>'--- Select Product Status ---','data-validation'=>'required']) !!}
                                        @if ($errors->has('product_status'))
                                            <span class="text-danger help-block">
                                                <block>{{ $errors->first('product_status') }}</block>
                                            </span>
                                        @endif 
                                            
                                        </div>
                                    </div>  
                                </div>
                                </div>

                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('product_weight') ? ' has-error' : '' }}">
                                        <label for="product_weight" class="col-md-12 control-label txt-left">Product Weight(Kg)</label>
                                        <div class="col-md-12">
                                            <input class="form-control" placeholder="Enter Product Weight" required="required" name="product_weight" type="text" data-validation="required number" data-validation-allowing="float" value="{{ old('product_weight') }}">

                                            @if ($errors->has('product_weight'))
                                                <span class="text-danger help-block">
                                                    <block>{{ $errors->first('product_weight') }}</block>
                                                </span>
                                            @endif                  
                                         </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('product_stock') ? ' has-error' : '' }}">
                                        <label for="product_stock" class="col-md-12 control-label txt-left">Product Stock</label>
                                        <div class="col-md-12">
                                            <input class="form-control" placeholder="Enter Product Stock" required="required" name="product_stock" type="text" data-validation="required number" value="{{ old('product_stock') }}">

                                            @if ($errors->has('product_stock'))
                                                <span class="text-danger help-block">
                                                    <block>{{ $errors->first('product_stock') }}</block>
                                                </span>
                                            @endif                  
                                         </div>
                                    </div>
                                </div>
                                </div>       
                            </div>
                            <!-- /Right Side -->
                            
                            <!-- Product Description -->
                           <div class="form-group col-md-12{{ $errors->has('product_description') ? 'has-error' : '' }} ">
                                <label for="product_description" class="col-md-12 txt-left control-label">Product Description</label>
                                <div class="col-md-12">
                                    <textarea id="productDescription" class="form-control" placeholder="Enter Product Description" name="product_description" type="text" data-validation="required">{{ old('product_description') }}</textarea> 

                                    @if ($errors->has('product_description'))
                                        <span class="text-danger help-block">
                                            <block>{{ $errors->first('product_description') }}</block>
                                        </span>
                                    @endif                  
                                </div>
                            </div> 
                            
                            <!-- Available Size -->
                             <div class="form-group col-md-8">

                                <label for="product_description" class="col-md-12 txt-left control-label form-lbl">Available Size</label>
                                <div class="form-group form-ckbox">
                                      <input type="checkbox" name="size[]" value="s" id="checkbox111" class="filled-in chk-col-blue">
                                      <label for="checkbox111">S</label>
                          
                                      <input type="checkbox" name="size[]" value="m" class="filled-in chk-col-blue" id="checkbox112" >
                                      <label for="checkbox112">M</label>

                                      <input type="checkbox" name="size[]" value="l" class="filled-in chk-col-blue" id="checkbox113">
                                      <label for="checkbox113">L</label>

                                      <input type="checkbox" name="size[]" value="xl" class="filled-in chk-col-blue" id="checkbox114">
                                      <label for="checkbox114">XL</label>

                                      <input type="checkbox" name="size[]" value="xxl" class="filled-in chk-col-blue" id="checkbox115">
                                      <label for="checkbox115">XXL</label>

                                      <input type="checkbox" name="size[]" value="xxxl" class="filled-in chk-col-blue" id="checkbox116">
                                      <label for="checkbox116">XXXL</label>
                                </div>  
                                                       
                            </div> 
                            
                            <!-- Available Colour -->
                            <div class="form-group col-md-8">

                                <label for="product_description" class="col-md-12 txt-left control-label form-lbl">Available Colour</label>
                                <div class="form-group form-ckbox">
                                      <input type="checkbox" name="colors[]" value="red" id="checkbox101" class="filled-in chk-col-red" {{ (is_array(old('colors')) and in_array('red', old('colors'))) ? ' checked' : '' }}>
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

                                      <input type="checkbox" name="colors[]" value="multi" class="filled-in chk-col-lime" id="checkbox108">
                                      <label for="checkbox108">MultiColor</label>

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
                                        <input type="file" name="product_image" value="{{ old('product_image') }}" data-bind="fileInput: fileData, customFileInput: {
                                          buttonClass: 'btn btn-success',
                                          fileNameClass: 'disabled form-control',
                                          onClear: onClear,
                                        }" accept="image/*">

                                        @if ($errors->has('product_image'))
                                            <span class="text-danger help-block">
                                                <block>{{ $errors->first('product_image') }}</block>
                                            </span>
                                        @endif   
                                    </div>
                                </div>
                            </div>

                        </div>
                            <input class="btn btn-info waves-light" type="submit" value="Create Product">
                            <input class="btn btn-danger waves-light" type="reset" value="Reset form">

				        {!! Form::close() !!}
			        </div>  
		        </div>        
            </div>
        </div>
    </div>            
    <!-- /row -->

    
    
@endsection

@section('scripts')
    
    <script type="text/javascript">
        function upperCaseF(txt){
            setTimeout(function(){
                txt.value = txt.value.toUpperCase();
            }, 400);
        }
    </script>

    
@endsection


