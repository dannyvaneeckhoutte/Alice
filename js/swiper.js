var swiper = new Swiper('.swiper-container', {
	loop: true,
	// zoom: pinch or dbl-click to zoom
	zoom: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	autoplay: {
		delay: 3000,
	},
});
