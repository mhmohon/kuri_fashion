<!DOCTYPE html>
<html>
<head>

	<!-- Contain all css and header information -->
	@include('front_end.layouts.head')

	<!-- Extra Css -->
	@yield ('extra_css')

</head>

<body class="common-home ltr res layout-1">

	<!-- layouts for Notificaiton -->
	@include ('front_end.layouts.message')

	<div id="wrapper" class="wrapper-full banners-effect-7">

		<!-- layouts for header -->
		@include ('front_end.layouts.topheader')
		
		<!-- layouts for main content -->
		@yield ('main_content')
		
		<!-- layouts for footer -->
		@include ('front_end.layouts.footer')

	</div>
	<!-- MENU ON TOP CUSTOM -->
		<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
	<!-- END-->


    <!-- layouts for extra new scripts -->
    @yield ('extra_scripts')
</body>
</html>