@extends('master')

@section('title')
Dharamj
@endsection

@section('frontend')

<!-- SAB BANNER START-->
<div class="sab_banner overlay">
    <div class="container">
        <div class="sab_banner_text">
            <h2>History</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">History</li>
            </ul>
        </div>
    </div>
</div>
<!-- SAB BANNER END-->

<!-- CITY VISIT WRAP START-->
<div class="city_visit_wrap" style="padding: 100px 0px 0px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="city_visit_fig">
                    <figure class="box">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{asset('frontend/img/history/mahadev.jpg')}}" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="city_visit_text">
                    <h3>Dharmeshwar</h3>
                    <h3>Mahadev Mandir</h3>
                    <p><i>Proin gravida nibh vel velit auctor aliquet Aenean <br>sollicitudin, </i></p>
                    <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec <br>sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate<br> cursus a sit amet mauris. </p>
                    <a class="theam_btn border-color color" href="{{ url('/history/details') }}" tabindex="0">Explore More</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="city_visit_text text2">
                    <h3>Dharmeshwar</h3>
                    <h3>Mahadev Mandir</h3>
                    <p><i>Proin gravida nibh vel velit auctor aliquet Aenean <br>sollicitudin, </i></p>
                    <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec <br>sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate<br> cursus a sit amet mauris. </p>
                    <a class="theam_btn border-color color" href="{{ url('/history/details') }}" tabindex="0">Explore More</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="city_visit_fig">
                    <figure class="box">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{asset('frontend/img/history/mahadev2.jpg')}}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CITY VISIT WRAP END-->

<!--CITY AWARD WRAP START-->
<div class="city_award_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="city_award_list">
                    <div class="city_award_text special_service_text">
                        <h3>Dharmaj Day Celebration</h3>
                        <a class="theam_btn border-color color">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--CITY AWARD WRAP END-->

<!-- CITY EVENT2 WRAP START-->
<div class="city_blog2_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="city_project_fig fig2">
                    <figure class="overlay">
                        <img src="{{asset('frontend/extra-images/project-fig01.jpg')}}" alt="">
                        <div class="city_project_text">
                            <span><i class="fa icon-plastic"></i></span>
                            <a href="#" tabindex="-1">Citizen Program</a>
                            <h4><a href="#" tabindex="-1">Government vows to prioritize local contractors in</a></h4>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="city_project_fig fig2">
                    <figure class="overlay">
                        <img src="{{asset('frontend/extra-images/project-fig02.jpg')}}" alt="">
                        <div class="city_project_text">
                            <span><i class="fa icon-sun"></i></span>
                            <a href="#" tabindex="-1">Citizen Program</a>
                            <h4><a href="#" tabindex="-1">Government vows to prioritize local contractors in</a></h4>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="city_project_fig fig2">
                    <figure class="overlay">
                        <img src="{{asset('frontend/extra-images/project-fig03.jpg')}}" alt="">
                        <div class="city_project_text">
                            <span><i class="fa icon-partner"></i></span>
                            <a href="#" tabindex="-1">Citizen Program</a>
                            <h4><a href="#" tabindex="-1">Government vows to prioritize local contractors in</a></h4>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="city_project_fig fig2">
                    <figure class="overlay">
                        <img src="{{asset('frontend/extra-images/project-fig04.jpg')}}" alt="">
                        <div class="city_project_text">
                            <span><i class="fa icon-calendar"></i></span>
                            <a href="#" tabindex="-1">Citizen Program</a>
                            <h4><a href="#" tabindex="-1">Government vows to prioritize local contractors in</a></h4>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="city_project_fig fig2">
                    <figure class="overlay">
                        <img src="{{asset('frontend/extra-images/project-fig05.jpg')}}" alt="">
                        <div class="city_project_text">
                            <span><i class="fa icon-nuclear"></i></span>
                            <a href="#" tabindex="-1">Citizen Program</a>
                            <h4><a href="#" tabindex="-1">Government vows to prioritize local contractors in</a></h4>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="city_project_fig fig2">
                    <figure class="overlay">
                        <img src="{{asset('frontend/extra-images/project-fig06.jpg')}}" alt="">
                        <div class="city_project_text">
                            <span><i class="fa icon-research"></i></span>
                            <a href="#" tabindex="-1">Citizen Program</a>
                            <h4><a href="#" tabindex="-1">Government vows to prioritize local contractors in</a></h4>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CITY EVENT2 WRAP END-->


@endsection