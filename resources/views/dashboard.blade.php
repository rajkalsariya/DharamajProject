@php
$user = DB::table('users')->where('id', Auth::id())->first();
@endphp

<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dashboard</title>
    <meta name="keywords" content="Dharamaj Admin Dashboard" />
    <meta name="description" content="Dharamaj Admin Dashboard">
    <meta name="author" content="Dharamaj">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/animate/animate.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/jquery-ui/jquery-ui.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/morris/morris.css') }}" />

    @yield('css')

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}" />

    <!-- Head Libs -->
    <script src="{{ asset('admin/vendor/modernizr/modernizr.js') }}"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="../2.2.0" class="logo">
                    <img src="img/logo.png" width="75" height="35" alt="Porto Admin" />
                </a>
                <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">
                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="{{ (!empty($user->photo))? url('upload/user_profile_image/'.$user->photo): url('upload/user_profile_image.png') }}" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name">{{ $user->name }}</span>
                            <span class="role">User</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled mb-2">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="{{ route('user.profile') }}"><i class="fas fa-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="{{ route('user.logout') }}"><i class="fas fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            @include('layouts.navbar.navbar')
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Dashboard</h2>
                </header>

                <!-- start: page -->
                @yield('userdashboard')
                <!-- end: page -->
            </section>
        </div>

    </section>

    <!-- Vendor -->
    <script src="{{ asset('admin/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('admin/vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('admin/vendor/common/common.js') }}"></script>
    <script src="{{ asset('admin/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('admin/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    @yield('script')

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('admin/js/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('admin/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('admin/js/theme.init.js') }}"></script>

    <!-- Examples -->
    <script src="{{ asset('admin/js/examples/examples.dashboard.js') }}"></script>

</body>

</html>