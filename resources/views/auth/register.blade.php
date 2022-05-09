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
                    Create an Account
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
                        <a href="create-account.html" class="
                      t-link
                      vh-breadcrumbs__link
                      text-uppercase
                      t-text-white
                      t-link--primary
                    ">Regisistration</a>
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
</div>
<!-- Banner End -->

<div class="t-pt-120 t-pb-120 animate-section animate-section--feature">
    <div class="animate-section__el">
        <img src="assets/img/anime-dot-box-sm.png" alt="viserhyip" class="img-fluid animate-section--feature-1 animate-section__el-is">
        <img src="assets/img/anime-multi-line.png" alt="viserhyip" class="img-fluid animate-section--feature-2 animate-section__el-is">
        <img src="assets/img/anime-double-donut.png" alt="viserhyip" class="img-fluid animate-section--feature-3 animate-section__el-is">
        <img src="assets/img/anime-cross.png" alt="viserhyip" class="img-fluid animate-section--feature-4 animate-section__el-is">
        <img src="assets/img/anime-nut.png" alt="viserhyip" class="img-fluid animate-section--feature-5 animate-section__el-is">
        <img src="assets/img/anime-dot-box.png" alt="viserhyip" class="img-fluid animate-section--feature-6 animate-section__el-is">
    </div>
    <div class="container">
        <div class="row g-3">
            <div class="col-12">
                <div class="vh-auth">
                    <div class="row g-4">
                        <div class="col-md-6 col-xl-5">
                            <h3 class="vh-query__title t-text-white text-capitalize mb-3">
                                create an Account
                            </h3>

                            <x-auth-validation-errors class="mb-4" :errors="$errors" style="color: red;" />
                            <form method="POST" action="{{ route('register') }}" class="row g-4">

                                @csrf
                                <div class="col-12">
                                    <input type="text" name="name" value="{{ old('name') }}" required class="
                          form-control
                          form-control-custom
                          form-control-custom--outline
                          form-control-custom--outline-thin
                          t-text-white
                        " placeholder="full name" />
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" value="{{ old('email') }}" required class="
                          form-control
                          form-control-custom
                          form-control-custom--outline
                          form-control-custom--outline-thin
                          t-text-white
                        " placeholder="email" />
                                </div>
                                <div class="col-12">
                                    <input type="password" name="password" required class="
                          form-control
                          form-control-custom
                          form-control-custom--outline
                          form-control-custom--outline-thin
                          t-text-white
                        " placeholder="Password" />
                                </div>
                                <div class="col-12">
                                    <input type="password" name="password_confirmation" required class="
                          form-control
                          form-control-custom
                          form-control-custom--outline
                          form-control-custom--outline-thin
                          t-text-white
                        " placeholder="confirm Password" />
                                </div>
                                <div class="col-12">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="form-check form-check-custom me-2 me-md-3">
                                            <input class="form-check-input" type="checkbox" value="" id="rememberMe" required/>
                                            <label class="
                              form-check-label
                              text-capitalize
                              t-text-white
                            " for="rememberMe">
                                                i agree with all
                                                <a href="privacy-policy.html" class="
                                t-link t-link--primary
                                t-primary-clr
                                text-capitalize
                                d-inline-block
                              ">
                                                    Terms & Condition
                                                </a>
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
                                        Already you have an account in here?
                                        <a href="{{ route('login')}}" class="
                            t-link t-link--primary
                            t-primary-clr
                            text-capitalize
                            d-inline-block
                          ">
                                            Sign In
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 ms-xl-auto">
                            <div class="text-center">
                                <img src="assets/img/auth-img.png" alt="viserhyip" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection