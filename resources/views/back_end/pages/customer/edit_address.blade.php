@extends ('back_end.layouts.master')

<!-- provide title of this page -->
@section ('page_title',' Edit Customer Address')

@section ('main_content')

<!-- Start content -->

	<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">Edit Adrress <small> Edit Existing Adrress Data.</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="{{ route('dashboardHome') }}">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('customerList') }}">Customer List</a>
                    </li>
                    <li class="active">
                        Edit Adrress
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
                        Adrress Form <small>Requierd</small>
                    </h3>
                  
                    <div class="clearfix"></div>
                </div>
                <div id="bg-default" class="panel-collapse collapse in">
                    <div class="portlet-body">                           
                    	<div class='row'>
                    		<div class="col-md-6 col-md-offset-3">
                                {!! Form::open(['route'=>['customerUpdateAddress', $address->id],'class'=>'form-horizontal m-b-30','files' => true]) !!}
	                            
	                            	<div class="form-group {{ $errors->has('house_no') ? ' has-error' : '' }}">
	                                    <label for="house_no" class="col-md-12 control-label txt-left">House No.</label>
	                                    <div class="col-md-12">
	                                         <input class="form-control" placeholder="Enter House No." name="house_no" type="text" value="{{ $address->house_no }}">

                                            @if ($errors->has('house_no'))
                                                <span class="text-danger help-block">
                                                    <block>{{ $errors->first('house_no') }}</block>
                                                </span>
                                            @endif					
	                             		 </div>
	                                </div>                          

                                    <div class="form-group {{ $errors->has('full_address') ? 'has-error' : '' }} ">
                                        <label for="full_address" class="col-md-12 txt-left control-label">Full Address</label>
                                        <div class="col-md-12">
                                        @if($address->street_address)
                                            <input type="text" name="full_address" id="autocomplete" onFocus="geolocate()" value="{{ $address->street_address.', '.$address->route.', '. $address->city}}" placeholder="Customer Full address" class="form-control" data-validation="required"/>
                                        @else
                                            <input type="text" name="full_address" id="autocomplete" onFocus="geolocate()" value="{{ $address->route.', '. $address->city.', '.$address->state}}" placeholder="Customer Full address" class="form-control" data-validation="required"/>
                                        @endif
                                            @if ($errors->has('full_address'))
                                                <span class="text-danger help-block">
                                                    <block>{{ $errors->first('full_address') }}</block>
                                                </span>
                                            @endif                  
                                         </div>
                                    </div>
                                
                                <!-- Address Hidden Field -->

                                <input type="hidden" id="street_address" value="{{ $address->street_address }}" name="street_address"></input>
                                <input type="hidden" id="route" value="{{ $address->route }}" name="route"></input>
                                 
                                  
                               <input type="hidden" id="locality" value="{{ $address->city }}" name="locality"></input>
                                <input type="hidden" id="administrative_area_level_1" value="{{ $address->state }}" name="state"></input>
                                    
                                <input type="hidden" id="postal_code" name="postal_code"></input>
                                <input type="hidden" id="country" value={{ $order->address->country }} name="country"></input>
                                <!-- /Address Hidden Field -->

                                <div class="col-md-12">
                                    <input class="btn btn-danger waves-light" type="submit" value="Update">
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


@section('scripts')

    <script type="text/javascript" src="{{ asset('js/plugins/autcomplete.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVW0FORtm8JXJZpN1pWnmzLiZD_UoyIYE&libraries=places&callback=initAutocomplete"
        async defer></script>

@endsection