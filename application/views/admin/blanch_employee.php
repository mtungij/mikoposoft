
<?php include('incs/admin_header.php'); ?>
<?php include('incs/admin_sidebar.php'); ?>
<div class="content-body">
<div class="overflow-x-auto table-scroll">
        <table id="example3" class="display table" style="min-width: 845px">
            <thead>
                <tr class="bg-transparent">
                    <th class="text-dark py-[0.85rem] px-[0.9375rem] border-b-2 border-solid border-[#E6E6E6] dark:border-[#ffffff1a] capitalize whitespace-nowrap text-base font-medium text-left">S/No</th>
                    <th class="text-dark py-[0.85rem] px-[0.9375rem] border-b-2 border-solid border-[#E6E6E6] dark:border-[#ffffff1a] capitalize whitespace-nowrap text-base font-medium text-left">Branch Name</th>
                    <th class="text-dark py-[0.85rem] px-[0.9375rem] border-b-2 border-solid border-[#E6E6E6] dark:border-[#ffffff1a] capitalize whitespace-nowrap text-base font-medium text-left">Branch Phone Number</th>
                    <th class="text-dark py-[0.85rem] px-[0.9375rem] border-b-2 border-solid border-[#E6E6E6] dark:border-[#ffffff1a] capitalize whitespace-nowrap text-base font-medium text-left">Branch Region</th>
                    <th class="text-dark py-[0.85rem] px-[0.9375rem] border-b-2 border-solid border-[#E6E6E6] dark:border-[#ffffff1a] capitalize whitespace-nowrap text-base font-medium text-left">Branch Status</th>
                    <th class="text-dark py-[0.85rem] px-[0.9375rem] border-b-2 border-solid border-[#E6E6E6] dark:border-[#ffffff1a] capitalize whitespace-nowrap text-base font-medium text-left">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; ?>
		   <?php foreach($blanch as $blanchs): ?>
                <tr class="bg-transparent">
                 <td class="text-body-color bg-transparent xl:py-[0.85rem] py-2 px-[0.9375rem] capitalize whitespace-nowrap xl:text-sm text-[13px] font-normal text-left"><?= $no++ ?></td>
                    <td class="text-body-color bg-transparent xl:py-[0.85rem] py-2 px-[0.9375rem] capitalize whitespace-nowrap xl:text-sm text-[13px] font-normal text-left"><?= $blanchs->blanch_name ?></td>
                    <td class="text-body-color bg-transparent xl:py-[0.85rem] py-2 px-[0.9375rem] capitalize whitespace-nowrap xl:text-sm text-[13px] font-normal text-left"><?= $blanchs->blanch_no ?></td>
                    <td class="text-body-color bg-transparent xl:py-[0.85rem] py-2 px-[0.9375rem] capitalize whitespace-nowrap xl:text-sm text-[13px] font-normal text-left"><?= $blanchs->region_name ?></td>
                    <td class="text-body-color bg-transparent xl:py-[0.85rem] py-2 px-[0.9375rem] capitalize whitespace-nowrap xl:text-sm text-[13px] font-normal text-left"> <span class="text-xs py-[5px] px-3 rounded leading-[1.5] text-success bg-success-light dark:text-white dark:bg-[#3a9b941a]">
                                                                            <i class="fa fa-circle text-success mr-1"></i>
                                                                            Active
                                                                        </span></td>
                    <td class="bg-transparent py-[0.85rem] px-[0.9375rem] capitalize whitespace-nowrap text-[15px] font-normal text-right">
                        <div class="flex">
                            <a href="<?php echo base_url("admin/view_allEmployee/{$blanchs->blanch_id}"); ?>"  class="mr-1 mb-2 inline-block rounded font-medium xl:text-[15px] text-xs leading-5 xl:py-[0.719rem] xl:px-[1.563rem] py-2.5 px-4 border border-primary text-white bg-primary hover:bg-hover-primary hover:border-hover-primary duration-300">
                                <span class="text-primary mt-[-0.3rem] mr-[0.35rem] mb-[-0.2rem] ml-[-0.888rem] pt-[0.3rem] px-[0.6rem] pb-[0.2rem] float-left inline-block rounded bg-white "><i class="fa-solid fa-eye"></i></i>
                                </span>View
                              </a>
                        </div>												
                    </td>												
                </tr>
                <?php endforeach; ?>
      
            </tbody>
        </table>
    </div>
    </div>


<?php include('incs/admin_footer.php'); ?>