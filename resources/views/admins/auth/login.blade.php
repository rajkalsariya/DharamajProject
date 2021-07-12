<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dharamj Admin Login</title>
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
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <a href="/" class="logo float-left">
                <img src="{{ asset('admin/img/logo/logo.png') }}" height="54" alt="Porto Admin" />
            </a>

            <div class="panel card-sign">
                <div class="card-title-sign mt-3 text-right">
                    <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign In</h2>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        <p>{{ session('status') }}</p>
                    </div>
                    @endif
                    <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <input id="email" name="email" type="email" class="form-control form-control-lg" :value="old('email')" required autofocus />
                                <span class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="clearfix">
                                <label for="password" class="float-left">Password</label>
                                <a href="{{ route('password.request') }}" class="float-right">Lost Password?</a>
                            </div>
                            <div class="input-group">
                                <input id="password" name="password" type="password" class="form-control form-control-lg" required autocomplete="current-password" />
                                <span class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" name="remember" type="checkbox" />
                                    <label for="RememberMe">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button type="submit" class="btn btn-primary mt-2">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- end: page -->

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

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('admin/js/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('admin/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('admin/js/theme.init.js') }}"></script>

</body>

</html>