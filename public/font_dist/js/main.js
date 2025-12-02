(function ($) {
    "use strict";

    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            // $('.sticky-top').addClass('bg-white shadow-sm').css('top', '0px');
            $('.fa-bars').removeClass('fa-white');
        } else {
            // $('.sticky-top').removeClass('bg-white shadow-sm').css('top', '-150px');
            $('.fa-bars').addClass('fa-white');
        }
    });

     //  counter
    $(document).ready(function () {
        $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
        });
    });


    // Choosen By
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false, // hide arrows if you want a cleaner auto ride
        dots: false, // hide dots if not needed
        autoplay: true,
        autoplayTimeout: 2000, // how long each slide stays (in ms)
        autoplaySpeed: 1000, // how fast slide transitions
        autoplayHoverPause: false, // continue even on hover
        smartSpeed: 1000, // smooth transition speed
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        }
        });
    });
    

    // Initialize Swiper 
  
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 400,
            modifier: 1,
            slideShadows: true,
        },
        autoplay: {
            delay: 2000, 
            disableOnInteraction: false, 
        },
        loop: true, 
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

    
})(jQuery);

