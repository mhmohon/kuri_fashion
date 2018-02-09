<aside class="col-md-3 col-sm-12 col-xs-12 content-aside left_column sidebar-offcanvas">
    <span id="close-sidebar" class="fa fa-times"></span>
			

	<div class="module so_filter_wrap block-shopby">
	    <h3 class="modtitle">
	        <span>SHOP BY</span>
	    </h3>

	    <div class="modcontent bordered_content">
	        <ul data-product_id="72,139,143,152,182,183,184,185,187,189,190,192,194,195,196,197">
	            <li class="so-filter-options" data-option="search">
	                <div class="so-filter-heading">
	                    <div class="so-filter-heading-text">
	                        <span>Search</span>
	                    </div>
	                    <i class="fa fa-chevron-down"></i>
	                </div>
	                <div class="so-filter-content-opts">
	                    <div class="so-filter-content-opts-container">
	                        <div class="so-filter-option" data-type="search">
	                            <div class="so-option-container">
	                                <div class="input-group">
	                                    <input type="text" class="form-control" name="text_search" id="text_search" value="">
	                                    <div class="input-group-btn">
	                                        <button class="btn btn-default inverse" type="button" id="submit_text_search">
	                                            <i class="fa fa-search"></i>
	                                        </button>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </li>
	            <li class="so-filter-options" data-option="Subcategory">
	                <div class="so-filter-heading">
	                    <div class="so-filter-heading-text">
	                        <span>Other Category</span>
	                    </div>
	                    <i class="fa fa-chevron-right"></i>
	                </div>

	                <div class="so-filter-content-opts" style="display: block;">
	                    <div class="so-filter-content-opts-container">
	                    	@foreach($categories as $category)
	                        <div class="so-filter-option-sub opt-select  opt_enable" data-type="subcategory" data-subcategory_value="72" data-count_product="8" data-list_product="72,183,192,193,194,195,196,197">
	                            <div class="so-option-container">
	                                <div class="option-input">
	                                    <span class="fa fa-square-o"></span>
	                                </div>
	                                <label>
	                                    <span><a href="{{ route('viewProductByCategory',$category->id) }}">{{ $category->cat_name }}</a></span>
	                                </label>
	                                <div class="option-count ">
	                                    <span>{{ $category->product->count()}}</span>
	                                    <i class="fa fa-times"></i>
	                                </div>
	                            </div>
	                        </div>
	                        @endforeach
	                        
	                    </div>

	                </div>
	            </li>

	            <li class="so-filter-options" data-option="Price">
	                <div class="so-filter-heading">
	                    <div class="so-filter-heading-text">
	                        <span>Price Range</span>
	                    </div>
	                    <i class="fa fa-chevron-down"></i>
	                </div>

	                <div class="so-filter-content-opts" style="display: block;">
	                    <div class="so-filter-content-opts-container">
	                    	
	                        <div class="so-filter-option-sub opt-select  opt_enable">
	                            <div class="so-option-container">
	                                <div class="option-input">
	                                    <span class="fa fa-square-o"></span>
	                                </div>
	                                <label>
	                                    <span><a href="{{ url('/all-product/view/by_price/min=0&max=2000') }}">0 TK - 2000 Tk</a></span>
	                                </label>
	                                
	                            </div>
	                        </div>
	                        <div class="so-filter-option-sub opt-select  opt_enable">
	                            <div class="so-option-container">
	                                <div class="option-input">
	                                    <span class="fa fa-square-o"></span>
	                                </div>
	                                <label>
	                                    <span><a href="{{ url('/all-product/view/by_price/min=2000&max=4000') }}">2000 TK - 4000 Tk</a></span>
	                                </label>
	                                
	                            </div>
	                        </div>
	                        <div class="so-filter-option-sub opt-select  opt_enable">
	                            <div class="so-option-container">
	                                <div class="option-input">
	                                    <span class="fa fa-square-o"></span>
	                                </div>
	                                <label>
	                                    <span><a href="{{ url('/all-product/view/by_price/min=4000&max=6000') }}">4000 TK - 6000 Tk</a></span>
	                                </label>
	                                
	                            </div>
	                        </div>

	                    </div>
	                </div>
	            </li>
	        </ul>
	        

	    </div>
	</div>
	<script type="text/javascript"> //<![CDATA[
		jQuery(window).load(function($) {
		    $=typeof($ !=='funtion') ? jQuery: $;
		    
		    $(".so-filter-heading").on("click", function() {
		        if($(this).find(".fa").hasClass("fa-chevron-down")) {
		            $(this).find(".fa-chevron-down").addClass('fa-chevron-right', 'slow').removeClass('fa-chevron-down', 'slow');
		        }
		        else {
		            $(this).find(".fa-chevron-right").addClass('fa-chevron-down', 'slow').removeClass('fa-chevron-right', 'slow');
		        }
		        $(this).parent().children(".so-filter-content-opts").slideToggle("slow");
		    }
		    );  

		}

		);
		//]]>
	</script>
</aside>