@extends('master')

@section('title')
Dharmaj
@endsection

@section('frontend')

@php
$services = DB::table('services')->latest()->limit(3)->get();
$jobposts = DB::table('jobposts')->latest()->limit(3)->get();
@endphp

@include('layouts.frontend.slider.slider')

<!-- CITY BLOG WRAPER START-->
<div class="city_blog_wraper">
    <div class="container">
        <!--SECTION HEADING START-->
        <div class="section_heading margin-bottom">
            <h2>Gam Panchayat Dharmaj</h2>
        </div>
        <!--SECTION HEADING END-->
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a href="{{ url('/history') }}">
                    <div class="city_blog_grid">
                        <figure class="box" style="height: 214px;">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/img/img/dharmaj_history.jpg')}}" alt="">
                        </figure>
                        <div class="city_blog_grid_text">
                            <span><i class="fa fa-history"></i></span>
                            <h5><a href="{{ url('/history') }}">History</a></h5>
                            <a href="{{ url('/history') }}">See More<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="city_blog_grid">
                    <figure class="box" style="height: 214px;">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{asset('frontend/img/img/Dharmaj_Tower.jpg')}}" alt="">
                    </figure>
                    <div class="city_blog_grid_text">
                        <span><i class="fa fa-connectdevelop" aria-hidden="true"></i></span>
                        <h5><a href="#">Development</a></h5>
                        <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="city_blog_grid">
                    <figure class="box" style="height: 214px;">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{asset('frontend/img/img/entertainment.jpg')}}" alt="">
                    </figure>
                    <div class="city_blog_grid_text">
                        <span><i class="fa fa-film" aria-hidden="true"></i></span>
                        <h5><a href="#">Entertainment</a></h5>
                        <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CITY BLOG WRAPER END-->

<!-- CITY SERVICES2 WRAP START-->
<div class="city_health_department" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="city_about_fig">
                    <figure class="box">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{asset('frontend/img/service/service.jpg')}}" alt="">
                    </figure>
                    <div class="city_about_video">
                        <figure class="overlay">
                            <img src="{{asset('frontend/img/about/dharmajlogo.png')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="city_about_list list2">
                    <!--SECTION HEADING START-->
                    <div class="section_heading border">
                        <span>Welcome to our village</span>
                        <h2>About us</h2>
                    </div>
                    <!--SECTION HEADING END-->
                    <div class="city_about_text ">
                        <div class="city_service_text">
                            <h5><a href="javascript:void(0)">Gam Pnachayat Dharmaj</a></h5>
                        </div>
                        <h6>Babubhai Dhayabhai Rohit (Sarpanch)</h6>
                        <h6>Tusharbhai Babubhai Patel (ice.Sarpanch)</h6>
                        <p>In accordance of a falk-tale are Rabari man Dharma came here to rear his cattle
                            at the place in a bagaar market, now there is the Dharmeshwer temple. The cows
                            let the milk by their own where now a days Mahadev temple is.this happened after so
                            Dharma rabari was surprised and he started geing at that place where he found
                            Mahadev's Ling & thus he became a great devotee of the Mahadev. He got built their
                            A temple of the Mahadev which now a days is known as the Dharmeshwar Mahadev.
                            Years went and it is said that on his name only the name of village Dharmaj is given.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="city_about_link">
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i>Jaykrushnabhai Parshotambhai Patel</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i>Hasmukhbhai Ambalalbhai Panchal</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i>Ketanbhai Rajnikantbhai Patel</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i>Birjubhai Farshubhai Patel</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i>Chandubhai Govinbhai Vanker</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i>Naynaben Panteshbhai Patel</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="city_about_link">
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i>Raginiben janakbhai Patel</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i>Chayaben Mayurbhai Patel</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i>Kinnariben Bhaveshbhai Patel</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i>Truptiben Jaydevbhai Patel</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i>Himaliben Birjubhai Patel</a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-star"></i>Hatelben Hamentbhai Patel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CITY SERVICES2 WRAP END-->

<!-- CITY HEALTH2 WRAP START-->
<div class="city_health2_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="city_health2_service list">
                    <span><i class="fa  icon-doctor"></i></span>
                    <h5><a href="#">Education</a></h5>
                    <p> Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                    <a href="#" tabindex="-1">See More<i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="city_health2_service list">
                    <span><i class="fa  icon-health-1"></i></span>
                    <h5><a href="#">Development</a></h5>
                    <p> Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                    <a href="#" tabindex="-1">See More<i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="city_health2_service list">
                    <span><i class="fa  icon-doctor"></i></span>
                    <h5><a href="#">Amusement</a></h5>
                    <p> Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum</p>
                    <a href="#" tabindex="-1">See More<i class="fa fa-angle-double-right"></i></a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- CITY HEALTH WRAP END-->

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

<!-- CITY SERVICES2 WRAP START-->
<div class="city_services2_wrap" style="padding-bottom: 50px;">
    <div class="container">
        <!--SECTION HEADING START-->
        <div class="section_heading margin-bottom">
            <h2>Classify</h2>
        </div>
        <!--SECTION HEADING END-->
        <div class="row">
            @foreach($services as $service)
            <div class="col-md-4 col-sm-6">
                <div class="city_service2_fig">
                    <figure class="overlay" style="height: 150px;">
                        <img src="{{ asset($service->photourl) }}" alt="">
                        <div class="city_service2_list">
                            <div class="city_service2_caption">
                                <h4><span>{{ $service->title }}</h4>
                            </div>
                        </div>
                    </figure>
                    <div class="city_service2_text">
                        <p> {!! Str::limit(strip_tags($service->description), 100) !!}</p>
                        <a class="see_more_btn" href="{{ url('service/classified/details/'.$service->id) }}">See More <i class="fa icon-next-1"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12">
                <div class="city_service2_btn">
                    <a class="theam_btn border-color color" href="{{ url('/service/classified') }}" tabindex="0">See More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CITY SERVICES2 WRAP END-->

<!-- CITY EVENT2 WRAP START-->
<div class="city_event2_wrap" style="padding-top: 50px;">
    <div class="container">
        <div class="section_heading border">
            <span>We're Hiring</span>
            <h2>Career</h2>
        </div>
        <div class="city_full_event">
            <ul>
                @foreach($jobposts as $job)
                <li>
                    <div class="city_full_event_list overlay">
                        <div class="city_event2_meeting">
                            <h4>{{ $job->title }}</h4>
                            <ul class="city_meta_list">
                                <li><a href="mailto:{{ $job->emailid }}"><i class="fa fa-envelope"></i>{{ $job->emailid }}</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>{{ $job->city }}, {{ $job->country }}</a></li>
                            </ul>
                            <p><span>{!! Str::limit(strip_tags($job->description), 90) !!}</p>
                        </div>
                        <a class="theam_btn btn2" href="tel:+{{ $job->contactno }}">Apply now</a>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="col-md-12">
                <div class="city_service2_btn">
                    <a class="theam_btn border-color color" href="{{ url('/job') }}" tabindex="0">See More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CITY EVENT2 WRAP END-->

<!--CITY EVENT WRAP START-->
<div class="city_event_wrap">
    <div class="bg_white width">
        <div class="container-fluid">
            <!--SECTION HEADING START-->
            <div class="heding_full">
                <div class="section_heading">
                    <span>Upcoming</span>
                    <h2>Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="city_event_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="extra-images/event-fig.jpg" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="extra-images/event-fig.jpg" tabindex="-1"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_event_text">
                            <div class="city_event_history">
                                <div class="event_date">
                                    <span>25</span>
                                    <strong>July, 2021</strong>
                                </div>
                                <div class="city_date_text">
                                    <h5 class="custom_size">Swachata Abhiyan Camp</h5>
                                    <a href="#"><i class="fa fa-clock-o"></i>05:30 PM - 06:30 PM </a>
                                </div>
                            </div>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="city_event_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="extra-images/event-fig1.jpg" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="extra-images/event-fig1.jpg" tabindex="-1"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_event_text">
                            <div class="city_event_history">
                                <div class="event_date">
                                    <span>24</span>
                                    <strong>SEP, 2018</strong>
                                </div>
                                <div class="city_date_text">
                                    <h5 class="custom_size">Swachata Abhiyan Camp</h5>
                                    <a href="#"><i class="fa fa-clock-o"></i>05:23 AM - 09:23 AM </a>
                                </div>
                            </div>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="city_event_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="extra-images/event-fig2.jpg" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="extra-images/event-fig2.jpg" tabindex="-1"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_event_text">
                            <div class="city_event_history">
                                <div class="event_date">
                                    <span>20</span>
                                    <strong>SEP, 2018</strong>
                                </div>
                                <div class="city_date_text">
                                    <h5 class="custom_size">Swachata Abhiyan Camp</h5>
                                    <a href="#"><i class="fa fa-clock-o"></i>05:23 AM - 09:23 AM </a>
                                </div>
                            </div>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean..</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="city_event_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="extra-images/event-fig3.jpg" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="extra-images/event-fig3.html" tabindex="-1"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_event_text">
                            <div class="city_event_history">
                                <div class="event_date">
                                    <span>15</span>
                                    <strong>SEP, 2018</strong>
                                </div>
                                <div class="city_date_text">
                                    <h5 class="custom_size">Coporate Meetings</h5>
                                    <a href="#"><i class="fa fa-clock-o"></i>05:23 AM - 09:23 AM </a>
                                </div>
                            </div>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--CITY EVENT WRAP END-->

<!-- CITY VISIT WRAP START-->
<div class="city_visit_wrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="city_visit_fig">
                    <figure class="box">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{asset('frontend/img/service/12.jpg')}}" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="city_visit_text">
                    <h3>COVID 19</h3>
                    <h3>Relief Effort</h3>
                    <p><i>Proin gravida nibh vel velit auctor aliquet Aenean <br>sollicitudin, </i></p>
                    <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec <br>sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate<br> cursus a sit amet mauris. </p>
                    <a class="theam_btn border-color color" href="#" tabindex="0">Explore More</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="city_visit_text text2">
                    <h3>Your </h3>
                    <h3>Contribution</h3>
                    <p><i>Proin gravida nibh vel velit auctor aliquet Aenean <br>sollicitudin, </i></p>
                    <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec <br>sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate<br> cursus a sit amet mauris. </p>
                    <a class="theam_btn border-color color" href="#" tabindex="0">Explore More</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="city_visit_fig">
                    <figure class="box">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{asset('frontend/img/service/1.jpg')}}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CITY VISIT WRAP END-->

<!--CITY CLIENT WRAP START-->
<div class="city_client_wrap">
    <div class="container">
        <div class="city_client_row">
            <ul class="bxslider bx-pager">
                <li>
                    <div class="city_client_fig">
                        <div class="city_client_text">
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                aliquet. Aenean sollicitudin, lorem quis. </p>
                            <h4><a href="#">Likor Stom</a> </h4>
                            <span><a href="#">Directio-Baseline</a></span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="city_client_fig">
                        <div class="city_client_text">
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                aliquet. Aenean sollicitudin, lorem quis. </p>
                            <h4><a href="#">Likor Stom</a> </h4>
                            <span><a href="#">Directio-Baseline</a></span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--CITY CLIENT WRAP END-->

<!--CITY NEWS WRAP START-->
<div class="city_news_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--SECTION HEADING START-->
                <div class="section_heading margin-bottom">
                    <span>Welcome to Local City</span>
                    <h2>News Releases</h2>
                </div>
                <!--SECTION HEADING START-->
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="city_news_fig">
                            <figure class="box">
                                <div class="box-layer layer-1"></div>
                                <div class="box-layer layer-2"></div>
                                <div class="box-layer layer-3"></div>
                                <img src="{{asset('frontend/extra-images/news-fig.jpg')}}" alt="">
                            </figure>
                            <div class="city_news_text">
                                <h2>A Fundraiser for the City Club</h2>
                                <ul class="city_news_meta">
                                    <li><a href="#">May 22, 2018</a></li>
                                    <li><a href="#">Public Notices</a></li>
                                </ul>
                                <p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                                    sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                    sollicitudin</p>
                                <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="city_news_fig">
                            <figure class="box">
                                <div class="box-layer layer-1"></div>
                                <div class="box-layer layer-2"></div>
                                <div class="box-layer layer-3"></div>
                                <img src="{{asset('frontend/extra-images/news-fig.jpg')}}" alt="">
                            </figure>
                            <div class="city_news_text">
                                <h2>A Fundraiser for the City Club</h2>
                                <ul class="city_news_meta">
                                    <li><a href="#">May 22, 2018</a></li>
                                    <li><a href="#">Public Notices</a></li>
                                </ul>
                                <p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                                    sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                    sollicitudin</p>
                                <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="city_news_fig">
                            <figure class="box">
                                <div class="box-layer layer-1"></div>
                                <div class="box-layer layer-2"></div>
                                <div class="box-layer layer-3"></div>
                                <img src="{{asset('frontend/extra-images/news-fig.jpg')}}" alt="">
                            </figure>
                            <div class="city_news_text">
                                <h2>A Fundraiser for the City Club</h2>
                                <ul class="city_news_meta">
                                    <li><a href="#">May 22, 2018</a></li>
                                    <li><a href="#">Public Notices</a></li>
                                </ul>
                                <p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                                    sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                                    sollicitudin</p>
                                <a class="theam_btn border-color color" href="#" tabindex="0">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--CITY NEWS WRAP END-->

@endsection