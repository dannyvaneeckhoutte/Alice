var swiper = new Swiper('.swiper-container', {
	// loop: true,
	slidesPerView: 'auto',
	// pinch or dbl-click to zoom img
	zoom: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	// pagination: {
	// 	el: '.swiper-pagination',
	// 	type: 'bullets',
	// 	clickable: 'true',
	// },
	autoplay: {
		delay: 3000,
	},
});
