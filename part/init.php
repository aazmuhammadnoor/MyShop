<script type="text/javascript">
	$('.carousel').carousel()
	//$('.dropdown-toggle').dropdown()
	$(document).ready(function(){
	  $('.dropdown-menu a.dropdown-item').on("click", function(e){
	    $(this).next('ul').toggle();
	    e.stopPropagation();
	    e.preventDefault();
	  });
	});
</script>