@extends('front_end.master')
@section('content')

<div class="vh-hero__content">
    <div class="container">
        <div class="row g-3 justify-content-center">
            <div class="col-md-8 col-lg-6 text-center text-lg-start">
                <h1 class="vh-hero__content-title text-capitalize mb-3">
                    Trade with Khristós & get
                    <span class="t-primary-clr">your profit</span>
                </h1>
                <p class="vh-hero__content-text">
                    Khristós offer's you a second chance by giving you access to  making more coins within the space of days to few hours depending on your choiced active plan.
                </p>
                <a href="{{ route('register')}}" class="
                  btn btn--lg
                  button-solid
                  btn-grad btn-grad--orange
                  text-uppercase
                ">
                    get started
                </a>
            </div>
            <div class="col-lg-6">
                <img src="assets/img/hero-img.png" alt="viserhyip" class="img-fluid vh-hero__content-img" />
            </div>
        </div>
    </div>
</div>
</div>
<!-- Hero End -->

<!-- Investment plan Section  -->
<section class="t-pt-110 t-pb-120">
      <div class="container">
        <div class="row g-3 justify-content-center">
          <div class="col-md-10 col-xl-6">
            <h2
              class="
                t-text-white
                text-capitalize text-center
                mb-3
                vh-section-title
              "
            >
              
            </h2>
            <p class="vh-section-title--text t-text-white text-center mx-auto">
              Maecenas tempus tellus eget condimentum rhoncus sem quam semper
              libero
            </p>
          </div>
        </div>
        <div class="t-mt-40">
          <div class="row g-3 g-lg-4">

            @foreach (App\Models\Plan::all() as $plan)
            <div class="col-md-6 col-xl-3">
              <div class="vh-plan-card t-bg-gradient-teal text-center">
                <div class="vh-plan-card__head">
                  <h2 class="t-text-white text-center">{{ $plan->days }}</h2>
                  <span
                    class="vh-plan-card__head-text text-capitalize text-center"
                    >Days</span
                  >
                </div>
                <hr class="vh-plan-card__seperate" />
                <div class="vh-plan-card__body">
                  <span class="vh-plan-card__body-info text-uppercase mb-3"
                    >{{ $plan->name }}</span
                  >
                  <ul class="list list--column vh-plan-card__list">
                    <li class="vh-plan-card__list-item">
                      <div class="vh-plan-card__list-text text-capitalize">
                        min :
                      </div>
                      <div class="vh-plan-card__list-text text-uppercase">
                        {{ $plan->min }}
                      </div>
                    </li>
                    <li class="vh-plan-card__list-item">
                      <div class="vh-plan-card__list-text text-capitalize">
                        max :
                      </div>
                      <div class="vh-plan-card__list-text text-uppercase">
                        {{ $plan->max }}
                      </div>
                    </li>
                    <li class="vh-plan-card__list-item">
                        <div class="vh-plan-card__list-text text-capitalize">
                        Payout :
                        </div>
                        <div class="vh-plan-card__list-text text-uppercase">
                          {{ $plan->profit_percentage }}
                        </div>
                      </li>
                  </ul>
                  
                  
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
<!-- Investment plan Section End -->

<!-- About Us  -->
<section class="t-pb-120 animate-section animate-section--about">
    <div class="animate-section__el">
        <img src="assets/img/anime-line.png" alt="viserhyip" class="img-fluid animate-section--about-1 animate-section__el-is">
        <img src="assets/img/anime-dot.png" alt="viserhyip" class="img-fluid animate-section--about-2 animate-section__el-is">
        <img src="assets/img/anime-triangle.png" alt="viserhyip" class="img-fluid animate-section--about-3 animate-section__el-is">
    </div>
    <div class="container">
        <div class="row g-5 g-lg-3">
            <div class="col-lg-6 text-center">
                <img src="assets/img/about-img.png" alt="viserhyip" class="img-fluid" />
            </div>
            <div class="col-lg-6">
                
                <h2 class="
                t-text-white
                text-capitalize
                mb-2
                vh-section-title
                text-center text-lg-start
              ">
                    About Us
                </h2>
                <p class="
                vh-section-title--text
                t-text-white
                lg-text
                mb-4
                text-center
                mx-auto
                text-lg-start
                me-lg-auto
                ms-lg-0
              ">
              Founded in 2022, Khristós Trade is a global cryptocurrency company operating across Oceania, US, Africa & Europe. The purpose was to stop the number of suicides  reported recently owing to cryptocurrency losses, pointing towards the long-standing connection between financial woes and mental health.<br><br>
              More recently, an individual from Turkey killed his two children and wife before dying by suicide due to losses from bitcoin investments in March this year. Just a month later, a temporary public sector bank employee in India consumed rat poison and died after losing over $13,600 in bitcoin investments due to a ‘technical lapse,’ the New Indian Express reported.
Thesame month, an investor from South Korea also died by suicide after suffering losses of over $180,000 in an investment in unnamed crypto assets, according to a Crypto News report. These are just some of the examples of cryptocurrency-related suicides reported recently.
                </p>
                
            </div>
        </div>
    </div>
</section>
<!-- About Us End -->

<!-- Profit Calculate -->
<section class="calculate-section t-pt-120 t-pb-120 animate-section--calculate">
    <div class="animate-section__el">
        <img src="assets/img/anime-donut.png" alt="viserhyip" class="img-fluid animate-section--calculate-1 animate-section__el-is">
    </div>
    <div class="container">
        <div class="row g-5 g-lg-3">
            <div class="col-lg-6">
                <div class="t-mb-40">
                    <span class="
                  vh-section-title--sub
                  text-uppercase
                  t-primary-clr
                  text-center text-lg-start
                ">Profit Calculate</span>
                    <h2 class="
                  t-text-white
                  text-capitalize
                  mb-2
                  vh-section-title
                  text-center text-lg-start
                ">
                        Calculate Your Profit
                    </h2>
                </div>

                <form action="#" class="row g-3">
                    <div class="col-xl-10">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="text-capitalize t-text-white d-block mb-2">plan</label>
                                <div class="
                        vh-nice-select
                        vh-nice-select--light
                        vh-nice-select--outline
                      ">
                                    <select>
                                        <option data-display="Choose Plan">Choose Plan</option>
                                        <option value="1">Plan 1</option>
                                        <option value="2">Plan 2</option>
                                        <option value="3">Plan 3</option>
                                        <option value="4">Plan 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="compounding" class="text-capitalize t-text-white d-block mb-2">compounding</label>
                                <input type="text" class="
                        form-control
                        form-control-custom
                        form-control-custom--outline
                        form-control-custom--outline-light
                        t-text-white
                      " placeholder="20%" id="compounding" />
                            </div>
                            <div class="col-md-6">
                                <label for="minimumInvestment" class="text-capitalize t-text-white d-block mb-2">Minimum Investment</label>
                                <input type="text" class="
                        form-control
                        form-control-custom
                        form-control-custom--outline
                        form-control-custom--outline-light
                        t-text-white
                      " placeholder="$1500" id="minimumInvestment" />
                            </div>
                            <div class="col-md-6">
                                <label for="maximumInvestment" class="text-capitalize t-text-white d-block mb-2">Maximum Investment</label>
                                <input type="text" class="
                        form-control
                        form-control-custom
                        form-control-custom--outline
                        form-control-custom--outline-light
                        t-text-white
                      " placeholder="$2000" id="maximumInvestment" />
                            </div>
                            <div class="col-md-6">
                                <label for="investments" class="text-capitalize t-text-white d-block mb-2">Investment</label>
                                <input type="text" class="
                        form-control
                        form-control-custom
                        form-control-custom--outline
                        form-control-custom--outline-light
                        t-text-white
                      " placeholder="$35000" id="investments" />
                            </div>
                            <div class="col-md-6">
                                <label for="interests" class="text-capitalize t-text-white d-block mb-2">Interest</label>
                                <input type="text" class="
                        form-control
                        form-control-custom
                        form-control-custom--outline
                        form-control-custom--outline-light
                        t-text-white
                      " placeholder="$350" id="interests" />
                            </div>
                            <div class="col-md-6">
                                <label for="profits" class="text-capitalize t-text-white d-block mb-2">profit</label>
                                <input type="text" class="
                        form-control
                        form-control-custom
                        form-control-custom--outline
                        form-control-custom--outline-light
                        t-text-white
                      " placeholder="$5500" id="profits" />
                            </div>
                            <div class="col-md-6">
                                <label for="returns" class="text-capitalize t-text-white d-block mb-2">total return</label>
                                <input type="text" class="
                        form-control
                        form-control-custom
                        form-control-custom--outline
                        form-control-custom--outline-light
                        t-text-white
                      " placeholder="$6000" id="returns" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <img src="assets/img/cal-img.png" alt="viserhyip" class="img-fluid mx-atuo" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Profit Calculate End -->

<!-- Investor -->
<section class="investor-section t-pt-110 t-pb-120">
    <div class="container">
        <div class="row g-3 justify-content-center">
            <div class="col-md-10 col-xl-6">
                <span class="
                vh-section-title--sub
                text-uppercase
                t-primary-clr
                text-center
              ">investor</span>
                <h2 class="
                t-text-white
                text-capitalize text-center
                mb-3
                vh-section-title
              ">
                    Our Top Khristós Investors
                </h2>
                <p class="vh-section-title--text t-text-white text-center mx-auto">
                    Maecenas tempus tellus eget condimentum rhoncus sem quam semper
                    libero
                </p>
            </div>
        </div>
        <div class="t-mt-40">
            <div class="row g-3 g-lg-4 g-xl-5">
                <div class="col-md-6 col-xl-3">
                    <div class="vh-team">
                        <div class="vh-team__img">
                            <img src="assets/img/team-1.jpg" alt="viserhyip" class="img-fluid vh-team__img-is" />
                            <div class="vh-team__overlay">
                                <h4 class="text-capitalize t-text-white text-center">
                                    Robart Williams
                                </h4>
                                <span class="d-block t-text-white text-capitalize text-center">
                                    Investment : 3000 USD
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="vh-team">
                        <div class="vh-team__img">
                            <img src="assets/img/team-2.jpg" alt="viserhyip" class="img-fluid vh-team__img-is" />
                            <div class="vh-team__overlay">
                                <h4 class="text-capitalize t-text-white text-center">
                                    Robart Williams
                                </h4>
                                <span class="d-block t-text-white text-capitalize text-center">
                                    Investment : 3000 USD
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="vh-team">
                        <div class="vh-team__img">
                            <img src="assets/img/team-3.jpg" alt="viserhyip" class="img-fluid vh-team__img-is" />
                            <div class="vh-team__overlay">
                                <h4 class="text-capitalize t-text-white text-center">
                                    Robart Williams
                                </h4>
                                <span class="d-block t-text-white text-capitalize text-center">
                                    Investment : 3000 USD
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="vh-team">
                        <div class="vh-team__img">
                            <img src="assets/img/team-4.jpg" alt="viserhyip" class="img-fluid vh-team__img-is" />
                            <div class="vh-team__overlay">
                                <h4 class="text-capitalize t-text-white text-center">
                                    Robart Williams
                                </h4>
                                <span class="d-block t-text-white text-capitalize text-center">
                                    Investment : 3000 USD
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Investor End -->


<!-- Feature Section  -->
<section class="feature-section t-pt-115 t-pb-100">
    <div class="container">
        <div class="row g-3 justify-content-center">
            <div class="col-md-10 col-xl-8">
                <span class="
                vh-section-title--sub
                text-uppercase
                t-primary-clr
                text-center
              ">Awesome features
                </span>
                <h2 class="
                t-text-white
                text-capitalize text-center
                mb-3
                vh-section-title
              ">
                    Why Choose Our Investment
                </h2>
                <p class="vh-section-title--text t-text-white text-center mx-auto">
                    Curabitur ullamcorper ultricies nisi Nam eget dui. Etiam rhoncus
                    fdsf df vulputate.
                </p>
            </div>
        </div>
        <div class="t-mt-40">
            <div class="row g-3">
                <div class="col-lg-4">
                    <ul class="
                  list list--column
                  align-items-center align-items-lg-start
                ">
                        <li class="list--column__item">
                            <div class="d-flex">
                                <div class="
                        me-4 me-lg-0
                        vh-icon-box-1 vh-icon-box-1--sm
                        flex-shrink-0
                        order-lg-2
                      " style="
                        background-image: url(assets/img/icon-bg-sm-1.png);
                      ">
                                    <i class="bx bx-headphone"></i>
                                </div>
                                <div class="vh-article order-lg-1 me-lg-4">
                                    <span class="
                          vh-article__title
                          t-text-white
                          text-capitalize
                          mb-2
                          text-lg-end
                        ">STRONG SECURITY
                    </span>
                                    <p class="vh-article__text t-text-white text-lg-end">
                                        Protection against DDoS attacks,
full data encryption.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list--column__item">
                            <div class="d-flex me-xxl-5">
                                <div class="
                        me-4 me-lg-0
                        vh-icon-box-1 vh-icon-box-1--sm
                        flex-shrink-0
                        order-lg-2
                      " style="
                        background-image: url(assets/img/icon-bg-sm-2.png);
                      ">
                                    <i class="bx bx-rocket"></i>
                                </div>
                                <div class="vh-article order-lg-1 me-lg-4">
                                    <span class="
                          vh-article__title
                          t-text-white
                          text-capitalize
                          mb-2
                          text-lg-end
                        ">WORLD COVERAGE</span>
                                    <p class="vh-article__text t-text-white text-lg-end">
                                        Providing services in 99% countries
around all the globe.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list--column__item">
                            <div class="d-flex">
                                <div class="
                        me-4 me-lg-0
                        vh-icon-box-1 vh-icon-box-1--sm
                        flex-shrink-0
                        order-lg-2
                      " style="
                        background-image: url(assets/img/icon-bg-sm-3.png);
                      ">
                                    <i class="bx bx-rocket"></i>
                                </div>
                                <div class="vh-article order-lg-1 me-lg-4">
                                    <span class="
                          vh-article__title
                          t-text-white
                          text-capitalize
                          mb-2
                          text-lg-end
                        ">PAYMENT OPTIONS
                    </span>
                                    <p class="vh-article__text t-text-white text-lg-end">
                                        Popular methods: Visa, MasterCard,
bank transfer, cryptocurrency.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="text-center">
                        <img src="assets/img/feature-img.png" alt="viserhyip" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="
                  list list--column
                  align-items-center align-items-lg-start
                ">
                        <li class="list--column__item">
                            <div class="d-flex">
                                <div class="me-4 vh-icon-box-1 vh-icon-box-1--sm flex-shrink-0" style="
                        background-image: url(assets/img/icon-bg-sm-1.png);
                      ">
                                    <i class="bx bx-headphone"></i>
                                </div>
                                <div class="vh-article">
                                    <span class="
                          vh-article__title
                          t-text-white
                          text-capitalize
                          mb-2
                        ">COST EFFICIENCY</span>
                                    <p class="vh-article__text t-text-white">
                                        Reasonable trading fees for takers
and all market makers.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list--column__item">
                            <div class="d-flex ms-xxl-5">
                                <div class="me-4 vh-icon-box-1 vh-icon-box-1--sm flex-shrink-0" style="
                        background-image: url(assets/img/icon-bg-sm-2.png);
                      ">
                                    <i class="bx bx-headphone"></i>
                                </div>
                                <div class="vh-article">
                                    <span class="
                          vh-article__title
                          t-text-white
                          text-capitalize
                          mb-2
                        ">HIGH LIQUIDITY
                    </span>
                                    <p class="vh-article__text t-text-white">
                                        Fast access to high liquidity orderbook
for top currency pairs.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list--column__item">
                            <div class="d-flex">
                                <div class="me-4 vh-icon-box-1 vh-icon-box-1--sm flex-shrink-0" style="
                        background-image: url(assets/img/icon-bg-sm-3.png);
                      ">
                                    <i class="bx bx-headphone"></i>
                                </div>
                                <div class="vh-article">
                                    <span class="
                          vh-article__title
                          t-text-white
                          text-capitalize
                          mb-2
                        ">[24/7] SUPPORT</span>
                                    <p class="vh-article__text t-text-white">
                                        Our live support is a key ingredient in the success of our company services. Our experts are well-qualified. We provide you with qualitative support consult 24/7 online live chat support for our members..


                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Section End -->

<!-- Fun Fact  -->
<div class="fact-section t-pt-120 t-pb-120 t-bg-alpha">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="vh-fact-box vh-fact-box--orange-border text-center">
                    <div class="d-flex justify-content-center">
                        <span class="vh-fact-box__icon me-3">
                            <img src="assets/img/fact-icon-1.svg" alt="viserhyip" class="img-fluid" />
                        </span>
                        <h2 class="vh-fact-box__title t-text-white">
                            <span class="odometer" id="activeMember">0</span>
                            <span class="vh-fact-box__title-sm text-capitalize">m</span>
                        </h2>
                    </div>
                    <h4 class="vh-fact-box__sub-title text-capitalize t-text-white mt-2">
                        active members
                    </h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="vh-fact-box vh-fact-box--purple-border text-center">
                    <div class="d-flex justify-content-center">
                        <span class="vh-fact-box__icon me-3">
                            <img src="assets/img/fact-icon-2.svg" alt="viserhyip" class="img-fluid" />
                        </span>
                        <h2 class="vh-fact-box__title t-text-white">
                            <span class="odometer" id="totalDeposite">0</span>
                            <span class="vh-fact-box__title-sm text-capitalize">m</span>
                        </h2>
                    </div>
                    <h4 class="vh-fact-box__sub-title text-capitalize t-text-white mt-2">
                        Total Deposit
                    </h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="vh-fact-box vh-fact-box--teal-border text-center">
                    <div class="d-flex justify-content-center">
                        <span class="vh-fact-box__icon me-3">
                            <img src="assets/img/fact-icon-3.svg" alt="viserhyip" class="img-fluid" />
                        </span>
                        <h2 class="vh-fact-box__title t-text-white">
                            <span class="odometer" id="totalWithdraw">0</span>
                            <span class="vh-fact-box__title-sm text-capitalize">m</span>
                        </h2>
                    </div>
                    <h4 class="vh-fact-box__sub-title text-capitalize t-text-white mt-2">
                        Total Withdraw
                    </h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="vh-fact-box vh-fact-box--green-border text-center">
                    <div class="d-flex justify-content-center">
                        <span class="vh-fact-box__icon me-3">
                            <img src="assets/img/fact-icon-4.svg" alt="viserhyip" class="img-fluid" />
                        </span>
                        <h2 class="vh-fact-box__title t-text-white">
                            <span class="odometer" id="totlaLocation">0</span>
                            <span class="vh-fact-box__title-sm text-capitalize">+</span>
                        </h2>
                    </div>
                    <h4 class="vh-fact-box__sub-title text-capitalize t-text-white mt-2">
                        Our Cover Area
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fun Fact End -->

<!-- Transection Section -->
<section class="transection-section t-pt-120 t-pb-120">
    <div class="container">
        <div class="row g-3 g-xl-4">
            <div class="col-lg-6">
                <h2 class="t-text-white text-capitalize mb-4 vh-section-title">
                    Latest Deposits
                </h2>
                <div class="table-responsive vh-table">
                    <table class="table mb-0">
                        <thead>
                            <tr class="vh-table__rounded t-bg-gradient-orange">
                                <th class="
                        t-text-white
                        text-capitalize
                        lg-text
                        t-heading-font
                        p-3
                        t-fw-md
                      ">
                                    user name
                                </th>
                                <th class="
                        t-text-white
                        text-capitalize
                        lg-text
                        t-heading-font
                        p-3
                        t-fw-md
                      ">
                                    amount
                                </th>
                                <th class="
                        t-text-white
                        text-capitalize
                        lg-text
                        t-heading-font
                        p-3
                        t-fw-md
                      ">
                                    wallet
                                </th>
                                <th class="
                        t-text-white
                        text-capitalize
                        lg-text
                        t-heading-font
                        p-3
                        t-fw-md
                      ">
                                    date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="t-text-white">
                                    <div class="vh-user">
                                        <div class="
                            vh-user__img vh-user__img--sm
                            align-items-center
                            me-3
                          ">
                                            <img src="assets/img/team-1.jpg" alt="viserhyip" class="img-fluid vh-user__img-is" />
                                        </div>
                                        <div class="t-text-white text-capitalize">
                                            robart willam
                                        </div>
                                    </div>
                                </td>
                                <td class="t-text-white">$1500</td>
                                <td class="t-text-white">Payoneer</td>
                                <td class="t-text-white">25 May 2021</td>
                            </tr>
                            <tr>
                                <td class="t-text-white">
                                    <div class="vh-user">
                                        <div class="
                            vh-user__img vh-user__img--sm
                            align-items-center
                            me-3
                          ">
                                            <img src="assets/img/team-2.jpg" alt="viserhyip" class="img-fluid vh-user__img-is" />
                                        </div>
                                        <div class="t-text-white text-capitalize">
                                            Licas Kasino
                                        </div>
                                    </div>
                                </td>
                                <td class="t-text-white">$15000</td>
                                <td class="t-text-white">Bank Wire</td>
                                <td class="t-text-white">25 May 2021</td>
                            </tr>
                            <tr>
                                <td class="t-text-white">
                                    <div class="vh-user">
                                        <div class="
                            vh-user__img vh-user__img--sm
                            align-items-center
                            me-3
                          ">
                                            <img src="assets/img/team-3.jpg" alt="viserhyip" class="img-fluid vh-user__img-is" />
                                        </div>
                                        <div class="t-text-white text-capitalize">
                                            Jobs Tincos
                                        </div>
                                    </div>
                                </td>
                                <td class="t-text-white">$1500</td>
                                <td class="t-text-white">block.io</td>
                                <td class="t-text-white">25 May 2021</td>
                            </tr>
                            <tr>
                                <td class="t-text-white">
                                    <div class="vh-user">
                                        <div class="
                            vh-user__img vh-user__img--sm
                            align-items-center
                            me-3
                          ">
                                            <img src="assets/img/team-4.jpg" alt="viserhyip" class="img-fluid vh-user__img-is" />
                                        </div>
                                        <div class="t-text-white text-capitalize">
                                            Wilak Zijan
                                        </div>
                                    </div>
                                </td>
                                <td class="t-text-white">$1500</td>
                                <td class="t-text-white">Paypal</td>
                                <td class="t-text-white">25 May 2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="t-text-white text-capitalize mb-4 vh-section-title">
                    Latest Withdraw
                </h2>
                <div class="table-responsive vh-table">
                    <table class="table mb-0">
                        <thead>
                            <tr class="vh-table__rounded t-bg-gradient-purple">
                                <th class="
                        t-text-white
                        text-capitalize
                        lg-text
                        t-heading-font
                        p-3
                        t-fw-md
                      ">
                                    user name
                                </th>
                                <th class="
                        t-text-white
                        text-capitalize
                        lg-text
                        t-heading-font
                        p-3
                        t-fw-md
                      ">
                                    amount
                                </th>
                                <th class="
                        t-text-white
                        text-capitalize
                        lg-text
                        t-heading-font
                        p-3
                        t-fw-md
                      ">
                                    wallet
                                </th>
                                <th class="
                        t-text-white
                        text-capitalize
                        lg-text
                        t-heading-font
                        p-3
                        t-fw-md
                      ">
                                    date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="t-text-white">
                                    <div class="vh-user">
                                        <div class="
                            vh-user__img vh-user__img--sm
                            align-items-center
                            me-3
                          ">
                                            <img src="assets/img/team-1.jpg" alt="viserhyip" class="img-fluid vh-user__img-is" />
                                        </div>
                                        <div class="t-text-white text-capitalize">
                                            robart willam
                                        </div>
                                    </div>
                                </td>
                                <td class="t-text-white">$1500</td>
                                <td class="t-text-white">Payoneer</td>
                                <td class="t-text-white">25 May 2021</td>
                            </tr>
                            <tr>
                                <td class="t-text-white">
                                    <div class="vh-user">
                                        <div class="
                            vh-user__img vh-user__img--sm
                            align-items-center
                            me-3
                          ">
                                            <img src="assets/img/team-2.jpg" alt="viserhyip" class="img-fluid vh-user__img-is" />
                                        </div>
                                        <div class="t-text-white text-capitalize">
                                            Licas Kasino
                                        </div>
                                    </div>
                                </td>
                                <td class="t-text-white">$15000</td>
                                <td class="t-text-white">Bank Wire</td>
                                <td class="t-text-white">25 May 2021</td>
                            </tr>
                            <tr>
                                <td class="t-text-white">
                                    <div class="vh-user">
                                        <div class="
                            vh-user__img vh-user__img--sm
                            align-items-center
                            me-3
                          ">
                                            <img src="assets/img/team-3.jpg" alt="viserhyip" class="img-fluid vh-user__img-is" />
                                        </div>
                                        <div class="t-text-white text-capitalize">
                                            Jobs Tincos
                                        </div>
                                    </div>
                                </td>
                                <td class="t-text-white">$1500</td>
                                <td class="t-text-white">block.io</td>
                                <td class="t-text-white">25 May 2021</td>
                            </tr>
                            <tr>
                                <td class="t-text-white">
                                    <div class="vh-user">
                                        <div class="
                            vh-user__img vh-user__img--sm
                            align-items-center
                            me-3
                          ">
                                            <img src="assets/img/team-4.jpg" alt="viserhyip" class="img-fluid vh-user__img-is" />
                                        </div>
                                        <div class="t-text-white text-capitalize">
                                            Wilak Zijan
                                        </div>
                                    </div>
                                </td>
                                <td class="t-text-white">$1500</td>
                                <td class="t-text-white">Paypal</td>
                                <td class="t-text-white">25 May 2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Transection Section End -->

<!-- Work Process Section  -->
<section class="work-process-section t-pb-100">
    <div class="container">
        <div class="row g-3 justify-content-center">
            <div class="col-md-10 col-xl-8">
                <span class="
                vh-section-title--sub
                text-uppercase
                t-primary-clr
                text-center
              ">How to do
                </span>
                <h2 class="
                t-text-white
                text-capitalize text-center
                mb-3
                vh-section-title
              ">
                    Our Working Process
                </h2>
                <p class="vh-section-title--text t-text-white text-center mx-auto">
                    Curabitur ullamcorper ultricies nisi Nam eget dui. Etiam rhoncus
                    fdsf df vulputate.
                </p>
            </div>
        </div>
        <div class="t-mt-40">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="vh-work-process">
                        <div class="
                    vh-work-process__box vh-work-process__box--orange
                    mx-auto
                  ">
                            <div class="vh-work-process__icon t-text-white" style="background-image: url(assets/img/icon-bg-1.png)">
                                01
                            </div>
                        </div>
                        <div class="vh-work-process__content">
                            <h3 class="t-text-white text-capitalize text-center mt-4 mb-2">
                                Create Account
                            </h3>
                            <p class="
                      vh-hero__content-text
                      t-text-white
                      text-center
                      mx-auto
                    ">
                                Curabitur ullamcorper ultricies nisi Nam eget dui. Etiam
                                rhoncus fdsf df vulputate.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="vh-work-process">
                        <div class="
                    vh-work-process__box vh-work-process__box--purple
                    mx-auto
                  ">
                            <div class="vh-work-process__icon t-text-white" style="background-image: url(assets/img/icon-bg-2.png)">
                                02
                            </div>
                        </div>
                        <div class="vh-work-process__content">
                            <h3 class="t-text-white text-capitalize text-center mt-4 mb-2">
                                Choose Plan
                            </h3>
                            <p class="
                      vh-hero__content-text
                      t-text-white
                      text-center
                      mx-auto
                    ">
                                Curabitur ullamcorper ultricies nisi Nam eget dui. Etiam
                                rhoncus fdsf df vulputate.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="vh-work-process">
                        <div class="
                    vh-work-process__box vh-work-process__box--teal
                    mx-auto
                  ">
                            <div class="vh-work-process__icon t-text-white" style="background-image: url(assets/img/icon-bg-3.png)">
                                03
                            </div>
                        </div>
                        <div class="vh-work-process__content">
                            <h3 class="t-text-white text-capitalize text-center mt-4 mb-2">
                                Get Profit
                            </h3>
                            <p class="
                      vh-hero__content-text
                      t-text-white
                      text-center
                      mx-auto
                    ">
                                Curabitur ullamcorper ultricies nisi Nam eget dui. Etiam
                                rhoncus fdsf df vulputate.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Work Process Section End -->

<!-- Testimonial  -->
<section class="testimonial-section">
    <div class="container">
        <div class="row g-3 justify-content-center">
            <div class="col-md-10 col-xl-8">
                <span class="
                vh-section-title--sub
                text-uppercase
                t-primary-clr
                text-center
              ">
                    Feedback
                </span>
                <h2 class="
                t-text-white
                text-capitalize text-center
                mb-3
                vh-section-title
              ">
                    What's Say Our Happy Client
                </h2>
                <p class="vh-section-title--text t-text-white text-center mx-auto">
                    Curabitur ullamcorper ultricies nisi Nam eget dui. Etiam rhoncus
                    fdsf df vulputate.
                </p>
            </div>
        </div>
        <div class="t-mt-40">
            <div class="row g-5 g-lg-3 align-items-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="assets/img/feedback-img.png" alt="viserhyip" class="img-fluid mx-auto" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="vh-testimonial-slider text-center text-lg-start">
                        <div class="vh-testimonial-slider__item">
                            <div class="vh-article">
                                <span class="vh-article__title t-text-white text-capitalize">david fincher</span>
                                <p class="sm-text t-text-white">CEO , Telicom</p>
                                <p class="
                        vh-article__text
                        t-text-white
                        text-center
                        mx-auto
                        text-lg-start
                        ms-lg-0
                      ">
                                    Maecenas tempus tellus eget condimentuhoncus seuam semper
                                    libero sit amet adipiscing seeque sesum.amuam nunc,
                                    blandit vel, luctus pulvinar hendrerilorem. aecenas nec
                                    odio etante ncidunt
                                </p>
                            </div>
                        </div>
                        <div class="vh-testimonial-slider__item">
                            <div class="vh-article">
                                <span class="vh-article__title t-text-white text-capitalize">leonardo</span>
                                <p class="sm-text t-text-white">CEO , Telicom</p>
                                <p class="
                        vh-article__text
                        t-text-white
                        text-center
                        mx-auto
                        text-lg-start
                        ms-lg-0
                      ">
                                    Maecenas tempus tellus eget condimentuhoncus seuam semper
                                    libero sit amet adipiscing seeque sesum.amuam nunc,
                                    blandit vel, luctus pulvinar hendrerilorem. aecenas nec
                                    odio etante ncidunt
                                </p>
                            </div>
                        </div>
                        <div class="vh-testimonial-slider__item">
                            <div class="vh-article">
                                <span class="vh-article__title t-text-white text-capitalize">alpacino</span>
                                <p class="sm-text t-text-white">CEO , Telicom</p>
                                <p class="
                        vh-article__text
                        t-text-white
                        text-center
                        mx-auto
                        text-lg-start
                        ms-lg-0
                      ">
                                    Maecenas tempus tellus eget condimentuhoncus seuam semper
                                    libero sit amet adipiscing seeque sesum.amuam nunc,
                                    blandit vel, luctus pulvinar hendrerilorem. aecenas nec
                                    odio etante ncidunt
                                </p>
                            </div>
                        </div>
                        <div class="vh-testimonial-slider__item">
                            <div class="vh-article">
                                <span class="vh-article__title t-text-white text-capitalize">steve smith</span>
                                <p class="sm-text t-text-white">CEO , Telicom</p>
                                <p class="
                        vh-article__text
                        t-text-white
                        text-center
                        mx-auto
                        text-lg-start
                        ms-lg-0
                      ">
                                    Maecenas tempus tellus eget condimentuhoncus seuam semper
                                    libero sit amet adipiscing seeque sesum.amuam nunc,
                                    blandit vel, luctus pulvinar hendrerilorem. aecenas nec
                                    odio etante ncidunt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial End -->

@endsection