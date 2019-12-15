(function ($) {
    'use strict';

    var browserWindow = $(window);

    // :: 1.0 Preloader Active Code
    browserWindow.on('load', function () {
        $('.preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

    // :: 2.0 Nav Active Code
    if ($.fn.classyNav) {
        $('#magNav').classyNav();
    }

    // :: 3.0 Sticky Active Code
    if ($.fn.sticky) {
        $("#sticker").sticky({
            topSpacing: 0
        });
    }

    // :: 4.0 Sliders Active Code
    if ($.fn.owlCarousel) {

        var b1 = $('#b1');

        b1.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: false,
            nav: false,
            dots: false,
            autoplay: false
        });
        b1.on('translate.owl.carousel', function () {
            var slideLayerb1 = b1.find("[data-animation]");
            slideLayerb1.each(function () {
                var anim_nameb1 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_nameb1).css('opacity', '0');
            });
        });
        b1.on('translated.owl.carousel', function () {
            var slideLayerb1 = b1.find('.owl-item.active').find("[data-animation]");
            slideLayerb1.each(function () {
                var anim_nameb1 = $(this).data('animation');
                $(this).addClass('animated ' + anim_nameb1).css('opacity', '1');
            });
        });

        var b2 = $('#b2');

        b2.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: false,
            nav: false,
            dots: false,
            autoplay: false
        });
        b2.on('translate.owl.carousel', function () {
            var slideLayerb2 = b2.find("[data-animation]");
            slideLayerb2.each(function () {
                var anim_nameb2 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_nameb2).css('opacity', '0');
            });
        });
        b2.on('translated.owl.carousel', function () {
            var slideLayerb2 = b2.find('.owl-item.active').find("[data-animation]");
            slideLayerb2.each(function () {
                var anim_nameb2 = $(this).data('animation');
                $(this).addClass('animated ' + anim_nameb2).css('opacity', '1');
            });
        });

        var b3 = $('#b3');

        b3.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: false,
            nav: false,
            dots: false,
            autoplay: false
        });
        b3.on('translate.owl.carousel', function () {
            var slideLayerb3 = b3.find("[data-animation]");
            slideLayerb3.each(function () {
                var anim_nameb3 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_nameb3).css('opacity', '0');
            });
        });
        b3.on('translated.owl.carousel', function () {
            var slideLayerb3 = b3.find('.owl-item.active').find("[data-animation]");
            slideLayerb3.each(function () {
                var anim_nameb3 = $(this).data('animation');
                $(this).addClass('animated ' + anim_nameb3).css('opacity', '1');
            });
        });

        var b4 = $('#b4');

        b4.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: false,
            nav: false,
            dots: false,
            autoplay: false
        });
        b4.on('translate.owl.carousel', function () {
            var slideLayerb4 = b4.find("[data-animation]");
            slideLayerb4.each(function () {
                var anim_nameb4 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_nameb4).css('opacity', '0');
            });
        });
        b4.on('translated.owl.carousel', function () {
            var slideLayerb4 = b4.find('.owl-item.active').find("[data-animation]");
            slideLayerb4.each(function () {
                var anim_nameb4 = $(this).data('animation');
                $(this).addClass('animated ' + anim_nameb4).css('opacity', '1');
            });
        });

        var b5 = $('#b5');

        b5.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: false,
            nav: false,
            dots: false,
            autoplay: false
        });
        b5.on('translate.owl.carousel', function () {
            var slideLayerb5 = b5.find("[data-animation]");
            slideLayerb5.each(function () {
                var anim_nameb5 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_nameb5).css('opacity', '0');
            });
        });
        b5.on('translated.owl.carousel', function () {
            var slideLayerb5 = b5.find('.owl-item.active').find("[data-animation]");
            slideLayerb5.each(function () {
                var anim_nameb5 = $(this).data('animation');
                $(this).addClass('animated ' + anim_nameb5).css('opacity', '1');
            });
        });

        var b6 = $('#b6');

        b6.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: false,
            nav: false,
            dots: false,
            autoplay: false
        });
        b6.on('translate.owl.carousel', function () {
            var slideLayerb6 = b6.find("[data-animation]");
            slideLayerb6.each(function () {
                var anim_nameb6 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_nameb6).css('opacity', '0');
            });
        });
        b6.on('translated.owl.carousel', function () {
            var slideLayerb6 = b6.find('.owl-item.active').find("[data-animation]");
            slideLayerb6.each(function () {
                var anim_nameb6 = $(this).data('animation');
                $(this).addClass('animated ' + anim_nameb6).css('opacity', '1');
            });
        });

        var b7 = $('#b7');

        b7.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: false,
            nav: false,
            dots: false,
            autoplay: false

        });
        b7.on('translate.owl.carousel', function () {
            var slideLayerb7 = b7.find("[data-animation]");
            slideLayerb7.each(function () {
                var anim_nameb7 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_nameb7).css('opacity', '0');
            });
        });
        b7.on('translated.owl.carousel', function () {
            var slideLayerb7 = b7.find('.owl-item.active').find("[data-animation]");
            slideLayerb7.each(function () {
                var anim_nameb7 = $(this).data('animation');
                $(this).addClass('animated ' + anim_nameb7).css('opacity', '1');
            });
        });

         var b8 = $('#b8');

        b8.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: false,
            nav: false,
            dots: false,
            autoplay: false
        });
        b8.on('translate.owl.carousel', function () {
            var slideLayerb8 = b8.find("[data-animation]");
            slideLayerb8.each(function () {
                var anim_nameb8 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_nameb8).css('opacity', '0');
            });
        });
        b8.on('translated.owl.carousel', function () {
            var slideLayerb8 = b8.find('.owl-item.active').find("[data-animation]");
            slideLayerb8.each(function () {
                var anim_nameb8 = $(this).data('animation');
                $(this).addClass('animated ' + anim_nameb8).css('opacity', '1');
            });
        });



        var a1 = $('#hk');

        a1.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            dots: false,
            autoplay: true,
            smartSpeed: 1000
        });
        a1.on('translate.owl.carousel', function () {
            var slideLayer1 = a1.find("[data-animation]");
            slideLayer1.each(function () {
                var anim_name1 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name1).css('opacity', '0');
            });
        });
        a1.on('translated.owl.carousel', function () {
            var slideLayer1 = a1.find('.owl-item.active').find("[data-animation]");
            slideLayer1.each(function () {
                var anim_name1 = $(this).data('animation');
                $(this).addClass('animated ' + anim_name1).css('opacity', '1');
            });
        });
        

        var a2 = $('#ko');

        a2.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            dots: false,
            autoplay: true,
            smartSpeed: 1000
        });
        a2.on('translate.owl.carousel', function () {
            var slideLayer2 = a2.find("[data-animation]");
            slideLayer2.each(function () {
                var anim_name2 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name2).css('opacity', '0');
            });
        });
        a2.on('translated.owl.carousel', function () {
            var slideLayer2 = a2.find('.owl-item.active').find("[data-animation]");
            slideLayer2.each(function () {
                var anim_name2 = $(this).data('animation');
                $(this).addClass('animated ' + anim_name2).css('opacity', '1');
            });
        });

        var a3 = $('#pp');
        a3.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            dots: false,
            autoplay: true,
            smartSpeed: 1000
        });
        a3.on('translate.owl.carousel', function () {
            var slideLayer3 = a3.find("[data-animation]");
            slideLayer3.each(function () {
                var anim_name3 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name3).css('opacity', '0');
            });
        });
        a3.on('translated.owl.carousel', function () {
            var slideLayer3 = a3.find('.owl-item.active').find("[data-animation]");
            slideLayer3.each(function () {
                var anim_name3 = $(this).data('animation');
                $(this).addClass('animated ' + anim_name3).css('opacity', '1');
            });
        });

        var a4 = $('#bl');
        a4.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            dots: false,
            autoplay: true,
            smartSpeed: 1000
        });
        a4.on('translate.owl.carousel', function () {
            var slideLayer4 = a4.find("[data-animation]");
            slideLayer4.each(function () {
                var anim_name4 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name4).css('opacity', '0');
            });
        });

        a4.on('translated.owl.carousel', function () {
            var slideLayer4 = a4.find('.owl-item.active').find("[data-animation]");
            slideLayer4.each(function () {
                var anim_name4 = $(this).data('animation');
                $(this).addClass('animated ' + anim_name4).css('opacity', '1');
            });
        });

        var a5 = $('#a5');
        a5.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            dots: false,
            autoplay: true,
            smartSpeed: 1000
        });
        a5.on('translate.owl.carousel', function () {
            var slideLayer5 = a5.find("[data-animation]");
            slideLayer5.each(function () {
                var anim_name5 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name5).css('opacity', '0');
            });
        });

        a5.on('translated.owl.carousel', function () {
            var slideLayer5 = a5.find('.owl-item.active').find("[data-animation]");
            slideLayer5.each(function () {
                var anim_name5 = $(this).data('animation');
                $(this).addClass('animated ' + anim_name5).css('opacity', '1');
            });
        });

        var a6 = $('#a6');
        a6.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            dots: false,
            autoplay: true,
            smartSpeed: 1000
        });
        a6.on('translate.owl.carousel', function () {
            var slideLayer6 = a6.find("[data-animation]");
            slideLayer6.each(function () {
                var anim_name6 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name6).css('opacity', '0');
            });
        });

        a6.on('translated.owl.carousel', function () {
            var slideLayer6 = a6.find('.owl-item.active').find("[data-animation]");
            slideLayer6.each(function () {
                var anim_name6 = $(this).data('animation');
                $(this).addClass('animated ' + anim_name6).css('opacity', '1');
            });
        });

        var a7 = $('#a7');
        a7.owlCarousel({
           animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            dots: false,
            autoplay: true,
            smartSpeed: 1000
        });
        a7.on('translate.owl.carousel', function () {
            var slideLayer7 = a7.find("[data-animation]");
            slideLayer7.each(function () {
                var anim_name7 = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name7).css('opacity', '0');
            });
        });

        a7.on('translated.owl.carousel', function () {
            var slideLayer7 = a7.find('.owl-item.active').find("[data-animation]");
            slideLayer7.each(function () {
                var anim_name7 = $(this).data('animation');
                $(this).addClass('animated ' + anim_name7).css('opacity', '1');
            });
        });

        $("[data-delay]").each(function () {
            var anim_del4 = $(this).data('delay');
            $(this).css('animation-delay', anim_del4);
        });

        $("[data-duration]").each(function () {
            var anim_dur4 = $(this).data('duration');
            $(this).css('animation-duration', anim_dur4);
        });

        $('.trending-post-slides').owlCarousel({
            items: 3,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            dots: false,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                992: {
                    items: 2
                },
                1500: {
                    items: 3
                }
            }
        });

        $('.featured-video-posts-slide').owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            dots: false,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 1000
        });

        $('.most-viewed-videos-slide').owlCarousel({
            items: 3,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            dots: false,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                992: {
                    items: 2
                },
                1500: {
                    items: 3
                }
            }
        });
        $('.neptune').owlCarousel({
            items: 4,
            margin: 10,
            loop: true,
            center: true,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            dots: false,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
        $('.sports-videos-slides').owlCarousel({
            items: 2,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            dots: false,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                992: {
                    items: 2
                },
                1200: {
                    items: 1
                },
                1500: {
                    items: 2
                }
            }
        });
    }

    // :: 5.0 ScrollUp Active Code
    if ($.fn.scrollUp) {
        browserWindow.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="ti-angle-up"></i>'
        });
    }

    // :: 6.0 Tooltip Active Code
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // :: 7.0 Prevent Default a Click
    $('a[href="#"]').on('click', function (e) {
        e.preventDefault();
    });

    // :: 8.0 Wow Active Code
    if (browserWindow.width() > 767) {
        new WOW().init();
    }

})(jQuery);