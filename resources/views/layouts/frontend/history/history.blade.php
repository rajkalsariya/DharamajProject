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
                    <figure class="box" style="height: 458px;">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{asset('frontend/img/history/mahadev.jpg')}}" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="city_visit_text">
                    <h3>Jalaram Mandir</h3>
                    <p><i>Jalaram Mandir is Located in Dharmaj Village Near Borsad city Anand district on National highway no-8 to bagodra bombay highway.</i></p>
                    <p>The temple is Built in 1978 by Shri Jalaram jan seva Trust and jalaram Satsang Mandal Dharmaj. In this time Contrasted a new Jalaram Temple.Because The highway Road is done wide and the old temple is brake and built new temple Jalaram Tirth.In 1978, the Jalaram Temple on Dharmaj-Tarapur highway was constructed. With this, a new era begain. The institution blossomed in the next 25 years to become one of the stellar examples of community welfare and development in the country. </p>
                    <a class="theam_btn border-color color" href="{{ url('/history/details') }}" tabindex="0">Explore More</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="city_visit_text text2">
                    <h3>Surajba Park</h3>
                    <p><i>Surajba Park Dharmaj is one of the top and best destinations for family and friends in the field of park, Water Parks and resort category in Kheda. </i></p>
                    <p>urajba Park Dharmaj placed in Gorel - Dharmaj Road, Anand District, Tehsil Petlad, Dharmaj, Gujarat 388430, and Surajba Park Dharmaj took a good position in the Park category in Kheda. If you live in Kheda or some where near to Kheda than this will be a good and easy destination for you. Surajba Park Dharmaj is a good park in the amusement_park in Kheda because a lot of people are visiting this park, people love this park, this park is always clean, people do not have any problem in coming here and spending time.</p>
                    <a class="theam_btn border-color color" href="{{ url('/history/details') }}" tabindex="0">Explore More</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="city_visit_fig">
                    <figure class="box"  style="height: 458px;">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{asset('frontend/img/history/surajba.jpg')}}" alt="">
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