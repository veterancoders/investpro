@extends('front_end.master')
@section('content')

    <!-- Contact Section  -->
    <div class="t-pt-120 t-pb-120">
        <div class="container">
          <div class="row g-4">
            <div class="col-md-6 col-lg-5">
              <div class="row g-4">
                <div class="col-12">
                  <div class="d-flex align-items-center t-bg-alpha p-3 p-xl-4">
                    <div
                      class="me-4 vh-icon-box-1 flex-shrink-0"
                      style="background-image: url(assets/img/icon-bg-1.png)"
                    >
                      <i class="bx bx-headphone"></i>
                    </div>
                    <div class="vh-article">
                      <span
                        class="
                          vh-article__title
                          t-text-white
                          text-capitalize
                          mb-2
                        "
                        >Office Address</span
                      >
                      <p class="vh-article__text t-text-white">
                        28 Benin, south of Niger #5 San Francisco, United States
                        of America
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-flex align-items-center t-bg-alpha p-3 p-xl-4">
                    <div
                      class="me-4 vh-icon-box-1 flex-shrink-0"
                      style="background-image: url(assets/img/icon-bg-2.png)"
                    >
                      <i class="bx bx-headphone"></i>
                    </div>
                    <div class="vh-article">
                      <span
                        class="
                          vh-article__title
                          t-text-white
                          text-capitalize
                          mb-2
                        "
                        >Email Address</span
                      >
                      <ul class="list list--column">
                        <li class="list--column__item-sm t-text-white">
                          <a href="https://template.viserlab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="48202d242427082b31293a2a662b2725">[email&#160;protected]</a>
                        </li>
                        <li class="list--column__item-sm t-text-white">
                          <a href="https://template.viserlab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="127b7c747d52716b7360703c717d7f">[email&#160;protected]</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-flex align-items-center t-bg-alpha p-3 p-xl-4">
                    <div
                      class="me-4 vh-icon-box-1 flex-shrink-0"
                      style="background-image: url(assets/img/icon-bg-3.png)"
                    >
                      <i class="bx bx-headphone"></i>
                    </div>
                    <div class="vh-article">
                      <span
                        class="
                          vh-article__title
                          t-text-white
                          text-capitalize
                          mb-2
                        "
                        >Phone Number</span
                      >
                      <ul class="list list--column">
                        <li class="list--column__item-sm t-text-white">
                          +123 - 456 - 7890
                        </li>
                        <li class="list--column__item-sm t-text-white">
                          +123 - 456 - 7890
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-7">
              <div class="vh-query t-bg-alpha">
                <h3 class="vh-query__title t-text-white text-capitalize mb-3">
                  Asked Your Question
                </h3>
                <form action="https://template.viserlab.com/viserhyip/demo/contact.php" class="row g-4" id="contact_form_submit" method="POST">
                  <div class="col-12">
                    <input
                      type="text"
                      class="
                        form-control
                        form-control-custom
                        form-control-custom--outline
                        form-control-custom--outline-thin
                        t-text-white
                      "
                      placeholder="full name"
                      name="contact_name" id="contact_name"
                    />
                  </div>
                  <div class="col-12">
                    <input
                      type="email"
                      class="
                        form-control
                        form-control-custom
                        form-control-custom--outline
                        form-control-custom--outline-thin
                        t-text-white
                      "
                      placeholder="email"
                      name="contact_email"
                      id="contact_email"
                    />
                  </div>
                  <div class="col-12">
                    <input
                      type="number"
                      class="
                        form-control
                        form-control-custom
                        form-control-custom--outline
                        form-control-custom--outline-thin
                        t-text-white
                      "
                      placeholder="phone number"
                      name="contact_num"
                      id="contact_num"
                    />
                  </div>
                  <div class="col-12">
                    <textarea
                      cols="30"
                      rows="5"
                      class="
                        form-control
                        form-control-custom--outline
                        form-control-custom--outline-thin
                        t-text-white
                      "
                      placeholder="Asked Your Question"
                      name="contact_message"
                      id="contact_message"
                    ></textarea>
                  </div>
                  <div class="col-12">
                    <button
                    type="submit"
                      href="#"
                      class="
                        btn btn--lg
                        button-solid
                        btn-grad btn-grad--orange
                        text-uppercase
                        btn--sqr
                        w-100
                      "
                    >
                      send request
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Contact Section End -->

@endsection