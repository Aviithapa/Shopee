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