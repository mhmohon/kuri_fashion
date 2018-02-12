<header id="header" class=" variant typeheader-1">
	<!-- HEADER TOP -->
	<div class="header-top compact-hidden">		
		<div class="htop-left pull-left">
			<ul class="top-link list-inline">	
			<!-- If User is not log in -->
			@guest	
				<li class="account" id="my_account">
					<a href="{{ route('login') }}" data-toggle="modal" data-target="#so_sociallogin" title="Login">
					<span>Login</span></a>
				</li>
				<li class="account" id="my_account">
					<a href="{{ route('register') }}" title="Register">
					<span>Register</span></a>
				</li>
				<!-- If User is log in -->
			@endguest

			@auth
				<span class="loginas">Login As:</span>
				<li class="account" id="my_account">
					<a href="#" title="My Account" class="btn-xs dropdown-toggle" data-toggle="dropdown">
						
					@if(checkPermission(['admin','superAdmin','staff']))
						<span>{{ Auth::user()->staff->first_name . ' ' . Auth::user()->staff->last_name }}</span> <span class="fa fa-angle-down"></span>
					@endif
					@if(checkPermission(['customer']))
						<span>{{ Auth::user()->customer->first_name . ' ' . Auth::user()->customer->last_name }}</span> <span class="fa fa-angle-down"></span>
					@endif
					</a>
					<ul class="account dropdown-menu ">
						@if(checkPermission(['admin','superAdmin','staff']))

							<li><a href= "{{ url('/dashboard') }}">Go To DashBoard</a></li>
							<li><a href="#">My Account</a></li>
							
						@endif

						@if(checkPermission(['customer']))
	
							<li><a href="{{ route('myAccount') }}">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Transactions</a></li>
							<li><a href="#">Downloads</a></li>
							<li class="wishlist">
								<a href="{{ route('wishlistIndex') }}" id="wishlist-total" class="top-link-wishlist" title="Wish List">
									
									<span>Wish List ({{ $wishlist_items->count() }})</span>
									
								</a>
							</li>
							
						@endif
						<li>
							<a href="{{ route('logout') }}"
	                            onclick="event.preventDefault();
	                                     document.getElementById('logout-form').submit();">
	                            Logout
	                        </a>

	                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                            {{ csrf_field() }}
	                        </form>
						</li>
						
					</ul>
				</li>
				@endauth
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
					{!! Form::open(['route'=>['productSearch'],'name'=>'search','id'=>'searchsubmit']) !!}
						<span class="hidden-lg hidden-md hidden-sm search-mobi"><i class="fa fa-search"></i></span>	
						<div id="search" class="input-group">
						  <input type="text" name="search_value" value="{{ isset($input) ? $input : '' }}" placeholder="Search" class="form-control input-lg" data-toggle="popover" data-placement="bottom" data-content="You can search any specific product by product name, code number."/>
						  <span class="input-group-btn">
							<button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
						  </span>
						</div>
					 {!! Form::close() !!}					
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
							
								<i class="fa fa-shopping-basket"></i>
							 
							<div class="shopcart-inner">
								<p class="text-shopping-cart">
								 My cart</p>

						   	@if(Cart::count() > 0)
								<span class="total-shopping-cart cart-total-full">
								   <span class="items_cart">{{ Cart::count() }} </span><span class="items_cart2">item(s)</span>
								   <span class="items_carts"> - ৳{{ Cart::subtotal() }}</span>        
								</span>
							@else
								<span class="total-shopping-cart cart-total-full">
								   <span class="items_cart">0 </span><span class="items_cart2">item(s)</span>
								   <span class="items_carts"> - 0.00৳</span>        
								</span>
							@endif
							</div>
								

							<!-- <span class="text-shopping-cart-mobi hidden-lg hidden-md hidden-sm ">
							  <i class="fa fa-cart-plus"></i>
							</span> --> 
								
							</div>
						  </a>

						@if(Cart::count() > 0)
							<ul class="dropdown-menu pull-right shoppingcart-box">
							    <li class="content-item">
							        <table class="table table-striped">
							            <tbody>
							             @foreach(Cart::content() as $cart_item)
							                <tr>
							                    <td class="text-center size-img-cart">
							                        <a href="{{ route('viewSingleProduct',$cart_item->id) }}"><img src="{{ asset('images/product/'.$cart_item->options->image)}}" alt="{{ $cart_item->name }}" title="{{ $cart_item->name }}" class="preview" height="90" width="120"></a>
							                    </td>
							                    <td class="text-left"><a href="{{ route('viewSingleProduct',$cart_item->id) }}">{{ $cart_item->name }}</a>
					                                <br>     
					                                <small>Color: {{ $cart_item->options->color }}</small>
					                                <br>	             
					                                <small>Size: {{ $cart_item->options->size }}</small>
					                                <br>
					                                <small>Date: {{ $cart_item->options->order_date }}</small>
					                                <br>
					                                
					                            </td>
							                    <td class="text-center">
							                        x {{ $cart_item->qty }} </td>
							                    <td class="text-center">
							                         ‎৳ {{ number_format($cart_item->total) }} </td>

							                    <td class="text-right">
							                        <a href="{{ route('cartDelete', $cart_item->rowId) }}" class="fa fa-trash-o" style="padding:3px;">						
							                        </a>
							                    </td>
							                </tr>
							            @endforeach
							            </tbody>
							        </table>
							    </li>
							    <li>
							        <div class="checkout clearfix">
							            <a href="{{ route('cartIndex') }}" class="btn btn-view-cart inverse">View Cart</a>
							            <a href="{{ route('checkoutIndex') }}" class="btn btn-checkout pull-right">Checkout</a>
							        </div>
							    </li>
							</ul>
						@else
							<ul class="dropdown-menu pull-right shoppingcart-box">
								<li>
									<p class="text-center empty">Your shopping cart is empty!</p>
								</li>
							</ul>
						@endif
						</div>
					</div>
					<!-- WISHLIST  -->
					@auth
					<div class="wishlist">
						<a href="{{ route('wishlistIndex') }}" id="wishlist-total" class="btn-link" title="Wish List ({{ $wishlist_items->count() }})">
							<span >Wish List ({{ $wishlist_items->count() }})</span>
						</a>
					</div>
					<div class="sn header-compare hidden-xs">
					    <a class="fa fa-random" href="{{ route('compareIndex') }}"></a>
					</div>
					@endauth					
										
				
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
</header>
