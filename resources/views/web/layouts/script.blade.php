<script src="{{asset('asset/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('asset/js/fancybox/fancybox.js')}}"></script>
<script src="{{asset('asset/js/fancybox/helpers/jquery.fancybox-thumbs.js')}}"></script>
<script src="{{asset('asset/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('asset/js/swiper.jquery.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('asset/js/progressbar.min.js')}}"></script>
<script src="{{asset('asset/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('asset/js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('asset/js/jQuery.Brazzers-Carousel.js')}}"></script>
<script src="{{asset('asset/js/plugins.js')}}"></script>
<script src="{{asset('asset/js/main.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhAYvx0GmLyN5hlf6Uv_e9pPvUT3YpozE"></script>
<script src="{{asset('asset/js/gmap.js')}}"></script>
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('asset/js/aos.js')}}"></script>
<script src="{{asset('asset/js/main.js')}}"></script>
<script src="{{asset('asset/js/function.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>



<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    function responxiveFunction() {
        var x = document.getElementsByClassName("column");
        if (x.className === "fa-2x") {
            x.className = "responsive_logo";
        } else {
            x.className = "fa-2x";
        }
    }

    $(document).ready(function()
    {
        if($('.bbb_viewed_slider').length)
        {
            var viewedSlider = $('.bbb_viewed_slider');

            viewedSlider.owlCarousel(
                {
                    loop:true,
                    margin:30,
                    autoplay:true,
                    autoplayTimeout:6000,
                    nav:false,
                    dots:false,
                    responsive:
                        {
                            0:{items:2},
                            575:{items:2},
                            768:{items:3},
                            991:{items:4},
                            1199:{items:6}
                        }
                });

            if($('.bbb_viewed_prev').length)
            {
                var prev = $('.bbb_viewed_prev');
                prev.on('click', function()
                {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if($('.bbb_viewed_next').length)
            {
                var next = $('.bbb_viewed_next');
                next.on('click', function()
                {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }


    });


    (function () {
        "use strict";

        var carousels = function () {
            $(".owl-carousel1").owlCarousel({
                loop: true,
                center: true,
                margin: 0,
                responsiveClass: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    680: {
                        items: 2,
                        nav: false,
                        loop: false
                    },
                    1000: {
                        items: 3,
                        nav: true
                    }
                }
            });
        };

        (function ($) {
            carousels();
        })(jQuery);
    })();



    $(document).ready(function() {
        $('.logo-carousel').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 2
                }
            }]
        });
    });



    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
