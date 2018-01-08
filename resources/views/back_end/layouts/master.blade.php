<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Contain all css and header information -->
        @include ('back_end.layouts.head')
    </head>

    <body class="fixed-left" data-gr-c-s-loaded="true" style="overflow: visible;">
       
       

        <!-- Begin page -->
        <div id="wrapper">

			@include ('back_end.layouts.topheader')
			
			<!-- Left Sidebar -->
			@include ('back_end.layouts.left_sidebar')
			
            <!-- Start right Content here -->
            
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container page_content">
                        
                        <!-- layouts for Notificaiton -->
                        @include ('back_end.layouts.partial.message')
        				<!-- layouts for main content -->
        				@yield ('main_content')

                     </div> <!-- container -->

                </div> <!-- content -->
				
				    @include ('back_end.layouts.footer')
			</div>
            
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        <!-- Contain all Js information -->
        @include ('back_end.layouts.javascripts') 

        <!-- layouts for extra new scripts -->
        @yield ('scripts')
    </body>  
</html>
