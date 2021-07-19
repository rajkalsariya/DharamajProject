@extends('master')

@section('title')
Dharamj
@endsection

@section('frontend')

@php
$jobposts = DB::table('jobposts')->latest()->paginate(1);
@endphp


<!-- SAB BANNER START-->
<div class="sab_banner overlay">
    <div class="container">
        <div class="sab_banner_text">
            <h2>Carrier</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Carrier</li>
            </ul>
        </div>
    </div>
</div>
<!-- SAB BANNER END-->

<!-- CITY EVENT2 WRAP START-->
<div class="city_event2_wrap">
    <div class="container">
        <div class="section_heading border">
            <span>Carrier</span>
            <h2>We're Hiring</h2>
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
            <div class="pagination">
                {{ $jobposts->links('layouts.frontend.pagination.pagination') }}
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