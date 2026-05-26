$(document).ready(function() {
  "use strict";
  //Banner Arrow Script
  $('.scroll-link a').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 800, 'linear');
  });

  //Counter Script
  $('.emizentech-counter').counterUp({
    delay: 50,
    time: 3000
  });
  
  // Outside Click Remove Class Script
  $(document).on('click', function(event) {
    if (!$(event.target).closest('.call-dropdown-link, .call-dropdown-wrap').length)  {
      $('.call-dropdown-wrap').slideUp();
    }
  });

  $('.has-dropdown').hover (
    function() {
      $(this).addClass('dropdown-open');
    },
    function() {
      $(this).removeClass('dropdown-open');
    }
  );

  //Add Remove Script
 $('[data-nav-link]').on('click', function (e) {
  e.preventDefault(); // stops the link from navigating
  var dataNavId = $(this).attr('data-nav-link');

  $('[data-nav-id="' + dataNavId + '"]').siblings().removeClass('active');
  $('[data-nav-id="' + dataNavId + '"]').addClass('active');
});

  $('[data-popup-link]').on('click', function () {
      var dataPopupId = $(this).attr('data-popup-link');
      $('[data-popup-id = '+dataPopupId+']').addClass('popup-open');
    },
  );
  $('.main-dropdown.techmenus li').on('click', function () {
      $(this).siblings().removeClass('active'); // Remove 'active' class from siblings
      $(this).addClass('active'); // Add 'active' class to the current list item
  });
  $('.main-dropdown.sevicemenu li').on('click', function () {
      $(this).siblings().removeClass('active'); // Remove 'active' class from siblings
      $(this).addClass('active'); // Add 'active' class to the current list item
  });
  $('.main-dropdown.workmenu li').on('click', function () {
      $(this).siblings().removeClass('active'); // Remove 'active' class from siblings
      $(this).addClass('active'); // Add 'active' class to the current list item
  });
  

  $('.close-link').on('click', function () {
    $('[data-popup-id]').removeClass('popup-open');
    $('html').removeClass('popup-open-wrap');
  });
  $('.footer-collapse').on('click', function () {
    $(this).parents(".col-6").toggleClass('fmenu_open');
  });
  $('.portfolio-item').on('click', function () {
    $('html').addClass('popup-open-wrap');
  });
  $('.emizentech-toggle').on('click', function () {
    $('.emizentech-navigation').toggleClass('open');
    $('.mobile-menu').toggleClass('open');
  });
  $('.close-icon').on('click', function () {
    $('.emizentech-navigation').removeClass('open');
    $('.mobile-menu').removeClass('open');
  });
  $('.call-dropdown-link').on('click', function () {
    $('.call-dropdown-wrap').slideToggle();
  });
  $('.mobile-dropdown > a').on('click', function () {
    $('.mobile-dropdown').find('.mobile-dropdown-nav').stop().slideUp();
    $(this).closest('.mobile-dropdown').find('.mobile-dropdown-nav').stop().slideToggle();
  });
  $('.mobile-dropdown-icon').on('click', function () {
    $(this).parent().siblings().each(function(){
      $(this).find("ul[class=mobile-dropdown-sub]").slideUp();
    });
    $(this).parent().find("ul[class=mobile-dropdown-sub]").slideToggle();
  });
  $('.career1').on('click', function () {
    $('#career1').slideToggle();
  });
  $('.career2').on('click', function () {
    $('#career2').slideToggle();
  });
  $('.career3').on('click', function () {
    $('#career3').slideToggle();
  });
  $('.career4').on('click', function () {
    $('#career4').slideToggle();
  });
  $('.career-btn a').on("click", function() {
    var el = $(this);
    if (el.text() == el.data("text-swap")) {
      el.text(el.data("text-original"));
    } else {
      el.data("text-original", el.text());
      el.text(el.data("text-swap"));
    }
  });

  //Add Remove Script
  $('.staff-style-two .emizentech-image, .staff-main-image').hover (
    function() {
      $(this).find('.staff-info-inner').first().stop(true, true).slideDown(300);
    },
    function() {
      $(this).find('.staff-info-inner').first().stop(true, true).slideUp(300);
    }
  );
  $('.develop-item').hover (
    function() {
      $(this).find('.develop-info-wrap').first().stop(true, true).slideDown(300);
    },
    function() {
      $(this).find('.develop-info-wrap').first().stop(true, true).slideUp(300);
    }
  );
  $('.notch-item').hover (
    function() {
      $(this).find('.notch-info-wrap').first().stop(true, true).slideDown(300);
    },
    function() {
      $(this).find('.notch-info-wrap').first().stop(true, true).slideUp(300);
    }
  );

  //Masonry Script
  var $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
  });
  // filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {
      var number = $(this).find('.number').text();
      return parseInt( number, 10 ) > 50;
    },
    // show if name ends with -ium
    ium: function() {
      var name = $(this).find('.name').text();
      return name.match( /ium$/ );
    }
  };
  // bind filter button click
  $('.masonry-filters').on( 'click', 'a', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $grid.isotope({ filter: filterValue });
  });
  // change is-checked class on buttons
  $('.masonry-filters').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'a', function() {
      $buttonGroup.find('.active').removeClass('active');
      $( this ).addClass('active');
    });
  });

  //Owl Carousel Slider Script
  $( window ).load(function() {
    $('.owl-carousel').each(function() {
      var $carousel = $(this);
      var $items = ($carousel.data('items') !== undefined) ? $carousel.data('items') : 1;
      var $items_tablet = ($carousel.data('items-tablet') !== undefined) ? $carousel.data('items-tablet') : 1;
      var $items_mobile_landscape = ($carousel.data('items-mobile-landscape') !== undefined) ? $carousel.data('items-mobile-landscape') : 1;
      var $items_mobile_portrait = ($carousel.data('items-mobile-portrait') !== undefined) ? $carousel.data('items-mobile-portrait') : 1;
      $carousel.owlCarousel ({
        loop : ($carousel.data('loop') !== undefined) ? $carousel.data('loop') : true,
        items : $carousel.data('items'),
        margin : ($carousel.data('margin') !== undefined) ? $carousel.data('margin') : 0,
        dots : ($carousel.data('dots') !== undefined) ? $carousel.data('dots') : false,
        nav : ($carousel.data('nav') !== undefined) ? $carousel.data('nav') : false,
        navText : ["<div class='slider-no-current'><span class='current-no'></span><span class='total-no'></span></div><span class='current-monials'></span>", "<div class='slider-no-next'></div><span class='next-monials'></span>"],
        autoplay : ($carousel.data('autoplay') !== undefined) ? $carousel.data('autoplay') : false,
        autoplayTimeout : ($carousel.data('autoplay-timeout') !== undefined) ? $carousel.data('autoplay-timeout') : 5000,
        animateIn : ($carousel.data('animatein') !== undefined) ? $carousel.data('animatein') : false,
        animateOut : ($carousel.data('animateout') !== undefined) ? $carousel.data('animateout') : false,
        mouseDrag : ($carousel.data('mouse-drag') !== undefined) ? $carousel.data('mouse-drag') : true,
        autoWidth : ($carousel.data('auto-width') !== undefined) ? $carousel.data('auto-width') : false,
        autoHeight : ($carousel.data('auto-height') !== undefined) ? $carousel.data('auto-height') : false,
        center : ($carousel.data('center') !== undefined) ? $carousel.data('center') : false,
        responsiveClass: true,
        dotsEachNumber: true,
        smartSpeed: 600,
        responsive : {
          0 : {
            items : $items_mobile_portrait,
          },
          767 : {
            items : $items_mobile_landscape,
          },
          992 : {
            items : $items_tablet,
          },
          1199 : {
            items : $items,
          }
        }
      });
      var totLength = $('.owl-dot', $carousel).length;
      $('.total-no', $carousel).html(totLength);
      $('.current-no', $carousel).html(totLength);
      $carousel.owlCarousel();
      $('.current-no', $carousel).html(1);
      $carousel.on('changed.owl.carousel', function(event) {
        var total_items = event.page.count;
        var currentNum = event.page.index + 1;
        $('.total-no', $carousel ).html(total_items);
        $('.current-no', $carousel).html(currentNum);
      });
    });
  });

  //Aos Script
  AOS.init({
    duration: 1200,
    once: true,
  });

  // Swiper Slider Script
  var swiper = new Swiper('.swiper-container', {
    effect: 'fade',
    loop: true,
    autoHeight: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
  });

});

$(document).ready(function() {
  var owl = $('.awards-wrapper');
  owl.owlCarousel({
    margin:90,
    nav: false,
    dots: false,
    loop: true,
    autoplay: true,
    slideTransition: 'linear',
    autoplaySpeed: 6000,
    smartSpeed: 6000,
    autoWidth: true,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  })
});
jQuery('.awards-wrapper').trigger('play.owl.autoplay',[2000]);
function setSpeed(){
    jQuery('.awards-wrapper').trigger('play.owl.autoplay',[6000]);
}


let sliderOffset = 20;

  // Tablet and Mobile Only
  if ($(window).width() < 992) {
    sliderOffset = 0;
  }

  // On page load
  $(".slide_contain").each(function () {
    $(this).find(".slide_item").first().addClass("is--current");
  });

  // On arrow click
  $(".slide_arrow").on("click", function () {
    // Set variables
    let slideWidth = $(".slide_item").eq(0).outerWidth() - sliderOffset;
    let slideParent = $(this).closest(".slide_contain");
    let currentSlide = slideParent.find(".slide_item.is--current");

    // Update current slide
    slideParent.find(".is--current").removeClass("is--current");

    if ($(this).hasClass("is--right")) {
      // Right arrow
      if (currentSlide.next().length) {
        currentSlide.next().addClass("is--current");
      } else {
        slideParent.find(".slide_item").first().addClass("is--current");
        slideParent.find(".slide_arrow.is--right").addClass("is--disabled-arrow");
      }
    } else {
      // Left arrow
      if (currentSlide.prev().length) {
        currentSlide.prev().addClass("is--current");
      } else {
        slideParent.find(".slide_item").first().addClass("is--current");
        slideParent.find(".slide_arrow.is--left").addClass("is--disabled-arrow");
      }
    }

    // Update arrows
    slideParent.find(".slide_arrow").removeClass("is--disabled-arrow");

    if (slideParent.find(".slide_item.is--current").index() === 0) {
      slideParent.find(".slide_arrow.is--left").addClass("is--disabled-arrow");
    }

    if (
      slideParent.find(".slide_item.is--current").index() ===
      slideParent.find(".slide_item").length - 1
    ) {
      slideParent.find(".slide_arrow.is--right").addClass("is--disabled-arrow");
    }

    // Figure out move distance
    let currentNumber = slideParent.find(".slide_item.is--current").index();
    let slideMove = slideWidth * currentNumber;

    slideParent.find(".slide_item.is--current").addClass("is--animating");

    slideParent
      .find(".slide_item.is--animating, .slide_item.is--animating ~ .slide_item")
      .css("transform", "translateX(-" + slideMove + "px)");

    slideParent.find(".slide_item.is--current").removeClass("is--animating");
  });

  // On window resize
  $(window).on("resize", function () {
    if ($(window).width() > 767) {
      $(".slide_arrow.is--right").removeClass("is--disabled-arrow");
      $(".slide_arrow.is--left").addClass("is--disabled-arrow");
      $(".slide_item.is--current").removeClass("is--current");
      $(".slide_contain").find(".slide_item").first().addClass("is--current");
      $(".slide_item").css("transform", "translateX(0px)");
    }
  });


$(document).ready(function() {
    $("#Projects-slides").owlCarousel({
        loop: true,
        margin: 40,
        nav: true,center: true,
        dots: false,
        stagePadding: 400,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0, // Smaller padding on mobile
            },
            600: {
                items: 1,
                stagePadding: 0,
            },
            1000: {
                items: 1,
                stagePadding:200,
            }
        }
    });
    });
$(document).ready(function() {
    $("#Advantages-slides.owl-carousel").owlCarousel({
        loop: true,
        margin: 40,
        nav: true,
        dots: false,
        stagePadding: 400,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0, // Smaller padding on mobile
            },
            600: {
                items: 1,
                stagePadding: 0,
            },
            1000: {
                items: 1,
                stagePadding: 0,
            }
        }
    });
});
