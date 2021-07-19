@extends('master')

@section('title')
Dharamj
@endsection

@section('frontend')
<!-- SAB BANNER START-->
<div class="sab_banner overlay">
    <div class="container">
        <div class="sab_banner_text">
            <h2>{{ $services->title }}</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/service/classified') }}">Services</a></li>
                <li class="breadcrumb-item active">Services detail</li>
            </ul>
        </div>
    </div>
</div>
<!-- SAB BANNER END-->

<!-- CITY EVENT2 WRAP START-->
<div class="city_event2_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar_widget widget2">

                    <!-- EVENT DETAIL START-->
                    <div class="event_detail">
                        <h4 class="sidebar_heading">Contact</h4>
                        <div class="venue_list">
                            <ul>
                                <li>
                                    <h6>Address :</h6>
                                    <p> {{ $services->adder1 }}, {{ $services->adder2 }}, {{ $services->city }}, {{ $services->pincode }}</p>
                                </li>
                                <li>
                                    <h6>Phone:</h6>
                                    <p><a href="tel:+{{ $services->contact1 }}">Call now</a></p>
                                </li>
                                <li>
                                    <h6>Email:</h6>
                                    <p>{{ $services->email }}</p>
                                </li>
                                <li>
                                    <h6>Website:</h6>
                                    <p><a href="//{{ $services->website }}">{{ $services->website }}</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- EVENT DETAIL END-->
                </div>
            </div>
            <div class="col-md-9">
                <div class="city_event_detail">
                    <div class="event_detail_text">
                        <figure>
                            <img src="{{ asset($services->photourl) }}" alt="">
                        </figure>
                        <h3 class="event_heading">{{ $services->title }}</h3>
                        <p>{{ $services->cname }}</p>
                        <p>{!! $services->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CITY EVENT2 WRAP END-->

@endsection