<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="{{ asset('frontend/css/slick-theme.css') }}" rel="stylesheet">
    <!-- ICONS CSS -->
    <link href="{{ asset('frontend/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/fontawesome.css') }}" rel="stylesheet">
    <!-- ICONS CSS -->
    <link href="{{ asset('frontend/css/animation.css') }}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{ asset('frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{ asset('frontend/css/component.css') }}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{ asset('frontend/css/jquery.bxslider.css') }}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{ asset('frontend/css/style5.css') }}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{ asset('frontend/css/demo.css') }}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{ asset('frontend/css/fig-hover.css') }}" rel="stylesheet">
    <!-- Typography CSS -->
    <link href="{{ asset('frontend/css/typography.css') }}" rel="stylesheet">
    <link href="{{asset('frontend/css/sidebar-widget.css')}}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{ asset('frontend/style.css') }}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{ asset('frontend/css/component.css') }}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{ asset('frontend/css/shotcode.css') }}" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="{{ asset('frontend/svg-icon.css') }}" rel="stylesheet">
    <!-- Color CSS -->
    <link href="{{ asset('frontend/css/color.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <!-- FEVICON ICON -->
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('frontend/images/favicon-96x96.png')}}">
</head>

<body class="demo-5">
<div class="exapmle"></div>
    <!--WRAPPER START-->
    <div class="wrapper">
        <!--CITY TOP NAVIGATION START-->
        @include('layouts.frontend.navbar.navbar')
        <!--CITY TOP NAVIGATION END-->


        <!--CITY MAIN BANNER START-->

        <!--CITY MAIN BANNER END-->

        <!-- CITY MAIN CONTENT START -->
        @yield('frontend')
        <!-- CITY MAIN CONTENT END -->

        <footer>
            <div class="widget_wrap overlay">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-md-3 col-sm-3">
                            <div class="widget_list">
                                <h4 class="widget_title">Explore</h4>
                                <div class="widget_service">
                                    <ul>
                                        <li><a href="#">Online Services</a></li>
                                        <li><a href="#">Residents</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Government</a></li>
                                        <li><a href="#">Visiting</a></li>
                                        <li><a href="#">Employment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="widget_list">
                                <h4 class="widget_title">Features</h4>
                                <div class="widget_service">
                                    <ul>
                                        <li><a href="#">Online Services</a></li>
                                        <li><a href="#">Residents</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Government</a></li>
                                        <li><a href="#">Visiting</a></li>
                                        <li><a href="#">Employment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="widget_list">
                                <h4 class="widget_title">Services</h4>
                                <div class="widget_service">
                                    <ul>
                                        <li><a href="#">Online Services</a></li>
                                        <li><a href="#">Residents</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Government</a></li>
                                        <li><a href="#">Visiting</a></li>
                                        <li><a href="#">Employment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="widget_list">
                                <h4 class="widget_title">Find Us</h4>
                                <div class="widget_text">
                                    <ul>
                                        <li><a href="#">2307 Beverley Rd</a></li>
                                        <li><a href="#">Brooklyn, New York 11226</a></li>
                                        <li><a href="#">United States.</a></li>
                                    </ul>
                                    <p>Open Monday to Saturday From 7h to 18h or talk to an expert 0712-0610-3314 –
                                        available 24/7</p>
                                </div>
                            </div>
                        </div> -->
                        <div class="widget_copyright">
                            <div class="col-md-3 col-sm-6">
                                <div class="widget_logo">
                                    <a href="#"><img src="{{asset('frontend/images/dharmaj_logo.png')}}" alt="" style="width: 95px;"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="copyright_text">
                                    <p><span>Copyright © Gam Panchayat Dharmaj</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="city_top_social social__icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!--WRAPPER END-->
    <!--Jquery Library-->
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <!--Bootstrap core JavaScript-->
    <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
    <!-- Font Awsesome Javascript -->
    <script src="{{ asset('frontend/js/fontawesome.js') }}"></script>
    <!--Slick Slider JavaScript-->
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <!--Pretty Photo JavaScript-->
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <!--Pretty Photo JavaScript-->
    <script src="{{ asset('frontend/js/jquery.bxslider.min.js') }}"></script>
    <!--Pretty Photo JavaScript-->
    <script src="{{ asset('frontend/js/index.js') }}"></script>
    <!--Pretty Photo JavaScript-->
    <script src="{{ asset('frontend/js/modernizr.custom.js') }}"></script>
    <!--Pretty Photo JavaScript-->
    <script src="{{ asset('frontend/js/jquery.dlmenu.js') }}"></script>
    <!--Pretty Photo JavaScript-->
    <script src="{{ asset('frontend/js/downCount.js') }}"></script>
    <!--Counter up JavaScript-->
    <script src="{{ asset('frontend/js/waypoints.js') }}"></script>
    <!--Pretty Photo JavaScript-->
    <script src="{{ asset('frontend/js/waypoints-sticky.js') }}"></script>

    <!--Custom JavaScript-->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

</body>

</html>