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
                <!--begin:Form-->



                <form id="kt_modal_new_target_form" class="form" action="{{ route('adddeposit')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Add new deposits | Investment</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-bold fs-5">Here you can add your Investment

                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" style="color: red;" />
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Plan Name</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        <select class=" form-control form-control-solid mb-2" name="plan_id" data-control="select2" data-search="true" data-placeholder="Select Plan" required>
                            <option></option>
                            @foreach($plans as $plan)
                            <option value="{{ $plan->id}}">{{ $plan->name }}<span>(min: {{ $plan->min}} , max: {{ $plan->max}})</span></option>
                            @endforeach

                        </select>
                    </div>
                    @if(auth()->user()->role == 'administrator')
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">User</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        <select required class=" form-control form-control-solid mb-2" name="user_id" data-control="select2" data-search="true" data-placeholder="Select User">
                            <option></option>
                            @foreach($users as $user)
                            <option value="{{ $user->id}}">{{ $user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Input group-->

                    @endif
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Investment Amount</label>
                            <input type="number" class="form-control form-control-solid" placeholder="Enter amount" name="amount" required />

                        </div>


                        <!--end::Col-->
                    </div>
                    <input type="hidden" name="payment_prove" value="null">

                  

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
@endsection