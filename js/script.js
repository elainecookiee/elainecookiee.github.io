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


// Fade in on scroll

$(function(){  // $(document).ready shorthand
  $('.project-box').delay(100).fadeIn('slow');
});

$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},1500);
                    
            }
            
        }); 
    
    });
    
});