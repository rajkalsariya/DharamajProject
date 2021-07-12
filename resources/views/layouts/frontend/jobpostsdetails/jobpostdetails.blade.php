@extends('master')

@section('title')
Dharamj
@endsection

@section('frontend')
<div class="site-header__header-one-wrap header_three_wrap listings__page clearfix">

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
                            <li><a href="#"><i class="fas fa-heart"></i>Wishlist</a></li>
                            <li><a href="#"><i class="fas fa-user"></i>Sign in or Register</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <header class="main-nav__header-one">
        <nav class="header-navigation three stricky">
            <div class="container-box clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="main-nav__left main-nav__left_one float-left">
                    <div class="logo_one">
                        <a href="index-2.html" class="main-nav__logo">
                            <img src="assets/images/resources/logo-2.png" class="main-logo" alt="Awesome Image">
                        </a>
                    </div>
                    <a href="#" class="side-menu__toggler">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <div class="main-nav__main-navigation three float-left">
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

                <div class="main-nav__right main-nav__right_one three float-right">

                    <div class="header_btn_1">
                        <a href="{{ url('/dashboard') }}"><span class="icon-add"></span>Add listings</a>
                    </div>


                </div>

            </div>
        </nav>
    </header>
</div>

<!-- Listings Details Main Image Box Start-->
<section class="listings_details_main_image_box">
    <div class="container-full-width">
        <div class="thm__owl-carousel owl-carousel owl-theme" data-options='{"margin":3, "loop": true, "smartSpeed": 700, "autoplay": true, "autoplayHoverPause": true, "autoplayTimeout": 5000, "items": 3, "responsive": {
                    "0": {
                        "items": 1
                    },
                    "480": {
                        "items": 2
                    },
                    "992": {
                        "items": 3
                    }
                }}'>
            <div class="item">
                <!--Listings Details Main Image Box Single-->
                <div class="listings_details_main_image_box_single">
                    <div class="listings_details_main_image_box__img">
                        <img src="{{asset($jobpost->photo)}}" alt="">
                    </div>
                </div>
            </div>
            <div class="item">
                <!--Listings Details Main Image Box Single-->
                <div class="listings_details_main_image_box_single">
                    <div class="listings_details_main_image_box__img">
                        <img src="{{asset($jobpost->photo)}}" alt="">
                    </div>
                </div>
            </div>
            <div class="item">
                <!--Listings Details Main Image Box Single-->
                <div class="listings_details_main_image_box_single">
                    <div class="listings_details_main_image_box__img">
                        <img src="{{asset($jobpost->photo)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Main Bottom Start-->
<section class="main_bottom">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="main_bottom_left">
                    <div class="main_bottom_content">
                        <div class="author_image">
                            <img src="{{ asset($jobpost->photo) }}" width="150" alt="">
                        </div>
                    </div>
                    <div class="main_bottom_left_title">
                        <h3>{{ $jobpost->title }}<i class="fa fa-check"></i></h3>
                    </div>
                    <div class="main_bottom_rating_time">
                        <div class="main_bottom_rating">
                            <a href="#" class="clr-black">4.8</a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#" class="clr-gray"><i class="fas fa-star"></i></a>
                            <a href="#" class="clr-gray"><i class="fas fa-star"></i></a>
                        </div>
                        <div class="main_bottom_time">
                            <p><span class="far fa-clock"></span>Posted {{ Carbon\Carbon::parse($jobpost->created_at)->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="main_bottom_right">
                    <div class="main_bottom_right_Buttons">
                        <a href="#"><i class="fas fa-share"></i>share</a>
                        <a href="#"><i class="fas fa-exclamation-triangle"></i>Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Listings Details Start-->
<section class="listings_details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="listings_details_left">
                    <h3>Job Details</h3>
                    <div class="listings_details_text">
                        <p class="first_text">{!! $jobpost->jobdetails !!}</p>
                    </div>
                </div>
                <div class="listings_details_left">
                    <h3>Description</h3>
                    <div class="listings_details_text">
                        <p class="first_text">{!! $jobpost->description !!}</p>
                    </div>

                    <!--Review Two Box-->
                    <div class="review_two_box">
                        <h3 class="review_two_box__title">2 Comments</h3>
                        <!--Review Two Box Single-->
                        <div class="review_two_box__single">
                            <div class="review_two_box__image">
                                <img src="assets/images/resources/review-2-img-1.png" alt="">
                            </div>
                            <div class="review_two_box__content">
                                <h3>Kevin Martin</h3>
                                <div class="review_two_box__details">
                                    <div class="rating_service">
                                        <ul class="list-unstyled review_two_box_rating">
                                            <li>Rating</li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <ul class="list-unstyled review_two_box_services">
                                            <li>Services</li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star clr-gray"></i></li>
                                        </ul>
                                    </div>
                                    <div class="hospitality_pricing">
                                        <ul class="list-unstyled review_two_box_hospitality">
                                            <li>Hospitality</li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star clr-gray"></i></li>
                                        </ul>
                                        <ul class="list-unstyled review_two_box_pricing">
                                            <li>Pricing</li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star clr-gray"></i></li>
                                            <li><i class="fa fa-star clr-gray"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>It has survived not only five centuries, but also the leap into electronic
                                    typesetting unchanged. It was popularised in the sheets containing lorem
                                    ipsum is simply free text available in the martket to use now.</p>
                            </div>
                        </div>
                        <!--Review Two Box Single-->
                        <div class="review_two_box__single">
                            <div class="review_two_box__image">
                                <img src="assets/images/resources/review-2-img-2.png" alt="">
                            </div>
                            <div class="review_two_box__content">
                                <h3>Sarah Albert</h3>
                                <div class="review_two_box__details">
                                    <div class="rating_service">
                                        <ul class="list-unstyled review_two_box_rating">
                                            <li>Rating</li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <ul class="list-unstyled review_two_box_services">
                                            <li>Services</li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star clr-gray"></i></li>
                                        </ul>
                                    </div>
                                    <div class="hospitality_pricing">
                                        <ul class="list-unstyled review_two_box_hospitality">
                                            <li>Hospitality</li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star clr-gray"></i></li>
                                        </ul>
                                        <ul class="list-unstyled review_two_box_pricing">
                                            <li>Pricing</li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star clr-gray"></i></li>
                                            <li><i class="fa fa-star clr-gray"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>It has survived not only five centuries, but also the leap into electronic
                                    typesetting unchanged. It was popularised in the sheets containing lorem
                                    ipsum is simply free text available in the martket to use now.</p>
                            </div>
                        </div>
                        <!--Review Two Box Single-->
                        <div class="review_two_box__single">
                            <div class="review_two_box__image">
                                <img src="assets/images/resources/review-2-img-3.png" alt="">
                            </div>
                            <div class="review_two_box__content">
                                <h3>Mike Hardson</h3>
                                <div class="review_two_box__details">
                                    <div class="rating_service">
                                        <ul class="list-unstyled review_two_box_rating">
                                            <li>Rating</li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <ul class="list-unstyled review_two_box_services">
                                            <li>Services</li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star clr-gray"></i></li>
                                        </ul>
                                    </div>
                                    <div class="hospitality_pricing">
                                        <ul class="list-unstyled review_two_box_hospitality">
                                            <li>Hospitality</li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star clr-gray"></i></li>
                                        </ul>
                                        <ul class="list-unstyled review_two_box_pricing">
                                            <li>Pricing</li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star clr-gray"></i></li>
                                            <li><i class="fa fa-star clr-gray"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>It has survived not only five centuries, but also the leap into electronic
                                    typesetting unchanged. It was popularised in the sheets containing lorem
                                    ipsum is simply free text available in the martket to use now.</p>
                            </div>
                        </div>
                    </div>
                    <div class="review_two_box_form">
                        <h3 class="review_two_box_form__title">Write a Review</h3>
                        <div class="review_two_box__details review_two_box_form_details">
                            <div class="rating_service">
                                <ul class="list-unstyled review_two_box_rating">
                                    <li>Rating</li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <ul class="list-unstyled review_two_box_services">
                                    <li>Services</li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star clr-gray"></i></li>
                                </ul>
                            </div>
                            <div class="hospitality_pricing">
                                <ul class="list-unstyled review_two_box_hospitality">
                                    <li>Hospitality</li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star clr-gray"></i></li>
                                </ul>
                                <ul class="list-unstyled review_two_box_pricing">
                                    <li>Pricing</li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star clr-gray"></i></li>
                                    <li><i class="fa fa-star clr-gray"></i></li>
                                </ul>
                            </div>
                        </div>
                        <form action="http://layerdrops.com/ziston/inc/sendemail.php" class="review_two__form">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="review_two_input_box">
                                        <input type="text" placeholder="Your review title" name="Review Title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="review_two_input_box">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="review_two_input_box">
                                        <input type="text" placeholder="Full name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="review_two_input_box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <button type="submit" class="thm-btn review_from__btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="listings_details_sidebar">
                    <div class="listings_details_sidebar__single sidebar__map_contact_info">
                        <div class="contact_info">
                            <ul class="list-unstyled contact_info_list">
                                <li>
                                    <span>
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    <span style="display: inline-block; width: 90%; vertical-align: top;">{{ $jobpost->city }}, {{ $jobpost->country }}</span>
                                </li>
                                <li><a href="tel:+{{ $jobpost->contactno }}"><i class="fa fa-phone"></i>{{ $jobpost->contactno }}</a></li>
                                <li><a href="mailto:{{ $jobpost->emailid }}"><i class="fas fa-envelope"></i>{{ $jobpost->emailid }}</a></li>
                                </li>
                            </ul>
                            <div class="contact_info__social">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection