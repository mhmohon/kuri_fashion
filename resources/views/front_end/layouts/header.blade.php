<header id="header" class=" variant typeheader-1">
	<!-- HEADER TOP -->
	<div class="header-top compact-hidden">		
		<div class="htop-left pull-left">
			<ul class="top-link list-inline">	
				<!-- If User is not log in -->
				@guest	
				<li class="account" id="my_account">
					<a href="{{ url('login') }}" title="Login">
					<span>Login</span></a>
				</li>
				<li class="account" id="my_account">
					<a href="{{ url('register') }}" title="Register">
					<span>Register</span></a>
				</li>
				<!-- If User is log in -->
				@else
				Login As: <li class="account" id="my_account"> <a href="#" title="My Account" class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</span> <span class="fa fa-angle-down"></span></a>
					<ul class="account dropdown-menu ">
						<li><a href="#">My Account</a></li>
						<li><a href="#">Order History</a></li>
						<li><a href="#">Transactions</a></li>
						<li><a href="#">Downloads</a></li>
						<li class="wishlist"><a href="#" id="wishlist-total" class="top-link-wishlist" title="Wish List (0)"><span>Wish List (0)</span></a></li>
						<li><a href="#">Logout</a></li>
						
					</ul>
				</li>
				@endguest
			</ul>	
		</div>
	
		<div  class="htop-right pull-right">
			<ul class="top-link list-inline">
				
				<li class="telephone" >
				<span><i class="fa fa-phone-square"></i>Hotline</span>  (+880) 1876-230204 </li>
												
			</ul>
		</div>
	</div>
	
	<!-- HEADER CENTER -->
	<div class="header-center compact-hidden">
		<div class="container">
			<div class="row">
				<div class="header-center-left col-lg-4 col-md-4 col-sm-4 col-xs-12">	
					<div class="search-header-w">
						<span class="hidden-lg hidden-md hidden-sm search-mobi"><i class="fa fa-search"></i></span>	
						<div id="search" class="input-group">
						  <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
						  <span class="input-group-btn">
							<button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
						  </span>
						</div>					
					</div>
				</div>
				<!-- LOGO -->
				<div class="navbar-logo col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="logo">
					
						<h1><a href="#"><span class="textColor">KURI </span>FASHION</a></h1>
				
					</div>
				</div>
				<div class="header-center-right col-lg-4 col-md-4 col-sm-4 col-xs-12">	
					<div class="shopping_cart pull-right">							
					 	
						<div id="cart" class="btn-shopping-cart">
						  <a data-loading-text="Loading..." class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
							<div class="shopcart">
							
								<img src="https://png.icons8.com/shopping-cart/ios7/25/000000" style="padding-right: 10px; float: left;"/>
							 
							<div class="shopcart-inner">
								<p class="text-shopping-cart">
								 My cart</p>
						   
								<span class="total-shopping-cart cart-total-full">
								   <span class="items_cart">0 </span><span class="items_cart2">item(s)</span>
								   <span class="items_carts"> - 0.00৳</span>        
								</span>
							</div>
								

							<!-- <span class="text-shopping-cart-mobi hidden-lg hidden-md hidden-sm ">
							  <i class="fa fa-cart-plus"></i>
							</span> --> 
								
							</div>
						  </a>


							<ul class="dropdown-menu pull-right shoppingcart-box">
								<li>
									<p class="text-center empty">Your shopping cart is empty!</p>
								</li>
							</ul>
						</div>
					</div>
					<!-- WISHLIST  -->
					<div class="wishlist">
						<a href="#" id="wishlist-total" class="btn-link" title="Wish List (0)">
							<span >Wish List (0)</span>
						</a>
					</div>					
										
				
				</div>

			</div>
		</div>
	</div>
	
	<!-- HEADER BOTTOM -->
	<div class="header-bottom">
		<div class="container">
			<div class="header-bottom-inner">
				<!-- BOX CONTENT MENU -->
				<div class="responsive megamenu-style-dev ">

					<!-- layouts for nav -->
					@include('front_end.layouts.nav')

				</div>
			</div>
		</div>
	  
	</div>
	
<!-- Navbar switcher -->
</header>