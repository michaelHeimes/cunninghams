(function($) {
	'use strict';
	

	// Sticky Mobile Hack
	$(document).on('click', 'a.mobile-toggle', function(){
		$('header.header').addClass('off-canvas-content is-open-right has-transition-push');
	});

	$(document).on('click', '.js-off-canvas-overlay', function(){
		$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
	});	
	
	// SHome Hero Slider
	$('.hero-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 5000,
		fade: true,
		rows: 0
		
	});
	
	// Slide Right Sliders
	$('.click-right-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		rows: 0,
		nextArrow: '<button class="slick-next"><img src="/wp-content/themes/cunninghams/assets/images/next-arrow.svg"/></button>',
		prevArrow: '<button class="slick-prev hide"></button>',
	});
	
})( jQuery );