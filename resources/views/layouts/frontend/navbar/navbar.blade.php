<header>
    <!--CITY TOP WRAP START-->
    <div class="city_top_wrap">
        <div class="container-fluid">
            <div class="city_top_logo justify-content-center d-flex">
                <figure>
                    <h1><a href="{{ url('/') }}"><img src="{{asset('frontend/images/dharmaj_logo.png')}}" alt="dharmaj" style="width: 97px;"></a></h1>
                </figure>
            </div>
            <div class="city_top_social">
                <ul>
                    @auth
                    <li>
                        <a class="top_user" href="{{ url('/dashboard') }}"><i class="fa fa-user"></i> Dashboard</a>
                    </li>
                    <li>
                        <a class="top_user" href="{{ route('user.logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                    @else
                    <li>
                        <a class="top_user" href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                    </li>
                    <li>
                        <a class="top_user" href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Register</a>
                    </li>
                    @endauth
                </ul>
            </div>

        </div>
    </div>
    <!--CITY TOP WRAP END-->

    <!--CITY TOP NAVIGATION START-->
    <div class="city_top_navigation">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="navigation">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="javascript:void(0)">About</a>
                                <ul class="child">
                                    <li><a href="{{ url('/history') }}">History</a></li>
                                    <li><a href="javascript:void(0)">Bank/Institutes</a></li>
                                    <li><a href="{{ url('/team') }}">Team</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Services</a>
                                <ul class="child">
                                    <li><a href="{{ url('/service/classified') }}">Classify</a></li>
                                    <li><a href="{{ url('/service/matrimony') }}">Matrimony</a></li>
                                    <li><a href="{{ url('/service/government') }}">Government</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Event</a>
                            </li>
                            <li><a href="{{ url('/gallery') }}">Gallery</a>
                            </li>
                            <li><a href="#">News</a>
                            </li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <!--DL Menu Start-->
                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li><a class="active" href="index-2.html">Home</a></li>
                            <li class="menu-item kode-parent-menu"><a href="#">Services</a>
                                <ul class="dl-submenu">
                                    <li><a href="service.html">Services</a></li>
                                    <li><a href="service-02.html">Services 02</a></li>
                                    <li><a href="service-detail.html">Services detail</a></li>
                                    <li><a href="service-detail2.html">Services detail 02</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">Government</a>
                                <ul class="dl-submenu">
                                    <li><a href="team.html">team</a></li>
                                    <li><a href="mayor.html">mayor</a></li>
                                    <li><a href="goverment.html">goverment</a></li>
                                    <li><a href="goverment-grid.html">goverment grid</a></li>
                                    <li><a href="health-department.html">health department</a></li>
                                    <li><a href="health-department02.html">health department 02 </a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">business</a>
                                <ul class="dl-submenu">
                                    <li><a href="business.html">business</a></li>
                                    <li><a href="business-detail.html">business detail</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">Resident</a>
                                <ul class="dl-submenu">
                                    <li><a href="resident.html">Resident</a></li>
                                    <li><a href="resident-detail.html">Resident detail</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">feature</a>
                                <ul class="dl-submenu">
                                    <li><a href="#">blog</a>
                                        <ul class="dl-submenu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-list.html">blog list</a></li>
                                            <li><a href="blog-detail.html">blog detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">forum</a>
                                        <ul class="dl-submenu">
                                            <li><a href="forum.html">forum</a></li>
                                            <li><a href="forum-01.html">forum 01</a></li>
                                            <li><a href="forum-detail.html">forum detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">project</a>
                                        <ul class="dl-submenu">
                                            <li><a href="project.html">project</a></li>
                                            <li><a href="project-01.html">project 01</a></li>
                                            <li><a href="project-detail.html">project detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="error.html">404 page</a></li>
                                    <li><a href="coming-soon.html">coming soon</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">New & Event</a>
                                <ul class="dl-submenu">
                                    <li><a href="#">event</a>
                                        <ul class="dl-submenu">
                                            <li><a href="event.html">event</a></li>
                                            <li><a href="event-01.html">event 01</a></li>
                                            <li><a href="event-02.html">event 02</a></li>
                                            <li><a href="event-detail.html">event detail</a></li>
                                            <li><a href="event-listing.html">event listing</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">news</a>
                                        <ul class="dl-submenu">
                                            <li><a href="news.html">news page</a></li>
                                            <li><a href="news-post.html">news post</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <!--DL Menu END-->
                </div>
                <div class="col-md-3">
                    <div class="city_top_form navigation">
                        <ul>
                            <li><a href="{{ url('/job') }}">Job</a></li>
                            <li><a href="#">Polling</a></li>
                            <li><a href="#">Donaction</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CITY TOP NAVIGATION END-->

    <!--CITY TOP NAVIGATION START-->
    <div class="city_top_navigation hide">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="navigation">
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="#">Services</a>
                                <ul class="child">
                                    <li><a href="service.html">Services</a></li>
                                    <li><a href="service-02.html">Services 02</a></li>
                                    <li><a href="service-detail.html">Services detail</a></li>
                                    <li><a href="service-detail2.html">Services detail 02</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Government</a>
                                <ul class="child">
                                    <li><a href="team.html">team</a></li>
                                    <li><a href="mayor.html">mayor</a></li>
                                    <li><a href="goverment.html">goverment</a></li>
                                    <li><a href="goverment-grid.html">goverment grid</a></li>
                                    <li><a href="health-department.html">health department</a></li>
                                    <li><a href="health-department02.html">health department 02 </a></li>
                                </ul>
                            </li>
                            <li><a href="#">business</a>
                                <ul class="child">
                                    <li><a href="business.html">business</a></li>
                                    <li><a href="business-detail.html">business detail</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Resident</a>
                                <ul class="child">
                                    <li><a href="resident.html">Resident</a></li>
                                    <li><a href="resident-detail.html">Resident detail</a></li>
                                </ul>
                            </li>
                            <li><a href="#">feature</a>
                                <ul class="child">
                                    <li><a href="#">blog</a>
                                        <ul class="child">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-list.html">blog list</a></li>
                                            <li><a href="blog-detail.html">blog detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">forum</a>
                                        <ul class="child">
                                            <li><a href="forum.html">forum</a></li>
                                            <li><a href="forum-01.html">forum 01</a></li>
                                            <li><a href="forum-detail.html">forum detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">project</a>
                                        <ul class="child">
                                            <li><a href="project.html">project</a></li>
                                            <li><a href="project-01.html">project 01</a></li>
                                            <li><a href="project-detail.html">project detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="error.html">404 page</a></li>
                                    <li><a href="coming-soon.html">coming soon</a></li>
                                </ul>
                            </li>
                            <li><a href="#">New & Event</a>
                                <ul class="child">
                                    <li><a href="#">event</a>
                                        <ul class="child">
                                            <li><a href="event.html">event</a></li>
                                            <li><a href="event-01.html">event 01</a></li>
                                            <li><a href="event-02.html">event 02</a></li>
                                            <li><a href="event-detail.html">event detail</a></li>
                                            <li><a href="event-listing.html">event listing</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">news</a>
                                        <ul class="child">
                                            <li><a href="news.html">news page</a></li>
                                            <li><a href="news-post.html">news post</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <!--DL Menu Start-->
                    <div id="kode-responsive-navigation1" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li><a class="active" href="index-2.html">Home</a></li>
                            <li class="menu-item kode-parent-menu"><a href="#">Services</a>
                                <ul class="dl-submenu">
                                    <li><a href="service.html">Services</a></li>
                                    <li><a href="service-02.html">Services 02</a></li>
                                    <li><a href="service-detail.html">Services detail</a></li>
                                    <li><a href="service-detail2.html">Services detail 02</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">Government</a>
                                <ul class="dl-submenu">
                                    <li><a href="team.html">team</a></li>
                                    <li><a href="mayor.html">mayor</a></li>
                                    <li><a href="goverment.html">goverment</a></li>
                                    <li><a href="goverment-grid.html">goverment grid</a></li>
                                    <li><a href="health-department.html">health department</a></li>
                                    <li><a href="health-department02.html">health department 02 </a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">business</a>
                                <ul class="dl-submenu">
                                    <li><a href="business.html">business</a></li>
                                    <li><a href="business-detail.html">business detail</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">Resident</a>
                                <ul class="dl-submenu">
                                    <li><a href="resident.html">Resident</a></li>
                                    <li><a href="resident-detail.html">Resident detail</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">feature</a>
                                <ul class="dl-submenu">
                                    <li><a href="#">blog</a>
                                        <ul class="dl-submenu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-list.html">blog list</a></li>
                                            <li><a href="blog-detail.html">blog detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">forum</a>
                                        <ul class="dl-submenu">
                                            <li><a href="forum.html">forum</a></li>
                                            <li><a href="forum-01.html">forum 01</a></li>
                                            <li><a href="forum-detail.html">forum detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">project</a>
                                        <ul class="dl-submenu">
                                            <li><a href="project.html">project</a></li>
                                            <li><a href="project-01.html">project 01</a></li>
                                            <li><a href="project-detail.html">project detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="error.html">404 page</a></li>
                                    <li><a href="coming-soon.html">coming soon</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="#">New & Event</a>
                                <ul class="dl-submenu">
                                    <li><a href="#">event</a>
                                        <ul class="dl-submenu">
                                            <li><a href="event.html">event</a></li>
                                            <li><a href="event-01.html">event 01</a></li>
                                            <li><a href="event-02.html">event 02</a></li>
                                            <li><a href="event-detail.html">event detail</a></li>
                                            <li><a href="event-listing.html">event listing</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">news</a>
                                        <ul class="dl-submenu">
                                            <li><a href="news.html">news page</a></li>
                                            <li><a href="news-post.html">news post</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <!--DL Menu END-->
                </div>
                <div class="col-md-3">
                    <div class="city_top_form">
                        <div class="city_top_search">
                            <input type="text" placeholder="Search">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                        <a class="top_user" href="login.html"><i class="fa fa-user"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CITY TOP NAVIGATION END-->
</header>