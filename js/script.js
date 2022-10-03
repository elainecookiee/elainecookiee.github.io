
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
});

$('#hamburger li a').click(function(){
	$('#menu').fadeOut();
});


window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

//Sticky nav on scroll

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("nav-top");

// Get the offset position of the navbar
var sticky = nav-top.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    nav-top.classList.add("sticky")
  } else {
    nav-top.classList.remove("sticky");
  }
}

// Fade in on scroll

// $(function(){  // $(document).ready shorthand
//   $('.project-box').delay(100).fadeIn('slow');
// });

// $(document).ready(function() {
    
//     /* Every time the window is scrolled ... */
//     $(window).scroll( function(){
    
//         /* Check the location of each desired element */
//         $('.hideme').each( function(i){
            
//             var bottom_of_object = $(this).position().top + $(this).outerHeight();
//             var bottom_of_window = $(window).scrollTop() + $(window).height();
            
//             /* If the object is completely visible in the window, fade it it */
//             if( bottom_of_window > bottom_of_object ){
                
//                 $(this).animate({'opacity':'1'},1500);
                    
//             }
            
//         }); 
    
//     });
    
// });