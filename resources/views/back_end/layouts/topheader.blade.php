<!-- Loader -->
	<div id="preloader">
		<div id="status">
			<div class="spinner">
			  <div class="spinner-wrapper">
				<div class="rotator">
				  <div class="inner-spin"></div>
					<span>P</span>
				  <div class="inner-spin"></div>
				</div>
			  </div>
			</div>
		</div>
	</div>

<!-- Top Bar Start -->
	<div class="topbar">

		<!-- LOGO -->
		<div class="topbar-left">
			<a href="index.html" class="logo">
				<span>
					<img src="http://lily-tms.herokuapp.com/images/lily-logo-min.png" alt=""  class="thumb-md img-rounded bg-white"> KU<span>RI</span>
				</span>
				<i>
				   <img src="http://lily-tms.herokuapp.com/images/lily-logo-min.png" alt="" class="thumb-md img-rounded bg-white">
				</i>
			</a>
		</div>

		<!-- Button mobile view to collapse sidebar menu -->
		<div class="navbar navbar-default" role="navigation">
			<div class="container">

				<!-- Navbar-left -->
				<ul class="nav navbar-nav navbar-left">
					<li>
						<button class="button-menu-mobile open-left waves-effect waves-light">
							<i class="mdi mdi-menu"></i>
						</button>
					</li>
				</ul>

				<!-- Right(Notification) -->
				<ul class="nav navbar-nav navbar-right">
					

					<li class="dropdown user-box">
						<a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
							<img src="http://lily-tms.herokuapp.com/images/user.png" alt="user-img" class="img-circle user-img">
						</a>

						<ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
							<li class="dropdown-header">Login as</li>
							<li>
								@if(Auth::check())
									<a href="">
										{{ Auth::user()->staff->first_name . ' ' . Auth::user()->staff->last_name }}
									</a>
								@endif
								
							</li>
							<li class="divider"></li>
							<li class="dropdown-header">Profile</li>
							<li><a href="#"><i class="ti-user m-r-5"></i> Change Password</a></li>
							<li>
								<a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                   <i class="ti-power-off m-r-5"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
     
							</li>
						</ul>
					</li>

				</ul> <!-- end navbar-right -->

			</div><!-- end container -->
		</div><!-- end navbar -->
	</div>
	<!-- Top Bar End -->