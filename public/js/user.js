$ = jQuery;

$(document).ready(function () {

	$('.header_nav').hover(
		function () {
			$('header').toggleClass('header_hover');
		}
	);


	$('.humb').click(function () {
		$('.header_nav').toggleClass('header_nav_open');
		$('.humb').toggleClass('active');
		$('body').toggleClass('no_scroll');
		$('html').toggleClass('no_scroll');

		if ($('.js-nav-curtain').hasClass('curtain-up')) {
			$('.js-nav-curtain').removeClass('curtain-up');
			$('.site-nav__curtain').addClass('curtain-down');
		} else {
			$('.js-nav-curtain').addClass('curtain-up');
			$('.site-nav__curtain').removeClass('curtain-down');
		}

	});

	let banner_slider = new Swiper('.banner_slider', {

		navigation: {
			nextEl: ".banner_wrapper_slider .swiper-button-next",
			prevEl: ".banner_wrapper_slider .swiper-button-prev",
		},
		pagination: {
			el: ".banner_wrapper_slider .swiper-pagination",
			type: "fraction",
		},
		autoplay: {
			delay: 7500,
			disableOnInteraction: false,
		},
		loop: true,
		speed: 600,
		effect: 'fade',
		parallax: true,
		paginationClickable: true,
		breakpoints: {

			320: {
				slidesPerView: 1,
				spaceBetween: 10,
				speed: 400,
				autoplay: {
					delay: 15500,
					disableOnInteraction: false,
				},
			},

			650: {
				slidesPerView: 1,
				spaceBetween: 10
			},
		}
	});

	let brand_slider = new Swiper('.brand_slider', {
		navigation: {
			nextEl: ".brand_wrapper_slider .swiper-button-next",
			prevEl: ".brand_wrapper_slider .swiper-button-prev",
		},
		pagination: {
			el: ".banner_wrapper_slider .swiper-pagination",
			type: "fraction",
		},
		autoplay: {
			delay: 8500,
			disableOnInteraction: false,
		},
		speed: 900,
		parallax: true,
		paginationClickable: true,
		breakpoints: {

			320: {
				slidesPerView: 1.2,
				spaceBetween: 15,
				speed: 300,
				autoplay: false,
			},

			680: {
				slidesPerView: 2.2,
				spaceBetween: 20,
				speed: 300,
			},
			1080: {
				slidesPerView: 3,
				spaceBetween: 20
			},
		}
	});

	let advantages_slider = new Swiper('.advantages_slider', {
		navigation: {
			nextEl: ".advantages_wrapper_slider .swiper-button-next",
			prevEl: ".advantages_wrapper_slider .swiper-button-prev",
		},

		paginationClickable: true,
		breakpoints: {

			320: {
				slidesPerView: 1.3,
				spaceBetween: 15,

			},
			390: {
				slidesPerView: 1.6,
				spaceBetween: 15,

			},
			700: {
				slidesPerView: 2.8,
				spaceBetween: 15
			},
			1023: {
				slidesPerView: 3.8,
				spaceBetween: 15
			},
			1180: {
				slidesPerView: 4.2,
				spaceBetween: 20
			},
			1580: {
				slidesPerView: 4.5,
				spaceBetween: 20
			},
		}
	});

	let our_mission_slider = new Swiper('.our_mission_slider', {

		navigation: {
			nextEl: ".our_mission_wrapper_slider .swiper-button-next",
			prevEl: ".our_mission_wrapper_slider .swiper-button-prev",
		},
		pagination: {
			el: ".our_mission_wrapper_slider .swiper-pagination",
			type: "fraction",
		},
		autoplay: {
			delay: 8500,
			disableOnInteraction: false,
		},
		loop: true,
		speed: 400,
		effect: 'cube',
		paginationClickable: true,
		breakpoints: {

			320: {
				speed: 400,
				slidesPerView: 1,
				spaceBetween: 10
			},
		}
	});

	let our_brands_slider = new Swiper('.our_brands_slider', {

		navigation: {
			nextEl: ".our_brands__wrapper_slider .swiper-button-next",
			prevEl: ".our_brands__wrapper_slider .swiper-button-prev",
		},
		autoplay: {
			delay: 5500,
			disableOnInteraction: false,
		},
		loop: true,
		speed: 900,
		parallax: true,
		paginationClickable: true,
		breakpoints: {

			320: {
				slidesPerView: 3,
				spaceBetween: 20
			},
			700: {
				slidesPerView: 4,
				spaceBetween: 20
			},
			1023: {
				slidesPerView: 3,
				spaceBetween: 20
			},
			1180: {
				slidesPerView: 4,
				spaceBetween: 40
			},
		}
	});


	/*-------------по скролу запустить анимацию--------------*/

	$(function () {
		$(window).scroll(function () {
			var windowWidth = $('body').innerWidth(),
				winTop = $(window).scrollTop();
			if (winTop >= 1250 && windowWidth > 700) {
				$(".production_map").addClass("active");
				setTimeout(() =>
					$(".production_map").addClass("animation"), 800);
				setTimeout(() =>
					$(".production_map").addClass("animation"), 800);
			}
			if (winTop >= 700 && windowWidth <= 700) {
				$(".production_map").addClass("active");
				setTimeout(() =>
					$(".production_map").addClass("animation"), 400);
				setTimeout(() =>
					$(".production_map").addClass("animation"), 400);
			} else {
				//				$(".production_map").removeClass("animation");
				//				$(".direction_block").removeClass("animation");
				//				$(".direction").removeClass("animation");
			}
		});
	});

	$(function () {
		$(window).scroll(function () {
			var windowWidth = $('body').innerWidth(),
				winTop = $(window).scrollTop();
			if (windowWidth >= 300 && windowWidth <= 1023) {
				$('.tabs_map__btn .ui-tabs-anchor').click(function () {
					$('html').addClass('html_hidden');
				});
			}
		});
	});

	/*-----Модальное окно-----*/
	$('.modal_open').magnificPopup({
		delegate: 'a',
		removalDelay: 500,
		callbacks: {
			beforeOpen: function () {
				this.st.mainClass = this.st.el.attr('data-effect');
			}
		},
		midClick: true,
	});

	$("#phone, #phone2, #phone3").inputmask({
		"mask": "+9(999)999-99-99",
		"clearIncomplete": true,
		showMaskOnFocus: true,
		showMaskOnHover: false,
	});

	$("#tabs").tabs();

	$("#tabs_map").tabs({
		collapsible: true,
	});

	$('.tabs_map__item').removeClass('ui-tabs-active ui-state-active')

	$('.tabs_map__item').attr("aria-selected", "false")
	$('.tabs_map__item').attr("aria-expanded", "false")
	$('.tabs_map__item').attr("tabindex", "-1")

	$('.tab_map__item').attr("aria-hidden", "true")
	$('.tab_map__item').css("display", "none")

	$('.tabs_close').click(function () {
		$('.tab_map__item').attr("aria-hidden", "true");
		$('.tabs_map__item').removeClass('ui-tabs-active ui-state-active');
		$('html').removeClass('html_hidden');
	});

	$('.map_scroll_text').click(function () {
		setTimeout(function () {
			$('.map_scroll_text').addClass('none');
		}, 400)
	});

	Fancybox.bind("[data-fancybox]", {});

	$('#accordion').accordion({
		header: ".accordion_header",
		active: false,
		collapsible: true,
		heightStyle: "content",

		// дает возможность открыть каждый сблок
		beforeActivate: function (event, ui) {
			if (ui.newHeader[0]) {
				var currHeader = ui.newHeader;
				var currContent = currHeader.next('.ui-accordion-content');
			} else {
				var currHeader = ui.oldHeader;
				var currContent = currHeader.next('.ui-accordion-content');
			}
			var isPanelSelected = currHeader.attr('aria-selected') == 'true';

			currHeader.toggleClass('ui-corner-all', isPanelSelected).toggleClass('accordion-header-active ui-state-active ui-corner-top', !isPanelSelected).attr('aria-selected', ((!isPanelSelected).toString()));

			currHeader.children('.ui-icon').toggleClass('ui-icon-plus', isPanelSelected).toggleClass('ui-icon-minus', !isPanelSelected);

			currContent.toggleClass('accordion-content-active', !isPanelSelected)
			if (isPanelSelected) {
				currContent.slideUp();
			} else {
				currContent.slideDown();
			}

			return false;
		},

		icons: {
			"header": "ui-icon-plus",
			"activeHeader": "ui-icon-minus"
		},

	});


	$(document).mouseup(function (e) {
		var container = $('.tab_map__item');
		if (container.has(e.target).length === 0) {
			$('.tab_map__item').attr("aria-hidden", "true");
			$('.tab_map__item').css("display", "none");
			$('.tabs_map__item').removeClass('ui-tabs-active ui-state-active');
		}
	});


	$(function () {
		var windowWidth = $('body').innerWidth();
		if (windowWidth > 1200) {
			$(".advantages_slide").hover(function () {
				$(this).find('.advantages_slide__text').slideToggle('slow');
			});
		}
	});

	$(window).scroll(function () {
		var height = $(window).scrollTop();
		if (height > 290) {
			$('.button_box_footer').addClass('fixed');
		} else {
			$('.button_box_footer').removeClass('fixed');
		}
	});


});


const itemsBox = document.querySelector('.our_team_trigger')
const elements = document.querySelectorAll('.team_trigger_item')
const defaultActive = document.querySelector('.one')

if (itemsBox) {
	itemsBox.addEventListener('mouseleave', onMouseLeaveHandler)
	elements.forEach(el => el.addEventListener('mouseenter', onMouseEnterHandler))
}

function onMouseEnterHandler(e) {
	removeAllActive()
	const element = e.target.closest('.team_trigger_item')
	element.classList.add('active')
}

function onMouseLeaveHandler() {
	removeAllActive()
	defaultActive.classList.add('active')
}

function removeAllActive() {
	elements.forEach(el => el.classList.remove('active'))
}



$(document).ready(function () {
	setTimeout(function () {
		//		$('.tabs_map__btn .tabs_map__item:first-child').trigger('click').addClass('active111');
	}, 2000);
});
