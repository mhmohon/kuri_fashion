@extends ('front_end.layouts.master')

@section ('page_title','Kuri Fashion')

@section ('main_content')
		

                    
<div id="content">
	
	<div class= "container page-builder-ltr">
		<div class="row row_tb0d box-content1 ">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_8k9a col-style">
			<div class="promotion">
				<span class="textColor">ENDS SOON:</span> EXTRA <span class="textColor">50% OFF</span> ALL ITEM (<i>reduction automatically applied at checkout</i>) + <span class="textColor">FREE STANDARD SHIPPING</span> (<i>on Orders 300 EUR</i>)
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
	          Lorem Khaled Ipsum is a major key to success. It’s on you how you want to live your life
	        </div>
	        <div class="modcontent">
	          <div id="sp_extra_slider_3540808091512108768" class="so-extraslider  button-type2 preset00-4 preset01-4 preset02-3 preset03-2 preset04-1 button-type2 ">
	            <!-- Begin extraslider-inner -->
	            <div class="extraslider-inner products-list grid" data-effect="none">
	              @foreach($productDetails as $productDetail)

	              @if($productDetail->pro_level == 'top')
	              <div class="item">
	                <div class="product-layout  style1">
	                  <div class="product-item-container">
	                    <div class="left-block">
	                      <div class="label-stock label label-success 2-3 Days">NEW</div>
	                      <div class="product-image-container ">
	                        <a class="link-block" href="{{ route('viewSingleProduct',$productDetail->product_id) }}" title=" Swine shankle" target="_blank" >
	                          <img src="{{ asset('images/product/' . $productDetail->pro_image) }}" alt="{{ $productDetail->product->pro_name }}" width="270" height="330">
	                        </a>									
	                      </div>
	                      <div class="box-label">
	                        <!--New Label-->							
	                        <!--Sale Label-->
	                        <span class="label-product label-sale">-29% </span>
	                      </div>
	                      <div class="button-group">
	                        <a href="{{ route('wishlistAdd',$productDetail->product_id) }}" class="wishlist btn-button" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart cls" style="padding:12px;"></i></a>
	                        <button class="addToCart btn" data-toggle="tooltip" title="View Details">
	                          <span>View Details</span>
	                        </button>
	                      <!-- This will add To comapre session -->
	                      <a href="{{ route('compareAdd', $productDetail->product_id) }}" class="compare btn-button" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-random" style="padding:12px;"></i></a>
	                    </div>
	                  </div>
	                  <div class="right-block">
	                    <h4>
	                      <a href="{{ route('viewSingleProduct',$productDetail->product_id) }}" target="_blank" title="">		
	                        {{ $productDetail->product->pro_name }}
	                      </a>
	                    </h4>						
	                    <div class="caption">
	                      <div class="ratings home-rate">
	                        @for ($i=1; $i <= 5 ; $i++)
	                            <span class="glyphicon glyphicon-star{{ ($i <= $productDetail->product->avg_rating) ? '' : '-empty'}}"></span>
	                        @endfor
	                      </div>
	                      <div  class="price">
	                        <span class="price-new">{{ $productDetail->pro_price }}৳</span>
	                      </div>								
	                    </div>
	                  </div>
	                </div>
	                <!-- End item-wrap-inner -->
	              </div>
	              <!-- End item-wrap -->
	            </div>
	            @endif
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
					Lorem Khaled Ipsum is a major key to success. It’s on you how you want to live your life	
				</div>
				<div class="modcontent">
					<div id="sp_extra_slider_1175725011517772254" class="so-extraslider  button-type2 preset00-4 preset01-4 preset02-3 preset03-2 preset04-1 button-type2">
					<!-- Begin extraslider-inner total-->

					
					<!-- extraslider-inner -->
						
					<div class="extraslider-inner products-list grid owl2-carousel owl2-theme owl2-loaded" data-effect="none">
						
					@foreach($productDetails as $productDetail)
		                <div class="item ">
		                    <div class="product-layout  style1">
		                        <div class="product-item-container">
		                            <div class="left-block">
		                                <div class="label-stock label label-success 2-3 Days">2-3 Days</div>

		                               

		                                <div class="product-image-container ">
		                                    <a class="link-block" href="{{ route('viewSingleProduct',$productDetail->product_id) }}" title=" Swine shankle" target="_blank" >
					                          <img src="{{ asset('images/product/' . $productDetail->pro_image) }}" alt="{{ $productDetail->product->pro_name }}" width="270" height="330">
					                        </a>
		                                </div>

		                                <div class="box-label">
		                                    <!--New Label-->

		                                    <!--Sale Label-->
		                                    <span class="label-product label-sale">
		                                        -29%
		                                    </span>

		                                </div>
		                                <div class="button-group">
		                                    <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('144');" data-original-title="Add to Wish List">
		                                        <i class="fa fa-heart"></i>
		                                    </button>

		                                    <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('144');" data-original-title="Add to Cart">
		                                        <span>
		                                            <i class="fa fa-shopping-bag"></i>Add to Cart</span>
		                                    </button>

		                                    <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('144');" data-original-title="Compare this Product">
		                                        <i class="fa fa-random"></i>
		                                    </button>


		                                </div>
		                            </div>

		                            <div class="right-block">

		                                <h4>
		                                    <a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=144" target="_self" title=" Swine shankle">
		                                        Swine shankle </a>
		                                </h4>

		                                <div class="caption">
		                                    <div class="rating">
		                                        <span class="fa fa-stack">
		                                            <i class="fa fa-star-o fa-stack-2x"></i>
		                                        </span>
		                                        <span class="fa fa-stack">
		                                            <i class="fa fa-star-o fa-stack-2x"></i>
		                                        </span>
		                                        <span class="fa fa-stack">
		                                            <i class="fa fa-star-o fa-stack-2x"></i>
		                                        </span>
		                                        <span class="fa fa-stack">
		                                            <i class="fa fa-star-o fa-stack-2x"></i>
		                                        </span>
		                                        <span class="fa fa-stack">
		                                            <i class="fa fa-star-o fa-stack-2x"></i>
		                                        </span>
		                                    </div>


		                                    <div class="price">
		                                        <span class="price-new">$45.00</span>&nbsp;&nbsp;
		                                        <span class="price-old">$63.00</span>&nbsp;
		                                        <span class="price-percent-reduction hidden">Ex Tax: $45.00</span>
		                                    </div>

		                                </div>


		                            </div>
		                        </div>

		                        <!-- End item-wrap-inner -->
		                    </div>
		                    <!-- End item-wrap -->
		                    <div class="product-layout  style1">
		                        <div class="product-item-container">
		                            <div class="left-block">
		                                <div class="label-stock label label-success Pre-Order">Pre-Order</div>

		                                <div class="so-quickview">
		                                    <a class="hidden" data-product="143" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=143" target="_self"></a>
		                                    <a class="quickview iframe-link visible-lg btn-button" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=extension/soconfig/quickview&amp;product_id=143" title="" data-toggle="tooltip" data-title="Quick View"
		                                        data-fancybox-type="iframe" data-original-title="Quick View">
		                                        <i class="fa fa-eye"></i>
		                                    </a>
		                                </div>

		                                <div class="product-image-container ">
		                                    <a class="link-block" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=143" title="Alcatra boudin" target="_self">
		                                        <img src="http://opencart.opencartworks.com/themes/so_jenzo/image/cache/catalog/product/10-270x330.jpg" alt="Alcatra boudin">
		                                    </a>
		                                </div>

		                                <div class="box-label">
		                                    <!--New Label-->

		                                    <!--Sale Label-->
		                                </div>
		                                <div class="button-group">
		                                    <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('143');" data-original-title="Add to Wish List">
		                                        <i class="fa fa-heart"></i>
		                                    </button>

		                                    <button class="addToCart" type="button" data-toggle="tooltip" title="" onclick="cart.add('143');" data-original-title="Add to Cart">
		                                        <span>
		                                            <i class="fa fa-shopping-bag"></i>Add to Cart</span>
		                                    </button>

		                                    <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('143');" data-original-title="Compare this Product">
		                                        <i class="fa fa-random"></i>
		                                    </button>


		                                </div>
		                            </div>

		                            <div class="right-block">

		                                <h4>
		                                    <a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=143" target="_self" title="Alcatra boudin">
		                                        Alcatra boudin </a>
		                                </h4>

		                                <div class="caption">
		                                    <div class="rating">
		                                        <span class="fa fa-stack">
		                                            <i class="fa fa-star-o fa-stack-2x"></i>
		                                        </span>
		                                        <span class="fa fa-stack">
		                                            <i class="fa fa-star-o fa-stack-2x"></i>
		                                        </span>
		                                        <span class="fa fa-stack">
		                                            <i class="fa fa-star-o fa-stack-2x"></i>
		                                        </span>
		                                        <span class="fa fa-stack">
		                                            <i class="fa fa-star-o fa-stack-2x"></i>
		                                        </span>
		                                        <span class="fa fa-stack">
		                                            <i class="fa fa-star-o fa-stack-2x"></i>
		                                        </span>
		                                    </div>


		                                    <div class="price">
		                                        <span class="price-new">
		                                            $66.00 </span>
		                                        <span class="price-percent-reduction hidden">Ex Tax: $66.00</span>
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
	                <p>Lorem khaled ipsum is major </p>
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
	                <p>Lorem khaled ipsum is major </p>
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
	                <p>Lorem khaled ipsum is major </p>
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
	                <p>Lorem khaled ipsum is major </p>
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
