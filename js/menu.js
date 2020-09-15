// Hamburger menu
// open/close menu on hamburger and link click
$('.menu, .menu-link').click(function () {
	$('.menu').toggleClass('active');
	$('.navbar-menu').toggleClass('active');
	$('.style-switch').toggleClass('visible');
});
