<?php include('incs/admin_header.php'); ?>

<?php include('incs/admin_sidebar.php'); ?>

<div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                
     
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
     
<?php if ($das = $this->session->flashdata('errorpass')): ?>
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












             
      
   

                <div class="row">
                <div class="xl:w-1/4 lg:w-1/3 w-full">
						<div class="clearfix">
							<div class="card text-center flex flex-col max-sm:mb-[30px]">
								<div class="card-body">
									<div class="p-12">
										<div class="author-profile text-center">
                                        <div class="relative mx-auto mb-[13px] inline-block">
                                        <?php if ($comp_data->comp_logo == TRUE) : ?>
                                            <img src="<?php echo base_url('assets/img/' . $comp_data->comp_logo); ?>" alt="" class="w-[130px] rounded-full">
                                        <?php else : ?>
                                            <img src="<?php echo base_url('assets/images/no-img-avatar.png'); ?>" alt="" class="w-[130px] rounded-full">
                                        <?php endif; ?>
                                        <div class="upload-link dark:border-[#240d0d1a]" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
                                            <input type="file" class="update-flie">
                                            <i class="fa fa-camera"></i>
                                        </div>
                                        </div>

											<div class="author-info">
												<h6 class="text-[15px] font-medium uppercase"><?php echo $comp_data->comp_name; ?></h6>
												<span class="block text-sm text-body-color"><?php echo $comp_data->adress; ?></span>
											</div>
										</div>
									</div>
									<div class="info-list">
										<ul>
											<li class="flex items-center justify-between border-t border-b-color text-[15px] py-[18px] px-[15px] text-dark dark:text-white"><?php echo $comp_data->comp_email; ?></li>
											<li class="flex items-center justify-between border-t border-b-color text-[15px] py-[18px] px-[30px] text-dark dark:text-white"><?php echo $comp_data->comp_phone; ?></li>
	
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>
                    <div class="xl:w-2/3 w-auto">
                        <div class="card ">
                            <div class="card-body sm:p-5 p-4">
                                <div class="profile-tab">
                                    <div class="dz-tab-area">
                                        <ul class="nav nav-tabs flex flex-wrap border-b border-b-color">
                                        
                                            <li class="nav-item"><a href="#about-me" class="nav-link px-4 py-2 sm:mr-[1.875rem] mr-0 block text-[#828690] sm:text-base text-sm font-medium border-b-[0.0125rem] duration-500 hover:text-primary border-transparent tab-btn" data-tab="tab-two">Company Info</a>
                                            </li>
                                            <li class="nav-item"><a href="#profile-settings" class="nav-link px-4 py-2 sm:mr-[1.875rem] mr-0 block text-[#828690] sm:text-base text-sm font-medium border-b-[0.0125rem] duration-500 hover:text-primary border-transparent tab-btn" data-tab="tab-three">Change Password</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content-area">
                                            
                                            <div  id="tab-two" class="tab-content active show">

                                            <div class="profile-about-me">
                                                    <div class="pt-6 border-bottom-1 pb-4">
                                                

                                                        <?php echo form_open_multipart("admin/update_company_profile/{$comp_data->comp_id}"); ?>
                                                            <div class="row">
                                                                <div class="mb-4 md:w-1/2 w-full">
                                                                    <label class="form-label text-dark">Company Name</label>
                                                                    <input type="text" name="comp_name"  value="<?php echo $comp_data->comp_name; ?>" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full">

                                                                </div>
                                                                <div class="mb-4 md:w-1/2 w-full">
                                                                    <label class="form-label text-dark">Address (eg P.0.Box ***)</label>
                                                                    <input type="text" name="adress" value="<?php echo $comp_data->adress; ?>" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full">
                                                                </div>
                                                            </div>
                                                            <div class="mb-4">
                                                                <label class="form-label text-dark">Company Phone Number</label>
                                                                <input type="text" name="comp_phone" value="<?php echo $comp_data->comp_phone; ?>" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full">
                                                            </div>
                                                            <div class="mb-4">
                                                                <label class="form-label text-dark">Email</label>
                                                                <input type="email" name="comp_email" value="<?php echo $comp_data->comp_email; ?>"  class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full">
                                                            </div>

                                                                                                                    
                                                            <div class="mb-4">
                                                                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Region</label>
                                                                <select id="countries" name="region_id" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full">
                                                                <option value="<?php echo $comp_data->region_id; ?>"><?php echo $comp_data->region_name; ?></option>
                                                            	<?php foreach ($region as $regions): ?>
                                           	                        <option value="<?php echo $regions->region_id; ?>"><?php echo $regions->region_name; ?></option>
                                           	                    <?php endforeach; ?>
                                                                   
                                                                </select>
                                                            </div>
                                                        

                                                          
                                                            <div class="mb-4">
                                                                <label class="form-label text-dark">Company Logo</label>
                                                                <input name="comp_logo"  value="<?php echo $comp_data->comp_logo; ?>"  accept=".png, .jpg, .jpeg"  class="relative text-[13px] h-[2.813rem] file:h-[2.813rem] file:outline-none file:text-body-color file:py-[0.175rem] file:pl-4 file:pr-3 file:bg-[#f8f9fa] dark:file:bg-[#182237] border border-b-color file:border-b-color block rounded-md text-body-color duration-500  outline-none w-full" type="file" id="formFile">
                                                            </div>
                                                          
                                                            <button class="btn py-[0.719rem] max-xl:py-2.5 text-[15px] max-xl:text-[13px] font-medium rounded text-white bg-primary leading-5 inline-block duration-500 hover:bg-primary mb-1 px-[1.563rem] max-xl:px-4 btn-primary" type="submit">Update</button>
                                                        <?php echo form_close(); ?>
                                                       
                                                    </div>
                                                                </div>
                                              
                                            </div>
                                         
                                            <div id="tab-three" class="tab-content">
                                                <div class="pt-6">
                                                
                                                    <div class="settings-form">
                                                        <h4 class="text-primary text-lg mb-2">Password Change</h4>
                                                        <?php echo form_open("admin/change_password"); ?>
                                                           
                                                            <div class="mb-4">
                                                                <label class="form-label text-dark">Current Password</label>
                                                                <input type="password"name="oldpass" placeholder="******" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full" required>
                                                                <?php echo form_error('oldpass', '<p class="text-danger">', '</p>'); ?>
                                                            </div>
                                                            <div class="mb-4">
                                                                <label class="form-label text-dark">New Password</label>
                                                                <input type="password" name="newpass" placeholder="*******" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full" required>
                                                                <?php echo form_error('newpass', '<p class="text-danger">', '</p>'); ?>
                                                            </div>
                                                            <div class="mb-4">
                                                                <label class="form-label text-dark">Confirm Password</label>
                                                                <input type="password" name="passconf" placeholder="*******" class="form-control relative text-[13px] text-body-color h-[2.813rem] border border-b-color block rounded-md py-1.5 px-3 duration-500  outline-none w-full" required>
                                                                <?php echo form_error('passconf', '<p class="text-danger">', '</p>'); ?>
                                                            </div>
                                                            
                                                            
                                                            <button class="btn py-[0.719rem] max-xl:py-2.5 text-[15px] max-xl:text-[13px] font-medium rounded text-white bg-primary leading-5 inline-block duration-500 hover:bg-primary mb-1 px-[1.563rem] max-xl:px-4 btn-primary" type="submit">Change Password</button>
                                                        <?php echo form_close(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<!-- Modal -->
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<?php include('incs/admin_footer.php'); ?>