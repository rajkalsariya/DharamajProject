<div class="site-header__header-one-wrap clearfix">

    <div class="header_top_one">
        <div class="header_top_one_container">
            <div class="header_top_one_inner clearfix">

                <div class="header_top_one_inner_left float-left">
                    <div class="header_social_1">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                            <li><a href="#"><i class="fab fa-facebook-square"></i>Facebook</a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i>Pinterest</a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i>Youtube</a></li>
                        </ul>
                    </div>
                </div>

                <div class="header_top_one_inner_right float-right">
                    <div class="header_topmenu_1">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('user.login_register') }}"><i class="fas fa-user"></i>Sign in or Register</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <header class="main-nav__header-one">
        <nav class="header-navigation one stricky">
            <div class="container-box clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="main-nav__left main-nav__left_one float-left">
                    <div class="logo_one">
                        <a href="{{ url('/') }}" class="main-nav__logo">
                            <img src="assets/images/resources/logo.png" class="main-logo" alt="Awesome Image">
                        </a>
                    </div>
                    <a href="#" class="side-menu__toggler">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <div class="main-nav__main-navigation one float-left">
                    <ul class=" main-nav__navigation-box">
                        <li class="current">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="main-nav__right main-nav__right_one float-right">

                    <div class="header_btn_1">
                        <a href="{{ url('/dashboard') }}"><span class="icon-add"></span>Add listings</a>
                    </div>
                    <!-- <div class="icon-search-box">
                                <a href="#" class="main-nav__search search-popup__toggler">
                                    <i class="icon-magnifying-glass"></i>
                                </a>
                            </div> -->
                </div>

            </div>
        </nav>
    </header>
</div>