@extends('master')

@section('title')
    Dharmaj
@endsection

@section('frontend')
    <!-- SAB BANNER START-->
    <div class="sab_banner overlay">
        <div class="container">
            <div class="sab_banner_text">
                <h2>Matrimony</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Matrimony Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- SAB BANNER END-->

    <!-- CITY EVENT2 WRAP START-->
    <div class="city_event2_wrap">
        <div class="container">
            <div class="city_mayor_row">
                <div class="city_mayor_fig">
                    <figure style="width: 300px">
                        <img src="{{ asset($matrimony->photourl) }}" style="filter: blur(8px); -webkit-filter: blur(8px);"
                            alt="">
                    </figure>
                    <div class="city_mayor_text">
                        <h2>{{ $matrimony->name }}</h2>
                        <p>{{ $matrimony->occupation }}</p>
                        <ul class="city_mayor_list">
                            <li><span>Birth Date</span>{{ $matrimony->bdt }}</li>
                            <li><span>Marital Status</span>{{ $matrimony->maritalstatus }}</li>
                            <li><span>Location</span>{{ $matrimony->state }}, {{ $matrimony->district }}</li>
                        </ul>
                        <div class="city_mayor_contact">
                            <a class="theam_btn" href="#" download="{{ $matrimony->biourl }}" tabindex="0">Bio
                                Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CITY EVENT2 WRAP END-->

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
@endsection
