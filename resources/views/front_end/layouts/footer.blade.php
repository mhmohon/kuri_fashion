<footer class="footer-container typefooter-1">
	<div class="before-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
				
				</div>
			</div>
		</div> 
	</div>
	<div class="footer-content">
	<!-- FOOTER TOP -->
	<div class="footer-top">
	<div class="container">
		<div class="row">
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="module ">
					<div class="call-support">Need support? Call us (+880) 1876-230204</div>
				</div>
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="module ">
				    <div class="socials-wrap"> 
				    <ul>
				      <li class="facebook"><a class="_blank" href="https://www.facebook.com/MagenTech" target="_blank"><i class="fa fa-facebook"></i></a></li>
				      <li class="twitter"><a class="_blank" href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i></a></li>					 
				      <li class="google_plus"><a class="_blank" href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa  fa-google-plus"></i></a></li>
				      <li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
				      <li class="youtube"><a class="_blank" href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
				      <li class="linkedin"><a class="_blank" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				    </ul>
				  </div>
				</div>
			</div>
			<div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
					
				<div class="module newsletter-footer1">
				    <div class="newsletter">
						<div class="title-block">
										
						</div>
						<div class="block_content">
							<form method="post"  name="signup" id="signup" class="btn-group form-inline signup">
								<div class="form-group required send-mail">
									<div class="input-box">
										<input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
									</div>
									<div class="subcribe">
										<button class="btn btn-default btn-lg" type="submit" onclick="return subscribe_newsletter();" name="submit">
											Subscribe						</button>
									</div>
								</div>
							</form>
						</div> <!--/.modcontent-->
					</div>

<!--Script for mail-->

<script type="text/javascript">
    function subscribe_newsletter()
    {
        var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var email = $('#txtemail').val();
        var d = new Date();
        var createdate = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
        var status   = 0;
        var dataString = 'email='+email+'&createdate='+createdate+'&status='+status;
        if(email != "")
        {
            if(!emailpattern.test(email))
            {
                $('.show-error').remove();
                $('.send-mail').after('<span class="show-error" style="color: red;margin-left: 10px"> Invalid Email </span>')
                return false;
            }
            else
            {
                $.ajax({
                    url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',
                    type: 'post',
                    data: dataString,
                    dataType: 'json',
                    success: function(json) {
                        $('.show-error').remove();
                        if(json.message == "Subscription Successfull") {
                            $('.send-mail').after('<span class="show-error" style="color: #003bb3;margin-left: 10px"> ' + json.message + '</span>');
                            setTimeout(function () {
                                var this_close = $('.popup-close');
                                this_close.parent().css('display', 'none');
                                this_close.parents().find('.so_newletter_custom_popup_bg').removeClass('popup_bg');
                            }, 3000);

                        }else{
                            $('.send-mail').after('<span class="show-error" style="color: red;margin-left: 10px"> ' + json.message + '</span>');
                        }
                        document.getElementById('signup').reset();
                        // var x = document.getElementsByClassName('signup');
                
                        // for (i = 0; i < x.length; i++) {
                        // x[i].reset();
                    }
                });
                return false;
            }
        }
        else
        {
            alert("Email Is Require");
            $(email).focus();
            return false;
        }
    }
</script>

<!--/Script for mail-->

				</div>

			</div>
		</div>
	</div> 
	</div>
<!-- FOOTER CENTER -->
	<div class="footer-center">
		<div class="container content">
			<div class="row">
				
				<!-- BOX ACCOUNT -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 box-account box-footer">
					<div class="module clearfix">
						<h3 class="modtitle">Top Category</h3>
						<div class="modcontent" >
							<ul class="menu">
								<li><a href="#">Brands</a></li>
								<li><a href="#">Gift Certificates</a></li>
								<li><a href="#">Affiliates</a></li>
								<li><a href="#">Specials</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- BOX INFORMATION -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 box-information box-footer">
					<div class="module clearfix">
						<h3 class="modtitle">Information</h3>
						<div  class="modcontent" >
							<ul class="menu">
								<li><a href="#">About Us</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Warranty And Services</a></li>
								<li><a href="#">Support 24/7 page</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- BOX SERVICE -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 box-service box-footer">
					<h3 class="modtitle">Customer Services</h3>
					<div  class="modcontent" >
				        <ul class="menu">
				          <li><a href="#">Contact Us</a></li>
				          <li><a href="#">Returns</a></li>
				          <li><a href="#">Site Map</a></li>
				        </ul>
				    </div>
			    </div>	

				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 contact-us">
					<div class="module ">
					    <h3 class="modtitle">Contact details</h3>
						<div class="modcontent">
						  <ul class="links-contact">
						    <li><span class="fa fa-map-marker"></span><b>Address:</b>9000 Overland Ave, Culver City, West Los Angeles</li>
						    <li class="contact-mail"><span class="fa fa-envelope"></span><b>Email:</b><a href="#">demo@jenzo.com</a></li>
						    <li class="contact-phone"><span class="fa fa-phone-square"></span><b>Phone:</b>1-888-345-6789</li>
						    <li class="contact-time"><span class="fa fa-clock-o"></span><b>Worktime:</b>Mon - Sun / 9:00AM - 7:30PM </li>
						  </ul>  
						</div>
					</div>
				</div>	
				
			</div>
		</div>
	</div>
				
	<!-- FOOTER BOTTOM -->
	<div class="footer-bottom ">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 copyright">
					KURI Fashion © 2017. All Rights Reserved. Designed by <a href="#" target="_blank">Basic Gravity</a>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 text-right">
					<div class="module ">
					    <div class="custom-payment">
							<ul>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-diners-club"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	

	<script>
		$(function () {
		  $('[data-toggle="popover"]').popover({
		  	container: 'body',
		  	trigger: 'focus'
		  })
		});
		$.validate({
       		modules : 'location, date, security, file',

    	});
	</script>
	
</footer>


