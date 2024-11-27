(function ($) {

    site_url = document.location.origin;
    $(document).ready(function () {
        if ($('.video-slider').length) {
            $('.video-slider').owlCarousel({
                responsive: {
                    0: {
                        items: 1,
                    },
                    500: {
                        items: 2,
                    },
                    769: {
                        items: 3,
                    }
                },
                slideBy: 1,
                loop: true,
                autoplay: false,
                nav: true,
                dots: true,
                margin: 28,
                navText: ['<img src="' + site_url + '/wp-content/themes/LSport/img/slider-left.svg">',
                    '<img src="' + site_url + '/wp-content/themes/LSport/img/slider-right.svg">']
            });
        }
    });

    $('.btn-hamburger').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('close');
        $(this).siblings('ul').fadeToggle();
    });

    $('#menu-header-menu .menu-item-has-children>a').click(function (e) {
        e.preventDefault();
        // if ($(e.target).parent().find('ul').is(':visible')) {
        //     $(e.target).parent().find('ul').fadeOut();
        // } else {
        //     $(e.target).parent().parent().find('ul').fadeOut();
        //     $(e.target).parent().find('ul').fadeIn();
        // }
        //console.log('prevent');
    })

    // Ваш новый код
    $('#menu-header-es .menu-item-has-children>a').click(function (e) {
        e.preventDefault(); // это отменяет событие клика на элементах внутри #menu-header-es
    })

    // Ваш новый код
    $('#menu-header-pt .menu-item-has-children>a').click(function (e) {
        e.preventDefault(); // это отменяет событие клика на элементах внутри #menu-header-es
    })

    // Ваш новый код
    $('#menu-header-ko .menu-item-has-children>a').click(function (e) {
        e.preventDefault(); // это отменяет событие клика на элементах внутри #menu-header-es
    })

    // Ваш новый код
    $('#menu-header-cn .menu-item-has-children>a').click(function (e) {
        e.preventDefault(); // это отменяет событие клика на элементах внутри #menu-header-es
    })

    // Share and add to cal dropdowns
    $('.dropdown-js-action').click(function (e) {
        if (!$(e.target).is('a, a *')) {
            e.preventDefault();
            $(e.target).find('ul').fadeToggle();
        }
    })

    // button on event page
    $('.register-js-action').on('click', function () {
        $('.register-modal').removeClass('hide');
    });

    $('.register-modal-close').on('click', function () {
        $('.register-modal').addClass('hide');
    });

    // button on event page
    $('.set-meeting-js-action').on('click', function () {
        $('.set-meeting').removeClass('hide');
    });

    $('.set-meeting__close').on('click', function () {
        $('.set-meeting').addClass('hide');
    });

    $(document).keyup(function (e) {
        if (e.key === "Escape") {
            $('.modal').addClass('hide');
        }
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
    let optionsCarouselHeaderPromo = {
        infinite: true,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 7000,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        pauseOnHover: false,
    };


    $('.s-hp-header-promo__slides').slick(optionsCarouselHeaderPromo);
    $('.s-hp-trusted__slides').slick(optionsCarouselHeaderPromo);


    // Responsive transforming of an iframe with animation on main page
    if ($('.s-hp-header-promo').length) {
        // Because Slick removes lottie on init
        $('.slide-1 .s-hp-header-promo__image-container').append('<dotlottie-player id="iframe-fotball" src="/wp-content/themes/LSport/img/lottie/football.lottie" background="transparent" speed="1" loop autoplay></dotlottie-player>');
        $('.slide-2 .s-hp-header-promo__image-container').append('<dotlottie-player id="iframe-tennis" src="/wp-content/themes/LSport/img/lottie/basketball.lottie" background="transparent" speed="1" loop autoplay></dotlottie-player>');
        $('.slide-3 .s-hp-header-promo__image-container').append('<dotlottie-player id="iframe-basketball" src="/wp-content/themes/LSport/img/lottie/tennis.lottie" background="transparent" speed="1" loop autoplay></dotlottie-player>');

        function fitIframeToResponsive() {
            let windowWidth = $(window).width();
            if (windowWidth > 1440) {
                $('.s-hp-header-promo__slide.slide-1 iframe').css('transform', 'scale(.8)');
                $('.s-hp-header-promo__slide.slide-2 iframe').css('transform', 'scale(.9)');
                $('.s-hp-header-promo__slide.slide-3 iframe').css('transform', 'scale(1)');
            } else if (windowWidth < 769) {
                let scaleIframeTo = (windowWidth / 375).toFixed(2);
                $('.s-hp-header-promo__slide.slide-1 iframe').css('transform', 'scale(' + (scaleIframeTo * 0.35) + ')');
                $('.s-hp-header-promo__slide.slide-2 iframe').css('transform', 'scale(' + (scaleIframeTo * 0.35) + ')');
                $('.s-hp-header-promo__slide.slide-3 iframe').css('transform', 'scale(' + (scaleIframeTo * 0.35) + ')');
            } else if (windowWidth < 1440) {
                let scaleIframeTo = (windowWidth / 1440).toFixed(2);
                $('.s-hp-header-promo__slide.slide-1 iframe').css('transform', 'scale(' + (scaleIframeTo * 0.8) + ')');
                $('.s-hp-header-promo__slide.slide-2 iframe').css('transform', 'scale(' + (scaleIframeTo * 0.9) + ')');
                $('.s-hp-header-promo__slide.slide-3 iframe').css('transform', 'scale(' + scaleIframeTo + ')');
            }
        }

        fitIframeToResponsive();
        $(window).resize(function () {
            fitIframeToResponsive();
        });
    }


    // Carousel Products

    let optionsCarouselProducts = {
        infinite: true,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 8000,
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

    AOS.init({
        delay: 50,
        offset: 10,
        duration: 600,
        easing: 'ease-out',
    });

    // video player on click
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

    // Access to GET variables
    var $_GET = {};
    if (document.location.toString().indexOf('?') !== -1) {
        var query = document.location
            .toString()
            // get the query string
            .replace(/^.*?\?/, '')
            // and remove any existing hash string (thanks, @vrijdenker)
            .replace(/#.*$/, '')
            .split('&');

        for (var i = 0, l = query.length; i < l; i++) {
            var aux = decodeURIComponent(query[i]).split('=');
            $_GET[aux[0]] = aux[1];
        }
    }

    // Load more button on News pages
    let currentPage = 1;
    $('#load-more-news').on('click', function (e) {
        e.preventDefault();
        currentPage++; // Do currentPage + 1, because we want to load the next page
        $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'json',
            data: {
                action: 'news_load_more',
                paged: currentPage,
                category: $_GET['cat'],
            },
            success: function (res) {
                $('.s-news__wrapper').append(res.html);
                if (res.count < 6) {
                    $('#load-more-news').fadeOut('slow');
                }
            }
        });
    });

    // Load more button on Blog pages
    let bcurrentPage = 1;
    $('#load-more-blogs').on('click', function (e) {
        e.preventDefault();
        bcurrentPage++; // Do currentPage + 1, because we want to load the next page
        $.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            dataType: 'json',
            data: {
                action: 'blogs_load_more',
                paged: bcurrentPage,
            },
            success: function (res) {
                $('.s-news__wrapper').append(res.html);
                if (res.count < 6) {
                    $('#load-more-blogs').fadeOut('slow');
                }
            }
        });
    });

    // Read more link in Coverage posts

    $('[href="#readmore"]').click(function (e) {
        e.preventDefault();
        $(e.target).siblings('.under-more').slideDown('fast');
        $(e.target).animate({'opacity': 0});
    });


    // Past events functionality
    // Load more events past button on Events pages
    /*
        $('#load-more-events-past').on('click', function(e) {
            e.preventDefault();
            currentPage++; // Do currentPage + 1, because we want to load the next page
            $.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                dataType: 'json',
                data: {
                    action: 'events_past_load_more',
                    paged: currentPage,
                },
                success: function (res) {
                    $('.s-events-past__grid').append(res.html);
                }
            });
        });
     */

    // Comeet sort positions
    if ($('.comeet-positions-list').length) {
        let positionsElements = document.getElementsByClassName('comeet-position');
        document.getElementsByClassName('s-comeet-catalog__total-number')[0].innerHTML = positionsElements.length;
        let arrayElements = [];
        let arrayDepartments = [];
        let arrayLocations = [];
        for (let positionElement of positionsElements) {
            let arrayElement = [];
            arrayElement['href'] = positionElement.getAttribute('href');
            arrayElement['department'] = positionElement.getElementsByClassName('comeet-position-department')[0].textContent;
            arrayElement['location'] = positionElement.getElementsByClassName('comeet-position-location-name')[0].textContent;
            arrayElement['name'] = positionElement.getElementsByClassName('comeet-position-title')[0].textContent;
            arrayElement['element'] = positionElement;
            arrayElements.push(arrayElement);
            arrayDepartments.push(arrayElement['department']);
            arrayLocations.push(arrayElement['location']);
        }

        let uniqueDepartments = [...new Set(arrayDepartments)];
        let uniqueLocations = [...new Set(arrayLocations)];

        // add count number to Locations/Departments select
        document.getElementsByClassName('count-departments')[0].innerHTML = uniqueDepartments.length;
        document.getElementsByClassName('count-locations')[0].innerHTML = uniqueLocations.length;

        // add options to Locations select
        for (let uniqueLocation of uniqueLocations) {
            let li = document.createElement("li");
            let a = document.createElement("a");
            a.textContent = uniqueLocation;
            li.append(a);
            document.getElementsByClassName('locations-list')[0].append(li);
        }

        // add options to Departments select
        for (let uniqueDepartment of uniqueDepartments) {
            let li = document.createElement("li");
            let a = document.createElement("a");
            a.textContent = uniqueDepartment;
            li.append(a);
            document.getElementsByClassName('departments-list')[0].append(li);
        }

        // Sort positions by alphabet
        arrayElements.sort((a, b) => {
            if (a['name'] > b['name']) return 1;
            if (b['name'] > a['name']) return -1;
            return 0;
        });

        // function update list of positions
        let appendPositionList = (arrayElements) => {
            document.getElementsByClassName('comeet-positions-list')[0].innerHTML = '';
            for (let arrayElement of arrayElements) {
                let li = document.createElement("li");
                li.append(arrayElement['element']);
                document.getElementsByClassName('comeet-positions-list')[0].append(li);
            }
        };

        appendPositionList(arrayElements);

        $('.dropdown-locations a, .dropdown-departments a').click(function (e) {
            e.preventDefault();
            //console.log($(this));
            //console.log($(this).parents('.dropdown-locations, .dropdown-departments'));
            $(this).parents('.dropdown-locations, .dropdown-departments').find('.locations-list, .departments-list').hide();
            $(this).parents('.dropdown-locations, .dropdown-departments').find('.count-locations, .count-departments').detach();
            $(this).parents('.dropdown-locations, .dropdown-departments').contents().filter(function () {
                return this.nodeType == 3;
            })[0].nodeValue = $(this).text();

        });

        $('.action-dropdown-filter').click(function (e) {
            e.preventDefault();

            $('.dropdown-locations').text();
            $('.dropdown-departments').text();

            let location = $('.dropdown-locations').contents().filter(function () {
                return this.nodeType == 3;
            })[0].nodeValue;

            let department = $('.dropdown-departments').contents().filter(function () {
                return this.nodeType == 3;
            })[0].nodeValue;

            let arrayElementsFiltered = [...arrayElements];

            if (arrayLocations.includes(location)) {
                arrayElementsFiltered = arrayElementsFiltered.filter((position) => {
                    if (position['location'] == location) return true;
                });
            }

            if (arrayDepartments.includes(department)) {
                arrayElementsFiltered = arrayElementsFiltered.filter((position) => {
                    if (position['department'] == department) return true;
                });
            }

            document.getElementsByClassName('s-comeet-catalog__total-number')[0].innerHTML = arrayElementsFiltered.length;
            appendPositionList(arrayElementsFiltered);
            AOS.refresh();
        });
    }


    //open video popup
    $('.video_list').on('click', '.video-item', function () {
        var key = $(this).attr('data-key');
        var id = $(this).closest('.video_list').attr('data-id');
        $.ajax({
            type: "POST",
            url: "/wp-content/themes/LSport/inc/get_video.php",
            data: {id: id, key: key},
            action: "getvideo",
            success: function (res) {
                $('.embed-container').html(res);
            }
        });
        $('.video-popup').fadeIn();
        $('#video-bg').fadeIn();
    });

    $('.video-slider').on('click', '.video-item', function () {
        var key = $(this).attr('data-key');
        var id = $(this).closest('.video-slider').attr('data-id');
        $.ajax({
            type: "POST",
            url: "/wp-content/themes/LSport/inc/get_video.php",
            data: {id: id, key: key},
            action: "getvideo",
            success: function (res) {
                $('.embed-container').html(res);
            }
        });
        $('.video-popup').fadeIn();
        $('#video-bg').fadeIn();
    });

    //close video popup
    $('#video-bg').on('click', '.close-video-popup', function (event) {
        event.stopPropagation();
        $(this).closest('.video-popup').fadeOut();
        $('#video-bg').fadeOut();
        $('.embed-container').empty();
    });
    $('#video-bg').on('click', function () {
        $('.video-popup').fadeOut();
        $(this).fadeOut();
        $('.embed-container').empty();
    });

    //load more video
    $('.video-button-block').on('click', function () {
        var key = $('.video_list').find('.video-item:last').attr('data-key');
        var id = $('.video_list').attr('data-id');
        $.ajax({
            type: "POST",
            url: "/wp-content/themes/LSport/inc/get_video_list.php",
            data: {id: id, key: key},
            action: "getvideo",
            success: function (res) {
                $('.video_list').append(res);
                if ($('.video_list').find('.video-item:last').attr('data-last') == 'true') {
                    $('.block-video .video-button-block').css('display', 'none');
                }
            }
        });
    });

    $(document).ready(function () {
        function toggleToolbarVisibility() {
            var toolbar = $('.pojo-a11y-toolbar-toggle');
            if (toolbar.length) { // Проверяем, существует ли элемент на странице
                var scrollDistance = $(window).scrollTop();
                if (scrollDistance > 400) { // Изменено условие на фиксированное значение в пикселях
                    toolbar.addClass('hidden');
                } else {
                    toolbar.removeClass('hidden');
                }
            }
        }

        // Вызываем функцию при загрузке страницы и при скроллинге
        toggleToolbarVisibility();
        $(window).scroll(function () {
            toggleToolbarVisibility();
        });
    });


    $(document).ready(function () {
        var activeMenu = null;
        //let activeMenuIsShown = false;

        $('li.list-mega-menu.list-1, li.list-mega-menu.list-2, li.list-mega-menu.list-3').hover(
            function () {
                //console.log('start showing');
                if (activeMenu && activeMenu !== $(this)) {
                    activeMenu.find('.sub-menu').hide();
                }
                $(this).find('.sub-menu').slideDown();
                $('#custom-mega-menu-bg').stop(true, true).css('display', 'block');

                activeMenu = $(this);
            },
            function () {
                var self = $(this);
                if ($(self).is(':hover')) {
                    $(self).find('.sub-menu').hide();
                    $('#custom-mega-menu-bg').stop(true, true).css('display', 'none');
                } else {
                    if (!$(self).is(':hover')) {
                        //console.log('start hiding');
                        $(self).find('.sub-menu').stop(true, true).slideUp();
                        $('#custom-mega-menu-bg').stop(true, true).css('display', 'none');
                    }
                }
            }
        );

    });


})(jQuery);

