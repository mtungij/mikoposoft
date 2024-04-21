<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from yashadmin.dexignzone.com/tailwind/demo/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2024 19:23:46 GMT -->
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

	<meta property="og:title" content="YashAdmin -Sales Management System Tailwind CSS Admin Dashboard Template | DexignZone">
	<meta property="og:description"
		content="The Yash Admin Sales Management System is a robust and intuitive platform designed to streamline sales operations and enhance business productivity. This comprehensive admin dashboard offers a feature-rich environment tailored specifically for managing sales processes effectively.With its modern and responsive design, Yash Admin provides a seamless user experience across various devices and screen sizes. The user interface is highly customizable, allowing administrators to tailor the dashboard to their specific needs and branding requirements.">
	<meta property="og:image" content="../social-image.png">

	<meta name="format-detection" content="telephone=no">

	<meta name="twitter:title" content="YashAdmin -Sales Management System Tailwind CSS Admin Dashboard Template | DexignZone">
	<meta name="twitter:description"
		content="The Yash Admin Sales Management System is a robust and intuitive platform designed to streamline sales operations and enhance business productivity. This comprehensive admin dashboard offers a feature-rich environment tailored specifically for managing sales processes effectively.With its modern and responsive design, Yash Admin provides a seamless user experience across various devices and screen sizes. The user interface is highly customizable, allowing administrators to tailor the dashboard to their specific needs and branding requirements.">
	<meta name="twitter:image" content="../social-image.png">
	<meta name="twitter:card" content="summary_large_image">

<!-- MOBILE SPECIFIC -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- FAVICONS ICON -->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/favicon.png'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/icons/fontawesome/css/all.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/icons/line-awesome/css/line-awesome.min.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/icons/themify-icons/css/themify-icons.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/icons/material-design-iconic-font/css/materialdesignicons.min.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/vendor/datatables/css/jquery.dataTables.min.css'); ?>">

<!-- NICE SELECT -->
<link href="<?php echo base_url('assets/vendor/niceselect/css/nice-select.css'); ?>" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

<!-- Style css -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

	
</head>
<body class="h-[100vh] selection:text-white selection:bg-primary" style="background-image:url('assets/images/bg.png'); background-position:center;">
		<div class="authincation fix-wrapper bg-primary-light min-h-screen flex py-[30px] items-center">
			<div class="container h-full">
				<div class="row justify-center h-full items-center">
					<div class="md:w-1/2">
						<div class="authincation-content bg-white dark:bg-[#182237] shadow-[0_0_2.1875rem_0_rgba(154,161,171,0.15)] rounded-md">
							<div class="row no-gutters">
								<div class="w-full">
									<div class="auth-form p-[3.125rem]">
										<div class="text-center mb-4">
											<a href="index-2.html"><img src="assets/images/logo/logo-full.png" alt="" class="w-[160px] inline-block"></a>
										</div>
										<h4 class="text-center mb-6">Sign up your account</h4>
                                    <!-- #re-->

                                    <?php if ($das = $this->session->flashdata('successfully')): ?>
                                 
                                        <div class="alert py-3 px-4 mb-4 sm:text-sm text-xs rounded-md relative border border-transparent bg-danger text-white">
                                            <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong>  <?php echo $das;?>
                                            <button type="button" class="remove-btn absolute right-0 py-5 px-4 top-[-5px] opacity-50 z-[2] dark:text-white"><span><i class="fa-solid fa-xmark scale-[0.9]"></i></span>
                                            </button>
	                                    </div>
                                    <?php endif; ?>
   
	                         <?php if ($das = $this->session->flashdata('failed')): ?>
							<div class=" w-full">
							<div class="alert py-3 px-4 mb-4 sm:text-sm text-xs rounded-md relative border border-transparent text-danger bg-danger-light dark:bg-[#ff5e5e26] dark:border-[#ff5e5e26] left-icon-big alert-dismissible">
								<button type="button" class="remove-btn absolute right-0 py-5 px-4 top-[-5px] opacity-50 z-[2] dark:text-white"><span><i class="fa-solid fa-xmark scale-[0.9]"></i></span>
								</button>
								<div class="flex items-start">
									<div class="self-center mr-[0.9375rem] social-icon">
										<span><i class="text-[2.1875rem] leading-[1] mdi mdi-alert"></i></span>
									</div>
									<div class="media-body">
										<h5 class="mt-1 mb-2">Login failed!</h5>
										<p class="mb-0 text-base text-danger"><?= $das?></p>
									</div>
								</div>
							</div>
							</div>					
                            <?php endif; ?>
	                         <?php if ($das = $this->session->flashdata('blocked')): ?>
							<div class=" w-full">
							<div class="alert py-3 px-4 mb-4 sm:text-sm text-xs rounded-md relative border border-transparent text-danger bg-danger-light dark:bg-[#ff5e5e26] dark:border-[#ff5e5e26] left-icon-big alert-dismissible">
								<button type="button" class="remove-btn absolute right-0 py-5 px-4 top-[-5px] opacity-50 z-[2] dark:text-white"><span><i class="fa-solid fa-xmark scale-[0.9]"></i></span>
								</button>
								<div class="flex items-start">
									<div class="self-center mr-[0.9375rem] social-icon">
										<span><i class="text-[2.1875rem] leading-[1] mdi mdi-alert"></i></span>
									</div>
									<div class="media-body">
										<h5 class="mt-1 mb-2">Account Blocked!</h5>
										<p class="mb-0 text-base text-danger"><?= $das ?></p>
									</div>
								</div>
							</div>
							</div>					
                            <?php endif; ?>


										<?php echo form_open("welcome/signin") ?>
											<div class="mb-4">
												<label class="mb-1 form-label">Phone Number</label>
												<input type="number" name="comp_phone" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full" placeholder="Enter Phone Number">
											</div>
											
											<div class="mb-4 relative">
												<label class="form-label" for="dz-password">Password</label>
												<input type="password" name="password" id="dz-password" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full" value="123456">
												<span class="show-pass eye absolute right-5 bottom-2.5 text-body-color text-sm">
													<i class="fa fa-eye-slash"></i>
													<i class="fa fa-eye"></i>
												</span>
											</div>
											
											<div class="text-center">
												<button type="submit" class="block w-full rounded font-bold h-[3.125rem] text-[15px] max-xl:text-xs leading-5 py-[0.719rem] max-xl:px-4 px-[1.563rem] max-xl:py-2.5 border border-primary text-white bg-primary hover:bg-hover-primary hover:border-hover-primary duration-300">Sign In</button>
											</div>
                                            <?php echo form_close(); ?>
										<div class="new-account mt-4">
											<p class="mb-4">Already have an account? <a class="text-primary"<a href="<?php echo base_url("welcome/register"); ?>">Sign Up</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	<!-- Required vendors -->
<!-- Include jQuery -->
<!-- <script src="<?php echo base_url('assets/vendor/global/global.min.js'); ?>"></script> -->
<script src="<?php echo base_url('assets/vendor/niceselect/js/jquery.nice-select.min.js'); ?>"></script> <!-- nice-select -->
<script src="<?php echo base_url('assets/js/custom.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/deznav-init.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/demo.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/styleSwitcher.js'); ?>"></script>

	
	
	
</body>

<!-- Mirrored from yashadmin.dexignzone.com/tailwind/demo/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2024 19:23:51 GMT -->
</html>