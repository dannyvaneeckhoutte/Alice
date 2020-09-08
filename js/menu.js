// animate hamburger menu
// Look for .hamburger
var hamburger = document.querySelector('.hamburger');
// On click
hamburger.addEventListener('click', function () {
	// Toggle class "is-active"
	hamburger.classList.toggle('is-active');
	// Do something else, like open/close menu
});

// Show/hide menu
function showMenu() {
	var x = document.getElementById('links');
	if (x.style.display === 'block') {
		x.style.display = 'none';
	} else {
		x.style.display = 'block';
	}
}
