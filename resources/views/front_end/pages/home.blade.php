@extends ('front_end.layouts.master')

@section ('page_title','Kuri Fashion')

@section ('main_content')
		

                    
<div id="content">

	<div class= "container page-builder-ltr">
		<div class="row row_tb0d box-content1 ">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_8k9a col-style">
			<div class="promotion">
				<span class="textColor">Cash Back Offer:</span> Two Piece Dress Order (<i>Cash Back <span class="textColor">300 BDT </span></i>), Three Piece Dress Order (<i>Cash Back <span class="textColor">500 BDT </span></i>), Four Piece Dress Order(<i>Cash Back <span class="textColor">700 BDT </span></i>), Five Piece Dress Order(<i>Cash Back <span class="textColor">900 BDT </span></i>)
			</div>
		</div> 								
		</div> 	
	</div> 	
	<div class= "container-fluid page-builder-ltr">
		<div class="row_left row_k1fl box-content1 ">
			<div class="col-lg-11 col-md-12 col-sm-12 col-xs-12 col_bl7d slider-container ">
				
				<!-- layouts for slides -->
				@include ('front_end.layouts.slider')
					
			</div> 	
		</div>
	</div>

	<!--Shop by category-->
	<div class= "container page-builder-ltr">
	<div class="row row_yg2b ">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_vj55">
			<div class="module hot-categories">
				<h3 class="modtitle">
					<span>Shop by category</span>
				</h3>
				<div class="container">
				<div class="row row_top">
				@foreach($categories as $category)
				  <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
					<div class="item-inner">
						
					  <a href="{{ route('viewProductByCategory',$category->id) }}" title="{{ $category->cat_name }}"> 
						<span class="category-item">{{ $category->cat_name }}</span>
					  </a>
					</div>
				  </div>
				  @endforeach
				 
				  
				</div>
				</div>

			</div>
		</div> 			
				
	</div> 
	</div> 
	<!--End Shop by category-->
	
	<div class= "container page-builder-ltr">
	  <div class="row row_v63n super-overflow">

		<!--best seller products -->
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_3v30 col-style">
	  	<!--Best seller products-->
	      <div class="module so-extraslider-ltr extra-full layout_top">
	        <h3 class="modtitle"><span>Best seller products</span></h3>	
	        <div class="form-group">
	          Our most popular products based on sales. Updated hourly.
	        </div>
	        <div class="modcontent">
	          <div id="sp_extra_slider_3540808091512108768" class="so-extraslider  button-type2 preset00-4 preset01-4 preset02-3 preset03-2 preset04-1 button-type2 ">
	            <!-- Begin extraslider-inner -->
	            <div class="extraslider-inner products-list grid" data-effect="none">

	              @foreach($topProductDetails as $topProductDetail)
					
	              <div class="item">
	                <div class="product-layout  style1">
	                  <div class="product-item-container">
	                    <div class="left-block">
	                      
	                      <div class="product-image-container ">
	                        <a class="link-block" href="{{ route('viewSingleProduct',$topProductDetail->product_id) }}" title="{{ $topProductDetail->pro_name }}" target="_blank" >
	                          <img src="{{ asset('images/product/' . $topProductDetail->pro_image) }}" alt="{{ $topProductDetail->pro_name }}" width="270" height="330">
	                        </a>									
	                      </div>
	                      <div class="box-label">
	                        <!--New Label-->							
	                        <!--Sale Label-->
	                       
	                      </div>
	                      <div class="button-group">
	                        <a href="{{ route('wishlistAdd',$topProductDetail->product_id) }}" class="wishlist btn-button" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart cls" style="padding:12px;"></i>
	                        </a>

	                        <a href="{{ route('viewSingleProduct',$topProductDetail->product_id) }}" class="addToCart btn" data-toggle="tooltip" title="View Details">
	                          <span>View Details</span>
	                        </a>

	                      <!-- This will add To comapre session -->
	                      	<a href="{{ route('compareAdd', $topProductDetail->product_id) }}" class="compare btn-button" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-random" style="padding:12px;"></i>
	                      	</a>
		                  </div>
		                </div>
	                  <div class="right-block">
	                    <h4>
	                      <a href="{{ route('viewSingleProduct',$topProductDetail->product_id) }}" target="_blank" title="">		
	                        {{ $topProductDetail->pro_name }}
	                      </a>
	                    </h4>						
	                    <div class="caption">
	                      <div class="ratings home-rate">
	                        @for ($i=1; $i <= 5 ; $i++)
	                            <span class="glyphicon glyphicon-star{{ ($i <= $topProductDetail->product->avg_rating) ? '' : '-empty'}}"></span>
	                        @endfor
	                      </div>
	                      <div  class="price">
	                        <span class="price-new">৳{{ $topProductDetail->pro_price }}</span>
	                      </div>								
	                    </div>
	                  </div>
	                </div>
	                <!-- End item-wrap-inner -->
	              </div>
	              <!-- End item-wrap -->
	            </div>
	            
	            @endforeach
	          </div>
	          <!--End extraslider-inner -->

	        </div> <!-- /.modcontent -->
	          <script type="text/javascript" src="{{ asset('js/plugins/product_slide.js') }}"></script>
	      </div>
	    </div>
	    </div>	
	    <!--End best seller -->
		
		<!--New  products -->
	    
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_t5fm col-style">
			<div class="module so-extraslider-ltr extra-full extra-layout1-2">
				<h3 class="modtitle">
				    <span>New Arrivals</span>
				</h3>
				<div class="form-group">
					Our recent uploaded products. Feel free to see more.	
				</div>
				<div class="modcontent">
					<div id="sp_extra_slider_1175725011517772254" class="so-extraslider  button-type2 preset00-4 preset01-4 preset02-3 preset03-2 preset04-1 button-type2">
					<!-- Begin extraslider-inner total-->

					
				<!-- extraslider-inner -->
					
				<div class="extraslider-inner products-list grid owl2-carousel owl2-theme owl2-loaded" data-effect="none">
					
					@foreach($newProductDetails as $newProductDetail)
	                <div class="item ">
	                    <div class="product-layout  style1">
	                        <div class="product-item-container">
	                            <div class="left-block">
	                                <div class="label-stock label label-success 2-3 Days">2-3 Days</div>

	                               

	                                <div class="product-image-container ">
	                                    <a class="link-block" href="{{ route('viewSingleProduct',$newProductDetail->product_id) }}" title=" Swine shankle" target="_blank" >
				                          <img src="{{ asset('images/product/' . $newProductDetail->pro_image) }}" alt="{{ $newProductDetail->pro_name }}" width="270" height="330">
				                        </a>
	                                </div>

	                                <div class="box-label">
	                                    <!--New Label-->

	                                    <!--Sale Label-->
	                                    

	                                </div>
	                                <div class="button-group">
	                                    <a href="{{ route('wishlistAdd',$newProductDetail->product_id) }}" class="wishlist btn-button" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart cls" style="padding:12px;"></i>
				                        </a>

				                        <a href="{{ route('viewSingleProduct',$newProductDetail->product_id) }}" class="addToCart btn" data-toggle="tooltip" title="View Details">
				                          <span>View Details</span>
				                        </a>

				                      <!-- This will add To comapre session -->
				                      	<a href="{{ route('compareAdd', $newProductDetail->product_id) }}" class="compare btn-button" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-random" style="padding:12px;"></i>
				                      	</a>


	                                </div>
	                            </div>

	                            <div class="right-block">

	                                <h4>
	                                    <a href="{{ route('viewSingleProduct',$newProductDetail->product_id) }}" target="_blank" title="">		
				                        {{ $newProductDetail->pro_name }}
				                      	</a>
	                                </h4>

	                                <div class="caption">
	                                    <div class="ratings home-rate">
					                        @for ($i=1; $i <= 5 ; $i++)
					                            <span class="glyphicon glyphicon-star{{ ($i <= $newProductDetail->product->avg_rating) ? '' : '-empty'}}"></span>
					                        @endfor
					                      </div>


	                                    <div class="price">
	                                        <span class="price-new">৳{{ $newProductDetail->pro_price }}</span>
	                                    </div>

	                                </div>


	                            </div>
	                        </div>

	                        <!-- End item-wrap-inner -->
	                    </div>
	                    
	                    
	                    <!-- End item-wrap -->
	                </div>
			        @endforeach
				</div>

					<!-- extraslider-inner -->
					
					<!-- end extraslider-inner total-->
					</div><!-- end sp_extra_slider -->
					
					<!-- scripts for slide -->
					<script type="text/javascript"> //<![CDATA[
					jQuery(document).ready(function ($) {
					    ;
					    (function (element) {
					        var $element=$(element), $extraslider=$(".extraslider-inner", $element), _delay=500, _duration=800, _effect='none';
					        $extraslider.on("initialized.owl.carousel2", function () {
					            var $item_active=$(".owl2-item.active", $element);
					            if ($item_active.length > 1 && _effect !="none") {
					                _getAnimate($item_active);
					            }
					            else {
					                var $item=$(".owl2-item", $element);
					                $item.css( {
					                    "opacity": 1, "filter": "alpha(opacity = 100)"
					                }
					                );
					            }
					            if ($(".owl2-dot", $element).length < 2) {
					                $(".owl2-prev", $element).css("display", "none");
					                $(".owl2-next", $element).css("display", "none");
					                $(".owl2-dot", $element).css("display", "none");
					            }
					            $(".owl2-nav", $element).insertBefore($extraslider);
					            $(".owl2-controls", $element).insertAfter($extraslider);
					        }
					        );
					        $extraslider.owlCarousel2( {
					            rtl: false, margin: 30, slideBy: 1, autoplay: 0, autoplayHoverPause: 0, autoplayTimeout: 0, autoplaySpeed: 1000, startPosition: 0, mouseDrag: 1, touchDrag: 1, autoWidth: false, responsive: {
					                0 : {
					                    items: 1
					                }
					                , 480: {
					                    items: 2
					                }
					                , 768: {
					                    items: 3
					                }
					                , 992: {
					                    items: 4
					                }
					                , 1200: {
					                    items: 4
					                }
					            }
					            , dotClass: "owl2-dot", dotsClass: "owl2-dots", dots: true, dotsSpeed:500, nav: false, loop: false, navSpeed: 500, navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], navClass: ["owl2-prev", "owl2-next"]
					        }
					        );
					        $extraslider.on("translate.owl.carousel2", function (e) {
					            if ($(".owl2-dot", $element).length < 2) {
					                $(".owl2-prev", $element).css("display", "none");
					                $(".owl2-next", $element).css("display", "none");
					                $(".owl2-dot", $element).css("display", "none");
					            }
					            var $item_active=$(".owl2-item.active", $element);
					            _UngetAnimate($item_active);
					            _getAnimate($item_active);
					        }
					        );
					        $extraslider.on("translated.owl.carousel2", function (e) {
					            if ($(".owl2-dot", $element).length < 2) {
					                $(".owl2-prev", $element).css("display", "none");
					                $(".owl2-next", $element).css("display", "none");
					                $(".owl2-dot", $element).css("display", "none");
					            }
					            var $item_active=$(".owl2-item.active", $element);
					            var $item=$(".owl2-item", $element);
					            _UngetAnimate($item);
					            if ($item_active.length > 1 && _effect !="none") {
					                _getAnimate($item_active);
					            }
					            else {
					                $item.css( {
					                    "opacity": 1, "filter": "alpha(opacity = 100)"
					                }
					                );
					            }
					        }
					        );
					        function _getAnimate($el) {
					            if (_effect=="none") return;
					            //if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
					            $extraslider.removeClass("extra-animate");
					            $el.each(function (i) {
					                var $_el=$(this);
					                $(this).css( {
					                    "-webkit-animation": _effect + " " + _duration + "ms ease both", "-moz-animation": _effect + " " + _duration + "ms ease both", "-o-animation": _effect + " " + _duration + "ms ease both", "animation": _effect + " " + _duration + "ms ease both", "-webkit-animation-delay": +i * _delay + "ms", "-moz-animation-delay": +i * _delay + "ms", "-o-animation-delay": +i * _delay + "ms", "animation-delay": +i * _delay + "ms", "opacity": 1
					                }
					                ).animate( {
					                    opacity: 1
					                }
					                );
					                if (i==$el.size() - 1) {
					                    $extraslider.addClass("extra-animate");
					                }
					            }
					            );
					        }
					        function _UngetAnimate($el) {
					            $el.each(function (i) {
					                $(this).css( {
					                    "animation": "", "-webkit-animation": "", "-moz-animation": "", "-o-animation": "", "opacity": 1
					                }
					                );
					            }
					            );
					        }
					    }
					    )("#sp_extra_slider_1175725011517772254");
					}

					);
					//]]>
					</script>
					<!-- end scripts for slide -->
				</div><!-- end modcontent -->
			</div><!--module so-extraslider-ltr-->
		</div><!--col-lg-12 main div -->

	    <!--End new -->
		<!-- Services -->
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_rvsk col-style">
	      <div class="block-policy">
	        <div class="row">
	          <div class="item col-lg-3 col-md-6 col-sm-6 col-xs-12">
	            <div class="item-inner">
	              <div class="i-con i-con1">
	                <img src="https://png.icons8.com/refund-filled/ios7/50/000000">
	                <img src="https://png.icons8.com/refund-filled/ios7/50/ffffff" class="img_front">
	              </div>
	              <div class="policy-info">
	                <a href="#">Cash On Delivery</a>
	                <p> Hand-to-hand payment.</p>
	              </div>
	            </div>
	          </div>
	          <div class="item col-lg-3 col-md-6 col-sm-6 col-xs-12">
	            <div class="item-inner">
	              <div class="i-con i-con2">
	                <img src="https://png.icons8.com/in-transit/ios11/55/000000">
	                <img src="https://png.icons8.com/in-transit/ios11/55/ffffff" class="img_front">
	              </div>
	              <div class="policy-info">
	                <a href="#">Fast Delivery</a>
	                <p>Takes maximum 3-4 days. </p>
	              </div>
	            </div>
	          </div>
	          <div class="item col-lg-3 col-md-6 col-sm-6 col-xs-12">
	            <div class="item-inner">
	              <div class="i-con i-con3">
	                <img src="https://png.icons8.com/technical-support-filled/ios7/50/000000">
	                <img src="https://png.icons8.com/technical-support-filled/ios7/50/ffffff" class="img_front">
	              </div>
	              <div class="policy-info">
	                <a href="#">Support 24/7</a>
	                <p>Call us anytime. </p>
	              </div>
	            </div>
	          </div>
	          <div class="item col-lg-3 col-md-6 col-sm-6 col-xs-12">
	            <div class="item-inner">
	              <div class="i-con i-con4">
	                <img src="https://png.icons8.com/return-filled/ios7/50/000000">
	                <img src="https://png.icons8.com/return-filled/ios7/50/ffffff" class="img_front">
	              </div>
	              <div class="policy-info">
	                <a href="#">RETURN & EXCHANGE</a>
	                <p>Return & exchange facility. </p>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div> 			
	  	<!-- /Services -->
	</div> 	
</div>


	<!--/Best seller products-->
	

</div>
@endsection
