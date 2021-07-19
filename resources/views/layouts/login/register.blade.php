@extends('master')

@section('title')
Login or Register
@endsection

@section('frontend')

<!-- SAB BANNER START-->
<div class="sab_banner overlay">
    <div class="container">
        <div class="sab_banner_text">
            <h2>Register</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">register</li>
            </ul>
        </div>
    </div>
</div>
<!-- SAB BANNER END-->

<!--D HELP LOGIN WRAP START-->
<div class="city_login_wrap">
    <div class="container">
        <div class="city_login_list" style="justify-content: center; display: flex;">
            <div class="city_login register">
                <h4>create new account</h4>
                <form action="{{ route('register') }}" method="post" id="commentform" class="city_comment_form_login">
                    @csrf
                    <div class="city_commet_field">
                        <label for="name">Full Name</label>
                        <input class="@error('name') is_invalid @enderror" placeholder="fullname" id="name" type="text" name="name" :value="old('name')" data-default="Name*" size="30">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="city_commet_field">
                        <label for="email">email address</label>
                        <input class="@error('email') is_invalid @enderror" placeholder=" email address" id="email" type="email" name="email" :value="old('email')" data-default="Name*" size="30">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="city_commet_field">
                        <label for="mobile">Mobile No.</label>
                        <input class="@error('mobile') is_invalid @enderror" placeholder="mobile no." id="mobile" type="text" name="mobile" :value="old('mobile')" data-default="Name*" size="30">
                        @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="city_commet_field">
                        <label for="password">Password</label>
                        <input class="@error('password') is_invalid @enderror" placeholder="password" id="password" type="text" name="password" :value="old('password')" data-default="Name*" size="30">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="city_commet_field">
                        <label for="password_confirmation">Confirm Password</label>
                        <input class="@error('password_confirmation') is_invalid @enderror" placeholder="confirm password" id="password_confirmation" class="mb-0" type="text" name="password_confirmation" data-default="Name*" size="30">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="theam_btn">register</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--D HELP LOGIN WRAP END-->
@endsection