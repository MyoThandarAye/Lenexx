(function ($) {

  $(document).ready(function(){
  $('.single-slider').owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    smartSpeed: 800,
    navText: [
      '<span class="nav-arrow prev">&lsaquo;</span>',
      '<span class="nav-arrow next">&rsaquo;</span>'
    ]
  });
});

  $(document).ready(function () {
    var $csrCarousel = $(".csr-carousel");

    $csrCarousel.owlCarousel({
      loop: true,
      margin: 20, // Gap between the 3 cards
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      dots: true,
      nav: false, // Using external custom arrows
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
        1200: {
          items: 3, // Strictly 3 items on standard desktop screens
        },
      },
    });

    // Custom Button Handlers
    $(".btn-prev").click(function () {
      $csrCarousel.trigger("prev.owl.carousel");
    });

    $(".btn-next").click(function () {
      $csrCarousel.trigger("next.owl.carousel");
    });
  });

  // $(document).ready(function() {

  //scroll to top
  // $(window).scroll(function () {
  //   var sticky = $("header"),
  //     scroll = $(window).scrollTop();

  //   if (scroll >= 40) {
  //     sticky.addClass("fix");
  //   } else {
  //     sticky.removeClass("fix");
  //   }
  // });

  //mouser over click

  $("ul.dropdown-menu [data-toggle=dropdown]").on("click", function (event) {
    event.preventDefault();
    event.stopPropagation();

    $(this).parent().siblings().removeClass("open");

    $(this).parent().toggleClass("open");
  });

  $("#accordionExample").on("click", function (e) {
    $("#accordion .collapse").toggleClass("show");
  });

  //mouser over code

  $("ul.navbar-nav  li.dropdown [data-toggle=dropdown]").mouseover(function () {
    $(this).parent().toggleClass("open");
  });
  $("ul.navbar-nav  li.dropdown").mouseleave(function () {
    $(this).removeClass("open");
  });

  //go-top

  //scroll to top
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".scrollup").fadeIn();
    } else {
      $(".scrollup").fadeOut();
    }
  });
  $(".scrollup").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1000);
    return false;
  });

  $(".business-carousel").owlCarousel({
    center: true,
    items: 2,
    loop: true,
    margin: 80,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    nav: false,
    dots: false,
    responsive: {
      0: { items: 1, margin: 40 },
      768: { items: 2, margin: 60 },
      992: { items: 2, margin: 80 },
    },
  });

  // fancybox
  // $(".fancybox").fancybox();
  $("[data-fancybox]").fancybox();

  // to load fancybox into WP default gallery (enable if you need it)
  $(".extra_field a").attr("data-fancybox", "images");
  $(".gallery a").attr("data-fancybox", "images");
  $(".vdw_gallery a").attr("data-fancybox", "images");
  $(".wp-block-image a").attr("data-fancybox", "gallery");
  $(".attach-logos a")
    .removeAttr("data-fancybox", "gallery")
    .attr("target", "_blank");

  /* ============================================================
     AOS - ANIMATE ON SCROLL
     ============================================================ */
  $(document).ready(function () {
    if (typeof AOS !== "undefined") {
      AOS.init({
        duration: 800,
        easing: "ease-out-cubic",
        once: true,
        offset: 80,
        delay: 0,
        disable: function () {
          return window.innerWidth < 768;
        }
      });
    }
  });

  /* ============================================================
     ENGINEERING PAGE - CAPABILITIES TABS
     ============================================================ */
  $(document).ready(function () {
    var $tabs = $(".eng-capability-item");

    if (!$tabs.length) {
      return;
    }

    var $panels = $(".eng-capabilities-panel");
    var $controls = $(".eng-capabilities-btn");

    var showCapability = function (index) {
      var total = $tabs.length;

      index = (index + total) % total;

      $tabs.removeClass("is-active").attr({ "aria-selected": "false", tabindex: "-1" });
      $panels.removeClass("is-active").attr("aria-hidden", "true").prop("hidden", true);

      $tabs.eq(index).addClass("is-active").attr({ "aria-selected": "true", tabindex: "0" });
      $panels.eq(index).addClass("is-active").attr("aria-hidden", "false").prop("hidden", false);
    };

    var currentIndex = function () {
      return $tabs.index($tabs.filter(".is-active"));
    };

    $tabs.on("click", function () {
      showCapability($(this).index());
    });

    $tabs.on("keydown", function (event) {
      var key = event.key;

      if (key === "ArrowDown" || key === "ArrowRight") {
        event.preventDefault();
        showCapability(currentIndex() + 1);
        $tabs.eq(currentIndex()).trigger("focus");
      }

      if (key === "ArrowUp" || key === "ArrowLeft") {
        event.preventDefault();
        showCapability(currentIndex() - 1);
        $tabs.eq(currentIndex()).trigger("focus");
      }

      if (key === "Home") {
        event.preventDefault();
        showCapability(0);
        $tabs.eq(0).trigger("focus");
      }

      if (key === "End") {
        event.preventDefault();
        showCapability($tabs.length - 1);
        $tabs.eq($tabs.length - 1).trigger("focus");
      }
    });

    $controls.on("click", function () {
      var direction = $(this).data("eng-direction");

      showCapability(direction === "prev" ? currentIndex() - 1 : currentIndex() + 1);
    });

    showCapability(0);
  });

  /* ============================================================
     SYSTEMS PAGE - CAPABILITY SHOWCASE
     ============================================================ */
  $(document).ready(function () {
    var $showcase = $(".sys-showcase");

    if (!$showcase.length) {
      return;
    }

    var $items = $showcase.find(".sys-showcase-item");
    var $heads = $showcase.find(".sys-showcase-head");

    var current = 0;

    var showCapability = function (index) {
      var total = $items.length;
      var previous = current;

      if (index < 0 || index >= total || index === current) {
        return;
      }

      var $item = $items.eq(index);

      current = index;

      $items.removeClass("is-active");
      $item.addClass("is-active");

      $heads.attr("aria-selected", "false");
      $item.find(".sys-showcase-head").attr("aria-selected", "true");

      $items.find(".sys-showcase-body")
        .attr("aria-hidden", "true")
        .prop("hidden", true)
        .removeAttr("data-slide");

      $item.find(".sys-showcase-body")
        .attr({ "data-slide": index > previous ? "right" : "left", "aria-hidden": "false" })
        .prop("hidden", false);
    };

    $heads.on("click", function () {
      showCapability($heads.index(this));
    });

    $showcase.on("keydown", function (event) {
      var key = event.key;

      if (key === "ArrowRight" || key === "ArrowDown") {
        event.preventDefault();
        showCapability(current + 1);
      }

      if (key === "ArrowLeft" || key === "ArrowUp") {
        event.preventDefault();
        showCapability(current - 1);
      }
    });

    /* Scroll reveal - slides the headers and the active panel in */
    var finishReveal = function () {
      $showcase.removeClass("is-reveal is-revealed");
    };

    $showcase.addClass("is-reveal");

    if ("IntersectionObserver" in window) {
      var observer = new IntersectionObserver(function (entries) {
        $.each(entries, function (index, entry) {
          if (entry.isIntersecting) {
            $showcase.addClass("is-revealed");
            window.setTimeout(finishReveal, 1300);
            observer.disconnect();
          }
        });
      }, { threshold: 0.2 });

      observer.observe($showcase[0]);
    } else {
      $showcase.addClass("is-revealed");
      window.setTimeout(finishReveal, 1300);
    }
  });

  /* ============================================================
     LIFECYCLE PAGE - CAPABILITY HIGHLIGHT
     ============================================================ */
  $(document).ready(function () {
    var $items = $(".lcf-accordion-item");

    if (!$items.length) {
      return;
    }

    $items.on("click", ".lcf-accordion-head", function () {
      var $item = $(this).closest(".lcf-accordion-item");

      if ($item.hasClass("is-active")) {
        return;
      }

      $items.removeClass("is-active").find(".lcf-accordion-head").attr("aria-pressed", "false");
      $item.addClass("is-active").find(".lcf-accordion-head").attr("aria-pressed", "true");
    });
  });

  // });
})(jQuery);
