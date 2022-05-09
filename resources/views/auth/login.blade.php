@extends('front_end.master')
@section('content')


<div class="vh-banner__content">
    <div class="container">
        <div class="row g-3 justify-content-center">
            <div class="col-md-10 col-xl-6">
                <h2 class="
                  t-text-white
                  text-capitalize text-center
                  mb-3
                  vh-section-title
                ">
                    Sign In Account
                </h2>
                <ul class="list list--row vh-breadcrumbs justify-content-center">
                    <li class="list--row__item vh-breadcrumbs__item">
                        <a href="index.html" class="
                      t-link
                      vh-breadcrumbs__link
                      text-uppercase
                      t-text-white
                      t-link--primary
                    ">home</a>
                    </li>
                    <li class="list--row__item vh-breadcrumbs__item">
                        <a href="sign-in.html" class="
                      t-link
                      vh-breadcrumbs__link
                      text-uppercase
                      t-text-white
                      t-link--primary
                    ">sign in</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="vh-banner__img">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="assets/img/banner-img.png" alt="viserhyip" class="img-fluid mx-auto" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="t-pt-120 t-pb-120 animate-section animate-section--feature">
    <div class="animate-section__el">
        <img src="assets/img/anime-dot-box-sm.png" alt="viserhyip" class="img-fluid animate-section--feature-1 animate-section__el-is">
        <img src="assets/img/anime-multi-line.png" alt="viserhyip" class="img-fluid animate-section--feature-2 animate-section__el-is">
        <img src="assets/img/anime-double-donut.png" alt="viserhyip" class="img-fluid animate-section--feature-3 animate-section__el-is">
        <img src="assets/img/anime-cross.png" alt="viserhyip" class="img-fluid animate-section--feature-4 animate-section__el-is">
        <img src="assets/img/anime-nut.png" alt="viserhyip" class="img-fluid animate-section--feature-5 animate-section__el-is">
        <img src="assets/img/anime-dot-box.png" alt="viserhyip" class="img-fluid animate-section--feature-6 animate-section__el-is">
    </div>
    <!-- Session Status -->

    <div class="container">
        <div class="row g-3">
            <div class="col-12">
                <div class="vh-auth">
                    <div class="row g-4">
                        <div class="col-md-6 col-xl-5">
                            <h3 class="vh-query__title t-text-white text-capitalize mb-3">
                                Sign In Account
                            </h3>
                            <x-auth-session-status class="mb-4" :status="session('status')" style="color: red;"/>

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" style="color: red;" />
                            <form method="POST" action="{{ route('login') }}" class="row g-4">
                                @csrf
                                <div class="col-12">
                                    <input type="text" class="
                          form-control
                          form-control-custom
                          form-control-custom--outline
                          form-control-custom--outline-thin
                          t-text-white
                        " placeholder="your email" type="email" name="email" value="{{ old('email') }}" required />
                                </div>
                                <div class="col-12">
                                    <input type="password" name="password" class="
                          form-control
                          form-control-custom
                          form-control-custom--outline
                          form-control-custom--outline-thin
                          t-text-white
                        " placeholder="Password" />
                                </div>
                                <div class="col-12">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="form-check form-check-custom me-2 me-md-3">
                                            <input class="form-check-input" type="checkbox" value="" id="rememberMe" />
                                            <label class="
                              form-check-label
                              text-capitalize
                              t-text-white
                            " for="rememberMe">
                                                remember me
                                            </label>
                                        </div>
                                        <div class="form-check form-check-custom">
                                            <input class="form-check-input" type="checkbox" value="" id="forgetPass" />
                                            <label class="
                              form-check-label
                              text-capitalize
                              t-text-white
                            " for="forgetPass">
                                                forget password
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="
                          btn btn--lg
                          button-solid
                          btn-grad btn-grad--orange
                          text-uppercase
                          btn--sqr
                          w-100
                        ">
                                        Sign In Account
                                    </button>
                                </div>
                                <div class="col-12">
                                    <p class="mb-0 t-text-white text-capitalize">
                                        Don't have on Account yet?
                                        <a href="{{ route('register')}}" class="
                            t-link t-link--primary
                            t-primary-clr
                            text-capitalize
                            d-inline-block
                          ">
                                            Create Account
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 ms-xl-auto">
                            <div class="text-center">
                                <img src="assets/img/auth-img.png" alt="viserhyip" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection