@extends ('front_end.layouts.master')

@section ('page_title','Favorite product List')

@section ('main_content')
	
<div class="container">
	<ul class="breadcrumb">
		<li><a href="/"><i class="fa fa-home"></i></a></li>
		<li><a href="/show-cart"> Account</a></li>
		<li><a href="/show-wishlist"> My Wish List</a></li>
	</ul>

	@if($wishlist_items->count())
	<div class="row">
	    <div id="content" class="col-sm-9">
		    <h2>My Favorite Product List</h2>
		    <div class="table-responsive">
		        <table class="table table-bordered table-hover">
		            <thead>
		                <tr>
		                    <td class="text-center">Image</td>
		                    <td class="text-left">Product Name</td>
		                    <td class="text-right">Stock</td>
		                    <td class="text-right">Unit Price</td>
		                    <td class="text-right">Action</td>
		                </tr>
		            </thead>
		            <tbody>
		            @foreach($wishlist_items as $wishlist_item)
		                <tr>
		                    <td class="text-center">
	                            <a href="{{ route('viewSingleProduct',$wishlist_item->product_id) }}"><img src="{{ asset('images/product/'.$wishlist_item->product->productDetail->pro_image)}}" alt="{{ $wishlist_item->product->pro_name }}" title="{{ $wishlist_item->product->pro_name }}" class="img-thumbnail" height="50" width="50"></a>
	                            </td>
	                       
		                    <td class="text-left">
		                        <a href="{{ route('viewSingleProduct',$wishlist_item->product_id) }}">{{ $wishlist_item->product->pro_name }}</a>
		                    </td>
		                    <td class="text-right">{{ $wishlist_item->product->inventory->quantity_in_stock }}</td>
		                    <td class="text-right">
		                        <div class="price">
		                            ৳{{ number_format($wishlist_item->product->productDetail->pro_price) }}
		                        </div>
		                    </td>
		                    <td class="text-right">
		                        <button type="button" onclick="cart.add('61');" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Add to Cart">
		                            <i class="fa fa-shopping-cart"></i>
		                        </button>
		                        <a href="{{ route('wishlistDelete',$wishlist_item->id) }}" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Remove">
		                            <i class="fa fa-times"></i>
		                        </a>
		                    </td>
		                </tr>
		            
		            @endforeach
		            </tbody>
		        </table>
		    </div>
		    <div class="buttons clearfix">
		        <div class="pull-left">
		            <a href="#" class="btn btn-primary">Continue</a>
		        </div>
		    </div>
		</div>
	</div>

	@else

	<div class="row">
		<div id="content" class="bg-page-404 col-sm-12">
			<div class="text-center">
				
				<h1>My Wishlist</h1>
				<p>Your wishlist is empty!</p>
				<a href="{{ url('/home') }}" class="btn btn-primary" title="Continue">Continue</a>
			</div>
		
		 </div>
	</div>
	@endif

</div>



@endsection
