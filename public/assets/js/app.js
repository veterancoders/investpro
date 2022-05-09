(function ($) {
  "use strict";

  $(document).ready(function () {
     // Mobile Menu Dropdown
     const mobileNavToggler = document.querySelector(".vh-nav--toggle");
     const body = document.querySelector("body");
     if (mobileNavToggler) {
       mobileNavToggler.addEventListener("click", function () {
         body.classList.toggle("nav-toggler");
       });
     }
     // Mobile Menu Dropdown End
    // Mobile Submenu
    $(".vh-primary-menu__list.has-sub .vh-primary-menu__link").on(
      "click",
      function (e) {
        e.preventDefault();
        body.classList.add("primary-submenu-toggler");
      }
    );
    $(".vh-primary-menu__list.has-sub.active .vh-primary-menu__link").on(
      "click",
      function (e) {
        e.preventDefault();
        body.classList.remove("primary-submenu-toggler");
      }
    );
    $(".vh-primary-menu__list.has-sub").on("click", function () {
      $(this).toggleClass("active").siblings().removeClass("active");
    });
    // Mobile Submenu End

    //   Nice Select Inititate
    $("select").niceSelect();
    //   Nice Select End

    // Testimonial slider Home page
    $(".vh-testimonial-slider").slick({
      mobileFirst: true,
      prevArrow:
        '<button type="button" class="vh-testimonial-slider__btn vh-testimonial-slider__btn-prev"><span>&#10229;</span></button>',
      nextArrow:
        '<button type="button" class="vh-testimonial-slider__btn vh-testimonial-slider__btn-next"><span>&#10230;</span></button>',
    });
    // Testimonial slider Home page End

    // Client Slider
    $(".vh-client-slider").slick({
      mobileFirst: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 6000,
      responsive: [
        {
          breakpoint: 374,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 567,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 5,
          },
        },
      ],
    });
    // Client Slider End

    // Back to Top
    $(document).on("click", ".back-to-top", function () {
      $("html,body").animate(
        {
          scrollTop: 0,
        },
        1200
      );
    });
    // Back to Top End
  });
})(jQuery);

$(window).on("scroll", function () {
  var ScrollTop = $(".back-to-top");
  if ($(window).scrollTop() > 1200) {
    ScrollTop.fadeIn(1000);
  } else {
    ScrollTop.fadeOut(1000);
  }
});

// Preloader 
let preloaderText = document.querySelectorAll('.preloader__text')
for(let i = 0; i < preloaderText.length; i++) {
  preloaderText[i].style.animationDelay = `${i}s`;
}
// Preloader End

$(window).on("load", function () {
  // Preloader
  var preLoder = $(".preloader");
  preLoder.fadeOut(1000);
});
