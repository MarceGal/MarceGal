!(function($) {
    "use strict";



    /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    /*Mobile Navegation Menu */
    /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */



    function createMobileMenu() {

        if ($('.nav-menu').length) {

            var $mobile_nav = $('.nav-menu').clone().prop({
                class: 'mobile-nav d-lg-none'
            });

            $('body').append($mobile_nav);
            $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><div class="bar"></div></button>');
            $('body').append('<div class="mobile-nav-overly"></div>');

            $(document).on('click', '.mobile-nav-toggle', function(e) {
                $('body').toggleClass('mobile-nav-active');
                $('.mobile-nav-overly').toggle();
            });

            $(document).click(function(e) {
                var container = $(".mobile-nav, .mobile-nav-toggle");
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    if ($('body').hasClass('mobile-nav-active')) {
                        $('body').removeClass('mobile-nav-active');
                        $('.mobile-nav-overly').fadeOut();
                    }
                }
            });

        } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
            $(".mobile-nav, .mobile-nav-toggle").hide();
        }

    }

    // Nav Menu

    $(document).on('click', '.nav-menu a, .mobile-nav a', function(e) {

        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

            var hash = this.hash;
            var target = $(hash);

            if (target.length) {

                e.preventDefault();

                if ($(this).parents('.nav-menu, .mobile-nav').length) {
                    $('.nav-menu .active, .mobile-nav .active').removeClass('active');
                    $(this).closest('li').addClass('active');
                }

                if (hash == '#header') {
                    $('#header').removeClass('header-top');
                    $("section").removeClass('section-show');
                    return;
                }

                if (!$('#header').hasClass('header-top')) {
                    $('#header').addClass('header-top');
                    setTimeout(function() {
                        $("section").removeClass('section-show');
                        $(hash).addClass('section-show');

                    }, 350);

                } else {

                    $("section").removeClass('section-show');
                    $(hash).addClass('section-show');

                }

                $('html, body').animate({

                    scrollTop: 0

                }, 350);

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('.mobile-nav-toggle i').toggleClass('ri-menu-unfold-line icon close');
                    $('.mobile-nav-overly').fadeOut();
                }

                return false;

            }
        }
    });

    // Activate/show sections on load with hash links

    if (window.location.hash) {

        var initial_nav = window.location.hash;
        if ($(initial_nav).length) {
            $('#header').addClass('header-top');
            $('.nav-menu .active, .mobile-nav .active').removeClass('active');
            $('.nav-menu, .mobile-nav').find('a[href="' + initial_nav + '"]').parent('li').addClass('active');
            setTimeout(function() {
                $("section").removeClass('section-show');
                $(initial_nav).addClass('section-show');
            }, 350);
        }

    }


    createMobileMenu();

    /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

    // jQuery counterUp

    /*
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 1000
    });

    // Skills section
    $('.skills-content').waypoint(function() {
        $('.progress .progress-bar').each(function() {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {
        offset: '80%'
    });

    // Testimonials carousel (uses the Owl Carousel library)
    $(".testimonials-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            900: {
                items: 3
            }
        }
    });
    */

    /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

    // Porfolio isotope and filter
    // https://isotope.metafizzy.co/

    $(window).on('load', function() {

        var portfolioIsotope = $('.portfolio-container').isotope({
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows'
        });

        $('#portfolio-flters li').on('click', function() {
            $("#portfolio-flters li").removeClass('filter-active');
            $(this).addClass('filter-active');
            portfolioIsotope.isotope({
                filter: $(this).data('filter')
            });
        });

    });

    // Initiate venobox (lightbox feature used in portofilo)
    // Docs: https://veno.es/venobox/

    $(document).ready(function() {

        $('.venobox').venobox({
            'share': false,
            'spinner': 'double-bounce',
            'spinColor': '#fff',

        });


        //

        //Nav bar on scroll

        var scrollObject = {};

        window.onscroll = getScrollPosition;

        function getScrollPosition() {

            scrollObject = {
                x: window.pageXOffset,
                y: window.pageYOffset
            }

            if (scrollObject.y > 100) {
                $('.header-top').addClass('contrast');
                $('.mobile-nav-toggle').addClass('contrast shadowed');
            } else {
                $('.header-top').removeClass('contrast');
                $('.mobile-nav-toggle').removeClass('contrast shadowed');
            }

        }


        $(window).scroll(function() {

            var st = $(window).scrollTop();
            if (st < 600) {
                //$(".cover-header .container").css("opacity", 1 - (st / 600));
                //console.log('scroll:' + st);
                $('img.portrait.reveal-up').css('opacity', 0);
            }

        });




    });


    // Portfolio details carousel
    /*
    https://owlcarousel2.github.io/OwlCarousel2/docs/api-options.html
    */

    $('.portfolio-details-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 2000,
        dots: true,
        loop: true,
        margin: 40,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        }
    })

    /*
    // Lazy load
    //http://jquery.eisbehr.de/lazy/

    $('.lazy').Lazy({
        //delay: 5000,
        effect: 'fadeIn',
        effectTime: 2000,
        //threshold: 0,
        scrollDirection: 'vertical',
        //visibleOnly: true,
        afterLoad: function(element) {
            element.siblings('.preload-icon').hide().remove();
        }

    });
    */

    //Remove Preloader

    $(window).on('load', function() {
        $('.preloader').addClass("ready");
        //fadeOut('fast');
    });




    /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    /*ANIMATIONS */
    /*++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


    // Gsap Animations

    var square1 = $('img.me');

    function animateAboutSection() {

        gsap.fromTo(square1, { opacity: 0, y: 100 }, {
            duration: 1,
            ease: "expo.inOut",
            y: 0,
            opacity: 1,
            delay: 0.3,
            onComplete: myFunc
        });

        // $('body::before').css('background-color', '#ffc107');

        $('.about-me .content p ').css('opacity', 0);
        $('.values .icon-box').css('opacity', 0);

    }


    function animateValues() {

        $('.values .icon-box').each(function(index) {
            //console.log(index); //log every element found to console output
            gsap.fromTo($(this), { opacity: 0, y: 50 }, {
                duration: .2,
                ease: "expo.inOut",
                y: 0,
                opacity: 1,
                delay: 0.1 * (index),
            });
        });

    };

    function myFunc() {

        /*
        gsap.fromTo('.p-1', { opacity: 0, y: 100 }, {
            duration: 1,
            ease: "expo.inOut",
            y: 0,
            opacity: 1,
            delay: 0,
        });

        gsap.fromTo('.p-2', { opacity: 0, y: 100 }, {
            duration: 1,
            ease: "expo.inOut",
            y: 0,
            opacity: 1,
            delay: 0.2,
        });
        */

        $('.about-me .content p').each(function(index) {
            var element = $(this);
            $(element).css('opacity', 0);
            $(this).waypoint(function(direction, event) {
                gsap.fromTo($(element), { opacity: 0, y: 100 }, {
                    duration: 1,
                    ease: "expo.inOut",
                    y: 0,
                    opacity: 1,
                    delay: 0.2 * index,
                });

            }, { offset: 'right-in-view' });

        });

        $('.about .values').waypoint(animateValues, {
            offset: "85%"
        });



    }

    $('.nav-menu .about a').on('click', animateAboutSection);


    function animatePortraits() {

        $('.portrait.reveal-up').each(function(index) {
            //console.log(index); //log every element found to console output
            gsap.fromTo($(this), { opacity: 0, y: 200 }, {
                duration: 1,
                ease: "expo.inOut",
                y: 0,
                opacity: 1,
                delay: 0,
            });
        });

    };


    $('.portrait.reveal-up').waypoint(function() {

        animatePortraits();

    }, {
        offset: "85%"
    });




})(jQuery);