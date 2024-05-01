
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
                            <h4 class="ml-4 px-4 pt-2">Create Loan Capital</h4>
                            <hr>

						<?php echo form_open("admin/create_capital")?>
								<div class="sm:p-10 sm:pb-2.5 p-[25px] pb-0">
									<div class="row">
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2"><small class="text-danger">*</small>Select Shareholder Name</label>
											<select id="countries" name="share_id" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full"required>
                                                <option value="">Select Shareholder</option>
											<?php foreach ($share as $shareholder): ?>
											<option value="<?php echo $shareholder->share_id; ?>"><?php echo $shareholder->share_name; ?></option>
											<?php endforeach; ?>
										</select>
                                            <input>
										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2"><small class="text-danger">*</small>Capital Amount</label>
                                            <input x-data x-mask:dynamic="$money($input)" name="amount"  class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full"required>
										</div>
										<div class="sm:w-1/2 w-full mb-[30px]">
											<label class="text-dark dark:text-white text-[13px] mb-2"><small class="text-danger">*</small>Payment Mode</label>
											<select id="countries" name="pay_method" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full"required>
                                                <option value="">Select Payment type</option>
											<?php foreach ($account as $accounts): ?>
											<option value="<?php echo $accounts->trans_id; ?>"><?php echo $accounts->account_name; ?></option>
											<?php endforeach; ?>
										</select>
										</div>
										
										<input type="hidden" name="comp_id" value="<?php echo $_SESSION['comp_id']; ?>">
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
                                        <h4 class="text-base">Capital Summary Report</h4>
									</div>
									<table id="example" class="table w-full ">
										<thead>
											<tr>
												<th class="bg-primary-light text-[13px] py-2.5 px-4 text-primary capitalize border-b border-b-color font-medium bg-none whitespace-nowrap text-left">S/no</th>
												<th class="bg-primary-light text-[13px] py-2.5 px-4 text-primary capitalize border-b border-b-color font-medium bg-none whitespace-nowrap text-left">Shareholder Name</th>
												<th class="bg-primary-light text-[13px] py-2.5 px-4 text-primary capitalize border-b border-b-color font-medium bg-none whitespace-nowrap text-left">Balance Amount</th>
												<th class="bg-primary-light text-[13px] py-2.5 px-4 text-primary capitalize border-b border-b-color font-medium bg-none whitespace-nowrap text-left">Payment Method</th>
												<th class="bg-primary-light text-[13px] py-2.5 px-4 text-primary capitalize border-b border-b-color font-medium bg-none whitespace-nowrap text-right">Action</th>
											</tr>
										</thead>
										<tbody>
                                            <?php $no= 1; ?>
                                        <?php foreach ($capital as $capitals): ?>
																				<tr>
												<td class="text-[13px] font-normal text-body-color py-2.5 pl-4 pr-0 whitespace-nowrap border-b border-[#E6E6E6] dark:border-[#ffffff1a]"><?= $no++ ?></td>
												<td class="text-[13px] font-normal uppercase text-body-color py-2.5 pl-4 pr-0 whitespace-nowrap border-b border-[#E6E6E6] dark:border-[#ffffff1a]"><?= $capitals->share_name ?></td>
												<td class="border-b border-[#E6E6E6] dark:border-[#ffffff1a] text-[13px] text-body-color py-2.5 px-5 font-normal whitespace-nowrap"><?= number_format($capitals->amount)?></td>
												<td class="border-b border-[#E6E6E6] dark:border-[#ffffff1a] text-[13px] text-body-color py-2.5 px-5 font-normal whitespace-nowrap"><?= $capitals->account_name ?></td>
							

                                            <td class="border-b border-[#E6E6E6] dark:border-[#ffffff1a] text-right py-2.5 px-5 whitespace-nowrap">
												<div class="md:w-1/4 sm:w-1/3 w-1/2">
                                                    <div class="dropdown custom-dropdown inline-block mb-4">
                                                        <div class="btn min-w-[2.4rem] p-[0.4375rem] h-[2.4rem] leading-[1.7] min-h-[2.5rem] btn-primary tp-btn ml-4 hover:bg-primary rounded-md dz-dropdown" data-dz-dropdown="<?php echo $capitals->capital_id ?>">
                                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.5202 17.4167C13.5202 18.81 12.3927 19.9375 10.9994 19.9375C9.60601 19.9375 8.47852 18.81 8.47852 17.4167C8.47852 16.0233 9.60601 14.8958 10.9994 14.8958C12.3927 14.8958 13.5202 16.0233 13.5202 17.4167ZM9.85352 17.4167C9.85352 18.0492 10.3669 18.5625 10.9994 18.5625C11.6319 18.5625 12.1452 18.0492 12.1452 17.4167C12.1452 16.7842 11.6319 16.2708 10.9994 16.2708C10.3669 16.2708 9.85352 16.7842 9.85352 17.4167Z" fill="var(--primary)"/>
                                                            <path d="M13.5202 4.58369C13.5202 5.97699 12.3927 7.10449 10.9994 7.10449C9.60601 7.10449 8.47852 5.97699 8.47852 4.58369C8.47852 3.19029 9.60601 2.06279 10.9994 2.06279C12.3927 2.06279 13.5202 3.19029 13.5202 4.58369ZM9.85352 4.58369C9.85352 5.21619 10.3669 5.72949 10.9994 5.72949C11.6319 5.72949 12.1452 5.21619 12.1452 4.58369C12.1452 3.95119 11.6319 3.43779 10.9994 3.43779C10.3669 3.43779 9.85352 3.95119 9.85352 4.58369Z" fill="var(--primary)"/>
                                                            <path d="M13.5202 10.9997C13.5202 12.393 12.3927 13.5205 10.9994 13.5205C9.60601 13.5205 8.47852 12.393 8.47852 10.9997C8.47852 9.6063 9.60601 8.4788 10.9994 8.4788C12.3927 8.4788 13.5202 9.6063 13.5202 10.9997ZM9.85352 10.9997C9.85352 11.6322 10.3669 12.1455 10.9994 12.1455C11.6319 12.1455 12.1452 11.6322 12.1452 10.9997C12.1452 10.3672 11.6319 9.8538 10.9994 9.8538C10.3669 9.8538 9.85352 10.3672 9.85352 10.9997Z" fill="var(--primary)"/>
                                                            </svg>
                                                        </div>
                                                        <div class="dz-dropdown-menu absolute translate-x-[-167px] translate-y-2.5 overflow-hidden rounded-md z-[9] bg-white dark:bg-[#182237] shadow-[0_0_3.125rem_0_rgba(82,63,105,0.15)] min-w-[13rem] text-left py-2 hidden" id="<?php echo $capitals->capital_id ?>">
                                                            <a href="#" class="dropdown-item py-2 px-5 text-body-color text-[13px] text-left block w-full whitespace-nowrap hover:bg-[#f8f9fa] hover:text-primary dark:hover:bg-[#151C2C]"  data-dz-modal="exampleModalCenter">
                                                            <i class="fa-solid fa-pen-to-square" style="color:blue"></i>
                                                                    Edit
                                                            </a>
                                                        </div>
                                                    </div>
	                                            </div>
											</td>
											</tr>
                                            <?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>



            
    </div>
    </div>

                                                           
                                    <!-- Modal -->
                                    <div class="modal fade fixed top-0 right-0 overflow-y-auto overflow-x-hidden dz-scroll w-full h-full z-[1055]  dz-modal-box model-close" id="exampleModalCenter">
                                        <div class="modal-dialog modal-dialog-centered h-full flex items-center py-5" role="document">
                                            <div class="modal-content flex flex-col relative rounded-md bg-white dark:bg-[#182237] w-full pointer-events-auto">
                                                <div class="modal-header flex justify-between items-center flex-wrap py-4 px-[1.875rem] relative z-[2] border-b border-b-color">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="btn-close p-4 text-xs">
                                                    </button>
                                                </div>
                                                <div class="modal-body relative p-[1.875rem] text-body-color sm:text-sm text-xs">
                                                    <p class="mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                </div>
                                                <div class="modal-footer py-4 px-[1.875rem] flex items-center justify-end flex-wrap border-t border-b-color">
                                                    <button type="button" class="btn btn-danger sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-danger bg-danger-light leading-5 inline-block border border-danger-light duration-500 hover:bg-danger hover:border-danger-light hover:text-white m-1 close-btn">Close</button>
                                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary m-1 save-btn">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
														




                                                            <?php include('incs/admin_footer.php'); ?>


                                                            