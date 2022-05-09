
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
                    User Dashboard
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
                        <a href="dashboard.html" class="
                      t-link
                      vh-breadcrumbs__link
                      text-uppercase
                      t-text-white
                      t-link--primary
                    ">user dashboard</a>
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

<div class="t-pt-120 t-pb-120">
    <div class="container">
        <div class="row g-3 g-xxl-5">
            <div class="col-md-4 col-xxl-3">
                <div class="vh-user-profile sticky-top">
                    <div class="vh-user-profile__picture mx-auto">
                        <img src="assets/img/team-1.jpg" alt="viserhyip" class="vh-user-profile__img" />
                    </div>
                    <div class="vh-user-profile__info text-center mt-3 mb-4">
                        <h4 class="t-text-white text-capitalize">{{ auth()->user()->name }}</h4>
                        <p class="mb-0 t-primary-clr"><a href="https://template.viserlab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e4c515c5f4c4a7e535f5752105d5153">[email&#160;protected]</a></p>
                    </div>
                    <ul class="list list--column">
                        <li class="list--column__item-sm">
                            <a href="dashboard.html" class="t-link vh-user-profile__link text-capitalize">
                                overview
                            </a>
                        </li>
                        <li class="list--column__item-sm">
                            <a href="dashboard.html" class="t-link vh-user-profile__link text-capitalize">
                                Max Deposit
                            </a>
                        </li>
                        <li class="list--column__item-sm">
                            <a href="dashboard.html" class="t-link vh-user-profile__link text-capitalize">
                                Withdraw Fund
                            </a>
                        </li>
                        <li class="list--column__item-sm">
                            <a href="dashboard.html" class="t-link vh-user-profile__link text-capitalize">
                                Deposit List
                            </a>
                        </li>
                        <li class="list--column__item-sm">
                            <a href="dashboard.html" class="t-link vh-user-profile__link text-capitalize">
                                Deposit History
                            </a>
                        </li>
                        <li class="list--column__item-sm">
                            <a href="dashboard.html" class="t-link vh-user-profile__link text-capitalize">
                                Earnings History
                            </a>
                        </li>
                        <li class="list--column__item-sm">
                            <a href="dashboard.html" class="t-link vh-user-profile__link text-capitalize">
                                Referral Link
                            </a>
                        </li>
                        <li class="list--column__item-sm">
                            <a href="dashboard.html" class="t-link vh-user-profile__link text-capitalize">
                                Account Settings
                            </a>
                        </li>
                        <li class="list--column__item-sm">
                            <a href="dashboard.html" class="t-link vh-user-profile__link text-capitalize">
                                Security Settings
                            </a>
                        </li>
                        <li class="list--column__item-sm">
                            <a href="{{ route('logout')}}" class="t-link vh-user-profile__link text-capitalize">
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-xxl-9">
                <div class="vh-user-panel t-bg-alpha sticky-top">
                    <ul class="
                  list list--row
                  align-items-center
                  justify-content-center justify-content-lg-start
                ">
                        <li class="list--row__item d-none d-lg-inline-block my-2">
                            <h4 class="vh-user-panel__title t-text-white text-capitalize">
                                user panel
                            </h4>
                        </li>
                        <li class="list--row__item my-2 ms-lg-auto">
                            <form action="#" class="vh-user-panel__search">
                                <input type="text" class="vh-user-panel__search-input form-control" placeholder="Search.." />
                                <span class="vh-user-panel__search-icon">
                                    <i class="bx bx-search"></i>
                                </span>
                            </form>
                        </li>
                        <li class="list--row__item my-2">
                            <a href="dashboard.html" class="t-link vh-user-panel__icon">
                                <i class="bx bx-envelope"></i>
                            </a>
                        </li>
                        <li class="list--row__item my-2">
                            <a href="dashboard.html" class="t-link vh-user-panel__icon">
                                <i class="bx bx-bell"></i>
                                <span class="vh-user-panel__notification"> 02 </span>
                            </a>
                        </li>
                        <li class="list--row__item my-2">
                            <ul class="list list--row align-items-center">
                                <li class="list--row__item">
                                    <a href="dashboard.html" class="d-flex vh-user__img vh-user__img--sm">
                                        <img src="assets/img/team-1.jpg" alt="viserhyip" class="vh-user__img-is" />
                                    </a>
                                </li>
                                <li class="list--row__item my-2">
                                    <div class="vh-multilang">
                                        <select>
                                            <option data-display="Profile">Profile</option>
                                            <option value="1">Account</option>
                                            <option value="2">Log out</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="mt-5">
                    <div class="row g-3 g-xl-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="vh-user-card t-bg-gradient-orange">
                                <p class="mb-0 text-capitalize t-text-white xl-text">
                                    total balance
                                </p>
                                <h3 class="t-text-white text-uppercase vh-user-card__title">
                                    259 usd
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="vh-user-card t-bg-gradient-purple">
                                <p class="mb-0 text-capitalize t-text-white xl-text">
                                    total balance
                                </p>
                                <h3 class="t-text-white text-uppercase vh-user-card__title">
                                    259 usd
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="vh-user-card t-bg-gradient-teal">
                                <p class="mb-0 text-capitalize t-text-white xl-text">
                                    total balance
                                </p>
                                <h3 class="t-text-white text-uppercase vh-user-card__title">
                                    259 usd
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row g-3 g-xxl-4">
                        <div class="col-lg-7 col-xl-8">
                            <div class="
                      d-flex
                      flex-wrap
                      align-items-center
                      mb-4
                      justify-content-between
                    ">
                                <h3 class="t-text-white text-capitalize">
                                    Latest Deposits
                                </h3>
                                <div class="vh-multilang vh-multilang--btn">
                                    <select>
                                        <option data-display="Profile">Profile</option>
                                        <option value="1">Account</option>
                                        <option value="2">Log out</option>
                                    </select>
                                </div>
                            </div>

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
                        <div class="col-lg-5 col-xl-4">
                            <div class="vh-widget t-bg-alpha">
                                <h4 class="vh-widget__title text-capitalize t-text-white mb-4">
                                    Latest Winner
                                </h4>

                                <ul class="list list--column vh-widget-category">
                                    <li class="list--column__item vh-widget-category__item">
                                        <div class="d-flex pb-3">
                                            <div class="me-3 flex-shrink-0">
                                                <div class="vh-user__img vh-user__img--md">
                                                    <img src="assets/img/team-5.jpg" alt="viserhyip" class="vh-user__img-is" />
                                                </div>
                                            </div>
                                            <div class="vh-article">
                                                <h5 class="texte-capitalize t-fw-md mb-1">
                                                    <a href="#" class="
                                  t-link
                                  d-inline-block
                                  t-text-white
                                  t-link--primary
                                  text-capitalize
                                ">
                                                        Robart Williams
                                                    </a>
                                                </h5>
                                                <p class="mb-0 t-primary-clr text-uppercase">
                                                    3000 usd
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list--column__item vh-widget-category__item">
                                        <div class="d-flex pb-3">
                                            <div class="me-3 flex-shrink-0">
                                                <div class="vh-user__img vh-user__img--md">
                                                    <img src="assets/img/team-7.jpg" alt="viserhyip" class="vh-user__img-is" />
                                                </div>
                                            </div>
                                            <div class="vh-article">
                                                <h5 class="texte-capitalize t-fw-md mb-1">
                                                    <a href="#" class="
                                  t-link
                                  d-inline-block
                                  t-text-white
                                  t-link--primary
                                  text-capitalize
                                ">
                                                        Linton Kisan
                                                    </a>
                                                </h5>
                                                <p class="mb-0 t-primary-clr text-uppercase">
                                                    2700 usd
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list--column__item vh-widget-category__item">
                                        <div class="d-flex pb-3">
                                            <div class="me-3 flex-shrink-0">
                                                <div class="vh-user__img vh-user__img--md">
                                                    <img src="assets/img/team-8.jpg" alt="viserhyip" class="vh-user__img-is" />
                                                </div>
                                            </div>
                                            <div class="vh-article">
                                                <h5 class="texte-capitalize t-fw-md mb-1">
                                                    <a href="#" class="
                                  t-link
                                  d-inline-block
                                  t-text-white
                                  t-link--primary
                                  text-capitalize
                                ">
                                                        Tomas Jonson
                                                    </a>
                                                </h5>
                                                <p class="mb-0 t-primary-clr text-uppercase">
                                                    13000 usd
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="vh-user-card vh-user-card--xl t-bg-gradient-green">
                                <img src="assets/img/balance-icon.png" alt="viserhyip" class="img-fluid">
                                <p class="mb-0 text-capitalize t-text-white xl-text mt-3">
                                    total balance
                                </p>
                                <h3 class="t-text-white text-uppercase vh-user-card__title">
                                    259 usd
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="vh-user-card vh-user-card--xl t-bg-gradient-purple">
                                <img src="assets/img/wallet-icon.png" alt="viserhyip" class="img-fluid">
                                <p class="mb-0 text-capitalize t-text-white xl-text mt-3">
                                    total balance
                                </p>
                                <h3 class="t-text-white text-uppercase vh-user-card__title">
                                    259 usd
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="
                  d-flex
                  flex-wrap
                  align-items-center
                  mb-3
                  justify-content-between
                ">
                        <h3 class="t-text-white text-capitalize">
                            Revenue Statistics
                        </h3>
                        <div class="vh-multilang vh-multilang--btn">
                            <select>
                                <option data-display="Jan">Jan</option>
                                <option value="1">Feb</option>
                                <option value="2">Mar</option>
                            </select>
                        </div>
                    </div>
                    <div class="vh-widget t-bg-alpha">
                        <div class="vh-user-chart">
                            <div id="revChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection