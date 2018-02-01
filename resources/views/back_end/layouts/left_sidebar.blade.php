<!-- ========== Left Sidebar Start ========== -->
	<div class="left side-menu">
		<div class="sidebar-inner slimscrollleft">

			<!--- Sidemenu -->
			<div id="sidebar-menu">  
				<ul>				
					<li class="has_sub">
						<a href="{{ url('/home') }}" class="waves-effect"><i class="mdi mdi-book-open-page-variant mdi-36px"></i> <span> Go to Page </span> </a>
					</li>
					<li class="has_sub">
						<a href="{{ url('dashboard') }}" class="waves-effect"><i class="mdi mdi-home mdi-36px"></i> <span> Home </span> </a>
					</li>

					<li class="menu-title">Customer Section</li>

						<li class="has_sub">
							<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple-plus"></i> <span> Customer </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								
								<li><a href="customer_list.html">Customers List</a></li>
							</ul>
						</li>
						<li class="has_sub">
							<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-shopping"></i> <span> Order </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								<li><a href="http://lily-tms.herokuapp.com/orders/create">Add Order</a></li>
								<li><a href="{{ route('orderIndex') }}">Orders List</a></li>
							</ul>
						</li>
						
					<li class="menu-title">Product Section</li>

						<li class="has_sub">
							<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-tag-multiple"></i> <span> Category </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								
								<li><a href="{{ url('dashboard/category/create') }}">Add Category</a></li>
								<li><a href="{{ url('dashboard/category') }}">Category List</a></li>
							</ul>
						</li>
						<li class="has_sub">
							<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-book-multiple"></i> <span> Product </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								<li><a href="{{ route('productCreate') }}">Add Products</a></li>
								<li><a href="{{ route('productIndex') }}">Product List</a></li>
							</ul>
						</li>
					
					<li class="has_sub">
						<a href="{{ route('reviewAll') }}" class="waves-effect"><i class="mdi mdi-comment-account-outline"></i> <span> Product Review </span> </a>
					</li>

					<li class="menu-title">Setting Section</li>

					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-settings-variant"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
						<ul class="list-unstyled">
							<li><a href="http://lily-tms.herokuapp.com/password">Change Password</a></li>
							<li><a href="http://lily-tms.herokuapp.com/logout">Logout</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
			<!-- Sidebar -->
			
		</div>
		<!-- Sidebar -left -->

	</div>
	<!-- Left Sidebar End -->