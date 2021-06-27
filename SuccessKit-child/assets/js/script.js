// // Success Kit Scripts
// // Author: Kevin Garubba

$(function () {
    responsiveReposition();
    menuToggleListener();
});

function menuToggleListener() {
    $(".navbar-toggler").on("click", function () {
        $("body, .header--fixed").toggleClass("mobile-menu");
    });
}

function responsiveReposition() {
    reposition();
    $(window).on("resize", function () {
        reposition();
    });
}

function reposition() {
    var greenBttn = $("#greenBttn");
    if ($(window).width() > 992) {
        if ($(".header--fixed .container > #greenBttn")[0] == undefined) {
            greenBttn.detach().appendTo(".header--fixed .container");
        }
    } else {
        if ($(".header--fixed .navbar-collapse  #greenBttn")[0] == undefined) {
            greenBttn.detach().appendTo(".header--fixed .navbar-collapse");
        }
    }
}

// var checkExist = setInterval(function () {
//     if ($(".leadinModal-theme-top").length) {
//         $("body").addClass("hubspot-injected");
//     } else if (
//         $(".leadinModal-theme-top").length == 0 &&
//         $("body").hasClass("hubspot-injected")
//     ) {
//         $("body").removeClass("hubspot-injected");
//         clearInterval(checkExist);
//     }
// }, 200);

jQuery(function ($) {
    var ppp = 9; // Post per page
    var pageNumber = 1;
    var str;
    function load_posts(tax, term) {
        pageNumber++;
        if (tax === undefined) {
            tax = "all";
        }
        if (term === undefined) {
            term = "all";
        }

        str =
            "&ppp=" +
            ppp +
            "&pageNumber=" +
            pageNumber +
            "&tax=" +
            tax +
            "&term=" +
            term +
            "&action=more_post_ajax";
        $.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts.ajaxurl,
            data: str,
            success: function (data) {
                console.log(pageNumber + " of " + ajax_posts.max_page);

                var $data = $(data);
                if ($data.length) {
                    if (pageNumber == ajax_posts.max_page) {
                        $("#more_posts").attr("disabled", true).remove();
                    }
                    $("#ajax-posts").append($data);
                    $("#more_posts")
                        .attr("disabled", false)
                        .text("Load more")
                        .removeClass("spinner");
                } else {
                    $("#more_posts").attr("disabled", true).hide();
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $loader.html(
                    jqXHR + " :: " + textStatus + " :: " + errorThrown
                );
            },
        });
        return false;
    }

    if ($("#ajax-posts").length > 0) {
        $(window).on("scroll", function () {
            console.log($(window).scrollTop() + $(window).height());
            console.log($(document).height() - 700);

            if (
                $(window).scrollTop() + $(window).height() >=
                $(document).height() - 700
            ) {
                var tax = $("#ajax-posts").attr("data-tax");
                var term = $("#ajax-posts").attr("data-term");
                load_posts(tax, term);
            }
        });
    }
});
