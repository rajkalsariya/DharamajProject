@extends('master')

@section('title')
Login or Register
@endsection

@section('frontend')

<!-- SAB BANNER START-->
<div class="sab_banner overlay">
    <div class="container">
        <div class="sab_banner_text">
            <h2>Login</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">login</li>
            </ul>
        </div>
    </div>
</div>
<!-- SAB BANNER END-->

<!--D HELP LOGIN WRAP START-->
<div class="city_login_wrap">
    <div class="container">
        <div class="city_login_list" style="justify-content: center; display: flex;">
            <div class="city_login">
                <h4>sing in</h4>
                <form action="{{ isset($guard) ? url($guard.'/login') : route('login') }}" method="POST" id="commentform1" class="city_comment_form_login">
                    @csrf
                    <div class="city_commet_field">
                        <label for="email">Email address</label>
                        <input class="@error('email') is_invalid @enderror" id="email" placeholder="email address" type="email" name="email" :value="old('email')" autofocus data-default="Name*" size="30">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="city_commet_field">
                        <label for="password">password</label>
                        <input class="@error('password') is_invalid @enderror" id="password" placeholder="password" name="password" type="text" :value="old('password')" data-default="Name*" size="30">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                    </div>
                    <div class="city_checked">
                        <div class="checkbox_radio">
                            <input id="forget" type="checkbox" />
                            <label for="forget">Forget Paswword</label>
                        </div>
                        <a class="city_forget" href="#">Remember me</a>
                    </div>
                    <button class="theam_btn" type="submit">login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--D HELP LOGIN WRAP END-->
@endsection