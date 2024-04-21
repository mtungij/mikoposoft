<?php include('incs/admin_header.php'); ?>
<?php include('incs/admin_sidebar.php'); ?>

<div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="w-full">
                        <div class="card z-auto">
                            <div class="card-header flex flex-wrap justify-between items-center sm:p-5 sm:pt-6 p-4 pt-5 max-sm:pb-5 relative z-[2]">
                                <h4 class="card-title text-base">Tailwind Modal</h4>
                            </div>
                            <div class="sm:p-5 p-4">
                                     
                                <div class="Tailwind-modal">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary dz-modal-btn mb-2" data-dz-modal="basicModal">Basic modal</button>
                                    <!-- Modal -->
                                    <div class="modal fade fixed top-0 right-0 overflow-y-auto overflow-x-hidden dz-scroll w-full h-full z-[1055]  dz-modal-box model-close" id="basicModal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content flex flex-col relative rounded-md bg-white dark:bg-[#182237] w-full pointer-events-auto">
                                                <div class="modal-header flex justify-between items-center flex-wrap py-4 px-[1.875rem] relative z-[2] border-b border-b-color">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="btn-close p-4 text-xs">
                                                    </button>
                                                </div>
                                                <div class="modal-body relative p-[1.875rem] text-body-color sm:text-sm text-xs">Modal body text goes here.</div>
                                                <div class="modal-footer py-4 px-[1.875rem] flex items-center justify-end flex-wrap border-t border-b-color">
                                                    <button type="button" class="btn btn-danger sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-danger bg-danger-light leading-5 inline-block border border-danger-light duration-500 hover:bg-danger hover:border-danger-light hover:text-white m-1 close-btn">Close</button>
                                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary m-1 save-btn">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary dz-modal-btn mb-2" data-dz-modal="exampleModalLong">Long content Modal</button>
                                    <!-- Modal -->
                                    <div class="modal fade fixed top-0 right-0 overflow-y-auto overflow-x-hidden dz-scroll w-full h-full z-[1055]  dz-modal-box model-close" id="exampleModalLong">
                                        <div class="modal-dialog">
                                            <div class="modal-content flex flex-col relative rounded-md bg-white dark:bg-[#182237] w-full pointer-events-auto">
                                                <div class="modal-header flex justify-between items-center flex-wrap py-4 px-[1.875rem] relative z-[2] border-b border-b-color">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="btn-close p-4 text-xs">
                                                    </button>
                                                </div>
                                                <div class="modal-body relative p-[1.875rem] text-body-color sm:text-sm text-xs">
                                                    <p class="mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p class="mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p class="mb-4">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                                    </p>
                                                    <p class="mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p class="mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p class="mb-4">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                                    </p>
                                                    <p class="mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p class="mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p class="mb-4">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                                    </p>
                                                    <p class="mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p class="mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p class="mb-4">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                                    </p>
                                                    <p class="mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p class="mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p class="mb-4">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                                    </p>
                                                    <p class="mb-4">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p class="mb-4">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p class="mb-4">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                                    </p>
                                                </div>
                                                <div class="modal-footer py-4 px-[1.875rem] flex items-center justify-end flex-wrap border-t border-b-color">
                                                    <button type="button" class="btn btn-danger sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-danger bg-danger-light leading-5 inline-block border border-danger-light duration-500 hover:bg-danger hover:border-danger-light hover:text-white m-1 close-btn">Close</button>
                                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary m-1 save-btn">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary dz-modal-btn mb-2" data-dz-modal="exampleModalCenter">Modal centered</button>
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

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary dz-modal-btn mb-2" data-dz-modal="exampleModalpopover">Modal with tooltip</button>
                                    <!-- Modal -->
                                    <div class="modal fade fixed top-0 right-0 overflow-y-auto overflow-x-hidden dz-scroll w-full h-full z-[1055]  dz-modal-box model-close" id="exampleModalpopover">
                                        <div class="modal-dialog modal-dialog-centered h-full flex items-center py-5" role="document">
                                            <div class="modal-content flex flex-col relative rounded-md bg-white dark:bg-[#182237] w-full pointer-events-auto">
                                                <div class="modal-header flex justify-between items-center flex-wrap py-4 px-[1.875rem] relative z-[2] border-b border-b-color">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="btn-close p-4 text-xs">
                                                    </button>
                                                </div>
                                                <div class="modal-body relative p-[1.875rem] text-body-color sm:text-sm text-xs">
                                                    <h5 class="mb-2">Popover in a modal</h5>
													<p class="mb-4">This 
														<a href="javascript:void(0);" class="py-[5px] px-3 mx-1 bg-secondary text-white rounded text-[13px] leading-[18px] dz-popover" data-dz-popover="popover-right">button
														</a>
														triggers a popover on click.
														<div class="dz-popover-content absolute border-2 border-secondary rounded-lg sm:top-0 min-w-[16.125rem] z-10 shadow-[0_0_1.875rem_0_rgba(0,0,0,0.1)] sm:translate-x-[110px] sm:translate-y-8 right max-sm:hidden hide" id="popover-right">
															<h3 class="popover-header py-2 px-4 bg-secondary text-white font-light sm:text-sm text-xs rounded-ss-md rounded-se-md">Popover title</h3>
														<div class="popover-body p-4 text-body-color sm:text-xs text-[10px] bg-white dark:bg-[#182237] leading-[1.5] rounded-es-md rounded-ee-md">Popover body content is set in this attribute.</div>
														</div>
													</p>
                                                    <hr>
                                                    <h5 class="mb-2">Tooltips in a modal</h5>
                                                    <p class="mb-6"><a href="javascript:void(0);" class="tooltip-test text-primary" data-bs-toggle="tooltip" title="Told you!">This link</a> and <a href="javascript:void(0);" class="tooltip-test text-primary" data-bs-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p>

                                                </div>
                                                <div class="modal-footer py-4 px-[1.875rem] flex items-center justify-end flex-wrap border-t border-b-color">
                                                    <button type="button" class="btn btn-danger sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-danger bg-danger-light leading-5 inline-block border border-danger-light duration-500 hover:bg-danger hover:border-danger-light hover:text-white m-1 close-btn">Close</button>
                                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary m-1 save-btn">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary mr-1 dz-modal-btn mb-2" data-dz-modal="modalGrid">Grid Inside Modal</button>
                                    <!-- Modal -->
                                    <div class="modal fade fixed top-0 right-0 overflow-y-auto overflow-x-hidden dz-scroll w-full h-full z-[1055]  dz-modal-box model-close" id="modalGrid">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content flex flex-col relative rounded-md bg-white dark:bg-[#182237] w-full pointer-events-auto">
                                                <div class="modal-header flex justify-between items-center flex-wrap py-4 px-[1.875rem] relative z-[2] border-b border-b-color">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="btn-close p-4 text-xs">
                                                    </button>
                                                </div>
                                                <div class="modal-body relative p-[1.875rem] text-body-color sm:text-sm text-xs">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="md:w-1/3">.col-md-4</div>
                                                            <div class="md:w-1/3 ml-auto">.col-md-4 .ml-auto</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="md:w-1/4 ml-auto">.col-md-3 .ml-auto</div>
                                                            <div class="md:w-1/6 ml-auto">.col-md-2 .ml-auto</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="md:w-1/2 ml-auto">.col-md-6 .ml-auto</div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="sm:w-3/4">Level 1: .col-sm-9
                                                                <div class="row">
                                                                    <div class="w-2/3 sm:w-1/2">Level 2: .col-8 .col-sm-6
                                                                    </div>
                                                                    <div class="w-1/3 sm:w-1/2">Level 2: .col-4 .col-sm-6
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer py-4 px-[1.875rem] flex items-center justify-end flex-wrap border-t border-b-color">
                                                    <button type="button" class="btn btn-danger sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-danger bg-danger-light leading-5 inline-block border border-danger-light duration-500 hover:bg-danger hover:border-danger-light hover:text-white m-1 close-btn">Close</button>
                                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary m-1 save-btn">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Large modal -->
                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary dz-modal-btn mb-2" data-dz-modal="bd-example-modal-lg">Large modal</button>
                                    <div class="modal fade fixed top-0 right-0 overflow-y-auto overflow-x-hidden dz-scroll w-full h-full z-[1055]  dz-modal-box model-close bd-example-modal-lg" id="bd-example-modal-lg">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content flex flex-col relative rounded-md bg-white dark:bg-[#182237] w-full pointer-events-auto">
                                                <div class="modal-header flex justify-between items-center flex-wrap py-4 px-[1.875rem] relative z-[2] border-b border-b-color">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="btn-close p-4 text-xs">
                                                    </button>
                                                </div>
                                                <div class="modal-body relative p-[1.875rem] text-body-color sm:text-sm text-xs">Modal body text goes here.</div>
                                                <div class="modal-footer py-4 px-[1.875rem] flex items-center justify-end flex-wrap border-t border-b-color">
                                                    <button type="button" class="btn btn-danger sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-danger bg-danger-light leading-5 inline-block border border-danger-light duration-500 hover:bg-danger hover:border-danger-light hover:text-white m-1 close-btn">Close</button>
                                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary m-1 save-btn">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Small modal -->
                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary dz-modal-btn mb-2" data-dz-modal="bd-example-modal-sm">Small modal</button>
                                    <div class="modal fade fixed top-0 right-0 overflow-y-auto overflow-x-hidden dz-scroll w-full h-full z-[1055]  dz-modal-box model-close bd-example-modal-sm" id="bd-example-modal-sm">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content flex flex-col relative rounded-md bg-white dark:bg-[#182237] w-full pointer-events-auto">
                                                <div class="modal-header flex justify-between items-center flex-wrap py-4 px-[1.875rem] relative z-[2] border-b border-b-color">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="btn-close p-4 text-xs">
                                                    </button>
                                                </div>
                                                <div class="modal-body relative p-[1.875rem] text-body-color sm:text-sm text-xs">Modal body text goes here.</div>
                                                <div class="modal-footer py-4 px-[1.875rem] flex items-center justify-end flex-wrap border-t border-b-color">
                                                    <button type="button" class="btn btn-danger sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-danger bg-danger-light leading-5 inline-block border border-danger-light duration-500 hover:bg-danger hover:border-danger-light hover:text-white m-1 close-btn">Close</button>
                                                    <button type="button" class="btn btn-primary sm:py-[0.719rem] px-4 sm:px-[1.563rem] py-2.5 sm:text-[15px] text-xs font-medium rounded text-white bg-primary leading-5 inline-block border border-primary duration-500 hover:bg-hover-primary hover:border-hover-primary m-1 save-btn">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include('incs/admin_footer.php'); ?>
