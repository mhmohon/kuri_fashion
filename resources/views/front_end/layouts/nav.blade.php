<nav class="navbar-default">
	<div class=" container-megamenu  horizontal">
		<div class="navbar-header">
			<button type="button" id="show-megamenu" data-toggle="collapse"  class="navbar-toggle">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		</div>

		<div class="megamenu-wrapper">

			<span id="remove-megamenu" class="fa fa-times"></span>
	 
			<div class="megamenu-pattern">
			<div class="container">
				<ul class="megamenu" data-transition="slide" data-animationtime="300">

					<li class="home">
							<a href="{{ url('/') }}">
								<span><strong>Home</strong></span>
							</a>
					</li>
					<li class='style-page with-sub-menu hover'><p class='close-menu'></p><a href='' class='clearfix' >
						<strong>Dresses</strong>
						<b class='caret' ></b></a>
						<div class="sub-menu" style="width:180px"><div class="content row col-sm-12 html">
							<ul class="row-list" style="font-size: 14px;">
								<li><a class="subcategory_item" href="{{ route('viewAllProduct') }}">All Dresses</a></li>
								<li><a class="subcategory_item" href="#">Top Dresses</a></li>
								<li><a class="subcategory_item" href="#">Feature Dresses</a></li>
								<li><a class="subcategory_item" href="#">Trend Dresses</a></li>  
							</ul>
						</div></div>
					</li>
				

					<li class='full-width menu-features with-sub-menu hover' >
						<p class='close-menu'></p><a href='' class='clearfix' >
						<strong>Categories</strong>
						<b class='caret' ></b></a>
						<div class="sub-menu" style="width:40%">
						<div class="content row col-sm-12 html">
							<div class="column">    
								<div>       
									<ul class="row-list content-feature" style="font-size: 14px;">
								@foreach($categories as $category)
										  <li>
										  	<a href="{{ route('viewProductByCategory',$category->id) }}" title="{{ $category->cat_name }}"> 
												<span>{{ $category->cat_name }}</span>
											</a>
										  </li>
								@endforeach										 
									</ul>
								</div>
							</div>
						
						</div>
					</li>

					<li class=''><p class='close-menu'></p>
						<a href='{{ url('/about-us') }}' class='clearfix' >
							<strong>About US</strong>											 
						</a>
					</li>
					<li class=''><p class='close-menu'></p>
						<a href='{{ url('/contact-us') }}' class='clearfix' >
							<strong>Contact us</strong>											 
						</a>
					</li>
					</div>
		
				</ul>
			</div>
			</div>
		</div>

</nav>