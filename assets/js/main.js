navigator.serviceWorker.register( '/assets/js/sw.js' );
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
            $('body').prepend('<button type="button" class="mobile-nav-toggle d-md-none"><div class="bar"></div></button>');
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
        
        if ( "loading" in HTMLImageElement.prototype ) {
            console.log("`lazy-loading` soportado...");
        }

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
                //$('img.portrait.reveal-up').css('opacity', 0);            
            }

        });

    });


    // Portfolio details carousel
    /*
    https://owlcarousel2.github.io/OwlCarousel2/docs/api-options.html
    */

    $('.portfolio-details-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
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

    $(window).on('load', function() {

        $('.values .icon-box').each(function(index) {

            //console.log(index); 

            $(this).attr({'data-aos':"fade-up"});
            
            $(this).attr({'data-aos-delay': 1000 +( 200 * index)});
            
            
        });

        $('img.portrait').each(function(index) {

            //console.log(index); 

            $(this).attr({'data-aos':"fade-up"});
            
        });

        $('.fade-up'). each(function(index) {

            $(this).attr({'data-aos':"fade-up"});
            
        });

        AOS.init({

            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 50, // values from 0 to 3000, with step 50ms
            duration: 300, // values from 0 to 3000, with step 50ms
            easing: 'ease-in-out', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
            
        });
    
    });
    


})(jQuery);