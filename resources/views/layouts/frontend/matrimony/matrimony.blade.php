@extends('master')

@section('title')
Dharmaj
@endsection

@section('frontend')

@php
$matrimonys = DB::table('matrimonies')->latest()->paginate(5);
@endphp

<!-- SAB BANNER START-->
<div class="sab_banner overlay">
    <div class="container">
        <div class="sab_banner_text">
            <h2>Matrimony</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Matrimony</li>
            </ul>
        </div>
    </div>
</div>
<!-- SAB BANNER END-->

<!-- CITY EVENT2 WRAP START-->
<div class="city_event2_wrap">
    <div class="container">
        <div class="row">
            @foreach($matrimonys as $matrimony)
            <div class="col-md-4 col-sm-6">
                <div class="city_event2_fig">
                    <figure class="box" style="height: 255px;">
                        <div class="box-layer layer-1"></div>
                        <div class="box-layer layer-2"></div>
                        <div class="box-layer layer-3"></div>
                        <img src="{{ asset($matrimony->photourl) }}" style="filter: blur(8px); -webkit-filter: blur(8px);" alt="">
                    </figure>
                    <div class="city_event2_list">
                        <!-- <div class="city_event2_date">
                            <strong>Bday</strong>
                            <span>{{ $matrimony->bdt }}</span>
                        </div> -->
                        <div class="city_event2_text">
                            <span>{{ $matrimony->occupation }}</span>
                            <h4><a href="javascript:void(0)">{{ $matrimony->name }}</a></h4>
                        </div>
                        <a class="theam_btn btn2 bg-color" href="javascript:void(0)">Send Request</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12">
                <div class="pagination">
                {{ $matrimonys->links('layouts.frontend.pagination.pagination') }}
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