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
    })

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
    })
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

    //  alert("Este é um site em desenvolvimento. Ao final do dia, teremos uma nova versão por aqui. Enquanto isso, que tal me enviar um feedback no Slack, sobre sua experiência? Obrigado! :D");
});
