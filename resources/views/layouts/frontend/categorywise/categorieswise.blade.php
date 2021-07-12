@extends('master')

@section('title')
Dharamj
@endsection

@section('frontend')

<!-- Banner Section One Start -->
<section class="banner-one" style="padding-top: 159px; padding-bottom: 40px;">
    <div class="banner-bg-slide" data-options='{ "delay": 2000, "slides": [ { "src": "{{ asset("assets/images/main-slider/slide_v1_1.jpg") }}" }, { "src": "{{ asset("assets/images/main-slider/slide_v1_2.jpg") }}" }, { "src": "{{ asset("assets/images/main-slider/slide_v1_1.jpg") }}" } ], "transition": "fade", "timer": false, "align": "top" }'>
    </div><!-- /.banner-bg-slide -->

    <div class="container">
        <div class="content-box">
            <div class="top-title">
                <h1 style="font-size: 56px;">Services</h1>
            </div>
        </div>
    </div>
</section>

<!-- Categories One Start -->
<section class="categories_one">
    <div class="categories_one_shape wow slideInLeft animated" data-wow-delay="600ms" style="background-image: url('assets/images/shapes/map-1.png')"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="categories_one_carousel owl-theme owl-carousel">
                    @foreach($categories as $category)
                    @if($category->pid == NULL)
                    <!--Categories One Single-->
                    <a href="{{ url('categories/'.$category->id) }}">
                        <div class="categories_one_single">
                            <div class="categories_one_icon justify-content-center d-flex">
                                <img src="{{ asset($category->icons) }}" style="width: 70px;" class="icon-cutlery" />
                            </div>
                            <h4>{{ $category->cname }}</h4>
                        </div>
                    </a>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="listings_one_wrap pt-5 pb-5">
    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar__single sidebar__category">
                    <h3 class="sidebar__title">Categories</h3>
                    <ul class="sidebar__category-list list-unstyled">
                        @foreach($categories as $category)
                        @if($category->pid == NULL)
                        <li><a href="{{ url('categories/'.$category->id) }}">{{ $category->cname }}</a></li>
                        @elseif($category->pid != NULL)
                        <ul class="sidebar__category-list list-unstyled pl-4">
                            <li><a href="{{ url('categories/'.$category->id.'/subcategories/'.$category->pid) }}">{{ $category->cname }}</a></li>
                        </ul>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="listings_one_content_left">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="filter">
                                <div class="filter_inner_content">
                                    <div class="left">
                                        <div class="left_icon">
                                            <a href="listings1.html" class="icon-grid"></a>
                                            <a href="listings2.html" class="list-icon icon-list active"></a>
                                        </div>
                                        <div class="left_text">
                                            <h4>Over 70 Restaurants Found</h4>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="shorting">
                                            <select class="selectpicker" data-width="100%">
                                                <option selected="selected">Default Sorting</option>
                                                <!-- <option>Default Sorting 1</option>
                                            <option>Default Sorting 2</option>
                                            <option>Default Sorting 3</option>
                                            <option>Default Sorting 4</option> -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="listings_two_page_content">  
                                @forelse($catwises as $catwise)
                               
                                <!--listings Two Page Single-->
                                <div class="listings_two_page_single">
                                    <div class="listings_two_page_img">
                                        <img src="{{ asset($catwise->photourl) }}" alt="">
                                    </div>
                                    <div class="listings_two-page_content">
                                        <div class="title">
                                            <h3><a href="{{ url('service/details/'. $catwise->id) }}">{{ $catwise->title }}<span class="fa fa-check"></span></a></h3>
                                            <p>{!! Str::limit(strip_tags($catwise->description), 30) !!}</p>
                                        </div>
                                        <ul class="list-unstyled listings_two-page_contact_info">
                                            <li><i class="fas fa-map-marker-alt"></i>{{ $catwise->adder1 }}, {{ $catwise->adder2 }}, {{ $catwise->city }}</li>
                                            <li><a href="tel:+{{ $catwise->contact1 }}"><i class="fa fa-phone"></i>Call Now</a></li>
                                        </ul>
                                        <div class="author_img">
                                            <img src="{{ asset($catwise->logo) }}" width="37" alt="">
                                        </div>
                                        <div class="shopping_circle">
                                            <span class="icon-shopping-bags"></span>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="text-center pt-5 pb-5">
                                            <h4>No Data Found</h4>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-one-left__social" style="justify-content: flex-end;">
                    <a href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection