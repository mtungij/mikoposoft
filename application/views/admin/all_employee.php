<?php include('incs/admin_header.php'); ?>
<?php include('incs/admin_sidebar.php'); ?>
<div class="content-body">
<div class="w-full ">
						<div class="card">
							<div class="card-body p-0">
								<div class="overflow-x-auto active-projects">
									<div class="sm:p-5 p-4">
										<h4 class="text-base">Branch Employee</h4>
										
									</div>
									<div class="flex justify-end">
                                    	 <a href="<?php echo base_url("admin/unblock_allEmployee"); ?>" class="mr-1 mb-2 inline-block rounded font-medium xl:text-[15px] text-xs leading-5 xl:py-[0.719rem] xl:px-[1.563rem] py-2.5 px-4 border border-primary text-white bg-primary hover:bg-hover-primary hover:border-hover-primary duration-300"><i class="fa-brands fa-accusoft mr-2"></i>Unblock All</a>
                                    	 <a href="<?php echo base_url("admin/block_allEmployee"); ?>" class="mr-1 mb-2 inline-block rounded font-medium xl:text-[15px] text-xs leading-5 xl:py-[0.719rem] xl:px-[1.563rem] py-2.5 px-4 border border-danger bg-danger text-white hover:bg-danger-hover duration-300"><i class="fa-solid fa-circle-exclamation mr-2"></i>Block</a>
                                  </div>

									<table id="example" class="display table " style="min-width: 845px">
										<thead>
											<tr>
												<th class="bg-primary-light text-[13px] py-2.5 px-5 text-primary capitalize font-medium bg-none whitespace-nowrap text-left">No</th>
												<th class="bg-primary-light text-[13px] py-2.5 px-5 text-primary capitalize font-medium bg-none whitespace-nowrap text-left">Employee Name</th>
												<th class="bg-primary-light text-[13px] py-2.5 px-5 text-primary capitalize font-medium bg-none whitespace-nowrap text-left">Employee Branch</th>
												<th class="bg-primary-light text-[13px] py-2.5 px-5 text-primary capitalize font-medium bg-none whitespace-nowrap text-left">Employee Phone Number</th>
												<th class="bg-primary-light text-[13px] py-2.5 px-5 text-primary capitalize font-medium bg-none whitespace-nowrap text-left">Employee Status</th>
												<th class="bg-primary-light text-[13px] py-2.5 px-5 text-primary capitalize font-medium bg-none whitespace-nowrap text-left">Employee Salary</th>
												<th class="bg-primary-light text-[13px] py-2.5 px-5 text-primary capitalize font-medium bg-none whitespace-nowrap text-right">Action</th>
											</tr>
										</thead>
										<tbody>
                                        <?php $no = 1; ?>
									<?php foreach($all_employee  as $employees): ?>
											<tr>
												<td class="border-b border-b-color text-[13px] font-normal py-2.5 pl-4 pr-0 whitespace-nowrap"><?= $no++ ?></td>
												<td class="border-b border-b-color text-[13px] font-normal py-2.5 px-5 whitespace-nowrap text-body-color">
													<div class="flex items-center">
                                               <?php

											   if ($employees->empl_sex === 'male') {
												echo '<img src="' . base_url('assets/images/male.png') . '" class="inline-block w-[1.875rem] min-w-[1.875rem] h-[1.875rem] rounded-full relative object-cover" alt="">';
											   }
											   else {
												echo '<img src="' . base_url('assets/images/female.png') . '" class="inline-block w-[1.875rem] min-w-[1.875rem] h-[1.875rem] rounded-full relative object-cover" alt="">';
											}
											   
											 
											 ?>
														
														<p class="ml-2 dark:text-white text-[13px]"><?=  $employees->empl_name ?></p>	
													</div>
												</td>
												<td class="border-b border-b-color text-[13px] py-2.5 pl-4 pr-0 font-normal">
													<div class="flex items-center">
														
															
															<span class="bg-primary-light text-primary text-xs py-[5px] px-3 rounded leading-[1.5]"><?= $employees->blanch_name;  ?></span>
														
													</div>
												</td>
												
												<td class="border-b border-b-color text-[13px] py-2.5 pl-4 pr-0 font-normal">
													<?= $employees->empl_no; ?>
												</td>
												<td class="border-b border-b-color text-[13px] py-2.5 pl-4 pr-0 font-normal">

												<?php if ($employees->empl_status == 'open') {
													?>
													<span class="mr-[0.3125rem] mb-[0.3125rem] inline-block font-medium leading-[1.5] rounded text-xs py-[5px] px-3 border border-transparent text-white bg-success">Active</span>
													<?php }elseif ($employees->empl_status == 'close') {
													?>
															<span class="mr-[0.3125rem] mb-[0.3125rem] inline-block font-medium leading-[1.5] rounded text-xs py-[5px] px-3 border border-transparent text-white bg-danger">Blocked</span>
													 <?php } ?>
													
												</td>
												<td class="border-b border-b-color text-[13px] py-2.5 pl-4 pr-0 font-normal">
													<?= number_format($employees->salary); ?> 
												<td class="border-b border-b-color text-[13px] font-normal py-2.5 px-5 whitespace-nowrap text-body-color">
						                            
	<div class="md:w-1/4 sm:w-1/3 w-1/2">
		<div class="dropdown custom-dropdown inline-block mb-4">
			<div class="btn min-w-[2.4rem] p-[0.4375rem] h-[2.4rem] leading-[1.7] min-h-[2.5rem] btn-primary tp-btn ml-4 hover:bg-primary rounded-md dz-dropdown" data-dz-dropdown="dropdown-<?php echo $employees->empl_id; ?>">
				<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M13.5202 17.4167C13.5202 18.81 12.3927 19.9375 10.9994 19.9375C9.60601 19.9375 8.47852 18.81 8.47852 17.4167C8.47852 16.0233 9.60601 14.8958 10.9994 14.8958C12.3927 14.8958 13.5202 16.0233 13.5202 17.4167ZM9.85352 17.4167C9.85352 18.0492 10.3669 18.5625 10.9994 18.5625C11.6319 18.5625 12.1452 18.0492 12.1452 17.4167C12.1452 16.7842 11.6319 16.2708 10.9994 16.2708C10.3669 16.2708 9.85352 16.7842 9.85352 17.4167Z" fill="var(--primary)"/>
				<path d="M13.5202 4.58369C13.5202 5.97699 12.3927 7.10449 10.9994 7.10449C9.60601 7.10449 8.47852 5.97699 8.47852 4.58369C8.47852 3.19029 9.60601 2.06279 10.9994 2.06279C12.3927 2.06279 13.5202 3.19029 13.5202 4.58369ZM9.85352 4.58369C9.85352 5.21619 10.3669 5.72949 10.9994 5.72949C11.6319 5.72949 12.1452 5.21619 12.1452 4.58369C12.1452 3.95119 11.6319 3.43779 10.9994 3.43779C10.3669 3.43779 9.85352 3.95119 9.85352 4.58369Z" fill="var(--primary)"/>
				<path d="M13.5202 10.9997C13.5202 12.393 12.3927 13.5205 10.9994 13.5205C9.60601 13.5205 8.47852 12.393 8.47852 10.9997C8.47852 9.6063 9.60601 8.4788 10.9994 8.4788C12.3927 8.4788 13.5202 9.6063 13.5202 10.9997ZM9.85352 10.9997C9.85352 11.6322 10.3669 12.1455 10.9994 12.1455C11.6319 12.1455 12.1452 11.6322 12.1452 10.9997C12.1452 10.3672 11.6319 9.8538 10.9994 9.8538C10.3669 9.8538 9.85352 10.3672 9.85352 10.9997Z" fill="var(--primary)"/>
				</svg>
			</div>
			<div class="dz-dropdown-menu absolute translate-x-[-167px] translate-y-2.5 overflow-hidden rounded-md z-[9] bg-white dark:bg-[#182237] shadow-[0_0_3.125rem_0_rgba(82,63,105,0.15)] min-w-[13rem] text-left py-2 hidden" id="dropdown-<?php echo $employees->empl_id; ?>">
				<a class="dropdown-item py-2 px-5 text-body-color text-[13px] text-left block w-full whitespace-nowrap hover:bg-[#f8f9fa] hover:text-primary dark:hover:bg-[#151C2C]" href="<?php echo base_url("admin/profile/{$employees->empl_id}"); ?>">View</a>
				<a class="dropdown-item py-2 px-5 text-body-color text-[13px] text-left block w-full whitespace-nowrap hover:bg-[#f8f9fa] hover:text-primary dark:hover:bg-[#151C2C]" href="<?php echo base_url("admin/privillage/{$employees->empl_id}"); ?>">User Permission</a>
				<?php if ($employees->empl_status == 'open'): ?>
                    <a class="dropdown-item py-2 px-5 text-body-color text-[13px] text-left block w-full whitespace-nowrap hover:bg-[#f8f9fa] hover:text-primary dark:hover:bg-[#151C2C]" href="<?php echo base_url("admin/block_employee/{$employees->empl_id}") ?>">Block</a>
               <?php else: ?>
                    <a class="dropdown-item py-2 px-5 text-body-color text-[13px] text-left block w-full whitespace-nowrap hover:bg-[#f8f9fa] hover:text-primary dark:hover:bg-[#151C2C]" href="<?php echo base_url("admin/unblock_employee/{$employees->empl_id}") ?>">Unblock</a>
               <?php endif; ?>

				<a class="dropdown-item py-2 px-5 text-body-color text-[13px] text-left block w-full whitespace-nowrap hover:bg-[#f8f9fa] hover:text-primary dark:hover:bg-[#151C2C]" href="<?php echo base_url("admin/Unblock_employee/{$employees->empl_id}") ?>" onclick="return confirm('Are you sure?')">
				<span class="kt-nav__link-text">Delete</span>
			</a>
			</div>
		</div>
	</div>
</div>
												</td>
											</tr>
											<?php endforeach ;?>
											
											
										</tbody>
										
									</table>
								</div>
							</div>
						</div>
					</div>
					</div>

<?php include('incs/admin_footer.php');?>

