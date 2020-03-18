<?php

	$banner = [
				media('banner/banner1.jpg'),
				media('banner/banner2.jpg'),
				media('banner/banner3.jpg'),
				media('banner/banner4.jpg')
			];

?>
<div class="container">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	  	<?php
	  		foreach($banner as $key => $value){
	  	?>
	    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key ?>" class="<?php echo ($key == 0) ? 'active' : '' ?>"></li>
		<?php } ?>
	  </ol>
	  <div class="carousel-inner">
	    <?php
	  		foreach($banner as $key => $value){
	  	?>
	    <div class="carousel-item <?php echo ($key == 0) ? 'active' : '' ?>">
	      <img class="d-block w-100" src="<?php echo $value ?>" alt="First slide">
	    </div>
		<?php } ?>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>