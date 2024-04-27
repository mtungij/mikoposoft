
<?php include('incs/admin_header.php'); ?>
<?php include('incs/admin_sidebar.php'); ?>
<div class="content-body">
<div class="w-full">
<?php if ($das = $this->session->flashdata('massage')): ?>
    <div class=" w-full">	
    <div class="alert py-3 px-4  mb-4 sm:text-sm text-xs rounded-md relative border border-transparent text-success bg-success-light left-icon-big alert-dismissible">
			<button type="button" class="remove-btn absolute right-0 py-5 px-4 top-[-5px] opacity-50 z-[2] dark:text-white"><span><i class="fa-solid fa-xmark scale-[0.9]"></i></span>
			</button>
			<div class="flex items-start">
				<div class="self-center mr-[0.9375rem] social-icon">
					<span><i class="text-[2.1875rem] leading-[1] mdi mdi-check-circle-outline"></i></span>
				</div>
				<div class="media-body">
					<h5 class="mt-1 mb-2">successfully!</h5>
					<p class="mb-0 text-success"><?php echo $das;?></p>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
						<div class="card flex flex-col max-sm:mb-[30px] profile-card">
						<?php echo form_open("admin/create_interest_formular")?>
								<div class="sm:p-10 sm:pb-2.5 p-[25px] pb-0">
									<div class="row">
										<div class="sm:w-1/2 w-full mb-[30px]">
										<div class="form-check leading-normal block min-h-[1.3125rem] pl-[1.5em] custom-radio border py-4  border-gray-300 rounded mb-2">
    										<input id="credit1" name="formular_name[]" value="SIMPLE" type="checkbox" class="form-check-input ml-3"  >
    										<label class="form-check-label mt-[0.1875rem] text-body-color ml-3" for="credit1">Straight Line Interest Formular</label>
										</div>

										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
										<div class="form-check leading-normal block min-h-[1.3125rem] pl-[1.5em] custom-radio border py-4  border-gray-300 rounded mb-2">
    										<input id="credit1"name="formular_name[]" value="FLAT RATE" type="checkbox" class="form-check-input ml-3"  >
    										<label class="form-check-label mt-[0.1875rem] text-body-color ml-3" for="credit1">Frate Rate Interest Formular</label>
										</div>

										</div>	
										<div class="sm:w-1/2 w-full mb-[30px]">
										<div class="form-check leading-normal block min-h-[1.3125rem] pl-[1.5em] custom-radio border py-4  border-gray-300 rounded mb-2">
    										<input id="credit1" name="formular_name[]" value="REDUCING" type="checkbox" class="form-check-input ml-3"  >
    										<label class="form-check-label mt-[0.1875rem] text-body-color ml-3" for="credit1">Reducing Interest Formular</label>
										</div>

										</div>	
									<input type="hidden" name="comp_id" value="<?php echo $_SESSION['comp_id']; ?>">
									
										
										</div>
									</div>
								</div>
								<div class="sm:py-5 sm:px-10 p-[25px] flex items-center justify justify-center border-t border-b-color">
									<button type="submit" class="btn btn-primary sm:py-[0.719rem] py-2.5 sm:px-[1.563rem] px-4 sm:text-[15px] text-[13px] font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary">Submit</button>
									
								</div>
								<?php echo form_close(); ?>
						</div>
					

						<div class="card flex flex-col max-sm:mb-[30px] profile-card">
						<div class="dashboard_bar pl-6 pt-4 max-md:hidden dark:text-white">
								Active Loan Interest List
							</div>
    <div class="grid grid-cols-3 gap-4">
        <?php foreach ($data as $datas): ?>
            <div class="sm:p-10 sm:pb-2.5 p-[25px] pb-0 relative">
                <div class="form-check leading-normal block min-h-[1.3125rem] pl-[1.5em] custom-radio border py-4 border-gray-300 rounded mb-2 relative">
                    <?php if ($datas->formular_name == 'SIMPLE'): ?>
                        Straight Interest Formular
                    <?php elseif($datas->formular_name == 'FLAT RATE'): ?>
                        Frate Rate Interest Formular
                    <?php elseif ($datas->formular_name == 'REDUCING'): ?>
                        Reducing Interest Formular
                    <?php endif; ?>
                   
				   <button class="relative pt-2 ml-2 px-2  py-1 bg-red-500 text-white rounded-full">Remove</button>
				  
                   
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>






                                    
                                    





															
															

															</div>


														




															<script src="<?php echo base_url('assets/js/flowbite.js'); ?>"></script>
															<!-- Required vendors -->
															<script src="<?php echo base_url('assets/vendor/global/global.min.js'); ?>"></script>
															<script src="<?php echo base_url('assets/vendor/chart.js/chart.bundle.min.js'); ?>"></script>
															<script src="<?php echo base_url('assets/vendor/apexchart/apexchart.js'); ?>"></script>

															<!-- Select2 -->


															<!-- Nice Select -->
															<script src="<?php echo base_url('assets/vendor/niceselect/js/jquery.nice-select.min.js'); ?>"></script>

															<!-- Custom Scripts -->
															<script src="<?php echo base_url('assets/js/custom.min.js'); ?>"></script>
															<script src="<?php echo base_url('assets/js/deznav-init.js'); ?>"></script>
												<script src="<?php echo base_url('assets/js/demo.js'); ?>"></script>

															<!-- Dashboard specific scripts -->
															<script src="<?php echo base_url('assets/js/dashboard/dashboard-1.js'); ?>"></script>
															<script src="<?php echo base_url('assets/vendor/draggable/draggable.js'); ?>"></script>
															<script src="<?php echo base_url('assets/vendor/swiper/js/swiper-bundle.min.js'); ?>"></script>

															<!-- DataTables -->
															<script src="<?php echo base_url('assets/vendor/datatables/js/jquery.dataTables.min.js'); ?>"></script>
															<script src="<?php echo base_url('assets/vendor/datatables/js/dataTables.buttons.min.js'); ?>"></script>
															<script src="<?php echo base_url('assets/vendor/datatables/js/buttons.html5.min.js'); ?>"></script>
															<script src="<?php echo base_url('assets/vendor/datatables/js/jszip.min.js'); ?>"></script>
															<script src="<?php echo base_url('assets/js/plugins-init/datatables.init.js'); ?>"></script>

															<!-- Powerful Calendar -->
															<script src="<?php echo base_url('assets/vendor/powerful-calendar/calendar.min.js'); ?>"></script>


															</body>

															<!-- Mirrored from yashadmin.dexignzone.com/tailwind/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2024 19:22:38 GMT -->
															</html>