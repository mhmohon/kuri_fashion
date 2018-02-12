@php
	$page_title = 'All Products';
@endphp

@extends ('front_end.layouts.master')

@section ('page_title','All Products')

@section ('main_content')

<div class="breadcrumbs">
    <div class="container">
        <div class="current-name">
            {{ $page_title  }}</div>
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li>
                <a href="#">{{ $page_title }}</a>
            </li>
        </ul>
    </div>
</div>

<div class="container product-listing">
	<div class="row">
		<!-- layouts for sidebar category -->
    	@include ('front_end.layouts.sidebar_all_product')

    	<div id="content" class="col-md-9 col-sm-12 col-xs-12"> <!-- start content -->
    		<a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i> Sidebar</a>
    		<div class="sidebar-overlay "></div>
			
			

			<div class="products-category">
		    <!--// Begin  Today Deals-->
		    <h3 class="title-category">{{ $page_title }}</h3>



		    <!--// Begin Select Category Simple -->
		    <!-- Filters -->
		    <div class="product-filter filters-panel">
		        <div class="row">
		            <div class="box-list col-md-4 col-sm-12">
		                <div class="form-group short-by">
		                    <label class="control-label short_by" for="input-sort" >Sort By:</label>

		                    <select id="input-sort" class="text-right form-control display_sort" onchange="location = this.value;">
		                        <option value="{{ url('/all-product/view/')}}">Default</option>
		                        <option value="{{ url('/all-product/view/sort_by=pro_name&order=ASC')}}">Name (A - Z)</option>
		                        <option value="{{ url('/all-product/view/sort_by=pro_name&order=DESC')}}">Name (Z - A)</option>
		                        <option value="{{ url('/all-product/view/sort_by=pro_price&order=ASC')}}">Price (Low &gt; High)</option>
		                        <option value="{{ url('/all-product/view/sort_by=pro_price&order=DESC')}}">Price (High &gt; Low)</option>
		            
		                    </select>
		                </div>
		            </div>
		            <div class="short-by-show form-inline text-right col-md-8 col-sm-12">

		                <div class="product-compare form-group">
		                    <a href="{{ route('compareIndex') }}" id="compare-total" class="btn btn-default">
		                        <i class="fa fa-refresh"></i> Compare</a>
		                </div>

		            </div>

		        </div>
		    </div>
		    <!-- //end Filters -->

		    <!--Changed Listings-->
		    <div class="products-list row grid so-filter-gird">

		    	@if($productDetails->count())
		    	<!--Loop for collect single product-->
		    	@foreach($productDetails as $productDetail)

		        <div class="product-layout col-lg-4 col-md-4 col-sm-4 col-xs-12 " style="display: block;">
		            <div class="product-item-container">
		                <div class="left-block">
		                	<div class="label-stock label label-success 2-3 Days"></div>
		                    
		                    <div class="product-image-container second_img ">
		                        <a href="{{ route('viewSingleProduct',$productDetail->product_id) }}" title=" Swine shankle" target="_blank" >
									
									<img src="{{ asset('images/product/' . $productDetail->pro_image) }}" alt="{{ $productDetail->pro_name }}" height="330" width="270">
								</a>
		                    </div>
		                    @if($productDetail->pro_level == 'top')
		                    	<div class="label-stock label label-success In Stock">Top</div>
							@endif
		                    <div class="button-group">
		                        <a href="{{ route('wishlistAdd',$productDetail->product_id) }}" class="wishlist btn-button" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart cls" style="padding:12px;"></i></a>
		                        <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('196', '1');" data-original-title="Add to Cart">
		                            <span>
		                                <i class="fa fa-shopping-bag"></i>Add to Cart</span>
		                        </button>
		                        <a class="compare btn-button" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-random" style="padding:12px;"></i></a>
		                    </div>
		                </div>
		                <div class="right-block">
		                    <div class="caption">
		                        <h4>
		                            <a href="{{ route('viewSingleProduct',$productDetail->product_id) }}" target="_blank" title="">		
									{{ $productDetail->pro_name }}
									</a>
		                        </h4>
		                        <div class="price">
		                            <span class="price-new">৳{{ $productDetail->pro_price }}</span>
		                        </div>
		                        
		                    </div>
		                </div>
		            </div>
		        </div>

		        @endforeach
		        @else
		        	<div id="content" class="col-md-12 col-sm-12 col-xs-12 layout_top">
						<div class="text-center">
						
							<h1>Empty Query Result</h1>
							<p>There is no product by this range!</p>
							<a href="{{ url('/home') }}" class="btn btn-primary" title="Continue">Go to Home page</a>

						</div>
					
					</div>
		        @endif
		    </div>
		    <!--// End Changed listings-->

		    <!-- Filters -->
		    <div class="product-filter product-filter-bottom filters-panel">
		        <div class="row">
		            <div class="box-list col-md-12 hidden-sm hidden-xs">
		                 
		                 {{ $productDetails->links() }}
		            </div>
		           

		        </div>
		    </div>
		    <!-- //end Filters -->


		    <!--End content-->

		</div>
		
    	</div> <!-- end content -->
	</div> <!-- end row -->
</div> <!-- end container product-listing -->
@endsection

@section('extra_scripts')
	<script>
		var x = document.URL;
		document.getElementById("input-sort").value = x;
	</script>
@endsection