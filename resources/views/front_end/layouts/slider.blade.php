<div class="container--head">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="images/s1-1920x720.jpg" alt="...">
				<div class="carousel-caption">
				  <h3>Lorem ipsum dolor</h3> Lorem ipsum dolor sit amet, tharsiam eam est in.
				</div>
			</div>
			<div class="item sldr">
				<img src="images/im05.jpg" alt="...">
				<div class="carousel-caption">
				  <h3>Lorem ipsum dolor</h3> Lorem ipsum dolor sit amet, tharsiam eam est in.
				</div>
			</div>
			<div class="item">
				<img src="images/kurti-collection.jpg" alt="...">
				<div class="carousel-caption">
				  <h3>Lorem ipsum dolor</h3> Lorem ipsum dolor sit amet, tharsiam eam est in.
				</div>
			</div>
			<div class="item">
				<img src="images/Women-Fashion-Banner-1.jpg" alt="..." style="width:100%">
				<div class="carousel-caption">
				  <h3>Lorem ipsum dolor</h3> Lorem ipsum dolor sit amet, tharsiam eam est in.
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		</a>
  	</div>
</div>
<script>
	$(function() {
    $('.tooltip-carousel').popover();

    $('#carousel-example-generic').on('slide.bs.carousel', function() {
      $('.tooltip-carousel').popover('hide');
      $(this).find('.caraousel-tooltip-item.active').fadeOut(function() {
        $(this).removeClass('active');
      });
    });

    $('#carousel-example-generic').on('slid.bs.carousel', function() {
      var index = $(this).find('.carousel-inner > .item.active').index();
      $(this).find('.caraousel-tooltip-item').eq(index).fadeIn(function() {
        $(this).addClass('active');
      });
    });

    $('.tooltip-carousel').mouseenter(function() {
      $(this).popover('show');
    }).mouseleave(function() {
      $(this).popover('hide');
    });
  });
	</script>