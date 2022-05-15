@extends('back_end.master')

@section('content')

<div class="post d-flex flex-column-fluid" id="kt_post">
	<!--begin::Container-->
	<div id="kt_content_container" class="container-xxl">
		<!--begin::Layout-->
		<div class="d-flex flex-column flex-xl-row">
			<!--begin::Sidebar-->
			<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
				<!--begin::Card-->
				<div class="card mb-5 mb-xl-8">
					<!--begin::Card body-->
					<div class="card-body pt-15">
						<!--begin::Summary-->
						<div class="d-flex flex-center flex-column mb-5">
							<!--begin::Avatar-->
							<div class="symbol symbol-100px symbol-circle mb-7">
								<img src="assets/media/avatars/300-1.jpg" alt="image" />
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{ $users->name}}</a>
							<!--end::Name-->
							<!--begin::Position-->
							<div class="fs-5 fw-bold text-muted mb-6">{{ $users->role}}</div>
							<!--end::Position-->
							<!--begin::Info-->
							<div class="d-flex flex-wrap flex-center">
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
									<div class="fs-4 fw-bolder text-gray-700">
										@if( $users->balance == 0)
										<span class="w-75px">0</span>
										@else
										<span class="w-75px">{{ $users->balance}}</span>
										@endif
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
										<span class="svg-icon svg-icon-3 svg-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
												<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<div class="fw-bold text-muted">Balance</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
									<div class="fs-4 fw-bolder text-gray-700">
										<span class="w-50px">130</span>
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
										<span class="svg-icon svg-icon-3 svg-icon-danger">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
												<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<div class="fw-bold text-muted">Deposits</div>
								</div>
								<!--end::Stats-->
								<!--begin::Stats-->
								<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
									<div class="fs-4 fw-bolder text-gray-700">
										<span class="w-50px">500</span>
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
										<span class="svg-icon svg-icon-3 svg-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
												<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<div class="fw-bold text-muted">Withdrawals</div>
								</div>
								<!--end::Stats-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Summary-->
						<!--begin::Details toggle-->
						<div class="d-flex flex-stack fs-4 py-3">
							<div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Details
								<span class="ms-2 rotate-180">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
									<span class="svg-icon svg-icon-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</span>
							</div>
							<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
								<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">Edit</a>
							</span>
						</div>
						<!--end::Details toggle-->
						<div class="separator separator-dashed my-3"></div>
						<!--begin::Details content-->
						<div id="kt_customer_view_details" class="collapse show">
							<div class="py-5 fs-6">
								<!--begin::Badge-->
								<div class="badge badge-light-info d-inline">Premium user</div>
								<!--begin::Badge-->
								<!--begin::Details item-->
								<div class="fw-bolder mt-5">Account ID</div>
								<div class="text-gray-600">ID-45453423</div>
								<!--begin::Details item-->
								<!--begin::Details item-->
								<div class="fw-bolder mt-5">Email</div>
								<div class="text-gray-600">
									<a href="#" class="text-gray-600 text-hover-primary">{{ $users->email}}</a>
								</div>
								<!--begin::Details item-->
								<!--begin::Details item-->
								
								<div class="text-gray-600">{{$users->address}}
								</div>
								<!--begin::Details item-->
								<!--begin::Details item-->
								<div class="fw-bolder mt-5">Language</div>
								<div class="text-gray-600">English</div>
								<!--begin::Details item-->
								
							</div>
						</div>
						<!--end::Details content-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
				<!--begin::Connected Accounts-->
				<div class="card mb-5 mb-xl-8">
					<!--begin::Card header-->
					<div class="card-header border-0">
						<div class="card-title">
							<h3 class="fw-bolder m-0">Connected Accounts</h3>
						</div>
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-2">
						<!--begin::Notice-->
						<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
							<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="black" />
									<path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack flex-grow-1">
								<!--begin::Content-->
								<div class="fw-bold">
									<div class="fs-6 text-gray-700">By connecting an account, you hereby agree to our
										<a href="#" class="me-1">privacy policy</a>and
										<a href="#">terms of use</a>.
									</div>
								</div>
								<!--end::Content-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Notice-->
						<!--begin::Items-->
						<div class="py-2">
							<!--begin::Item-->
							<div class="d-flex flex-stack">
								<div class="d-flex">
									<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
									<div class="d-flex flex-column">
										<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Google</a>
										<div class="fs-6 fw-bold text-muted">Plan properly your workflow</div>
									</div>
								</div>
								<div class="d-flex justify-content-end">
									<!--begin::Switch-->
									<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
										<!--begin::Input-->
										<input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked" />
										<!--end::Input-->
										<!--begin::Label-->
										<span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_google"></span>
										<!--end::Label-->
									</label>
									<!--end::Switch-->
								</div>
							</div>
							<!--end::Item-->
							<div class="separator separator-dashed my-5"></div>
							<!--begin::Item-->
							<div class="d-flex flex-stack">
								<div class="d-flex">
									<img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
									<div class="d-flex flex-column">
										<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Github</a>
										<div class="fs-6 fw-bold text-muted">Keep eye on on your Repositories</div>
									</div>
								</div>
								<div class="d-flex justify-content-end">
									<!--begin::Switch-->
									<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
										<!--begin::Input-->
										<input class="form-check-input" name="github" type="checkbox" value="1" id="kt_modal_connected_accounts_github" checked="checked" />
										<!--end::Input-->
										<!--begin::Label-->
										<span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_github"></span>
										<!--end::Label-->
									</label>
									<!--end::Switch-->
								</div>
							</div>
							<!--end::Item-->
							<div class="separator separator-dashed my-5"></div>
							<!--begin::Item-->
							<div class="d-flex flex-stack">
								<div class="d-flex">
									<img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
									<div class="d-flex flex-column">
										<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Slack</a>
										<div class="fs-6 fw-bold text-muted">Integrate Projects Discussions</div>
									</div>
								</div>
								<div class="d-flex justify-content-end">
									<!--begin::Switch-->
									<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
										<!--begin::Input-->
										<input class="form-check-input" name="slack" type="checkbox" value="1" id="kt_modal_connected_accounts_slack" />
										<!--end::Input-->
										<!--begin::Label-->
										<span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_slack"></span>
										<!--end::Label-->
									</label>
									<!--end::Switch-->
								</div>
							</div>
							<!--end::Item-->
						</div>
						<!--end::Items-->
					</div>
					<!--end::Card body-->
					<!--begin::Card footer-->
					<div class="card-footer border-0 d-flex justify-content-center pt-0">
						<button class="btn btn-sm btn-light-primary">Save Changes</button>
					</div>
					<!--end::Card footer-->
				</div>
				<!--end::Connected Accounts-->
			</div>
			<!--end::Sidebar-->
			<!--begin::Content-->
			<div class="flex-lg-row-fluid ms-lg-15">
				<!--begin:::Tabs-->
				<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
					<!--begin:::Tab item-->
					<li class="nav-item">
						<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">Overview</a>
					</li>
					<!--end:::Tab item-->
					<!--begin:::Tab item-->
					<li class="nav-item">
						<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab">Events &amp; Logs</a>
					</li>
					<!--end:::Tab item-->
				

					<!--begin:::Tab item-->
					<li class="nav-item ms-auto">
						<!--begin::Action menu-->
						<a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
							<span class="svg-icon svg-icon-2 me-0">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Payments</div>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="#" class="menu-link px-5">Create invoice</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="#" class="menu-link flex-stack px-5">Create payments
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
								<a href="#" class="menu-link px-5">
									<span class="menu-title">Subscription</span>
									<span class="menu-arrow"></span>
								</a>
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-5">Apps</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-5">Billing</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-5">Statements</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content px-3">
											<label class="form-check form-switch form-check-custom form-check-solid">
												<input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="checked" id="kt_user_menu_notifications" />
												<span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">Notifications</span>
											</label>
										</div>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator my-3"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="#" class="menu-link px-5">Reports</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5 my-1">
								<a href="#" class="menu-link px-5">Account Settings</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="#" class="menu-link text-danger px-5">Delete customer</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
						<!--end::Menu-->
					</li>
					<!--end:::Tab item-->
				</ul>
				<!--end:::Tabs-->
				<!--begin:::Tab content-->
				<div class="tab-content" id="myTabContent">
					<!--begin:::Tab pane-->
					<div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
					<div class="card pt-4 mb-6 mb-xl-9">
							<!--begin::Card header-->
							<div class="card-header border-0">
								<!--begin::Card title-->
								<div class="card-title">
									<h2 class="fw-bolder">Credit Balance</h2>
								</div>
								<!--end::Card title-->
								<!--begin::Card toolbar-->
								<div class="card-toolbar">
									<a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_adjust_balance">
										<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
												<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->Adjust Balance
									</a>
								</div>
								<!--end::Card toolbar-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<div class="fw-bolder fs-2">
									@if($users->balance == 0)
								$0
								@else
								${{$users->balance}}
								@endif
									<span class="text-muted fs-4 fw-bold">USD</span>
									<div class="fs-7 fw-normal text-muted">Balance will increase the amount due on the customer's next invoice.</div>
								</div>
							</div>
							<!--end::Card body-->
						</div>
						<div class="card pt-4 mb-6 mb-xl-9">
							<!--begin::Card header-->
							<div class="card-header border-0">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Deposit Records</h2>
								</div>
								<!--end::Card title-->
							
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0 pb-5">
								<!--begin::Table-->
								<table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
									<!--begin::Table head-->
									<thead class="border-bottom border-gray-200 fs-7 fw-bolder">
										<!--begin::Table row-->
										<tr class="text-start text-muted text-uppercase gs-0">
											<th class="min-w-100px">Invoice No.</th>
											<th>Status</th>
											<th>Amount</th>
											<th class="min-w-100px">Date</th>
											<th class="text-end min-w-100px pe-4">Actions</th>
										</tr>
										<!--end::Table row-->
									</thead>
									<!--end::Table head-->
									<!--begin::Table body-->
									<tbody class="fs-6 fw-bold text-gray-600">
										<!--begin::Table row-->
										<tr>
											<!--begin::Invoice=-->
											<td>
												<a href="#" class="text-gray-600 text-hover-primary mb-1">2929-6646</a>
											</td>
											<!--end::Invoice=-->
											<!--begin::Status=-->
											<td>
												<span class="badge badge-light-success">Successful</span>
											</td>
											<!--end::Status=-->
											<!--begin::Amount=-->
											<td>$1,200.00</td>
											<!--end::Amount=-->
											<!--begin::Date=-->
											<td>14 Dec 2020, 8:43 pm</td>
											<!--end::Date=-->
											<!--begin::Action=-->
											<td class="pe-0 text-end">
												<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
											</td>
											<!--end::Action=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Invoice=-->
											<td>
												<a href="#" class="text-gray-600 text-hover-primary mb-1">1703-2318</a>
											</td>
											<!--end::Invoice=-->
											<!--begin::Status=-->
											<td>
												<span class="badge badge-light-success">Successful</span>
											</td>
											<!--end::Status=-->
											<!--begin::Amount=-->
											<td>$79.00</td>
											<!--end::Amount=-->
											<!--begin::Date=-->
											<td>01 Dec 2020, 10:12 am</td>
											<!--end::Date=-->
											<!--begin::Action=-->
											<td class="pe-0 text-end">
												<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
											</td>
											<!--end::Action=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Invoice=-->
											<td>
												<a href="#" class="text-gray-600 text-hover-primary mb-1">4228-3350</a>
											</td>
											<!--end::Invoice=-->
											<!--begin::Status=-->
											<td>
												<span class="badge badge-light-success">Successful</span>
											</td>
											<!--end::Status=-->
											<!--begin::Amount=-->
											<td>$5,500.00</td>
											<!--end::Amount=-->
											<!--begin::Date=-->
											<td>12 Nov 2020, 2:01 pm</td>
											<!--end::Date=-->
											<!--begin::Action=-->
											<td class="pe-0 text-end">
												<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
											</td>
											<!--end::Action=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Invoice=-->
											<td>
												<a href="#" class="text-gray-600 text-hover-primary mb-1">2018-7878</a>
											</td>
											<!--end::Invoice=-->
											<!--begin::Status=-->
											<td>
												<span class="badge badge-light-warning">Pending</span>
											</td>
											<!--end::Status=-->
											<!--begin::Amount=-->
											<td>$880.00</td>
											<!--end::Amount=-->
											<!--begin::Date=-->
											<td>21 Oct 2020, 5:54 pm</td>
											<!--end::Date=-->
											<!--begin::Action=-->
											<td class="pe-0 text-end">
												<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
											</td>
											<!--end::Action=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Invoice=-->
											<td>
												<a href="#" class="text-gray-600 text-hover-primary mb-1">3844-6121</a>
											</td>
											<!--end::Invoice=-->
											<!--begin::Status=-->
											<td>
												<span class="badge badge-light-success">Successful</span>
											</td>
											<!--end::Status=-->
											<!--begin::Amount=-->
											<td>$7,650.00</td>
											<!--end::Amount=-->
											<!--begin::Date=-->
											<td>19 Oct 2020, 7:32 am</td>
											<!--end::Date=-->
											<!--begin::Action=-->
											<td class="pe-0 text-end">
												<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
											</td>
											<!--end::Action=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Invoice=-->
											<td>
												<a href="#" class="text-gray-600 text-hover-primary mb-1">3184-2692</a>
											</td>
											<!--end::Invoice=-->
											<!--begin::Status=-->
											<td>
												<span class="badge badge-light-success">Successful</span>
											</td>
											<!--end::Status=-->
											<!--begin::Amount=-->
											<td>$375.00</td>
											<!--end::Amount=-->
											<!--begin::Date=-->
											<td>23 Sep 2020, 12:38 am</td>
											<!--end::Date=-->
											<!--begin::Action=-->
											<td class="pe-0 text-end">
												<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
											</td>
											<!--end::Action=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Invoice=-->
											<td>
												<a href="#" class="text-gray-600 text-hover-primary mb-1">5136-4926</a>
											</td>
											<!--end::Invoice=-->
											<!--begin::Status=-->
											<td>
												<span class="badge badge-light-success">Successful</span>
											</td>
											<!--end::Status=-->
											<!--begin::Amount=-->
											<td>$129.00</td>
											<!--end::Amount=-->
											<!--begin::Date=-->
											<td>11 Sep 2020, 3:18 pm</td>
											<!--end::Date=-->
											<!--begin::Action=-->
											<td class="pe-0 text-end">
												<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
											</td>
											<!--end::Action=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Invoice=-->
											<td>
												<a href="#" class="text-gray-600 text-hover-primary mb-1">7814-8010</a>
											</td>
											<!--end::Invoice=-->
											<!--begin::Status=-->
											<td>
												<span class="badge badge-light-danger">Rejected</span>
											</td>
											<!--end::Status=-->
											<!--begin::Amount=-->
											<td>$450.00</td>
											<!--end::Amount=-->
											<!--begin::Date=-->
											<td>03 Sep 2020, 1:08 am</td>
											<!--end::Date=-->
											<!--begin::Action=-->
											<td class="pe-0 text-end">
												<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
											</td>
											<!--end::Action=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Invoice=-->
											<td>
												<a href="#" class="text-gray-600 text-hover-primary mb-1">7867-3605</a>
											</td>
											<!--end::Invoice=-->
											<!--begin::Status=-->
											<td>
												<span class="badge badge-light-warning">Pending</span>
											</td>
											<!--end::Status=-->
											<!--begin::Amount=-->
											<td>$8,700.00</td>
											<!--end::Amount=-->
											<!--begin::Date=-->
											<td>01 Sep 2020, 4:58 pm</td>
											<!--end::Date=-->
											<!--begin::Action=-->
											<td class="pe-0 text-end">
												<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
											</td>
											<!--end::Action=-->
										</tr>
										<!--end::Table row-->
									</tbody>
									<!--end::Table body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Card-->
						
						<!--begin::Card-->
					
						<!--end::Card-->
					
					</div>
					<!--end:::Tab pane-->
					<!--begin:::Tab pane-->
					<div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">
						<!--begin::Card-->
						<div class="card pt-4 mb-6 mb-xl-9">
							<!--begin::Card header-->
							<div class="card-header border-0">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Logs</h2>
								</div>
								<!--end::Card title-->
								<!--begin::Card toolbar-->
								<div class="card-toolbar">
									<!--begin::Button-->
									<button type="button" class="btn btn-sm btn-light-primary">
										<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="black" />
												<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="black" />
												<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->Download Report
									</button>
									<!--end::Button-->
								</div>
								<!--end::Card toolbar-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body py-0">
								<!--begin::Table wrapper-->
								<div class="table-responsive">
									<!--begin::Table-->
									<table class="table align-middle table-row-dashed fw-bold text-gray-600 fs-6 gy-5" id="kt_table_customers_logs">
										<!--begin::Table body-->
										<tbody>
											<!--begin::Table row-->
											<tr>
												<!--begin::Badge=-->
												<td class="min-w-70px">
													<div class="badge badge-light-warning">404 WRN</div>
												</td>
												<!--end::Badge=-->
												<!--begin::Status=-->
												<td>POST /v1/customer/c_6207932405dfe/not_found</td>
												<!--end::Status=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-end min-w-200px">21 Feb 2022, 5:20 pm</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Badge=-->
												<td class="min-w-70px">
													<div class="badge badge-light-danger">500 ERR</div>
												</td>
												<!--end::Badge=-->
												<!--begin::Status=-->
												<td>POST /v1/invoice/in_8789_2149/invalid</td>
												<!--end::Status=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-end min-w-200px">25 Jul 2022, 6:05 pm</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Badge=-->
												<td class="min-w-70px">
													<div class="badge badge-light-success">200 OK</div>
												</td>
												<!--end::Badge=-->
												<!--begin::Status=-->
												<td>POST /v1/invoices/in_3260_6998/payment</td>
												<!--end::Status=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-end min-w-200px">15 Apr 2022, 11:05 am</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Badge=-->
												<td class="min-w-70px">
													<div class="badge badge-light-success">200 OK</div>
												</td>
												<!--end::Badge=-->
												<!--begin::Status=-->
												<td>POST /v1/invoices/in_7388_1651/payment</td>
												<!--end::Status=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-end min-w-200px">24 Jun 2022, 10:30 am</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Badge=-->
												<td class="min-w-70px">
													<div class="badge badge-light-success">200 OK</div>
												</td>
												<!--end::Badge=-->
												<!--begin::Status=-->
												<td>POST /v1/invoices/in_9266_6634/payment</td>
												<!--end::Status=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-end min-w-200px">19 Aug 2022, 10:30 am</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Badge=-->
												<td class="min-w-70px">
													<div class="badge badge-light-warning">404 WRN</div>
												</td>
												<!--end::Badge=-->
												<!--begin::Status=-->
												<td>POST /v1/customer/c_6207932405dfb/not_found</td>
												<!--end::Status=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-end min-w-200px">24 Jun 2022, 9:23 pm</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Badge=-->
												<td class="min-w-70px">
													<div class="badge badge-light-success">200 OK</div>
												</td>
												<!--end::Badge=-->
												<!--begin::Status=-->
												<td>POST /v1/invoices/in_7388_1651/payment</td>
												<!--end::Status=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-end min-w-200px">24 Jun 2022, 2:40 pm</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Badge=-->
												<td class="min-w-70px">
													<div class="badge badge-light-danger">500 ERR</div>
												</td>
												<!--end::Badge=-->
												<!--begin::Status=-->
												<td>POST /v1/invoice/in_9281_8796/invalid</td>
												<!--end::Status=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-end min-w-200px">20 Jun 2022, 11:05 am</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Badge=-->
												<td class="min-w-70px">
													<div class="badge badge-light-success">200 OK</div>
												</td>
												<!--end::Badge=-->
												<!--begin::Status=-->
												<td>POST /v1/invoices/in_9010_5289/payment</td>
												<!--end::Status=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-end min-w-200px">25 Jul 2022, 11:05 am</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
											<!--begin::Table row-->
											<tr>
												<!--begin::Badge=-->
												<td class="min-w-70px">
													<div class="badge badge-light-danger">500 ERR</div>
												</td>
												<!--end::Badge=-->
												<!--begin::Status=-->
												<td>POST /v1/invoice/in_9281_8796/invalid</td>
												<!--end::Status=-->
												<!--begin::Timestamp=-->
												<td class="pe-0 text-end min-w-200px">10 Nov 2022, 11:30 am</td>
												<!--end::Timestamp=-->
											</tr>
											<!--end::Table row-->
										</tbody>
										<!--end::Table body-->
									</table>
									<!--end::Table-->
								</div>
								<!--end::Table wrapper-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Card-->
						<!--begin::Card-->
						<div class="card pt-4 mb-6 mb-xl-9">
							<!--begin::Card header-->
							<div class="card-header border-0">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Events</h2>
								</div>
								<!--end::Card title-->
								<!--begin::Card toolbar-->
								<div class="card-toolbar">
									<!--begin::Button-->
									<button type="button" class="btn btn-sm btn-light-primary">
										<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="black" />
												<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="black" />
												<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->Download Report
									</button>
									<!--end::Button-->
								</div>
								<!--end::Card toolbar-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body py-0">
								<!--begin::Table-->
								<table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-5" id="kt_table_customers_events">
									<!--begin::Table body-->
									<tbody>
										<!--begin::Table row-->
										<tr>
											<!--begin::Event=-->
											<td class="min-w-400px">
												<a href="#" class="text-gray-600 text-hover-primary me-1">Sean Bean</a>has made payment to
												<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a>
											</td>
											<!--end::Event=-->
											<!--begin::Timestamp=-->
											<td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2022, 9:23 pm</td>
											<!--end::Timestamp=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Event=-->
											<td class="min-w-400px">
												<a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to
												<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#OLP-45690</a>
											</td>
											<!--end::Event=-->
											<!--begin::Timestamp=-->
											<td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2022, 2:40 pm</td>
											<!--end::Timestamp=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Event=-->
											<td class="min-w-400px">Invoice
												<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
												<span class="badge badge-light-danger">Declined</span>
											</td>
											<!--end::Event=-->
											<!--begin::Timestamp=-->
											<td class="pe-0 text-gray-600 text-end min-w-200px">20 Jun 2022, 11:30 am</td>
											<!--end::Timestamp=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Event=-->
											<td class="min-w-400px">Invoice
												<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#WER-45670</a>is
												<span class="badge badge-light-info">In Progress</span>
											</td>
											<!--end::Event=-->
											<!--begin::Timestamp=-->
											<td class="pe-0 text-gray-600 text-end min-w-200px">15 Apr 2022, 5:30 pm</td>
											<!--end::Timestamp=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Event=-->
											<td class="min-w-400px">
												<a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to
												<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a>
											</td>
											<!--end::Event=-->
											<!--begin::Timestamp=-->
											<td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2022, 6:43 am</td>
											<!--end::Timestamp=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Event=-->
											<td class="min-w-400px">Invoice
												<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from
												<span class="badge badge-light-warning me-1">Pending</span>to
												<span class="badge badge-light-info">In Progress</span>
											</td>
											<!--end::Event=-->
											<!--begin::Timestamp=-->
											<td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2022, 10:30 am</td>
											<!--end::Timestamp=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Event=-->
											<td class="min-w-400px">Invoice
												<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#WER-45670</a>is
												<span class="badge badge-light-info">In Progress</span>
											</td>
											<!--end::Event=-->
											<!--begin::Timestamp=-->
											<td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2022, 9:23 pm</td>
											<!--end::Timestamp=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Event=-->
											<td class="min-w-400px">Invoice
												<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#DER-45645</a>status has changed from
												<span class="badge badge-light-info me-1">In Progress</span>to
												<span class="badge badge-light-primary">In Transit</span>
											</td>
											<!--end::Event=-->
											<!--begin::Timestamp=-->
											<td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2022, 5:20 pm</td>
											<!--end::Timestamp=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Event=-->
											<td class="min-w-400px">
												<a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to
												<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#OLP-45690</a>
											</td>
											<!--end::Event=-->
											<!--begin::Timestamp=-->
											<td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2022, 8:43 pm</td>
											<!--end::Timestamp=-->
										</tr>
										<!--end::Table row-->
										<!--begin::Table row-->
										<tr>
											<!--begin::Event=-->
											<td class="min-w-400px">
												<a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to
												<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a>
											</td>
											<!--end::Event=-->
											<!--begin::Timestamp=-->
											<td class="pe-0 text-gray-600 text-end min-w-200px">15 Apr 2022, 5:30 pm</td>
											<!--end::Timestamp=-->
										</tr>
										<!--end::Table row-->
									</tbody>
									<!--end::Table body-->
								</table>
								<!--end::Table-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Card-->
					</div>
					<!--end:::Tab pane-->
					
				</div>
				<!--end:::Tab content-->
			</div>
			<!--end::Content-->
		</div>

	</div>
	<!--end::Container-->
</div>
@endsection