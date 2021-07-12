<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                <ul class="nav nav-main">
                    <li class="nav-active">
                        <a class="nav-link" href="{{ url('dashboard') }}">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <span>Matrimony</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route('user.matrimony') }}">
                                    Add Matrimony
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('user.matrimonylist') }}">
                                    Matrimony List
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fab fa-adversal" aria-hidden="true"></i>
                            <span>Advertisement</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route('user.advertisement') }}">
                                    Add Advertisement
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('user.advertisementlist') }}">
                                    Advertisement List
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-cogs" aria-hidden="true"></i>
                            <span>Services</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route('user.services') }}">
                                    Add Services
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('user.serviceslist') }}">
                                    Services List
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-briefcase" aria-hidden="true"></i>
                            <span>Job</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="nav-parent">
                                <a class="nav-link" href="#">Job Find</a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ route('user.jobfind') }}">
                                            Add Job Find
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('user.jobfindlist') }}">
                                            Job Find List
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    Job Post
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ route('user.jobpost') }}">
                                            Add Job
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('user.jobpostlist') }}">
                                            Job List
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>


    </div>

</aside>