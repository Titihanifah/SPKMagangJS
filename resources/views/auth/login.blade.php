<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>
        Jamaah Shalahuddin | Login
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });


    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="{{('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="{{ url('assets/demo/default/media/img/logo/logo_title.ico') }}" />
</head>
<!-- end::Head -->
<!-- end::Body -->
<body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
        <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
            <div class="m-stack m-stack--hor m-stack--desktop">
                <div class="m-stack__item m-stack__item--fluid">
                    <div class="m-login__wrapper">
                        <div class="m-login__logo">
                            <a href="#">
                                <img alt="" src="{{('assets/demo/default/media/img/logo/logo_login.jpg')}}"/>
                            </a>
                        </div>
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">
                                    {{--Masuk ke dalam sistem--}}
                                    {{ __('Login') }}
                                </h3>
                            </div>
                            <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group m-form__group">
                                    {{--<div class="m-input-icon m-input-icon--left m-input-icon--right">--}}
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} m-input" value="{{ old('email') }}" placeholder="Email" name="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    {{--</div>--}}
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} m-input" type="password" placeholder="Password" name="password" required autofocus>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="row m-login__form-sub">
                                    <div class="col m--align-left">
                                        <label class="m-checkbox m-checkbox--focus">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col m--align-right">
                                        {{--<a href="javascript:;" id="m_login_forget_password" class="m-link">--}}
                                            {{--Forget Password ?--}}
                                        {{--</a>--}}
                                    </div>
                                </div>
                                <div class="m-login__form-action">
                                    <button type="submit" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">

                                        {{ __('Login') }}
                                    </button>
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                </div>
                            </form>
                        </div>
                        <div class="m-login__signup">
                            <div class="m-login__head">
                                <h3 class="m-login__title">
                                    Sign Up
                                </h3>
                                <div class="m-login__desc">
                                    Enter your details to create your account:
                                </div>
                            </div>
                            <form class="m-login__form m-form" action="">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Fullname" name="fullname">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="password" placeholder="Password" name="password">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
                                </div>
                                <div class="row form-group m-form__group m-login__form-sub">
                                    <div class="col m--align-left">
                                        <label class="m-checkbox m-checkbox--focus">
                                            <input type="checkbox" name="agree">
                                            I Agree the
                                            <a href="#" class="m-link m-link--focus">
                                                terms and conditions
                                            </a>
                                            .
                                            <span></span>
                                        </label>
                                        <span class="m-form__help"></span>
                                    </div>
                                </div>
                                <div class="m-login__form-action">
                                    {{--{{ __('Register') }}--}}
                                    <button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                        Sign Up
                                    </button>
                                    <button id="m_login_signup_cancel" class="btn btn-outline-focus  m-btn m-btn--pill m-btn--custom">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="m-login__forget-password">
                            <div class="m-login__head">
                                <h3 class="m-login__title">
                                    Forgotten Password ?
                                </h3>
                                <div class="m-login__desc">
                                    Enter your email to reset your password:
                                </div>
                            </div>
                            <form class="m-login__form m-form" action="">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                        Request
                                    </button>
                                    <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="m-stack__item m-stack__item--center">
                    {{--<div class="m-login__account">--}}
								{{--<span class="m-login__account-msg">--}}
									{{--Don't have an account yet ?--}}
								{{--</span>--}}
                        {{--&nbsp;&nbsp;--}}
                        {{--<a href="javascript:;" id="m_login_signup" class="m-link m-link--focus m-login__account-link">--}}
                            {{--Sign Up--}}
                        {{--</a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url(../../../assets/app/media/img//bg/bg-4.jpg)">
            <div class="m-grid__item m-grid__item--middle">
                <h5 class="m-login__msg"><center>Sistem Presensi dan Penilaian Magang </center></h5>
                <h5 class="m-login__msg"><center>Calon Anggota Baru</center></h5>
                <hr>
                <h4 class="m-login__welcome"><center>Jamaah Shalahuddin</center></h4>
            </div>
        </div>
    </div>
</div>
<!-- end:: Page -->
<!--begin::Base Scripts -->
<script src="{{('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Snippets -->
<script src="{{('assets/snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
