@extends ('front_end.layouts.master')

@section ('page_title','About Us')

@section ('main_content')
	
<div class="container">
	<ul class="breadcrumb">
		<li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
		<li><a href="{{ url('/about-us') }}"> About Us</a></li>
	</ul>
</div>
	
<div class="container">
	<div id="content">
		<div class="container">
			<div class="row box-1-about">
				<div class="col-md-9 welcome-about-us layout_bottom">

				    <div class="title-about-us">

				        <h2>Welcome To Shop</h2>

				    </div>

				    <div class="content-about-us">

				        <div class="image-about-us">
				            <img src="{{ asset('images/about-us.png') }}" alt="Image Client">
				        </div>

				        <div class="des-about-us">Kuri Fashion House is an online shopping website in bangladesh offering bundle deals and discount prices for fashion products. Experience fast, reliable and convenient online shopping experience to discover new styles in womens fashion. Find best trends in fashion according to seasons and occasions with kuri online shopping and remain in style 24x7 and 365 days a year. 
				            <br>
				            <br> For shoppers across the country, Kuri has become an online bazar in bangladesh for fashion, clothing & accessories for women. Everyone is encouraged to shop with confidence at kuri fashion house as our strict buyer’s protection policies ensure no risks attached offering finest experience of online shopping in bangladesh. Buyers can ensure legitimacy of product with genuine reviews by satisfied consumers. Also, buyers are provided with full price disclosure without involvement of additional fees during checkout procedures.
				            <br>
				            <br> Experience best online shopping in bangladesh with payment by cash on delivery for genuine, legitimate and branded products with buyers protection. Look no further for elite line of womens clothing in both western and traditional styles. From sarees to womens salwar kameez and womens shoes to womens accessories, you can find everything under one roof at this site.</div>

				    </div>
				</div><!-- end welcome-about-us -->
				<div class="col-md-3 why-choose-us">

				    <div class="title-about-us">

				        <h2>Why Choose Us</h2>

				    </div>

				    <div class="content-why">

				        <ul class="why-list">

				            <li>
				                <a title="Shipping &amp; Returns" href="#">Shipping &amp; Returns</a>
				            </li>

				            <li>
				                <a title="Secure Shopping" href="#">Secure Shopping</a>
				            </li>

				            <li>
				                <a title="International Shipping" href="#">International Shipping</a>
				            </li>

				            <li>
				                <a title="Affiliates" href="#">Affiliates</a>
				            </li>

				            <li>
				                <a title="Group Sales" href="#">Group Sales</a>
				            </li>

				        </ul>

				    </div>
				</div><!-- end why choose us -->

				<div class="col-md-12 happy-about-us">

			    <div id="slider-happy-about-us" class="happy-ab">

			        <div class="title-happy-about">

			            <h2>Happy customer says</h2>

			        </div>

			        <div class="sm_imageslider slider-happy-client owl2-carousel owl2-theme owl2-loaded">
    
                        <div class="item">

                            <div class="ct-why">

                                <div class="client-say">I bought one Kurtis, I am so happy. It's good quality. Thanks Kuri Fashion house.</div>

                                <p class="client-info-about">
                                    <span class="name">- Mahjabin Mithi - </span>Student</p>

                            </div>

                        </div>
                    
                    
                        <div class="item">

                            <div class="ct-why">

                                <div class="client-say">Just got the dress... I'm so happy to wear this... this is really perfect... tnx to kuri fashion house.</div>

                                <p class="client-info-about">
                                    <span class="name">- Tanisha Chowdhury - </span>Student</p>

                            </div>

                        </div>
                    
                    
                        <div class="item">

                            <div class="ct-why">

                                <div class="client-say">I bought one kurti today.. ... I am happy with the cutting.. farbrics and size!! Thanx to Kuri Fashion House!!!</div>

                                <p class="client-info-about">
                                    <span class="name">- Sabrina Jahan - </span>Student</p>

                            </div>

                        </div>
			                   
			            
			        </div>

			        <script>
			            jQuery(document).ready(function($) {

			                var owl2_topbrand = $(".slider-happy-client");

			                owl2_topbrand.owlCarousel2({

			                    responsive: {

			                        0: {

			                            items: 1

			                        },

			                        480: {

			                            items: 1

			                        },

			                        768: {

			                            items: 1

			                        },

			                        992: {

			                            items: 1

			                        },

			                        1200: {

			                            items: 1

			                        }

			                    },

			                    autoplay: false,

			                    loop: false,

			                    nav: true, // Show next and prev buttons

			                    dots: false,

			                    autoplaySpeed: 500,

			                    navSpeed: 500,

			                    dotsSpeed: 500,

			                    autoplayHoverPause: true,

			                    margin: 30,

			                    navText: ["", ""],

			                });



			            });
			        </script>

			    </div>

			</div><!-- end customer say -->

			</div><!-- end row box-1-about -->
		</div>
	</div>
</div>





@endsection
