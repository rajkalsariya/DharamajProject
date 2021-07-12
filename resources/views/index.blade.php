@extends('master')

@section('title')
Dharamj
@endsection

@section('frontend')

@php
$categories = DB::table('categories')->latest()->get();
$services = DB::table('services')->latest()->get();
$jobposts = DB::table('jobposts')->latest()->get();
$jobfinds = DB::table('jobfinds')->latest()->get();
$matrimonys = DB::table('matrimonies')->latest()->get();
@endphp

<!-- Banner Section One Start -->
<section class="banner-one">
    <div class="banner-bg-slide" data-options='{ "delay": 2000, "slides": [ { "src": "{{ asset("assets/images/main-slider/slide_v1_1.jpg") }}" }, { "src": "{{ asset("assets/images/main-slider/slide_v1_2.jpg") }}" }, { "src": "{{ asset("assets/images/main-slider/slide_v1_1.jpg") }}" } ], "transition": "fade", "timer": false, "align": "top" }'>
    </div><!-- /.banner-bg-slide -->

    <div class="container">
        <div class="content-box">
            <div class="top-title">
                <div class="sub-title">Let’s Explore</div>
                <h1>your amazing city</h1>
                <p>Find great places to stay, eat, shop, or visit from local experts.</p>
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

<!--Latest Services Start-->
<section class="latest_listings">
    <div class="container">
        <div class="block-title text-center">
            <h4>Handpicked places</h4>
            <h2>Latest Services</h2>
            <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum</p>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="latest_listings_carousel owl-theme owl-carousel">
                    @foreach($services as $service)
                    <!--Latest Listings Single-->

                    <div class="latest_listings_single">
                        <div class="latest_listings_image" style="height: 225px;">
                            <img src="{{ asset($service->photourl) }}" alt="">
                            <!-- <div class="heart_icon">
                                <i class="icon-heart"></i>
                            </div> -->
                            <div class="author_img">
                                <img src="{{ asset($service->logo) }}" alt="">
                            </div>
                            <div class="shopping_circle">
                                <span class="icon-shopping-bags"></span>
                            </div>
                        </div>
                        <div class="latest_listings_content">
                            <div class="title">
                                <h3><a href="{{ url('service/details/'. $service->id) }}">{{ $service->title }}</a></h3>
                                <p>{!! Str::limit(strip_tags($service->description), 30) !!}</p>
                            </div>
                            <ul class="list-unstyled latest_listings_contact_info">
                                <li><i class="fas fa-map-marker-alt"></i>{{ $service->adder1 }}, {{ $service->adder2 }}, {{ $service->city }}</li>
                                <li><a href="tel:+{{ $service->contact1 }}"><i class="fa fa-phone"></i>Call Now</a></li>
                            </ul>
                            <div class="latest_listings_content_bottom">
                                <div class="left">
                                    <h6><a target="_black" href="//{{ $service->website }}">Website</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!--Latest Job Posts Start-->
<section class="latest_listings_three pt-0">
    <div class="container">
        <div class="block-title text-center">
            <h4>Handpicked places</h4>
            <h2>Latest Jobs</h2>
            <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum</p>
        </div>
        <div class="row">
            @foreach($jobposts as $jobpost)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <!--Latest Listings Single-->
                <div class="latest_listings_three_single wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                    <div class="latest_listings_three_image">
                        <img src="{{ asset($jobpost->photo) }}" alt="">
                    </div>
                    <div class="latest_listings_three_content_job">
                        <div class="title latest_listings_three_contact_info_job">
                            <h3><a href="{{ url('job/details/'. $jobpost->id) }}">{{ $jobpost->title }} </a></h3>
                            <p>{!! Str::limit(strip_tags($jobpost->jobdetails), 150) !!}</p>
                        </div>
                        <div class="latest_listings_three_content_bottom">
                            <div class="left apply_btn_1">
                                <a href="tel:+{{ $jobpost->contactno }}">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--Popular Places Start-->
<section class="popular_places pt-0">
    <div class="container-fullwidth">
        <div class="block-title text-center">
            <h4>Around the World</h4>
            <h2>Popular Places</h2>
            <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum</p>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="popular_places_carousel owl-theme owl-carousel">
                    @foreach($matrimonys as $matrimony)
                    <!--Four Boxes Two Single-->
                    <div class="four_boxes-two_single wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1200ms">
                        <div class="four_boxes-two_image">
                            <img src="{{ asset($matrimony->photourl) }}" alt="">
                            <div class="four_boxes-two_content">
                                <h3>{{ $matrimony->name }}</h3>
                            </div>
                            <div class="four_boxes_two_hover_content">
                                <p>Lorem ipsum dolor sit<br>amet, cibo mundi</p>
                                <div class="four_boxes_two_hover_content_btn">
                                    <a href="#">Send Request</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<!--Food Lovers Start-->
<section class="food_lovers" style="background-image: url(assets/images/backgrounds/food-lovers_bg.jpg)">
    <div class="food_lover_inner_shape-1" style="background-image: url(assets/images/shapes/food-lovers-shape-1.png)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="food_lovers_inner">
                    <p>Food lovers</p>
                    <h2>Visit the Amazing Food<br>Points in London</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Counter One Start-->
<section class="counter_one">
    <div class="counter_one_shape wow slideInLeft animated" data-wow-delay="600ms" style="background-image: url(assets/images/shapes/counter_one_shape.png)"></div>
    <div class="container">
        <div class="counter_one_content">
            <ul class="counter_one_box list-unstyled clearfix">
                <li class="counter_one_single">
                    <h3><span class="counter">8705</span></h3>
                    <p>Total Listings</p>
                </li>
                <li class="counter_one_single">
                    <h3><span class="counter">480</span></h3>
                    <p>Company Staff</p>
                </li>
                <li class="counter_one_single">
                    <h3><span class="counter">6260</span></h3>
                    <p>Places in the World</p>
                </li>
                <li class="counter_one_single">
                    <h3><span class="counter">9774</span></h3>
                    <p>Happy People</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<!--CTA One Start-->
<section class="cta_one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta_one_inner">
                    <div class="cta_one_inner_bg" style="background-image: url(assets/images/backgrounds/cta-2-bg.jpg)"></div>
                    <div class="cta_one_img">
                        <img src="assets/images/resources/cta-1-img-1.jpg" alt="">
                    </div>
                    <div class="cta_one_content">
                        <div class="cta_one_text">
                            <p>Sign up to get</p>
                            <h2>Special Offers Every Day</h2>
                        </div>
                        <div class="cta_one_btn">
                            <a href="#" class="thm-btn">Show more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Testimonials One Start-->
<section class="testimonials_one">
    <div class="testimonial_one_map" style="background-image: url(assets/images/shapes/testimonial-one-map.png)">
    </div>
    <div class="container-box">
        <div class="block-title text-center">
            <h4>Our testimonials</h4>
            <h2>What They Say</h2>
            <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum</p>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonials_one_carousel owl-theme owl-carousel">
                    <!--Testimonials One Single-->
                    <div class="testimonials_one_single">
                        <div class="shadow-box"></div>
                        <div class="testimonials_one_image">
                            <img src="assets/images/testimonials/testimonials-1-img-1.png" alt="">
                        </div>
                        <div class="testimonials_one_text">
                            <div class="testimonials_one_rating_box">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <div class="testimonials_one_text_box">
                                <p>I was very impresed by the laundry services lorem ipsum is simply free text
                                    available used by copy typing refreshing. Neque porro noting est qui dolorem
                                    ipsum quia.</p>
                            </div>
                            <div class="testimonials_quote_icon">
                                <span class="icon-quote"></span>
                            </div>
                            <div class="customer_info">
                                <h3>Kevin Martin,<span>Customer</span></h3>
                            </div>
                        </div>
                    </div>
                    <!--Testimonials One Single-->
                    <div class="testimonials_one_single">
                        <div class="shadow-box"></div>
                        <div class="testimonials_one_image">
                            <img src="assets/images/testimonials/testimonials-1-img-2.png" alt="">
                        </div>
                        <div class="testimonials_one_text">
                            <div class="testimonials_one_rating_box">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <div class="testimonials_one_text_box">
                                <p>I was very impresed by the laundry services lorem ipsum is simply free text
                                    available used by copy typing refreshing. Neque porro noting est qui dolorem
                                    ipsum quia.</p>
                            </div>
                            <div class="testimonials_quote_icon">
                                <span class="icon-quote"></span>
                            </div>
                            <div class="customer_info">
                                <h3>Jessica Brown,<span>Customer</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Video One Start-->
<section class="video-one" style="background-image: url(assets/images/backgrounds/video-one-bg.jpg)">
    <div class="container">
        <div class="block-title text-center">
            <h4>Let’s Find out</h4>
            <h2>How It Works</h2>
            <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum</p>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="video_one_image">
                    <div class="video_one_shape-1" style="background-image: url(assets/images/shapes/video-1-shape-1.png)"></div>
                    <div class="video_one_shape-2 rotate-me" style="background-image: url(assets/images/shapes/video-1-shape-2.png)"></div>
                    <img src="assets/images/resources/video-1-img-1.jpg" alt="">
                    <a href="https://www.youtube.com/watch?v=i9E_Blai8vk" class="video-one__btn video-popup"><i class="fa fa-play"></i></a>
                    <div class="video_one_left_text">
                        <p>Watch how</p>
                    </div>
                    <div class="video_one_right_text">
                        <p>listing works</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Four Boxes-->
<section class="four_boxes">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <!--Four Boxes Single-->
                <div class="four_boxes_single">
                    <div class="four_boxes_icon">
                        <span class="icon-selection"></span>
                    </div>
                    <h3>Choose A Category</h3>
                    <p>There many variation of pasages of lorem sum available.</p>
                    <div class="four_boxes_shape"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <!--Four Boxes Single-->
                <div class="four_boxes_single">
                    <div class="four_boxes_icon">
                        <span class="icon-focus"></span>
                    </div>
                    <h3>Find What You Want</h3>
                    <p>There many variation of pasages of lorem sum available.</p>
                    <div class="four_boxes_shape"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <!--Four Boxes Single-->
                <div class="four_boxes_single">
                    <div class="four_boxes_icon">
                        <span class="icon-delete"></span>
                    </div>
                    <h3>Select the Best Place</h3>
                    <p>There many variation of pasages of lorem sum available.</p>
                    <div class="four_boxes_shape"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <!--Four Boxes Single-->
                <div class="four_boxes_single">
                    <div class="four_boxes_icon">
                        <span class="icon-exploration"></span>
                    </div>
                    <h3>Go Out & Explore Now</h3>
                    <p>There many variation of pasages of lorem sum available.</p>
                    <div class="four_boxes_shape"></div>
                </div>
            </div>
        </div>
        <div class="four_boxes_bottom">
            <p>Don’t hesitate, contact us for better business. <a href="#">Start a New Lisiting</a></p>
        </div>
    </div>
</section>

<!--Blog One Start-->
<section class="blog_one">
    <div class="blog_one_bg" style="background-image: url(assets/images/backgrounds/blog-1-bg.jpg)"></div>
    <div class="container">
        <div class="block-title text-center">
            <h4>From the blog</h4>
            <h2>News & Articles</h2>
            <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum</p>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <!--Blog One single-->
                <div class="blog_one_single wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog_image">
                        <img src="assets/images/blog/blog-1-img-1.jpg" alt="Blog One Image">
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                            </li>
                        </ul>
                        <div class="blog_one_title">
                            <h3><a href="blog-detail.html">Top 8 Amazing Places to Stay in Canada</a></h3>
                        </div>
                        <div class="blog_one_text">
                            <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum</p>
                        </div>
                        <div class="blog_one_date">
                            <p>07<br>Aug</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!--Blog One single-->
                <div class="blog_one_single wow fadeInDown" data-wow-delay="200ms">
                    <div class="blog_image">
                        <img src="assets/images/blog/blog-1-img-2.jpg" alt="Blog One Image">
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                            </li>
                        </ul>
                        <div class="blog_one_title">
                            <h3><a href="blog-detail.html">Leverage agile frameworks to provide a robust</a>
                            </h3>
                        </div>
                        <div class="blog_one_text">
                            <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum</p>
                        </div>
                        <div class="blog_one_date">
                            <p>07<br>Aug</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!--Blog One single-->
                <div class="blog_one_single wow fadeInUp" data-wow-delay="300ms">
                    <div class="blog_image">
                        <img src="assets/images/blog/blog-1-img-3.jpg" alt="Blog One Image">
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                            </li>
                        </ul>
                        <div class="blog_one_title">
                            <h3><a href="blog-detail.html">Bring to the table win-win survival strategies to</a>
                            </h3>
                        </div>
                        <div class="blog_one_text">
                            <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum</p>
                        </div>
                        <div class="blog_one_date">
                            <p>07<br>Aug</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Brand One Start-->
<section class="brand-one">
    <div class="container">
        <div class="brand-one__carousel owl-carousel thm__owl-carousel owl-theme" data-options='{"loop": true, "autoplay": true, "autoplayHoverPause": true, "autoplayTimeout": 5000, "items": 5, "dots": false, "nav": false, "margin": 139, "smartSpeed": 700, "responsive": { "0": {"items": 2, "margin": 30}, "480": {"items": 3, "margin": 30}, "991": {"items": 4, "margin": 50}, "1199": {"items": 5, "margin": 139}}}'>
            <div class="item">
                <img src="assets/images/brand/brand-1-1.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand/brand-1-2.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand/brand-1-3.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand/brand-1-4.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand/brand-1-5.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand/brand-1-1.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand/brand-1-2.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand/brand-1-3.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand/brand-1-4.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="assets/images/brand/brand-1-5.png" alt="">
            </div><!-- /.item -->
        </div>
    </div>
</section>

@endsection