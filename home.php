<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="" />
    <?php include("includes/Head.php") ?>
    <title>MainPlug.com</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <div class="preloader" id="preloader" style=" background: url(assets/images/preloader.gif) no-repeat scroll center center #fff;"></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Top header start -->

        <!-- ============================================================== -->
        <!-- Start Navigation -->

        <?php include("includes/Navbar.php") ?>

        <?php include("includes/Category_Menu.php") ?>

        <?php include("includes/Home_Listing.php") ?>

        <?php include('includes/Footer.php') ?>

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="fas fa-arrow-up"></i></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->



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
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 4000,
                nav: false,
                smartSpeed: 800,
                animateOut: "fadeOut",
                animateIn: "fadeIn",
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    },
                },
            });
        });


        "use strict";
        let mainurl = "home";
        let tawkto = "1";

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

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $(document).on("click", ".wishList", function() {
            let $this = $(this);
            let listingId = $(this).data("listing");
            let userId = $(this).data("user");
            if (userId == "") {
                window.location.href = mainurl + "/user/login";
            }

            $.ajax({
                method: "POST",
                url: mainurl + "/listing/wishlist",
                data: {
                    listing_id: listingId,
                    user_id: userId,
                },
                success: function(data) {
                    if (data.success) {
                        $this.children().prop("class", "");
                        $this
                            .children()
                            .prop("class", "lni lni-heart-filled  position-absolute");
                        toastr.success(data.success);
                    } else {
                        $this.children().prop("class", "");
                        $this
                            .children()
                            .prop("class", "lni lni-heart  position-absolute");
                        toastr.error(data.error);
                    }
                },
            });
        });

        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = "";
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === "") {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName("typewrite");
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute("data-type");
                var period = elements[i].getAttribute("data-period");
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
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