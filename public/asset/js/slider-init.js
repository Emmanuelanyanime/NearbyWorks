/***************************************************
==================== JS INDEX ======================
****************************************************
01. tp-text-slide-active
02. tp-testimonial-slider-active
03. tp-integration-slider-active
04. tp-testimonial-2-slider-active
05. tp-hero-7-slide-active
06. tp-brand-8-slider
07. tp-brand-9-slide-active
08. tp_testimonial_10_slide
09. tp-feature-inner-active
10. tp-testimonial-inner-slider-active
****************************************************/


(function ($) {
	"use strict";

	////////////////////////////////////////////////////
	// 01. tp-text-slide-active

	let tp_text_slide = new Swiper(".tp-text-slide-active", {
		loop: true,
		freemode: true,
		slidesPerView: 'auto',
		spaceBetween: 75,
		centeredSlides: true,
		allowTouchMove: false,
		speed: 5000,
		autoplay: {
			delay: 1,
			disableOnInteraction: true,
		},
	});


	////////////////////////////////////////////////////
	//02. tp-testimonial-slider-active
	var swiper = new Swiper(".tp-testimonial-slider-active", {
		slidesPerView: 3,
		spaceBetween: 24,
		loop: true,
		breakpoints: {
			1200: {
				slidesPerView: 4,
			},
			992: {
				slidesPerView: 3,
			},
			768: {
				slidesPerView: 1,
			},
			576: {
				slidesPerView: 1,
			},
			0: {
				slidesPerView: 1,
			}
		},
		navigation: {
			prevEl: '.tp-testimonial-prev',
			nextEl: '.tp-testimonial-next',
		},
	});


	////////////////////////////////////////////////////
	// 03. tp-integration-slider-active
	var tp_integration_slider= new Swiper(".tp-integration-slider-active", {
		loop: true,
		spaceBetween: 30,
		slidesPerView: 'auto',
		centeredSlides: true,
		speed: 8000,
		autoplay: {
		  delay: 1,
		  disableOnInteraction: true,
		},
	});

	////////////////////////////////////////////////////
	//04. tp-testimonial-2-slider-active
	var swiper = new Swiper(".tp-testimonial-2-slider-active", {
		slidesPerView: 3,
		spaceBetween: 24,
		loop: true,
		breakpoints: {
			1200: {
				slidesPerView: 4,
			},
			992: {
				slidesPerView: 3,
			},
			768: {
				slidesPerView: 1,
			},
			576: {
				slidesPerView: 1,
			},
			0: {
				slidesPerView: 1,
			}
		},
	});

	////////////////////////////////////////////////////
	// 05. tp-hero-7-slide-active
	let tp_hero_7_slide = new Swiper(".tp-hero-7-slide-active", {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		pagination: {
			el: ".tp-hero-7-pagination",
		},
	});

	////////////////////////////////////////////////////
	// 06. tp-brand-8-slider
	let tp_brand_slider = new Swiper(".tp-brand-8-slider", {
        loop: true,
		freemode: true,
		spaceBetween: 15,
		slidesPerView: 'auto',
		centeredSlides: true,
		allowTouchMove: false,
		speed: 8000,
		autoplay: {
		  delay: 1,
		  disableOnInteraction: true,
		},
	});


	////////////////////////////////////////////////////
	//07. tp-brand-9-slide-active
	var swiper = new Swiper(".tp-brand-9-slide-active", {
        loop: true,
		freemode: true,
		spaceBetween: 30,
		slidesPerView: 'auto',
		centeredSlides: true,
		allowTouchMove: false,
		speed: 8000,
		autoplay: {
		  delay: 1,
		  disableOnInteraction: true,
		},
	});

	////////////////////////////////////////////////////
	// 08. tp_testimonial_10_slide
	let tp_testimonial_10_slide = new Swiper(".tp-testimonial-10-active", {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		pagination: {
			el: ".tp-hero-10-pagination",
		},
		navigation: {
			prevEl: '.tp-testimonial-10-prev',
			nextEl: '.tp-testimonial-10-next',
		},
	});

	////////////////////////////////////////////////////
	// 09. tp-feature-inner-active
	let tp_feature_inner_slide = new Swiper(".tp-feature-inner-active", {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		pagination: {
			el: ".tp-feature-inner-pagination",
		},
		navigation: {
			prevEl: '.tp-testimonial-10-prev',
			nextEl: '.tp-testimonial-10-next',
		},
	});

	////////////////////////////////////////////////////
	//10. tp-testimonial-inner-slider-active
	var swiper = new Swiper(".tp-testimonial-inner-slider-active", {
		slidesPerView: 3,
		spaceBetween: 24,
		loop: true,
		slidesPerView: 'auto',
		centeredSlides: true,
		speed: 8000,
		autoplay: {
			delay: 1,
			disableOnInteraction: true,
		},
		breakpoints: {
			1400: {
				slidesPerView: 5,
			},
			1200: {
				slidesPerView: 4,
			},
			992: {
				slidesPerView: 4,
			},
			768: {
				slidesPerView: 2,
			},
			576: {
				slidesPerView: 1,
			},
			0: {
				slidesPerView: 1,
			}
		},
	});


})(jQuery);    

