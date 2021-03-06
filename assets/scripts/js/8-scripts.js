(function($) {
	'use strict';
	
	gsap.registerPlugin(ScrollTrigger);

	// Sticky Mobile Hack
	$(document).on('click', 'a.mobile-toggle', function(){
		$('header.header').addClass('off-canvas-content is-open-right has-transition-push');
	});

	$(document).on('click', '.js-off-canvas-overlay', function(){
		$('header.header').removeClass('off-canvas-content is-open-right has-transition-push');
	});	
	
	// Home Hero Slider
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
	
	// Home Community Numbers Count Up
	if ($('section#community').length) {
		
// 		var $col1Value = $('section.community .columns-wrap .single-column:nth-child(1) .number');
		
		var $number1 = site_js.col_1_number;
		var $number2 = site_js.col_2_number;
		var $number3 = site_js.col_3_number;
		
		var counter = { var: 0 };
		
		var tal1 = document.getElementById("sc-1");
		
		gsap.to(counter, 2, {
			var: $number1,
			onUpdate: function() {
			tal1.innerHTML = numberWithCommas(Math.ceil(counter.var));
			},
			ease: Circ.easeOut,
			scrollTrigger: {
			    trigger: 'section#community',
			    start: 'top 75%',
			    toggleActions: 'play none play reverse'
			}
		});

		var tal2 = document.getElementById("sc-2");
		
		gsap.to(counter, 2, {
			var: $number2,
			onUpdate: function() {
			tal2.innerHTML = numberWithCommas(Math.ceil(counter.var));
			},
			ease: Circ.easeOut,
			scrollTrigger: {
			    trigger: 'section#community',
			    start: 'top 75%',
			    toggleActions: 'play none play reverse'
			}
		});
		
		var tal3 = document.getElementById("sc-3");
		
		gsap.to(counter, 2, {
			var: $number3,
			onUpdate: function() {
			tal3.innerHTML = numberWithCommas(Math.ceil(counter.var));
			},
			ease: Circ.easeOut,
			scrollTrigger: {
			    trigger: 'section#community',
			    start: 'top 75%',
			    toggleActions: 'play none play reverse'
			}
		});
		
		function numberWithCommas(x) {
			return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}
		
		
		
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
	
// 	Custom Instagram Feed
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
	
			
	if($('.fade-in').length) {
		$('.fade-in').each(function( index ) {
			
			var $this = $(this); 
					
			gsap.fromTo($this, .5, {autoAlpha: 0}, {autoAlpha: 1, ease: 'power1.out',
				scrollTrigger: {
				    trigger: $this,
				    start: 'top 75%',
				    toggleActions: 'play none play reverse'
				}
			});
		
		})
	}
	
	if($('.fade-in-up').length) {
		$('.fade-in-up').each(function( index ) {
			
			var $this = $(this); 
					
			gsap.fromTo($this, .5, {y: 70, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease: 'power1.out',
				scrollTrigger: {
				    trigger: $this,
				    start: 'top 75%',
				    toggleActions: 'play none play reverse'
				}
			});
		
		})
	}
	
	if($('.fade-in-left').length) {
		$('.fade-in-left').each(function( index ) {
			
			var $this = $(this); 
					
			gsap.fromTo($this, .5, {x: -70, autoAlpha: 0}, {x: 0, autoAlpha: 1, ease: 'power1.out',
				scrollTrigger: {
				    trigger: $this,
				    start: 'top 75%',
				    toggleActions: 'play none play reverse'
				}
			});
		
		})
	}

	if($('.fade-in-right').length) {
		$('.fade-in-right').each(function( index ) {
			
			var $this = $(this);				
		
			gsap.fromTo($this, .5, {x: 70, autoAlpha: 0}, {x: 0, autoAlpha: 1, ease: 'power1.out',
				scrollTrigger: {
				    trigger: $this,
				    start: 'top 75%',
				    toggleActions: 'play none play reverse'
				}
			});
		
		})
	}
	
	if($('.article-header.banner .img-wrap').length) {
				
		$(window).on("load",function(){		
		
			gsap.to('.article-header.banner .img-wrap', 1, {x: 0, autoAlpha: 1, ease: 'power1.out'});
			
		});
	}
	
	if($('.home .community').length) {
			
		let stagger_up = gsap.timeline({
			scrollTrigger: {
		    	trigger: '.community .columns-wrap',
				start: 'top 75%',
				toggleActions: 'play none play reverse'
		  	}
		});
					
		stagger_up
		.staggerFromTo('.community .columns-wrap .number', 1, {y: 70, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease: Back.easeOut}, 0.15);
		
		gsap.fromTo('.community .columns-wrap .copy', .5, {autoAlpha: 0, delay: 1}, {autoAlpha: 1, ease: 'power1.out', delay: 1,
			scrollTrigger: {
			    trigger: '.community .columns-wrap',
			    start: 'top 75%',
			    toggleActions: 'play none play reverse'
			}
		});
		
	}
	
/*
	if($('.stagger-up').length) {
		
		$('.stagger-up').each(function( index ) {
			
			var $this = $(this); 
			
			var $elem = $($this).find('stag-elem');
		
			let stagger_up = gsap.timeline({
				scrollTrigger: {
			    	trigger: $this,
					start: 'top 80%',
					toggleActions: 'play none play reverse'
			  	}
			});
						
			stagger_up
			.staggerFromTo($elem, 1, {y: 70, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease: Back.easeOut}, 0.15);
			
		});
		
	}
*/
		
		
	
	
})( jQuery );