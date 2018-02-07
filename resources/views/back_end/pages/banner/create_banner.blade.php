@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title',' Creatae Banner')

@section ('main_content')

<!-- Start content -->

	<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">Add Banner <small> Add New Banner Data.</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="{{ route('dashboardHome') }}">Dashboard</a>
                    </li>
                    <li class="active">
                        Add Banner
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
                        Banner Form <small>Requierd</small>
                    </h3>
                  
                    <div class="clearfix"></div>
                </div>
                <div id="bg-default" class="panel-collapse collapse in">
                    <div class="portlet-body">                           
                    	<div class='row'>
                    		<div class="col-md-6 col-md-offset-3">
                                {!! Form::open(['route'=>'bannerStore','class'=>'form-horizontal m-b-30','files' => true]) !!}
	                            
	                            	<div class="form-group {{ $errors->has('banner_name') ? ' has-error' : '' }}">
	                                    <label for="banner_name" class="col-md-12 control-label txt-left">Banner Name</label>
	                                    <div class="col-md-12">
	                                         <input class="form-control" placeholder="Enter Banner Name" required="required" name="banner_name" type="text" data-validation="required" value="{{ old('banner_name') }}">

                                            @if ($errors->has('banner_name'))
                                                <span class="text-danger help-block">
                                                    <block>{{ $errors->first('banner_name') }}</block>
                                                </span>
                                            @endif					
	                             		 </div>
	                                </div>                          

                                    <div class="form-group {{ $errors->has('banner_status') ? 'has-error' : '' }} ">
                                        <label for="banner_status" class="col-md-12 txt-left control-label">Publication Status</label>
                                        <div class="col-md-12">

                                        {!! Form::select('banner_status',['1'=>'Published','0'=>'Unpublished'], null, ['class'=>'form-control select','data-validation'=>'required','required','placeholder'=>'--Select Publication Status--']) !!}
                                            
                                        </div>
                                    </div>
		                      <!-- Upload Image -->
                           
                                <div class="col-md-12" data-bind="fileDrag: fileData">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <img style="height: 150px;" class="img-rounded  thumb" data-bind="attr: { src: fileData().dataURL }, visible: fileData().dataURL">
                                            <div data-bind="ifnot: fileData().dataURL">
                                                <label class="drag-label">Drag file here</label>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="file" name="banner_image" value="{{ old('banner_image') }}" data-bind="fileInput: fileData, customFileInput: {
                                              buttonClass: 'btn btn-success',
                                              fileNameClass: 'disabled form-control',
                                              onClear: onClear,
                                            }" accept="image/*">

                                            @if ($errors->has('banner_image'))
                                                <span class="text-danger help-block">
                                                    <block>{{ $errors->first('banner_image') }}</block>
                                                </span>
                                            @endif   
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input class="btn btn-danger waves-light" type="submit" value="Submit">
				                    <a class="btn btn-info" href="{{ URL::previous() }}">back</a>
                                </div>
                            {!! Form::close() !!}
				               
                                
				            </div>
			            </div>
			        </div>  
		        </div>        
            </div>
        </div>
    </div>            
    <!-- /row -->

    
    
@endsection


