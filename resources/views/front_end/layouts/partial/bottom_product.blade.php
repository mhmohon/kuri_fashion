<div class="bottom-product clearfix">
	<ul class="nav nav-tabs">
	    <li class="active">
	        <a data-toggle="tab" href="#product-related" aria-expanded="false">
	            <b>Related</b> Products
	        </a>
	    </li>

	</ul><!-- nav nav-tabs-->
	<div class="tab-content">
		
		<div id="product-related" class="tab-pane fade active in">
	    <div class="clearfix module">
	        <div class="products-category">
	            <div class="releate-products products-list grid owl2-carousel owl2-theme owl2-loaded">
	                <!-- Products list -->
	                @if($related_products->count())
					@foreach($related_products as $related_product)
	                
                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    
                                    <div class="product-image-container ">
                                        <img itemprop="image" class="drift-demo-trigger" src="{{ asset('images/product/'.$related_product->productDetail->pro_image)}}" title=" {{ $related_product->productDetail->pro_name }}" alt="{{ $related_product->productDetail->pro_name }}" width="270" height="330"/>
                                    </div>

                                    <div class="box-label">
                                        <!--New Label-->

                                        <!--Sale Label-->
                                    </div>
                                    <div class="button-group">
                                        <!-- WISHLIST -->
                                        <a href="{{ route('wishlistAdd',$related_product->product_id) }}" class="wishlist btn-button" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart cls" style="padding:12px;"></i></a>
                                        <!-- CART -->
                                        <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('68');" data-original-title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </button>

                                        <!-- COMPARE -->
                                        <a href="{{ route('compareAdd', $related_product->product_id) }}" class="compare btn-button" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-random" style="padding:12px;"></i></a>

                                    </div>
                                </div>

                                <!-- BOX BUTTON -->

                                <div class="right-block">
                                    <div class="caption">
                                        <h4>
                                            <a class="preview-image" href="{{ route('viewSingleProduct',$related_product->product_id) }}">{{ $related_product->productDetail->pro_name }}</a>
                                        </h4>

                                        <div class="ratings">
                                            <div class="rating-box home-rate" itemprop="ratingValue" content="5">
									            @for ($i=1; $i <= 5 ; $i++)
											      <span class="glyphicon glyphicon-star{{ ($i <= $related_product->avg_rating) ? '' : '-empty'}}"></span>
											    @endfor
									        </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">৳{{ $related_product->productDetail->pro_price }}</span>
                                        </div>


                                    </div>

                                </div>
                            </div>

                        </div>
	                        
	            @endforeach
	            @else
	            	<div>
	            		<h3>No Related Products Found!</h3>
	            	</div>
	            @endif
	            </div>
	        </div>
	    </div>
	    <script>
	        // <![CDATA[
	        jQuery(document).ready(function($) {
	            $('.releate-products').owlCarousel2({
	                pagination: false,
	                center: false,
	                nav: true,
	                dots: false,
	                loop: false,
	                margin: 30,
	                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
	                slideBy: 1,
	                autoplay: false,
	                autoplayTimeout: 2500,
	                autoplayHoverPause: true,
	                autoplaySpeed: 800,
	                startPosition: 0,
	                responsive: {
	                    0: {
	                        items: 1
	                    },
	                    480: {
	                        items: 1
	                    },
	                    768: {
	                        items: 2
	                    },
	                    991: {
	                        items: 3
	                    },
	                    1200: {
	                        items: 3
	                    }
	                }
	            });

	        });
	        // ]]>
	    </script>


	</div><!-- product-related -->


	</div><!-- end tab-content -->
</div><!-- end bottom-product -->