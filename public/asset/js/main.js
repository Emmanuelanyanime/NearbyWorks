/***************************************************
==================== JS INDEX ======================
****************************************************
01. PreLoader Js
02. Search Js
03. menu js
04. back-to-top
05. Sticky Header Js
06. Sidebar Js
07. Magnific Js
08. PureCounter Js
09. magnificPopup image Js
10. Nice Select Js
11. smooth-wrapper
12. Data CSS Js
13. tp-btn-hover
14. custom tab here
15. custom accordion
16. panel pin section
17. custom tab here
18. chat-bubble
19. data-tp-animate
20. tp-title-animetion
21. svg-motion-anim
22. progress-bar
23. data-speed
24. data-tp-split-text
25. tp-image-3d-ui
26. magnetic items
27. data-words-rotate
28. tp-parallax
29. splitTextAnimation
30. splitTextRevealTwo
****************************************************/


(function ($) {
	"use strict";

	var windowOn = $(window);

	////////////////////////////////////////////////////
	// 01. preloader js
	windowOn.on('load',function() {
		$("#preloader").fadeOut(500);
	});

	////////////////////////////////////////////////////
	// 02. Search Js
	$(".search-open-btn").on("click", function () {
		$(".search-popup").addClass("search-opened");
	});

	$(".search-close-btn").on("click", function () {
		$(".search-popup").removeClass("search-opened");
	});


	///////////////////////////////////////////////////
	// 03. menu js
	var tpMenuWrap = $('.tp-mobile-menu-active > ul').clone();
	var tpSideMenu = $('.tp-offcanvas-menu nav');
	tpSideMenu.append(tpMenuWrap);
	if ($(tpSideMenu).find('.tp-submenu').length != 0) {
		$(tpSideMenu).find('.tp-submenu').parent().append('<button class="tp-menu-close"><i class="fal fa-plus"></i></button>');
	}
	var sideMenuList = $('.tp-offcanvas-menu nav > ul > li button.tp-menu-close, .tp-offcanvas-menu nav > ul li.has-dropdown > a');
	$(sideMenuList).on('click', function (e) {
		e.preventDefault();
		if (!($(this).parent().hasClass('active'))) {
			$(this).parent().addClass('active');
			$(this).siblings('.tp-submenu').slideDown();
		} else {
			$(this).siblings('.tp-submenu').slideUp();
			$(this).parent().removeClass('active');
		}
	});

	////////////////////////////////////////////////////
	// 04. back-to-top
	function back_to_top() {
		var btn = $('#back_to_top');
		var btn_wrapper = $('.back-to-top-wrapper');
		windowOn.on('scroll',function () {
			if (windowOn.scrollTop() > 300) {
				btn_wrapper.addClass('back-to-top-btn-show');
			} else {
				btn_wrapper.removeClass('back-to-top-btn-show');
			}
		});

		btn.on('click', function (e) {
			e.preventDefault();
			$('html, body').animate({ scrollTop: 0 }, '300');
		});
	}
	back_to_top();


	///////////////////////////////////////////////////
	// 05. Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 400) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});

	if ($('.tp-header-height').length > 0) {
		var headerHeight = document.querySelector(".tp-header-height");
		var setHeaderHeight = headerHeight.offsetHeight;
		$(".tp-header-height").each(function () {
			$(this).css({
				'height' : $(this).height()
			});
		});
	}

	////////////////////////////////////////////////////
	// 06. Sidebar Js
	$(".tp-menu-bar").on("click", function () {
		$(".tpoffcanvas").addClass("opened");
		$(".body-overlay").addClass("apply");
	});
	$(".close-btn").on("click", function () {
		$(".tpoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});
	$(".body-overlay").on("click", function () {
		$(".tpoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});

	///////////////////////////////////////////////////
	// 07. Magnific Js
	$(".popup-video").magnificPopup({
		type: "iframe",
	});

	////////////////////////////////////////////////////
	// 08. PureCounter Js
	if ($(".purecounter").length) {
		new PureCounter({
			filesizing: true,
			selector: ".filesizecount",
			pulse: 2,
		});
		new PureCounter();
	}


	////////////////////////////////////////////////////
	// 09. magnificPopup image Js
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	////////////////////////////////////////////////////
	// 10. Nice Select Js
	$('.tp-select').niceSelect();

	////////////////////////////////////////////////////
	// 11. smooth-wrapper
	let lenis;
	const smoothScrolling = () => {
		const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || window.innerWidth <= 768 || "ontouchstart" in window;
		if (!isMobile) {
			lenis = new Lenis({
				lerp: 0.08,
				smoothWheel: true
			});
			lenis.on("scroll", () => ScrollTrigger.update());
			gsap.ticker.add((time) => {
				lenis.raf(time * 1e3);
			});
			gsap.ticker.lagSmoothing(0);
		}
	};


	////////////////////////////////////////////////////
	// 12. Data CSS Js
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});

	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});

	////////////////////////////////////////////////////
	// 13. tp-btn-hover
	$('.tp-btn-hover')
		.on('mouseenter', function (e) {
			var parentOffset = $(this).offset(),
				relX = e.pageX - parentOffset.left,
				relY = e.pageY - parentOffset.top;
			$(this).find('b').css({ top: relY, left: relX })
		})
	$('.tp-btn-hover').on('mouseout', function (e) {
		var parentOffset = $(this).offset(),
			relX = e.pageX - parentOffset.left,
			relY = e.pageY - parentOffset.top;
		$(this).find('b').css({ top: relY, left: relX })

	});

	////////////////////////////////////////////////////
	// 14. custom tab here

	function initPriceTabs() {
		const tabButtons = document.querySelectorAll('.tab-btn');
		const tabContents = document.querySelectorAll('.tab-content');

		tabButtons.forEach((btn, index) => {
			btn.addEventListener('click', () => {
				let activeIndex = [...tabButtons].findIndex(b => b.classList.contains('active'));
				if (btn.classList.contains('active')) {
					let nextIndex = (index + 1) % tabButtons.length;

					tabButtons.forEach(b => b.classList.remove('active'));
					tabContents.forEach(c => c.classList.add('hidden'));

					tabButtons[nextIndex].classList.add('active');
					tabContents[nextIndex].classList.remove('hidden');
				} else {
					// normal click
					tabButtons.forEach(b => b.classList.remove('active'));
					tabContents.forEach(c => c.classList.add('hidden'));

					btn.classList.add('active');
					tabContents[index].classList.remove('hidden');
				}
			});
		});
	}

	////////////////////////////////////////////////////
	// 15. custom accordion
	function accordion() {
		const items = document.querySelectorAll(".accordion .accordion-item");

		items.forEach((item) => {
			const header = item.querySelector(".accordion-header");
			const collapse = item.querySelector(".accordion-collapse");
			const isExpanded = item.dataset.expanded === "true";

			collapse.style.overflow = "hidden";
			collapse.style.transition = "max-height 0.4s ease, opacity 0.3s ease";

			if (isExpanded) {
				openItem(item, false);
			} else {
				closeItem(item, false);
			}

			header.addEventListener("click", function () {
				const isActive = header.classList.contains("active");

				items.forEach((el) => closeItem(el, true));

				if (!isActive) {
					openItem(item, true);
				}
			});
		});

		function openItem(item, animate = true) {
			const collapse = item.querySelector(".accordion-collapse");
			const header = item.querySelector(".accordion-header");

			const height = collapse.scrollHeight;

			if (animate) {
				requestAnimationFrame(() => {
					collapse.style.maxHeight = height + "px";
					collapse.style.opacity = "1";
				});
			} else {
				collapse.style.maxHeight = height + "px";
				collapse.style.opacity = "1";
			}

			header.classList.add("active");
			item.classList.add("hello");
		}

		function closeItem(item, animate = true) {
			const collapse = item.querySelector(".accordion-collapse");
			const header = item.querySelector(".accordion-header");

			if (animate) {
				collapse.style.maxHeight = collapse.scrollHeight + "px";

				requestAnimationFrame(() => {
					collapse.style.maxHeight = "0";
					collapse.style.opacity = "0";
				});
			} else {
				collapse.style.maxHeight = "0";
				collapse.style.opacity = "0";
			}

			header.classList.remove("active");
			item.classList.remove("hello");
		}
	}


 	/////////////////////////////////////////////////////
  	// 16. panel pin section
	let mm = gsap.matchMedia();
	mm.add("(min-width: 1199px)", () => {
		let tl = gsap.timeline();
		let panels = document.querySelectorAll('.tp-panel-pin')
		panels.forEach((section, index) => {
			tl.to(section, {
				scrollTrigger: {
					trigger: section,
					pin: section,
					scrub: 1,
					start: 'top 10%',
					end: "bottom 80%",
					endTrigger: '.tp-panel-pin-area',
					pinSpacing: false,
					markers: false,
				},
			})
		})
	});


	////////////////////////////////////////////////////
	// 17. custom tab here
	function initPriceTabs2() {
		const tabButtons = document.querySelectorAll('.tab-btn-2');
		const tabContents = document.querySelectorAll('.tab-content-2');
		tabButtons.forEach((btn, index) => {
			btn.addEventListener('click', () => {
			// deactivate all buttons
			tabButtons.forEach(b => b.classList.remove('active'));
			tabContents.forEach(c => c.classList.add('hidden'));

			// activate clicked button & show content
			btn.classList.add('active');
			tabContents[index].classList.remove('hidden');
			});
		});
	}
	

	////////////////////////////////////////////////////
	// 18. chat-bubble
	const bubbles = document.querySelectorAll('.chat-bubble');
	const delayBetweenBubbles = 1000; 
	const delayBetweenSequences = 5000;

	function animateSequence() {
		// Reset all bubbles
		bubbles.forEach(bubble => {
		bubble.classList.remove('animate-bubble');
		bubble.classList.add('opacity-0', 'scale-75');
		});

		bubbles.forEach((bubble, index) => {
		setTimeout(() => {
			// Force reflow to trigger animation on first bubble
			void bubble.offsetWidth;
			bubble.classList.remove('opacity-0', 'scale-75');
			bubble.classList.add('animate-bubble');
		}, index * delayBetweenBubbles);
		});
	}
	// Start first sequence
	animateSequence();
	// Repeat the sequence after all bubbles + 30s
	setInterval(() => {
		animateSequence();
	}, delayBetweenBubbles * bubbles.length + delayBetweenSequences);


	////////////////////////////////////////////////////
	// 19. data-tp-animate
	const animation = {
		init() {
			const elements = document.querySelectorAll("[data-tp-animate]");
			const Springer = window.Springer.default;
			elements.forEach((elem) => {
			const duration = elem.getAttribute("data-duration") ? parseFloat(elem.getAttribute("data-duration")) : 0.6;
			const blur = elem.getAttribute("data-blur") ? parseFloat(elem.getAttribute("data-blur")) : 0;
			const delay = elem.getAttribute("data-delay") ? parseFloat(elem.getAttribute("data-delay")) : 0;
			const offset = elem.getAttribute("data-offset") ? parseFloat(elem.getAttribute("data-offset")) : 20;
			const instant = elem.hasAttribute("data-instant") && elem.getAttribute("data-instant") !== "false";
			const start = elem.getAttribute("data-start") || "top 90%";
			const end = elem.getAttribute("data-end") || "top 50%";
			const direction = elem.getAttribute("data-direction") || "down";
			const useSpring = elem.hasAttribute("data-spring");
			const spring = useSpring ? Springer(0.2, 0.8) : null;
			const rotation = elem.getAttribute("data-rotation") ? parseFloat(elem.getAttribute("data-rotation")) : 0;
			const scale = elem.getAttribute("data-scale") ? parseFloat(elem.getAttribute("data-scale")) : 1;
			const animationType = elem.getAttribute("data-animation-type") || "from";
			elem.style.opacity = "1";
			elem.style.filter = `blur(${blur}px)`;
			let animationProps;
			if (animationType === "to") {
				animationProps = {
					opacity: 1,
					filter: "blur(0)",
					duration,
					delay,
					ease: useSpring ? spring : "power2.out",
					scale
				};
				if (rotation !== 0) {
					animationProps.rotation = rotation;
				}
			} else {
				animationProps = {
					opacity: 0,
					filter: "blur(16px)",
					duration,
					delay,
					ease: useSpring ? spring : "power2.out"
				};
				if (rotation !== 0) {
					animationProps.rotation = rotation;
				}
			}
			if (!instant) {
				animationProps.scrollTrigger = {
					trigger: elem,
					start,
					end,
					scrub: false
				};
			}
			switch (direction) {
				case "left":
				animationProps.x = -offset;
				break;
				case "right":
				animationProps.x = offset;
				break;
				case "down":
				animationProps.y = offset;
				break;
				case "up":
				default:
				animationProps.y = -offset;
				break;
			}
			if (animationType === "to") {
				gsap.to(elem, animationProps);
			} else {
				gsap.from(elem, animationProps);
			}
			});
		}
	};

	////////////////////////////////////////////////////
	// 20. tp-title-animetion
	const elements = document.querySelectorAll(".tp-title-animetion");
	elements.forEach((el) => {
		const split = SplitText.create(el, { type: "words" });
		const blur = el.getAttribute("data-blur") ? parseFloat(el.getAttribute("data-blur")) : 16;
		const duration = el.getAttribute("data-duration") ? parseFloat(el.getAttribute("data-duration")) : 0.6;
		const stagger = el.getAttribute("data-stagger") ? parseFloat(el.getAttribute("data-stagger")) : 0.06;
		const delay = el.getAttribute("data-delay") ? parseFloat(el.getAttribute("data-delay")) : 0;
		gsap.from(split.words, {
			opacity: 0,
			y: 20,
			filter: `blur(${blur}px)`,
			stagger: stagger,
			duration: duration,
			delay: delay,
			ease: "power2.out",
			scrollTrigger: {
			trigger: el,
			start: "top 90%",
			end: "top 50%",
			toggleActions: "play none none none"
			}
		});
	});

	////////////////////////////////////////////////////
	// 21. svg-motion-anim
	if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
	document.querySelectorAll(".svg-motion-anim").forEach(function (svg) {

		var path = svg.querySelector(".svg-motion-anim-path");
		var circle = svg.querySelector(".svg-motion-anim-circle");

		if (!path || !circle) return;

		var pathLength = path.getTotalLength();

		// start position
		var startPoint = path.getPointAtLength(0);
		circle.setAttribute("cx", startPoint.x);
		circle.setAttribute("cy", startPoint.y);

		var obj = { progress: 0 };

		gsap.to(obj, {
		progress: 0.4, // 40%
		duration: 1.9,
		ease: "power2.out",

		scrollTrigger: {
			trigger: svg, // 🔥 each svg trigger
			start: "top 80%",
			toggleActions: "play none none none"
		},

		onUpdate: function () {
			var point = path.getPointAtLength(obj.progress * pathLength);
			circle.setAttribute("cx", point.x);
			circle.setAttribute("cy", point.y);
		}
		});

	});

	////////////////////////////////////////////////////
	// 22. progress-bar
	const ProgressBarAnimation = () => {
		const progressBars = document.querySelectorAll(".progress-bar");
		const trigger = document.querySelector(".progress-container");
		if (!progressBars.length) return;
		progressBars.forEach((bar) => {
			const originalWidth = window.getComputedStyle(bar).width;
			gsap.set(bar, { width: "0px" });
			gsap.to(bar, {
			width: originalWidth,
			duration: 2.5,
			ease: "power3.out",
			scrollTrigger: {
				trigger,
				start: "top 80%",
				once: true
			}
			});
		});
	};

	////////////////////////////////////////////////////
	// 23. data-speed
	document.querySelectorAll('.spped-item').forEach(el => {
		const speed = el.getAttribute('data-speed');
		gsap.to(el, {
			y: 200 * speed,
			scrollTrigger: {
				trigger: el,
				scrub: true
			}
		});
	});

    ///////////////////////////////////////////////////
	// 24. data-tp-split-text
	const splitTextReveal = {
		init() {
			document.querySelectorAll("[data-tp-split-text]").forEach((elem) => {
			const lineDelay = parseFloat(elem.getAttribute("data-line-delay") || "0.15");
			const duration = parseFloat(elem.getAttribute("data-line-duration") || "0.9");
			const offsetY = parseFloat(elem.getAttribute("data-line-offset-y") || "100");
			const instant = elem.hasAttribute("data-line-instant") && elem.getAttribute("data-line-instant") !== "false";
			const start = elem.getAttribute("data-line-start") || "top 90%";
			const delay = parseFloat(elem.getAttribute("data-delay") || "0.1");
			const splitText = new SplitText(elem, { type: "lines", tag: "span" });
			const lineSpans = splitText.lines;
			if (!(lineSpans == null ? void 0 : lineSpans.length)) return;
			elem.style.opacity = 1;
			lineSpans.forEach((line) => {
				var _a;
				const wrapper = document.createElement("div");
				wrapper.style.cssText = "overflow: hidden; display: block;";
				(_a = line.parentNode) == null ? void 0 : _a.insertBefore(wrapper, line);
				wrapper.appendChild(line);
			});
			gsap.fromTo(
				lineSpans,
				{ y: offsetY, opacity: 0, display: "block" },
				{
					y: 0,
					opacity: 1,
					duration,
					delay,
					ease: "power2.inOut",
					stagger: lineDelay,
					scrollTrigger: instant ? null : {
						trigger: elem,
						start,
						once: true
					}
				}
			);
			});
		}
	};


    ///////////////////////////////////////////////////
	// 25. tp-image-3d-ui
	$(".tp-image-3d-ui").each(function () {
		const container = $(this),
			img = container.find("img")[0],
			item = container.find(".tp-image-3d-item"),
			rotateXFrom = item.data("rotatex_from") || 0,
			rotateYFrom = item.data("rotatey_from") || 0,
			rotateXTo = item.data("rotatex_to") || 0,
			rotateYTo = item.data("rotatey_to") || 0;

		// Set initial 3D transform
		gsap.set(img, {
			rotateX: rotateXFrom,
			rotateY: rotateYFrom,
			transformStyle: "preserve-3d",
			willChange: "transform",
		});

		// Animate rotation on scroll
		gsap.to(img, {
			rotateX: rotateXTo,
			rotateY: rotateYTo,
			scrollTrigger: {
				trigger: container[0],
				start: "top 85%", 
				end: "bottom 90%",  
				scrub: 0.9,   
			}
		});
	});


	//////////////////////////////////////////////////
	// 26. magnetic items
	$(".magnetic-item").wrap('<div class="magnetic-wrap"></div>');

	$(".magnetic-wrap").on('mousemove',function (e) {
		const parent = this;
		const target = parent.querySelector(".magnetic-item");

		const rect = parent.getBoundingClientRect();
		const relX = e.clientX - rect.left;
		const relY = e.clientY - rect.top;

		const movement = 25; // magnetic strength

		gsap.to(target, {
			duration: 0.3,
			x: ((relX - rect.width / 2) / rect.width) * movement,
			y: ((relY - rect.height / 2) / rect.height) * movement,
			ease: "power2.out",
		});
	});

	$(".magnetic-wrap").on('mouseleave',function () {
		const target = this.querySelector(".magnetic-item");
		gsap.to(target, { duration: 0.3, x: 0, y: 0, ease: "power2.out" });
	});

	//////////////////////////////////////////////////
	// 27. data-words-rotate
	const wordsRotate = {
		init() {
			const elements = document.querySelectorAll("[data-words-rotate]");
			elements.forEach((el) => {
			// Split words
			new SplitType(el, {
				types: "words",
				tagName: "span"
			});
			const words = el.querySelectorAll(".word");

			// ==== GET OPTIONS FROM HTML ====
			const duration = el.getAttribute("data-duration") ? parseFloat(el.getAttribute("data-duration")) : 0.6;
			const delay = el.getAttribute("data-delay") ? parseFloat(el.getAttribute("data-delay")) : 0;
			const stagger = el.getAttribute("data-stagger") ? parseFloat(el.getAttribute("data-stagger")) : 0.6;
			const blur = el.getAttribute("data-blur") ? parseFloat(el.getAttribute("data-blur")) : 10;
			const rotate = el.getAttribute("data-rotate") ? parseFloat(el.getAttribute("data-rotate")) : -90;
			const start = el.getAttribute("data-start") || "top 80%";
			const end = el.getAttribute("data-end") || "top 50%";
			const scrub = el.hasAttribute("data-scrub");

			// ==== INITIAL SET ====
			gsap.set(words, {
				transformPerspective: 1000,
				transformOrigin: "center bottom",
			});

			// ==== ANIMATION ====
			gsap.from(words, {
				rotationX: rotate,
				opacity: 0,
				filter: `blur(${blur}px)`,
				duration: duration,
				delay: delay,
				ease: "power2.out",
				stagger: { amount: stagger },
				scrollTrigger: {
				trigger: el,
				start: start,
				end: end,
				scrub: scrub ? 0.5 : false,
				}
			});

			});
		}
	};

	//////////////////////////////////////////////////
	// 28. tp-parallax
	const parallaxEffect = {
	init() {
		const scene = document.getElementById("scene");
		if (scene != null) {
			initializeParallaxEffect();
		}
		function initializeParallaxEffect() {
			if (!scene) return;
			freezeParallaxElements(scene);
			if (document.readyState === "complete") {
				startParallaxAfterLoad();
			} else {
				window.addEventListener("load", startParallaxAfterLoad);
			}
		}
		function freezeParallaxElements(scene2) {
			const parallaxElements = scene2.querySelectorAll(".tp-parallax");
			parallaxElements.forEach((element) => {
				element.style.willChange = "transform";
				element.style.transform = "translate3d(0px, 0px, 0)";
				element.style.transition = "none";
				element.classList.add("parallax-frozen");
			});
		}
		function startParallaxAfterLoad() {
			waitForImagesToLoad(scene, () => {
				setTimeout(() => {
				unfreezeAndStartParallax(scene);
				}, 300);
			});
		}
		function unfreezeAndStartParallax(scene2) {
			const parallaxElements = scene2.querySelectorAll(".tp-parallax");
			parallaxElements.forEach((element) => {
				element.classList.remove("parallax-frozen");
				element.style.transition = "transform 0.3s ease-out";
			});
			setupParallaxAnimation(scene2);
		}
		function waitForImagesToLoad(scene2, onComplete) {
		scene2.querySelectorAll(".tp-parallax");
		const parallaxImages = scene2.querySelectorAll(".tp-parallax img");
		if (parallaxImages.length === 0) {
			onComplete();
			return;
		}
		let loadedCount = 0;
		const totalImages = parallaxImages.length;
			const checkCompletion = () => {
				loadedCount++;
				if (loadedCount >= totalImages) {
					onComplete();
				}
			};
			parallaxImages.forEach((img) => {
				if (img.complete) {
					checkCompletion();
				} else {
					img.addEventListener("load", checkCompletion);
					img.addEventListener("error", checkCompletion);
				}
			});
		}
		function setupParallaxAnimation(scene2) {
			const parallaxElements = scene2.querySelectorAll(".tp-parallax");
			const elementConfigs = createElementConfigs(parallaxElements);
			let isAnimating = false;
			let mouseX = scene2.offsetWidth / 2;
			let mouseY = scene2.offsetHeight / 2;
			initializeElements(elementConfigs);
			updateParallaxPositions(elementConfigs, mouseX, mouseY, scene2);
			const throttledMouseHandler = createThrottledHandler((event) => {
				mouseX = event.pageX;
				mouseY = event.pageY;
				if (!isAnimating) {
				requestAnimationFrame(() => {
					updateParallaxPositions(elementConfigs, mouseX, mouseY, scene2);
					isAnimating = false;
				});
				isAnimating = true;
				}
			});
			scene2.addEventListener("mousemove", throttledMouseHandler, {
				passive: true
			});
			setupPerformanceOptimization(scene2, elementConfigs);
		}
		function createElementConfigs(elements) {
			return Array.from(elements).map((element) => ({
				element,
				depth: parseFloat(element.getAttribute("data-parallax-value")) || 1,
				directionX: parseFloat(element.getAttribute("data-data-parallax-x")) || 1,
				directionY: parseFloat(element.getAttribute("data-data-parallax-y")) || 1,
				movementScale: 25
				// Reduced from 30 for smoother movement
			}));
		}
		function initializeElements(elementConfigs) {
			elementConfigs.forEach(({ element }) => {
				element.style.willChange = "transform";
				element.style.transform = "translateZ(0)";
			});
		}
		function updateParallaxPositions(elementConfigs, mouseX, mouseY, scene2) {
			const centerX = scene2.offsetWidth / 2;
			const centerY = scene2.offsetHeight / 2;
			const relativeX = (mouseX - centerX) / centerX;
			const relativeY = (mouseY - centerY) / centerY;
			elementConfigs.forEach(({ element, depth, directionX, directionY, movementScale }) => {
				if (!element.classList.contains("parallax-frozen")) {
				const moveX = relativeX * depth * directionX * movementScale;
				const moveY = relativeY * depth * directionY * movementScale;
				element.style.transform = `translate3d(${moveX}px, ${moveY}px, 0)`;
				}
			});
		}
		function createThrottledHandler(handler) {
			let timeoutId = null;
			return (event) => {
				if (timeoutId) return;
				timeoutId = setTimeout(() => {
				handler(event);
				timeoutId = null;
				}, 16);
			};
		}
		function setupPerformanceOptimization(scene2, elementConfigs) {
			let resetTimeout;
			scene2.addEventListener("mouseleave", () => {
				clearTimeout(resetTimeout);
				resetTimeout = setTimeout(() => {
					elementConfigs.forEach(({ element }) => {
						element.style.willChange = "auto";
					});
				}, 1e3);
			});
		}
	}
	};
	if (typeof window !== "undefined") {
		parallaxEffect.init();
	}

	//////////////////////////////////////////////////
	// 29. splitTextAnimation
	const splitTextAnimation = {
		init() {
			const elements = document.querySelectorAll("[data-split]");
			elements.forEach((elem) => {
				// config
				const duration = elem.getAttribute("data-duration") ? parseFloat(elem.getAttribute("data-duration")) : 1.2;
				const delay = elem.getAttribute("data-delay") ? parseFloat(elem.getAttribute("data-delay")) : 0;
				const stagger = elem.getAttribute("data-stagger") ? parseFloat(elem.getAttribute("data-stagger")) : 0.02;
				const start = elem.getAttribute("data-start") || "top 90%";
				const type = elem.getAttribute("data-type") || "chars,words";
				const effect = elem.getAttribute("data-effect") || "fade";
				const blur = elem.getAttribute("data-blur") ? parseFloat(elem.getAttribute("data-blur")) : 8;

				// split
				const split = new SplitText(elem, { type });

				gsap.set(elem, { perspective: 400 });

				let fromProps = {
					opacity: 0,
					filter: `blur(${blur}px)`
				};

				let toProps = {
					opacity: 1,
					filter: "blur(0px)"
				};

				// effects
				switch (effect) {
					case "right":
						fromProps.x = 20;
						break;

					case "left":
						fromProps.x = -20;
						break;

					case "rotate":
						fromProps.rotateX = 50;
						break;

					case "scale":
						fromProps.scale = 0.8;
						break;

					case "fade":
					default:
						break;
				}

				// animation
				gsap.fromTo(
					split.chars,
					fromProps,
					{
						...toProps,
						duration,
						delay,
						stagger,
						ease: "power2.out",
						scrollTrigger: {
							trigger: elem,
							start,
							toggleActions: "restart pause resume reverse"
						}
					}
				);
			});
		}
	};


	//////////////////////////////////////////////////
	// 30. splitTextRevealTwo
	const splitTextRevealTwo = {
		init() {
			document.querySelectorAll("[data-tp-strip-text]").forEach((elem) => {
			const lineDelay = parseFloat(elem.getAttribute("data-line-delay") || "0.15");
			const duration = parseFloat(elem.getAttribute("data-line-duration") || "0.9");
			const offsetX = parseFloat(elem.getAttribute("data-line-offset-x") || "-90");
			const direction = (elem.getAttribute("data-line-direction") || "right").toLowerCase();
			const fromX = direction === "left" ? -offsetX : offsetX;
			const instant = elem.hasAttribute("data-line-instant") && elem.getAttribute("data-line-instant") !== "false";
			const start = elem.getAttribute("data-line-start") || "top 90%";
			const delay = parseFloat(elem.getAttribute("data-delay") || "0.1");
			const color = elem.getAttribute("data-line-color") || "";
			const splitText = new SplitText(elem, { type: "lines", tag: "span" });
			const lineSpans = splitText.lines;
			if (!(lineSpans == null ? void 0 : lineSpans.length)) return;
			elem.style.opacity = 1;
				lineSpans.forEach((line) => {
					var _a;
					const wrapper = document.createElement("div");
					wrapper.style.cssText = " display: block;";
					(_a = line.parentNode) == null ? void 0 : _a.insertBefore(wrapper, line);
					wrapper.appendChild(line);
				});
				gsap.fromTo(
					lineSpans,
					{ x: fromX, opacity: 0, display: "block" },
					{
					x: 0,
					opacity: 1,
					color,
					duration,
					delay,
					ease: "power2.inOut",
					stagger: lineDelay,
					scrollTrigger: instant ? null : {
						trigger: elem,
						start,
						once: true
					}
					}
				);
			});
		}
	};


    ///////////////////////////////////////////////////
	// 31. all function call here
	document.addEventListener("DOMContentLoaded", () => {
		splitTextReveal.init();
		smoothScrolling();
		animation.init();
		ProgressBarAnimation();
		initPriceTabs();
		accordion();
		initPriceTabs2();
		wordsRotate.init();
		splitTextAnimation.init();
		splitTextRevealTwo.init();
	});


	/////////////////////////////////////////////
	// 32. Scroll nav class add
	if($('#scroll_nav').length > 0){
		$(document).on('ready', function() {
			$('#scroll_nav').onePageNav();
		});
	}

	
	////////////////////////////////////////////////////
	// 33.input eye checkbox

	$('#click').on('click', function (){
		$(this).toggleClass('open');
		var x = document.getElementById("myInput");
			if (x.type === "password") {
			   x.type = "text";
			} else {
			   x.type = "password";
			}
	});

	if ($('#myInput').length > 0) {
		function myFunction() {
			var x = document.getElementById("myInput");
			if (x.type === "password") {
			   x.type = "text";
			} else {
			   x.type = "password";
			}
		}
	}

})(jQuery);


