$(document).ready(
    function () {
        $('.carousel-products').slick({
            dots: true,
            arrows: false,
            appendDots: $('.carousel-products-dots')
        });
    }
);

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
})