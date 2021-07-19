@extends('master')

@section('title')
Dharamj
@endsection

@section('frontend')

<!-- SAB BANNER START-->
<div class="sab_banner overlay">
    <div class="container">
        <div class="sab_banner_text">
            <h2>Goverment Subsidy</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Goverment Subsidy</li>
            </ul>
        </div>
    </div>
</div>
<!-- SAB BANNER END-->
<!--CITY ABOUT WRAP START-->
<div class="city_department_wrap goverment">
    <div class="container">
        <!--SECTION HEADING START-->
        <div class="section_heading margin-bottom">
            <span>Explore</span>
            <h2>Govt Subsidy</h2>
        </div>
        <!--SECTION HEADING END-->
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a href="{{ url('service/government/details') }}">
                    <div class="width_control">
                        <div class="city_department_fig">
                            <figure class="box">
                                <div class="box-layer layer-1"></div>
                                <div class="box-layer layer-2"></div>
                                <div class="box-layer layer-3"></div>
                                <img src="{{asset('frontend/extra-images/department-fig.jpg')}}" alt="">
                                <a class="paly_btn" href="{{ url('service/government/details') }}"><i class="fa fa-plus"></i></a>
                            </figure>
                            <div class="city_department_text">
                                <h5>Business Loans</h5>
                                <p>This is Photoshop's version of Ipsum. </p>
                                <a href="{{ url('service/government/details') }}">See More<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="width_control">
                    <div class="city_department_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/extra-images/department-fig1.jpg')}}" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('frontend/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_department_text">
                            <h5>MUDRA Loans </h5>
                            <p>This is Photoshop's version of Ipsum. </p>
                            <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="width_control">
                    <div class="city_department_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/extra-images/department-fig2.jpg')}}" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('frontend/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_department_text">
                            <h5>Kishan Samman</h5>
                            <p>This is Photoshop's version of Ipsum. </p>
                            <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="width_control">
                    <div class="city_department_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/extra-images/department-fig3.jpg')}}" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('frontend/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_department_text">
                            <h5>Krushi Yantra</h5>
                            <p>This is Photoshop's version of Ipsum. </p>
                            <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="width_control">
                    <div class="city_department_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/extra-images/department-fig4.jpg')}}" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('frontend/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_department_text">
                            <h5>Travel & Tourism</h5>
                            <p>This is Photoshop's version of Ipsum. </p>
                            <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="width_control">
                    <div class="city_department_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/extra-images/department-fig5.jpg')}}" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('frontend/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_department_text">
                            <h5>Employment</h5>
                            <p>This is Photoshop's version of Ipsum. </p>
                            <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="width_control">
                    <div class="city_department_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/extra-images/department-fig.jpg')}}" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('frontend/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_department_text">
                            <h5>Administration</h5>
                            <p>This is Photoshop's version of Ipsum. </p>
                            <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="width_control">
                    <div class="city_department_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/extra-images/department-fig1.jpg')}}" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('frontend/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_department_text">
                            <h5>Employment </h5>
                            <p>This is Photoshop's version of Ipsum. </p>
                            <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="width_control">
                    <div class="city_department_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/extra-images/department-fig2.jpg')}}" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('frontend/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_department_text">
                            <h5>Education</h5>
                            <p>This is Photoshop's version of Ipsum. </p>
                            <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="width_control">
                    <div class="city_department_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/extra-images/department-fig3.jpg')}}" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('frontend/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_department_text">
                            <h5>Health Care</h5>
                            <p>This is Photoshop's version of Ipsum. </p>
                            <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="width_control">
                    <div class="city_department_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/extra-images/department-fig4.jpg')}}" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('frontend/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_department_text">
                            <h5>Travel & Tourism</h5>
                            <p>This is Photoshop's version of Ipsum. </p>
                            <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="width_control">
                    <div class="city_department_fig">
                        <figure class="box">
                            <div class="box-layer layer-1"></div>
                            <div class="box-layer layer-2"></div>
                            <div class="box-layer layer-3"></div>
                            <img src="{{asset('frontend/extra-images/department-fig5.jpg')}}" alt="">
                            <a class="paly_btn" data-rel="prettyPhoto" href="{{asset('frontend/extra-images/department-fig.jpg')}}"><i class="fa fa-plus"></i></a>
                        </figure>
                        <div class="city_department_text">
                            <h5>Travel & Tourism</h5>
                            <p>This is Photoshop's version of Ipsum. </p>
                            <a href="#">See More<i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="pagination">
                <ul>
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li><a href="#">....</a></li>
                    <li><a href="#">08</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--CITY ABOUT WRAP START-->

@endsection