@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title','Products')

@section ('main_content')

<!-- Start content -->

	<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">Edit Product<small> Edit Product Data.</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                     <li>
                        <a href="#">Add product</a>
                    </li>
                    <li class="active">
                        Edit Product
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
                        {!! Form::open(['route'=>['productUpdate',$product->id],'class'=>'form-horizontal m-b-30','files' => true,'name'=>'editProductForm']) !!}                            
	                   
                        <div class='row'>
                            <!-- Left Side -->
                            <div class="col-md-6"> 
                            	<div class="form-group {{ $errors->has('product_code') ? ' has-error' : '' }}">
                                    <label for="product_code" class="col-md-12 control-label txt-left">Product Code</label>
                                    <div class="col-md-10">
                                        <input class="form-control" onkeydown="upperCaseF(this)" placeholder="Enter Product Code" required="required" name="product_code" type="text" value="{{ $product->pro_code }}" data-validation="length alphanumeric" data-validation-length="3-12" 
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
                                        <input class="form-control" placeholder="Enter Product Name" required="required" name="product_name" type="text" value="{{ $product->pro_name }}">

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
                                        <input class="form-control" placeholder="Enter Product Color" required="required" name="product_color" type="text" value="{{ $product->productDetail->pro_color }}" data-validation="required">

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
                                                <input class="form-control" placeholder="Enter Product Price" required="required" name="product_price" type="number" value="{{ $product->productDetail->pro_price }}" data-validation="required number" data-validation-allowing="float">

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
                                                {!! Form::select('product_category',$categories,$product->category_id,['class'=>'form-control select2','required','id'=>'product_id','placeholder'=>'--- Select Product Category ---','data-validation'=>'required']) !!}
                                                
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
                                            {!! Form::select('product_level',['top'=>'Top','feature'=>'Feature','trend'=>'Trend','usual'=>'Usual'],$product->productDetail->pro_level,['class'=>'form-control select','required','placeholder'=>'--- Select Product Level ---','data-validation'=>'required']) !!}

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
                                        {!! Form::select('product_status',['1'=>'Enable','0'=>'Disable'],$product->productDetail->pro_status,['id'=>'level_id','class'=>'form-control select','required','data-validation'=>'required','placeholder'=>'--- Select Product Stataus ---']) !!}
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
                                        <label for="product_weight" class="col-md-12 control-label txt-left">Product Weight (Kg)</label>
                                        <div class="col-md-12">
                                            <input class="form-control" placeholder="Enter Product Weight" required="required" name="product_weight" type="text" data-validation="required number" data-validation-allowing="float" value="{{ $product->productDetail->pro_weight }}">

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
                                            <input class="form-control" placeholder="Enter Product Stock" required="required" name="product_stock" type="text" data-validation="required number" value="{{ $product->inventory->quantity_in_stock }}">

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
                           <div class="form-group col-md-12 {{ $errors->has('product_description') ? 'has-error' : '' }} ">
                                <label for="product_description" class="col-md-12 txt-left control-label">Product Description</label>
                                <div class="col-md-12">
                                    <textarea id="productDescription" class="form-control" placeholder="Enter Product Description" required="required" name="product_description" type="text" data-validation="required">{{ $product->productDetail->pro_info }}</textarea> 

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
                                  <input type="checkbox" name="size[]" value="s" id="checkbox111" class="filled-in chk-col-blue" {{ in_array('s', $product_sizes) ? 'checked' : '' }}>
                                  <label for="checkbox111">S</label>
                      
                                  <input type="checkbox" name="size[]" value="m" class="filled-in chk-col-blue" id="checkbox112" {{ in_array('m', $product_sizes) ? 'checked' : '' }}>
                                  <label for="checkbox112">M</label>

                                  <input type="checkbox" name="size[]" value="l" class="filled-in chk-col-blue" id="checkbox113" {{ in_array('l', $product_sizes) ? 'checked' : '' }}>
                                  <label for="checkbox113">L</label>

                                  <input type="checkbox" name="size[]" value="xl" class="filled-in chk-col-blue" id="checkbox114" {{ in_array('xl', $product_sizes) ? 'checked' : '' }}>
                                  <label for="checkbox114">XL</label>

                                  <input type="checkbox" name="size[]" value="xxl" class="filled-in chk-col-blue" id="checkbox115" {{ in_array('xxl', $product_sizes) ? 'checked' : '' }}>
                                  <label for="checkbox115">XXL</label>

                                  <input type="checkbox" name="size[]" value="xxxl" class="filled-in chk-col-blue" id="checkbox116" {{ in_array('xxxl', $product_sizes) ? 'checked' : '' }}>
                                  <label for="checkbox116">XXXL</label>
                            </div>  
                                                   
                        </div>

                        <!-- Product Others Colour -->
                        <div class="form-group col-md-8">

                            <label for="product_description" class="col-md-12 txt-left control-label form-lbl">Available Colour</label>
                            <div class="form-group form-ckbox">
                                <input type="checkbox" name="colors[]" value="red" id="checkbox101" class="filled-in chk-col-red" {{ in_array('red', $product_colors) ? 'checked' : '' }}> 
                                <label for="checkbox101">Red</label>          
                              
                                <input type="checkbox" name="colors[]" value="blue" class="filled-in chk-col-blue" id="checkbox102" {{ in_array('blue', $product_colors) ? 'checked' : '' }}>       
                                <label for="checkbox102">Blue</label>

                                <input type="checkbox" name="colors[]" value="yellow" class="filled-in chk-col-yellow" id="checkbox103" {{ in_array('yellow', $product_colors) ? 'checked' : '' }}>
                                <label for="checkbox103">Yellow</label>

                                <input type="checkbox" name="colors[]" value="black" class="filled-in chk-col-black" id="checkbox104" {{ in_array('black', $product_colors) ? 'checked' : '' }}>
                                <label for="checkbox104">Black</label>

                                <input type="checkbox" name="colors[]" value="purple" class="filled-in chk-col-purple" id="checkbox105" {{ in_array('purple', $product_colors) ? 'checked' : '' }}>
                                <label for="checkbox105">Purple</label>

                                <input type="checkbox" name="colors[]" value="brown" class="filled-in chk-col-brown" id="checkbox106" {{ in_array('brown', $product_colors) ? 'checked' : '' }}>
                                <label for="checkbox106">Brown</label>

                                <input type="checkbox" name="colors[]" value="lime" class="filled-in chk-col-lime" id="checkbox107" {{ in_array('lime', $product_colors) ? 'checked' : '' }}>
                                <label for="checkbox107">Lime</label>

                            </div>  
                                                   
                        </div> 

                            <!-- Upload Image Radio Button -->
                            <div class="form-group col-md-8">
                                <label for="upload_image" class="col-md-12 txt-left control-label form-lbl">Image Upload</label>
                                <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" name="image" id="inlineCheckbox0" checked onclick="hidediv()">
                                            
                                            <label for="inlineCheckbox0"> Continue With Current Picture </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" name="image" id="inlineCheckbox1" onclick="showdiv()">
                                            <label for="inlineCheckbox1"> Upload New Picture </label>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <!-- Upload Image -->
                            <div id="upload_img" class="col-md-9 col-md-offset-1" data-bind="fileDrag: fileData">
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
                             <input class="btn btn-danger waves-light" type="submit" value="Submit">
                             <a class="btn btn-info" href="{{ URL::previous() }}">back</a>
				        {!! Form::close() !!}
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


