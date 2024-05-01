<?php include('incs/admin_header.php'); ?>

<?php include('incs/admin_sidebar.php'); ?>


<div class="content-body">

<?php if ($das = $this->session->flashdata('error')): ?>
    <div class=" w-full">	
    <div class="alert py-3 px-4 mb-4 sm:text-sm text-xs rounded-md relative border border-transparent text-danger bg-danger-light dark:bg-[#ff5e5e26] dark:border-[#ff5e5e26]">
		<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
		<strong>Error!</strong> <?php echo $das;?>.
		<button type="button" class="remove-btn absolute right-0 py-5 px-4 top-[-5px] opacity-50 z-[2] dark:text-white"><span><i class="fa-solid fa-xmark scale-[0.9]"></i></span>
		</button>
	</div>
	</div>
<?php endif; ?>
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
            <div class="w-[90%]">
				
                <!-- row -->
                <div class="w-full">
                    
					<div class="w-full">
                        <div class="card z-auto">
                            <div class="card-header flex flex-wrap justify-between items-center sm:p-5 sm:pt-6 p-4 pt-5 max-sm:pb-5 relative z-[2] border-b border-[#E6E6E6] dark:border-[#ffffff1a]">
                                <h4 class="card-title text-base capitalize">Payment Method Setup</h4>
                            </div>
                            <div class="sm:p-5 p-4">
                                <div class="basic-form">
                                    <?php echo form_open("admin/create_account_transaction")?>
                                    <label  class="form-label text-dark"><small class="text-danger">*</small>Payment Name</label>
								    <input type="text" name="account_name" class="relative text-[13px] h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full" placeholder="example CASH">
                                    <input type="hidden" name="comp_id" value="<?php echo $_SESSION['comp_id'] ;?>">
                                    
                                    <div class="sm:py-5 sm:px-10 p-[25px] flex items-center justify justify-center border-t border-b-color">
									<button type="submit" class="btn btn-primary sm:py-[0.719rem] py-2.5 sm:px-[1.563rem] px-4 sm:text-[15px] text-[13px] font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary">Submit</button>
									
								</div>
								<?php echo form_close(); ?>
                                </div>
                            </div>
                            
                        </div>
					</div>
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
												
												<th class="bg-primary-light text-[13px] py-2.5 px-4 text-primary capitalize border-b border-b-color font-medium bg-none whitespace-nowrap text-left">Payment Name</th>
												<th class="bg-primary-light text-[13px] py-2.5 px-4 text-primary capitalize border-b border-b-color font-medium bg-none whitespace-nowrap text-right">Action</th>
											</tr>
										</thead>
										<tbody>

										 <?php foreach($account as $row):?>
											<tr>
												
												<td class="border-b border-[#E6E6E6] dark:border-[#ffffff1a] text-[13px] text-body-color py-2.5 px-5 font-normal uppercase whitespace-nowrap"><?= $row->account_name; ?></td>
                                                <td class="border-b border-[#E6E6E6] dark:border-[#ffffff1a] text-right py-2.5 px-5 whitespace-nowrap">
													<div class="h-[1.55rem] w-[1.55rem] text-xs leading-[1.6rem] text-center cursor-pointer relative inline-block rounded-md bg-primary mr-1">
														<i class="fa-solid fa-pencil text-white"></i>
													</div>
													
												</td>

												
											</tr>
											<?php endforeach ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
        </div>
		



        <?php include('incs/admin_footer.php'); ?>

