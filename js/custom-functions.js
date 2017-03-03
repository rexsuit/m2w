(function ($){

	$(document).ready(function(){

	/************************ SLIDERS ****************************/

		$("#mainSlider").owlCarousel({
		    navigation: true, // Show next and prev buttons
		    slideSpeed: 300,
		    paginationSpeed: 400,
		    autoPlay: 8000,
		    singleItem: true,
		    transitionStyle : "fade",
		    lazyLoad: true,
		    navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
		});
		$("#featuredProjectSlider").owlCarousel({
		    navigation: true, // Show next and prev buttons
		    slideSpeed: 300,
		    paginationSpeed: 400,
		    autoPlay: 8000,
		    singleItem: true,
		    transitionStyle : "fadeUp",
		    lazyLoad: true,
		    navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
		});
		
	})

})(jQuery);





