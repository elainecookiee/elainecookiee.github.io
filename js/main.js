window.addEventListener('load', onLoad);
function onLoad(){
	$('html').animate({
        scrollTop: 0
    }, 1);
    $('body').animate({
        scrollTop: 0
    }, 1);
	var overlay = document.querySelector('#overlay');
    overlay.classList.add('fadeOut');
	setTimeout(function(){
		document.querySelector('body').removeChild(overlay);
	},1600);
};