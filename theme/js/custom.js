(function ($) {

    $('.btn-hamburger').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('close');
        $(this).siblings('ul').fadeToggle();
    });

    $('.menu-item-has-children>a, .dropdown-js-action>a').click(function (e) {
        e.preventDefault();
        $(e.target).parent().find('ul').fadeToggle();
        console.log('prevent');
    })

    $('.register-js-action').on('click', function () {
        $('.register-modal').removeClass('hide');
    });

    $('.register-modal-close').on('click', function () {
        $('.register-modal').addClass('hide');
    });

    $('.set-meeting-js-action').on('click', function () {
        $('.set-meeting').removeClass('hide');
    });

    $('.set-meeting__close').on('click', function () {
        $('.set-meeting').addClass('hide');
    });

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

    // Carousel Products

    let optionsCarouselProducts = {
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

    $('.s-hp-products__slides').slick(optionsCarouselProducts);
    $('.s-hp-products__img-title-slides').slick(optionsCarouselProducts);

    $(".s-hp-products__next").click(function () {
        $('.s-hp-products__slides').slick('slickNext');
        $('.s-hp-products__img-title-slides').slick('slickNext');
    });

    $(".s-hp-products__prev").click(function () {
        $('.s-hp-products__slides').slick('slickPrev');
        $('.s-hp-products__img-title-slides').slick('slickPrev');
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
    $('.s-hp-cs-img-titles__slides').slick(optionsCarouselCaseStudy); // title
    $('.s-hp-case-study__image-description-slides').slick(optionsCarouselCaseStudy); // image description

    $(".s-hp-case-study__next").click(function () {
        $('.s-hp-case-study__slides').slick('slickNext');
        $('.s-hp-cs-content__slides').slick('slickNext');
        $('.s-hp-cs-img-titles__slides').slick('slickNext');
        $('.s-hp-case-study__image-description-slides').slick('slickNext');
    });

    $(".s-hp-case-study__prev").click(function () {
        $('.s-hp-case-study__slides').slick('slickPrev');
        $('.s-hp-cs-content__slides').slick('slickPrev');
        $('.s-hp-cs-img-titles__slides').slick('slickPrev');
        $('.s-hp-case-study__image-description-slides').slick('slickPrev');
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

    // About Carousel
    // https://codepen.io/pentagonus/pen/gMaJBy

    var carousel = $(".s-about-values__slides"),
        items = $(".s-about-values__slide"),
        currdeg = 0;

    $(".s-about-values__next").on("click", {d: "n"}, rotate);
    $(".s-about-values__prev").on("click", {d: "p"}, rotate);

    function rotate(e) {
        if (e.data.d == "n") {
            currdeg = currdeg - 60;
        }
        if (e.data.d == "p") {
            currdeg = currdeg + 60;
        }
        carousel.css({
            "-webkit-transform": "rotateY(" + currdeg + "deg)",
            "-moz-transform": "rotateY(" + currdeg + "deg)",
            "-o-transform": "rotateY(" + currdeg + "deg)",
            "transform": "rotateY(" + currdeg + "deg)"
        });
        items.css({
            "-webkit-transform": "rotateY(" + (-currdeg) + "deg)",
            "-moz-transform": "rotateY(" + (-currdeg) + "deg)",
            "-o-transform": "rotateY(" + (-currdeg) + "deg)",
            "transform": "rotateY(" + (-currdeg) + "deg)"
        });
    }

    // About timeline
    if ($('.timeline').length) {
        $('.timeline .line').height(0);
        $(window).scroll(function () {
            var hT = $('.timeline .line').offset().top,
                hH = $('.timeline .line').outerHeight(),
                wH = $(window).height(),
                wS = $(this).scrollTop();
            if (wS > (hT + hH - wH)) {
                $('.timeline .line').height(wS - hT + (wH / 2));
            }
        });
    }

    // Q&A

    $('.s-prod-qa__item').click(function () {
        $(this).toggleClass('opened').find('.s-prod-qa__a').slideToggle();
    });

    // scroll animation
    // https://michalsnik.github.io/aos/

    AOS.init();

    /*

    // You can also pass an optional settings object
    // below listed default settings

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
      delay: 0, // values from 0 to 3000, with step 50ms
      duration: 400, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
*/


    function videoPlay(self, youtube) {
        let src = self.parentNode.querySelector(youtube).getAttribute('data-url'),
            yPlay = `${src}?rel=0&autoplay=1`;

        if (src.length) {
            self.parentNode.querySelector(youtube).innerHTML = `<iframe src="${yPlay}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
            setTimeout(() => {
                self.classList.add('playing');
            }, 1000);
        }
    }


    if (document.querySelector('.video-wrapper')) {
        let videoOverlay = document.querySelectorAll('.video-wrapper__overlay');
        [].forEach.call(videoOverlay, function (e) {
            e.addEventListener('click', function H() {
                let __this = this;
                videoPlay(
                    __this,
                    '.video-wrapper__iframe'
                );
            });
        });
    }


    // Country in country select
    $('select[name="country"]').find('option:first').html('Country*');

})(jQuery);

