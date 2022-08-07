jQuery( document ).ready(function($) {

	$( ".custom-slidercontroller-container" ).click(function() {
	    $([document.documentElement, document.body]).animate({
        	scrollTop: $("#primary").offset().top
    	}, 1000);
	});

});