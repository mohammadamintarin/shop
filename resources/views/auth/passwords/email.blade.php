@extends('layouts.auth')

@section('content')
    <div class="row flex-row h-100 bg-white">
        <!-- Begin Right Content -->
        <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
            <!-- Begin Form -->
            <div class="login-form mx-auto">
                <div class="logo-centered">
                    <a href="index.html">
                        <img src="assets/image/logo.png" alt="logo">
                    </a>
                </div><h3><b>فراموشی رمز عبور</b></h3><br>
                <form>
                    <div class="group material-input">
                        <input type="text" required="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>پست الکترونیک</label>
                    </div>
                </form>
                <br>
                <div class="row">
                    <div class="col text-right">
                        <a href="register.html">حساب کاربری ندارید؟ ثبت نام</a>
                    </div>
                    <div class="col text-left">
                        <a href="forgot-password.html">رمز خود را به خاطر دارید؟ ورود</a>
                    </div>
                </div>
                <br>
                <div class="sign-btn text-center">
                    <a href="" class="btn btn-lg btn-login">
                        <button type="submit" class="btn btn-success btn-lg">
                            بازنشانی رمز عبور از طریق پست الکترونیک
                        </button>
                    </a>
                </div>
            </div>


        </div>
        <!-- End Right Content -->
        <!-- Begin Left Content -->
        <div class="col-xl-8 col-lg-6 col-md-5 no-padding h-m">
            <div class="login-bg background-01">
                <div class="login-overlay overlay-01"></div>
                <div class="login-col-content mx-auto">
                    <h1 class="gradient-text-01">
                        تیتر شعار
                    </h1>
                    <span class="description">
            اینجا یک متن شعار میتواند قرار بگیرد اینجا یک متن شعار میتواند قرار بگیرد
          </span>
                </div>
            </div>
        </div>
        <!-- End Left Content -->

    </div>
@endsection
