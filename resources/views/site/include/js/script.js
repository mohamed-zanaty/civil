$(document).ready(function () {

    'use strict';

    // Main Slider
    $(".owl1").owlCarousel({
		autoPlay: 4000,
		items : 1,
        itemsDesktopSmall : [900,1],
		itemsTablet: [600,1], //2 items between 600 and 0
        itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
		navigation: true,
        transitionStyle: "goDown",
		navigationText: [
		  "<i class='fa fa-angle-right'></i>",
		  "<i class='fa fa-angle-left'></i>"
		  ],
	  });

        // Main Slider
        $(".owl2").owlCarousel({
    		autoPlay: 4000,
        loop:false,
    		items : 1,
            itemsDesktopSmall : [900,1],
    		itemsTablet: [600,1], //2 items between 600 and 0
            itemsMobile : true, // itemsMobile disabled - inherit from itemsTablet option
    		navigation: true,
    		navigationText: [
    		  "<i class='fa fa-angle-right'></i>",
    		  "<i class='fa fa-angle-left'></i>"
    		  ],
    	  });



});
