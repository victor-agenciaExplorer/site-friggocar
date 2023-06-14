$(window).on('load resize orientationchange', function () {
    $('.carousel-cards').each(function () {
        var $carousel = $(this);

        if ($(window).width() > 768) {
            if ($carousel.hasClass('slick-initialized')) {
                $carousel.slick('unslick');
            }
        }

        else {
            if (!$carousel.hasClass('slick-initialized')) {
                $carousel.slick({
                    dots: true,
                    mobileFirst: true,
                });
            }
        }
    });

    $('.carousel-products').each(function () {
        var $carousel = $(this);

        if ($(window).width() > 768) {
            if ($carousel.hasClass('slick-initialized')) {
                $carousel.slick('unslick');
            }
        }

        else {
            if (!$carousel.hasClass('slick-initialized')) {
                $carousel.slick({
                    dots: true,
                    mobileFirst: true,
                    arrows: false,
                    appendDots: $('.carousel-products-dots')
                });
            }
        }
    });

    $('.carousel-gallery').each(function () {
        var $carousel = $(this);

        if ($(window).width() > 768) {
            if ($carousel.hasClass('slick-initialized')) {
                $carousel.slick('unslick');
            }
        }

        else {
            if (!$carousel.hasClass('slick-initialized')) {
                $carousel.slick({
                    dots: true,
                    mobileFirst: true,
                    arrows: true
                });
            }
        }
    });
})

$(function () {
    var header = $(".navbar");
    var toggler = $(".navbar-toggler");

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            header.removeClass('fixedHeader').addClass("scrollHeader");
        } else {
            header.removeClass("scrollHeader").addClass('fixedHeader');
        }
    });

    $(toggler).click(function () {
        $(header).toggleClass('active');
    })

    $('.banner-carousel').slick({
        dots: false,
        mobileFirst: true,
        arrows: false,
        fade: true,
    })

    $('.banner-carousel').on('afterChange', function(event, slick, currentSlide, nextSlide){
        var banner = $('.banner');

        if (currentSlide === 0) {
            banner.removeClass('banner-1 banner-2').addClass('banner-0')
        } else if (currentSlide === 1) {
            banner.removeClass('banner-0 banner-2').addClass('banner-1')
        } else {
            banner.removeClass('banner-0 banner-1').addClass('banner-2')
        }
      });

    //alert("Este é um site em desenvolvimento. Ao final do dia, teremos uma nova versão por aqui. Enquanto isso, que tal me enviar um feedback no Slack, sobre sua experiência? Obrigado! :D");
});
