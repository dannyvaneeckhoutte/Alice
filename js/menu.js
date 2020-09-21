// Shorthand for $( document ).ready()
$(function () {
	// open/close menu on hamburger and link click
	$('.menu, .menu-link').click(function () {
		$('.menu').toggleClass('active');
		$('.navbar-menu').toggleClass('active');
	});

	// Close menu on scroll
	$(window).scroll(function () {
		if ($(document).scrollTop() > 50) {
			$('.menu').removeClass('active');
			$('.navbar-menu').removeClass('active');
		}
	});

	// Toggle Dark mode
	$('.style-switch').click(function () {
		$('body').toggleClass('dark-mode');
	});
});
