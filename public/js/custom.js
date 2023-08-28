/*

Template: COINEX - Crypto Currency HTML Template 
Author: iqonicthemes.in
Version: 2.0

*/

/*----------------------------------------------
Index Of Script
------------------------------------------------

1.Page Loader
2.Back To Top
3.Header
4.counter
5.Wow Animation
6.Progress Bar
7.Countdown
8.Owl Carousel
9.Magnific Popup
10.Timeline
11.Accordion
12.Chart
13.Contact from

------------------------------------------------
Index Of Script
----------------------------------------------*/

$(document).ready(function() {

    /*------------------------
    Page Loader
    --------------------------*/
    jQuery("#load").fadeOut();
    jQuery("#loading").delay(0).fadeOut("slow");



  /*----------------Back To Top--------------------*/
  const backToTop = document.getElementById("back-to-top")
  if (backToTop !== null && backToTop !== undefined) {
    document.getElementById("back-to-top").classList.add("animate__animated", "animate__fadeOut")
    window.addEventListener('scroll', (e) => {
      if (document.documentElement.scrollTop > 250) {
        document.getElementById("back-to-top").classList.remove("animate__fadeOut")
        document.getElementById("back-to-top").classList.add("animate__fadeIn")
      } else {
        document.getElementById("back-to-top").classList.remove("animate__fadeIn")
        document.getElementById("back-to-top").classList.add("animate__fadeOut")
      }
    })
    // scroll body to 0px on click
    document.querySelector('#top').addEventListener('click', (e) => {
      e.preventDefault()
      window.scrollTo({ top: 0, behavior: 'smooth' });
    })
  }


    /*------------------------
    Header
    --------------------------*/
    // $('.navbar-nav li a').on('click', function(e) {
    //     var anchor = $(this);
    //     $('html, body').stop().animate({
    //         scrollTop: $(anchor.attr('href')).offset().top - 50
    //     }, 1500);
    //     e.preventDefault();
    // });
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 20) {
            $('header').addClass('menu-sticky');
        } else {
            $('header').removeClass('menu-sticky');
        }
    });



    /*------------------------
    counter
    --------------------------*/
    $('.timer').countTo();


    /*------------------------
    Wow Animation
    --------------------------*/
    new WOW().init();


    /*------------------------
    Progress Bar
    --------------------------*/
    $('.iq-progress-bar > span').each(function() {
        var $this = $(this);
        var width = $(this).data('percent');
        $this.css({
            'transition': 'width 2s'
        });
        setTimeout(function() {
            $this.appear(function() {
                $this.css('width', width + '%');
            });
        }, 500);
    });



    /*------------------------
    Countdown
    --------------------------*/
    $('#countdown').countdown({
        date: '11/03/2022 23:59:59',
        day: 'Day',
        days: 'Days'
    });



    /*------------------------
    Owl Carousel
    --------------------------*/
    $('.owl-carousel').each(function() {
        var $carousel = $(this);
        $carousel.owlCarousel({
            items: $carousel.data("items"),
            loop: $carousel.data("loop"),
            margin: $carousel.data("margin"),
            nav: $carousel.data("nav"),
            dots: $carousel.data("dots"),
            autoplay: $carousel.data("autoplay"),
            autoplayTimeout: $carousel.data("autoplay-timeout"),
            navText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],
            responsiveClass: true,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: $carousel.data("items-mobile-sm")
                },
                // breakpoint from 480 up
                480: {
                    items: $carousel.data("items-mobile")
                },
                // breakpoint from 786 up
                786: {
                    items: $carousel.data("items-tab")
                },
                // breakpoint from 1023 up
                1023: {
                    items: $carousel.data("items-laptop")
                },
                1199: {
                    items: $carousel.data("items")
                }
            }
        });
    });


    /*------------------------
    Magnific Popup
    --------------------------*/
    $('.popup-gallery').magnificPopup({
        delegate: 'a.popup-img',
        tLoading: 'Loading image #%curr%...',
        type: 'image',
        mainClass: 'mfp-img-mobile',
        gallery: {
            navigateByImgClick: true,
            enabled: true,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
        disableOn: 700,
        mainClass: 'mfp-fade',
        preloader: false,
        removalDelay: 160,
        fixedContentPos: false
    });



    /*------------------------
    Timeline
    --------------------------*/
    $('.timeline').timeline({
        forceVerticalMode: 800,
        mode: 'horizontal',
        visibleItems: 4
    });



    /*------------------------
    Accordion
    --------------------------*/
    $('.iq-accordion .iq-ad-block .ad-details').hide();
    $('.iq-accordion .iq-ad-block:first').addClass('ad-active').children().slideDown('slow');
    $('.iq-accordion .iq-ad-block').on("click", function() {
        if ($(this).children('div').is(':hidden')) {
            $('.iq-accordion .iq-ad-block').removeClass('ad-active').children('div').slideUp('slow');
            $(this).toggleClass('ad-active').children('div').slideDown('slow');
        }
    });



    
    function handleInit() {
        chart.legend.addListener("rollOverItem", handleRollOver);
    }

    function handleRollOver(e) {
        var wedge = e.dataItem.wedge.node;
        wedge.parentNode.appendChild(wedge);
    }



    /*------------------------
    Contact from
    --------------------------*/
    $('#contact').submit(function(e) {
        var flag = 0;
        e.preventDefault(); // Prevent Default Submission
        $('.require').each(function() {
            if ($.trim($(this).val()) == '') {
                $(this).css("border", "1px solid red");
                e.preventDefault(); // Prevent Default Submission
                flag = 1;
            } else {
                $(this).css("border", "1px solid grey");
                flag = 0;
            }
        });

        if (grecaptcha.getResponse() == "") {
            flag = 1;
            alert('Please verify Recaptch');

        } else {
            flag = 0;
        }

        if (flag == 0) {
            $.ajax({
                    url: 'contact-form.php',
                    type: 'POST',
                    data: $("#contact").serialize() // it will serialize the form data
                })
                .done(function(data) {
                    $("#result").html('Form was successfully submitted.');
                    $('#contact')[0].reset();
                })
                .fail(function() {
                    alert('Ajax Submit Failed ...');
                });
        }

    });


});