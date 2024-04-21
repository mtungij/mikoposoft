<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from yashadmin.dexignzone.com/tailwind/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2024 19:20:36 GMT -->

<head>
	<!--Title-->
	<title>YashAdmin -Sales Management System Tailwind CSS Admin Dashboard Template | DexignZone</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">

	<meta name="keywords"
		content="YashAdmin, sales Admin Dashboard, Tailwind CSS Template, Web Application, sales Management, Responsive Design, User Experience, Customizable, Modern UI, Dashboard Template, Admin Panel, Tailwind CSS, HTML5, CSS3, JavaScript, Analytics, Products, Admin Template, UI Kit, CRM, Analytics, Responsive Dashboard, responsive admin dashboard, sales dashboard, ui kit, web app, Admin Dashboard, Template, Admin, CMS pages, Authentication, FrontEnd Integration, Web Application UI, Tailwind CSS Framework, User Interface Kit, Financial Dashboard, Customizable Template, Product Management, HTML5/CSS3, CRM Dashboard, Analytics Dashboard, Admin Dashboard UI, Mobile-Friendly Design, UI Components, Dashboard Widgets, Dashboard Framework, Data Visualization, User Experience (UX), Dashboard Widgets, Real-time Analytics, Cross-Browser Compatibility, Interactive Charts, Product Processing, Performance Optimization, Multi-Purpose Template, Efficient Admin Tools, Task Management, Modern Web Technologies, Product Tracking, Responsive Tables, Dashboard Widgets, Invoice Management, Access Control, Modular Design, Product History, Trend Analysis, User-Friendly Interface">

	<meta name="description"
		content="The Yash Admin Sales Management System is a robust and intuitive platform designed to streamline sales operations and enhance business productivity. This comprehensive admin dashboard offers a feature-rich environment tailored specifically for managing sales processes effectively.With its modern and responsive design, Yash Admin provides a seamless user experience across various devices and screen sizes. The user interface is highly customizable, allowing administrators to tailor the dashboard to their specific needs and branding requirements.">

	<meta property="og:title"
		content="YashAdmin -Sales Management System Tailwind CSS Admin Dashboard Template | DexignZone">
	<meta property="og:description"
		content="The Yash Admin Sales Management System is a robust and intuitive platform designed to streamline sales operations and enhance business productivity. This comprehensive admin dashboard offers a feature-rich environment tailored specifically for managing sales processes effectively.With its modern and responsive design, Yash Admin provides a seamless user experience across various devices and screen sizes. The user interface is highly customizable, allowing administrators to tailor the dashboard to their specific needs and branding requirements.">
	<meta property="og:image" content="../social-image.png">

	<meta name="format-detection" content="telephone=no">

	<meta name="twitter:title"
		content="YashAdmin -Sales Management System Tailwind CSS Admin Dashboard Template | DexignZone">
	<meta name="twitter:description"
		content="The Yash Admin Sales Management System is a robust and intuitive platform designed to streamline sales operations and enhance business productivity. This comprehensive admin dashboard offers a feature-rich environment tailored specifically for managing sales processes effectively.With its modern and responsive design, Yash Admin provides a seamless user experience across various devices and screen sizes. The user interface is highly customizable, allowing administrators to tailor the dashboard to their specific needs and branding requirements.">
	<meta name="twitter:image" content="../social-image.png">
	<meta name="twitter:card" content="summary_large_image">

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/favicon.png'); ?>">

	<h!-<!-- ICONS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/icons/fontawesome/css/all.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/icons/line-awesome/css/line-awesome.min.css'); ?>">



		<!-- flowbite -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/flowbite.css'); ?>">

		<!-- NICE SELECT -->
		<!-- <link rel="stylesheet" href="<?php echo base_url('assets/vendor/niceselect/css/nice-select.css'); ?>"> -->

		<!-- STYLESHEETS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		<link href="<?php echo base_url('assets/vendor/powerful-calendar/style.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/vendor/powerful-calendar/theme.css'); ?>" rel="stylesheet">

		<link href="<?php echo base_url('assets/vendor/datatables/css/jquery.dataTables.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/vendor/swiper/css/swiper-bundle.min.css'); ?>" rel="stylesheet">

		<!-- toast -->
		<link rel="stylesheet" href="<?php echo base_url('assets/vendor/toastr/css/toastr.min.css'); ?>">


		<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

		<!-- STYLE CSS -->
		<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
		<link href="https://cdn.tailwindcss.com" rel="stylesheet">

</head>

<body class="selection:text-white selection:bg-primary">

	<!-- Preloader start  -->
	<div id="preloader"
		class="bg-white dark:bg-[#182237] p-0 m-0 h-full fixed z-[99999] w-full flex items-center justify-center">
		<div>
			<img src="assets/images/pre.gif" alt="">
		</div>
	</div>
	<!-- Preloader end -->
	<!-- Main wrapper start -->
	<div id="main-wrapper" class="relative">
		<!-- Nav header start -->
		<div class="nav-header">
			<!-- logo start -->
			<a href="#" class="brand-logo">
				<svg class="logo-abbr" width="32" height="30" viewBox="0 0 32 30" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path
						d="M31.3287 2.96046L26.3411 0.0805375C26.1549 -0.0268458 25.9256 -0.0268458 25.7394 0.0805375C19.754 3.53731 12.3785 3.53785 6.39259 0.0816161L6.39043 0.0805375C6.20426 -0.0268458 5.97493 -0.0268458 5.78876 0.0805375L0.801104 2.95992C0.614937 3.0673 0.5 3.26588 0.5 3.48119V9.24049C0.5 9.4558 0.614937 9.65438 0.801104 9.76176C6.78759 13.2169 10.4753 19.6038 10.4753 26.5162V26.5184C10.4753 26.7332 10.5903 26.9323 10.7764 27.0397L15.7641 29.9196C15.8574 29.9736 15.961 30 16.0652 30C16.1693 30 16.2729 29.973 16.3663 29.9196L21.3539 27.0397C21.5401 26.9323 21.655 26.7337 21.655 26.5184C21.6545 19.6059 25.3422 13.2185 31.3287 9.7623L31.3298 9.76176C31.516 9.65438 31.6309 9.4558 31.6309 9.24049V3.48173C31.6293 3.26642 31.5149 3.06784 31.3287 2.96046ZM30.4259 8.89352L15.7635 17.359C15.5774 17.4664 15.4624 17.665 15.4624 17.8803V22.4168C14.9876 22.651 14.6692 23.1534 14.7043 23.7259C14.7458 24.3993 15.2854 24.9471 15.9589 24.9978C16.7591 25.0582 17.4272 24.4263 17.4272 23.639C17.4272 23.1026 17.1169 22.6386 16.6663 22.4163C16.6663 19.824 18.0493 17.4286 20.2941 16.1324L20.4496 16.0429L20.4501 26.1714L16.0641 28.7038L11.6781 26.1714V9.24103C11.6781 9.02627 11.5632 8.82715 11.377 8.71976L7.44754 6.45123C7.4497 6.42155 7.45078 6.39187 7.45078 6.36165C7.45078 5.59162 6.81187 4.97052 6.03537 5.0002C5.32901 5.02718 4.75378 5.60241 4.7268 6.30877C4.69712 7.08527 5.31822 7.72471 6.08825 7.72471C6.36885 7.72471 6.62948 7.63999 6.84587 7.49484C9.09066 8.79099 10.4737 11.1863 10.4737 13.7786V13.9573L1.70172 8.89406V3.82978L6.08771 1.29737L20.7501 9.76284C20.9363 9.87022 21.1656 9.87022 21.3518 9.76284L25.2807 7.4943C25.4993 7.64108 25.7631 7.72579 26.0464 7.72417C26.7895 7.71986 27.3998 7.10686 27.4009 6.36381C27.4019 5.60997 26.7916 4.99912 26.0383 4.99912C25.2856 4.99912 24.6758 5.60943 24.6758 6.36165C24.6758 6.39187 24.6769 6.42155 24.6791 6.45123C22.4337 7.74738 19.6676 7.74738 17.4223 6.45123L17.268 6.36219L26.0383 1.29737L30.4243 3.82978V8.89352H30.4259Z"
						fill="white" />
				</svg>
				<svg class="brand-title" width="111" height="24" viewBox="0 0 111 24" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<rect class="yesh" width="49" height="22" transform="translate(0 1)" fill="white" />
					<path class="admin1"
						d="M14.296 7.172L10.894 13.752V17H8.5V13.752L5.098 7.172H7.814L9.718 11.288L11.608 7.172H14.296ZM21.3786 15.264H17.7106L17.1226 17H14.6166L18.1726 7.172H20.9446L24.5006 17H21.9666L21.3786 15.264ZM20.7626 13.416L19.5446 9.818L18.3406 13.416H20.7626ZM29.1388 17.098C28.4202 17.098 27.7762 16.9813 27.2068 16.748C26.6375 16.5147 26.1802 16.1693 25.8348 15.712C25.4988 15.2547 25.3215 14.704 25.3028 14.06H27.8508C27.8882 14.424 28.0142 14.704 28.2288 14.9C28.4435 15.0867 28.7235 15.18 29.0688 15.18C29.4235 15.18 29.7035 15.1007 29.9088 14.942C30.1142 14.774 30.2168 14.5453 30.2168 14.256C30.2168 14.0133 30.1328 13.8127 29.9648 13.654C29.8062 13.4953 29.6055 13.3647 29.3628 13.262C29.1295 13.1593 28.7935 13.0427 28.3548 12.912C27.7202 12.716 27.2022 12.52 26.8008 12.324C26.3995 12.128 26.0542 11.8387 25.7648 11.456C25.4755 11.0733 25.3308 10.574 25.3308 9.958C25.3308 9.04333 25.6622 8.32933 26.3248 7.816C26.9875 7.29333 27.8508 7.032 28.9148 7.032C29.9975 7.032 30.8702 7.29333 31.5328 7.816C32.1955 8.32933 32.5502 9.048 32.5968 9.972H30.0068C29.9882 9.65467 29.8715 9.40733 29.6568 9.23C29.4422 9.04333 29.1668 8.95 28.8308 8.95C28.5415 8.95 28.3082 9.02933 28.1308 9.188C27.9535 9.33733 27.8648 9.55667 27.8648 9.846C27.8648 10.1633 28.0142 10.4107 28.3128 10.588C28.6115 10.7653 29.0782 10.9567 29.7128 11.162C30.3475 11.3767 30.8608 11.582 31.2528 11.778C31.6542 11.974 31.9995 12.2587 32.2888 12.632C32.5782 13.0053 32.7228 13.486 32.7228 14.074C32.7228 14.634 32.5782 15.1427 32.2888 15.6C32.0088 16.0573 31.5982 16.4213 31.0568 16.692C30.5155 16.9627 29.8762 17.098 29.1388 17.098ZM42.7081 7.172V17H40.3141V12.954H36.5901V17H34.1961V7.172H36.5901V11.022H40.3141V7.172H42.7081Z"
						fill="#222B40" />
					<path class="admin2"
						d="M63.484 16.016H59.292L58.62 18H55.756L59.82 6.768H62.988L67.052 18H64.156L63.484 16.016ZM62.78 13.904L61.388 9.792L60.012 13.904H62.78ZM72.4969 6.768C73.6809 6.768 74.7155 7.00267 75.6009 7.472C76.4862 7.94133 77.1689 8.60267 77.6489 9.456C78.1395 10.2987 78.3849 11.2747 78.3849 12.384C78.3849 13.4827 78.1395 14.4587 77.6489 15.312C77.1689 16.1653 76.4809 16.8267 75.5849 17.296C74.6995 17.7653 73.6702 18 72.4969 18H68.2889V6.768H72.4969ZM72.3209 15.632C73.3555 15.632 74.1609 15.3493 74.7369 14.784C75.3129 14.2187 75.6009 13.4187 75.6009 12.384C75.6009 11.3493 75.3129 10.544 74.7369 9.968C74.1609 9.392 73.3555 9.104 72.3209 9.104H71.0249V15.632H72.3209ZM92.6339 6.768V18H89.8979V11.264L87.3859 18H85.1779L82.6499 11.248V18H79.9139V6.768H83.1459L86.2979 14.544L89.4179 6.768H92.6339ZM97.3374 6.768V18H94.6014V6.768H97.3374ZM109.368 18H106.632L102.056 11.072V18H99.3201V6.768H102.056L106.632 13.728V6.768H109.368V18Z"
						fill="white" />
				</svg>
			</a>
			<!-- logo ended -->

			<div class="nav-control">
				<div class="hamburger">
					<span class="line">
						<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M10.7468 5.58925C11.0722 5.26381 11.0722 4.73617 10.7468 4.41073C10.4213 4.0853 9.89369 4.0853 9.56826 4.41073L4.56826 9.41073C4.25277 9.72622 4.24174 10.2342 4.54322 10.5631L9.12655 15.5631C9.43754 15.9024 9.96468 15.9253 10.3039 15.6143C10.6432 15.3033 10.6661 14.7762 10.3551 14.4369L6.31096 10.0251L10.7468 5.58925Z"
								fill="#452B90" />
							<path opacity="0.3"
								d="M16.5801 5.58924C16.9056 5.26381 16.9056 4.73617 16.5801 4.41073C16.2547 4.0853 15.727 4.0853 15.4016 4.41073L10.4016 9.41073C10.0861 9.72622 10.0751 10.2342 10.3766 10.5631L14.9599 15.5631C15.2709 15.9024 15.798 15.9253 16.1373 15.6143C16.4766 15.3033 16.4995 14.7762 16.1885 14.4369L12.1443 10.0251L16.5801 5.58924Z"
								fill="#452B90" />
						</svg>
					</span>
				</div>
			</div>
		</div>
		<!-- Nav header end -->

		<div
			class="alert py-3 px-4 mb-4 sm:text-sm text-xs rounded-md relative text-primary bg-primary-light border border-primary-light">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
				stroke-linecap="round" stroke-linejoin="round" class="mr-2">
				<circle cx="12" cy="12" r="10"></circle>
				<path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
				<line x1="9" y1="9" x2="9.01" y2="9"></line>
				<line x1="15" y1="9" x2="15.01" y2="9"></line>
			</svg>
			<strong>Welcome!</strong> Message has been sent.
			<button type="button"
				class="remove-btn absolute right-0 py-5 px-4 top-[-5px] opacity-50 z-[2] dark:text-white">
				<span><i class="fa-solid fa-xmark scale-[0.9]"></i></span>
			</button>
		</div>

		<!-- Chat box start -->
		<div
			class="chatbox max-sm:w-[17.5rem] w-[21.25rem] h-[100vh] bg-white dark:bg-[#182237] z-[999] duration-500 fixed top-0 right-[-31.25rem] shadow-[0rem_0rem_1.875rem_0rem_rgba(82,63,105,0.15)]">
			<div class="chatbox-close"></div>
			<div class="dz-tab-area">
				<ul class="nav nav-tabs flex justify-between flex-wrap bg-primary p-4 pb-0">
					<li class="nav-item">
						<a class="nav-link px-4 py-2 text-white uppercase opacity-70 border-b-[0.1875rem] border-transparent block duration-500 font-semibold text-sm hover:opacity-100 tab-btn"
							href="javascript:void(0);" data-tab="notes-tab">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-4 py-2 text-white uppercase opacity-70 border-b-[0.1875rem] border-transparent block duration-500 font-semibold text-sm hover:opacity-100 tab-btn"
							href="javascript:void(0);" data-tab="alerts-tab">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-4 py-2 text-white uppercase opacity-70 border-b-[0.1875rem] border-transparent block duration-500 font-semibold text-sm hover:opacity-100 active tab-btn"
							href="javascript:void(0);" data-tab="chat-tab">Chat</a>
					</li>
				</ul>
				<div class="tab-content-area">
					<div class="tab-content active show" id="chat-tab">
						<div class="card sm:mb-4 mb-0 contacts_card dz-chat-user-box">
							<div
								class="card-header chat-list-header text-center flex justify-between py-[0.9375rem] px-[1.25rem] items-center border-b border-[#E6E6E6] relative dark:border-[#ffffff1a]">
								<a href="javascript:void(0);"
									class="w-[1.875rem] h-[1.875rem] bg-[#F3F0EC] rounded-md flex justify-center items-center"><svg
										xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
											<rect fill="#000000" opacity="1.0"
												transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
												x="4" y="11" width="16" height="2" rx="1" />
										</g>
									</svg></a>
								<div>
									<h6 class="mb-1 text-[0.9375rem]">Chat List</h6>
									<p class="mb-0 text-xs text-muted leading-[1.2]">Show All</p>
								</div>
								<a href="javascript:void(0);"
									class="w-[1.875rem] h-[1.875rem] bg-[#F3F0EC] rounded-md flex justify-center items-center"><svg
										xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<circle fill="#000000" cx="5" cy="12" r="2" />
											<circle fill="#000000" cx="12" cy="12" r="2" />
											<circle fill="#000000" cx="19" cy="12" r="2" />
										</g>
									</svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll overflow-y-scroll overflow-x-hidden relative"
								id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li
										class="name-first-letter py-1 px-4 bg-[#F3F0EC] dark:bg-[#151C2C] sticky z-[1] top-0 font-semibold border-b border-b-color dark:border-[#ffffff1a] cursor-pointer">
										A</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/1.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Archie
													Parker</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Kalid is online</p>
											</div>
										</div>
									</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/2.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon offline absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Alfie
													Mason</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/3.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">AharlieKane</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Sami is online</p>
											</div>
										</div>
									</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/4.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon offline absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Athan
													Jacoby</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li
										class="name-first-letter py-1 px-4 bg-[#F3F0EC] dark:bg-[#151C2C] sticky z-[1] top-0 font-semibold border-b border-b-color dark:border-[#ffffff1a] cursor-pointer">
										B</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/5.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon offline absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Bashid
													Samim</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/1.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon offline absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Breddie
													Ronan</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Kalid is online</p>
											</div>
										</div>
									</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/2.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon offline absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Ceorge
													Carson</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li
										class="name-first-letter py-1 px-4 bg-[#F3F0EC] dark:bg-[#151C2C] sticky z-[1] top-0 font-semibold border-b border-b-color dark:border-[#ffffff1a] cursor-pointer">
										D</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/3.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Darry
													Parker</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Sami is online</p>
											</div>
										</div>
									</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/4.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon offline absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Denry
													Hunter</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li
										class="name-first-letter py-1 px-4 bg-[#F3F0EC] dark:bg-[#151C2C] sticky z-[1] top-0 font-semibold border-b border-b-color dark:border-[#ffffff1a] cursor-pointer">
										J</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/5.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon offline absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Jack
													Ronan</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/1.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Jacob
													Tucker</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Kalid is online</p>
											</div>
										</div>
									</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/2.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon offline absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">James
													Logan</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/3.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Joshua
													Weston</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Sami is online</p>
											</div>
										</div>
									</li>
									<li
										class="name-first-letter py-1 px-4 bg-[#F3F0EC] dark:bg-[#151C2C] sticky z-[1] top-0 font-semibold border-b border-b-color dark:border-[#ffffff1a] cursor-pointer">
										O</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/4.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon offline absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Oliver
													Acker</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li
										class="dz-chat-user border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												<img src="assets/images/avatar/5.jpg" class="rounded-full w-full"
													alt="">
												<span
													class="online_icon offline absolute w-3 h-3 rounded-full right-[-0.0625rem] bottom-0 border-2 border-white dark:border-[#182237]"></span>
											</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Oscar
													Weston</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box hidden">
							<div
								class="card-header chat-list-header text-center flex justify-between py-[0.9375rem] px-[1.25rem] items-center border-b border-[#E6E6E6] relative dark:border-[#ffffff1a]">
								<a href="javascript:void(0);"
									class="dz-chat-history-back w-[1.875rem] h-[1.875rem] bg-[#F3F0EC] rounded-md flex justify-center items-center">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<rect fill="#000000" opacity="0.3"
												transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
												x="14" y="7" width="2" height="10" rx="1" />
											<path
												d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
												fill="#000000" fill-rule="nonzero"
												transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
										</g>
									</svg>
								</a>
								<div>
									<h6 class="mb-1 text-[0.9375rem]">Chat with Khelesh</h6>
									<p class="mb-0 text-xs leading-[1.2] text-success">Online</p>
								</div>
								<div class="dropdown relative">
									<a data-dz-dropdown="DzchatDropdown" href="javascript:void(0);"
										class="w-[1.875rem] h-[1.875rem] bg-[#F3F0EC] rounded-md flex justify-center items-center dz-dropdown"><svg
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<circle fill="#000000" cx="5" cy="12" r="2" />
												<circle fill="#000000" cx="12" cy="12" r="2" />
												<circle fill="#000000" cx="19" cy="12" r="2" />
											</g>
										</svg></a>
									<ul id="DzchatDropdown"
										class="dz-dropdown-menu dropdown-menu-end absolute translate-x-[-205px] translate-y-[8px] overflow-hidden rounded-md z-[9] bg-white dark:bg-[#182237] shadow-[0_0_3.125rem_0_rgba(82,63,105,0.15)] min-w-[15rem] py-2 hidden text-left">
										<li
											class="dropdown-item py-2 px-5 text-body-color text-[13px] text-left block w-full whitespace-nowrap hover:bg-[#f8f9fa] hover:text-primary dark:hover:bg-[#151C2C]">
											<i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
										<li
											class="dropdown-item py-2 px-5 text-body-color text-[13px] text-left block w-full whitespace-nowrap hover:bg-[#f8f9fa] hover:text-primary dark:hover:bg-[#151C2C]">
											<i class="fa fa-users text-primary mr-2"></i> Add to btn-close friends</li>
										<li
											class="dropdown-item py-2 px-5 text-body-color text-[13px] text-left block w-full whitespace-nowrap hover:bg-[#f8f9fa] hover:text-primary dark:hover:bg-[#151C2C]">
											<i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
										<li
											class="dropdown-item py-2 px-5 text-body-color text-[13px] text-left block w-full whitespace-nowrap hover:bg-[#f8f9fa] hover:text-primary dark:hover:bg-[#151C2C]">
											<i class="fa fa-ban text-primary mr-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body contacts_body p-4 dz-scroll overflow-y-scroll overflow-x-hidden relative"
								id="DZ_W_Contacts_Body3">
								<div class="flex justify-start mb-6">
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/1.jpg" class="rounded-full w-full" alt="">
									</div>
									<div
										class="msg_cotainer ml-2.5 bg-primary text-white py-2.5 px-[0.9375rem] relative rounded-md rounded-ss-none text-sm">
										Hi, how are you samim?
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-white opacity-50 msg_time">8:40
											AM, Today</span>
									</div>
								</div>
								<div class="flex justify-end mb-6">
									<div
										class="msg_cotainer_send mr-2.5 bg-chat dark:bg-[#151C2C] text-dark py-2.5 px-[0.9375rem] relative rounded-md rounded-se-none text-sm text-left">
										Hi Khalid i am good tnx how about you?
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-body-color opacity-50 msg_time_send">8:55
											AM, Today</span>
									</div>
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/2.jpg" class="rounded-full w-full" alt="">
									</div>
								</div>
								<div class="flex justify-start mb-6">
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/1.jpg" class="rounded-full w-full" alt="">
									</div>
									<div
										class="msg_cotainer ml-2.5 bg-primary text-white py-2.5 px-[0.9375rem] relative rounded-md rounded-ss-none text-sm">
										I am good too, thank you for your chat template
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-white opacity-50 msg_time">9:00
											AM, Today</span>
									</div>
								</div>
								<div class="flex justify-end mb-6">
									<div
										class="msg_cotainer_send mr-2.5 bg-chat dark:bg-[#151C2C] text-dark py-2.5 px-[0.9375rem] relative rounded-md rounded-se-none text-sm text-left">
										You are welcome
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-body-color opacity-50 msg_time_send">9:05
											AM, Today</span>
									</div>
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/2.jpg" class="rounded-full w-full" alt="">
									</div>
								</div>
								<div class="flex justify-start mb-6">
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/1.jpg" class="rounded-full w-full" alt="">
									</div>
									<div
										class="msg_cotainer ml-2.5 bg-primary text-white py-2.5 px-[0.9375rem] relative rounded-md rounded-ss-none text-sm">
										I am looking for your next templates
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-white opacity-50 msg_time">9:07
											AM, Today</span>
									</div>
								</div>
								<div class="flex justify-end mb-6">
									<div
										class="msg_cotainer_send mr-2.5 bg-chat dark:bg-[#151C2C] text-dark py-2.5 px-[0.9375rem] relative rounded-md rounded-se-none text-sm text-left">
										Ok, thank you have a good day
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-body-color opacity-50 msg_time_send">9:10
											AM, Today</span>
									</div>
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/2.jpg" class="rounded-full w-full" alt="">
									</div>
								</div>
								<div class="flex justify-start mb-6">
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/1.jpg" class="rounded-full w-full" alt="">
									</div>
									<div
										class="msg_cotainer ml-2.5 bg-primary text-white py-2.5 px-[0.9375rem] relative rounded-md rounded-ss-none text-sm">
										Bye, see you
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-white opacity-50 msg_time">9:12
											AM, Today</span>
									</div>
								</div>
								<div class="flex justify-start mb-6">
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/1.jpg" class="rounded-full w-full" alt="">
									</div>
									<div
										class="msg_cotainer ml-2.5 bg-primary text-white py-2.5 px-[0.9375rem] relative rounded-md rounded-ss-none text-sm">
										Hi, how are you samim?
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-white opacity-50 msg_time">8:40
											AM, Today</span>
									</div>
								</div>
								<div class="flex justify-end mb-6">
									<div
										class="msg_cotainer_send mr-2.5 bg-chat dark:bg-[#151C2C] text-dark py-2.5 px-[0.9375rem] relative rounded-md rounded-se-none text-sm text-left">
										Hi Khalid i am good tnx how about you?
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-body-color opacity-50 msg_time_send">8:55
											AM, Today</span>
									</div>
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/2.jpg" class="rounded-full w-full" alt="">
									</div>
								</div>
								<div class="flex justify-start mb-6">
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/1.jpg" class="rounded-full w-full" alt="">
									</div>
									<div
										class="msg_cotainer ml-2.5 bg-primary text-white py-2.5 px-[0.9375rem] relative rounded-md rounded-ss-none text-sm">
										I am good too, thank you for your chat template
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-white opacity-50 msg_time">9:00
											AM, Today</span>
									</div>
								</div>
								<div class="flex justify-end mb-6">
									<div
										class="msg_cotainer_send mr-2.5 bg-chat dark:bg-[#151C2C] text-dark py-2.5 px-[0.9375rem] relative rounded-md rounded-se-none text-sm text-left">
										You are welcome
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-body-color opacity-50 msg_time_send">9:05
											AM, Today</span>
									</div>
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/2.jpg" class="rounded-full w-full" alt="">
									</div>
								</div>
								<div class="flex justify-start mb-6">
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/1.jpg" class="rounded-full w-full" alt="">
									</div>
									<div
										class="msg_cotainer ml-2.5 bg-primary text-white py-2.5 px-[0.9375rem] relative rounded-md rounded-ss-none text-sm">
										I am looking for your next templates
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-white opacity-50 msg_time">9:07
											AM, Today</span>
									</div>
								</div>
								<div class="flex justify-end mb-6">
									<div
										class="msg_cotainer_send mr-2.5 bg-chat dark:bg-[#151C2C] text-dark py-2.5 px-[0.9375rem] relative rounded-md rounded-se-none text-sm text-left">
										Ok, thank you have a good day
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-body-color opacity-50 msg_time_send">9:10
											AM, Today</span>
									</div>
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/2.jpg" class="rounded-full w-full" alt="">
									</div>
								</div>
								<div class="flex justify-start mb-6">
									<div
										class="img_cont_msg block w-[1.875rem] h-[1.875rem] text-[13px] text-center font-semibold">
										<img src="assets/images/avatar/1.jpg" class="rounded-full w-full" alt="">
									</div>
									<div
										class="msg_cotainer ml-2.5 bg-primary text-white py-2.5 px-[0.9375rem] relative rounded-md rounded-ss-none text-sm">
										Bye, see you
										<span
											class="text-[0.6875rem] mt-[0.3125rem] block text-white opacity-50 msg_time">9:12
											AM, Today</span>
									</div>
								</div>
							</div>
							<div
								class="card-footer type_msg pt-2.5 px-[1.25rem] pb-4 border-t border-[#E6E6E6] dark:border-[#ffffff1a]">
								<div class="input-group relative flex flex-wrap items-stretch justify-between w-full">
									<textarea
										class="py-2.5 h-auto min-h-auto text-[13px] outline-none resize-none flex-auto w-[1%] dark:bg-[#182237]"
										placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button"
											class="btn bg-primary text-lg rounded-full h-[2.375rem] w-[2.375rem] mt-1.5 text-white text-center"><i
												class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" id="alerts-tab">
						<div class="card sm:mb-4 mb-0 contacts_card">
							<div
								class="card-header chat-list-header text-center flex justify-between py-[0.9375rem] px-[1.25rem] items-center border-b border-[#E6E6E6] relative dark:border-[#ffffff1a]">
								<a href="javascript:void(0);"
									class="w-[1.875rem] h-[1.875rem] bg-[#F3F0EC] rounded-md flex justify-center items-center"><svg
										xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<circle fill="#000000" cx="5" cy="12" r="2" />
											<circle fill="#000000" cx="12" cy="12" r="2" />
											<circle fill="#000000" cx="19" cy="12" r="2" />
										</g>
									</svg></a>
								<div>
									<h6 class="mb-1 text-[0.9375rem]">Notications</h6>
									<p class="mb-0 text-xs text-muted leading-[1.2]">Show All</p>
								</div>
								<a href="javascript:void(0);"
									class="w-[1.875rem] h-[1.875rem] bg-[#F3F0EC] rounded-md flex justify-center items-center"><svg
										xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path
												d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
												fill="#000000" fill-rule="nonzero" opacity="1" />
											<path
												d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
												fill="#000000" fill-rule="nonzero" />
										</g>
									</svg></a>
							</div>

							<div class="card-body contacts_body p-0 dz-scroll overflow-y-scroll overflow-x-hidden relative"
								id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li
										class="name-first-letter py-1 px-4 bg-[#F3F0EC] dark:bg-[#151C2C] sticky z-[1] top-0 font-semibold border-b border-b-color dark:border-[#ffffff1a] cursor-pointer text-[0.8125rem]">
										SEVER STATUS</li>
									<li
										class="border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-primary-light text-primary rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative">
												KK</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">David
													Nester Birthday</span>
												<p
													class="text-[0.8125rem] text-primary leading-[1.2] max-w-[10.625rem]">
													Today</p>
											</div>
										</div>
									</li>
									<li
										class="name-first-letter py-1 px-4 bg-[#F3F0EC] dark:bg-[#151C2C] sticky z-[1] top-0 font-semibold border-b border-b-color dark:border-[#ffffff1a] cursor-pointer text-[0.8125rem]">
										SOCIAL</li>
									<li
										class="border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative bg-success-light text-success">
												RU</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Perfection
													Simplified</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li
										class="name-first-letter py-1 px-4 bg-[#F3F0EC] dark:bg-[#151C2C] sticky z-[1] top-0 font-semibold border-b border-b-color dark:border-[#ffffff1a] cursor-pointer text-[0.8125rem]">
										SEVER STATUS</li>
									<li
										class="border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 bg-[#eee] rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative bg-primary-light text-primary">
												AU</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">AharlieKane</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Sami is online</p>
											</div>
										</div>
									</li>
									<li
										class="border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div
												class="img_cont flex items-center justify-center w-10 h-10 rounded-full text-[13px] text-center font-semibold self-start mr-2.5 relative text-info bg-info-light">
												MO</div>
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] font-medium leading-[1.2]">Athan
													Jacoby</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-content" id="notes-tab">
						<div class="card sm:mb-4 mb-0 note_card">
							<div
								class="card-header chat-list-header text-center flex justify-between py-[0.9375rem] px-[1.25rem] items-center border-b border-[#E6E6E6] relative dark:border-[#ffffff1a]">
								<a href="javascript:void(0);"
									class="w-[1.875rem] h-[1.875rem] bg-[#F3F0EC] rounded-md flex justify-center items-center"><svg
										xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
											<rect fill="#000000" opacity="1.0"
												transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
												x="4" y="11" width="16" height="2" rx="1"></rect>
										</g>
									</svg></a>
								<div>
									<h6 class="mb-1 text-[0.9375rem]">Notes</h6>
									<p class="mb-0 text-xs text-muted leading-[1.2]">Show All</p>
								</div>
								<a href="javascript:void(0);"
									class="w-[1.875rem] h-[1.875rem] bg-[#F3F0EC] rounded-md flex justify-center items-center"><svg
										xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path
												d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
												fill="#000000" fill-rule="nonzero" opacity="1" />
											<path
												d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
												fill="#000000" fill-rule="nonzero" />
										</g>
									</svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll overflow-y-scroll overflow-x-hidden relative"
								id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li
										class="border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] whitespace-nowrap font-medium leading-[1.2] text-ellipsis overflow-hidden">New
													order placed..</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0);"
													class="btn bg-primary w-[1.625rem] h-[1.625rem] p-[0.1175rem] inline-block text-center text-white text-xs rounded-md leading-[1.9] mr-1"><i
														class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);"
													class="btn bg-danger w-[1.625rem] h-[1.625rem] p-[0.1175rem] inline-block text-center text-white text-xs rounded-md leading-[1.9]"><i
														class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li
										class="border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] whitespace-nowrap font-medium leading-[1.2] text-ellipsis overflow-hidden">Youtube,
													a video-sharing website..</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0);"
													class="btn bg-primary w-[1.625rem] h-[1.625rem] p-[0.1175rem] inline-block text-center text-white text-xs rounded-md leading-[1.9] mr-1"><i
														class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);"
													class="btn bg-danger w-[1.625rem] h-[1.625rem] p-[0.1175rem] inline-block text-center text-white text-xs rounded-md leading-[1.9]"><i
														class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li
										class="border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] whitespace-nowrap font-medium leading-[1.2] text-ellipsis overflow-hidden">john
													just buy your product..</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0);"
													class="btn bg-primary w-[1.625rem] h-[1.625rem] p-[0.1175rem] inline-block text-center text-white text-xs rounded-md leading-[1.9] mr-1"><i
														class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);"
													class="btn bg-danger w-[1.625rem] h-[1.625rem] p-[0.1175rem] inline-block text-center text-white text-xs rounded-md leading-[1.9]"><i
														class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li
										class="border-b border-b-color dark:border-[#ffffff1a] py-3 px-4 cursor-pointer hover:bg-primary-light">
										<div class="flex items-center bd-highlight">
											<div class="user_info">
												<span
													class="text-dark text-[0.9375rem] mb-[0.3125rem] block max-w-[10.625rem] whitespace-nowrap font-medium leading-[1.2] text-ellipsis overflow-hidden">Athan
													Jacoby</span>
												<p
													class="text-[0.8125rem] text-body-color leading-[1.2] max-w-[10.625rem]">
													10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0);"
													class="btn bg-primary w-[1.625rem] h-[1.625rem] p-[0.1175rem] inline-block text-center text-white text-xs rounded-md leading-[1.9] mr-1"><i
														class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);"
													class="btn bg-danger w-[1.625rem] h-[1.625rem] p-[0.1175rem] inline-block text-center text-white text-xs rounded-md leading-[1.9]"><i
														class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Chat box End -->

		<!-- Header start -->
		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="navbar-collapse justify-between">
						<div class="header-left">
							<div class="dashboard_bar max-md:hidden dark:text-white">
								Dashboard
							</div>
						</div>
						<div class="header-right flex items-center h-full">
							<div class="input-group search-area flex flex-wrap items-stretch relative max-xl:hidden">
								<input type="text"
									class="form-control py-1.5 px-3 h-[2.813rem] text-sm placeholder-ph-color text-ph-color outline-none w-[1%] flex-auto rounded-s-md rounded-e-none"
									placeholder="Search here...">
								<span
									class="input-group-text min-w-[3.125rem] justify-center flex items-center text-sm pr-4 pl-[5px] leading-[1.5] text-center rounded-e-md"><a
										href="javascript:void(0)">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_1_450)">
												<path opacity="0.3"
													d="M14.2929 16.7071C13.9024 16.3166 13.9024 15.6834 14.2929 15.2929C14.6834 14.9024 15.3166 14.9024 15.7071 15.2929L19.7071 19.2929C20.0976 19.6834 20.0976 20.3166 19.7071 20.7071C19.3166 21.0976 18.6834 21.0976 18.2929 20.7071L14.2929 16.7071Z"
													fill="#452B90" />
												<path
													d="M11 16C13.7614 16 16 13.7614 16 11C16 8.23859 13.7614 6.00002 11 6.00002C8.23858 6.00002 6 8.23859 6 11C6 13.7614 8.23858 16 11 16ZM11 18C7.13401 18 4 14.866 4 11C4 7.13402 7.13401 4.00002 11 4.00002C14.866 4.00002 18 7.13402 18 11C18 14.866 14.866 18 11 18Z"
													fill="#452B90" />
											</g>
											<defs>
												<clipPath id="clip0_1_450">
													<rect width="24" height="24" fill="white" />
												</clipPath>
											</defs>
										</svg>
									</a></span>
							</div>
							<ul class="flex flex-row">
								<li class="nav-item dropdown notification_dropdown flex items-center relative">
									<a class="nav-link relative sm:w-[45px] w-[40px] sm:h-[45px] h-[40px] mx-[5px] max-sm:mr-0 text-center p-2 text-[#464a53] rounded-md sm:text-lg block duration-500 bell dz-theme-mode"
										href="javascript:void(0);">
										<svg id="icon-light" xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3" />
											</g>
										</svg>
										<svg id="icon-dark" xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M12.0700837,4.0003006 C11.3895108,5.17692613 11,6.54297551 11,8 C11,12.3948932 14.5439081,15.9620623 18.9299163,15.9996994 C17.5467214,18.3910707 14.9612535,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 C12.0233848,4 12.0467462,4.00010034 12.0700837,4.0003006 Z"
													fill="#000000" />
											</g>
										</svg>
									</a>
								</li>

								<li class="nav-item dropdown notification_dropdown flex items-center relative">
									<a class="nav-link relative sm:w-[45px] w-[40px] sm:h-[45px] h-[40px] mx-[5px] max-sm:mr-0 text-center p-2 text-[#464a53] rounded-md sm:text-lg block duration-500 bell-link"
										href="javascript:void(0);">
										<svg width="25" height="24" viewBox="0 0 25 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_1_463)">
												<path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
													d="M6.5 2H18.5C19.0523 2 19.5 2.44772 19.5 3V13C19.5 13.5523 19.0523 14 18.5 14H6.5C5.94772 14 5.5 13.5523 5.5 13V3C5.5 2.44772 5.94772 2 6.5 2ZM14.3 4C13.6562 4 12.9033 4.72985 12.5 5.2C12.0967 4.72985 11.3438 4 10.7 4C9.5604 4 8.9 4.88887 8.9 6.02016C8.9 7.27339 10.1 8.6 12.5 10C14.9 8.6 16.1 7.3 16.1 6.1C16.1 4.96871 15.4396 4 14.3 4Z"
													fill="#222B40" />
												<path fill-rule="evenodd" clip-rule="evenodd"
													d="M4.29275 6.57254L12.5 12.5L20.7073 6.57254C20.9311 6.41086 21.2437 6.46127 21.4053 6.68514C21.4669 6.77034 21.5 6.87278 21.5 6.97788V17C21.5 18.1046 20.6046 19 19.5 19H5.5C4.39543 19 3.5 18.1046 3.5 17V6.97788C3.5 6.70174 3.72386 6.47788 4 6.47788C4.10511 6.47788 4.20754 6.511 4.29275 6.57254Z"
													fill="#222B40" />
											</g>
											<defs>
												<clipPath id="clip0_1_463">
													<rect width="24" height="24" fill="white"
														transform="translate(0.5)" />
												</clipPath>
											</defs>
										</svg>
									</a>
								</li>
								<li class="nav-item dropdown notification_dropdown flex items-center relative">
									<a data-dz-dropdown="DzSettingDropdown"
										class="dz-dropdown nav-link relative sm:w-[45px] w-[40px] sm:h-[45px] h-[40px] mx-[5px] max-sm:mr-0 text-center p-2 text-[#464a53] rounded-md sm:text-lg block duration-500"
										href="javascript:void(0);">
										<svg width="25" height="24" viewBox="0 0 25 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M3.5 16.87V9.257H21.5V16.931C21.5 20.07 19.5241 22 16.3628 22H8.62733C5.49561 22 3.5 20.03 3.5 16.87ZM8.45938 14.41C8.00494 14.431 7.62953 14.07 7.60977 13.611C7.60977 13.151 7.96542 12.771 8.41987 12.75C8.86443 12.75 9.22997 13.101 9.23985 13.55C9.2596 14.011 8.90395 14.391 8.45938 14.41ZM12.5198 14.41C12.0653 14.431 11.6899 14.07 11.6701 13.611C11.6701 13.151 12.0258 12.771 12.4802 12.75C12.9248 12.75 13.2903 13.101 13.3002 13.55C13.32 14.011 12.9643 14.391 12.5198 14.41ZM16.5505 18.09C16.096 18.08 15.7305 17.7 15.7305 17.24C15.7206 16.78 16.0862 16.401 16.5406 16.391H16.5505C17.0148 16.391 17.3902 16.771 17.3902 17.24C17.3902 17.71 17.0148 18.09 16.5505 18.09ZM11.6701 17.24C11.6899 17.7 12.0653 18.061 12.5198 18.04C12.9643 18.021 13.32 17.641 13.3002 17.181C13.2903 16.731 12.9248 16.38 12.4802 16.38C12.0258 16.401 11.6701 16.78 11.6701 17.24ZM7.59989 17.24C7.61965 17.7 7.99506 18.061 8.44951 18.04C8.89407 18.021 9.24973 17.641 9.22997 17.181C9.22009 16.731 8.85456 16.38 8.40999 16.38C7.95554 16.401 7.59989 16.78 7.59989 17.24ZM15.7404 13.601C15.7404 13.141 16.096 12.771 16.5505 12.761C16.9951 12.761 17.3507 13.12 17.3705 13.561C17.3804 14.021 17.0247 14.401 16.5801 14.41C16.1257 14.42 15.7503 14.07 15.7404 13.611V13.601Z"
												fill="#222B40" />
											<path opacity="0.4"
												d="M3.50336 9.2569C3.5162 8.6699 3.5656 7.5049 3.65846 7.1299C4.13267 5.0209 5.74298 3.6809 8.04485 3.4899H16.9559C19.238 3.6909 20.8681 5.0399 21.3423 7.1299C21.4342 7.4949 21.4836 8.6689 21.4964 9.2569H3.50336Z"
												fill="#222B40" />
											<path
												d="M8.80489 6.59C9.23958 6.59 9.56559 6.261 9.56559 5.82V2.771C9.56559 2.33 9.23958 2 8.80489 2C8.3702 2 8.04419 2.33 8.04419 2.771V5.82C8.04419 6.261 8.3702 6.59 8.80489 6.59Z"
												fill="#222B40" />
											<path
												d="M16.195 6.59C16.6198 6.59 16.9557 6.261 16.9557 5.82V2.771C16.9557 2.33 16.6198 2 16.195 2C15.7603 2 15.4343 2.33 15.4343 2.771V5.82C15.4343 6.261 15.7603 6.59 16.195 6.59Z"
												fill="#222B40" />
										</svg>

									</a>
									<div id="DzSettingDropdown"
										class="dz-dropdown-menu absolute z-[9] shadow-[0_0_3.125rem_0_rgba(82,63,105,0.15)] w-[18.5rem] pt-4 mt-0.5 top-full max-md-top-[45px] md:right-0 rounded-md bg-white dark:bg-[#182237] hidden">
										<div id="DZ_W_TimeLine02"
											class="widget-timeline dz-scroll style-1 overflow-y-scroll overflow-x-hidden h-[23.125rem] p-4 relative">
											<ul class="timeline relative">
												<li class="relative mb-[0.9375rem]">
													<div
														class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 primary">
													</div>
													<a class="timeline-panel text-muted" href="javascript:void(0);">
														<span
															class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">10
															minutes ago</span>
														<h6 class="text-[13px]">Youtube, a video-sharing website, goes
															live <strong class="text-primary">$500</strong>.</h6>
													</a>
												</li>
												<li class="relative mb-[0.9375rem]">
													<div
														class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 info">
													</div>
													<a class="timeline-panel text-muted" href="javascript:void(0);">
														<span
															class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">20
															minutes ago</span>
														<h6 class="text-[13px]">New order placed <strong
																class="text-info">#XF-2356.</strong></h6>
														<p class="text-xs leading-[1.125rem]">Quisque a consequat ante
															Sit amet magna at volutapt...</p>
													</a>
												</li>
												<li class="relative mb-[0.9375rem]">
													<div
														class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 danger">
													</div>
													<a class="timeline-panel text-muted" href="javascript:void(0);">
														<span
															class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">30
															minutes ago</span>
														<h6 class="text-[13px]">john just buy your product <strong
																class="text-warning">Sell $250</strong></h6>
													</a>
												</li>
												<li class="relative mb-[0.9375rem]">
													<div
														class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 success">
													</div>
													<a class="timeline-panel text-muted" href="javascript:void(0);">
														<span
															class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">15
															minutes ago</span>
														<h6 class="text-[13px]">StumbleUpon is acquired by eBay. </h6>
													</a>
												</li>
												<li class="relative mb-[0.9375rem]">
													<div
														class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 warning">
													</div>
													<a class="timeline-panel text-muted" href="javascript:void(0);">
														<span
															class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">20
															minutes ago</span>
														<h6 class="text-[13px]">Mashable, a news website and blog, goes
															live.</h6>
													</a>
												</li>
												<li class="relative mb-[0.9375rem]">
													<div
														class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 dark">
													</div>
													<a class="timeline-panel text-muted" href="javascript:void(0);">
														<span
															class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">20
															minutes ago</span>
														<h6 class="text-[13px]">Mashable, a news website and blog, goes
															live.</h6>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="nav-item pl-4 flex items-center relative">
									<div class="dropdown header-profile2">
										<a data-dz-dropdown="DzinfoDropdown"
											class="dz-dropdown nav-link relative p-2 max-sm:p-0 text-[#464a53] text-lg leading-[1] block duration-500 bg-transparent"
											href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
											<div class="header-info2 flex items-center text-right">
												<div class="header-media">
													<img src="assets/images/user.jpg" alt=""
														class="w-[45px] h-[45px] max-sm:w-[40px] max-sm:h-[40px] rounded-md">
												</div>
											</div>
										</a>
										<div id="DzinfoDropdown"
											class="dz-dropdown-menu dropdown-menu dropdown-menu-end bg-white dark:bg-[#182237] absolute rounded-md w-[275px] right-0 top-full z-[9] shadow-[0_0_3.125rem_0_rgba(82,63,105,0.15)] py-2 hidden">
											<div class="card border-0 mb-0">
												<div
													class="card-header relative flex items-center justify-between bg-transparent py-2 sm:px-[1.25rem] px-4 border-b border-[#E6E6E6] dark:border-[#ffffff1a]">
													<div class="flex items-center">
														<img src="assets/images/user.jpg"
															class="avatar avatar-md mr-2.5 h-[2.813rem] w-[2.813rem] inline-block object-cover rounded-md"
															alt="">
														<div>
															<h6 class="text-sm">Hanuman Prajapati</h6>
															<span class="text-xs text-body-color">Web Designer</span>
														</div>
													</div>
												</div>
												<div
													class="card-body sm:py-2 border-b border-[#E6E6E6] dark:border-[#ffffff1a]">
													<a href="app-profile-1.html"
														class="dropdown-item py-[0.6rem] px-[1.25rem] block w-full ai-icon hover:bg-primary-light group">
														<svg class="inline-block" width="20" height="20"
															viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M11.9848 15.3462C8.11714 15.3462 4.81429 15.931 4.81429 18.2729C4.81429 20.6148 8.09619 21.2205 11.9848 21.2205C15.8524 21.2205 19.1543 20.6348 19.1543 18.2938C19.1543 15.9529 15.8733 15.3462 11.9848 15.3462Z"
																stroke="var(--primary)" stroke-width="1.5"
																stroke-linecap="round" stroke-linejoin="round" />
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M11.9848 12.0059C14.5229 12.0059 16.58 9.94779 16.58 7.40969C16.58 4.8716 14.5229 2.81445 11.9848 2.81445C9.44667 2.81445 7.38857 4.8716 7.38857 7.40969C7.38 9.93922 9.42381 11.9973 11.9524 12.0059H11.9848Z"
																stroke="var(--primary)" stroke-width="1.42857"
																stroke-linecap="round" stroke-linejoin="round" />
														</svg>

														<span
															class="ml-2 text-[13px] text-body-color group-hover:text-primary">Profile
														</span>
													</a>
													<a href="my-project.html"
														class="dropdown-item py-[0.6rem] px-[1.25rem] block w-full ai-icon hover:bg-primary-light group">
														<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
															viewBox="0 0 24 24" fill="none" stroke="var(--primary)"
															stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round"
															class="feather feather-pie-chart inline-block">
															<path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
															<path d="M22 12A10 10 0 0 0 12 2v10z"></path>
														</svg>

														<span
															class="ml-2 text-[13px] text-body-color group-hover:text-primary">My
															Project</span>
														<span
															class="bg-badge-secondary py-[0.15rem] px-2 light rounded-full text-white ml-2 text-xs border border-[#acacac] dark:border-transparent">4</span>
													</a>
													<a href="chat.html"
														class="dropdown-item py-[0.6rem] px-[1.25rem] block w-full ai-icon hover:bg-primary-light group">
														<svg class="inline-block" width="20" height="20"
															viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M17.9026 8.85114L13.4593 12.4642C12.6198 13.1302 11.4387 13.1302 10.5992 12.4642L6.11844 8.85114"
																stroke="var(--primary)" stroke-width="1.5"
																stroke-linecap="round" stroke-linejoin="round" />
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z"
																stroke="var(--primary)" stroke-width="1.5"
																stroke-linecap="round" stroke-linejoin="round" />
														</svg>

														<span
															class="ml-2 text-[13px] text-body-color group-hover:text-primary">Message
														</span>
													</a>
													<a href="notifications.html"
														class="dropdown-item py-[0.6rem] px-[1.25rem] block w-full ai-icon hover:bg-primary-light group">
														<svg class="inline-block" width="20" height="20"
															viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M12 17.8476C17.6392 17.8476 20.2481 17.1242 20.5 14.2205C20.5 11.3188 18.6812 11.5054 18.6812 7.94511C18.6812 5.16414 16.0452 2 12 2C7.95477 2 5.31885 5.16414 5.31885 7.94511C5.31885 11.5054 3.5 11.3188 3.5 14.2205C3.75295 17.1352 6.36177 17.8476 12 17.8476Z"
																stroke="var(--primary)" stroke-width="1.5"
																stroke-linecap="round" stroke-linejoin="round" />
															<path
																d="M14.3888 20.8572C13.0247 22.372 10.8967 22.3899 9.51947 20.8572"
																stroke="var(--primary)" stroke-width="1.5"
																stroke-linecap="round" stroke-linejoin="round" />
														</svg>

														<span
															class="ml-2 text-[13px] text-body-color group-hover:text-primary">Notification
														</span>
													</a>
												</div>
												<div class="card-footer px-0 py-2">
													<a href="javascript:void(0);"
														class="dropdown-item py-[0.6rem] px-[1.25rem] text-base block w-full ai-icon">
														<svg class="inline-block" width="20" height="20"
															viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd"
																d="M20.8066 7.62355L20.1842 6.54346C19.6576 5.62954 18.4907 5.31426 17.5755 5.83866V5.83866C17.1399 6.09528 16.6201 6.16809 16.1307 6.04103C15.6413 5.91396 15.2226 5.59746 14.9668 5.16131C14.8023 4.88409 14.7139 4.56833 14.7105 4.24598V4.24598C14.7254 3.72916 14.5304 3.22834 14.17 2.85761C13.8096 2.48688 13.3145 2.2778 12.7975 2.27802H11.5435C11.0369 2.27801 10.5513 2.47985 10.194 2.83888C9.83666 3.19791 9.63714 3.68453 9.63958 4.19106V4.19106C9.62457 5.23686 8.77245 6.07675 7.72654 6.07664C7.40418 6.07329 7.08843 5.98488 6.8112 5.82035V5.82035C5.89603 5.29595 4.72908 5.61123 4.20251 6.52516L3.53432 7.62355C3.00838 8.53633 3.31937 9.70255 4.22997 10.2322V10.2322C4.82187 10.574 5.1865 11.2055 5.1865 11.889C5.1865 12.5725 4.82187 13.204 4.22997 13.5457V13.5457C3.32053 14.0719 3.0092 15.2353 3.53432 16.1453V16.1453L4.16589 17.2345C4.41262 17.6797 4.82657 18.0082 5.31616 18.1474C5.80575 18.2865 6.33061 18.2248 6.77459 17.976V17.976C7.21105 17.7213 7.73116 17.6515 8.21931 17.7821C8.70746 17.9128 9.12321 18.233 9.37413 18.6716C9.53867 18.9488 9.62708 19.2646 9.63043 19.5869V19.5869C9.63043 20.6435 10.4869 21.5 11.5435 21.5H12.7975C13.8505 21.5 14.7055 20.6491 14.7105 19.5961V19.5961C14.7081 19.088 14.9088 18.6 15.2681 18.2407C15.6274 17.8814 16.1154 17.6806 16.6236 17.6831C16.9451 17.6917 17.2596 17.7797 17.5389 17.9393V17.9393C18.4517 18.4653 19.6179 18.1543 20.1476 17.2437V17.2437L20.8066 16.1453C21.0617 15.7074 21.1317 15.1859 21.0012 14.6963C20.8706 14.2067 20.5502 13.7893 20.111 13.5366V13.5366C19.6717 13.2839 19.3514 12.8665 19.2208 12.3769C19.0902 11.8872 19.1602 11.3658 19.4153 10.9279C19.5812 10.6383 19.8213 10.3981 20.111 10.2322V10.2322C21.0161 9.70283 21.3264 8.54343 20.8066 7.63271V7.63271V7.62355Z"
																stroke="var(--primary)" stroke-width="1.5"
																stroke-linecap="round" stroke-linejoin="round" />
															<circle cx="12.175" cy="11.889" r="2.63616"
																stroke="var(--primary)" stroke-width="1.5"
																stroke-linecap="round" stroke-linejoin="round" />
														</svg>

														<span
															class="ml-2 text-[13px] text-body-color group-hover:text-primary">Settings
														</span>
													</a>
													<a href="page-login.html"
														class="dropdown-item py-[0.6rem] px-[1.25rem] text-base block w-full ai-icon">
														<svg class="profle-logout inline-block"
															xmlns="http://www.w3.org/2000/svg" width="18" height="18"
															viewBox="0 0 24 24" fill="none" stroke="#ff7979"
															stroke-width="2" stroke-linecap="round"
															stroke-linejoin="round">
															<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
															<polyline points="16 17 21 12 16 7"></polyline>
															<line x1="21" y1="12" x2="9" y2="12"></line>
														</svg>
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