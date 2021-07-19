@extends('master')

@section('title')
Dharmaj
@endsection

@section('frontend')

@php
$gallerys = DB::table('galleries')->latest()->paginate(5);
@endphp

<!-- SAB BANNER START-->
<div class="sab_banner overlay">
    <div class="container">
        <div class="sab_banner_text">
            <h2>Gallery</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
            </ul>
        </div>
    </div>
</div>
<!-- SAB BANNER END-->

<!-- CITY BLOG WRAPER START-->
<div class="city_blog_wraper">
    <div class="container">
        <!--SECTION HEADING START-->
        <div class="section_heading margin-bottom">
            <h2>Gallery</h2>
        </div>
        <!--SECTION HEADING END-->
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a href="{{ url('/gallery/details') }}">
                    <div class="city_blog_grid">
                        <figure class="box" style="height: 214px;">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/img/img/dharmaj_history.jpg')}}" alt="">
                        </figure>
                        <div class="city_blog_grid_text">
                            <span><i class="fa fa-history"></i></span>
                            <h5><a href="{{ url('/history') }}">Surajba Park</a></h5>
                            <a href="{{ url('/gallery/details') }}">View<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </a>
            </div>            
            <div class="col-md-4 col-sm-6">
                <a href="{{ url('/history') }}">
                    <div class="city_blog_grid">
                        <figure class="box" style="height: 214px;">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/img/gallery/bank.jpg')}}" alt="">
                        </figure>
                        <div class="city_blog_grid_text">
                            <span><i class="fa fa-history"></i></span>
                            <h5><a href="{{ url('/history') }}">Bank</a></h5>
                            <a href="javascript:void(0)">View<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </a>
            </div>                        
            <div class="col-md-4 col-sm-6">
                <a href="{{ url('/history') }}">
                    <div class="city_blog_grid">
                        <figure class="box" style="height: 214px;">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/img/gallery/school.png')}}" alt="">
                        </figure>
                        <div class="city_blog_grid_text">
                            <span><i class="fa fa-history"></i></span>
                            <h5><a href="{{ url('/history') }}">H M Patel English Medium School</a></h5>
                            <a href="javascript:void(0)">View<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="{{ url('/history') }}">
                    <div class="city_blog_grid">
                        <figure class="box" style="height: 214px;">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/img/gallery/temple.jpg')}}" alt="">
                        </figure>
                        <div class="city_blog_grid_text">
                            <span><i class="fa fa-history"></i></span>
                            <h5><a href="{{ url('/history') }}">Temple</a></h5>
                            <a href="javascript:void(0)">View<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-12">
                <div class="pagination">
                {{ $gallerys->links('layouts.frontend.pagination.pagination') }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CITY BLOG WRAPER END-->

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