const $ = jQuery;
const JSCCommon = {
	// часть вызов скриптов здесь, для использования при AJAX
	btnToggleMenuMobile: [].slice.call(document.querySelectorAll(".toggle-menu-mobile--js")),
	menuMobile: document.querySelector(".menu-mobile--js"),
	menuMobileLink: [].slice.call(document.querySelectorAll(".menu-mobile--js ul li a")),
	body: document.querySelector("body"),

	modalCall() {
		$(".link-modal").fancybox({
			arrows: false,
			infobar: false,
			touch: false,
			toolbar: false,
			autoFocus: false,
			type: 'inline',
			i18n: {
				en: {
					CLOSE: "Закрыть",
					NEXT: "Вперед",
					PREV: "Назад",
					// PLAY_START: "Start slideshow",
					// PLAY_STOP: "Pause slideshow",
					// FULL_SCREEN: "Full screen",
					// THUMBS: "Thumbnails",
					// DOWNLOAD: "Download",
					// SHARE: "Share",
					// ZOOM: "Zoom"
				},
			},
		});
		$(".link-modal").click(function () {
			let href = $(this).attr('href');
			let map = $(href).find('.modalAbout__frameWrap').data('map');
			$(href).find('.modalAbout__frameWrap').html(map);
			$(href).find(".lazy-modal--js").each(function () {
				if ($(this).data('src')) {
					$(this).attr('src', $(this).data('src')).removeClass('.lazy-modal--js')
				}
				$(this).find('source').each(function () {
					$(this).attr('srcset', $(this).data('srcset'))
				})
				$(this).find('img').each(function () {
					$(this).attr('src', $(this).data('src'))
				})
			})
			$(href).find(".order").val($(this).data("order"))
		});

		$(".itemProd__btn").click(function () {
			let href = $(this).attr('href');
			$(href).find(".order").val("Заказать " + $(this).parents(".itemProd").find(".h4").text())
		})

		$(".modal-close-js").click(function () {
			$.fancybox.close();
		});
	},
	// /magnificPopupCall
	toggleMenu() {
		let _this = this;
		_this.btnToggleMenuMobile.forEach(function (element) {
			element.addEventListener('click', function () {

				_this.btnToggleMenuMobile.forEach(function (element) {
					element.classList.toggle("on");
				});
				_this.menuMobile.classList.toggle("active");
				_this.body.classList.toggle("fixed");

				return false;
			});
		});
	},

	closeMenu() {
		let _this = this;
		_this.btnToggleMenuMobile.forEach(function (element) {
			element.classList.remove("on");

		});
		// _this.menuMobile.classList.remove("active");
		_this.body.classList.remove("fixed");

	},

	mobileMenu() {
		// закрыть/открыть мобильное меню
		let _this = this;

		_this.toggleMenu();
		_this.menuMobileLink.forEach(function (element) {
			element.addEventListener('click', function (e) {
				console.log(element);
				_this.closeMenu();

			});
		})
		document.addEventListener('mouseup', function (event) {
			let container = event.target.closest(".menu-mobile--js.active"); // (1)
			if (!container) {
				_this.closeMenu();

			}
		});
	},
	// /mobileMenu

	// табы  . 
	tabscostume(tab) {
		$('.' + tab + '__caption').on('click', '.' + tab + '__btn:not(.active)', function (e) {

			$(this).closest('.' + tab).find('.' + tab + '__content').find(".form-wrap__input").val('').removeAttr("required");
			$(this).closest('.' + tab).find('.' + tab + '__content').eq($(this).index()).find(".form-wrap__input").attr("required", "required");
			$(this)
				.addClass('active').siblings().removeClass('active')
				.closest('.' + tab).find('.' + tab + '__content').hide().removeClass('active')
				.eq($(this).index()).fadeIn().addClass('active').find('.slider--js').slick('refresh');
			$(this).closest('.' + tab)
				.find('.' + tab + '__caption2').find('.' + tab + '__btn').eq($(this).index()).addClass('active').siblings().removeClass('active')
		});

		$('.' + tab + '__caption2').on('click', '.' + tab + '__btn:not(.active)', function (e) {

			$(this)
				.addClass('active').siblings().removeClass('active')
				.closest('.' + tab).find('.' + tab + '__content').hide().removeClass('active')
				.eq($(this).index()).fadeIn().addClass('active').find('.slider--js').slick('refresh');
			$(this).closest('.' + tab)
				.find('.' + tab + '__caption').find('.' + tab + '__btn').eq($(this).index()).addClass('active').siblings().removeClass('active')
		});

	},
	// /табы  
	inputMask() {
		// mask for input
		$('input[type="tel"]').attr("pattern", "[+][0-9]{1}[(][0-9]{3}[)][0-9]{3}-[0-9]{2}-[0-9]{2}").inputmask("+9(999)999-99-99");
	}
	// /inputMask

};

function eventHandler() {
	// полифил для object-fit
	objectFitImages();
	// Picture element HTML5 shiv
	document.createElement("picture");
	// для свг
	svg4everybody({});

	JSCCommon.modalCall();

	JSCCommon.tabscostume('tabs');

	JSCCommon.mobileMenu();

	JSCCommon.inputMask();

	// JSCCommon.CustomInputFile();
	// добавляет подложку для pixel perfect
	$(".main-wrapper").after('<div class="screen" style="background-image: url(screen/01.png);"></div>');
	// /добавляет подложку для pixel perfect



	// const url = document.location.href;
	// $.each($(".top-nav__nav a "), function() {

	// 	if (this.href == url) {
	// 		if ($(this).hasClass("top-nav__link") == true) {

	// 			$(this).addClass('top-nav__link-active');
	// 		}
	// 		if ($(this).hasClass("footer__link") == true) {

	// 			$(this).addClass('footer__link-active');
	// 		} 
	// 	}; 
	// }); 

	// /закрыть/открыть мобильное меню

	function heightses() {

		const w = $(window).width();

		// $(".main-wrapper").css("margin-bottom", $('footer').height())
		// $(".otz__item .text-wrap ").height('auto').equalHeights();
		// 
		// скрывает моб меню

		const topH = $("header ").innerHeight();

		$(window).scroll(function () {
			if ($(window).scrollTop() > topH) {
				$('.top-nav  ').addClass('fixed');
			} else {
				$('.top-nav  ').removeClass('fixed');
			}
		});
		// конец добавил
		if (window.matchMedia("(min-width: 992px)").matches) {
			JSCCommon.closeMenu();
		}
	}

	$(window).resize(function () {
		heightses();

	});

	heightses();

	// листалка по стр
	$(" .top-nav li a, .scroll-link").click(function () {
		const elementClick = $(this).attr("href");
		const destination = $(elementClick).offset().top;

		$('html, body').animate({ scrollTop: destination }, 1100);

		return false;
	});

	$('.s-gal__slider\
	,.slider-for2 ')
		.on('lazyLoaded', function (event, slick, image, imageSource) {
			image.parent().css('background-image', 'url(' + image.attr('src') + ')');
		});
	// slider
	// const swiper4 = new Swiper('.color-slider', {
	// 	// slidesPerView: 5,
	// 	slidesPerView: 'auto',
	// 	watchOverflow: true,
	// 	spaceBetween: 0,
	// 	freeMode: true,
	// 	watchOverflow: true,
	// 	slidesPerGroup: 3,

	// 	// centeredSlides: true,
	// 	loop: true,
	// 	loopFillGroupWithBlank: true,
	// 	touchRatio: 0.2,
	// 	slideToClickedSlide: true,
	// 	freeModeMomentum: true,
	// 	navigation: {
	// 		nextEl: '.swiper-button-next',
	// 		prevEl: '.swiper-button-prev',
	// 	},

	// });
	// modal window



	var isIE11 = !!window.MSInputMethodContext && !!document.documentMode;
	if (isIE11) {
		$("body").prepend(`<p   class="browsehappy container">К сожалению, вы используете устаревший браузер. Пожалуйста, <a href="http://browsehappy.com/" target="_blank">обновите ваш браузер</a>, чтобы улучшить производительность, качество отображаемого материала и повысить безопасность.</p>`)

	}

	const icon = '<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="791.966px" height="791.967px" viewBox="0 0 791.966 791.967" style="enable-background:new 0 0 791.966 791.967;" xml:space="preserve"><path d="M245.454,396.017L617.077,56.579c12.973-12.94,12.973-33.934,0-46.874c-12.973-12.94-34.033-12.94-47.006,0L174.615,370.896c-6.932,6.899-9.87,16.076-9.408,25.087c-0.462,9.045,2.476,18.188,9.408,25.088l395.456,361.19c12.973,12.94,34.033,12.94,47.006,0c12.973-12.939,12.973-33.934,0-46.873L245.454,396.017z"/></svg>';
	const arrl2 = (' <div class="r">' + icon),
		arrr2 = (' <div class="l">' + icon);

	const defaultSlide = {
		speed: 450,
		infinite: true,
		arrows: true,
		mobileFirst: true,
		prevArrow: arrl2,
		nextArrow: arrr2,

		// autoplay: true,
		autoplaySpeed: 6000,
		lazyLoad: 'progressive',
	};
	$(".tabs__content").each(function () {

		$(this).find('.slider--js').slick({
			...defaultSlide,

			slidesToShow: 1,
			dots: true,
			appendArrows: $(this).find('.control-wrap'),
			appendDots: $(this).find('.control-wrap'),
			responsive: [{
				breakpoint: 997.98,
				settings: {
					slidesToShow: 3,
				}

			}, {
				breakpoint: 767.98,
				settings: {
					slidesToShow: 2,
				}


			}],

		});
	})

	$('[data-fancybox').fancybox({
		// Zoom: false,
		// slideshow: false,
		// Thumbnails: false,
		infobar: false,
	});

	$(".viber-link").each(function () {

		if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
			$(this).attr('href', $(this).data("desktop"))
		}
	})

	//показывает инпут при клике на текст
	$(".form-wrap__comment--js").click(function () {
		$('.form-wrap__toggle-block--js').toggle();
	});

	// $('.main-wrapper').click(function(){
	// 	$(this).addClass('d-none');
	// });


	var gets = (function () {
		var a = window.location.search;
		var b = new Object();
		a = a.substring(1).split("&");
		for (var i = 0; i < a.length; i++) {
			let c = a[i].split("=");
			b[c[0]] = c[1];
		}
		return b;
	})();
	// form
	$("form").each(function () { //Change
		var th = $(this);
		th.find('.utm_source').val(decodeURIComponent(gets['utm_source'] || ''));
		th.find('.utm_term').val(decodeURIComponent(gets['utm_term'] || ''));
		th.find('.utm_medium').val(decodeURIComponent(gets['utm_medium'] || ''));
		th.find('.utm_campaign').val(decodeURIComponent(gets['utm_campaign'] || ''));
		$(this).attr({
			"action": 'thanks.php',
			"method": "post",
		})
	});

};
if (document.readyState !== 'loading') {
	eventHandler();
} else {
	document.addEventListener('DOMContentLoaded', eventHandler);
}
