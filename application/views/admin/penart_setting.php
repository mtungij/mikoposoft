
<?php include('incs/admin_header.php'); ?>
<?php include('incs/admin_sidebar.php'); ?>
<div class="content-body">
<div class="w-full">
<?php if ($das = $this->session->flashdata('massage')): ?>
    <div class=" w-full">	
    <div class="alert py-3 px-4 mb-4 sm:text-sm text-xs rounded-md relative border border-transparent text-success bg-success-light left-icon-big alert-dismissible">
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
						<?php echo form_open("admin/create_penarty")?>
								<div class="sm:p-10 sm:pb-2.5 p-[25px] pb-0">
									<div class="row">
										<div class="sm:w-1/2 w-full mb-[30px]">
										<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><small class="text-danger">*</small>Penalt Type</label>
										<select id="countries" name="action_penart" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full"required>
                                        <option value="">select penalt type</option>
										<option value="PERCENTAGE VALUE">Percentage Value</option>
										<option value="MONEY VALUE">Money Value</option>
										</select>
										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2"><small class="text-danger">*</small>Penalt Amount</label>
											<input type="number" name="penart" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full"required>
										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
												
									<div class="mb-4">
										
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
					</div>
	
					<div class="w-full">
						<div class="card">
							<div class="card-body p-0">
								<div class="overflow-x-auto active-projects">
									<div class="sm:p-5 p-4">
                                        <h4 class="text-base">Company Branch List</h4>
									</div>
									<table id="empoloyees-tbl3" class="table w-full">
										<thead>
											<tr>
												
												<th class="bg-primary-light text-[13px] py-2.5 px-4 text-primary capitalize border-b border-b-color font-medium bg-none whitespace-nowrap text-left">Calculation Type</th>
												<th class="bg-primary-light text-[13px] py-2.5 px-4 text-primary capitalize border-b border-b-color font-medium bg-none whitespace-nowrap text-left">Penalt Amount</th>
												<th class="bg-primary-light text-[13px] py-2.5 px-4 text-primary capitalize border-b border-b-color font-medium bg-none whitespace-nowrap text-right">Action</th>
											</tr>
										</thead>
										<tbody>

										
											<tr>
												
												<td class="border-b border-[#E6E6E6] dark:border-[#ffffff1a] text-[13px] text-body-color py-2.5 px-5 font-normal whitespace-nowrap"><?php echo @$penart->action_penart; ?></td>
												<td class="border-b border-[#E6E6E6] dark:border-[#ffffff1a] text-[13px] text-body-color py-2.5 px-5 font-normal whitespace-nowrap"><?php if (@$penart->action_penart == 'MONEY VALUE') {
                                                    ?>
                                                    <?php echo number_format(@$penart->penart); ?>
                                                    <?php }elseif(@$penart->action_penart == 'PERCENTAGE VALUE') {
                                                    ?>
                                                    <?php echo @$penart->penart; ?>%
                                                    <?php } ?>
                                                </td>
                                                <td class="border-b border-[#E6E6E6] dark:border-[#ffffff1a] text-right py-2.5 px-5 whitespace-nowrap">
													<div class="h-[1.55rem] w-[1.55rem] text-xs leading-[1.6rem] text-center cursor-pointer relative inline-block rounded-md bg-primary mr-1">
														<i class="fa-solid fa-pencil text-white"></i>
													</div>
													
												</td>

												
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>




                                    
                                    





															
															

															</div>


															<!-- Footer start -->
															<div class="footer dark:bg-[#182237] mt-4 border-t border-b-color dark:border-[#ffffff1a]">
															<div class="p-[0.9375rem]">
															<p class="text-center text-[#918f8f] dark:text-[#ffffffb3] text-[0.775rem] leading-[1.8]">Copyright © Developed by <a href="https://dexignzone.com/" target="_blank" class="text-primary">DexignZone</a> 2024</p>
															</div>
															</div>
															<!-- Footer end -->




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