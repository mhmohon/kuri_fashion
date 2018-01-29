<aside class="col-md-3 col-sm-12 col-xs-12 content-aside left_column sidebar-offcanvas">
    <span id="close-sidebar" class="fa fa-times"></span>
			

	<div class="module icon-style module-category">
	  	<h3 class="modtitle"><span>Categories</span></h3>
	  	<div class="mod-content box-category product-category">
    		<ul class="accordion" id="accordion-category">
    			@foreach($categories as $category)
	      			<li class="panel">
						<a href="">{{ $category->cat_name }}</a>
					</li>
				@endforeach
          </ul>
	  </div>
	</div>
</aside>