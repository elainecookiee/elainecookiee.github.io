var currentPage = (teamcat);

$(document).ready(function() {

    // hides all DIVs with the CLASS container
    // and displays the one with the ID 'home' only
    $(".container").css("display","none");
    $("#teamcat").css("display","block");


    $(document).keydown(function(e)
    {
        switch(e.which)
        {
            case 37:
            console.log("left");
            var next = $('.active').prev().attr('href');
                // var next = $('.active').prev().attr('href');
                // var previousPage = $('.active').prev();

                // if (!next) {
                //     next = "#yweets";
                //     // previousPage = $('#navigation .about')
                // }

                // // $("#navigation a").removeClass("active");
                // $(previousPage).addClass("active");
                // console.log(next);

                // showViaKeydown(next);
                break;

            case 39:
            console.log("right");
                // var next = $('.active').next().attr('href');
                // // var previousPage = $('.active').next();

                // if (!next) {
                //     next = "#home";
                //     previousPage = $('#navigation .home')
                // }

                // $("#navigation a").removeClass("active");
                // $(previousPage).addClass("active");
                // console.log(next);

                // showViaKeydown(next);

                break;
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
        $("a").removeClass("active");
        // add class to the one we clicked
        $(this).addClass("active");
    });
});