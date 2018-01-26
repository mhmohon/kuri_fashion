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
    
    @include ('front_end.layouts.sidebar_category')
            	
    <div id="content" class="col-md-9 col-sm-12 col-xs-12">
    	
		<div class="row product-view product-info product-view-bg clearfix" itemprop="offerDetails">
			<div class="content-product-left  class-honizol col-md-5 col-sm-12 col-xs-12 ">
				                                      
				<div class="large-image">
					

					<img itemprop="image" class="drift-demo-trigger" src="{{URL::asset('images/product/'.$product->productDetail->pro_image)}}"  data-zoom="{{URL::asset('images/product/'.$product->productDetail->pro_image)}}" title=" Swine shankle" alt=" Swine shankle" height="420" width="345"/>
					<div class="box-label">
						<!--New Label-->
																																		
						<!--Sale Label-->
						
					</div>
				</div>
			</div>
			
			<div class="content-product-right info-right col-md-7 col-sm-12 col-xs-12">
				<div class="title-product font-title">
					<h1 itemprop="name">{{ $product->pro_name }}</h1>
				</div>
				 <!-- Review -->
				<div class="product-label">
					<div class="product_page_price price" itemprop="offers">											 
				        Price: <span class="price-new"><span itemprop="price" id="price-special">৳ {{ $product->productDetail->pro_price }}</span></span>
					</div>										
				</div>

				<div class="product-box-desc">
					<div class="model"><span>Product Code:</span> {{ $product->pro_code }}</div>
					<div class="stock"><span> Stock: </span> <i class="fa fa-check-square-o"></i> 753</div>			
				</div>
				
				
				<div class="short_description form-group" itemprop="description">
                   	<h3><span>*<span>Available Colour:</h3>
                   	
                   	<div class="row row_bottom">
	                   	<div class="col-md-2">
		                   	<div class="radio radio-info radio-inline">
									<input type="radio" name="product_color" id="current" checked>
		                                            
		                            <label for="current"> Current</label>
							</div>
						</div>

	                   	@foreach($product_colors as $product_color)

	                   		<div class="col-md-2">
								<div class="radio radio-info radio-inline">
									<input type="radio" name="product_color" id="{{ $product_color }}">
		                                            
		                            <label for="{{ $product_color }}"> {{ ucfirst($product_color) }} </label>
								</div>
							</div>
	                   		
	                   	@endforeach

                   	</div>
					
                   	<h3><span>*<span>Available Size:</h3>
					<div class="row">
	                   	@foreach($product_sizes as $product_size)

	                   		<div class="col-md-2">
								<div class="radio radio-info radio-inline">
									<input type="radio" name="product_size" id="{{ $product_size }}">
		                                            
		                            <label for="{{ $product_size }}"> {{ ucfirst($product_size) }} </label>
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
								  <input class="form-control" type="text" name="quantity" value="1" style="z-index: unset"/>
								  <input type="hidden" name="product_id" value="144" />
								  
								  <span class="input-group-addon product_quantity_up fa fa-plus"></span>
							  </div>
						    </div>
						    <div class="detail-action">
							   <!-- CART -->
							   <div class="cart">
									<input type="button" data-toggle="tooltip" title="Add to Cart" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" />
								</div>
								<div class="add-to-links wish_comp">
									<ul class="blank">
										<li class="wishlist">
											<a class="icon" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('144');"><i class="fa fa-heart-o"></i></a>
										</li>
										
									</ul>
								</div>
							</div>
							
						</div>
										
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
				<div class="producttab ">
					<div class="tabsslider  horizontal-tabs col-xs-12">
						<ul class="nav nav-tabs font-title">
							<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>

							<li class="item_nonactive"><a data-toggle="tab" href="#tab-4">TAGS</a></li>
							
							<li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews (0)</a></li>
														
						</ul>
											
						<div class="tab-content  col-xs-12">
							<div id="tab-1" class="tab-pane fade active in">
								{!! $product->productDetail->pro_info  !!}
							</div>
						<div id="tab-review" class="tab-pane fade in">
							
							<form>
						        <div id="review">
						            <table class="table table-striped table-bordered">
						                <tbody>
						                    <tr>
						                        <td style="width: 50%;"><strong>haianh</strong></td>
						                        <td class="text-right">02/03/2017</td>
						                    </tr>
						                    <tr>
						                        <td colspan="2">
						                            <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Mauris interdum fringilla.</p>
						                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
						                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
						                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
						                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
						                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
						                        </td>
						                    </tr>
						                </tbody>
						            </table>
						            <div class="text-right"></div>
						        </div>
						        <h2 id="review-title">Write a review</h2>
						        <div class="contacts-form">
						            <div class="form-group">
						                <span class="icon icon-user"></span>
						                <input type="text" name="name" class="form-control" value="{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}">
						            </div>
						            <div class="form-group">
						                <span class="icon icon-bubbles-2"></span>
						                <textarea class="form-control" name="text"></textarea>
						                
						            </div>
						            <div class="form-group col-md-12">
						                
						                <div class="col-md-2">
							                <br>
							                <span class="row_top"><b>Rating: </b></span>
						            	</div>
										<div class="col-md-10">
							                <div class="col-md-2">
												<div class="radio radio-info radio-inline">
													<input type="radio" name="product_size" value="1" id="1">
						                                            
						                            <label for="1"> Poor </label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="radio radio-info radio-inline">
													<input type="radio" name="product_size" value="1" id="2">
						                                            
						                            <label for="2"> Bad </label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="radio radio-info radio-inline">
													<input type="radio" name="product_size" value="1" id="3">
						                                            
						                            <label for="3"> Good </label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="radio radio-info radio-inline">
													<input type="radio" name="product_size" value="1" id="4">
						                                            
						                            <label for="4"> Great </label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="radio radio-info radio-inline">
													<input type="radio" name="product_size" value="1" id="5">
						                                            
						                            <label for="5"> Excellent </label>
												</div>
											</div>
										</div>
						            </div>
						            <div class="buttons clearfix btn_visible"><a id="button-review" class="btn btn-info">Continue</a></div>

						        </div>
						    </form>
						</div>
						<div id="tab-4" class="tab-pane fade"></div>
				  	</div>
				</div>
			</div>
								
												
			<div class="bottom-product clearfix">
				<ul class="nav nav-tabs">
					<li>
						<a data-toggle="tab" href="#product-related"><b>Related</b> Products</a>
					</li>
					  
					<li class="active">
						<a data-toggle="tab" href="#product-upsell">Upsell Products</a>
					</li>
				</ul>

				<div class="tab-content">
					<div id="product-related" class="tab-pane fade">
					   	<div class="clearfix module">
						<div class="products-category">
			            	<div class="releate-products products-list grid">
							<!-- Products list -->
				                <div class="product-layout">
						  		<div class="product-item-container">
									<div class="left-block">
									<!-- QUICK VIEW -->
										<div class="product-image-container ">
											<img  src="http://opencart.opencartworks.com/themes/so_jenzo/image/cache/catalog/product/7-270x330.jpg" alt="Deserunt donerest" title="Deserunt donerest" class="img-1 img-responsive" />
										</div>
									
									<div class="box-label">
										<!--New Label-->
																																							
										<!--Sale Label-->
										<span></span>
									</div>
									<div class="button-group">
										<!-- WISHLIST -->
										<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('70');"><i class="fa fa-heart"></i></button>
										<!-- CART -->
										<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('70');"> <span>Add to Cart</span></button>
										
										<!-- COMPARE -->
										<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('70');"><i class="fa fa-refresh"></i></button>
										
									</div>
									</div>
								  
								<!-- BOX BUTTON -->
								
								<div class="right-block">
									<div class="caption">
									   <h4><a class="preview-image" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=70">Deserunt donerest</a></h4>

									   	<div class="ratings">
										<div class="rating-box">
											<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
											 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
											 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
											 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
											 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
										</div>
										</div>
									    									    
									<div class="price">
										<span class="price-old">82.13€</span>
									</div>

									</div>
									 
								</div>
						  </div>
                            
                        </div>
                    </div>
			</div>
    	</div>
	
	</div>
		
	<div id="product-upsell" class="tab-pane fade in active">
		<div class="module so-extraslider-ltr upsell-full">
	
		<div class="modcontent ">
			<div id="sp_extra_slider_4364855461512120518"
		 	class="so-extraslider  buttom-type1 preset00-3 preset01-3 preset02-2 preset03-2 picanhareset04-1 button-type1 ">
		<!-- Begin extraslider-inner -->

				<div class="extraslider-inner products-list grid" data-effect="none">
				<div class="item col-sm-4">
						<div class="product-layout  style1">
						<div class="product-item-container">
							<div class="left-block">
								<div class="label-stock label label-success 2-3 Days">2-3 Days</div> 

							<div class="product-image-container ">
								<a class="link-block" href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=171" title="Urgdoggen picanha" target="_self" >
									<img src="http://opencart.opencartworks.com/themes/so_jenzo/image/cache/catalog/product/Index3/14-270x330.jpg" alt="Urgdoggen picanha">
								</a>									
							</div>
					
							<div class="box-label">
								<!--New Label-->
															
								<!--Sale Label-->
							</div>
							<div class="button-group">
								<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('171');"><i class="fa fa-heart"></i></button>
								
								<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('171');">
									<span><i class="fa fa-shopping-bag"></i>Add to Cart</span>
								</button>
																
								<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('171');"><i class="fa fa-random"></i></button>
																																	
								
							</div>
							</div>
						  		
						<div class="right-block">
							<h4>
								<a href="http://opencart.opencartworks.com/themes/so_jenzo/index.php?route=product/product&amp;product_id=171" target="_self"
								title="Urgdoggen picanha">This is Product
								</a>
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
									<span class="price-new">27.38€</span>
								</div>
							</div>

							
						</div>
					</div>

					<!-- End item-wrap-inner -->
				</div>
				<!-- End item-wrap -->
				</div>
								
			</div>
		
		</div>
	
	</div> <!-- /.modcontent -->

</div>
					  	</div>
					</div> 
				</div>
					
			</div>
			
		</div>
		
    </div>
	
					
	</div>
</div>


<script type="text/javascript"><!--
$('#button-cart').on('click', function() {
	$.ajax({
	url: 'index.php?route=extension/soconfig/cart/add',
		type: 'post',
		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-cart').button('loading');
		},
		complete: function() {
			$('#button-cart').button('reset');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();
			$('.form-group').removeClass('has-error');
			
			if (json['error']) {
				if (json['error']['option']) {
					for (i in json['error']['option']) {
						var element = $('#input-option' + i.replace('_', '-'));

						if (element.parent().hasClass('input-group')) {
							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						} else {
							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						}
					}
				}

				if (json['error']['recurring']) {
					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
				}

				// Highlight any found errors
				$('.text-danger').parent().addClass('has-error');
			}
			if (json['success']) {
				$('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="fa fa-close close" data-dismiss="alert"></button></div>');
				$('#cart  .total-shopping-cart ').html(json['total'] );
				$('#cart > ul').load('index.php?route=common/cart/info ul li');
				$('.text-danger').remove();
				timer = setTimeout(function () {
					$('.alert').addClass('fadeOut');
				}, 4000);
			}
			
		},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
	});
});

//--></script> 
<script type="text/javascript"><!--
$('.date').datetimepicker({
	pickTime: false
});

$('.datetime').datetimepicker({
	pickDate: true,
	pickTime: true
});

$('.time').datetimepicker({
	pickDate: false
});

$('button[id^=\'button-upload\']').on('click', function() {
	var node = this;
	
	$('#form-upload').remove();
	
	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');
	
	$('#form-upload input[name=\'file\']').trigger('click');
    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }
	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);
			
			$.ajax({
				url: 'index.php?route=tool/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(node).button('loading');
				},
				complete: function() {
					$(node).button('reset');
				},
				success: function(json) {
					$('.text-danger').remove();
					
					if (json['error']) {
						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
					}
					
					if (json['success']) {
						alert(json['success']);
						
						$(node).parent().find('input').attr('value', json['code']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
//--></script> 
<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
  e.preventDefault();

    $('#review').fadeOut('slow');
    $('#review').load(this.href);
    $('#review').fadeIn('slow');
});

$('#review').load(this.href);

$('#button-review').on('click', function() {
	$.ajax({
		url: 'index.php?route=product/product/write&product_id=144',
		type: 'post',
		dataType: 'json',
		data: 'name=' + encodeURIComponent($('input[name=\'name\']').val()) + '&text=' + encodeURIComponent($('textarea[name=\'text\']').val()) + '&rating=' + encodeURIComponent($('input[name=\'rating\']:checked').val() ? $('input[name=\'rating\']:checked').val() : ''),
		beforeSend: function() {
			$('#button-review').button('loading');
		},
		complete: function() {
			$('#button-review').button('reset');
		},
		success: function(json) {
			$('.alert-success, .alert-danger').remove();
			
			if (json['error']) {
				$('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			}
			
			if (json['success']) {
				$('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');
				
				$('input[name=\'name\']').val('');
				$('textarea[name=\'text\']').val('');
				$('input[name=\'rating\']:checked').prop('checked', false);
			}
		}
	});
});

//--></script> 


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
		
		$('.thumb-video').magnificPopup({
		  type: 'iframe',
		  iframe: {
			patterns: {
			   youtube: {
				  index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
				  id: 'v=', // String that splits URL in a two parts, second part should be %id%
				  src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
					},
				}
			}
		});
	});
	
	
//--></script>


<script type="text/javascript">
var ajax_price = function() {
	$.ajax({
		type: 'POST',
		url: 'index.php?route=extension/soconfig/liveprice/index',
		data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
		dataType: 'json',
			success: function(json) {
			if (json.success) {
				change_price('#price-special', json.new_price.special);
				change_price('#price-tax', json.new_price.tax);
				change_price('#price-old', json.new_price.price);
			}
		}
	});
}

var change_price = function(id, new_price) {
	$(id).html(new_price);
}
$('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\'], .product-info input[type=\'checkbox\'], .product-info select, .product-info textarea, .product-info input[name=\'quantity\']').on('change', function() {
	ajax_price();
});
</script>

@endsection
