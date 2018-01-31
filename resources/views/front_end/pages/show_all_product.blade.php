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
		            <div class="box-list col-md-2 hidden-sm hidden-xs">
		                <div class="view-mode">
		                    <div class="list-view">
		                        <button class="btn btn-default grid active" data-toggle="tooltip" title="" data-original-title="Grid">
		                            <i class="fa fa-th-large"></i>
		                        </button>
		                        <button class="btn btn-default list " data-toggle="tooltip" title="" data-original-title="List">
		                            <i class="fa fa-bars"></i>
		                        </button>
		                    </div>
		                </div>
		            </div>
		            <div class="short-by-show form-inline text-right col-md-10 col-sm-12">
		                <div class="form-group short-by">
		                    <label class="control-label" for="input-sort">Sort By:</label>
		                    <select id="input-sort" class="form-control" onchange="location = this.value;">
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;sort=pd.name&amp;order=ASC">Name (A - Z)</option>
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;sort=pd.name&amp;order=DESC">Name (Z - A)</option>
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;sort=rating&amp;order=DESC">Rating (Highest)</option>
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;sort=rating&amp;order=ASC">Rating (Lowest)</option>
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;sort=p.model&amp;order=ASC">Model (A - Z)</option>
		                        <option value="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/category&amp;path=33&amp;sort=p.model&amp;order=DESC">Model (Z - A)</option>
		                    </select>
		                </div>

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
		    	@foreach($productDetails as $productDetail)

		        <div class="product-layout col-lg-4 col-md-4 col-sm-4 col-xs-12 " style="display: block;">
		            <div class="product-item-container">
		                <div class="left-block">
		                	<div class="label-stock label label-success 2-3 Days"></div>
		                    
		                    <div class="product-image-container second_img ">
		                        <a href="{{ route('viewSingleProduct',$productDetail->product_id) }}" title=" Swine shankle" target="_blank" >
									
									<img src="{{ asset('images/product/' . $productDetail->pro_image) }}" alt="{{ $productDetail->product->pro_name }}" height="330" width="270">
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
									{{ $productDetail->product->pro_name }}
									</a>
		                        </h4>
		                        <div class="price">
		                            <span class="price-new">{{ $productDetail->pro_price }}৳</span>
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
		            <div class="box-list col-md-2 hidden-sm hidden-xs">
		                <div class="view-mode">
		                    <div class="list-view">
		                        <button class="btn btn-default grid active" data-toggle="tooltip" title="" data-original-title="Grid">
		                            <i class="fa fa-th-large"></i>
		                        </button>
		                        <button class="btn btn-default list " data-toggle="tooltip" title="" data-original-title="List">
		                            <i class="fa fa-bars"></i>
		                        </button>
		                    </div>
		                </div>
		            </div>
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
	</div> <!-- end row -->
</div> <!-- end container product-listing -->
@endsection
