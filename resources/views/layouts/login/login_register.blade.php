@extends('master')

@section('title')
Login or Register
@endsection

@section('frontend')
<!--Page Header Start-->
<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-contact.jpg);">
    <div class="container">
        <h2>Sign in</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><span>Signin or register</span></li>
        </ul>
    </div>
</section>

<!--Contact One single-->
<section class="contact-one pt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 right_border">
                <div class="contact_one_left">
                    <div class="block-title text-left">
                        <h4 class="pb-4">Sign in</h4>
                        <div class="contact-one__form__wrap">
                            <x-jet-validation-errors class="mb-4" />

                            @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form action="{{ isset($guard) ? url($guard.'/login') : route('login') }}" method="POST" class="contact-one__form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input id="password" class="mb-0" type="text" name="password" :value="old('password')" required placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group contact__btn">
                                            <button type="submit" class="thm-btn contact-one__btn">Sign In</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="contact_one_left">
                    <div class="block-title text-left">
                        <h4 class="pb-4">Register</h4>
                        <div class="contact-one__form__wrap">
                            <x-jet-validation-errors class="mb-4" />
                            @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form action="{{ route('register') }}" method="post" class="contact-one__form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input id="name" type="text" name="name" :value="old('name')" required placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input id="email" type="email" name="email" :value="old('email')" required placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input id="mobile" type="text" name="mobile" :value="old('mobile')" required placeholder="Mobile No.">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input id="password" type="text" name="password" :value="old('password')" required placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input id="password_confirmation" class="mb-0" type="text" name="password_confirmation" required placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group contact__btn">
                                            <button type="submit" class="thm-btn contact-one__btn">Sign up</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection