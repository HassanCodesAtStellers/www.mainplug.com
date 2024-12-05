<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta
    name="csrf-token"
    content="qv6gWPmfdeXQ2V8S6uEnoLl0gFC5FDq4gHLNzWeg" />
  <title>MainPlug.com</title>

  <link href="assets/front/css/styles.css" rel="stylesheet" />
  <link
    rel="stylesheet"
    href="assets/front/css/stylese28a.css?color=f41b3b" />

  <link
    href="https://fonts.googleapis.com/css?family=Jost&amp;display=swap"
    rel="stylesheet" />

  <link
    rel="stylesheet"
    id="colorr"
    href="assets/front/css/font1ca8.css?font_familly=Jost" />

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
      "></div>

  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <?php include("includes/Navbar.php") ?>

    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ======================= Login Detail ======================== -->
    <section class="gray">
      <div class="container">
        <div class="row align-items-start justify-content-center">
          <div class="col-xl-5 col-lg-8 col-md-12">
            <div class="signup-screen-wrap">
              <div class="signup-screen-single">
                <div class="text-center mb-4">
                  <h4 class="m-0 ft-medium">Login Your Account</h4>
                </div>

                <form
                  class="submit-form"
                  id="loginform"
                  action="home/user/login"
                  method="POST">
                  <div
                    class="alert alert-success alert-dismissible"
                    style="display: none">
                    <p class="m-0"></p>
                  </div>

                  <div
                    class="alert alert-danger alert-dismissible"
                    style="display: none"
                    role="alert">
                    <p class="m-0"></p>
                  </div>

                  <input
                    type="hidden"
                    name="_token"
                    value="qv6gWPmfdeXQ2V8S6uEnoLl0gFC5FDq4gHLNzWeg" />
                  <div class="form-group">
                    <label class="mb-1">Your Email</label>
                    <input
                      type="email"
                      name="email"
                      class="form-control rounded"
                      placeholder="Email*"
                      value="user@gmail.com" />
                  </div>

                  <div class="form-group">
                    <label class="mb-1">Password</label>
                    <input
                      type="password"
                      name="password"
                      class="form-control rounded"
                      placeholder="Password*"
                      value="123456" />
                  </div>

                  <div class="form-group">
                    <div
                      class="d-flex align-items-center justify-content-between">
                      <div class="flex-1">
                        <input
                          id="dd"
                          class="checkbox-custom"
                          name="remember"
                          type="checkbox" />
                        <label for="dd" class="checkbox-custom-label">Remember Me</label>
                      </div>
                      <div class="eltio_k2">
                        <a href="forgot" class="theme-cl">Lost Your Password?</a>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button
                      type="submit"
                      class="btn btn-md full-width theme-bg text-light rounded ft-medium">
                      Sign In
                      <div
                        class="spinner-border formSpin"
                        role="status"></div>
                    </button>
                  </div>

                  <div class="form-group text-center mt-4 mb-0">
                    <p class="mb-0">
                      You Don't have any account?
                      <a href="register" class="ft-medium text-success">Sign Up</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======================= Login End ======================== -->

    <!-- ======================= Newsletter Start ============================ -->

    <!-- ======================= Newsletter Start ============================ -->

    <!-- ============================ Footer Start ================================== -->
    <footer class="light-footer skin-light-footer style-2">
      <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
              <div class="footer_widget">
                <img
                  src="assets/images/mainplug-logo.png"
                  class="img-footer small mb-2"
                  alt="" />

                <div class="address mt-2">
                  New York, NY, United States of America, USA
                </div>
                <div class="address mt-3">
                  +00 000 000 0000<br />demo@example.com
                </div>
                <div class="address mt-2">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="https://twitter.com/" class="theme-cl">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.facebook.com/" class="theme-cl">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12">
              <div class="footer_widget">
                <h4 class="widget_title">Main Navigation</h4>
                <ul class="footer-menu">
                  <li><a href="listing">Explore Listings</a></li>
                  <li><a href="pricing-plans">Pricing Plan</a></li>
                  <li><a href="blogs">Blogs</a></li>
                  <li><a href="contact">Contact</a></li>
                </ul>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12">
              <div class="footer_widget">
                <h4 class="widget_title">Helpful Topics</h4>
                <ul class="footer-menu">
                  <li><a href="about">About Us</a></li>
                  <li><a href="privacy">Privacy &amp; Policy</a></li>
                  <li><a href="support">Support</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom br-top">
        <div class="container">
          <p class="mb-0">© 2024. All Rights Reserved</p>

          <div class="footer-links">
            <p class="mb-0"><i class="fas fa-globe"></i>English</p>
            <p class="mb-0"><i class="fas fa-dollar-sign"></i>USD</p>

            <div class="footer-socials">
              <a href="https://www.facebook.com/">
                <i class="fab fa-facebook-f"></i></a>
              <a href="https://www.x.com/"><i class="fab fa-instagram"></i></a>
              <a href="https://www.instagram.com/"><i class="fab fa-twitter"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="fas fa-arrow-up"></i></a>
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
              class="cookie-bar-action js-cookie-consent-agree cookie-consent__agree">
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
    window.laravelCookieConsent = (function() {
      const COOKIE_VALUE = 1;
      const COOKIE_DOMAIN = "";

      function consentWithCookies() {
        setCookie("laravel_cookie_consent", COOKIE_VALUE, 7300);
        hideCookieDialog();
      }

      function cookieExists(name) {
        return (
          document.cookie.split("; ").homeOf(name + "=" + COOKIE_VALUE) !==
          -1
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
      (function() {
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

  <script>
    let icon = document.querySelector(".icon")

    icon.addEventListener("click", function(e) {
      icon.classList.toggle("ac")
    })

    $(document).ready(function() {
      $('.icon').click(function() {
        if ($('.navbar-menu-dropdown').css('display') === 'none') {
          $('.navbar-menu-dropdown').css('display', 'block'); // Show the element
        } else {
          $('.navbar-menu-dropdown').css('display', 'none'); // Hide the element
        }
      });
    });
  </script>
</body>

</html>