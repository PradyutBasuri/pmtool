<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="csrf-token" content="F4bg7M6pEEWxNaTup6NoymCaGyPygNrWu4l98oJQ">
        <link rel="icon" href="http://puffinassets.com/demo/epic/hr/laravel/public/assets/images/favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <title>PM-TOOL</title>
        <meta name="description" content="Laravel">
        <meta name="author" content="Laravel">

        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/summernote.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/dropify.min.css')); ?>">
       
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/c3.min.css')); ?>">


        <!-- Custom Css -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/theme1.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrapValidator.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/datatables.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/jquery-confirm.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-datepicker.css')); ?>">
    </head>

    <body class="font-montserrat">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
            </div>
        </div>

        <div id="main_content">

            <div id="header_top" class="header_top">
                <div class="container">
                    <div class="hleft">
                        <a class="header-brand" href="<?php echo e(route('index')); ?>"><i class="fe fe-command brand-logo"></i></a>
                        <div class="dropdown">
                            <a href="#" class="nav-link icon"><i class="fa fa-search"></i></a>
                            <a href="#" class="nav-link icon app_inbox"><i class="fa fa-calendar"></i></a>
                            <a href="#"  class="nav-link icon xs-hide"><i class="fa fa-id-card-o"></i></a>
                            <a href="#"  class="nav-link icon xs-hide"><i class="fa fa-comments-o"></i></a>
                            <a href="#"  class="nav-link icon app_file xs-hide"><i class="fa fa-folder-o"></i></a>
                        </div>
                    </div>
                    <div class="hright">
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fa fa-gear fa-spin" data-toggle="tooltip" data-placement="right" title="Settings"></i></a>
                            <a href="javascript:void(0)" class="nav-link user_btn">
                                <img class="avatar" src="<?php echo e(asset('assets//images/user.png')); ?>" alt="" data-toggle="tooltip" data-placement="right" title="User Menu"/></a>
                            <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fa  fa-align-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="rightsidebar" class="right_sidebar">
                <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings" aria-expanded="true">Settings</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity" aria-expanded="false">Activity</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
                        <div class="mb-4">
                            <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                            <div class="custom-controls-stacked font_setting">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="font" value="font-opensans">
                                    <span class="custom-control-label">Open Sans Font</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="font" value="font-montserrat" checked="">
                                    <span class="custom-control-label">Montserrat Google Font</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="font" value="font-roboto">
                                    <span class="custom-control-label">Robot Google Font</span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h6 class="font-14 font-weight-bold text-muted">Dropdown Menu Icon</h6>
                            <div class="custom-controls-stacked arrow_option">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="marrow" value="arrow-a">
                                    <span class="custom-control-label">A</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="marrow" value="arrow-b">
                                    <span class="custom-control-label">B</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="marrow" value="arrow-c" checked="">
                                    <span class="custom-control-label">C</span>
                                </label>
                            </div>
                            <h6 class="font-14 font-weight-bold mt-4 text-muted">SubMenu List Icon</h6>
                            <div class="custom-controls-stacked list_option">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="listicon" value="list-a" checked="">
                                    <span class="custom-control-label">A</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="listicon" value="list-b">
                                    <span class="custom-control-label">B</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="listicon" value="list-c">
                                    <span class="custom-control-label">C</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                            <ul class="setting-list list-unstyled mt-1 setting_switch">
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Night Mode</span>
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Fix Navbar top</span>
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Header Dark</span>
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Min Sidebar Dark</span>
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Sidebar Dark</span>
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Icon Color</span>
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Gradient Color</span>
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Box Shadow</span>
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">RTL Support</span>
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Box Layout</span>
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="d-block">Storage <span class="float-right">77%</span></label>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                            </div>
                            <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane vivify fadeIn" id="activity" aria-expanded="false">
                        <ul class="new_timeline mt-3">
                            <li>
                                <div class="bullet pink"></div>
                                <div class="time">11:00am</div>
                                <div class="desc">
                                    <h3>Attendance</h3>
                                    <h4>Computer Class</h4>
                                </div>
                            </li>
                            <li>
                                <div class="bullet pink"></div>
                                <div class="time">11:30am</div>
                                <div class="desc">
                                    <h3>Added an interest</h3>
                                    <h4>“Volunteer Activities”</h4>
                                </div>
                            </li>
                            <li>
                                <div class="bullet green"></div>
                                <div class="time">12:00pm</div>
                                <div class="desc">
                                    <h3>Developer Team</h3>
                                    <h4>Hangouts</h4>
                                    <ul class="list-unstyled team-info margin-0 p-t-5">
                                        <li><img src="<?php echo e(asset('assets//images/xs/avatar1.jpg')); ?>" alt="Avatar"></li>
                                        <li><img src="<?php echo e(asset('assets//images/xs/avatar2.jpg')); ?>" alt="Avatar"></li>
                                        <li><img src="<?php echo e(asset('assets//images/xs/avatar3.jpg')); ?>" alt="Avatar"></li>
                                        <li><img src="<?php echo e(asset('assets//images/xs/avatar4.jpg')); ?>" alt="Avatar"></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="bullet green"></div>
                                <div class="time">2:00pm</div>
                                <div class="desc">
                                    <h3>Responded to need</h3>
                                    <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                                </div>
                            </li>
                            <li>
                                <div class="bullet orange"></div>
                                <div class="time">1:30pm</div>
                                <div class="desc">
                                    <h3>Lunch Break</h3>
                                </div>
                            </li>
                            <li>
                                <div class="bullet green"></div>
                                <div class="time">2:38pm</div>
                                <div class="desc">
                                    <h3>Finish</h3>
                                    <h4>Go to Home</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="user_div">
                <h5 class="brand-name mb-4">Epic HR<a href="javascript:void(0)" class="user_btn"><i class="icon-logout"></i></a></h5>
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <img class="avatar avatar-xl mr-3" src="<?php echo e(asset('assets//images/sm/avatar1.jpg')); ?>" alt="avatar">
                            <div class="media-body">
                                <h5 class="m-0">Sara Hopkins</h5>
                                <p class="text-muted mb-0">Webdeveloper</p>
                                <ul class="social-links list-inline mb-0 mt-2">
                                    <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="1234567890"><i class="fa fa-phone"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="@skypename"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Statistics</h3>
                        <div class="card-options">
                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="row">
                                <div class="col-6 pb-3">
                                    <label class="mb-0">Balance</label>
                                    <h4 class="font-30 font-weight-bold">$545</h4>
                                </div>
                                <div class="col-6 pb-3">
                                    <label class="mb-0">Growth</label>
                                    <h4 class="font-30 font-weight-bold">27%</h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Total Income<span class="float-right">77%</span></label>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Total Expenses <span class="float-right">50%</span></label>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label class="d-block">Gross Profit <span class="float-right">23%</span></label>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card b-none">
                    <ul class="list-group">
                        <li class="list-group-item d-flex">
                            <div class="box-icon sm rounded bg-blue"><i class="fa fa-credit-card"></i> </div>
                            <div class="ml-3">
                                <div>+$29 New sale</div>
                                <a href="javascript:void(0)">Admin Template</a>
                                <div class="text-muted font-12">5 min ago</div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex">
                            <div class="box-icon sm rounded bg-pink"><i class="fa fa-upload"></i> </div>
                            <div class="ml-3">
                                <div>Project Update</div>
                                <a href="javascript:void(0)">New HTML page</a>
                                <div class="text-muted font-12">10 min ago</div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex">
                            <div class="box-icon sm rounded bg-teal"><i class="fa fa-file-word-o"></i> </div>
                            <div class="ml-3">
                                <div>You edited the file</div>
                                <a href="javascript:void(0)">reposrt.doc</a>
                                <div class="text-muted font-12">11 min ago</div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex">
                            <div class="box-icon sm rounded bg-cyan"><i class="fa fa-user"></i> </div>
                            <div class="ml-3">
                                <div>New user</div>
                                <a href="javascript:void(0)">Puffin web - view</a>
                                <div class="text-muted font-12">17 min ago</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="left-sidebar" class="sidebar ">
                <h5 class="brand-name">Epic HR <a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul class="metismenu">
                        <li class="g_heading">Hr</li>
                        <li class="active"><a href="<?php echo e(route('index')); ?>"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                        <li class=""><a href="<?php echo e(route('users')); ?>"><i class="icon-users"></i><span>Users</span></a></li>
                        <li class=""><a href="<?php echo e(route('departments')); ?>"><i class="icon-control-pause"></i><span>Departments</span></a></li>
                        <li class=""><a href="<?php echo e(route('employee')); ?>"><i class="icon-user"></i><span>Employee</span></a></li>
                        
                        <li class=""><a href="<?php echo e(route('holidays')); ?>"><i class="icon-like"></i><span>Holidays</span></a></li>
                        
                        
                        
                        
                        <li class="g_heading">Project</li>
                        <li class="">
                            <a href="javascript:void(0)" class="has-arrow arrow-c"><i class="icon-cup"></i><span>Project</span></a>
                            <ul>
                                <li class=""><a href="#">Dashboard</a></li>
                                <li class=""><a href="<?php echo e(route('project_list')); ?>">Project list</a></li>
                                <li class=""><a href="<?php echo e(route('taskboard')); ?>">Taskboard</a></li>
                                <li class=""><a href="<?php echo e(route('ticket_list')); ?>">Ticket List</a></li>
                                <li class=""><a href="<?php echo e(route('ticketdetails')); ?>">Ticket Details</a></li>
                                <li class=""><a href="<?php echo e(route('clients')); ?>">Clients</a></li>
                                <li class=""><a href="<?php echo e(route('todo_list')); ?>">Todo List</a></li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                </nav>
            </div>
        </div>
        <div class="page">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- Scripts -->
       
        <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/lib.vendor.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/lib.vendor.bundle.js')); ?>"></script>
       
        <script src="<?php echo e(asset('assets/js/counterup.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('js/datatables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jquery-confirm.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap-datepicker.js')); ?>"></script>
        <script src="<?php echo e(asset('js/dropify.js')); ?>"></script>
        <script src="<?php echo e(asset('js/dropify.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/apexcharts.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/knobjs.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/c3.bundle.js')); ?>"></script>

        <script src="<?php echo e(asset('assets/js/core.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/project-index.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/summernote.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrapValidator.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/summernote.bundle.js')); ?>"></script>

        <?php echo $__env->yieldContent('script'); ?>

    </body>
</html>
<?php /**PATH D:\laragon\www\pmtool\resources\views/layouts/master.blade.php ENDPATH**/ ?>