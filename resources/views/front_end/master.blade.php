<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ViserHyip</title>
    <!-- favicon -->
    <link rel="icon" href="assets/img/favicon.png" sizes="16x16" type="image/png" />
    <!-- Stylesheet Link -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!--     <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
</head>

<body class="t-bg-secondary">
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader__container">
            <div class="preloader__text text-capitalize">V</div>
            <div class="preloader__text text-capitalize">i</div>
            <div class="preloader__text text-capitalize">s</div>
            <div class="preloader__text text-capitalize">e</div>
            <div class="preloader__text text-capitalize">r</div>
            <div class="preloader__text text-capitalize">h</div>
            <div class="preloader__text text-capitalize">y</div>
            <div class="preloader__text text-capitalize">i</div>
            <div class="preloader__text text-capitalize">p</div>
        </div>
    </div>
    <!-- Preloader -->
    <!-- Hero  -->
    <div class="vh-hero">
        <header class="vh-header">
            <div class="container">
                <div class="row g-3 align-items-center">
                    <div class="col-6 col-lg-3">
                        <!-- Logo  -->
                        <a href="{{ route('home') }}" class="vh-logo">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="viserhyip"
                                class="img-fluid vh-logo__is" />
                        </a>
                        <!-- Logo End -->
                    </div>
                    <div class="col-6 col-lg-9">
                        <div class="vh-nav-container">
                            <!-- Navigation Toggler  -->
                            <div class="text-end">
                                <button type="button" class="btn vh-nav--toggle d-lg-none">
                                    <i class="bx bx-menu"></i>
                                </button>
                            </div>
                            <!-- Navigation Toggler End -->

                            <!-- Navigation  -->
                            <nav class="vh-nav">
                                <!-- Primary Menu  -->

                                <li class="vh-primary-menu__list">
                                    <a href="{{ route('home') }}"
                                        class="vh-primary-menu__link text-capitalize">Home</a>
                                </li>
                                <li class="vh-primary-menu__list">
                                    <a href="{{ route('about') }}"
                                        class="vh-primary-menu__link text-capitalize">About</a>
                                </li>
                                <li class="vh-primary-menu__list">
                                    <a href="{{ route('faq') }}" class="vh-primary-menu__link text-capitalize">Faq</a>
                                </li>
                                <li class="vh-primary-menu__list">
                                    <a href="{{ route('contact') }}"
                                        class="vh-primary-menu__link text-capitalize">Contact</a>
                                </li>

                                <!-- User Login  -->
                                <div class="mx-3">
                                    <ul class="list vh-primary-menu vh-primary-menu--alt">
                                        <li class="vh-primary-menu__list text-center">
                                            <a href="{{ route('register') }}"
                                                class="
                            btn
                            button-outline
                            button-outline--exception
                            button-outline--gradient-orange
                            text-uppercase
                            w-100
                          ">
                                                sign up
                                            </a>
                                        </li>
                                        <li class="vh-primary-menu__list text-center">
                                            <a href="{{ route('login') }}"
                                                class="
                            btn
                            button-solid
                            btn-grad btn-grad--orange
                            text-uppercase
                            w-100
                          ">
                                                login
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- User Login End -->
                            </nav>
                            <!-- Navigation End -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')

        <div class="back-to-top">
            <span class="back-top">
                <i class='bx bxs-chevron-up'></i>
            </span>
        </div>
        <!-- Footer  -->
        <footer class="vh-footer-primary">
            <div class="vh-footer-primary__container t-pt-100">
                <div class="container">
                    <div class="row g-3 justify-content-center">
                        <div class="col-md-6">
                            <div class="text-center">
                                <!-- Logo  -->
                                <a href="index.html" class="t-link vh-footer-logo">
                                    <img src="assets/img/footer-logo.png" alt="viserhyip"
                                        class="img-fluid vh-footer-logo__is" />
                                </a>
                                <!-- Logo End -->
                            </div>
                            <div class="t-mt-30">
                                <ul class="list list--row justify-content-center">
                                    <li class="list--row__item">
                                        <a href="#"
                                            class="
                        t-link
                        vh-social-icon vh-social-icon--lg vh-social-icon--fb
                      ">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list--row__item">
                                        <a href="#"
                                            class="
                        t-link
                        vh-social-icon
                        vh-social-icon--lg
                        vh-social-icon--youtube
                      ">
                                            <i class="bx bxl-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list--row__item">
                                        <a href="#"
                                            class="
                        t-link
                        vh-social-icon vh-social-icon--lg vh-social-icon--tw
                      ">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list--row__item">
                                        <a href="#"
                                            class="
                        t-link
                        vh-social-icon vh-social-icon--lg vh-social-icon--pin
                      ">
                                            <i class="bx bxl-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vh-footer-primary__body">
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-4">
                                <h3 class="text-capitalize t-text-white vh-footer-primary__title">
                                    about hyipton
                                </h3>
                                <p class="vh-footer-primary__about t-text-white">
                                    Duis lobortis massa imperdiet quam.spendisse potenti.
                                    Pellentesque commodo eros a enim. Vestibulum turpis sem,
                                    aliquet eget
                                </p>
                            </div>
                            <div class="col-lg-8">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <h3
                                            class="
                        text-capitalize
                        t-text-white
                        vh-footer-primary__title
                      ">
                                            useful link
                                        </h3>
                                        <ul class="list list--column vh-footer-list">
                                            <li class="vh-footer-list__item list--column__item">
                                                <a href="pricing.html"
                                                    class="
                            t-link
                            vh-footer-list__link
                            text-capitalize
                            t-text-white
                          ">
                                                    hyip plan
                                                </a>
                                            </li>
                                            <li class="vh-footer-list__item list--column__item">
                                                <a href="privacy-policy.html"
                                                    class="
                            t-link
                            vh-footer-list__link
                            text-capitalize
                            t-text-white
                          ">
                                                    Privacy & Policy
                                                </a>
                                            </li>
                                            <li class="vh-footer-list__item list--column__item">
                                                <a href="dashboard.html"
                                                    class="
                            t-link
                            vh-footer-list__link
                            text-capitalize
                            t-text-white
                          ">
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li class="vh-footer-list__item list--column__item">
                                                <a href="sign-in.html"
                                                    class="
                            t-link
                            vh-footer-list__link
                            text-capitalize
                            t-text-white
                          ">
                                                    Login Account
                                                </a>
                                            </li>
                                            <li class="vh-footer-list__item list--column__item">
                                                <a href="faq.html"
                                                    class="
                            t-link
                            vh-footer-list__link
                            text-capitalize
                            t-text-white
                          ">
                                                    Teams Of Condition
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3
                                            class="
                        text-capitalize
                        t-text-white
                        vh-footer-primary__title
                      ">
                                            company
                                        </h3>
                                        <ul class="list list--column vh-footer-list">
                                            <li class="vh-footer-list__item list--column__item">
                                                <a href="about.html"
                                                    class="
                            t-link
                            vh-footer-list__link
                            text-capitalize
                            t-text-white
                          ">
                                                    About Company
                                                </a>
                                            </li>
                                            <li class="vh-footer-list__item list--column__item">
                                                <a href="contact.html"
                                                    class="
                            t-link
                            vh-footer-list__link
                            text-capitalize
                            t-text-white
                          ">
                                                    Contact Us
                                                </a>
                                            </li>
                                            <li class="vh-footer-list__item list--column__item">
                                                <a href="blog-post.html"
                                                    class="
                            t-link
                            vh-footer-list__link
                            text-capitalize
                            t-text-white
                          ">
                                                    Latest Blog
                                                </a>
                                            </li>
                                            <li class="vh-footer-list__item list--column__item">
                                                <a href="faq.html"
                                                    class="
                            t-link
                            vh-footer-list__link
                            text-capitalize
                            t-text-white
                          ">
                                                    Faq
                                                </a>
                                            </li>
                                            <li class="vh-footer-list__item list--column__item">
                                                <a href="investor.html"
                                                    class="
                            t-link
                            vh-footer-list__link
                            text-capitalize
                            t-text-white
                          ">
                                                    Top Investor
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3
                                            class="
                        text-capitalize
                        t-text-white
                        vh-footer-primary__title
                      ">
                                            Support
                                        </h3>
                                        <ul class="list list--column">
                                            <li class="list--column__item">
                                                <div class="d-flex">
                                                    <span
                                                        class="
                              d-inline-block
                              t-fw-md
                              text-capitalize
                              t-text-white
                              me-3
                              flex-shrink-0
                            ">
                                                        phone :
                                                    </span>
                                                    <ul class="list list--column">
                                                        <li class="list--column__item-sm t-text-white">
                                                            1234 - 567 - 89012
                                                        </li>
                                                        <li class="list--column__item-sm t-text-white">
                                                            1234 - 567 - 89013
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="list--column__item">
                                                <div class="d-flex">
                                                    <span
                                                        class="
                              d-inline-block
                              t-fw-md
                              text-capitalize
                              t-text-white
                              me-3
                              flex-shrink-0
                            ">
                                                        email :
                                                    </span>
                                                    <ul class="list list--column">
                                                        <li class="list--column__item-sm t-text-white">
                                                            <a href="https://template.viserlab.com/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="6703020a0827000a060e0b4904080a">[email&#160;protected]</a>
                                                        </li>
                                                        <li class="list--column__item-sm t-text-white">
                                                            <a href="https://template.viserlab.com/cdn-cgi/l/email-protection"
                                                                class="__cf_email__"
                                                                data-cfemail="533b2a3a23273c3d13343e323a3f7d3d3627">[email&#160;protected]</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <form action="#" class="vh-newsletter t-mt-30">
                                            <input type="text" class="vh-newsletter__input form-control"
                                                placeholder="email address" />
                                            <button class="vh-newsletter__btn flex-shrink-0">
                                                <i class="bx bxs-paper-plane"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vh-footer-primary__copyright">
                    <div class="container">
                        <div class="row g-3 justify-content-center">
                            <div class="col">
                                <p class="mb-0 t-text-white text-center text-capitalize">
                                    Copyright &copy; 2022 All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Scripts  -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/jquery.nice-select.js"></script>
        <script src="assets/js/bootstrap.bundle.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/odometer.js"></script>
        <script src="assets/js/fun-fact-counter.js"></script>
        <script src="assets/js/app.js"></script>
</body>


</html>
