@php
	$page_title = $category->cat_name;
@endphp

@extends ('front_end.layouts.master')

@section ('page_title', $page_title)

@section ('main_content')

<div class="breadcrumbs">
    <div class="container">
        <div class="current-name">
            {{ $page_title  }}</div>
        <ul class="breadcrumb">
            <li>
                <a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=common/home">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li>
                <a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33">{{ $page_title }}</a>
            </li>
        </ul>
    </div>
</div>

<div class="container product-listing">
	<div class="row">

		<!-- layouts for sidebar category -->
    	@include ('front_end.layouts.sidebar_all_product')
	@if($products->count())

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
		            
		            <div class="short-by-show form-inline text-right col-md-10 col-sm-12">
		                

		                <div class="form-group">
		                    <label class="control-label" for="input-limit">Show:</label>
		                    <select id="input-limit" class="form-control" onchange="location = this.value;">
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;limit=9" selected="selected">9</option>
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;limit=25">25</option>
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;limit=50">50</option>
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;limit=75">75</option>
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;limit=100">100</option>
		                    </select>
		                </div>

		                <div class="product-compare form-group">
		                    <a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/compare" id="compare-total" class="btn btn-default">
		                        <i class="fa fa-refresh"></i> Compare</a>
		                </div>

		            </div>

		        </div>
		    </div>
		    <!-- //end Filters -->

		    <!--Changed Listings-->
		    <div class="products-list row grid so-filter-gird">

		    	<!--Loop for collect single product-->
		    	@foreach($products as $product)

		        <div class="product-layout col-lg-4 col-md-4 col-sm-4 col-xs-12 " style="display: block;">
		            <div class="product-item-container">
		                <div class="left-block">
		                	<div class="label-stock label label-success 2-3 Days"></div>
		                    
		                    <div class="product-image-container second_img ">
		                        <a href="{{ route('viewSingleProduct',$product->id) }}" title=" Swine shankle" target="_blank" >
									
									<img src="{{ asset('images/product/' . $product->productDetail->pro_image) }}" alt="{{ $product->productDetail->product->pro_name }}" height="330" width="270">
								</a>
		                    </div>
		                    @if($product->productDetail->pro_level == 'top')
		                    	<div class="label-stock label label-success In Stock">Top</div>
							@endif
		                    <div class="button-group">
		                        <a href="{{ route('wishlistAdd',$product->id) }}" class="wishlist btn-button" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart cls" style="padding:12px;"></i></a>
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
		                            <a href="{{ route('viewSingleProduct',$product->id) }}" target="_blank" title="">		
									{{ $product->pro_name }}
									</a>
		                        </h4>
		                        <div class="price">
		                            <span class="price-new">{{ $product->productDetail->pro_price }}৳</span>
		                        </div>
		                        <div class="description hidden ">
		                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>

		        @endforeach
		        
		    </div>
		    <!--// End Changed listings-->

		    <!-- Filters -->
		    <div class="product-filter product-filter-bottom filters-panel">
		        <div class="row">
		            
		            <div class="short-by-show text-center col-md-6 col-sm-8 col-xs-12">
		                <div class="form-group" style="margin:0px">Showing 1 to 16 of 16 (1 Pages)</div>
		            </div>
		            <div class="box-pagination col-md-4 col-sm-4 text-right"></div>

		        </div>
		    </div>
		    <!-- //end Filters -->


		    <!--End content-->

		    <script type="text/javascript">
		        <!--
		        $('.view-mode .list-view button').bind("click", function() {
		            if ($(this).is(".active")) {
		                return false;
		            }
		            $.cookie('listingType', $(this).is(".grid") ? 'grid' : 'list', {
		                path: '/'
		            });
		            location.reload();
		        });
		        //-->
		    </script>

		</div>


		
    	</div> <!-- end content -->
	@else
		<div id="content" class="col-md-9 col-sm-12 col-xs-12 layout_top">
			<div class="text-center">
				
				<h1>Empty Product Category</h1>
				<p>There is no product in this product category!</p>
				<a href="{{ url('/home') }}" class="btn btn-primary" title="Continue">Continue</a>
			</div>
		
		 </div>
	@endif
	</div> <!-- end row -->

		
</div> <!-- end container product-listing -->
@endsection
