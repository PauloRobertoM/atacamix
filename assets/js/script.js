(function($, window) {
    $("document").ready(function($){
        var nav = $('header');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                nav.addClass("fixo");
            } else {
                nav.removeClass("fixo");
            }
        });
    });
    $('.nav li > .sub-menu').parent().hover(function() {
        var submenu = $(this).children('.sub-menu');
        if ( $(submenu).is(':hidden') ) {
            $(submenu).slideDown(200);
        } else {
            $(submenu).slideUp(200);
        }
    });
    $('.owl-vitrine').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('.owl-palestra').owlCarousel({
        loop: false,
        autoplay: true,
        margin: 30,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    $('.owl-depoimento').owlCarousel({
        loop: false,
        autoplay: true,
        margin: 30,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });
})(jQuery, window);