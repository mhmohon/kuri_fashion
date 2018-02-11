@extends ('front_end.layouts.master')

@section ('page_title','Product Comparison')

@section ('main_content')
	
<div class="container">
	<ul class="breadcrumb">
		<li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
		<li><a href="{{ route('myAccount') }}"> Account</a></li>
		<li><a href="{{ route('compareIndex') }}"> Product Comparison</a></li>
	</ul>

	@if(Cart::instance('compare')->count())
	<div class="row">
	    <div id="content" class="col-sm-12">
		    <h2>Product Comparison</h2>
		    <div class="overflow_auto">
		        
				<table class="table table-bordered">
				    <thead>
				        <tr>
				            <td colspan="5">
				                <strong>Product Details</strong>
				            </td>
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
				            <td width="10%">Product</td>
				    @foreach($compare_items as $compare_item)
				            <td>
				                <a href="{{ route('viewSingleProduct',$compare_item->id) }}"><strong>{{ $compare_item->name }}</strong>
				                </a>
				            </td>
				    @endforeach
				        </tr>
				        <tr>
				            <td>Image</td>
				    @foreach($compare_items as $compare_item)
				            <td class="text-center">
				               
				                <a href="{{ route('viewSingleProduct',$compare_item->id) }}"><img src="{{ asset('images/product/'.$compare_item->options->image)}}" alt="{{ $compare_item->name }}" title="{{ $compare_item->name }}" class="img-thumbnail" width="110" height="90"></a>
				            </td>
				    @endforeach
				        </tr>
				        <tr>
				            <td width="10%">Price</td>
				    @foreach($compare_items as $compare_item)
				            <td> ৳{{ number_format($compare_item->price) }} </td>
				    @endforeach
				        </tr>
				        <tr>
				            <td>Available Color</td>
				    @foreach($compare_items as $compare_item)
				            <td>{{ ucwords($compare_item->options->colors) }}</td>
				    @endforeach
				        </tr>
				        <tr>
				            <td>Available Size</td>
				    @foreach($compare_items as $compare_item)
				            <td>{{ strtoupper($compare_item->options->sizes) }}</td>
				    @endforeach
				        </tr>
				        <tr>
				            <td>Availability</td>
				    @foreach($compare_items as $compare_item)
				            <td>{{ $compare_item->options->stock }}</td>
				    @endforeach
				        </tr>
				        <tr>
				            <td>Rating</td>
				    @foreach($compare_items as $compare_item)
				            <td class="ratings">
				                <div class="rating-box home-rate" itemprop="ratingValue" content="5">
						            @for ($i=1; $i <= 5 ; $i++)
								      <span class="glyphicon glyphicon-star{{ ($i <= $compare_item->options->avg_rating) ? '' : '-empty'}}"></span>
								    @endfor
						        </div>
						        @if($compare_item->options->rating_count)
				                	Based on {{ $compare_item->options->rating_count }} reviews.
				               	@else
				               		Based on 0 reviews.
				               	@endif
				            </td>
				    @endforeach
				        </tr>
				        
				        <tr>
				            <td>Weight</td>
				    @foreach($compare_items as $compare_item)
				            <td>{{ $compare_item->options->weight }}kg</td>
				     @endforeach
				        </tr>

				    </tbody>
				    <tbody>
				        <tr>
				            <td></td>
				    @foreach($compare_items as $compare_item)
				            <td>
				                <input type="button" value="View Details" class="btn btn-primary btn-block" onclick="cart.add('72', '1');">
				                <a href="{{ route('compareDelete', $compare_item->rowId) }}" class="btn btn-danger btn-block">Remove
				                </a>
				            </td>
				    @endforeach
				        </tr>
				    </tbody>
				</table>


		    </div><!-- end overflow_auto -->
		</div><!-- end content -->
	</div>

	@else

	<div class="row">
		<div id="content" class="bg-page-404 col-sm-12">
			<div class="text-center">
				
				<h1>Product Comparison</h1>
				<p>Your have no product is comparison!</p>
				<a href="{{ url('/home') }}" class="btn btn-primary" title="Continue">Continue</a>
			</div>
		
		 </div>
	</div>
	@endif

</div>



@endsection
