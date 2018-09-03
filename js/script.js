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

$('#hamburger').click(function() {
	$('.menu').toggleClass('close'); //closing hamburger animation
	$('#menu').toggle().addClass('overlay');
	$('#nav-top').toggleClass('fixed-top');
});

$('#hamburger li a').click(function(){
	$('#menu').fadeOut();
});