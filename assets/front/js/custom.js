$(function () {
  "use strict";

  //Loader
  $(function preloaderLoad() {
    if ($(".preloader").length) {
      $(".preloader").delay(200).fadeOut(300);
    }
    $(".preloader_disabler").on("click", function () {
      $("#preloader").hide();
    });
  });

  // Script Navigation
  !(function (n, e, i, a) {
    (n.navigation = function (t, s) {
      var o = {
          responsive: !0,
          mobileBreakpoint: 992,
          showDuration: 300,
          hideDuration: 300,
          showDelayDuration: 0,
          hideDelayDuration: 0,
          submenuTrigger: "hover",
          effect: "fade",
          submenuIndicator: !0,
          hideSubWhenGoOut: !0,
          visibleSubmenusOnMobile: !1,
          fixed: !1,
          overlay: !0,
          overlayColor: "rgba(0, 0, 0, 0.5)",
          hidden: !1,
          offCanvasSide: "left",
          onInit: function () {},
          onShowOffCanvas: function () {},
          onHideOffCanvas: function () {},
        },
        u = this,
        r = Number.MAX_VALUE,
        d = 1,
        f = "click.nav touchstart.nav",
        l = "mouseenter.nav",
        c = "mouseleave.nav";
      u.settings = {};
      var t = (n(t), t);
      n(t)
        .find(".nav-menus-wrapper")
        .prepend("<span class='nav-menus-wrapper-close-button'>✕</span>"),
        n(t).find(".nav-search").length > 0 &&
          n(t)
            .find(".nav-search")
            .find("form")
            .prepend("<span class='nav-search-close-button'>✕</span>"),
        (u.init = function () {
          (u.settings = n.extend({}, o, s)),
            "right" == u.settings.offCanvasSide &&
              n(t)
                .find(".nav-menus-wrapper")
                .addClass("nav-menus-wrapper-right"),
            u.settings.hidden &&
              (n(t).addClass("navigation-hidden"),
              (u.settings.mobileBreakpoint = 99999)),
            v(),
            u.settings.fixed && n(t).addClass("navigation-fixed"),
            n(t)
              .find(".nav-toggle")
              .on("click touchstart", function (n) {
                n.stopPropagation(),
                  n.preventDefault(),
                  u.showOffcanvas(),
                  s !== a && u.callback("onShowOffCanvas");
              }),
            n(t)
              .find(".nav-menus-wrapper-close-button")
              .on("click touchstart", function () {
                u.hideOffcanvas(), s !== a && u.callback("onHideOffCanvas");
              }),
            n(t)
              .find(".nav-search-button")
              .on("click touchstart", function (n) {
                n.stopPropagation(), n.preventDefault(), u.toggleSearch();
              }),
            n(t)
              .find(".nav-search-close-button")
              .on("click touchstart", function () {
                u.toggleSearch();
              }),
            n(t).find(".megamenu-tabs").length > 0 && y(),
            n(e).resize(function () {
              m(), C();
            }),
            m(),
            s !== a && u.callback("onInit");
        });
      var v = function () {
        n(t)
          .find("li")
          .each(function () {
            n(this).children(".nav-dropdown,.megamenu-panel").length > 0 &&
              (n(this)
                .children(".nav-dropdown,.megamenu-panel")
                .addClass("nav-submenu"),
              u.settings.submenuIndicator &&
                n(this)
                  .children("a")
                  .append(
                    "<span class='submenu-indicator'><span class='submenu-indicator-chevron'></span></span>"
                  ));
          });
      };
      (u.showSubmenu = function (e, i) {
        g() > u.settings.mobileBreakpoint &&
          n(t).find(".nav-search").find("form").slideUp(),
          "fade" == i
            ? n(e)
                .children(".nav-submenu")
                .stop(!0, !0)
                .delay(u.settings.showDelayDuration)
                .fadeIn(u.settings.showDuration)
            : n(e)
                .children(".nav-submenu")
                .stop(!0, !0)
                .delay(u.settings.showDelayDuration)
                .slideDown(u.settings.showDuration),
          n(e).addClass("nav-submenu-open");
      }),
        (u.hideSubmenu = function (e, i) {
          "fade" == i
            ? n(e)
                .find(".nav-submenu")
                .stop(!0, !0)
                .delay(u.settings.hideDelayDuration)
                .fadeOut(u.settings.hideDuration)
            : n(e)
                .find(".nav-submenu")
                .stop(!0, !0)
                .delay(u.settings.hideDelayDuration)
                .slideUp(u.settings.hideDuration),
            n(e)
              .removeClass("nav-submenu-open")
              .find(".nav-submenu-open")
              .removeClass("nav-submenu-open");
        });
      var h = function () {
          n("body").addClass("no-scroll"),
            u.settings.overlay &&
              (n(t).append("<div class='nav-overlay-panel'></div>"),
              n(t)
                .find(".nav-overlay-panel")
                .css("background-color", u.settings.overlayColor)
                .fadeIn(300)
                .on("click touchstart", function (n) {
                  u.hideOffcanvas();
                }));
        },
        p = function () {
          n("body").removeClass("no-scroll"),
            u.settings.overlay &&
              n(t)
                .find(".nav-overlay-panel")
                .fadeOut(400, function () {
                  n(this).remove();
                });
        };
      (u.showOffcanvas = function () {
        h(),
          "left" == u.settings.offCanvasSide
            ? n(t)
                .find(".nav-menus-wrapper")
                .css("transition-property", "left")
                .addClass("nav-menus-wrapper-open")
            : n(t)
                .find(".nav-menus-wrapper")
                .css("transition-property", "right")
                .addClass("nav-menus-wrapper-open");
      }),
        (u.hideOffcanvas = function () {
          n(t)
            .find(".nav-menus-wrapper")
            .removeClass("nav-menus-wrapper-open")
            .on(
              "webkitTransitionEnd moztransitionend transitionend oTransitionEnd",
              function () {
                n(t)
                  .find(".nav-menus-wrapper")
                  .css("transition-property", "none")
                  .off();
              }
            ),
            p();
        }),
        (u.toggleOffcanvas = function () {
          g() <= u.settings.mobileBreakpoint &&
            (n(t).find(".nav-menus-wrapper").hasClass("nav-menus-wrapper-open")
              ? (u.hideOffcanvas(), s !== a && u.callback("onHideOffCanvas"))
              : (u.showOffcanvas(), s !== a && u.callback("onShowOffCanvas")));
        }),
        (u.toggleSearch = function () {
          "none" == n(t).find(".nav-search").find("form").css("display")
            ? (n(t).find(".nav-search").find("form").slideDown(),
              n(t).find(".nav-submenu").fadeOut(200))
            : n(t).find(".nav-search").find("form").slideUp();
        });
      var m = function () {
          u.settings.responsive
            ? (g() <= u.settings.mobileBreakpoint &&
                r > u.settings.mobileBreakpoint &&
                (n(t)
                  .addClass("navigation-portrait")
                  .removeClass("navigation-landscape"),
                D()),
              g() > u.settings.mobileBreakpoint &&
                d <= u.settings.mobileBreakpoint &&
                (n(t)
                  .addClass("navigation-landscape")
                  .removeClass("navigation-portrait"),
                k(),
                p(),
                u.hideOffcanvas()),
              (r = g()),
              (d = g()))
            : k();
        },
        b = function () {
          n("body").on("click.body touchstart.body", function (e) {
            0 === n(e.target).closest(".navigation").length &&
              (n(t).find(".nav-submenu").fadeOut(),
              n(t).find(".nav-submenu-open").removeClass("nav-submenu-open"),
              n(t).find(".nav-search").find("form").slideUp());
          });
        },
        g = function () {
          return (
            e.innerWidth || i.documentElement.clientWidth || i.body.clientWidth
          );
        },
        w = function () {
          n(t).find(".nav-menu").find("li, a").off(f).off(l).off(c);
        },
        C = function () {
          if (g() > u.settings.mobileBreakpoint) {
            var e = n(t).outerWidth(!0);
            n(t)
              .find(".nav-menu")
              .children("li")
              .children(".nav-submenu")
              .each(function () {
                n(this).parent().position().left + n(this).outerWidth() > e
                  ? n(this).css("right", 0)
                  : n(this).css("right", "auto");
              });
          }
        },
        y = function () {
          function e(e) {
            var i = n(e).children(".megamenu-tabs-nav").children("li"),
              a = n(e).children(".megamenu-tabs-pane");
            n(i).on("click.tabs touchstart.tabs", function (e) {
              e.stopPropagation(),
                e.preventDefault(),
                n(i).removeClass("active"),
                n(this).addClass("active"),
                n(a).hide(0).removeClass("active"),
                n(a[n(this).home()]).show(0).addClass("active");
            });
          }
          if (n(t).find(".megamenu-tabs").length > 0)
            for (var i = n(t).find(".megamenu-tabs"), a = 0; a < i.length; a++)
              e(i[a]);
        },
        k = function () {
          w(),
            n(t).find(".nav-submenu").hide(0),
            navigator.userAgent.match(/Mobi/i) ||
            navigator.maxTouchPoints > 0 ||
            "click" == u.settings.submenuTrigger
              ? n(t)
                  .find(".nav-menu, .nav-dropdown")
                  .children("li")
                  .children("a")
                  .on(f, function (i) {
                    if (
                      (u.hideSubmenu(
                        n(this).parent("li").siblings("li"),
                        u.settings.effect
                      ),
                      n(this)
                        .closest(".nav-menu")
                        .siblings(".nav-menu")
                        .find(".nav-submenu")
                        .fadeOut(u.settings.hideDuration),
                      n(this).siblings(".nav-submenu").length > 0)
                    ) {
                      if (
                        (i.stopPropagation(),
                        i.preventDefault(),
                        "none" ==
                          n(this).siblings(".nav-submenu").css("display"))
                      )
                        return (
                          u.showSubmenu(
                            n(this).parent("li"),
                            u.settings.effect
                          ),
                          C(),
                          !1
                        );
                      if (
                        (u.hideSubmenu(n(this).parent("li"), u.settings.effect),
                        "_blank" == n(this).attr("target") ||
                          "blank" == n(this).attr("target"))
                      )
                        e.open(n(this).attr("href"));
                      else {
                        if (
                          "#" == n(this).attr("href") ||
                          "" == n(this).attr("href")
                        )
                          return !1;
                        e.location.href = n(this).attr("href");
                      }
                    }
                  })
              : n(t)
                  .find(".nav-menu")
                  .find("li")
                  .on(l, function () {
                    u.showSubmenu(this, u.settings.effect), C();
                  })
                  .on(c, function () {
                    u.hideSubmenu(this, u.settings.effect);
                  }),
            u.settings.hideSubWhenGoOut && b();
        },
        D = function () {
          w(),
            n(t).find(".nav-submenu").hide(0),
            u.settings.visibleSubmenusOnMobile
              ? n(t).find(".nav-submenu").show(0)
              : (n(t).find(".nav-submenu").hide(0),
                n(t)
                  .find(".submenu-indicator")
                  .removeClass("submenu-indicator-up"),
                u.settings.submenuIndicator
                  ? n(t)
                      .find(".submenu-indicator")
                      .on(f, function (e) {
                        return (
                          e.stopPropagation(),
                          e.preventDefault(),
                          u.hideSubmenu(
                            n(this).parent("a").parent("li").siblings("li"),
                            "slide"
                          ),
                          u.hideSubmenu(
                            n(this)
                              .closest(".nav-menu")
                              .siblings(".nav-menu")
                              .children("li"),
                            "slide"
                          ),
                          "none" ==
                          n(this)
                            .parent("a")
                            .siblings(".nav-submenu")
                            .css("display")
                            ? (n(this).addClass("submenu-indicator-up"),
                              n(this)
                                .parent("a")
                                .parent("li")
                                .siblings("li")
                                .find(".submenu-indicator")
                                .removeClass("submenu-indicator-up"),
                              n(this)
                                .closest(".nav-menu")
                                .siblings(".nav-menu")
                                .find(".submenu-indicator")
                                .removeClass("submenu-indicator-up"),
                              u.showSubmenu(
                                n(this).parent("a").parent("li"),
                                "slide"
                              ),
                              !1)
                            : (n(this)
                                .parent("a")
                                .parent("li")
                                .find(".submenu-indicator")
                                .removeClass("submenu-indicator-up"),
                              void u.hideSubmenu(
                                n(this).parent("a").parent("li"),
                                "slide"
                              ))
                        );
                      })
                  : k());
        };
      (u.callback = function (n) {
        s[n] !== a && s[n].call(t);
      }),
        u.init();
    }),
      (n.fn.navigation = function (e) {
        return this.each(function () {
          if (a === n(this).data("navigation")) {
            var i = new n.navigation(this, e);
            n(this).data("navigation", i);
          }
        });
      });
  })(jQuery, window, document),
    $(document).ready(function () {
      $("#navigation").navigation();
    });

  // Script For Select Adult & Child Number
  $(function () {
    var guestAmount = $("#guestNo");

    $("#cnt-up").on("click", function () {
      guestAmount.val(Math.min(parseInt($("#guestNo").val()) + 1, 20));
    });
    $("#cnt-down").on("click", function () {
      guestAmount.val(Math.max(parseInt($("#guestNo").val()) - 1, 1));
    });
  });

  $(function () {
    var guestAmount = $("#kidsNo");

    $("#kcnt-up").on("click", function () {
      guestAmount.val(Math.min(parseInt($("#kidsNo").val()) + 1, 20));
    });
    $("#kcnt-down").on("click", function () {
      guestAmount.val(Math.max(parseInt($("#kidsNo").val()) - 1, 0));
    });
  });

  $(".count").each(function () {
    $(this)
      .prop("Counter", 0)
      .animate(
        {
          Counter: $(this).text(),
        },
        {
          duration: 1700,
          easing: "swing",
          step: function (now) {
            $(this).text(Math.ceil(now));
          },
        }
      );
  });

  // Check In & Check Out Daterange Script
  $(function () {
    $('input[name="checkout"]').daterangepicker({
      singleDatePicker: true,
    });
    $('input[name="checkout"]').val("");
    $('input[name="checkout"]').attr("placeholder", "Check Out");
  });
  $(function () {
    $('input[name="checkin"]').daterangepicker({
      singleDatePicker: true,
    });
    $('input[name="checkin"]').val("");
    $('input[name="checkin"]').attr("placeholder", "Check In");
  });

  // MagnificPopup
  $("body").magnificPopup({
    type: "image",
    delegate: "a.mfp-gallery",
    fixedContentPos: true,
    fixedBgPos: true,
    overflowY: "auto",
    closeBtnInside: false,
    preloader: true,
    removalDelay: 0,
    mainClass: "mfp-fade",
    gallery: {
      enabled: true,
    },
  });

  // Tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Bottom To Top Scroll Script
  $(window).on("scroll", function () {
    var height = $(window).scrollTop();
    if (height > 100) {
      $("#back2Top").fadeIn();
    } else {
      $("#back2Top").fadeOut();
    }
  });

  // Script For Fix Header on Scroll
  // $(window).on("scroll", function () {
  //   var scroll = $(window).scrollTop();

  //   if (scroll >= 50) {
  //     $(".header").addClass("header-fixed");
  //   } else {
  //     $(".header").removeClass("header-fixed");
  //   }
  // });

  // Review Slide
  $(".reviews-slide").slick({
    slidesToShow: 3,
    arrows: true,
    dots: false,
    infinite: true,
    speed: 500,
    cssEase: "linear",
    autoplaySpeed: 2000,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: true,
          dots: false,
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 600,
        settings: {
          arrows: true,
          dots: false,
          slidesToShow: 1,
        },
      },
    ],
  });

  // item Slide
  $(".slide_items").slick({
    slidesToShow: 4,
    arrows: false,
    dots: true,
    infinite: true,
    speed: 500,
    cssEase: "linear",
    autoplaySpeed: 2000,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: true,
          dots: false,
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 600,
        settings: {
          arrows: true,
          dots: false,
          slidesToShow: 1,
        },
      },
    ],
  });

  // Featured Slick Slider
  $(".featured-slick-slide").slick({
    centerMode: true,
    centerPadding: "0px",
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: "0px",
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "0px",
          slidesToShow: 1,
        },
      },
    ],
  });

  $(document).on("change", ".image-upload", function () {
    var imgpath = $(this).parent().prev();
    var file = $(this);
    readURL(this, imgpath);
  });

  function readURL(input, imgpath) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        imgpath.css("background", "url(" + e.target.result + ")");
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

  if (jQuery().summernote) {
    $(".summernote").summernote({
      dialogsInBody: true,
      minHeight: 250,
    });
    $(".summernote-simple").summernote({
      dialogsInBody: true,
      minHeight: 150,
      toolbar: [
        ["style", ["bold", "italic", "underline", "clear"]],
        ["font", ["strikethrough"]],
        ["para", ["paragraph"]],
      ],
    });
  }

  $(document).find(".mytags").tagify();

  /* ----------------------------------------------------------- */
  /*  AJAX CONTACT FORM
	/* ----------------------------------------------------------- */

  $(document).on("submit", "#contactform", function (e) {
    e.preventDefault();
    $(".gocover").show();
    $(".formSpin").css("display", "inline-block");
    $("button.btn-contact").prop("disabled", true);
    $.ajax({
      method: "POST",
      url: $(this).prop("action"),
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
        if (data.errors) {
          $(".formSpin").css("display", "none");
          $(".alert-success").hide();
          $(".alert-danger").show();
          $(".alert-danger ul")("");
          for (var error in data.errors) {
            $(".alert-danger ul").append("<li>" + data.errors[error] + "</li>");
          }
          $(
            "#contactform input[type=text], #contactform input[type=email], #contactform textarea"
          )
            .eq(0)
            .focus();
        } else {
          $(".alert-danger").hide();
          $(".alert-success").show();
          $(".alert-success p")(data);
          $(
            "#contactform input[type=text], #contactform input[type=email], #contactform textarea"
          )
            .eq(0)
            .focus();
          $(
            "#contactform input[type=text], #contactform input[type=email], #contactform textarea"
          ).val("");
        }
        $(".formSpin").css("display", "none");
        $(".gocover").hide();
        $("button.btn-contact").prop("disabled", false);
      },
    });
  });

  $("#loginform").on("submit", function (e) {
    e.preventDefault();
    $("#loginform button.submit-btn").prop("disabled", true);
    $(".formSpin").css("display", "inline-block");
    $("#loginform .alert-info").show();
    $("#loginform .alert-info p")($("#authdata").val());
    $.ajax({
      method: "POST",
      url: $(this).prop("action"),
      data: new FormData(this),
      dataType: "JSON",
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
        if (data.errors) {
          $(".formSpin").css("display", "none");
          $("#loginform .alert-success").hide();
          $("#loginform .alert-info").hide();
          $("#loginform .alert-danger").show();
          $("#loginform .alert-danger ul")("");
          for (var error in data.errors) {
            $("#loginform .alert-danger p")(data.errors[error]);
          }
        } else {
          $(".formSpin").css("display", "none");
          $("#loginform .alert-info").hide();
          $("#loginform .alert-danger").hide();
          $("#loginform .alert-success").show();
          $("#loginform .alert-success p")("Success !");
          window.location = data;
        }
        $("#loginform button.submit-btn").prop("disabled", false);
      },
    });
  });

  // REGISTER FORM

  $("#registerform").on("submit", function (e) {
    e.preventDefault();

    $(".formSpin").css("display", "inline-block");
    $("#registerform button.submit-btn").prop("disabled", true);
    $("#registerform .alert-info").show();
    $("#registerform .alert-info p")($("#processdata").val());

    $.ajax({
      method: "POST",
      url: $(this).prop("action"),
      data: new FormData(this),
      dataType: "JSON",
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
        if (data == 1) {
          window.location = mainurl + "/user/dashboard";
        } else {
          if (data.errors) {
            $(".formSpin").css("display", "none");
            $("#registerform .alert-success").hide();
            $("#registerform .alert-info").hide();
            $("#registerform .alert-danger").show();
            $("#registerform .alert-danger ul")("");
            for (var error in data.errors) {
              $("#registerform .alert-danger p")(data.errors[error]);
            }
            $("#registerform button.submit-btn").prop("disabled", false);
          } else {
            $(".formSpin").css("display", "none");
            $("#registerform .alert-info").hide();
            $("#registerform .alert-danger").hide();
            $("#registerform .alert-success").show();
            $("#registerform .alert-success p")(data);
            $("#registerform button.submit-btn").prop("disabled", false);
          }
        }
      },
    });
  });

  $("#forgotform").on("submit", function (e) {
    e.preventDefault();
    $(".formSpin").css("display", "inline-block");
    $("button.submit-btn").prop("disabled", true);
    $(".alert-info").show();
    $(".alert-info p")($(".authdata").val());
    $.ajax({
      method: "POST",
      url: $(this).prop("action"),
      data: new FormData(this),
      dataType: "JSON",
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
        if (data.errors) {
          $(".formSpin").css("display", "none");
          $(".alert-success").hide();
          $(".alert-info").hide();
          $(".alert-danger").show();
          $(".alert-danger ul")("");
          for (var error in data.errors) {
            $(".alert-danger p")(data.errors[error]);
          }
        } else {
          $(".formSpin").css("display", "none");
          $(".alert-info").hide();
          $(".alert-danger").hide();
          $(".alert-success").show();
          $(".alert-success p")(data);
          $("input[type=email]").val("");
        }
        $("button.submit-btn").prop("disabled", false);
      },
    });
  });

  $(document).on("submit", ".geniusform", function (e) {
    var $this = $(this);

    e.preventDefault();

    $(".formSpin").css("display", "inline-block");
    $("#submit-btn").prop("disabled", true);

    $.ajax({
      method: "POST",
      url: $(this).prop("action"),
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
        if (data.errors) {
          $this.find(".alert-success").hide();
          $this.find(".alert-info").hide();
          $this.find(".alert-danger").show();
          $this.find(".alert-danger ul")("");
          for (var error in data.errors) {
            $this.find(".alert-danger p")(data.errors[error]);
          }
        } else {
          $this.find(".alert-info").hide();
          $this.find(".alert-danger").hide();
          $this.find(".alert-success").show();
          $this.find(".alert-success p")(data);
        }

        $(".formSpin").css("display", "none");
        $("#submit-btn").prop("disabled", false);

        $(window).scrollTop(0);
      },
    });
  });

  $(document).on("click", "#property_gallery", function () {
    $("#propertyuploadgallery").click();
  });

  $("#propertyuploadgallery").change(function (event) {
    var total_file = document.getElementById("propertyuploadgallery").files
      .length;
    for (var i = 0; i < total_file; i++) {
      $(".selected-image .row").append(
        '<div class="col-sm-6">' +
          '<div class="img gallery-img">' +
          '<span class="remove-img"><i class="fas fa-times"></i>' +
          '<input type="hidden" value="' +
          i +
          '">' +
          "</span>" +
          '<a href="' +
          URL.createObjectURL(event.target.files[i]) +
          '" target="_blank">' +
          '<img class="back-preview-imag" src="' +
          URL.createObjectURL(event.target.files[i]) +
          '" alt="gallery image">' +
          "</a>" +
          "</div>" +
          "</div> "
      );
      $("#geniusform").append(
        '<input type="hidden" name="gallery[]" id="galval' +
          i +
          '" class="removegal" value="' +
          i +
          '">'
      );
    }
  });
});
