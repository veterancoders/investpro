@@ -0,0 +1,956 @@
@extends('back_end.master')

@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="{{ auth()->user()->avatar}}" />
                            <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
                        </div>
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{ auth()->user()->name}}</a>
                                    <a href="#">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF" />
                                                <path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
                                                <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->{{ auth()->user()->role}}
                                    </a>

                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black" />
                                                <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->{{ auth()->user()->email}}
                                    </a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->

                        </div>
                        <!--end::Title-->
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            @if(auth()->user()->balance == 0)
                                            <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="0" data-kt-countup-prefix="$">0</div>
                                            @else
                                            <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="{{ auth()->user()->balance }}" data-kt-countup-prefix="$">{{ auth()->user()->balance}}</div>
                                            @endif
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">Earnings</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                    <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">Withdrawals</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-6 text-gray-400">Deposits</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Wrapper-->

                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

            </div>
        </div>
        <!--end::Navbar-->
        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Profile Details</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form class="form" method="POST" action="{{ route('update_account')}}">
                    @csrf
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{auth()->user()->avatar}}')">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{ asset('images/' . auth()->user()->avatar) }}')"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->
                                <!--begin::Hint-->
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="{{ auth()->user()->name}}" />
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">Contact Phone</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="tel" name="phone" value="{{ auth()->user()->phone}}" class="form-control form-control-lg form-control-solid" placeholder="Phone number" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Address</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" value="{{ auth()->user()->address}}" name="address" class="form-control form-control-lg form-control-solid" placeholder="Company website" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">Country</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-bold">
                                    <option value="{{ auth()->user()->country}}">{{ auth()->user()->country}}</option>
                                    <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                    <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                    <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                    <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                    <option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
                                    <option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
                                    <option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
                                    <option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
                                    <option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
                                    <option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
                                    <option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
                                    <option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
                                    <option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
                                    <option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
                                    <option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
                                    <option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
                                    <option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
                                    <option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
                                    <option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
                                    <option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
                                    <option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
                                    <option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
                                    <option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
                                    <option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
                                    <option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
                                    <option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
                                    <option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
                                    <option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
                                    <option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
                                    <option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British Indian Ocean Territory</option>
                                    <option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
                                    <option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
                                    <option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
                                    <option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
                                    <option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
                                    <option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
                                    <option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
                                    <option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
                                    <option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
                                    <option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
                                    <option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
                                    <option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
                                    <option data-kt-flag="flags/china.svg" value="CN">China</option>
                                    <option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
                                    <option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
                                    <option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
                                    <option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
                                    <option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
                                    <option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
                                    <option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
                                    <option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
                                    <option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
                                    <option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
                                    <option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
                                    <option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
                                    <option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
                                    <option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
                                    <option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
                                    <option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
                                    <option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
                                    <option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
                                    <option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
                                    <option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
                                    <option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
                                    <option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
                                    <option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
                                    <option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
                                    <option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
                                    <option data-kt-flag="flags/france.svg" value="FR">France</option>
                                    <option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
                                    <option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
                                    <option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
                                    <option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
                                    <option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
                                    <option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
                                    <option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
                                    <option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
                                    <option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
                                    <option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
                                    <option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
                                    <option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
                                    <option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
                                    <option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
                                    <option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
                                    <option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
                                    <option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)</option>
                                    <option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
                                    <option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
                                    <option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
                                    <option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
                                    <option data-kt-flag="flags/india.svg" value="IN">India</option>
                                    <option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
                                    <option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
                                    <option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
                                    <option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
                                    <option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
                                    <option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
                                    <option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
                                    <option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
                                    <option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
                                    <option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
                                    <option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
                                    <option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
                                    <option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
                                    <option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
                                    <option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's Republic of</option>
                                    <option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
                                    <option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
                                    <option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic</option>
                                    <option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
                                    <option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
                                    <option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
                                    <option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
                                    <option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
                                    <option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
                                    <option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
                                    <option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
                                    <option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
                                    <option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
                                    <option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
                                    <option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
                                    <option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
                                    <option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
                                    <option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
                                    <option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
                                    <option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
                                    <option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
                                    <option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
                                    <option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
                                    <option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
                                    <option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
                                    <option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
                                    <option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
                                    <option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
                                    <option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
                                    <option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
                                    <option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
                                    <option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
                                    <option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
                                    <option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
                                    <option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
                                    <option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
                                    <option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
                                    <option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
                                    <option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
                                    <option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
                                    <option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
                                    <option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
                                    <option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana Islands</option>
                                    <option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
                                    <option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
                                    <option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
                                    <option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
                                    <option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied</option>
                                    <option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
                                    <option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
                                    <option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
                                    <option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
                                    <option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
                                    <option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
                                    <option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
                                    <option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
                                    <option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
                                    <option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
                                    <option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
                                    <option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
                                    <option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
                                    <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
                                    <option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
                                    <option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)</option>
                                    <option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
                                    <option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
                                    <option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
                                    <option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
                                    <option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
                                    <option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
                                    <option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
                                    <option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
                                    <option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
                                    <option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
                                    <option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
                                    <option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
                                    <option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
                                    <option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
                                    <option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
                                    <option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
                                    <option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
                                    <option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
                                    <option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
                                    <option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
                                    <option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
                                    <option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
                                    <option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
                                    <option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
                                    <option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
                                    <option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
                                    <option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
                                    <option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
                                    <option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
                                    <option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
                                    <option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
                                    <option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
                                    <option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
                                    <option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
                                    <option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
                                    <option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
                                    <option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
                                    <option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
                                    <option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
                                    <option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
                                    <option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
                                    <option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
                                    <option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
                                    <option data-kt-flag="flags/united-states.svg" value="US">United States</option>
                                    <option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
                                    <option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
                                    <option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
                                    <option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
                                    <option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
                                    <option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
                                    <option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
                                    <option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
                                    <option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Bio</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <textarea class="form-control form-control-lg form-control-solid" value="{{ auth()->user()->bio}}" name="bio">{{ auth()->user()->bio}}</textarea>
                            </div>
                        </div>
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Gender</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <!--begin::Options-->
                                <div class="d-flex align-items-center mt-3">
                                    <!--begin::Option-->
                                    <label class="form-check form-check-inline form-check-solid me-5">
                                        @if(auth()->user()->gender == 'male')
                                        <input class="form-check-input" name="gender" type="radio" value="male" checked="checked" />
                                        @else
                                        <input class="form-check-input" name="gender" type="radio" value="male" />
                                        @endif
                                        <span class="fw-bold ps-2 fs-6">Male</span>
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label class="form-check form-check-inline form-check-solid">
                                        @if(auth()->user()->gender == 'female')
                                        <input class="form-check-input" name="gender" type="radio" value="female" />
                                        @else
                                        <input class="form-check-input" name="gender" type="radio" value="female" />
                                        @endif
                                        <span class="fw-bold ps-2 fs-6">Female</span>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Date Of Birth</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-3 fv-row">
                                <input type="date" name="date_of_birth" value="{{ auth()->user()->date_of_birth}}" class="form-control form-control-lg form-control-solid">
                            </div>
                        </div>
                    </div>
                    <!--end::Card body-->

                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Basic info-->
        <!--begin::Sign-in Method-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Sign-in Method</h3>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_signin_method" class="collapse show">
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Email Address-->
                    <div class="d-flex flex-wrap align-items-center">
                        <!--begin::Label-->
                        <div id="kt_signin_email">
                            <div class="fs-6 fw-bolder mb-1">Email Address</div>
                            <div class="fw-bold text-gray-600">{{auth()->user()->email}}</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Edit-->
                        <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" method="POST" action="{{ route('update_email')}}">
                                @csrf

                                <div class="row mb-6">
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <div class="fv-row mb-0">
                                            <label for="emailaddress" class="form-label fs-6 fw-bolder mb-3">Enter New Email Address</label>
                                            <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="{{auth()->user()->email}}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-0">
                                            <label for="confirmemailpassword" class="form-label fs-6 fw-bolder mb-3">Confirm Password</label>
                                            <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" />
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button id="kt_signin_submit" type="submit" class="btn btn-primary me-2 px-6">Update Email</button>
                                    <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Edit-->
                        <!--begin::Action-->
                        <div id="kt_signin_email_button" class="ms-auto">
                            <button class="btn btn-light btn-active-light-primary">Change Email</button>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Email Address-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->
                    <!--begin::Password-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Label-->
                        <div id="kt_signin_password">
                            <div class="fs-6 fw-bolder mb-1">Password</div>
                            <div class="fw-bold text-gray-600">**********</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Edit-->
                        <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                            <!--begin::Form-->
                            <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                                <div class="row mb-1">
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">Current Password</label>
                                            <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="newpassword" class="form-label fs-6 fw-bolder mb-3">New Password</label>
                                            <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3">Confirm New Password</label>
                                            <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                                <div class="d-flex">
                                    <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
                                    <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Edit-->
                        <!--begin::Action-->
                        <div id="kt_signin_password_button" class="ms-auto">
                            <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Password-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black" />
                                <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <!--begin::Content-->
                            <div class="mb-3 mb-md-0 fw-bold">
                                <h4 class="text-gray-900 fw-bolder">Secure Your Account</h4>
                                <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
                            </div>
                            <!--end::Content-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">Enable</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Content-->
        </div>

        <!--begin::Deactivate Account-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Deactivate Account</h3>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Content-->
            <div id="kt_account_settings_deactivate" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_deactivate_form" class="form">
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                    <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
                                    <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-bold">
                                    <h4 class="text-gray-900 fw-bolder">You Are Deactivating Your Account</h4>
                                    <div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.
                                        <br />
                                        <a class="fw-bolder" href="#">Learn more</a>
                                    </div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--begin::Form input row-->
                        <div class="form-check form-check-solid fv-row">
                            <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
                            <label class="form-check-label fw-bold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
                        </div>
                        <!--end::Form input row-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-bold">Deactivate Account</button>
                    </div>
                    <!--end::Card footer-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Deactivate Account-->
        <!--begin::Modals-->
        <!--begin::Modal - Two-factor authentication-->
        <div class="modal fade" id="kt_modal_two_factor_authentication" tabindex="-1" aria-hidden="true">
            <!--begin::Modal header-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header flex-stack">
                        <!--begin::Title-->
                        <h2>Choose An Authentication Method</h2>
                        <!--end::Title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
                        <!--begin::Options-->
                        <div data-kt-element="options">
                            <!--begin::Notice-->
                            <p class="text-muted fs-5 fw-bold mb-10">In addition to your username and password, you’ll have to enter a code (delivered via app or SMS) to log into your account.</p>
                            <!--end::Notice-->
                            <!--begin::Wrapper-->
                            <div class="pb-10">
                                <!--begin::Option-->
                                <input type="radio" class="btn-check" name="auth_option" value="apps" checked="checked" id="kt_modal_two_factor_authentication_option_1" />
                                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_1">
                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                    <span class="svg-icon svg-icon-4x me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
                                            <path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <span class="d-block fw-bold text-start">
                                        <span class="text-dark fw-bolder d-block fs-3">Authenticator Apps</span>
                                        <span class="text-muted fw-bold fs-6">Get codes from an app like Google Authenticator, Microsoft Authenticator, Authy or 1Password.</span>
                                    </span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <input type="radio" class="btn-check" name="auth_option" value="sms" id="kt_modal_two_factor_authentication_option_2" />
                                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="kt_modal_two_factor_authentication_option_2">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                    <span class="svg-icon svg-icon-4x me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />
                                            <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <span class="d-block fw-bold text-start">
                                        <span class="text-dark fw-bolder d-block fs-3">SMS</span>
                                        <span class="text-muted fw-bold fs-6">We will send a code via SMS if you need to use your backup login method.</span>
                                    </span>
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Options-->
                            <!--begin::Action-->
                            <button class="btn btn-primary w-100" data-kt-element="options-select">Continue</button>
                            <!--end::Action-->
                        </div>
                        <!--end::Options-->
                        <!--begin::Apps-->
                        <div class="d-none" data-kt-element="apps">
                            <!--begin::Heading-->
                            <h3 class="text-dark fw-bolder mb-7">Authenticator Apps</h3>
                            <!--end::Heading-->
                            <!--begin::Description-->
                            <div class="text-gray-500 fw-bold fs-6 mb-10">Using an authenticator app like
                                <a href="https://support.google.com/accounts/answer/1066447?hl=en" target="_blank">Google Authenticator</a>,
                                <a href="https://www.microsoft.com/en-us/account/authenticator" target="_blank">Microsoft Authenticator</a>,
                                <a href="https://authy.com/download/" target="_blank">Authy</a>, or
                                <a href="https://support.1password.com/one-time-passwords/" target="_blank">1Password</a>, scan the QR code. It will generate a 6 digit code for you to enter below.
                                <!--begin::QR code image-->
                                <div class="pt-5 text-center">
                                    <img src="assets/media/misc/qr.png" alt="" class="mw-150px" />
                                </div>
                                <!--end::QR code image-->
                            </div>
                            <!--end::Description-->
                            <!--begin::Notice-->
                            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
                                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1">
                                    <!--begin::Content-->
                                    <div class="fw-bold">
                                        <div class="fs-6 text-gray-700">If you having trouble using the QR code, select manual entry on your app, and enter your username and the code:
                                            <div class="fw-bolder text-dark pt-2">KBSS3QDAAFUMCBY63YCKI5WSSVACUMPN</div>
                                        </div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                            <!--begin::Form-->
                            <form data-kt-element="apps-form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Enter authentication code" name="code" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-center">
                                    <button type="reset" data-kt-element="apps-cancel" class="btn btn-light me-3">Cancel</button>
                                    <button type="submit" data-kt-element="apps-submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Options-->
                        <!--begin::SMS-->
                        <div class="d-none" data-kt-element="sms">
                            <!--begin::Heading-->
                            <h3 class="text-dark fw-bolder fs-3 mb-5">SMS: Verify Your Mobile Number</h3>
                            <!--end::Heading-->
                            <!--begin::Notice-->
                            <div class="text-muted fw-bold mb-10">Enter your mobile phone number with country code and we will send you a verification code upon request.</div>
                            <!--end::Notice-->
                            <!--begin::Form-->
                            <form data-kt-element="sms-form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Mobile number with country code..." name="mobile" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-center">
                                    <button type="reset" data-kt-element="sms-cancel" class="btn btn-light me-3">Cancel</button>
                                    <button type="submit" data-kt-element="sms-submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::SMS-->
                    </div>
                    <!--begin::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal header-->
        </div>
        <!--end::Modal - Two-factor authentication-->
        <!--end::Modals-->
    </div>
    <!--end::Container-->
</div>


@endsection