(function ($) {
  "use strict";
  /* --------------------------------------------
     Page height classes creator 
     --------------------------------------------- */

  function page_height_classes_creator() {
    var minheight = $(window).height();
    var headerhight = $(".navbar").outerHeight(true);
    var hightoutput = minheight - headerhight;
    var half_height = minheight / 2;
    var thirdhaflhight = (hightoutput / 4) * 3.4;
    var thirdhaflcutedhight = (hightoutput / 4) * 0.56;
    var $min_half_height = $(".min_half_height");
    var $thirdhalf_height = $(
      ".thirdhalf_height, .thirdhalf_height .item, .thirdhalf_height  .owl-carousel-item"
    );
    var $halfheight_screen = $(
      ".halfheight_screen, .halfheight_screen  .item, .halfheight_screen  .owl-carousel-item , .halfheight_screen  .horizontal-item"
    );
    var $full_height = $(
      ".full-screen .owl-carousel-item, .full-screen .bg-image, .full_height"
    );
    var $full_height_minus_header = $(
      ".full-screen-minus-header .owl-carousel-item, .full-screen-minus-header .bg-image"
    );
    var $full_height_minus_header_border = $(
      ".full-screen-minus-header-border .owl-carousel-item, .full-screen-minus-header-border .horizontal-item, .full-screen-minus-header-border .item"
    );
    var $zero_one_carousel_img = $(
      ".zero-one-carousel .owl-carousel-item-bg-image, .zero-one-carousel .owl-carousel-item-bg-image img"
    );

    $min_half_height.css({
      "min-height": minheight / 2
    });

    $thirdhalf_height.css({
      height: thirdhaflhight
    });

    $halfheight_screen.css({
      height: half_height
    });

    $full_height.css({
      "min-height": minheight,
      height: minheight
    });

    $full_height_minus_header.css({
      "min-height": hightoutput,
      height: hightoutput
    });

    $full_height_minus_header_border.css({
      "min-height": hightoutput - 42,
      height: hightoutput - 42
    });

    if ($(window).height() < 800) {
      $zero_one_carousel_img.css({
        "min-height": hightoutput - 100,
        height: hightoutput - 100
      });
    } else if ($(window).width() == 1024 && $(window).height() == 1366) {
      $zero_one_carousel_img.css({
        "min-height": hightoutput / 2 - 100,
        height: hightoutput / 2 - 100
      });
      if (
        $(".zero-one-carousel").hasClass("full-screen-minus-header") ||
        $(".zero-one-carousel").hasClass("full-screen") ||
        $(".zero-one-carousel").hasClass("full-screen-minus-header-border")
      ) {
        $full_height_minus_header.css({
          "min-height": hightoutput / 2,
          height: hightoutput / 2
        });
      }
    } else {
      $zero_one_carousel_img.css({
        "min-height": hightoutput - 200,
        height: hightoutput - 200
      });
    }
  }

  /* --------------------------------------------
     Nav Menu
     --------------------------------------------- */
  function et_nav_menu() {
    // Make multi level bootstrap menu

    $(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
      var $el = $(this);
      var $parent = $(this).offsetParent(".dropdown-menu");
      if (
        !$(this)
          .next()
          .hasClass("show")
      ) {
        $(this)
          .parents(".dropdown-menu")
          .first()
          .find(".show")
          .removeClass("show");
      }
      if (!$el.offsetParent(".dropdown-menu").hasClass("mega_menu")) {
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass("show");
        $(this)
          .parent("li")
          .toggleClass("show");
        $(this)
          .parents("li.nav-item.dropdown.show")
          .on("hidden.bs.dropdown", function (e) {
            $(".dropdown-menu .show").removeClass("show");
          });
        if (!$parent.parent().hasClass("navbar-nav")) {
          if (
            !$el.parent().hasClass("mega_menu_holder") &&
            !$("nav").hasClass("sidebar-nav")
          ) {
            $el.next().css({
              top: $el[0].offsetTop,
              left: $parent.outerWidth() - 4
            });
          }
        }
      }
      return false;
    });

    // Add current class to active menu's item
    var links = $(".navbar a");
    $.each(links, function (key, va) {
      if (va.href === document.URL) {
        $(this)
          .parents("li")
          .addClass("current");
      }
    });
    // toggle classes on click menu btn
    jQuery(".hamburger-menu-btn").on("click", function (e) {
      //For hamburger-menu-btn
      jQuery(this).toggleClass("is-active");
      //For fullscreen-menu-holder
      var elm_fullscreen_menu_holder = $(".fullscreen-menu-holder");
      jQuery(elm_fullscreen_menu_holder).toggleClass("is-active");
      //For sidebar-nav
      var elm_sidebar_nav = $(".sidebar-nav");
      jQuery(elm_sidebar_nav).toggleClass("is-active");
    });

    // Sidebar Menu
    $.sidebarMenu = function (menu) {
      var animationSpeed = 300,
        subMenuSelector = ".sidebar-submenu";

      $(menu).on("click", "li a", function (e) {
        var $this = $(this);
        var checkElement = $this.next();

        if (checkElement.is(subMenuSelector) && checkElement.is(":visible")) {
          checkElement.slideUp(animationSpeed, function () {
            checkElement.removeClass("menu-open");
          });
          checkElement.parent("li").removeClass("active");
        }

        //If the menu is not visible
        else if (
          checkElement.is(subMenuSelector) &&
          !checkElement.is(":visible")
        ) {
          //Get the parent menu
          var parent = $this.parents("ul").first();
          //Close all open menus within the parent
          var ul = parent.find("ul:visible").slideUp(animationSpeed);
          //Remove the menu-open class from the parent
          ul.removeClass("menu-open");
          //Get the parent li
          var parent_li = $this.parent("li");

          //Open the target menu and add the menu-open class
          checkElement.slideDown(animationSpeed, function () {
            //Add the class active to the parent li
            checkElement.addClass("menu-open");
            parent.find("li.active").removeClass("active");
            parent_li.addClass("active");
          });
        }
        //if this isn't a link, prevent the page from being redirected
        if (checkElement.is(subMenuSelector)) {
          e.preventDefault();
        }
      });
    };
    $.sidebarMenu($(".sidebar-menu"));
    // side-canvas-bar
    jQuery(".side-canvas-bar-btn").on("click", function (e) {
      jQuery(".side-canvas-bar").toggleClass("side-canvas-bar-open");
    });

    //  search bar
    $(function () {
      var $searchlink = $("#mini-searchtoggl i");
      var $searchbar = $("#mini-search");

      $searchlink.on("click", function (e) {
        e.preventDefault();

        if (!$searchbar.is(":visible")) {
          // if invisible we switch the icon to appear collapsable
          $searchlink.removeClass("fa-search").addClass("fa-search-minus");
        } else {
          // if visible we switch the icon to appear as a toggle
          $searchlink.removeClass("fa-search-minus").addClass("fa-search");
        }

        $searchbar.slideToggle(300, function () {
          // callback after search bar animation
        });
      });

      $("#searchform").submit(function (e) {
        e.preventDefault(); // stop form submission
      });
    });
  }
  /* --------------------------------------------
     Sticky header
     --------------------------------------------- */

  function sticky_header() {
    var $navbar = $("nav.navbar");
    var $body = $("body");
    var $fixed_top = $(".fixed-top");
    var $center_header = $(".center_header");
    var $top_header = $(".top_header");
    if (!$navbar.hasClass("sideheader")) {
      if ($navbar.hasClass("fixed-top")) {
        var stickyNavTop = $fixed_top.offset().top;
        if ($navbar.hasClass($center_header)) {
        } else if ($navbar.hasClass($center_header)) {
          var menu = document.querySelector($fixed_top);
          var menuPosition = menu.getBoundingClientRect();
          var placeholder = document.createElement("div");
          placeholder.style.width = menuPosition.width + "px";
          placeholder.style.height = menuPosition.height + "px";
          menu.parentNode.insertBefore(placeholder, menu);
        } else {
          var menu = document.querySelector($fixed_top);
          var menuPosition = menu.getBoundingClientRect();
          var bodymarginforheader = menuPosition.height + "px";
          $body.css("margin-top", bodymarginforheader);
        }

        var stickyNav = function () {
          var scrollTop = $(window).scrollTop();

          if ($navbar.hasClass($center_header)) {
            var fromtop = 0;
            if ($top_header.length) {
              var fromtop = $top_header.outerHeight();
            }
            $fixed_top.css({
              top: fromtop + "px"
            });

            if (scrollTop > stickyNavTop + 700) {
              $fixed_top.css({
                top: "0px"
              });
              $fixed_top.addClass("sticky_header_runing");
            } else {
              $fixed_top.removeClass("sticky_header_runing");
            }
          } else {
            if (scrollTop > stickyNavTop) {
              $fixed_top.addClass("sticky_header_runing");
            } else {
              $fixed_top.removeClass("sticky_header_runing");
            }
          }
        };

        stickyNav();
        $(window).scroll(function () {
          stickyNav();
        });
      }
    }
  }

  /* --------------------------------------------
       slick slider  calling function
    --------------------------------------------- */

  function slick_slider() {
    var $slider_call = $(".slider-call");
    if ($slider_call.length) {
      $(".slider-call").slick();
    }
  }

  /* --------------------------------------------
       Isotope  calling function
    --------------------------------------------- */

  function Isotope_masonry_layout() {
    var $masonry_layout = $(".masonry_layout");
    if ($masonry_layout.length) {
      // init Isotope
      var $grid = $masonry_layout.isotope({
        percentPosition: true,
        hiddenStyle: {
          opacity: 0,
          transform: "scale(0.001)"
        },
        visibleStyle: {
          opacity: 1,
          transform: "scale(1)"
        },
        transitionDuration: "0.6s",
        masonry: {}
      });
      // Isotope filter
      var $items_filter = $(".items_filter");
      var $items_filter_span = $(".items_filter li span");
      $items_filter_span.on("click", function () {
        var $this = $(this);
        var filterValue = $this.attr("data-filter");
        $this.parent().removeClass("active");
        $this.parent().addClass("active");
        $grid.isotope({
          filter: filterValue
        });
      });

      // layout Isotope after each image loads
      $grid.imagesLoaded().progress(function () {
        $grid.isotope("layout");
      });
    }
  }

  /* --------------------------------------------
     Number Counter 
     --------------------------------------------- */

  function countToNumber() {
    var $timer = $(".timer");
    if ($timer.length) {
      $timer.countTo();
    }
  }

  /* --------------------------------------------
      Countdown
    --------------------------------------------- */
  function et_countdown() {
    var $getting_started = $("#getting-started");
    if ($getting_started.length) {
      $getting_started.countdown("2022/01/01", function (event) {
        var $this = $(this);
        $this.html(
          event.strftime(
            '<span class="countdown_value"> %m <span class="countdown_lable"> Months  </span></span> <span class="countdown_value"> %d <span class="countdown_lable"> Days </span> </span> <span class="countdown_value"> %H <span class="countdown_lable"> Hours </span></span> <span class="countdown_value"> %M <span class="countdown_lable"> Minutes </span></span> <span class="countdown_value"> %S <span class="countdown_lable"> Seconds </span></span>'
          )
        );
      });
    }
  }

  /* --------------------------------------------
      Magnific Popup
    --------------------------------------------- */
  function popup_gallery_int() {
    var $popup_gallery = $(".popup_gallery");
    if ($popup_gallery.length) {
      $popup_gallery.magnificPopup({
        delegate: "img",
        type: "image",
        mainClass: "mfp-with-zoom mfp-img-mobile",
        fixedContentPos: false,
        gallery: {
          enabled: true
        },
        zoom: {
          enabled: true,
          duration: 300 // don't foget to change the duration also in CSS
        },
        callbacks: {
          elementParse: function (qw) {
            qw.src = qw.el.attr("src");
          }
        }
      });
    }
    // For video popup (PLAY VIDEO TRIGGER)
    var $video_play_trigger = $(".iframe_trigger, #iframe_trigger");
    if ($video_play_trigger.length) {
      $video_play_trigger.magnificPopup({
        disableOn: 700,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
      });
    }
  }

  /* --------------------------------------------
      Instagram feed
    --------------------------------------------- */
  function Instafeed_int() {
    var $instagramfeed = $("#instagramfeed");
    if ($instagramfeed.length) {
      var feed = new Instafeed({
        get: "user",
        userId: "6860378171",
        accessToken: "6860378171.1677ed0.16fe436053ac494f833e5005ef348d83",
        target: "instagramfeed",
        limit: 6,
        resolution: "low_resolution",
        template:
          '<li class="col-4"><a href="{{link}}"><img  src="{{image}}" /></a></li>'
      });
      feed.run();
    }
  }
  /* ---------------------------------------------
     Scripts initialization
     --------------------------------------------- */

  $(window).on("load", function () {
    "use strict"; // Start of use strict
    Isotope_masonry_layout();
  });

  $(document).ready(function () {
    "use strict"; // Start of use strict

    slick_slider();
    popup_gallery_int();
    countToNumber();
    et_countdown();
    et_nav_menu();
    Instafeed_int();
    sticky_header();
  });

  /* ---------------------------------------------
     On resize calling function
     --------------------------------------------- */
  $(window)
    .on("resize", function () {
      "use strict"; // Start of use strict
      page_height_classes_creator();
    })
    .trigger("resize");
})(jQuery);
