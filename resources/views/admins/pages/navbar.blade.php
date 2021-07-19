<!-- start: header nav menu -->
<div class="header-nav collapse">
    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">
        <nav>
            <ul class="nav nav-pills" id="mainNav">
                <li class="active">
                    <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                        Dashboard
                    </a>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li class="@yield('categories')">
                            <a class="nav-link" href="{{ route('admin.categories') }}">
                                Categories
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a class="nav-link" href="{{ route('admin.gallery') }}">
                        Gallery
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- end: header nav menu -->