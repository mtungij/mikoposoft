<!-- <?php include('incs/admin_header.php'); ?>
<?php include('incs/admin_sidebar.php'); ?>

 
	
	<!-- Header start -->
	<div class="header">
		<div class="header-content">
			<nav class="navbar navbar-expand">
				<div class="navbar-collapse justify-between">
					<div class="header-left">
						<div class="dashboard_bar max-md:hidden dark:text-white">
							View Staff
						</div>
					</div>
					<div class="header-right flex items-center h-full">
						<div class="input-group search-area flex flex-wrap items-stretch relative max-xl:hidden">
							<input type="text" class="form-control py-1.5 px-3 h-[2.813rem] text-sm placeholder-ph-color text-ph-color outline-none w-[1%] flex-auto rounded-s-md rounded-e-none" placeholder="Search here...">
							<span class="input-group-text min-w-[3.125rem] justify-center flex items-center text-sm pr-4 pl-[5px] leading-[1.5] text-center rounded-e-md"><a href="javascript:void(0)">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_1_450)">
									<path opacity="0.3" d="M14.2929 16.7071C13.9024 16.3166 13.9024 15.6834 14.2929 15.2929C14.6834 14.9024 15.3166 14.9024 15.7071 15.2929L19.7071 19.2929C20.0976 19.6834 20.0976 20.3166 19.7071 20.7071C19.3166 21.0976 18.6834 21.0976 18.2929 20.7071L14.2929 16.7071Z" fill="#452B90"/>
									<path d="M11 16C13.7614 16 16 13.7614 16 11C16 8.23859 13.7614 6.00002 11 6.00002C8.23858 6.00002 6 8.23859 6 11C6 13.7614 8.23858 16 11 16ZM11 18C7.13401 18 4 14.866 4 11C4 7.13402 7.13401 4.00002 11 4.00002C14.866 4.00002 18 7.13402 18 11C18 14.866 14.866 18 11 18Z" fill="#452B90"/>
									</g>
									<defs>
									<clipPath id="clip0_1_450">
									<rect width="24" height="24" fill="white"/>
									</clipPath>
									</defs>
								</svg>
							</a></span>
						</div>
						<ul class="flex flex-row">
							<li class="nav-item dropdown notification_dropdown flex items-center relative">
								<a class="nav-link relative sm:w-[45px] w-[40px] sm:h-[45px] h-[40px] mx-[5px] max-sm:mr-0 text-center p-2 text-[#464a53] rounded-md sm:text-lg block duration-500 bell dz-theme-mode" href="javascript:void(0);">
									<svg id="icon-light" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24"/>
											<path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" fill-rule="nonzero"/>
											<path d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
										</g>
									</svg>
									<svg id="icon-dark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"/>
										<path d="M12.0700837,4.0003006 C11.3895108,5.17692613 11,6.54297551 11,8 C11,12.3948932 14.5439081,15.9620623 18.9299163,15.9996994 C17.5467214,18.3910707 14.9612535,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 C12.0233848,4 12.0467462,4.00010034 12.0700837,4.0003006 Z" fill="#000000"/>
									</g>
									</svg>	
								</a>
							</li>								
							<li class="nav-item dropdown notification_dropdown flex items-center relative">
								<a data-dz-dropdown="DzNotificationDropdown" class="dz-dropdown nav-link relative sm:w-[45px] w-[40px] sm:h-[45px] h-[40px] mx-[5px] max-sm:mr-0 text-center p-2 text-[#464a53] rounded-md sm:text-lg block duration-500" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 12H19C19.8284 12 20.5 12.6716 20.5 13.5C20.5 14.3284 19.8284 15 19 15H6C5.17157 15 4.5 14.3284 4.5 13.5C4.5 12.6716 5.17157 12 6 12H7.5L8.05827 6.97553C8.30975 4.71226 10.2228 3 12.5 3C14.7772 3 16.6903 4.71226 16.9417 6.97553L17.5 12Z" fill="#222B40"/>
										<path opacity="0.3" d="M14.5 18C14.5 16.8954 13.6046 16 12.5 16C11.3954 16 10.5 16.8954 10.5 18C10.5 19.1046 11.3954 20 12.5 20C13.6046 20 14.5 19.1046 14.5 18Z" fill="#222B40"/>
									</svg>
								</a>
								<div id="DzNotificationDropdown" class="dz-dropdown-menu absolute z-[9] shadow-[0_0_3.125rem_0_rgba(82,63,105,0.15)] w-[18.5rem] pt-4 mt-0.5 top-full max-md-top-[45px] md:right-0 rounded-md bg-white dark:bg-[#182237] hidden">
									<div id="DZ_W_Notification1" class="widget-media dz-scroll overflow-y-scroll overflow-x-hidden relative p-4" style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
													<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2">
														<img alt="image" width="50" src="assets/images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1 text-[13px] leading-4">Dr sultads Send you Photo</h6>
														<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
													<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1 text-[13px] leading-4">Resport created successfully</h6>
														<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
													<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1 text-[13px] leading-4">Reminder : Treatment Time!</h6>
														<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
													<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2">
														<img alt="image" width="50" src="assets/images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1 text-[13px] leading-4">Dr sultads Send you Photo</h6>
														<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
													<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1 text-[13px] leading-4">Resport created successfully</h6>
														<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
													<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1 text-[13px] leading-4">Reminder : Treatment Time!</h6>
														<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
													<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2">
														<img alt="image" width="50" src="assets/images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1 text-[13px] leading-4">Dr sultads Send you Photo</h6>
														<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
													<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1 text-[13px] leading-4">Resport created successfully</h6>
														<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
													<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1 text-[13px] leading-4">Reminder : Treatment Time!</h6>
														<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
													<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2">
														<img alt="image" width="50" src="assets/images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1 text-[13px] leading-4">Dr sultads Send you Photo</h6>
														<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
													<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1 text-[13px] leading-4">Resport created successfully</h6>
														<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
													<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1 text-[13px] leading-4">Reminder : Treatment Time!</h6>
														<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<a class="dropdown-item pt-[0.9375rem] px-[1.875rem] pb-[14px] text-center block border-t text-[13px] text-primary border-[#f1f1f1] dark:border-[#ffffff1a]" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a> 
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown flex items-center relative">
								<a class="nav-link relative sm:w-[45px] w-[40px] sm:h-[45px] h-[40px] mx-[5px] max-sm:mr-0 text-center p-2 text-[#464a53] rounded-md sm:text-lg block duration-500 bell-link" href="javascript:void(0);">
									<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_1_463)">
										<path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M6.5 2H18.5C19.0523 2 19.5 2.44772 19.5 3V13C19.5 13.5523 19.0523 14 18.5 14H6.5C5.94772 14 5.5 13.5523 5.5 13V3C5.5 2.44772 5.94772 2 6.5 2ZM14.3 4C13.6562 4 12.9033 4.72985 12.5 5.2C12.0967 4.72985 11.3438 4 10.7 4C9.5604 4 8.9 4.88887 8.9 6.02016C8.9 7.27339 10.1 8.6 12.5 10C14.9 8.6 16.1 7.3 16.1 6.1C16.1 4.96871 15.4396 4 14.3 4Z" fill="#222B40"/>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M4.29275 6.57254L12.5 12.5L20.7073 6.57254C20.9311 6.41086 21.2437 6.46127 21.4053 6.68514C21.4669 6.77034 21.5 6.87278 21.5 6.97788V17C21.5 18.1046 20.6046 19 19.5 19H5.5C4.39543 19 3.5 18.1046 3.5 17V6.97788C3.5 6.70174 3.72386 6.47788 4 6.47788C4.10511 6.47788 4.20754 6.511 4.29275 6.57254Z" fill="#222B40"/>
										</g>
										<defs>
										<clipPath id="clip0_1_463">
										<rect width="24" height="24" fill="white" transform="translate(0.5)"/>
										</clipPath>
										</defs>
									</svg>

								</a>
							</li>	
							<li class="nav-item dropdown notification_dropdown flex items-center relative">
								<a data-dz-dropdown="DzSettingDropdown" class="dz-dropdown nav-link relative sm:w-[45px] w-[40px] sm:h-[45px] h-[40px] mx-[5px] max-sm:mr-0 text-center p-2 text-[#464a53] rounded-md sm:text-lg block duration-500" href="javascript:void(0);" >
									<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 16.87V9.257H21.5V16.931C21.5 20.07 19.5241 22 16.3628 22H8.62733C5.49561 22 3.5 20.03 3.5 16.87ZM8.45938 14.41C8.00494 14.431 7.62953 14.07 7.60977 13.611C7.60977 13.151 7.96542 12.771 8.41987 12.75C8.86443 12.75 9.22997 13.101 9.23985 13.55C9.2596 14.011 8.90395 14.391 8.45938 14.41ZM12.5198 14.41C12.0653 14.431 11.6899 14.07 11.6701 13.611C11.6701 13.151 12.0258 12.771 12.4802 12.75C12.9248 12.75 13.2903 13.101 13.3002 13.55C13.32 14.011 12.9643 14.391 12.5198 14.41ZM16.5505 18.09C16.096 18.08 15.7305 17.7 15.7305 17.24C15.7206 16.78 16.0862 16.401 16.5406 16.391H16.5505C17.0148 16.391 17.3902 16.771 17.3902 17.24C17.3902 17.71 17.0148 18.09 16.5505 18.09ZM11.6701 17.24C11.6899 17.7 12.0653 18.061 12.5198 18.04C12.9643 18.021 13.32 17.641 13.3002 17.181C13.2903 16.731 12.9248 16.38 12.4802 16.38C12.0258 16.401 11.6701 16.78 11.6701 17.24ZM7.59989 17.24C7.61965 17.7 7.99506 18.061 8.44951 18.04C8.89407 18.021 9.24973 17.641 9.22997 17.181C9.22009 16.731 8.85456 16.38 8.40999 16.38C7.95554 16.401 7.59989 16.78 7.59989 17.24ZM15.7404 13.601C15.7404 13.141 16.096 12.771 16.5505 12.761C16.9951 12.761 17.3507 13.12 17.3705 13.561C17.3804 14.021 17.0247 14.401 16.5801 14.41C16.1257 14.42 15.7503 14.07 15.7404 13.611V13.601Z" fill="#222B40"/>
										<path opacity="0.4" d="M3.50336 9.2569C3.5162 8.6699 3.5656 7.5049 3.65846 7.1299C4.13267 5.0209 5.74298 3.6809 8.04485 3.4899H16.9559C19.238 3.6909 20.8681 5.0399 21.3423 7.1299C21.4342 7.4949 21.4836 8.6689 21.4964 9.2569H3.50336Z" fill="#222B40"/>
										<path d="M8.80489 6.59C9.23958 6.59 9.56559 6.261 9.56559 5.82V2.771C9.56559 2.33 9.23958 2 8.80489 2C8.3702 2 8.04419 2.33 8.04419 2.771V5.82C8.04419 6.261 8.3702 6.59 8.80489 6.59Z" fill="#222B40"/>
										<path d="M16.195 6.59C16.6198 6.59 16.9557 6.261 16.9557 5.82V2.771C16.9557 2.33 16.6198 2 16.195 2C15.7603 2 15.4343 2.33 15.4343 2.771V5.82C15.4343 6.261 15.7603 6.59 16.195 6.59Z" fill="#222B40"/>
									</svg>

								</a>
								<div id="DzSettingDropdown" class="dz-dropdown-menu absolute z-[9] shadow-[0_0_3.125rem_0_rgba(82,63,105,0.15)] w-[18.5rem] pt-4 mt-0.5 top-full max-md-top-[45px] md:right-0 rounded-md bg-white dark:bg-[#182237] hidden">
									<div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 overflow-y-scroll overflow-x-hidden h-[23.125rem] p-4 relative">
										<ul class="timeline relative">
											<li class="relative mb-[0.9375rem]">
												<div class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 primary"></div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">10 minutes ago</span>
													<h6 class="text-[13px]">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
												</a>
											</li>
											<li class="relative mb-[0.9375rem]">
												<div class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 info">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">20 minutes ago</span>
													<h6 class="text-[13px]">New order placed <strong class="text-info">#XF-2356.</strong></h6>
													<p class="text-xs leading-[1.125rem]">Quisque a consequat ante Sit amet magna at volutapt...</p>
												</a>
											</li>
											<li class="relative mb-[0.9375rem]">
												<div class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 danger">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">30 minutes ago</span>
													<h6 class="text-[13px]">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
												</a>
											</li>
											<li class="relative mb-[0.9375rem]">
												<div class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 success">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">15 minutes ago</span>
													<h6 class="text-[13px]">StumbleUpon is acquired by eBay. </h6>
												</a>
											</li>
											<li class="relative mb-[0.9375rem]">
												<div class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 warning">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">20 minutes ago</span>
													<h6 class="text-[13px]">Mashable, a news website and blog, goes live.</h6>
												</a>
											</li>
											<li class="relative mb-[0.9375rem]">
												<div class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 dark">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">20 minutes ago</span>
													<h6 class="text-[13px]">Mashable, a news website and blog, goes live.</h6>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="nav-item pl-4 flex items-center relative">
								<div class="dropdown header-profile2">
									<a data-dz-dropdown="DzinfoDropdown" class="dz-dropdown nav-link relative p-2 max-sm:p-0 text-[#464a53] text-lg leading-[1] block duration-500 bg-transparent" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
										<div class="header-info2 flex items-center text-right">
											<div class="header-media">
												<img src="assets/images/user.jpg" alt="" class="w-[45px] h-[45px] max-sm:w-[40px] max-sm:h-[40px] rounded-md">
											</div>
										</div>
									</a>
									<div id="DzinfoDropdown" class="dz-dropdown-menu dropdown-menu dropdown-menu-end bg-white dark:bg-[#182237] absolute rounded-md w-[275px] right-0 top-full z-[9] shadow-[0_0_3.125rem_0_rgba(82,63,105,0.15)] py-2 hidden">
										<div class="card border-0 mb-0">
											<div class="card-header relative flex items-center justify-between bg-transparent py-2 sm:px-[1.25rem] px-4 border-b border-[#E6E6E6] dark:border-[#ffffff1a]">
												<div class="flex items-center">
													<img src="assets/images/user.jpg" class="avatar avatar-md mr-2.5 h-[2.813rem] w-[2.813rem] inline-block object-cover rounded-md" alt="">
													<div>
														<h6 class="text-sm">Hanuman Prajapati</h6>
														<span class="text-xs text-body-color">Web Designer</span>	
													</div>	
												</div>
											</div>
											<div class="card-body sm:py-2 border-b border-[#E6E6E6] dark:border-[#ffffff1a]">
												<a href="app-profile-1.html" class="dropdown-item py-[0.6rem] px-[1.25rem] block w-full ai-icon hover:bg-primary-light group">
													<svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 15.3462C8.11714 15.3462 4.81429 15.931 4.81429 18.2729C4.81429 20.6148 8.09619 21.2205 11.9848 21.2205C15.8524 21.2205 19.1543 20.6348 19.1543 18.2938C19.1543 15.9529 15.8733 15.3462 11.9848 15.3462Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 12.0059C14.5229 12.0059 16.58 9.94779 16.58 7.40969C16.58 4.8716 14.5229 2.81445 11.9848 2.81445C9.44667 2.81445 7.38857 4.8716 7.38857 7.40969C7.38 9.93922 9.42381 11.9973 11.9524 12.0059H11.9848Z" stroke="var(--primary)" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>

													<span class="ml-2 text-[13px] text-body-color group-hover:text-primary">Profile </span>
												</a>
												<a href="app-profile-1.html" class="dropdown-item py-[0.6rem] px-[1.25rem] block w-full ai-icon hover:bg-primary-light group">
													<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart inline-block"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>

													<span class="ml-2 text-[13px] text-body-color group-hover:text-primary">My Project</span>
													<span class="bg-badge-secondary py-[0.15rem] px-2 light rounded-full text-white ml-2 text-xs border border-[#acacac] dark:border-transparent">4</span>
												</a>
												<a href="javascript:void(0);" class="dropdown-item py-[0.6rem] px-[1.25rem] block w-full ai-icon hover:bg-primary-light group">
													<svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M17.9026 8.85114L13.4593 12.4642C12.6198 13.1302 11.4387 13.1302 10.5992 12.4642L6.11844 8.85114" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>

													<span class="ml-2 text-[13px] text-body-color group-hover:text-primary">Message </span>
												</a>
												<a href="email-inbox.html" class="dropdown-item py-[0.6rem] px-[1.25rem] block w-full ai-icon hover:bg-primary-light group">
													<svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M12 17.8476C17.6392 17.8476 20.2481 17.1242 20.5 14.2205C20.5 11.3188 18.6812 11.5054 18.6812 7.94511C18.6812 5.16414 16.0452 2 12 2C7.95477 2 5.31885 5.16414 5.31885 7.94511C5.31885 11.5054 3.5 11.3188 3.5 14.2205C3.75295 17.1352 6.36177 17.8476 12 17.8476Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M14.3888 20.8572C13.0247 22.372 10.8967 22.3899 9.51947 20.8572" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>

													<span class="ml-2 text-[13px] text-body-color group-hover:text-primary">Notification </span>
												</a>
											</div>
											<div class="card-footer px-0 py-2">
												<a href="javascript:void(0);" class="dropdown-item py-[0.6rem] px-[1.25rem] text-base block w-full ai-icon">
													<svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M20.8066 7.62355L20.1842 6.54346C19.6576 5.62954 18.4907 5.31426 17.5755 5.83866V5.83866C17.1399 6.09528 16.6201 6.16809 16.1307 6.04103C15.6413 5.91396 15.2226 5.59746 14.9668 5.16131C14.8023 4.88409 14.7139 4.56833 14.7105 4.24598V4.24598C14.7254 3.72916 14.5304 3.22834 14.17 2.85761C13.8096 2.48688 13.3145 2.2778 12.7975 2.27802H11.5435C11.0369 2.27801 10.5513 2.47985 10.194 2.83888C9.83666 3.19791 9.63714 3.68453 9.63958 4.19106V4.19106C9.62457 5.23686 8.77245 6.07675 7.72654 6.07664C7.40418 6.07329 7.08843 5.98488 6.8112 5.82035V5.82035C5.89603 5.29595 4.72908 5.61123 4.20251 6.52516L3.53432 7.62355C3.00838 8.53633 3.31937 9.70255 4.22997 10.2322V10.2322C4.82187 10.574 5.1865 11.2055 5.1865 11.889C5.1865 12.5725 4.82187 13.204 4.22997 13.5457V13.5457C3.32053 14.0719 3.0092 15.2353 3.53432 16.1453V16.1453L4.16589 17.2345C4.41262 17.6797 4.82657 18.0082 5.31616 18.1474C5.80575 18.2865 6.33061 18.2248 6.77459 17.976V17.976C7.21105 17.7213 7.73116 17.6515 8.21931 17.7821C8.70746 17.9128 9.12321 18.233 9.37413 18.6716C9.53867 18.9488 9.62708 19.2646 9.63043 19.5869V19.5869C9.63043 20.6435 10.4869 21.5 11.5435 21.5H12.7975C13.8505 21.5 14.7055 20.6491 14.7105 19.5961V19.5961C14.7081 19.088 14.9088 18.6 15.2681 18.2407C15.6274 17.8814 16.1154 17.6806 16.6236 17.6831C16.9451 17.6917 17.2596 17.7797 17.5389 17.9393V17.9393C18.4517 18.4653 19.6179 18.1543 20.1476 17.2437V17.2437L20.8066 16.1453C21.0617 15.7074 21.1317 15.1859 21.0012 14.6963C20.8706 14.2067 20.5502 13.7893 20.111 13.5366V13.5366C19.6717 13.2839 19.3514 12.8665 19.2208 12.3769C19.0902 11.8872 19.1602 11.3658 19.4153 10.9279C19.5812 10.6383 19.8213 10.3981 20.111 10.2322V10.2322C21.0161 9.70283 21.3264 8.54343 20.8066 7.63271V7.63271V7.62355Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														<circle cx="12.175" cy="11.889" r="2.63616" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>

													<span class="ml-2 text-[13px] text-body-color group-hover:text-primary">Settings </span>
												</a>
												<a href="page-login.html" class="dropdown-item py-[0.6rem] px-[1.25rem] text-base block w-full ai-icon">
													<svg class="profle-logout inline-block" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ff7979" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
													<span class="ml-2 text-danger text-[13px]">Logout </span>
												</a>
											</div>
										</div>
										
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<!-- Header end -->

	<!-- Sidebar start -->
	<div class="deznav">
		<div class="deznav-scroll">
			<ul class="metismenu" id="menu">
				<li class="menu-title">YOUR COMPANY</li>
				<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
					<div class="menu-icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.13478 20.7733V17.7156C9.13478 16.9351 9.77217 16.3023 10.5584 16.3023H13.4326C13.8102 16.3023 14.1723 16.4512 14.4393 16.7163C14.7063 16.9813 14.8563 17.3408 14.8563 17.7156V20.7733C14.8539 21.0978 14.9821 21.4099 15.2124 21.6402C15.4427 21.8705 15.756 22 16.0829 22H18.0438C18.9596 22.0024 19.8388 21.6428 20.4872 21.0008C21.1356 20.3588 21.5 19.487 21.5 18.5778V9.86686C21.5 9.13246 21.1721 8.43584 20.6046 7.96467L13.934 2.67587C12.7737 1.74856 11.1111 1.7785 9.98539 2.74698L3.46701 7.96467C2.87274 8.42195 2.51755 9.12064 2.5 9.86686V18.5689C2.5 20.4639 4.04738 22 5.95617 22H7.87229C8.55123 22 9.103 21.4562 9.10792 20.7822L9.13478 20.7733Z" fill="#90959F"/>
						</svg>
					</div>	
					<span class="nav-text">Dashboard</span>
					</a>
					<ul aria-expanded="false">
						
						<li><a href="index-2.html">Dashboard Light</a></li>
						<li><a href="index-3.html">Dashboard Dark</a></li>
						<li><a href="index-4.html">Dashboard 2</a></li>
						<li><a href="index-5.html">Dashboard 3</a></li>
						<li><a href="index-6.html">Dashboard 4</a></li>
						<li><a href="crm.html">CRM</a></li>
						<li><a href="analytics.html">Analytics</a></li>
						<li><a href="products.html">Products</a></li>
						<li><a href="sales.html">Sales</a></li>
						<li><a href="blog.html">Blog</a></li>
					</ul>
				</li>
				<li><a href="task.html" class="" aria-expanded="false">
					<div class="menu-icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_113_177)">
							<path d="M17 4H6C4.79111 4 4 4.7 4 6V18C4 19.3 4.79111 20 6 20H18C19.2 20 20 19.3 20 18V7.20711C20 7.0745 19.9473 6.94732 19.8536 6.85355L17 4ZM17 11H7V4H17V11Z" fill="#90959F"/>
							<path opacity="0.3" d="M14.5 4H12.5C12.2239 4 12 4.22386 12 4.5V8.5C12 8.77614 12.2239 9 12.5 9H14.5C14.7761 9 15 8.77614 15 8.5V4.5C15 4.22386 14.7761 4 14.5 4Z" fill="white"/>
							</g>
							<defs>
							<clipPath id="clip0_113_177">
							<rect width="24" height="24" fill="white"/>
							</clipPath>
							</defs>
					</svg>
					</div>	
						<span class="nav-text">Tasks</span>
					</a>
				</li>
				<li><a href="project.html" class="" aria-expanded="false">
					<div class="menu-icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_115_172)">
							<path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M12 4.25933C12.1489 4.25921 12.3 4.29247 12.4426 4.36281C12.6398 4.46014 12.7994 4.61977 12.8967 4.81698L14.9389 8.95491L19.5054 9.61846C20.0519 9.69788 20.4306 10.2053 20.3512 10.7519C20.3196 10.9695 20.2171 11.1706 20.0596 11.3242L16.7553 14.5451L17.5353 19.0931C17.6287 19.6374 17.2631 20.1544 16.7188 20.2478C16.502 20.2849 16.279 20.2496 16.0844 20.1473L12 18V4.25933Z" fill="#4E5566"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M12 4.25933V18L7.91559 20.1473C7.42675 20.4043 6.82212 20.2163 6.56512 19.7275C6.46278 19.5328 6.42746 19.3099 6.46464 19.0931L7.24469 14.5451L3.94036 11.3242C3.54487 10.9387 3.53678 10.3055 3.92228 9.91006C4.07579 9.75258 4.27693 9.65009 4.49457 9.61846L9.06104 8.95492L11.1032 4.81699C11.2773 4.46426 11.6316 4.25961 12 4.25933Z" fill="#90959F"/>
							</g>
							<defs>
							<clipPath id="clip0_115_172">
							<rect width="24" height="24" fill="white"/>
							</clipPath>
							</defs>
						</svg>
					</div>	
						<span class="nav-text">Projects</span>
					</a>
				</li>
				<li class="menu-title">OUR FEATURES</li>
				<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
					<div class="menu-icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.5">
							<path d="M9.34933 14.8577C5.38553 14.8577 2 15.47 2 17.9174C2 20.3666 5.364 21 9.34933 21C13.3131 21 16.6987 20.3877 16.6987 17.9404C16.6987 15.4911 13.3347 14.8577 9.34933 14.8577Z" fill="white"/>
							<path opacity="0.4" d="M9.34935 12.5248C12.049 12.5248 14.2124 10.4062 14.2124 7.76241C14.2124 5.11865 12.049 3 9.34935 3C6.65072 3 4.48633 5.11865 4.48633 7.76241C4.48633 10.4062 6.65072 12.5248 9.34935 12.5248Z" fill="white"/>
							<path opacity="0.4" d="M16.1734 7.84876C16.1734 9.19508 15.7605 10.4513 15.0364 11.4948C14.9611 11.6022 15.0276 11.7468 15.1587 11.7698C15.3407 11.7996 15.5276 11.8178 15.7184 11.8216C17.6167 11.8705 19.3202 10.6736 19.7908 8.87119C20.4885 6.19677 18.4415 3.79544 15.8339 3.79544C15.5511 3.79544 15.2801 3.82419 15.0159 3.87689C14.9797 3.88456 14.9405 3.9018 14.921 3.93247C14.8955 3.97176 14.9141 4.02254 14.9395 4.05608C15.7233 5.13217 16.1734 6.44208 16.1734 7.84876Z" fill="white"/>
							<path d="M21.7791 15.1693C21.4318 14.444 20.5932 13.9466 19.3173 13.7023C18.7155 13.5586 17.0854 13.3545 15.5697 13.3832C15.5472 13.3861 15.5345 13.4014 15.5325 13.411C15.5296 13.4263 15.5365 13.4493 15.5658 13.4656C16.2664 13.8048 18.9738 15.2805 18.6333 18.3928C18.6187 18.5289 18.7292 18.6439 18.8672 18.6247C19.5335 18.5318 21.2478 18.1705 21.7791 17.0475C22.0737 16.4534 22.0737 15.7634 21.7791 15.1693Z" fill="white"/>
							</g>
						</svg>

					</div>
					<span class="nav-text">Apps</span>
					</a>
					<ul aria-expanded="false">
						<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Users Manager</a>
							<ul aria-expanded="false">
								<li><a href="user.html">User</a></li>
								<li><a href="add-user.html">Add User</a></li>
								<li><a href="app-profile-1.html">Profile 1</a></li>
								<li><a href="app-profile-2.html">Profile 2 </a></li>
								<li><a href="edit-profile.html">Edit Profile</a></li>
								<li><a href="post-details.html">Post Details</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Email</a>
							<ul aria-expanded="false">
								<li><a href="email-compose.html">Compose</a></li>
								<li><a href="email-inbox.html">Inbox</a></li>
								<li><a href="email-read.html">Read</a></li>
							</ul>
						</li>
						<li><a href="app-calender.html">Calendar</a></li>
						<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Shop</a>
							<ul aria-expanded="false">
								<li><a href="ecom-product-grid.html">Product Grid</a></li>
								<li><a href="ecom-product-list.html">Product List</a></li>
								<li><a href="ecom-product-detail.html">Product Details</a></li>
								<li><a href="ecom-product-order.html">Order</a></li>
								<li><a href="ecom-checkout.html">Checkout</a></li>
								<li><a href="ecom-invoice.html">Invoice</a></li>
								<li><a href="ecom-customers.html">Customers</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
					<div class="menu-icon">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24"></rect>
								<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
								<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"></path>
							</g>
						</svg>
					</div>	
					<span class="nav-text">CMS</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="content.html">Content</a></li>
						<li><a href="content-add.html">Add Content</a></li>
						<li><a href="menu.html">Menus</a></li>	
						<li><a href="email-template.html">Email Template</a></li>		
						<li><a href="add-email.html">Add Email</a></li>		
						<li><a href="cms-blog.html">Blog</a></li>	
						<li><a href="add-blog.html">Add Blog</a></li>	
						<li><a href="blog-category.html">Blog Category</a></li>	
					</ul>
				</li>
				<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
					<div class="menu-icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g opacity="0.5">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M15.2428 4.73756C15.2428 6.95855 17.0459 8.75902 19.2702 8.75902C19.5151 8.75782 19.7594 8.73431 20 8.68878V16.6615C20 20.0156 18.0215 22 14.6624 22H7.34636C3.97851 22 2 20.0156 2 16.6615V9.3561C2 6.00195 3.97851 4 7.34636 4H15.3131C15.2659 4.243 15.2423 4.49001 15.2428 4.73756ZM13.15 14.8966L16.0078 11.2088V11.1912C16.2525 10.8625 16.1901 10.3989 15.8671 10.1463C15.7108 10.0257 15.5122 9.97345 15.3167 10.0016C15.1211 10.0297 14.9453 10.1358 14.8295 10.2956L12.4201 13.3951L9.6766 11.2351C9.51997 11.1131 9.32071 11.0592 9.12381 11.0856C8.92691 11.1121 8.74898 11.2166 8.63019 11.3756L5.67562 15.1863C5.57177 15.3158 5.51586 15.4771 5.51734 15.6429C5.5002 15.9781 5.71187 16.2826 6.03238 16.3838C6.35288 16.485 6.70138 16.3573 6.88031 16.0732L9.35125 12.8771L12.0948 15.0283C12.2508 15.1541 12.4514 15.2111 12.6504 15.1863C12.8494 15.1615 13.0297 15.0569 13.15 14.8966Z" fill="white"/>
								<circle opacity="0.4" cx="19.5" cy="4.5" r="2.5" fill="white"/>
								</g>
							</svg>
					</div>	
						<span class="nav-text">Charts</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="chart-flot.html">Flot</a></li>
						<li><a href="chart-morris.html">Morris</a></li>
						<li><a href="chart-chartjs.html">Chartjs</a></li>
						<li><a href="chart-chartist.html">Chartist</a></li>
						<li><a href="chart-sparkline.html">Sparkline</a></li>
						<li><a href="chart-peity.html">Peity</a></li>
					</ul>
				</li>
				<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
					<div class="menu-icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.5">
							<path opacity="0.4" d="M11.776 21.8374C9.49292 20.4273 7.37062 18.7645 5.44789 16.8796C4.0905 15.5338 3.05386 13.8905 2.41716 12.0753C1.27953 8.53523 2.60381 4.48948 6.30111 3.2884C8.25262 2.67553 10.375 3.05175 12.007 4.29983C13.6396 3.05315 15.7614 2.67705 17.713 3.2884C21.4103 4.48948 22.7435 8.53523 21.6058 12.0753C20.9743 13.8888 19.9438 15.5319 18.5929 16.8796C16.6684 18.7625 14.5463 20.4251 12.2648 21.8374L12.0159 22L11.776 21.8374Z" fill="white"/>
							<path d="M12.0109 22L11.776 21.8374C9.49013 20.4274 7.36487 18.7647 5.43902 16.8796C4.0752 15.5356 3.03238 13.8922 2.39052 12.0753C1.26177 8.53523 2.58605 4.48948 6.28335 3.2884C8.23486 2.67553 10.3853 3.05204 12.0109 4.31057V22Z" fill="white"/>
							<path d="M18.2304 9.99922C18.0296 9.98629 17.8425 9.8859 17.7131 9.72157C17.5836 9.55723 17.5232 9.3434 17.5459 9.13016C17.5677 8.4278 17.168 7.78851 16.5517 7.53977C16.1609 7.43309 15.9243 7.00987 16.022 6.59249C16.1148 6.18182 16.4993 5.92647 16.8858 6.0189C16.9346 6.027 16.9816 6.04468 17.0244 6.07105C18.2601 6.54658 19.0601 7.82641 18.9965 9.22576C18.9944 9.43785 18.9117 9.63998 18.7673 9.78581C18.6229 9.93164 18.4291 10.0087 18.2304 9.99922Z" fill="white"/>
							</g>
						</svg>
					</div>
						<span class="nav-text">Ui Elements</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="ui-accordion.html">Accordion</a></li>
						<li><a href="ui-alert.html">Alert</a></li>
						<li><a href="ui-badge.html">Badge</a></li>
						<li><a href="ui-button.html">Button</a></li>
						<li><a href="ui-modal.html">Modal</a></li>
						<li><a href="ui-offcanvas.html">Offcanvas</a></li>
						<li class="extra-menu-li">		
							<ul id="collapseExample" class="pt-0 extra-menu-links extra-menu-area">
							  <li><a href="ui-button-group.html">Button Group</a></li>
								<li><a href="ui-list-group.html">List Group</a></li>
								<li><a href="ui-card.html">Cards</a></li>
								<li><a href="ui-carousel.html">Carousel</a></li>
								<li><a href="ui-dropdown.html">Dropdown</a></li>
								<li><a href="ui-popover.html">Popover</a></li>
								<li><a href="ui-progressbar.html">Progressbar</a></li>
								<li><a href="ui-tab.html">Tab</a></li>
								<li><a href="ui-typography.html">Typography</a></li>
								<li><a href="ui-pagination.html">Pagination</a></li>
								<li><a href="ui-grid.html">Grid</a></li>
							</ul>
							<a class="btn show-more-btn border-0" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								<span class="show-more">Show More + </span>
								<span class="show-less">Show Less - </span>
							</a>
						</li>  
						
						

					</ul>
				</li>
				<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
					<div class="menu-icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g opacity="0.5">
								<path opacity="0.4" d="M10.0833 15.9579H3.50777C2.67555 15.9579 2 16.6217 2 17.4393C2 18.2558 2.67555 18.9206 3.50777 18.9206H10.0833C10.9155 18.9206 11.5911 18.2558 11.5911 17.4393C11.5911 16.6217 10.9155 15.9579 10.0833 15.9579Z" fill="white"/>
								<path opacity="0.4" d="M22 6.37855C22 5.56202 21.3244 4.89832 20.4933 4.89832H13.9178C13.0856 4.89832 12.41 5.56202 12.41 6.37855C12.41 7.19617 13.0856 7.85988 13.9178 7.85988H20.4933C21.3244 7.85988 22 7.19617 22 6.37855Z" fill="white"/>
								<path d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z" fill="white"/>
								<path d="M22 17.3992C22 19.2648 20.4611 20.7778 18.5611 20.7778C16.6622 20.7778 15.1223 19.2648 15.1223 17.3992C15.1223 15.5325 16.6622 14.0196 18.5611 14.0196C20.4611 14.0196 22 15.5325 22 17.3992Z" fill="white"/>
								</g>
						</svg>
					</div>	
						<span class="nav-text">Plugins</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="uc-select2.html">Select 2</a></li>
						<li><a href="uc-nestable.html">Nestable</a></li>
						<li><a href="uc-noui-slider.html">Noui Slider</a></li>
						<li><a href="uc-sweetalert.html">Sweet Alert</a></li>
						<li><a href="uc-toastr.html">Toastr</a></li>
						<li><a href="map-jqvmap.html">Jqv Map</a></li>
						<li><a href="uc-lightgallery.html">Light Gallery</a></li>
					</ul>
				</li>
				<li><a href="widget-basic.html" class="" aria-expanded="false">
					<div class="menu-icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.5">
							<path opacity="0.4" d="M16.0755 2H19.4615C20.8637 2 22 3.14585 22 4.55996V7.97452C22 9.38864 20.8637 10.5345 19.4615 10.5345H16.0755C14.6732 10.5345 13.537 9.38864 13.537 7.97452V4.55996C13.537 3.14585 14.6732 2 16.0755 2Z" fill="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="white"/>
							</g>
						</svg>
					</div>	
						<span class="nav-text">Widget</span>
					</a>
				</li>
				<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
					<div class="menu-icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.5">
							<path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z" fill="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M8.08002 6.64999V6.65999C7.64902 6.65999 7.30002 7.00999 7.30002 7.43999C7.30002 7.86999 7.64902 8.21999 8.08002 8.21999H11.069C11.5 8.21999 11.85 7.86999 11.85 7.42899C11.85 6.99999 11.5 6.64999 11.069 6.64999H8.08002ZM15.92 12.74H8.08002C7.64902 12.74 7.30002 12.39 7.30002 11.96C7.30002 11.53 7.64902 11.179 8.08002 11.179H15.92C16.35 11.179 16.7 11.53 16.7 11.96C16.7 12.39 16.35 12.74 15.92 12.74ZM15.92 17.31H8.08002C7.78002 17.35 7.49002 17.2 7.33002 16.95C7.17002 16.69 7.17002 16.36 7.33002 16.11C7.49002 15.85 7.78002 15.71 8.08002 15.74H15.92C16.319 15.78 16.62 16.12 16.62 16.53C16.62 16.929 16.319 17.27 15.92 17.31Z" fill="white"/>
							</g>
						</svg>
					</div>	

						<span class="nav-text">Forms</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="form-element.html">Form Elements</a></li>
						<li><a href="form-wizard.html">Wizard</a></li>
						<li><a href="form-ckeditor.html">CkEditor</a></li>
						<li><a href="form-pickers.html">Pickers</a></li>
						<li><a href="form-validation.html">Form Validate</a></li>
					</ul>
				</li>
				<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
					<div class="menu-icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.5">
							<path opacity="0.4" d="M6.70555 12.8905C6.18944 12.8905 5.77163 13.3145 5.77163 13.8383L5.51416 18.4171C5.51416 19.0846 6.04783 19.625 6.70555 19.625C7.36328 19.625 7.89577 19.0846 7.89577 18.4171L7.63947 13.8383C7.63947 13.3145 7.22167 12.8905 6.70555 12.8905Z" fill="white"/>
							<path d="M7.98037 3.67345C7.98037 3.67345 7.71236 3.39789 7.54618 3.27793C7.30509 3.09264 7.00783 3 6.71173 3C6.37936 3 6.07039 3.10452 5.81877 3.30169C5.77313 3.34801 5.57886 3.5226 5.41852 3.68532C4.41204 4.6367 2.76539 7.12026 2.26215 8.42083C2.18257 8.618 2.01053 9.11685 2 9.38409C2 9.63827 2.05618 9.88294 2.17087 10.1145C2.3312 10.4044 2.58282 10.6372 2.88009 10.7642C3.08606 10.8462 3.70282 10.9733 3.71453 10.9733C4.38981 11.1016 5.48757 11.1704 6.70003 11.1704C7.85514 11.1704 8.90727 11.1016 9.59308 10.997C9.60478 10.9852 10.3702 10.8581 10.6335 10.7179C11.1133 10.4626 11.4118 9.96371 11.4118 9.43041V9.38409C11.4001 9.03608 11.1016 8.30444 11.0911 8.30444C10.5879 7.07394 9.02079 4.64858 7.98037 3.67345Z" fill="white"/>
							<path opacity="0.4" d="M17.2947 11.1096C17.8108 11.1096 18.2286 10.6856 18.2286 10.1618L18.4849 5.58296C18.4849 4.91543 17.9524 4.375 17.2947 4.375C16.637 4.375 16.1033 4.91543 16.1033 5.58296L16.3608 10.1618C16.3608 10.6856 16.7786 11.1096 17.2947 11.1096Z" fill="white"/>
							<path d="M21.8292 13.8853C21.6688 13.5955 21.4172 13.3639 21.1199 13.2356C20.914 13.1536 20.296 13.0265 20.2855 13.0265C19.6102 12.8983 18.5124 12.8294 17.3 12.8294C16.1449 12.8294 15.0928 12.8983 14.4069 13.0028C14.3952 13.0147 13.6298 13.1429 13.3665 13.2819C12.8855 13.5373 12.5883 14.0361 12.5883 14.5706V14.617C12.6 14.965 12.8972 15.6954 12.9089 15.6954C13.4122 16.926 14.9781 19.3526 16.0197 20.3265C16.0197 20.3265 16.2877 20.6021 16.4538 20.7209C16.6938 20.9074 16.991 21 17.2895 21C17.6207 21 17.9285 20.8955 18.1812 20.6983C18.2269 20.652 18.4212 20.4774 18.5815 20.3158C19.5868 19.3633 21.2346 16.8796 21.7367 15.5802C21.8175 15.3831 21.9895 14.883 22 14.617C22 14.3616 21.9438 14.1169 21.8292 13.8853Z" fill="white"/>
							</g>
						</svg>
					</div>
					<span class="nav-text">Table</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="table.html">Table</a></li>
						<li><a href="table-datatable-basic.html">Datatable</a></li>
					</ul>
				</li>
				<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
					<div class="menu-icon">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.5">
							<path opacity="0.4" d="M2.00018 11.0785C2.05018 13.4165 2.19018 17.4155 2.21018 17.8565C2.28118 18.7995 2.64218 19.7525 3.20418 20.4245C3.98618 21.3675 4.94918 21.7885 6.29218 21.7885C8.14818 21.7985 10.1942 21.7985 12.1812 21.7985C14.1762 21.7985 16.1122 21.7985 17.7472 21.7885C19.0712 21.7885 20.0642 21.3565 20.8362 20.4245C21.3982 19.7525 21.7592 18.7895 21.8102 17.8565C21.8302 17.4855 21.9302 13.1445 21.9902 11.0785H2.00018Z" fill="white"/>
							<path d="M11.2454 15.3842V16.6782C11.2454 17.0922 11.5814 17.4282 11.9954 17.4282C12.4094 17.4282 12.7454 17.0922 12.7454 16.6782V15.3842C12.7454 14.9702 12.4094 14.6342 11.9954 14.6342C11.5814 14.6342 11.2454 14.9702 11.2454 15.3842Z" fill="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M10.2113 14.5564C10.1113 14.9194 9.7623 15.1514 9.38431 15.1014C6.8333 14.7454 4.39531 13.8404 2.33731 12.4814C2.12631 12.3434 2.00031 12.1074 2.00031 11.8554V8.3894C2.00031 6.2894 3.71231 4.5814 5.81731 4.5814H7.78431C7.97231 3.1294 9.20231 2.0004 10.7043 2.0004H13.2863C14.7873 2.0004 16.0183 3.1294 16.2063 4.5814H18.1833C20.2823 4.5814 21.9903 6.2894 21.9903 8.3894V11.8554C21.9903 12.1074 21.8633 12.3424 21.6543 12.4814C19.5923 13.8464 17.1443 14.7554 14.5763 15.1104C14.5413 15.1154 14.5073 15.1174 14.4733 15.1174C14.1343 15.1174 13.8313 14.8884 13.7463 14.5524C13.5443 13.7564 12.8213 13.1994 11.9903 13.1994C11.1483 13.1994 10.4333 13.7444 10.2113 14.5564ZM13.2863 3.5004H10.7043C10.0313 3.5004 9.46931 3.9604 9.30131 4.5814H14.6883C14.5203 3.9604 13.9583 3.5004 13.2863 3.5004Z" fill="white"/>
							</g>
						</svg>
					</div>
					<span class="nav-text">Pages</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="page-login.html">Login</a></li>
						<li><a href="page-register.html">Register</a></li>
						<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Error</a>
							<ul aria-expanded="false">
								<li><a href="page-error-400.html">Error 400</a></li>
								<li><a href="page-error-403.html">Error 403</a></li>
								<li><a href="page-error-404.html">Error 404</a></li>
								<li><a href="page-error-500.html">Error 500</a></li>
								<li><a href="page-error-503.html">Error 503</a></li>
							</ul>
						</li>
						<li><a href="page-lock-screen.html">Lock Screen</a></li>
						<li><a href="empty-page.html">Empty Page</a></li>
					</ul>
				</li>
			</ul>
			<div class="copyright mb-8 mt-[1.2rem] px-4">
				<p class="mb-[6px] text-[0.775rem]">Yash Admin Sales Management System © <span class="current-year">2024</span> All Rights Reserved</p>
				<p class="mb-[6px] text-[0.775rem]">Made with <span class="heart inline-block w-[60px] h-[60px] cursor-pointer"></span> by DexignZone</p>
			</div>
		</div>
	</div>		
	<!-- Sidebar end -->
		
		<!-- Content body start -->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<!-- row -->
				<div class="row">
					<div class="xl:w-1/4 lg:w-1/3 w-full">
						<div class="clearfix">
							<div class="card text-center flex flex-col max-sm:mb-[30px]">
								<div class="card-body">
									<div class="p-12">
										<div class="author-profile text-center">
											<div class="relative mx-auto mb-[13px] inline-block">
												<img src="<?php echo base_url('assets/images/male.png')?>" alt="" class="w-[130px] rounded-full">
												<div class="upload-link dark:border-[#ffffff1a]" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
													<input type="file" class="update-flie">
													<i class="fa fa-camera"></i>
												</div>
											</div>
											<div class="author-info">
												<h6 class="text-[15px] font-medium">Nella Vita</h6>
												<span class="block text-sm text-body-color">Developer</span>
											</div>
										</div>
									</div>
									<div class="info-list">
										<ul>
											<li class="flex items-center justify-between border-t border-b-color text-[15px] py-[18px] px-[30px] text-dark dark:text-white"><a href="app-profile-1.html">Models</a><span>36</span></li>
											<li class="flex items-center justify-between border-t border-b-color text-[15px] py-[18px] px-[30px] text-dark dark:text-white"><a href="uc-lightgallery.html">Gallery</a><span>3</span></li>
											<li class="flex items-center justify-between border-t border-b-color text-[15px] py-[18px] px-[30px] text-dark dark:text-white"><a href="app-profile-1.html">Lessons</a><span>1</span></li>
										</ul>
									</div>
								</div>
								<div class="card-footer p-[30px] block border-t border-b-color">
									<div class="relative flex flex-wrap items-stretch w-full mb-4">
										<div class="h-[45px] border border-b-color overflow-hidden leading-[34px] relative flex-1 w-[1%] block py-1.5 px-3 text-[0.9rem] text-body-color rounded text-center dark:text-white dark:bg-[#182237]">Portfolio</div>
									</div>
									<div class="relative flex flex-wrap items-stretch w-full mb-4">
										<a href="https://www.dexignzone.com/" target="_blank" class="h-[45px] border border-b-color overflow-hidden leading-[34px] relative flex-1 w-[1%] block py-1.5 px-3 text-[13px] text-primary rounded text-center dark:text-white dark:bg-[#182237]">https://www.dexignzone.com/</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="xl:w-3/4 lg:w-2/3">
						<div class="card flex flex-col max-sm:mb-[30px] profile-card">
							<div class="card-header flex justify-between items-center flex-wrap sm:p-[30px] p-5 relative z-[2] border-b border-b-color">
								<h6 class="text-[15px] font-medium text-body-color title relative">Account setup</h6>
							</div>
							<form class="profile-form">
								<div class="sm:p-10 sm:pb-2.5 p-[25px] pb-0">
									<div class="row">
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2">First Name</label>
											<input type="text" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full" value="John">
										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2">Last name</label>
											<input type="text" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full">
										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2">Specialty</label>
											<input type="text" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full" value="Developer">
										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2">Skills</label>
											<input type="text" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full" value="HTML,  JavaScript,  PHP">
										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2">Gender</label>
											<select class="nice-select style-1 py-3 px-5 bg-transparent text-[13px] font-normal outline-none relative  duration-500 border border-b-color text-[#a5a5a5] h-[2.813rem] leading-[1.213rem]" id="validationCustom05">
												<option  data-display="Please select">Please select</option>
												<option value="html">Male</option>
												<option value="css">Female</option>
												<option value="javascript">Other</option>
											</select>
										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2">Birth</label>
											<div class="relative">
												<input name="flatpickr" class="flatpickr relative bg-transparent text-[13px] h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  text-body-color outline-none w-full" placeholder="02/08/2024">
												<i class="fa-regular fa-calendar absolute right-[15px] bottom-[15px] text-body-color"></i>
											</div>
										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2">Phone</label>
											<input type="number" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full" value="12345">
										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2">Email address</label>
											<input type="text" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full" value="demo@gmail.com">
										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2">Country</label>
											<select class="nice-select style-1 py-3 px-5 bg-transparent text-[13px] font-normal outline-none relative  duration-500 border border-b-color text-[#a5a5a5] h-[2.813rem] leading-[1.213rem]" id="validationCustom01">
												<option  data-display="Please select">Please select</option>
												<option value="russia">Russia</option>
												<option value="canada">Canada</option>
												<option value="china">China</option>
												<option value="india">India</option>
											</select>
										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2">City</label>
											<select class="nice-select style-1 py-3 px-5 bg-transparent text-[13px] font-normal outline-none relative  duration-500 border border-b-color text-[#a5a5a5] h-[2.813rem] leading-[1.213rem]" id="validationCustom02">
												<option  data-display="Please select">Please select</option>
												<option>Krasnodar</option>
												<option>Tyumen</option>
												<option>Chelyabinsk</option>
												<option>Moscow</option>
											</select>
										</div>
									</div>
								</div>
								<div class="sm:py-5 sm:px-10 p-[25px] flex items-center justify-between border-t border-b-color">
									<button class="btn btn-primary sm:py-[0.719rem] py-2.5 sm:px-[1.563rem] px-4 sm:text-[15px] text-[13px] font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary">UPDATE</button>
									<a href="page-register.html" class="text-[15px] text-primary dark:text-white">Forgot your password?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
            </div>
        </div>
		
         <!-- Content body end -->
		
        <!-- Footer start -->
        <div class="footer dark:bg-[#182237] mt-4 border-t border-b-color dark:border-[#ffffff1a]">
            <div class="p-[0.9375rem]">
               <p class="text-center text-[#918f8f] dark:text-[#ffffffb3] text-[0.775rem] leading-[1.8]">Copyright © Developed by <a href="https://dexignzone.com/" target="_blank" class="text-primary">DexignZone</a> 2024</p>
            </div>
        </div>
        <!-- Footer end -->


	</div>

<?php include('incs/admin_footer.php'); ?> -->
