@extends('back_end.master')

@section('content')


<div id="kt_modal_new_target">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">

                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">


                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">Payment Details</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-bold fs-5">Here you see the payment</div>



                </div>
                <!--end::Heading-->

                <div class="alert alert-dismissible bg-light-success border border-success border-3 d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                    <span class="svg-icon svg-icon-2hx svg-icon-success me-4 mb-5 mb-sm-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Content-->
                    <div class="d-flex flex-column pe-0 pe-sm-10">
                        <h5 class="mb-1">This is an alert with a thick border</h5>
                        <span>The alert component can be used to highlight certain parts of your page for higher content visibility.</span>
                    </div>
                    <!--end::Content-->
                    <!--begin::Close-->
                    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                        <i class="bi bi-x fs-1 text-success"></i>
                    </button>
                    <!--end::Close-->
                </div>

                <div class="separator border-dark my-10"></div>

                <div class="">
                    <h3>Payment Address</h3>
                    <p>Pay into the address below</p>
                    <!--begin::Input group-->
                    <div class="input-group pt-5">
                        <!--begin::Input-->
                        <input id="kt_clipboard_1" type="text" class="form-control" readonly placeholder="name@example.com" value="{{ setting('eth_address') }}" />
                        <!--end::Input-->

                        <!--begin::Button-->
                        <button class="btn btn-light-primary" data-clipboard-target="#kt_clipboard_1">
                            Copy
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--begin::Input group-->
                </div>

                <div class="pt-10">
                    <h3>Payment Barcode</h3>
                    <img src="{{ getImage(setting('eth_barcode')) }}" style="width: 250px; height:100px;border-radius:3px;padding-top:15px;">
                </div>

                <div class="pt-13">
                    <h3>Payment Prove</h3>

                    <form method="POST" action="{{ route('payment_prove', $investment->id)}}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control mt-5" name="pay_prove" required>

                        <button class="btn btn-primary btn-sm mt-5">Submit</button>
                    </form>

                    <br>
                    <span style="color:red; font-size:13px;">*Please insert your payment prove for your deposit to be approved</span>
                </div>



            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
@endsection