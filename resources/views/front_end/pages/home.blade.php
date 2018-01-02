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
				  <div class="item col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<div class="item-inner">
					  <a href="#" title="">
						<img src="image/cate1.png" alt="image"> 
						<span>Clothing</span>
					  </a>
					</div>
				  </div>
				  <div class="item col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<div class="item-inner">
					  <a href="#" title="">
						<img src="image/cate1.png" alt="image"> 
						<span>Shoes</span>
					  </a>
					</div>
				  </div>
				  <div class="item col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<div class="item-inner">
					  <a href="#" title="">
						<img src="image/cate1.png" alt="image"> 
						<span>Handbag</span>
					  </a>
					</div>
				  </div>
				  <div class="item col-lg-2 col-md-2 col-sm-4 col-xs-6">
					<div class="item-inner">
					  <a href="#" title="">
						<img src="image/cate1.png" alt="image"> 
						<span>Grooming</span>
					  </a>
					</div>
				  </div>
				  
				</div>
				</div>

			</div>
		</div> 			
				
	</div> 
	</div> 
	<!--End Shop by category-->
	
	<!--Best seller products-->
	<div class= "container page-builder-ltr">
	<div class="row row_v63n super-overflow">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_3v30 col-style">
		<div class="module so-extraslider-ltr extra-full layout_top">
			<h3 class="modtitle"><span>Best seller products</span></h3>	
			
		<div class="form-group">
			Lorem Khaled Ipsum is a major key to success. It’s on you how you want to live your life
		</div>
			
		<div class="modcontent">
			<div id="sp_extra_slider_3540808091512108768" class="so-extraslider  button-type2 preset00-4 preset01-4 preset02-3 preset03-2 preset04-1 button-type2 ">
		<!-- Begin extraslider-inner -->

		<div class="extraslider-inner products-list grid" data-effect="none">

			

			<div class="item ">
				<div class="product-layout  style1">
					<div class="product-item-container">
						<div class="left-block">
							<div class="label-stock label label-success 2-3 Days">NEW</div> 

							<div class="product-image-container ">
								<a class="link-block" href="#" title=" Swine shankle" target="_self" >
									<img src="images/" alt=" Swine shankle" height="330" width="270">
								</a>									
							</div>
					
							<div class="box-label">
								<!--New Label-->							
								<!--Sale Label-->
								<span class="label-product label-sale">-29% </span>
									
							</div>
							<div class="button-group">
							
								<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('144');"><i class="fa fa-heart"></i></button>

								<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('144');">
									<span><i class="fa fa-shopping-bag"></i>Add to Cart</span>
								</button>
								
								<div class="so-quickview">
									<a class="hidden" data-product='144' href="#" target="_self"></a>
								</div>
								
		
							</div>
						</div>
						  		
						<div class="right-block">
							
							<h4>
								<a href="#" target="_self" title="">

									

								</a>
							</h4>						
							
							<div class="caption">
								<div  class="price">
									
									<span class="price-new">৳</span>&nbsp;&nbsp;
									<span class="price-percent-reduction hidden">Ex Tax: 38.50€</span>
									
								</div>								
							</div>
							
						</div>
					</div>

					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
				
			</div>
			
							
		</div>
		<!--End extraslider-inner -->
	</div>
	<script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready(function ($) {
			;(function (element) {
				var $element = $(element),
						$extraslider = $(".extraslider-inner", $element),
						_delay = 500,
						_duration = 800,
						_effect = 'none';

				$extraslider.on("initialized.owl.carousel2", function () {
					var $item_active = $(".owl2-item.active", $element);
					if ($item_active.length > 1 && _effect != "none") {
						_getAnimate($item_active);
					}
					else {
						var $item = $(".owl2-item", $element);
						$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
					}
										if ($(".owl2-dot", $element).length < 2) {
						$(".owl2-prev", $element).css("display", "none");
						$(".owl2-next", $element).css("display", "none");
						$(".owl2-dot", $element).css("display", "none");
					}
					
										$(".owl2-nav", $element).insertBefore($extraslider);
					$(".owl2-controls", $element).insertAfter($extraslider);
					
				});

				$extraslider.owlCarousel2({
					rtl: false,
					margin: 30,
					slideBy: 1,
					autoplay: 0,
					autoplayHoverPause: 0,
					autoplayTimeout: 0,
					autoplaySpeed: 1000,
					startPosition: 0,
					mouseDrag: 1,
					touchDrag: 1,
					autoWidth: false,
					responsive: {
						0: 	{ items: 1 } ,
						480: { items: 2 },
						768: { items: 3 },
						992: { items: 4 },
						1200: {items: 4}
					},
					dotClass: "owl2-dot",
					dotsClass: "owl2-dots",
					dots: true,
					dotsSpeed:500,
					nav: false,
					loop: false,
					navSpeed: 500,
					navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
					navClass: ["owl2-prev", "owl2-next"]

				});

				$extraslider.on("translate.owl.carousel2", function (e) {
										if ($(".owl2-dot", $element).length < 2) {
						$(".owl2-prev", $element).css("display", "none");
						$(".owl2-next", $element).css("display", "none");
						$(".owl2-dot", $element).css("display", "none");
					}
					
					var $item_active = $(".owl2-item.active", $element);
					_UngetAnimate($item_active);
					_getAnimate($item_active);
				});

				$extraslider.on("translated.owl.carousel2", function (e) {

										if ($(".owl2-dot", $element).length < 2) {
						$(".owl2-prev", $element).css("display", "none");
						$(".owl2-next", $element).css("display", "none");
						$(".owl2-dot", $element).css("display", "none");
					}
					
					var $item_active = $(".owl2-item.active", $element);
					var $item = $(".owl2-item", $element);

					_UngetAnimate($item);

					if ($item_active.length > 1 && _effect != "none") {
						_getAnimate($item_active);
					} else {

						$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});

					}
				});

				function _getAnimate($el) {
					if (_effect == "none") return;
					//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
					$extraslider.removeClass("extra-animate");
					$el.each(function (i) {
						var $_el = $(this);
						$(this).css({
							"-webkit-animation": _effect + " " + _duration + "ms ease both",
							"-moz-animation": _effect + " " + _duration + "ms ease both",
							"-o-animation": _effect + " " + _duration + "ms ease both",
							"animation": _effect + " " + _duration + "ms ease both",
							"-webkit-animation-delay": +i * _delay + "ms",
							"-moz-animation-delay": +i * _delay + "ms",
							"-o-animation-delay": +i * _delay + "ms",
							"animation-delay": +i * _delay + "ms",
							"opacity": 1
						}).animate({
							opacity: 1
						});

						if (i == $el.size() - 1) {
							$extraslider.addClass("extra-animate");
						}
					});
				}

				function _UngetAnimate($el) {
					$el.each(function (i) {
						$(this).css({
							"animation": "",
							"-webkit-animation": "",
							"-moz-animation": "",
							"-o-animation": "",
							"opacity": 1
						});
					});
				}

			})("#sp_extra_slider_3540808091512108768");
		});
		//]]>
	</script>
	</div> <!-- /.modcontent -->

	</div>
	</div> 						
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_t5fm col-style">
		<div class="module so-extraslider-ltr extra-full layout_top">
			<h3 class="modtitle"><span>New Arrivals</span></h3>
	
	<div class="form-group">
		Lorem Khaled Ipsum is a major key to success. It’s on you how you want to live your life	</div>
<div class="modcontent ">
		<div id="sp_extra_slider_16226724581512108768"
		 class="so-extraslider  button-type2 preset00-4 preset01-4 preset02-3 preset03-2 preset04-1 button-type2 ">
		<!-- Begin extraslider-inner -->

	<div class="extraslider-inner products-list grid" data-effect="none">
									<div class="item ">
								<div class="product-layout  style1">
					<div class="product-item-container">
						<div class="left-block">
															<div class="label-stock label label-success 2-3 Days">2-3 Days</div> 
														
							<div class="so-quickview">
								<a class="hidden" data-product='144' href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=144" target="_self"></a>
							</div>

							<div class="product-image-container ">
								<a class="link-block" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=144" title=" Swine shankle" target="_self" >
																	<img src="http://opencart.opencartworks.com/themes/so_jenzo/image/cache/catalog/product/1-270x330.jpg" alt=" Swine shankle">
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
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('144');"><i class="fa fa-heart"></i></button>
								
																	<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('144');">
																				<span><i class="fa fa-shopping-bag"></i>Add to Cart</span>
																			</button>
																
																<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('144');"><i class="fa fa-random"></i></button>
																																	
								
							</div>
						</div>
						  		
						<div class="right-block">
							
															<h4>
									<a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=144" target="_self"
									   title=" Swine shankle"  >
										 Swine shankle									</a>
								</h4>						
							
							<div class="caption">
																<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
								

																	<div  class="price">
																					<span class="price-new">38.50€</span>&nbsp;&nbsp;
											<span class="price-old">53.90€</span>&nbsp;
																															<span class="price-percent-reduction hidden">Ex Tax: 38.50€</span>
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
								<a class="hidden" data-product='143' href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=143" target="_self"></a>
							</div>

							<div class="product-image-container ">
								<a class="link-block" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=143" title="Alcatra boudin" target="_self" >
																	<img src="http://opencart.opencartworks.com/themes/so_jenzo/image/cache/catalog/product/10-270x330.jpg" alt="Alcatra boudin">
																</a>									
							</div>
					
							<div class="box-label">
								<!--New Label-->
															
								<!--Sale Label-->
															</div>
							<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('143');"><i class="fa fa-heart"></i></button>
								
																	<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('143');">
																				<span><i class="fa fa-shopping-bag"></i>Add to Cart</span>
																			</button>
																
																<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('143');"><i class="fa fa-random"></i></button>
																																	
								
							</div>
						</div>
						  		
						<div class="right-block">
							
															<h4>
									<a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=143" target="_self"
									   title="Alcatra boudin"  >
										Alcatra boudin									</a>
								</h4>						
							
							<div class="caption">
																<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
								

																	<div  class="price">
																				<span class="price-new">
											56.46€										</span>
																															<span class="price-percent-reduction hidden">Ex Tax: 56.46€</span>
																			</div>
								
																							</div>

							
						</div>
					</div>

					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
							</div>
													<div class="item ">
								<div class="product-layout  style1">
					<div class="product-item-container">
						<div class="left-block">
															<div class="label-stock label label-success In Stock">In Stock</div> 
														
							<div class="so-quickview">
								<a class="hidden" data-product='139' href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=139" target="_self"></a>
							</div>

							<div class="product-image-container ">
								<a class="link-block" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=139" title="Flank hamhock" target="_self" >
																	<img src="http://opencart.opencartworks.com/themes/so_jenzo/image/cache/catalog/product/11-270x330.jpg" alt="Flank hamhock">
																</a>									
							</div>
					
							<div class="box-label">
								<!--New Label-->
															
								<!--Sale Label-->
															</div>
							<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('139');"><i class="fa fa-heart"></i></button>
								
																	<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('139');">
																				<span><i class="fa fa-shopping-bag"></i>Add to Cart</span>
																			</button>
																
																<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('139');"><i class="fa fa-random"></i></button>
																																	
								
							</div>
						</div>
						  		
						<div class="right-block">
							
															<h4>
									<a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=139" target="_self"
									   title="Flank hamhock"  >
										Flank hamhock									</a>
								</h4>						
							
							<div class="caption">
																<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
								

																	<div  class="price">
																				<span class="price-new">
											57.32€										</span>
																															<span class="price-percent-reduction hidden">Ex Tax: 57.32€</span>
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
															<div class="label-stock label label-success 2-3 Days">2-3 Days</div> 
														
							<div class="so-quickview">
								<a class="hidden" data-product='138' href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=138" target="_self"></a>
							</div>

							<div class="product-image-container ">
								<a class="link-block" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=138" title="Fatback brisket" target="_self" >
																	<img src="http://opencart.opencartworks.com/themes/so_jenzo/image/cache/catalog/product/5-270x330.jpg" alt="Fatback brisket">
																</a>									
							</div>
					
							<div class="box-label">
								<!--New Label-->
															
								<!--Sale Label-->
															</div>
							<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('138');"><i class="fa fa-heart"></i></button>
								
																	<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('138');">
																				<span><i class="fa fa-shopping-bag"></i>Add to Cart</span>
																			</button>
																
																<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('138');"><i class="fa fa-random"></i></button>
																																	
								
							</div>
						</div>
						  		
						<div class="right-block">
							
															<h4>
									<a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=138" target="_self"
									   title="Fatback brisket"  >
										Fatback brisket									</a>
								</h4>						
							
							<div class="caption">
																<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
								

																	<div  class="price">
																				<span class="price-new">
											65.02€										</span>
																															<span class="price-percent-reduction hidden">Ex Tax: 65.02€</span>
																			</div>
								
																							</div>

							
						</div>
					</div>

					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
							</div>
													<div class="item ">
								<div class="product-layout  style1">
					<div class="product-item-container">
						<div class="left-block">
														
							<div class="so-quickview">
								<a class="hidden" data-product='137' href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=137" target="_self"></a>
							</div>

							<div class="product-image-container ">
								<a class="link-block" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=137" title="Filet mignon" target="_self" >
																	<img src="http://opencart.opencartworks.com/themes/so_jenzo/image/cache/catalog/product/8-270x330.jpg" alt="Filet mignon">
																</a>									
							</div>
					
							<div class="box-label">
								<!--New Label-->
															
								<!--Sale Label-->
															</div>
							<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('137');"><i class="fa fa-heart"></i></button>
								
																	<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('137');">
																				<span><i class="fa fa-shopping-bag"></i>Add to Cart</span>
																			</button>
																
																<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('137');"><i class="fa fa-random"></i></button>
																																	
								
							</div>
						</div>
						  		
						<div class="right-block">
							
															<h4>
									<a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=137" target="_self"
									   title="Filet mignon"  >
										Filet mignon									</a>
								</h4>						
							
							<div class="caption">
																<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
								

																	<div  class="price">
																				<span class="price-new">
											42.77€										</span>
																															<span class="price-percent-reduction hidden">Ex Tax: 42.77€</span>
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
															<div class="label-stock label label-success In Stock">In Stock</div> 
														
							<div class="so-quickview">
								<a class="hidden" data-product='89' href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=89" target="_self"></a>
							</div>

							<div class="product-image-container ">
								<a class="link-block" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=89" title="Cornedbeef turkeysed" target="_self" >
																	<img src="http://opencart.opencartworks.com/themes/so_jenzo/image/cache/catalog/product/15-270x330.jpg" alt="Cornedbeef turkeysed">
																</a>									
							</div>
					
							<div class="box-label">
								<!--New Label-->
															
								<!--Sale Label-->
															</div>
							<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('89');"><i class="fa fa-heart"></i></button>
								
																	<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('89');">
																				<span><i class="fa fa-shopping-bag"></i>Add to Cart</span>
																			</button>
																
																<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('89');"><i class="fa fa-random"></i></button>
																																	
								
							</div>
						</div>
						  		
						<div class="right-block">
							
															<h4>
									<a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=89" target="_self"
									   title="Cornedbeef turkeysed"  >
										Cornedbeef turkeysed									</a>
								</h4>						
							
							<div class="caption">
																<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
								

																	<div  class="price">
																				<span class="price-new">
											84.69€										</span>
																															<span class="price-percent-reduction hidden">Ex Tax: 84.69€</span>
																			</div>
								
																							</div>

							
						</div>
					</div>

					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
							</div>
													<div class="item ">
								<div class="product-layout  style1">
					<div class="product-item-container">
						<div class="left-block">
															<div class="label-stock label label-success Pre-Order">Pre-Order</div> 
														
							<div class="so-quickview">
								<a class="hidden" data-product='79' href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=79" target="_self"></a>
							</div>

							<div class="product-image-container ">
								<a class="link-block" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=79" title="Deserunt bresaola" target="_self" >
																	<img src="http://opencart.opencartworks.com/themes/so_jenzo/image/cache/catalog/product/9-270x330.jpg" alt="Deserunt bresaola">
																</a>									
							</div>
					
							<div class="box-label">
								<!--New Label-->
															
								<!--Sale Label-->
															</div>
							<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('79');"><i class="fa fa-heart"></i></button>
								
																	<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('79');">
																				<span><i class="fa fa-shopping-bag"></i>Add to Cart</span>
																			</button>
																
																<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('79');"><i class="fa fa-random"></i></button>
																																	
								
							</div>
						</div>
						  		
						<div class="right-block">
							
															<h4>
									<a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=79" target="_self"
									   title="Deserunt bresaola"  >
										Deserunt bresaola									</a>
								</h4>						
							
							<div class="caption">
																<div class="ratings">
																													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																											</div>
								

																	<div  class="price">
																				<span class="price-new">
											76.14€										</span>
																															<span class="price-percent-reduction hidden">Ex Tax: 76.14€</span>
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
														
							<div class="so-quickview">
								<a class="hidden" data-product='76' href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=76" target="_self"></a>
							</div>

							<div class="product-image-container ">
								<a class="link-block" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=76" title="Adipisicing ground" target="_self" >
																	<img src="http://opencart.opencartworks.com/themes/so_jenzo/image/cache/catalog/product/14-270x330.jpg" alt="Adipisicing ground">
																</a>									
							</div>
					
							<div class="box-label">
								<!--New Label-->
															
								<!--Sale Label-->
															</div>
							<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('76');"><i class="fa fa-heart"></i></button>
								
																	<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('76');">
																				<span><i class="fa fa-shopping-bag"></i>Add to Cart</span>
																			</button>
																
																<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('76');"><i class="fa fa-random"></i></button>
																																	
								
							</div>
						</div>
						  		
						<div class="right-block">
							
															<h4>
									<a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=76" target="_self"
									   title="Adipisicing ground"  >
										Adipisicing ground									</a>
								</h4>						
							
							<div class="caption">
																<div class="ratings">
																													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																											</div>
								

																	<div  class="price">
																				<span class="price-new">
											47.05€										</span>
																															<span class="price-percent-reduction hidden">Ex Tax: 47.05€</span>
																			</div>
								
																							</div>

							
						</div>
					</div>

					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
							</div>
							
		</div>
		<!--End extraslider-inner -->
	</div>
	<script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready(function ($) {
			;(function (element) {
				var $element = $(element),
						$extraslider = $(".extraslider-inner", $element),
						_delay = 500,
						_duration = 800,
						_effect = 'none';

				$extraslider.on("initialized.owl.carousel2", function () {
					var $item_active = $(".owl2-item.active", $element);
					if ($item_active.length > 1 && _effect != "none") {
						_getAnimate($item_active);
					}
					else {
						var $item = $(".owl2-item", $element);
						$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
					}
										if ($(".owl2-dot", $element).length < 2) {
						$(".owl2-prev", $element).css("display", "none");
						$(".owl2-next", $element).css("display", "none");
						$(".owl2-dot", $element).css("display", "none");
					}
					
										$(".owl2-nav", $element).insertBefore($extraslider);
					$(".owl2-controls", $element).insertAfter($extraslider);
					
				});

				$extraslider.owlCarousel2({
					rtl: false,
					margin: 30,
					slideBy: 1,
					autoplay: 0,
					autoplayHoverPause: 0,
					autoplayTimeout: 0,
					autoplaySpeed: 1000,
					startPosition: 0,
					mouseDrag: 1,
					touchDrag: 1,
					autoWidth: false,
					responsive: {
						0: 	{ items: 1 } ,
						480: { items: 2 },
						768: { items: 3 },
						992: { items: 4 },
						1200: {items: 4}
					},
					dotClass: "owl2-dot",
					dotsClass: "owl2-dots",
					dots: true,
					dotsSpeed:500,
					nav: false,
					loop: false,
					navSpeed: 500,
					navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
					navClass: ["owl2-prev", "owl2-next"]

				});

				$extraslider.on("translate.owl.carousel2", function (e) {
										if ($(".owl2-dot", $element).length < 2) {
						$(".owl2-prev", $element).css("display", "none");
						$(".owl2-next", $element).css("display", "none");
						$(".owl2-dot", $element).css("display", "none");
					}
					
					var $item_active = $(".owl2-item.active", $element);
					_UngetAnimate($item_active);
					_getAnimate($item_active);
				});

				$extraslider.on("translated.owl.carousel2", function (e) {

										if ($(".owl2-dot", $element).length < 2) {
						$(".owl2-prev", $element).css("display", "none");
						$(".owl2-next", $element).css("display", "none");
						$(".owl2-dot", $element).css("display", "none");
					}
					
					var $item_active = $(".owl2-item.active", $element);
					var $item = $(".owl2-item", $element);

					_UngetAnimate($item);

					if ($item_active.length > 1 && _effect != "none") {
						_getAnimate($item_active);
					} else {

						$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});

					}
				});

				function _getAnimate($el) {
					if (_effect == "none") return;
					//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
					$extraslider.removeClass("extra-animate");
					$el.each(function (i) {
						var $_el = $(this);
						$(this).css({
							"-webkit-animation": _effect + " " + _duration + "ms ease both",
							"-moz-animation": _effect + " " + _duration + "ms ease both",
							"-o-animation": _effect + " " + _duration + "ms ease both",
							"animation": _effect + " " + _duration + "ms ease both",
							"-webkit-animation-delay": +i * _delay + "ms",
							"-moz-animation-delay": +i * _delay + "ms",
							"-o-animation-delay": +i * _delay + "ms",
							"animation-delay": +i * _delay + "ms",
							"opacity": 1
						}).animate({
							opacity: 1
						});

						if (i == $el.size() - 1) {
							$extraslider.addClass("extra-animate");
						}
					});
				}

				function _UngetAnimate($el) {
					$el.each(function (i) {
						$(this).css({
							"animation": "",
							"-webkit-animation": "",
							"-moz-animation": "",
							"-o-animation": "",
							"opacity": 1
						});
					});
				}

			})("#sp_extra_slider_16226724581512108768");
		});
		//]]>
	</script>
	</div> <!-- /.modcontent -->

</div>
																				</div> 			
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_pihk col-style">
<div class="block-banner2 banners">
  	<div class="row">
    <div class="banner-left col-lg-8 col-md-8 col-sm-12 col-xs-12">
      <div class="row banner-top">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <a href="#"><img src="image/banner2-1.jpg" alt="image"></a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <a href="#"><img src="image/catalog/demo/banner/banner2-2.jpg" alt="image"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <a href="#"><img src="image/catalog/demo/banner/banner2-3.jpg" alt="image"></a>
        </div>
      </div>
    </div>
    <div class="banner-right col-lg-4 col-md-4 hidden-sm col-xs-12">
      <a href="#"><img src="image/catalog/demo/banner/banner2-4.jpg" alt="image"></a>
    </div>
  </div>
</div>																				</div> 					
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
</div>	</div> 			
				
	</div> 	</div> 	
	 
	</div>

@endsection
