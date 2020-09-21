// Hamburger menu
// open/close menu on hamburger and link click

$(function () {
	// Shorthand for $( document ).ready()
	$('.menu, .menu-link').click(function () {
		$('.menu').toggleClass('active');
		$('.navbar-menu').toggleClass('active');

		// Hide switch when menu is open
	// 	$('.style-switch').toggleClass('visible');
	// });

	// Close menu on scroll
	$(window).scroll(function () {
		if ($(document).scrollTop() > 50) {
			$('.menu').removeClass('active');
			$('.navbar-menu').removeClass('active');
		}
	});
});
