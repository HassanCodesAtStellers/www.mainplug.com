<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <meta name="csrf-token" content="" />
    <title>MainPlug.com</title>

    <link href="assets/front/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/front/css/styles?color=f41b3b" />

    <link
      href="https://fonts.googleapis.com/css?family=Jost&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      id="colorr"
      href="assets/front/css/font?font_familly=Jost"
    />

    <link href="assets/front/css/summernote.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/front/css/toastr.min.css" />
    <link rel="stylesheet" href="assets/front/css/mdtimepicker.css" />
    <link href="assets/admin/css/tagify.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/front/css/custom.css" />
    <link rel="shortcut icon" href="assets/images/plug-logo.png" />

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "UA-137437974-1");
    </script>
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <div
      class="preloader"
      id="preloader"
      style="
        background: url(assets/images/preloader.gif) no-repeat scroll center
          center #fff;
      "
    ></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Top header  -->
      <!-- ============================================================== -->
      <!-- Start Navigation -->
      <div class="header header-light dark-text head-border">
        <div class="container">
          <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
              <a class="nav-brand fixed-logo" href="home"
                ><img src="assets/images/mainplug-logo.png" class="logo" alt=""
              /></a>

              <div class="nav-toggle"></div>
              <div class="mobile_nav">
                <ul>
                  <li>
                    <a href="user/login" class="theme-cl fs-lg">
                      <i class="lni lni-user"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none">
              <ul class="nav-menu">
                <li><a href="home" target="_self">Home</a></li>
                <li>
                  <a href="listing" target="_self">Listing</a>
                </li>
                <li>
                  <a href="pricing-plans" target="_self">Pricing</a>
                </li>
                <li><a href="blogs" target="_self">Blog</a></li>
                <li>
                  <a href="contact" target="_self">Contact</a>
                </li>
              </ul>

              <ul class="nav-menu nav-menu-social align-to-right">
                <li>
                  <a href="user/login" class="ft-bold">
                    <i class="fas fa-sign-in-alt me-1 theme-cl"></i>Sign In
                  </a>
                </li>
                <li class="add-listing">
                  <a href="user/listing/type">
                    <i class="fas fa-plus me-2"></i>Add Listing
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>

      <!-- End Navigation -->
      <div class="clearfix"></div>
      <!-- ============================================================== -->
      <!-- Top header  -->
      <!-- ============================================================== -->

      <!-- ======================= Top Breadcrubms ======================== -->
      <div class="bg-dark py-3">
        <div class="container">
          <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="home" class="text-light">Home</a>
                  </li>
                  <li
                    class="breadcrumb-item active theme-cl"
                    aria-current="page"
                  >
                    Error Page
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- ======================= Top Breadcrubms ======================== -->

      <!-- ======================= Product Detail ======================== -->
      <section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
              <!-- Icon -->
              <div class="">
                <img
                  src="assets/images/qghSZ1Wy1678955732.png"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <!-- Heading -->
              <h1 class="mb-3 ft-bold">Whoops! That page doesn’t exist.</h1>
              <!-- Text -->
              <h5 class="ft-medium fs-md mb-5">
                The page you requested could not be found&lt;br&gt;
              </h5>
              <!-- Button -->
              <a class="btn rounded theme-bg text-light" href="home"
                >Go To Home Page</a
              >
            </div>
          </div>
        </div>
      </section>
      <!-- ======================= Product Detail End ======================== -->

      <!-- ======================= Newsletter Start ============================ -->

      <!-- ======================= Newsletter Start ============================ -->

      <a id="back2Top" class="top-scroll" title="Back to top" href="#"
        ><i class="ti-arrow-up"></i
      ></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <div class="cookie-bar-wrap show js-cookie-consent cookie-consent">
      <div class="container d-flex justify-content-center">
        <div class="col-xl-10 col-lg-12">
          <div class="row justify-content-center">
            <div class="cookie-bar">
              <div
                class="cookie-bar-action js-cookie-consent-agree cookie-consent__agree"
              >
                <button class="btn btn-accept btn btn-danger border text-white">
                  Allow Cookies
                </button>
              </div>
              <div class="cookie-bar-text cookie-consent__message">
                <p>
                  Your experience on this site will be improved by allowing
                  cookies.<br />
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      window.laravelCookieConsent = (function () {
        const COOKIE_VALUE = 1;
        const COOKIE_DOMAIN = "";

        function consentWithCookies() {
          setCookie("laravel_cookie_consent", COOKIE_VALUE, 7300);
          hideCookieDialog();
        }

        function cookieExists(name) {
          return (
            document.cookie.split("; ").homeOf(name + "=" + COOKIE_VALUE) !== -1
          );
        }

        function hideCookieDialog() {
          const dialogs = document.getElementsByClassName("js-cookie-consent");

          for (let i = 0; i < dialogs.length; ++i) {
            dialogs[i].style.display = "none";
          }
        }

        function setCookie(name, value, expirationInDays) {
          const date = new Date();
          date.setTime(date.getTime() + expirationInDays * 24 * 60 * 60 * 1000);
          document.cookie =
            name +
            "=" +
            value +
            ";expires=" +
            date.toUTCString() +
            ";domain=" +
            COOKIE_DOMAIN +
            ";path=/" +
            "";
        }

        if (cookieExists("laravel_cookie_consent")) {
          hideCookieDialog();
        }

        const buttons = document.getElementsByClassName(
          "js-cookie-consent-agree"
        );

        for (let i = 0; i < buttons.length; ++i) {
          buttons[i].addEventListener("click", consentWithCookies);
        }

        return {
          consentWithCookies: consentWithCookies,
          hideCookieDialog: hideCookieDialog,
        };
      })();
    </script>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/front/js/jquery.min.js"></script>
    <script src="assets/front/js/bootstrap.min.js"></script>
    <script src="assets/front/js/popper.min.js"></script>
    <script src="assets/front/js/summernote.js"></script>
    <script src="assets/front/js/slick.js"></script>
    <script src="assets/front/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/front/js/dropzone.js"></script>
    <script src="assets/front/js/counterup.js"></script>
    <script src="assets/front/js/lightbox.js"></script>
    <script src="assets/front/js/moment.min.js"></script>
    <script src="assets/front/js/daterangepicker.js"></script>
    <script src="assets/front/js/lightbox.js"></script>
    <script src="assets/front/js/jQuery.style.switcher.js"></script>
    <script src="assets/front/js/toastr.min.js"></script>
    <script src="assets/front/js/mdtimepicker.js"></script>
    <script src="assets/admin/js/tagify.js"></script>
    <script src="assets/front/js/custom.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <script>
      "use strict";
      let mainurl = "home";
      let tawkto = "1";
    </script>

    <script type="text/javascript">
      if (tawkto == 1) {
        var Tawk_API = Tawk_API || {},
          Tawk_LoadStart = new Date();
        (function () {
          var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
          s1.async = true;
          s1.src = "https://embed.tawk.to/62305c801ffac05b1d7ea682/1fv7b1dso";
          s1.charset = "UTF-8";
          s1.setAttribute("crossorigin", "*");
          s0.parentNode.insertBefore(s1, s0);
        })();
      }
    </script>

    <script>
      "use strict";
    </script>
  </body>
</html>
