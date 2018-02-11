@extends ('front_end.layouts.master')

@section ('page_title','Single Product')

@section ('main_content')
<!-- BREADCRUMB -->
<div class="breadcrumbs">
	<div class="container">
      <div class="current-name">
        Swine shankle
      </div>
      <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/single_product"> Swine shankle</a></li>
      </ul>
    </div>
</div>

<div class="container product-detail product-left">
	<div class="row">
    
    <!-- layouts for sidebar category -->
    @include ('front_end.layouts.sidebar_category')
            	
    <div id="content" class="col-md-9 col-sm-12 col-xs-12">
    	
		<div class="row product-view product-info product-view-bg clearfix" itemprop="offerDetails">
			<div class="content-product-left  class-honizol col-md-5 col-sm-12 col-xs-12 ">
				                                      
				<div class="large-image">	

					<img itemprop="image" class="drift-demo-trigger" src="{{ asset('images/product/'.$product->productDetail->pro_image)}}"  data-zoom="{{URL::asset('images/product/'.$product->productDetail->pro_image)}}" title=" Swine shankle" alt=" Swine shankle" height="420" width="345"/>
					<div class="box-label">
						<!--New Label-->
																																		
						<!--Sale Label-->
						
					</div>
				</div>
			</div>
			
			<div class="content-product-right info-right col-md-7 col-sm-12 col-xs-12">
				<div class="title-product font-title">
					<h1 itemprop="name">{{ $product->productDetail->pro_name }}</h1>
				</div>
				 <!-- Review -->
				 <div class="box-review">
				    <div class="ratings">
				        <div class="rating-box home-rate" itemprop="ratingValue" content="5">
				            @for ($i=1; $i <= 5 ; $i++)
						      <span class="glyphicon glyphicon-star{{ ($i <= $product->avg_rating) ? '' : '-empty'}}"></span>
						    @endfor
				        </div>
				    </div>

				    <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;" itemprop="reviewCount" content="1">{{ isset($product->rating_count) ? $product->rating_count : '0' }} reviews</a> |
				    <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
				</div>
				 
				<div class="product-label">

					<div class="product_page_price price" itemprop="offers">							 
				        Price: <span class="price-new"><span itemprop="price" id="price-special">BDT {{ $product->productDetail->pro_price }}</span></span>
					</div>										
				</div>

				<div class="product-box-desc">
					<div class="model"><span>Product Code:</span> {{ $product->pro_code }}</div>
					<div class="stock"><span> Stock: </span> <i class="fa fa-check-square-o"></i> {{ $product->inventory->quantity_in_stock }}</div>			
				</div>
				
			{!! Form::open(['route'=>['cartAdd',$product->id],'name'=>'addToCart']) !!}

				<div class="short_description form-group" itemprop="description">
                   	<h3><span>*<span>Available Colour:</h3>
                   	
                   	<div class="row row_bottom">
	                   	<div class="col-md-2">
		                   	<div class="radio radio-info radio-inline">
								<input type="radio" name="product_color" value="{{ $product->productDetail->pro_color }}" id="current" checked>
	                                            
	                            <label for="current"> {{ ucfirst($product->productDetail->pro_color) }}</label>
							</div>
						</div>

	                   	@foreach($product_colors as $product_color)

	                   		<div class="col-md-2">
								<div class="radio radio-info radio-inline">
									<input type="radio" name="product_color" value="{{ $product_color }}" id="{{ $product_color }}">
		                                            
		                            <label for="{{ $product_color }}"> {{ title_case($product_color) }} </label>
								</div>
							</div>
	                   		
	                   	@endforeach

                   	</div>
					
                   	<h3><span>*<span>Available Size:</h3>
					<div class="row">
	                   	@foreach($product_sizes as $product_size)

	                   		<div class="col-md-2">
								<div class="radio radio-info radio-inline">
									<input type="radio" name="product_size" data-validation="required" value="{{ $product_size }}" id="{{ $product_size }}">
		                                            
		                            <label for="{{ $product_size }}">{{ strtoupper($product_size) }}</label>
								</div>
							</div>
	                   	@endforeach
                   </div>
                </div>
				
				<div id="product">					
					<div class="cart clearfix">
												
						<!-- Quantity -->
						<div class="form-group box-info-product">
						    <div class="option quantity">
						    	<label>Qty</label>
							  <div class="input-group quantity-control">
								  
								  <span class="input-group-addon product_quantity_down fa fa-minus"></span>
								  <input class="form-control" min=0 data-validation="required" type="text" name="quantity" value="1" style="z-index: unset"/>
								  
								  
								  <span class="input-group-addon product_quantity_up fa fa-plus"></span>
							  </div>
						    </div>
						    <div class="detail-action">
							   <!-- CART -->
							   <div class="cart">
									<button type="submit" data-toggle="tooltip" title="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" >
										<span><i class="fa fa-shopping-bag"></i>Add to Cart</span>
									</button>
								</div>
								<div class="add-to-links wish_comp">
									<ul class="blank">
										<li class="wishlist">
											<a href="{{ route('wishlistAdd',$product->productDetail->product_id) }}" class="icon" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></a>
										</li>
									</ul>
								</div>
							</div>	
						</div>
					{!! Form::close() !!}
										
					</div>
				
				</div><!-- end box info product -->

            </div>

            <script>
              new Drift(document.querySelector('.drift-demo-trigger'), {
                paneContainer: document.querySelector('.info-right'),
                inlinePane: 900,
                inlineOffsetY: -85,
                containInline: true,
                hoverBoundingBox: true
              });
            </script>
						
		</div>
	
		<div class="row product-bottom">
						
			<div class="col-xs-12">
				
				<!-- layouts for product tab -->
    			
    			@include ('front_end.layouts.partial.product_tab')

    			<!-- /layouts for product tab -->

    			<!-- layouts for bottom-product -->
    			
    			@include ('front_end.layouts.partial.bottom_product')

    			<!-- /layouts for bottom-product -->		
												
			
    		</div>
	
		</div>

					
    </div>
				
	</div>
</div>


<script type="text/javascript"><!--
	$(document).ready(function() {
		
		$('.product-options li.radio').click(function(){
			$(this).addClass(function() {
				if($(this).hasClass("active")) return "";
				return "active";
			});
			
			$(this).siblings("li").removeClass("active");
			$(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');
		})
		
		// CUSTOM BUTTON
		$(".thumb-vertical-outer .next-thumb").click(function () {
			$( ".thumb-vertical-outer .lSNext" ).trigger( "click" );
		});
		
		$(".thumb-vertical-outer .prev-thumb").click(function () {
			$( ".thumb-vertical-outer .lSPrev" ).trigger( "click" );
		});

		$(".thumb-vertical-outer .thumb-vertical").lightSlider({
			item: 4,
			autoWidth: false,
			vertical:true,
			slideMargin: 10,
			verticalHeight:515,
            pager: false,
			controls: true,
            prevHtml: '<i class="fa fa-arrow-up"></i>',
            nextHtml: '<i class="fa fa-arrow-down"></i>',
			responsive: [
				{
					breakpoint: 1199,
					settings: {
						verticalHeight: 360,
						item: 3,
					}
				},{
					breakpoint: 1024,
					settings: {
						verticalHeight: 540,
						item: 4,
						slideMargin: 5,
					}
				},{
					breakpoint: 768,
					settings: {
						verticalHeight: 364,
						item: 3,
					}
				},{
					breakpoint: 480,
					settings: {
						verticalHeight: 120,
						item: 1,
					}
				}
				
			]
							
        });
		
		
		$("#thumb-slider .owl2-item").each(function() {
			$(this).find("[data-index='0']").addClass('active');
		});
		
	});
	
	
//--></script>




@endsection

@section('extra_scripts')


@endsection
