
@if (Session::get('msgerror'))
	<div class="alert alert-warning">
		<i class="fa fa-exclamation-circle"></i> {!! session('msgerror') !!}!
		<button type="button" class="fa fa-close close" data-dismiss="alert"></button>
	</div>
@endif

@if (Session::get('msgsuccess'))
	<div class="alert alert-success">
		<i class="fa fa-check-circle"></i> {!! session('msgsuccess') !!}!
		<button type="button" class="fa fa-close close" data-dismiss="alert"></button>
	</div>
@endif

@if (Session::get('msginfo'))
	<div class="alert alert-info">
		<i class="fa fa-info-circle"></i> {!! session('msginfo') !!}
		<button type="button" class="fa fa-close close" data-dismiss="alert"></button>
	</div>
@endif

<script type="text/javascript">
    window.setTimeout(function(){
	  $('.alert').addClass("fadeOut");
	}, 7000);
</script>
