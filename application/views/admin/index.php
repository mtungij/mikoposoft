<?php include('incs/admin_header.php'); ?>
<?php include('incs/admin_sidebar.php'); ?>

<div class="content-body">
			<!-- row -->			
			<div class="container-fluid">
				<div class="row">
					<div class="xl:w-3/4 col-xxl-12">
						<div class="row">
							<div class="w-full">
								<div class="row">  
									<div class="xl:w-1/2">
										<div class="row">
											<div class="sm:w-1/2">
												<div class="card bg-primary text-white">
													<div class="card-header flex justify-between sm:pt-6 py-5 sm:p-5 px-4 items-center relative flex-wrap">
														<div class="revenue-date">
															<span class="text-sm">Today Expected Repayments</span>
															<h4 class="text-white text-2xl font-semibold">500</h4>
														</div>
														
														
													</div>
													<div class="card-body sm:p-5 p-4 sm:pb-0 pb-0 flex flex-auto items-center custome-tooltip">
														<div id="chartBar" class="chartBar -mt-10 ml-[-21px]"></div>
														<div>
															<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="10" cy="10" r="10" fill="white"/>
																<g clip-path="url(#clip0_3_443)">
																<path opacity="0.3" d="M13.0641 7.54535C13.3245 7.285 13.3245 6.86289 13.0641 6.60254C12.8038 6.34219 12.3817 6.34219 12.1213 6.60254L6.46445 12.2594C6.2041 12.5197 6.2041 12.9419 6.46445 13.2022C6.7248 13.4626 7.14691 13.4626 7.40726 13.2022L13.0641 7.54535Z" fill="black"/>
																<path d="M7.40729 7.26921C7.0391 7.26921 6.74062 6.97073 6.74062 6.60254C6.74062 6.23435 7.0391 5.93587 7.40729 5.93587H13.0641C13.4211 5.93587 13.7147 6.21699 13.7302 6.57358L13.9659 11.9947C13.9819 12.3626 13.6966 12.6737 13.3288 12.6897C12.961 12.7057 12.6498 12.4205 12.6338 12.0526L12.4258 7.26921H7.40729Z" fill="black"/>
																</g>
																<defs>
																<clipPath id="clip0_3_443">
																<rect width="16" height="16" fill="white" transform="matrix(-1 0 0 -1 18 18)"/>
																</clipPath>
																</defs>
															</svg>

														</div>
													</div>
												</div>
											</div>
											<div class="sm:w-1/2">
												<div class="card bg-secondary text-white">
													<div class="card-header flex justify-between sm:pt-6 py-5 sm:p-5 px-4 items-center relative flex-wrap">
														<div class="revenue-date">
															<span class="text-sm text-dark">Today Deposit</span>
															<h4 class="text-dark text-2xl font-semibold">700</h4>
														</div>
														<div class="avatar-list avatar-list-stacked me-2">
															<span class="bg-white text-black justify-center text-xs inline-flex leading-[1.975rem] w-[2.375rem] h-[2.375rem] me-[-13px] rounded-full border-2 border-white dark:border-[#182237] relative object-cover duration-300 hover:z-[1]">
																<a href="#">
																	<svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path fill-rule="evenodd" clip-rule="evenodd" d="M5.83333 6.27083V1.60417C5.83333 0.959834 6.35567 0.4375 7 0.4375C7.64433 0.4375 8.16667 0.959834 8.16667 1.60417V6.27083H12.8333C13.4777 6.27083 14 6.79317 14 7.4375C14 8.08183 13.4777 8.60417 12.8333 8.60417H8.16667V13.2708C8.16667 13.9152 7.64433 14.4375 7 14.4375C6.35567 14.4375 5.83333 13.9152 5.83333 13.2708V8.60417H1.16667C0.522334 8.60417 0 8.08183 0 7.4375C0 6.79317 0.522334 6.27083 1.16667 6.27083H5.83333Z" fill="#222B40"/>
																	</svg>
																</a>
															</span>
														</div>
														
													</div>
													<div class="card-body sm:p-5 p-4 sm:pb-0 pb-0 flex flex-auto items-center custome-tooltip">
														<div id="expensesChart" class="chartBar -mt-10 ml-[-21px]"></div>
														<div>
															<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="10" cy="10" r="10" fill="#222B40"/>
																<g clip-path="url(#clip0_3_473)">
																<path opacity="0.3" d="M13.0641 7.54535C13.3245 7.285 13.3245 6.86289 13.0641 6.60254C12.8038 6.34219 12.3817 6.34219 12.1213 6.60254L6.46446 12.2594C6.20411 12.5197 6.20411 12.9419 6.46446 13.2022C6.72481 13.4626 7.14692 13.4626 7.40727 13.2022L13.0641 7.54535Z" fill="white"/>
																<path d="M7.40728 7.26921C7.03909 7.26921 6.74061 6.97073 6.74061 6.60254C6.74061 6.23435 7.03909 5.93587 7.40728 5.93587H13.0641C13.4211 5.93587 13.7147 6.21699 13.7302 6.57358L13.9659 11.9947C13.9819 12.3626 13.6966 12.6737 13.3288 12.6897C12.9609 12.7057 12.6498 12.4205 12.6338 12.0526L12.4258 7.26921H7.40728Z" fill="white"/>
																</g>
																<defs>
																<clipPath id="clip0_3_473">
																<rect width="16" height="16" fill="white" transform="matrix(-1 0 0 -1 18 18)"/>
																</clipPath>
																</defs>
															</svg>
															
														</div>
													</div>
												</div>
											</div>

											
											<div class="sm:w-1/2">
												<div class="card">
													<div class="card-body depostit-card p-5">
														<div class="depostit-card-media flex justify-between relative z-[2]">
															<div>
																<a href=""<?php echo base_url("admin/loan_pending_time"); ?>" class="font-normal">Arrears</a>
																<h3 class="font-semibold leading-[1.346]"></h3>
															</div>
															<div class="icon-box bg-secondary h-[2.5rem] w-[2.5rem] relative flex items-center justify-center rounded-md">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<g clip-path="url(#clip0_3_566)">
																	<path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M8 3V3.5C8 4.32843 8.67157 5 9.5 5H14.5C15.3284 5 16 4.32843 16 3.5V3H18C19.1046 3 20 3.89543 20 5V21C20 22.1046 19.1046 23 18 23H6C4.89543 23 4 22.1046 4 21V5C4 3.89543 4.89543 3 6 3H8Z" fill="#222B40"/>
																	<path fill-rule="evenodd" clip-rule="evenodd" d="M10.875 15.75C10.6354 15.75 10.3958 15.6542 10.2042 15.4625L8.2875 13.5458C7.90417 13.1625 7.90417 12.5875 8.2875 12.2042C8.67083 11.8208 9.29375 11.8208 9.62917 12.2042L10.875 13.45L14.0375 10.2875C14.4208 9.90417 14.9958 9.90417 15.3792 10.2875C15.7625 10.6708 15.7625 11.2458 15.3792 11.6292L11.5458 15.4625C11.3542 15.6542 11.1146 15.75 10.875 15.75Z" fill="#222B40"/>
																	<path fill-rule="evenodd" clip-rule="evenodd" d="M11 2C11 1.44772 11.4477 1 12 1C12.5523 1 13 1.44772 13 2H14.5C14.7761 2 15 2.22386 15 2.5V3.5C15 3.77614 14.7761 4 14.5 4H9.5C9.22386 4 9 3.77614 9 3.5V2.5C9 2.22386 9.22386 2 9.5 2H11Z" fill="#222B40"/>
																	</g>
																	<defs>
																	<clipPath id="clip0_3_566">
																	<rect width="24" height="24" fill="white"/>
																	</clipPath>
																	</defs>
																</svg>
															</div>
														</div>
														<div class="progress-box mt-0">
															<div class="flex justify-between">
															
               
																<p class="mb-0">800</p>
															</div>
															<div class="progress h-[5px] flex overflow-hidden rounded-md">
																<div class="progress-bar bg-secondary" style="width:50%; height:5px; border-radius:4px;" role="progressbar"></div>
															</div>
														</div>
													</div>
												</div>	
											</div>
											<div class="sm:w-1/2">
												<div class="card chart-grd same-card overflow-hidden relative">
													<div class="card-body depostit-card p-0">
														<div class="depostit-card-media flex justify-between px-5 pt-[18px] relative z-[1]">
															<div>
																<h6 class="font-normal">Dafault Loans</h6>
																<h3 class="font-semibold leading-[1.346]">5,000</h3>
															</div>
															
														</div>
														<div id="NewExperience"></div>
													</div>
												</div>
											</div>
										</div>	
									</div>
									<div class="xl:w-1/4 sm:w-1/2 w-full">
										<div class="card bg-success rainbow-box relative z-[1] flex flex-col" style="background-image: url(assets/images/rainbow.gif);background-size: cover;background-blend-mode: luminosity;">
											
											<div class="sm:p-5 p-4 sm:pt-0 pt-0 flex-auto">
												<div class="finance"> 
													<h4 class="text-white max-xl:text-xl text-2xl mb-2 leading-[1.5]">All Custumer</h4>
													
												</div>
												<div class="flex pt-4"> 
													<div class="avatar-list avatar-list-stacked">
													<img src="<?php echo base_url("assets/images/group1.png") ?>" class="inline-block w-[2.375rem] h-[2.375rem] me-[-13px] rounded-full border-2 border-white dark:border-[#182237] relative object-cover duration-300 hover:z-[1]" alt="">
													<img src="<?php echo base_url("assets/images/group3.png") ?>" class="inline-block w-[2.375rem] h-[2.375rem] me-[-13px] rounded-full border-2 border-white dark:border-[#182237] relative object-cover duration-300 hover:z-[1]" alt="">
													<img src="<?php echo base_url("assets/images/group3.png") ?>" class="inline-block w-[2.375rem] h-[2.375rem] me-[-13px] rounded-full border-2 border-white dark:border-[#182237] relative object-cover duration-300 hover:z-[1]" alt="">

													</div>
													<div class="ratting-data ml-5">
														<h4 class="text-base text-white font-semibold">15k+</h4>
														<span class="text-xs text-white">All Customers</span>
													</div>
												</div>
												<div class="flex pt-4"> 
													<div class="avatar-list avatar-list-stacked">
													<img src="<?php echo base_url("assets/images/group1.png") ?>" class="inline-block w-[2.375rem] h-[2.375rem] me-[-13px] rounded-full border-2 border-white dark:border-[#182237] relative object-cover duration-300 hover:z-[1]" alt="">
													<img src="<?php echo base_url("assets/images/group3.png") ?>" class="inline-block w-[2.375rem] h-[2.375rem] me-[-13px] rounded-full border-2 border-white dark:border-[#182237] relative object-cover duration-300 hover:z-[1]" alt="">
													<img src="<?php echo base_url("assets/images/group3.png") ?>" class="inline-block w-[2.375rem] h-[2.375rem] me-[-13px] rounded-full border-2 border-white dark:border-[#182237] relative object-cover duration-300 hover:z-[1]" alt="">
													</div>
													<div class="ratting-data ml-5">
														<h4 class="text-base text-white font-semibold">15k+</h4>
														<span class="text-xs text-white">Active Customers</span>
													</div>
												</div>
												<div class="flex pt-4"> 
													<div class="avatar-list avatar-list-stacked">
													<img src="<?php echo base_url("assets/images/group1.png") ?>" class="inline-block w-[2.375rem] h-[2.375rem] me-[-13px] rounded-full border-2 border-white dark:border-[#182237] relative object-cover duration-300 hover:z-[1]" alt="">
													<img src="<?php echo base_url("assets/images/group3.png") ?>" class="inline-block w-[2.375rem] h-[2.375rem] me-[-13px] rounded-full border-2 border-white dark:border-[#182237] relative object-cover duration-300 hover:z-[1]" alt="">
													<img src="<?php echo base_url("assets/images/group3.png") ?>" class="inline-block w-[2.375rem] h-[2.375rem] me-[-13px] rounded-full border-2 border-white dark:border-[#182237] relative object-cover duration-300 hover:z-[1]" alt="">
													</div>
													<div class="ratting-data ml-5">
														<h4 class="text-base text-white font-semibold">15k+</h4>
														<span class="text-xs text-white">Inprogress Customers</span>
													</div>
												</div>
												<div class="flex pt-4"> 
													<div class="avatar-list avatar-list-stacked">
													<img src="<?php echo base_url("assets/images/group1.png") ?>" class="inline-block w-[2.375rem] h-[2.375rem] me-[-13px] rounded-full border-2 border-white dark:border-[#182237] relative object-cover duration-300 hover:z-[1]" alt="">
													<img src="<?php echo base_url("assets/images/group3.png") ?>" class="inline-block w-[2.375rem] h-[2.375rem] me-[-13px] rounded-full border-2 border-white dark:border-[#182237] relative object-cover duration-300 hover:z-[1]" alt="">
													<img src="<?php echo base_url("assets/images/group3.png") ?>" class="inline-block w-[2.375rem] h-[2.375rem] me-[-13px] rounded-full border-2 border-white dark:border-[#182237] relative object-cover duration-300 hover:z-[1]" alt="">
													</div>
													<div class="ratting-data ml-5">
														<h4 class="text-base text-white font-semibold">15k+</h4>
														<span class="text-xs text-white">Closed Customers</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="xl:w-1/4 sm:w-1/2 w-full">
										<div class="card">
											<div class="sm:p-5 p-4">
												<div class="relative">
													<div id="redial">
													</div>
													<span class="right-sign absolute bottom-[-40px] left-[50%] translate-x-[-50%] z-[1]"> 
														<svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
															<g filter="url(#filter0_d_3_700)">
															<circle cx="46.5" cy="31.5" r="16.5" fill="#F8B940"/>
															</g>
															<g clip-path="url(#clip0_3_700)">
															<path d="M52.738 25.3524C53.0957 24.9315 53.7268 24.8804 54.1476 25.2381C54.5684 25.5957 54.6196 26.2268 54.2619 26.6476L45.7619 36.6476C45.3986 37.0751 44.7549 37.1201 44.3356 36.7474L39.8356 32.7474C39.4228 32.3805 39.3857 31.7484 39.7526 31.3356C40.1195 30.9229 40.7516 30.8857 41.1643 31.2526L44.9002 34.5733L52.738 25.3524Z" fill="#222B40"/>
															</g>
															<defs>
															<filter id="filter0_d_3_700" x="0" y="0" width="93" height="93" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
															<feFlood flood-opacity="0" result="BackgroundImageFix"/>
															<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
															<feOffset dy="15"/>
															<feGaussianBlur stdDeviation="15"/>
															<feComposite in2="hardAlpha" operator="out"/>
															<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
															<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3_700"/>
															<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3_700" result="shape"/>
															</filter>
															<clipPath id="clip0_3_700">
															<rect width="24" height="24" fill="white" transform="translate(35 19)"/>
															</clipPath>
															</defs>
														</svg>
													</span>
												</div>
												<div class="redia-date text-center mt-[15px]">
													<h4 class="text-xl font-semibold mb-2">My Progress</h4>
													<p class="mb-4">
														Lorem ipsum dolor sit amet, consectetur
													</p>
													<a href="crm.html" class="inline-block rounded font-medium xl:text-[15px] text-xs leading-5 xl:py-[0.719rem] xl:px-[1.375rem] py-2.5 px-4 border border-secondary text-dark bg-secondary">More Details</a>
												</div>
											</div>

										</div>
									</div>
									<div class="xl:w-2/3 w-full">
										<div class="card overflow-hidden flex flex-col">
											<div class="card-header text-center flex justify-between sm:pt-6 pt-5 sm:px-5 px-4 items-center relative flex-wrap">
												<h4 class="text-base">Projects Overview</h4>
												<ul class="nav nav-pills mix-chart-tab flex flex-wrap max-sm:mt-2.5 dz-tab-area" id="pills-tab" role="tablist">
													<li class="nav-item" role="presentation">
													  <button class="nav-link mx-1 bg-[#F2F2F2] rounded py-[5px] px-[15px] text-[13px] text-primary duration-500 tab-btn active" data-tab="tab-Week" data-series="week" id="pills-week-tab">Week</button>
													</li>
													<li class="nav-item" role="presentation">
													  <button class="nav-link mx-1 bg-[#F2F2F2] rounded py-[5px] px-[15px] text-[13px] text-primary duration-500 tab-btn" data-tab="tab-Month"  data-series="month" id="pills-month-tab">Month</button>
													</li>
													<li class="nav-item" role="presentation">
													  <button class="nav-link mx-1 bg-[#F2F2F2] rounded py-[5px] px-[15px] text-[13px] text-primary duration-500 tab-btn" data-tab="tab-Year" data-series="year" id="pills-year-tab">Year</button>
													</li>
													 <li class="nav-item" role="presentation">
													  <button class="nav-link mx-1 bg-[#F2F2F2] rounded py-[5px] px-[15px] text-[13px] text-primary duration-500 tab-btn" data-tab="tab-All" data-series="all" id="pills-all-tab">All</button>
													</li>
												  </ul>
											</div>
											<div class="card-body relative custome-tooltip">
												<div id="overiewChart"></div>
												<div class="ttl-project flex justify-around py-[15px] text-center border-t border-[#E6E6E6] dark:border-[#ffffff1a] overflow-hidden max-sm:hidden">
													<div class="pr-data relative">
														<h5>12,721</h5>
														<span class="text-sm text-body-color">Number of Projects</span>
													</div>
													<div class="relative pr-data">
														<h5 class="text-primary">721</h5>
														<span class="text-sm text-body-color">Active Projects</span>
													</div>
													<div class="pr-data relative">
														<h5>$2,50,523</h5>
														<span class="text-sm text-body-color">Revenue</span>
													</div>
													<div class="pr-data after:hidden">
														<h5 class="text-success">12,275h</h5>
														<span class="text-sm text-body-color">Working Hours</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="xl:w-1/3 w-full">
										<div class="card overflow-hidden flex flex-col">
											<div class="card-header flex justify-between sm:pt-6 py-5 sm:p-5 px-4 items-center relative flex-wrap">
												<h4 class="text-base">My To Do Items</h4>
												<div class="text-sm">
													<a href="javascript:void(0);" class="text-primary mr-2">View All</a>
													<a href="javascript:void(0);" class="text-dark"> + Add To Do</a>
												</div>
											</div>
											<div class="card-body p-0">
												<div class="dt-do-bx">
													<div class="draggable-zone dropzoneContainer to-dodroup dz-scroll h-[362px] overflow-y-scroll relative overflow-x-hidden">
														<div class="sub-card draggable-handle draggable border-b border-[#E6E6E6] dark:border-[#ffffff1a] cursor-all-scroll">
															<div class="d-items py-[15px] px-5">
																<span class="text-warning text-sm dang block mb-2">
																	<svg class="inline-block mr-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M3.61051 15.3276H14.3978C15.5843 15.3276 16.329 14.0451 15.7395 13.0146L10.35 3.59085C9.75676 2.5536 8.26126 2.55285 7.66726 3.5901L2.26876 13.0139C1.67926 14.0444 2.42326 15.3276 3.61051 15.3276Z" stroke="#FF9F00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																			<path d="M9.00189 10.0611V7.7361" stroke="#FF9F00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
																			<path d="M8.99625 12.375H9.00375" stroke="#FF9F00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>
																	Latest to do's
																</span>
																<div class="flex justify-between">
																	<div class="d-iteml-2 flex items-baseline">
																		<div>
																			<svg class="inline-block mr-2.5" width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect width="1" height="1" fill="#888888"/>
																				<rect y="3" width="1" height="1" fill="#888888"/>
																				<rect y="6" width="1" height="1" fill="#888888"/>
																				<rect y="9" width="1" height="1" fill="#888888"/>
																				<rect y="12" width="1" height="1" fill="#888888"/>
																				<rect y="15" width="1" height="1" fill="#888888"/>
																				<rect x="4" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="3" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="6" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="9" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="12" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="15" width="1" height="1" fill="#888888"/>
																				<rect x="8" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="3" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="6" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="9" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="12" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="15" width="1" height="1" fill="#888888"/>
																			</svg>
																		</div>
																		<div>
																			<div class="form-check custom-checkbox block min-h-[1.3125rem] mb-0.5 pl-[1.5em] font-semibold">
																				<input type="checkbox" class="form-check-input" id="customCheckBox1" required>
																				<label class="form-check-label ml-[0.3125rem] text-sm text-body-color dark:text-white mt-[0.1875rem] font-normal" for="customCheckBox1">Compete this projects Monday</label>
																			</div>
																			<span class="text-body-color text-[13px]">2024-12-26 07:15:00</span>
																		</div>
																	</div>
																	<div class="flex">
																		<div class="icon-box h-7 w-7 cursor-pointer relative flex items-center justify-center rounded-md icon-box-md bg-danger-light mr-1">
																			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</div>
																		<div class="icon-box text-primary h-7 w-7 cursor-pointer relative flex items-center justify-center rounded-md icon-box-md bg-primary-light ml-1">
																			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																				<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
		
																		</div>
																	</div>
																</div>	
															</div>
														</div>
														<div class="sub-card draggable-handle draggable border-b border-[#E6E6E6] dark:border-[#ffffff1a] cursor-all-scroll">
															<div class="d-items py-[15px] px-5">
																<span class="text-success text-sm dang block mb-2">
																	<svg class="inline-block mr-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M15 4.5L6.75 12.75L3 9" stroke="#3AC977" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																	</svg>
																	Latest finished to do's
																</span>
																<div class="flex justify-between">
																	<div class="d-iteml-2 flex items-baseline">
																		<div>
																			<svg class="inline-block mr-2.5" width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect width="1" height="1" fill="#888888"/>
																				<rect y="3" width="1" height="1" fill="#888888"/>
																				<rect y="6" width="1" height="1" fill="#888888"/>
																				<rect y="9" width="1" height="1" fill="#888888"/>
																				<rect y="12" width="1" height="1" fill="#888888"/>
																				<rect y="15" width="1" height="1" fill="#888888"/>
																				<rect x="4" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="3" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="6" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="9" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="12" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="15" width="1" height="1" fill="#888888"/>
																				<rect x="8" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="3" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="6" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="9" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="12" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="15" width="1" height="1" fill="#888888"/>
																			</svg>
																		</div>
																		<div>
																			<div class="form-check custom-checkbox block min-h-[1.3125rem] mb-0.5 pl-[1.5em] font-semibold">
																				<input type="checkbox" class="form-check-input" id="customCheckBox02" required>
																				<label class="form-check-label ml-[0.3125rem] text-sm text-body-color dark:text-white mt-[0.1875rem] font-normal" for="customCheckBox02">Compete this projects Tuesday</label>
																			</div>
																			<span class="text-body-color text-[13px]">2024-12-26 07:15:00</span>
																		</div>
																	</div>
																	<div class="flex">
																		<div class="icon-box h-7 w-7 cursor-pointer relative flex items-center justify-center rounded-md icon-box-md bg-danger-light mr-1">
																			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</div>
																		<div class="icon-box text-primary h-7 w-7 cursor-pointer relative flex items-center justify-center rounded-md icon-box-md bg-primary-light ml-1">
																			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																				<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
		
																		</div>
																	</div>
																</div>	
															</div>
														</div>
														<div class="sub-card draggable-handle draggable border-b border-[#E6E6E6] dark:border-[#ffffff1a] cursor-all-scroll">
															<div class="d-items py-[15px] px-5">
																<div class="flex justify-between">
																	<div class="d-iteml-2 flex items-baseline">
																		<div>
																			<svg class="inline-block mr-2.5" width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect width="1" height="1" fill="#888888"/>
																				<rect y="3" width="1" height="1" fill="#888888"/>
																				<rect y="6" width="1" height="1" fill="#888888"/>
																				<rect y="9" width="1" height="1" fill="#888888"/>
																				<rect y="12" width="1" height="1" fill="#888888"/>
																				<rect y="15" width="1" height="1" fill="#888888"/>
																				<rect x="4" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="3" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="6" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="9" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="12" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="15" width="1" height="1" fill="#888888"/>
																				<rect x="8" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="3" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="6" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="9" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="12" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="15" width="1" height="1" fill="#888888"/>
																			</svg>
																		</div>
																		<div>
																			<div class="form-check custom-checkbox block min-h-[1.3125rem] mb-0.5 pl-[1.5em] font-semibold">
																				<input type="checkbox" class="form-check-input" id="customCheckBox03" required>
																				<label class="form-check-label ml-[0.3125rem] text-sm text-body-color dark:text-white mt-[0.1875rem] font-normal" for="customCheckBox03">Compete this projects Friday</label>
																			</div>
																			<span class="text-body-color text-[13px]">2024-12-26 07:15:00</span>
																		</div>
																	</div>
																	<div class="flex">
																		<div class="icon-box h-7 w-7 cursor-pointer relative flex items-center justify-center rounded-md icon-box-md bg-danger-light mr-1">
																			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</div>
																		<div class="icon-box text-primary h-7 w-7 cursor-pointer relative flex items-center justify-center rounded-md icon-box-md bg-primary-light ml-1">
																			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																				<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
		
																		</div>
																	</div>
																</div>	
															</div>
														</div>
														<div class="sub-card draggable-handle draggable border-b border-[#E6E6E6] dark:border-[#ffffff1a] cursor-all-scroll">
															<div class="d-items py-[15px] px-5">
																<div class="flex justify-between">
																	<div class="d-iteml-2 flex items-baseline">
																		<div>
																			<svg class="inline-block mr-2.5" width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect width="1" height="1" fill="#888888"/>
																				<rect y="3" width="1" height="1" fill="#888888"/>
																				<rect y="6" width="1" height="1" fill="#888888"/>
																				<rect y="9" width="1" height="1" fill="#888888"/>
																				<rect y="12" width="1" height="1" fill="#888888"/>
																				<rect y="15" width="1" height="1" fill="#888888"/>
																				<rect x="4" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="3" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="6" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="9" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="12" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="15" width="1" height="1" fill="#888888"/>
																				<rect x="8" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="3" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="6" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="9" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="12" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="15" width="1" height="1" fill="#888888"/>
																			</svg>
																		</div>
																		<div>
																			<div class="form-check custom-checkbox block min-h-[1.3125rem] mb-0.5 pl-[1.5em] font-semibold">
																				<input type="checkbox" class="form-check-input" id="customCheckBox4" required>
																				<label class="form-check-label ml-[0.3125rem] text-sm text-body-color dark:text-white mt-[0.1875rem] font-normal" for="customCheckBox4">Compete this projects Saturday</label>
																			</div>
																			<span class="text-body-color text-[13px]">2024-12-26 07:15:00</span>
																		</div>
																	</div>
																	<div class="flex">
																		<div class="icon-box h-7 w-7 cursor-pointer relative flex items-center justify-center rounded-md icon-box-md bg-danger-light mr-1">
																			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</div>
																		<div class="icon-box text-primary h-7 w-7 cursor-pointer relative flex items-center justify-center rounded-md icon-box-md bg-primary-light ml-1">
																			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																				<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
		
																		</div>
																	</div>
																</div>	
															</div>
														</div>
														<div class="sub-card draggable-handle draggable border-b border-[#E6E6E6] dark:border-[#ffffff1a] cursor-all-scroll">
															<div class="d-items py-[15px] px-5">
																<div class="flex justify-between">
																	<div class="d-iteml-2 flex items-baseline">
																		<div>
																			<svg class="inline-block mr-2.5" width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect width="1" height="1" fill="#888888"/>
																				<rect y="3" width="1" height="1" fill="#888888"/>
																				<rect y="6" width="1" height="1" fill="#888888"/>
																				<rect y="9" width="1" height="1" fill="#888888"/>
																				<rect y="12" width="1" height="1" fill="#888888"/>
																				<rect y="15" width="1" height="1" fill="#888888"/>
																				<rect x="4" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="3" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="6" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="9" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="12" width="1" height="1" fill="#888888"/>
																				<rect x="4" y="15" width="1" height="1" fill="#888888"/>
																				<rect x="8" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="3" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="6" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="9" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="12" width="1" height="1" fill="#888888"/>
																				<rect x="8" y="15" width="1" height="1" fill="#888888"/>
																			</svg>
																		</div>
																		<div>
																			<div class="form-check custom-checkbox block min-h-[1.3125rem] mb-0.5 pl-[1.5em] font-semibold">
																				<input type="checkbox" class="form-check-input" id="customCheckBox5" required>
																				<label class="form-check-label ml-[0.3125rem] text-sm text-body-color dark:text-white mt-[0.1875rem] font-normal" for="customCheckBox5">Compete this projects Thursday</label>
																			</div>
																			<span class="text-body-color text-[13px]">2024-12-26 07:15:00</span>
																		</div>
																	</div>
																	<div class="flex">
																		<div class="icon-box h-7 w-7 cursor-pointer relative flex items-center justify-center rounded-md icon-box-md bg-danger-light mr-1">
																			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</div>
																		<div class="icon-box text-primary h-7 w-7 cursor-pointer relative flex items-center justify-center rounded-md icon-box-md bg-primary-light ml-1">
																			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																				<path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																				<path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</div>
																	</div>
																</div>	
															</div>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>			
						</div>
					</div>
				
					
				</div>
			</div>
        </div>
		 
        


    <!-- Main wrapper end -->
	<?php include('incs/admin_footer.php'); ?>