@extends('back_end.master')
namespace App;

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
                    <h1 class="mb-3">View Investment</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-bold fs-5">Here you can View Investments </div>
                    @if($investment->status == 'approved')

                    <ul id="example">
                        <li><span class="days">00</span>
                            <p class="days_text">Days</p>
                        </li>
                        <li class="seperator">:</li>
                        <li><span class="hours">00</span>
                            <p class="hours_text">Hours</p>
                        </li>
                        <li class="seperator">:</li>
                        <li><span class="minutes">00</span>
                            <p class="minutes_text">Minutes</p>
                        </li>
                        <li class="seperator">:</li>
                        <li><span class="seconds">00</span>
                            <p class="seconds_text">Seconds</p>
                        </li>
                    </ul>
                    @endif
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
                    <input class="form-control form-control-solid" readonly disabled value="{{ $investment->plan->name}}">

                </div>

                @if(isAdmin())
                <div class="d-flex flex-column mb-8 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">User</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                    </label>
                    <!--end::Label-->
                    <input class="form-control form-control-solid" value="{{ $investment->user->name}}" readonly disabled  >

                </div>
                @endif

                <!--begin::Input group-->
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-12 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Investment Amount</label>
                        <input type="number" class="form-control form-control-solid" value="{{ $investment->amount}}" readonly disabled  />

                    </div>


                    <!--end::Col-->
                </div>
                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Investment Status : </label>

                        @if($investment->status == 'awaiting')
                        <div class="badge badge-light-warning">{{ $investment->status}}</div>
                        @elseif($investment->status == 'approved')
                        <div class="badge badge-light-success">{{ $investment->status}}</div>
                        @elseif($investment->status == 'unapproved')
                        <div class="badge badge-light-danger">{{ $investment->status}}</div>
                        @else
                        <div class="badge badge-light-primary">{{ $investment->status}}</div>
                        @endif

                    </div>


                    <!--end::Col-->
                </div> 


                @if(!empty($investment->payment_prove) && $investment->payment_prove != 'null')

                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Payment prove</label>
                       
                        <a href="{{ asset('images/payment_prove/' . $investment->payment_prove) }}" target="_blank">
                            <img src="{{ asset('images/payment_prove/' . $investment->payment_prove) }}" style="width: 400px; height:200px;border-radius:3px;padding-top:15px;">
                        </a>
                        
                    </div>
                </div>
                
                @endif
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
@endsection


@section('countdown')

<script type="text/javascript">
    var now = new Date();
    var day = now.getDate();
    var month = now.getMonth() + 1;
    var year = now.getFullYear() + 1;

    var nextyear = '{{ $countdown }}';

    $('#example').countdown({
        date: nextyear, // TODO Date format: 07/27/2017 17:00:00
        offset: +2, // TODO Your Timezone Offset
        day: 'Day',
        days: 'Days',
        hideOnComplete: true
    }, function(container) {
        //alert('Done!');
    });
</script>

@endsection