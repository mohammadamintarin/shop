@extends('layouts.auth')

@section('content')
    <div class="row flex-row h-100 bg-white">
        <!-- Begin Right Content -->
        <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
            <!-- Begin Form -->
            <div class="login-form mx-auto">
                <div class="logo-centered">
                    <a href="index.html">
                        <img src="admin/image/logo.png" alt="logo">
                    </a>
                </div><h3><b>ثبت نام</b></h3><br>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="group material-input">
                        <input type="text" name="name"  autofocus value="{{old('name')}}">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>نام و نام خانوادگی</label>
                        @error('name')
                        <span class="red f-12">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group material-input">
                        <input type="email" required name="email" value="{{old('email')}}">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>پست الکترونیک</label>
                        @error('email')
                        <span class="red f-12">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group material-input">
                        <input type="text" required name="phone" value="{{old('phone')}}">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label> شماره موبایل</label>
                        @error('phone')
                        <span class="red f-12">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                    <div class="group material-input">
                        <input type="password" required name="password">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label> رمز عبور</label>
                        @error('password')
                        <span class="red f-12">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group material-input">
                        <input name="password_confirmation" required type="password">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>تکرار رمز عبور </label>
                    </div>
                    <div class="sign-btn text-center">
                        <button type="submit" class="btn btn-success btn-lg">
                            ثبت نام
                        </button>
                    </div>
                </form>

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
