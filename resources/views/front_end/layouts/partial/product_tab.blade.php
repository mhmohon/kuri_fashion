<div class="producttab ">
    <div class="tabsslider  horizontal-tabs col-xs-12">
        <ul class="nav nav-tabs font-title">
            <li class="active">
                <a data-toggle="tab" href="#product-description">Description</a>
            </li>

            <li class="item_nonactive">
                <a data-toggle="tab" href="#size-guides">Size Guides</a>
            </li>

			<li class="item_nonactive">
                <a data-toggle="tab" href="#tab-review">Reviews ({{ $reviews->count() }})</a>
            </li>
            <li class="item_nonactive">
                <a data-toggle="tab" href="#return-policy">Return Policy</a>
            </li>

        </ul>
		
		<!-- For Product Description -->
        <div class="tab-content  col-xs-12">
            <div id="product-description" class="tab-pane fade active in">
                {!! $product->productDetail->pro_info !!}
            </div>

            <!-- For Product Review -->
            <div id="tab-review" class="tab-pane fade in">

                <form>
                    <div id="review">
                        <table class="table table-striped table-bordered">
                            <tbody>
                            @foreach($reviews as $review)
                                <tr>
                                    <td style="width: 50%;">
                                        <strong>{{ $review->name }}</strong>
                                    </td>
                                    <td class="text-right">{{ $review->created_at }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p>{{ $review->comment }}</p>
                                        <div class="ratings">
                                            @for ($i=1; $i <= 5 ; $i++)
										      <span class="glyphicon glyphicon-star{{ ($i <= $review->rating) ? '' : '-empty'}}"></span>
										    @endfor
                                        </div>
										
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-right"></div>
                    </div>
                </form>
                    <h2 id="review-title">Write a review</h2>

                    {!! Form::open(['route'=>['ReviewStore',$product->id],'class'=>'form-horizontal form-payment','name'=>'review_form','id'=>'review_form']) !!}
					@guest
						<p>
							<span>Please <strong><a href="{{ route('login') }}">Login</a></strong> Or <strong><a href="{{ route('register') }}">Register</a></strong> To Review.</span>
						</p>
					@else
					@if(checkPermission(['admin','superAdmin','staff']))
						<p>
							<span>Please login as customer.</span>
						</p>
					@else
                    <div class="contacts-form">
                        <div class="form-group">
                            <span class="icon icon-user"></span>
							
								<input type="text" name="user_name" class="form-control" value="{{ Auth::user()->customer->first_name . ' ' . Auth::user()->customer->last_name }}" data-validation="required">
								
                            
                        </div>
                        <div class="form-group">
                            <span class="icon icon-bubbles-2"></span>
                            <textarea class="form-control" name="comment" data-validation="required length" data-validation-length="min12"></textarea>

                        </div>
                        <div class="form-group col-md-12">

                            <div class="col-md-2">
                                
                                <span class="rating">
                                    <b>Rating: </b>
                                </span>
                            </div>
                            <div class="col-md-10">
                                <div class="col-md-2">
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" name="rating_star" value="1" id="1">

                                        <label for="1"> Poor </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" name="rating_star" value="2" id="2">

                                        <label for="2"> Bad </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" name="rating_star" value="3" id="3">

                                        <label for="3"> Good </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" name="rating_star" value="4" id="4">

                                        <label for="4"> Great </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" name="rating_star" value="5" id="5">

                                        <label for="5"> Excellent </label>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('rating_star'))
                                <span class="text-danger help-block">
                                    <block>{{ $errors->first('rating_star') }}</block>
                                </span>
                            @endif
                        </div>
                        <div class="buttons clearfix btn_visible">
                            <input type="submit" id="button-review" class="btn btn-info">
                        </div>

                    </div>
                    @endif
                    @endguest
                {{ Form::close() }}
            </div>
            <div id="size-guides" class="tab-pane fade in">
            	<h2><strong>WOMEN'S SIZE GUIDE</strong></h2>
            	<div class="women-size">
            	<div class="pull-left size-guide-diagram">
					<div class="collection-spacer">&nbsp;</div>
					<img src="https://www.magee1866.com/Images/Content/size-guide-women.png" alt="Women's Size Guide" width="220" height=""/>
				</div>
				<div class="size-col-right">
					<div class="collection-spacer">&nbsp;</div>
					<h4>1. Bust</h4>
					<p>Measure around the fullest part of your bust, running the tape inside your arms.</p>
					<h4>2. Waist</h4>
					<p>Measure around your 'natural' waist; the easiest way to find it is tilt your body to the side slightly and where it bends is the natural waist.</p>
					<h4>3. Hips</h4>
					<p>Measure around the fullest part of your hips</p>
				</div>
				</div>
				<br>
				<p><strong>Women's Sizes:</strong></p>
            	<table class="table table-bordered">
				    <tbody>
				        <tr>
				            <td>&nbsp;</td>
				            <td>
				                <strong>XS</strong>
				            </td>
				            <td>
				                <strong>S</strong>
				            </td>
				            <td>
				                <strong>S/M</strong>
				            </td>
				            <td>
				                <strong>M</strong>
				            </td>
				            <td>
				                <strong>M/L</strong>
				            </td>
				            <td>
				                <strong>L</strong>
				            </td>
				            <td>
				                <strong>L/XL</strong>
				            </td>
				            <td>
				                <strong>XL</strong>
				            </td>
				            <td>
				                <strong>XL/XXL</strong>
				            </td>
				        </tr>
				        <tr>
				            <th>Sizes</th>
				            <td>4</td>
				            <td>6</td>
				            <td>8</td>
				            <td>10</td>
				            <td>12</td>
				            <td>14</td>
				            <td>16</td>
				            <td>18</td>
				            <td>20</td>
				        </tr>
				        <tr>
				            <th>Bust</th>
				            <td>33 1/2"</td>
				            <td>34 1/2"</td>
				            <td>35 1/2"</td>
				            <td>36 1/2"</td>
				            <td>38"</td>
				            <td>39 1/2"</td>
				            <td>41 1/2"</td>
				            <td>43 1/2"</td>
				            <td>45 1/2"</td>
				        </tr>
				        <tr>
				            <th>Waist</th>
				            <td>25"</td>
				            <td>26"</td>
				            <td>27"</td>
				            <td>28"</td>
				            <td>29 1/2"</td>
				            <td>31"</td>
				            <td>33"</td>
				            <td>35"</td>
				            <td>36 1/2"</td>
				        </tr>
				        <tr>
				            <th>Hips</th>
				            <td>35 1/2"</td>
				            <td>36 1/2"</td>
				            <td>37 1/2"</td>
				            <td>38 1/2"</td>
				            <td>40"</td>
				            <td>41 1/2"</td>
				            <td>43 1/2"</td>
				            <td>45 1/2"</td>
				            <td>47 1/2"</td>
				        </tr>
				        <tr>
				            <th>Thigh</th>
				            <td>21 1/4"</td>
				            <td>22 1/4"</td>
				            <td>22 1/4"</td>
				            <td>23 1/2"</td>
				            <td>23 1/2"</td>
				            <td>25"</td>
				            <td>25"</td>
				            <td>26 1/2"</td>
				            <td>26 1/2"</td>
				        </tr>
				        <tr>
				            <th>Neck</th>
				            <td>13 1/2"</td>
				            <td>14 1/2"</td>
				            <td>14 1/2"</td>
				            <td>15"</td>
				            <td>15"</td>
				            <td>15 3/4"</td>
				            <td>15 3/4"</td>
				            <td>16 1/2"</td>
				            <td>16 1/2"</td>
				        </tr>
				        <tr>
				            <th>Sleeve</th>
				            <td>29"</td>
				            <td>29 1/2"</td>
				            <td>30"</td>
				            <td>30 1/2"</td>
				            <td>31"</td>
				            <td>31 1/2"</td>
				            <td>32"</td>
				            <td>32 1/2"</td>
				            <td>33 1/2"</td>
				        </tr>
				        <tr>
				            <th>Inseam</th>
				            <td>29 1/2"</td>
				            <td>30"</td>
				            <td>30 1/2"</td>
				            <td>31"</td>
				            <td>31 1/2"</td>
				            <td>31 1/2"</td>
				            <td>32"</td>
				            <td>32"</td>
				            <td>33"</td>
				        </tr>
				    </tbody>
				</table>
				<p>&nbsp;</p>
            </div>
			
			<!-- For Return Policy -->
            <div id="return-policy" class="tab-pane fade in">
                
                <p><strong>7 Days Return &amp; Refund - No questions asked</strong></p>
				<p>If you are not perfectly satisfied, then call our customer service on 16492 to return the product for a full refund within 7 days of delivery.</p>
				<br>

				<p><strong>Conditions for Returns</strong></p>
				<ul>
					<li>The product must be unused, unworn, unwashed and without any flaws. Fashion products can be tried on to see if they fit and will still be considered unworn.</li>
					<li>The product must include the original tags, user manual, warranty cards, freebies and accessories.</li>
					<li>The product must be returned in the original and undamaged manufacturer packaging / box. If the product was delivered in a second layer of Daraz packaging, it must be returned in the same condition with return shipping label attached. Do not put tape or stickers on the manufacturer box.</li>
				</ul>
				<p>If a product is returned to us in an inadequate condition, we reserve the right to send it back to you.</p>
            </div>
        </div>
    </div>
</div>