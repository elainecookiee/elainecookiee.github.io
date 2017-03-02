var amountScrolled = 500;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top, a.back-to-top-link').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});