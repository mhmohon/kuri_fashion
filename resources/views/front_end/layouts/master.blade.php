<!DOCTYPE html>
<html>
<head>
<title>@yield ('page_title')</title>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="/css/font-awesome.css">

	
	<link rel="stylesheet" media="screen, projection" href="/css/drift-basic.css">
	<link rel="stylesheet" href="/css/easyzoom.css" />

	<!-- Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/custom.css">
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="/js/easyzoom.js"></script>
	<script src="/js/Drift.js"></script>
	<script src="/js/main.js"></script>

	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'> 	


	<style type="text/css">body {font-family:'PT Sans', sans-serif}	</style>
		
	<link href="" rel="icon" />

</head>

<body class="common-home ltr res layout-1">
	<div id="wrapper" class="wrapper-full banners-effect-7">

		<!-- layouts for header -->
		@include ('front_end.layouts.header')
		
		<!-- layouts for main content -->
		@yield ('main_content')
		
		<!-- layouts for footer -->
		@include ('front_end.layouts.footer')

	</div>
	<!-- MENU ON TOP CUSTOM -->
		<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
	<!-- END-->
</body>
</html>