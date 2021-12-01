(function ($) {
    jQuery(document).ready(function () {

        // Sticky header
        jQuery(window).scroll(function () {
            if ($(this).scrollTop() > 60) {
                $('#menu_area').addClass("sticky");
            } else {
                $('#menu_area').removeClass("sticky");
            }
        });

        // desktop multilevel menu
        $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');
            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
                $('.dropdown-submenu .show').removeClass("show");
            });
            return false;
        })

        // mobile multilevel menu
        $("#menu").slidingMenu();

        jQuery("#top__mobile .menu-btn").click(function () {
            jQuery(".menu-overlay").addClass("active-overlay");
            jQuery('.main-menu-sidebar').addClass("menu-active");
        });

        jQuery('.main-menu-sidebar .close-menu-btn, .menu-overlay').click(function () {
            jQuery('.main-menu-sidebar').removeClass("menu-active");
            jQuery(".menu-overlay").removeClass("active-overlay");
        });

        //scroll to anchored
        $(document).on('click', '.header-reviews .add-review-btn a', function (event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - 50
            }, 500);
        });

        $(function () {

            var date1 = new Date('05/05/2021');
            var date2 = new Date('05/20/2021');

            var date3 = new Date('06/05/2021');
            var date4 = new Date('06/20/2021');

            var date5 = new Date('07/05/2021');
            var date6 = new Date('07/20/2021');

            $(".date-picker-input").datepicker({
                minDate: '0',
                showOtherMonths: true,
                selectOtherMonths: true,


                beforeShowDay: function (date) {
                    var highlight = date >= date1 && date <= date2
                    var highlight2 = date >= date3 && date <= date4
                    var highlight3 = date >= date5 && date <= date6
                    if (highlight || highlight2 || highlight3) {
                        return [true, "event", 'Lower Rates'];
                    } else {
                        return [true, '', ''];
                    }
                }

            });

        });

        $('.date-picker-input').on('click', function (e) {
            e.preventDefault();
            $(this).attr("autocomplete", "off");
        });

        $(".date-picker-input").attr("autocomplete", "off");

        $(document).on('click', '#areas-page .areas-in .areas-list ul>li .dropdown-toggle', function (event) {
            event.preventDefault();
        });

        //scroll to anchored
        $(document).on('click', '#top-cta a.go-down', function (event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - 80
            }, 500);
        });

        // Fancybox
        $('#portfolio-slider [data-fancybox="gallery"]').fancybox();

        $('.gal-photos [data-fancybox="gall"]').fancybox();


        // Toggle on check button click
        //$(".car-row").hide();
        $("#car_estimate").click(function () {
            if ($(this).is(":checked")) {
                $(".car-row").show("1000");
            } else {
                $(".car-row").hide("1000");
            }
        });

        // Wrap every 7 .gal-box divs with .gal-row
        var divs = $(".gal-wrap > .gal-box");
        for (var i = 0; i < divs.length; i += 7) {
            divs.slice(i, i + 7).wrapAll("<div class='gal-row'></div>");
        }

        // Portfolio slider
        $('#portfolio-slider').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 8000,
            responsive: [{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: true,
                        dots: false,
                        autoplaySpeed: 8000
                    }
                },

                {
                    breakpoint: 580,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: true,
                        dots: false,
                        autoplaySpeed: 8000
                    }
                },

            ]
        });

        $('.next-arrow').on('click', function () {
            $('#portfolio-slider').slick('slickNext');
        });
        $('.prev-arrow').on('click', function () {
            $('#portfolio-slider').slick('slickPrev');
        });

        //$("#price-factors-faq").accordion({
        // heightStyle: "content",
        //autoHeight: false,
        //clearStyle: true,
        //active: true,
        //collapsible: true,
        //});


        //$(".blog-detailed--accordion").accordion({
        //heightStyle: "content",
        //autoHeight: false,
        //clearStyle: true,
        //active: true,
        //collapsible: true,
        //header: '> div.wrap > h4'
        //});

        $(document).ready(function () {
            $(".blog-detailed--accordion .wrap > h4").on("click", function (e) {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this)
                        .siblings(".blog-detailed--accordion .wrap > div")
                        .slideUp(200);
                } else {
                    $(".blog-detailed--accordion .wrap > h4").removeClass("active");
                    $(this).addClass("active");
                    $(".blog-detailed--accordion .wrap > div").slideUp(200);
                    $(this)
                        .siblings(".blog-detailed--accordion .wrap > div")
                        .slideDown(200);
                }
                e.preventDefault();
            });
        });

        $('#info-table-slider').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 8000,
        });

        $('#cookie-notice').addClass('slide-up');

        $('#close-notice, #accept-cookie').click(function (e) {
            e.preventDefault();
            $("#cookie-notice").removeClass("slide-up");
            $("#cookie-notice").addClass("slide-down");
        });

        $('#top-cta .features-list .feature-box h3').matchHeight();
        $('#top-cta .features-list .feature-box p').matchHeight();

        $('#featured-main .pros-wrapper .pros-card').matchHeight();

        $('.blog-locations .location-box h2').matchHeight();
        $('.blog-locations .location-box p').matchHeight();

        $('.city-reviews .review-box .review-author').matchHeight();
        $('.city-reviews .review-box .review-text, .services-list .service-box .service-text p, #blog-listing .blog-content p').matchHeight();

        $('#nav-slider').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 8000,
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true,
                        dots: false,
                        autoplaySpeed: 8000
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true,
                        dots: false,
                        autoplaySpeed: 8000
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true,
                        dots: false,
                        autoplaySpeed: 8000
                    }
                },
            ]
        });

        $('.next-arrowx').on('click', function () {
            $('#nav-slider').slick('slickNext');
        });
        $('.prev-arrowx').on('click', function () {
            $('#nav-slider').slick('slickPrev');
        });


        $(function () {
            $('.quote-cta--single a.btn-cta').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top - 100
                        }, 1000);
                        return false;
                    }
                }
            });
        });

        $(function () {
            $('#side-nav ul li a').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top - 80
                        }, 1000);
                        return false;
                    }
                }
            });
        });

        //auto-resize textarea height
        $('textarea').on('input', function () {
            $(this).outerHeight(20).outerHeight(this.scrollHeight);
        });
        $('textarea').trigger('input');

        $('.blog-content a').attr("target", "_blank");

        // $(document).ready(function() {
        // 	var s = $("#side-nav");
        // 	var pos = s.position();					   
        // 	$(window).scroll(function() {
        // 		var windowpos = $(window).scrollTop();
        // 		if (windowpos >= pos.top & windowpos > 1200) {
        // 			s.addClass("stick");
        // 		} else {
        // 			s.removeClass("stick");	
        // 		}
        // 	});
        // });	
    });
})(jQuery);