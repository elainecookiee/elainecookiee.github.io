var currentPage = (home);



$(document).ready(function() {

    //fades in menu on scroll
    // var a = $("#menu").offset().top;
    //
    // $(window).scroll(function(){
    //     if ($(this).scrollTop() > a) {
    //         $('#menu').fadeIn(500);
    //     } else {
    //         $('#menu').fadeOut(500);
    //     }
    // });

    //fades in menu on scroll
    $(window).scroll(function(){
        if ($(this).scrollTop() > 0) {
            $('#menu').fadeIn(500).css('background-color', 'white');
        } else {
            $('#menu');
        }
    });

    // hides all DIVs with the CLASS container
    // and displays the one with the ID 'home' only
    $(".container").css("display","none");
    $("#home").css("display","block");

    // makes the navigation work after all containers have been hidden
    showViaLink($("nav a"));


    $(document).keydown(function(e)
    {
        switch(e.which)
        {
            // left
            case 37:
                var next = $('.active').prev().attr('href');
                var previousPage = $('.active').prev();

                if (!next) {
                    next = "#about";
                    previousPage = $('#navigation .about')
                }

                $("#navigation a").removeClass("active");
                $(previousPage).addClass("active");
                console.log(next);

                showViaKeydown(next);
                break;

            // // up
            // case 38:	showViaKeydown("#process");
            //     break;

            // right
            case 39:
                var next = $('.active').next().attr('href');
                var previousPage = $('.active').next();

                if (!next) {
                    next = "#home";
                    previousPage = $('#navigation .home')
                }

                $("#navigation a").removeClass("active");
                $(previousPage).addClass("active");
                console.log(next);

                showViaKeydown(next);

                break;

            // // down
            // case 40:	showViaKeydown("#about");
            //     break;
        }
    });
});

// shows a given element and hides all others
function showViaKeydown(element_id)
{
    $(".container").css("display","none");
    $(element_id).slideDown("slow");
}

// shows proper DIV depending on link 'href'
function showViaLink(array) {
    array.each(function (i) {
        $(this).click(function () {
            var target = $(this).attr("href");
            $(".container").css("display", "none");
            $(target).slideDown("slow");
        });
    });
}

$(function() {
    $("a").click(function() {
        // remove classes from all
        $("a").removeClass("active");
        // add class to the one we clicked
        $(this).addClass("active");
    });
});

//left and right navigates continuously to next page
//up and down navigates to next section
//cycle through all items in both directions without stopping


//find all elements with class of active
//keep track of previous page (because we are moving left)
//if nothing comes before the current page then set active class on About
//so that it cycles through without stopping
// window.location.href = 'portfolio.html' + next;

//remove class active from all a tags of nav
// add class to the one we clicked




// if ($("*:focus").is("textarea, input"))
//     return;
// if (e.keyCode == 37) {
//
// }
// if (e.keyCode == 39) {
//     var nextPage = $('.navigation .selected').next().attr('href');
//     if (!nextPage)
//         nextPage = "#\\Welcome";
//     $(nextPage + " .scrollPanel").scrollTop(0);
//     window.location.href = nextPage
// }
// if (e.keyCode == 38) {
//     prevAnchor();
//     return false
// }
// if (e.keyCode == 40) {
//     nextAnchor();
//     return false
// }