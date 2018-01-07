
@if (Session::get('msgerror'))
	<div class="alert alert-warning">
		<i class="fa fa-check-circle"></i> {{ session('msgerror') }}!
		<button type="button" class="fa fa-close close" data-dismiss="alert"></button>
	</div>
@endif

@if (Session::get('msgsuccess'))
	<div class="alert alert-success">
		<i class="fa fa-check-circle"></i> {{ session('msgsuccess') }}!
		<button type="button" class="fa fa-close close" data-dismiss="alert"></button>
	</div>
@endif
