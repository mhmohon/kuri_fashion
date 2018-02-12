@extends ('front_end.layouts.master')

@section ('page_title','Contact Us')

@section ('main_content')
	
<div class="container">
	<ul class="breadcrumb">
		<li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
		<li><a href="{{ url('/contact-us') }}"> Contact Us</a></li>
	</ul>
</div>
	
<div class="main container">
	<div class="row">
		<div id="content" class="col-sm-12">

			<div class="location_map">
				<iframe id="mapFrame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2582.266327440989!2d90.42418348854535!3d23.751798668907767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b871d6b30fc7%3A0x168f2600ee50aaff!2sTaltola+City+Super+Market!5e0!3m2!1sen!2sbd!4v1518371802104"  frameborder="1" style="border:0" allowfullscreen></iframe>
			</div>
				    
			<div class="info-contact row">
			    <div class="col-sm-4 col-xs-12 info-store">
			        <div class="name-store">
			            <h3>Our Store</h3>
			        </div>
			        <div class="comment" style="text-align:justify;">
			            Kuri Fashion House is an online shopping website in bangladesh offering bundle deals and discount prices for fashion products. Experience fast, reliable and convenient online shopping experience to discover new styles in womens fashion. Find best trends in fashion according to seasons and occasions with kuri online shopping and remain in style 24x7 and 365 days a year. 
			        </div>
			        <address>
			            <div class="address clearfix form-group">
			                <div class="pull-left">
			                    <i class="fa fa-home"></i>
			                </div>
			                <div class="text">Kuri Fashion House, shop no 336 khilgaon taltola market Dhaka, Bangladesh
			                    <br>
			                </div>
			            </div>
			            <div class="form-group">
			                <div class="pull-left">
			                    <i class="fa fa-phone"></i>
			                </div>
			                <div class="text">01876-230204</div>
			            </div>
			            <div class="form-group">
			                <div class="pull-left">
			                    <i class="fa fa-clock-o"></i>
			                </div>
			                <div class="text">Opening Times From 8:30am to 9pm</div>
			            </div>
			            <a href="https://goo.gl/maps/TELd8WUwP8k" target="_blank" class="btn btn-info">
			                <i class="fa fa-map-marker"></i> View Google Map</a>
			        </address>

			    </div>
			    <div class="col-lg-8 col-sm-8 col-xs-12 contact-form">
			        {!! Form::open(['route'=>['sendContactMail'],'class'=>'form-horizontal m-b-30','files' => true]) !!}
			            <fieldset>
			                <legend>Contact Form</legend>
			                <div class="form-group required">
			                    <label class="col-sm-2 control-label" for="input-name">Your Name</label>
			                    <div class="col-sm-10">
			                        <input type="text" name="name" value="" id="input-name" class="form-control">
			                    </div>
			                </div>
			                <div class="form-group required">
			                    <label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
			                    <div class="col-sm-10">
			                        <input type="text" name="email" value="" id="input-email" class="form-control">
			                    </div>
			                </div>
			                <div class="form-group required">
			                    <label class="col-sm-2 control-label" for="input-enquiry">Enquiry</label>
			                    <div class="col-sm-10">
			                        <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
			                    </div>
			                </div>
			                <fieldset>
			                    <legend>Captcha</legend>
			                    
			                </fieldset>
			            </fieldset>
			            <div class="buttons">
			                <div class="pull-right">
			                    <button class="btn btn-info" type="submit">
			                        <span>Submit</span>
			                    </button>
			                </div>
			            </div>
			        {{Form::close()}}
			    </div>

			</div>
			
		</div><!-- content -->
	</div>
</div>





@endsection
