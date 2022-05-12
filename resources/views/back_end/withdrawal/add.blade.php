@extends('back_end.master')

@section('content')

@if(auth()->user()->role == 'user')
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
                <!--begin:Form-->



                <form id="kt_modal_new_target_form" class="form" action="{{ route('add_withdrawal')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">WITHDRAW </h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-bold fs-5">Here you can add your Withdrawal

                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" style="color: red;" />
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span>User Balance :: </span><span style="font-size: 16px;color:red;"><strong>${{ auth()->user()->balance}}</strong></span>
                        </label>
            
                    </div>
                  
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Withdrawal Amount</label>
                            <input type="number" class="form-control form-control-solid" placeholder="Enter amount" name="withdrawal_amount" required />

                        </div>


                        <!--end::Col-->
                    </div>
                   
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
@endif
@endsection