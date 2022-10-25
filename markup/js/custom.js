jQuery(document).ready(function ($) {

    $('.btn-hamburger').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('close');
        $(this).siblings('ul').fadeToggle();
    });

    $('.nav-main ul>li>a').click(function (e) {
        e.preventDefault();
        $(e.target).parent().find('ul').fadeToggle();
    })

    // todo: сделать только при изменении резолюции lt gt 768px
    let width = $(window).width();
    //let lastWidth = $(window).width();
    $(window).on('resize', function () {
        if ((width <= 768) && ($(this).width() > 768)) {
            //width = $(this).width();
            //console.log(width);

            $('.btn-hamburger').removeClass('close');
            $('.nav-main>ul').css('display', '');
        }
    });

    // carousels on main page

    $('.s-hp-header-promo__slides').slick({
        infinite: true,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        pauseOnHover: false,
    });

    //

    $('.s-hp-products__slides').slick({
        infinite: true,

        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        pauseOnHover: true,
        prevArrow: $(".s-hp-products__prev"),
        nextArrow: $(".s-hp-products__next"),
    });

    // Carousel Case Study

    let optionsCarouselCaseStudy = {
        infinite: true,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        pauseOnHover: false,
    }

    $('.s-hp-case-study__slides').slick(optionsCarouselCaseStudy); // content
    $('.s-hp-cs-content__slides').slick(optionsCarouselCaseStudy); // image
    $('.s-hp-cs-img-titles__slides').slick(optionsCarouselCaseStudy); //title

    $(".s-hp-case-study__next").click(function () {
        $('.s-hp-case-study__slides').slick('slickNext');
        $('.s-hp-cs-content__slides').slick('slickNext');
        $('.s-hp-cs-img-titles__slides').slick('slickNext');
    });

    $(".s-hp-case-study__prev").click(function () {
        $('.s-hp-case-study__slides').slick('slickPrev');
        $('.s-hp-cs-content__slides').slick('slickPrev');
        $('.s-hp-cs-img-titles__slides').slick('slickPrev');
    });

    //

    $('.s-hp-news__carousel').slick({
        //infinite: true,
        //arrows: false,
        dots: true,
        //autoplay: true,
        //autoplaySpeed: 3000,
        speed: 500,
        //fade: true,
        cssEase: 'linear',
        //pauseOnHover: false,
        variableWidth: true,
        prevArrow: $(".s-hp-news__arrow-prev"),
        nextArrow: $(".s-hp-news__arrow-next"),
        appendDots: $(".s-hp-news__dots"),
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    centerPadding: '30px',
                    //centerMode: true,
                    variableWidth: true
                }
            },
        ],
    });

    // scroll animation
    AOS.init();

});

