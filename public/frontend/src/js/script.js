

/**----------------------
 * Preloader  *
 -------------------------*/

function preloader() {
	$('.loader').delay(1000).fadeOut();
};

$(window).on('load', function () {
	preloader();
	wowAnimation();
});