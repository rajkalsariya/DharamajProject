<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/ziston/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jul 2021 14:56:44 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.html') }}">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&amp;display=swap" rel="stylesheet">

    <!-- Css-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.pips.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ziston-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ziston-new-icons.css') }}">
    <!-- Template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>

    <div class="preloader">
        <img src="assets/images/loader.png" class="preloader__image" alt="">
    </div><!-- /.preloader -->

    <div class="page-wrapper">


        @include('layouts.frontend.navbar.navbar')

        @yield('frontend')

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site_footer_shape-1" style="background-image: url(assets/images/resources/footer-shape-1.png)">
            </div>
            <div class="site_footer_map" style="background-image: url(assets/images/resources/footer-map.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget__column footer-widget__about wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__logo">
                                <a href="#"><img src="assets/images/resources/footer-logo.png" alt=""></a>
                            </div>
                            <div class="footer-widget_about_text">
                                <p>Lorem ipsum dolor sit amet, consect etur adi pisicing elit sed do eiusmod tempor
                                    incididunt ut labore.</p>
                            </div>
                            <div class="footer_contact_info">
                                <div class="footer_contact_icon">
                                    <span class="icon-calling"></span>
                                </div>
                                <div class="footer_contact_number">
                                    <p>Phone</p>
                                    <h4><a href="tel:+123456789">92 666 888 0000</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-widget__column footer-widget__explore wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__title">
                                <h3>Explore</h3>
                            </div>
                            <ul class="footer-widget__explore-list list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#"> My Account</a></li>
                                <li><a href="#">My Listings</a></li>
                                <li><a href="#">Pricing Packages</a></li>
                                <li><a href="#">User Dashboard</a></li>
                                <li><a href="#">Bookmarks</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-widget__column footer-widget__categories wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__title">
                                <h3>Categories</h3>
                            </div>
                            <ul class="footer-widget__categories_list list-unstyled">
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#">Culture</a></li>
                                <li><a href="#">Shopping</a></li>
                                <li><a href="#">Beauty</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Hospitals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget__column footer-widget__newsletter wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__title">
                                <h3>Newsletter</h3>
                            </div>
                            <ul class="footer-widget_newsletter_address list-unstyled">
                                <li>88 Broklyn Golden Street, New York. USA</li>
                                <li><a href="mailto:needhelp@ziston.com">needhelp@ziston.com</a></li>
                            </ul>
                            <form>
                                <div class="footer_input-box">
                                    <input type="Email" placeholder="Enter email address">
                                    <button type="submit" class="button"><i class="fas fa-paper-plane"></i>Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="site-footer_bottom">
            <div class="container">
                <div class="site-footer_bottom_copyright">
                    <p>© Copyright 2020 by <a href="#">Layerdrops.com</a></p>
                </div>
                <div class="site-footer__social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <div class="side-menu__block">
        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">
                <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="assets/images/shapes/close-1-1.png" alt=""></a>
            </div><!-- /.side-menu__top -->

            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>

            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->

            <div class="side-menu__content">
                <p><a href="mailto:needhelp@tripo.com">needhelp@ziston.com</a> <br> <a href="tel:888-999-0000">888 999
                        0000</a></p>
                <div class="side-menu__social">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>



    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/typed-2.0.11.js') }}"></script>
    <script src="{{ asset('assets/js/vegas.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>


    <!-- template scripts -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>


</body>

</html>