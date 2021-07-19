@extends('master')

@section('title')
Dharamj
@endsection

@section('frontend')

@php
$services = DB::table('services')->latest()->paginate(3);
@endphp

<!-- SAB BANNER START-->
<div class="sab_banner overlay">
    <div class="container">
        <div class="sab_banner_text">
            <h2>Classified</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Classified</li>
            </ul>
        </div>
    </div>
</div>
<!-- SAB BANNER END-->

<!-- CITY SERVICES2 WRAP START-->
<div class="city_services2_wrap">
    <div class="container">
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
            <div class="pagination">
                {{ $services->links('layouts.frontend.pagination.pagination') }}
            </div>
        </div>
    </div>
</div>
<!-- CITY SERVICES2 WRAP END-->

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