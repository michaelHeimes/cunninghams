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
	if ($('.hero-slider').length) {
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
	}
	
	// Slide Right Sliders
	if ($('.click-right-slider').length) {
		$('.click-right-slider').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: false,
			rows: 0,
			nextArrow: '<button class="slick-next"><img src="/wp-content/themes/cunninghams/assets/images/next-arrow.svg"/></button>',
			prevArrow: '<button class="slick-prev hide"></button>',
		});
	}
	
// 	Contact Form Radio Buttons
	if ($('body').hasClass('page-template-page-contact')) {
		$('ul.gfield_radio li').each(function( index, element ) {
	
			var $option = $(this);
			var $input = $(this).find('input');
				
			$($input).click(function(e) {
				$($option).addClass('clicked');
				$($option).siblings().removeClass('clicked');
			});
	
		});
	}
	
	if ($('div#sb_instagram').length) {
		
		$('.sbi_item').each(function( index, element ) {
			
			var $this = $(this); 
			
			function setHeight() {
				var windowHeight = $($this).width() + 20;
				$($this).css('max-height', windowHeight);
			};
			setHeight();
			
			$(window).resize(function() {
				setHeight();
			});
		
		});
		
	}
	
	
})( jQuery );