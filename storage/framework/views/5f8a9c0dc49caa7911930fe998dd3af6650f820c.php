<?php $__env->startSection('content'); ?>

<style>
    .dropdown-menu {
        /* right: 67%;*/
        /* left: auto; */
        min-width: 0px !important;
        width: 230px !important;
        padding: 1em !important;
    }
</style>
<div id="page_top" class="section-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="left">
                <h1 class="page-title">Employee</h1>

            </div>
            <div class="right">
                <ul class="nav nav-pills">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><img class="w20 mr-2" src="../assets/images/flags/us.svg">English</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><img class="w20 mr-2" src="../assets/images/flags/es.svg">Spanish</a>
                            <a class="dropdown-item" href="#"><img class="w20 mr-2" src="../assets/images/flags/jp.svg">japanese</a>
                            <a class="dropdown-item" href="#"><img class="w20 mr-2" src="../assets/images/flags/bl.svg">France</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-excel-o"></i> MS Excel</a>
                            <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-word-o"></i> MS Word</a>
                            <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-pdf-o"></i> PDF</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Project</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Graphics Design</a>
                            <a class="dropdown-item" href="#">Angular Admin</a>
                            <a class="dropdown-item" href="#">PSD to HTML</a>
                            <a class="dropdown-item" href="#">iOs App Development</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Home Development</a>
                            <a class="dropdown-item" href="#">New Blog post</a>
                        </div>
                    </li>
                </ul>
                <div class="notification d-flex">
                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <ul class="right_chat list-unstyled w250 p-0">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Donald Gardner</span>
                                                <span class="message">Designer, Blogger</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Wendy Keen</span>
                                                <span class="message">Java Developer</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Matt Rosales</span>
                                                <span class="message">CEO, Epic Theme</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Phillip Smith</span>
                                                <span class="message">Writter, Mag Editor</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                        </div>
                    </div>
                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <ul class="list-unstyled feeds_widget">
                                <li>
                                    <div class="feeds-left"><i class="fa fa-check"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                        <small>WE have fix all Design bug with Responsive</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-user"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                                        <small>I feel great! Thanks team</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                        <small>It will give a smart finishing to your site</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                                        <small>Your connection is not private</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                                        <small>You received a new oder from Tina.</small>
                                    </div>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                        </div>
                    </div>
                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="page-profile.html"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                            <a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
                            <a class="dropdown-item" href="javascript:void(0)"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                            <a class="dropdown-item" href="login.html"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" id="Employee-tab" data-toggle="tab" href="#Employee-list">All</a></li>
                <li class="nav-item"><a class="nav-link" id="Employee-tab" data-toggle="tab" href="#Employee-Request">Leave Request</a></li>
            </ul>
            <div class="header-action">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-plus mr-2"></i>Add</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body w_sparkline">
                        <div class="details">
                            <span>Total Employee</span>
                            <h3 class="mb-0 counter">614</h3>
                        </div>
                        <div class="w_chart">
                            <span id="mini-bar-chart1" class="mini-bar-chart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body w_sparkline">
                        <div class="details">
                            <span">New Employee</span>
                                <h3 class="mb-0 counter">124</h3>
                        </div>
                        <div class="w_chart">
                            <span id="mini-bar-chart2" class="mini-bar-chart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body w_sparkline">
                        <div class="details">
                            <span>Male</span>
                            <h3 class="mb-0 counter">504</h3>
                        </div>
                        <div class="w_chart">
                            <span id="mini-bar-chart3" class="mini-bar-chart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body w_sparkline">
                        <div class="details">
                            <span>Female</span>
                            <h3 class="mb-0 counter">110</h3>
                        </div>
                        <div class="w_chart">
                            <span id="mini-bar-chart4" class="mini-bar-chart"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-body">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="Employee-list" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Employee List</h3>
                        <div class="card-options">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
                                    <span class="input-group-btn ml-2"><button class="btn btn-icon btn-sm" type="submit"><span class="fe fe-search"></span></button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover notice-types-table" id="list-employee">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Mobile No</th>
                                        <th>Employee ID</th>
                                        <th>Department Name</th>
                                        <th>Join Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="Employee-Request" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover notice-types-table" id="list-leave">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Employee ID</th>
                                        <th>Leave Type</th>
                                        <th>Date</th>
                                        <th>Reason</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-body">
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    Copyright © 2019 <a href="https://themeforest.net/user/puffintheme/portfolio">PuffinTheme</a>.
                </div>
                <div class="col-md-6 col-sm-12 text-md-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="javascript:void(0)">Documentation</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>


<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <?php echo Form::open(['url' => '', 'method' => 'post' ,'name' => 'employeesave', 'id'=>'employeesave','class'=>'employeesave']); ?>

            <?php echo Form::hidden('code','',['class' => 'form-control','id'=>'code', 'placeholder' => 'User Name','autocomplete'=>'off']); ?>

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <?php echo Form::text('user_name',null,['class' => 'form-control','id'=>'user_name', 'placeholder' => 'User Name','autocomplete'=>'off']); ?>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <?php echo Form::password('password',['class' => 'form-control','id'=>'password', 'placeholder' => 'Password','autocomplete'=>'off']); ?>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <?php echo Form::password('cpassword',['class' => 'form-control','id'=>'cpassword', 'placeholder' => 'Confirm Password','autocomplete'=>'off']); ?>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <?php echo Form::text('first_name',null,['class' => 'form-control','id'=>'first_name', 'placeholder' => 'First Name','autocomplete'=>'off']); ?>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <?php echo Form::text('last_name',null,['class' => 'form-control','id'=>'last_name', 'placeholder' => 'Last Name','autocomplete'=>'off']); ?>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <?php echo Form::select('gender', [' '=>'Select Gender','M' => 'Male', 'F' => 'Female','o'=> 'Other'],null,['id'=>'gender','class'=>'form-control']); ?>


                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <?php echo Form::text('mob_no',null,['class' => 'form-control','id'=>'mob_no', 'placeholder' => 'Mobile No.','autocomplete'=>'off']); ?>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <?php echo Form::text('email',null,['class' => 'form-control','id'=>'email', 'placeholder' => 'Email Address.','autocomplete'=>'off']); ?>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <?php echo Form::select('roll_type', [' '=>'Select Roll Type', '1' => 'Employee','2'=> 'Client'],null,['id'=>'roll_type','class'=>'form-control']); ?>

                        </div>
                    </div>
                    <div class="row" id="roll_details" style="display:none;">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <?php echo Form::text('joining_date',null,['class' => 'form-control','id'=>'joining_date', 'placeholder' => 'Select join date','autocomplete'=>'off']); ?>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <?php echo Form::text('employee_id',null,['class' => 'form-control','id'=>'employee_id', 'placeholder' => 'Enter Employee Id','autocomplete'=>'off']); ?>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <?php echo Form::select('emp_department_type', $deptData,[],['id'=>'emp_department_type','class'=>'form-control','placeholder'=>'Select Department']); ?>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <?php echo Form::text('emp_facebook_link',null,['class' => 'form-control','id'=>'emp_facebook_link', 'placeholder' => 'Facebook','autocomplete'=>'off']); ?>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <?php echo Form::text('emp_twitter_link',null,['class' => 'form-control','id'=>'emp_twitter_link', 'placeholder' => 'Twitter','autocomplete'=>'off']); ?>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <?php echo Form::text('emp_linkedin_link',null,['class' => 'form-control','id'=>'emp_linkedin_link', 'placeholder' => 'Linkedin','autocomplete'=>'off']); ?>

                            </div>
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="form-group mt-2 mb-3">
                            <input type="file" class="dropify" id="up_image">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                    </div>



                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <?php echo Form::submit('Save changes',['class' => 'btn btn-primary','type'=>'submit','id'=>'save']); ?>

            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    $(document).ready(function() {
        create_table();
        $("#joining_date").datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy',
            todayHighlight: true
        }).on('change', function(e) {
            // Revalidate the date field
            $('#employeesave').bootstrapValidator('revalidateField', 'joining_date');

        });

        $('#roll_type').change(function() {
            var roll_type = $('#roll_type').val();
            change_roll(roll_type);
        });
        $('#exampleModal').on('shown.bs.modal', function() {
            $('#employeesave')[0].reset();
            $('#roll_details').hide();
        })

        $('#employeesave').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: '',
                invalid: '',
                validating: '',
            },
            fields: {
                user_name: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter User Name',
                        },

                    }
                },
                first_name: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter First Name',
                        },

                    }
                },
                last_name: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Last Name',
                        },

                    }
                },
                password: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Password',
                        },
                        identical: {
                            field: 'cpassword',
                            message: 'The password and its confirm are not the same'
                        }

                    }
                },
                cpassword: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Confirm Password',
                        },
                        identical: {
                            field: 'password',
                            message: 'The password and its confirm are not the same'
                        }

                    }
                },
                gender: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Select Gender',
                        },

                    }
                },
                mob_no: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Mobile No',
                        },

                    }
                },
                email: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Email Address',
                        },
                        emailAddress: {
                            message: 'The value is not a valid email address'
                        }

                    }
                },
                roll_type: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Select Roll Type',
                        },

                    }
                },
                emp_department_type: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Select Dept. Type',
                        },

                    }
                },
                emp_facebook_link: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Facebook Link',
                        },

                    }
                },
                emp_linkedin_link: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Linkedin Link',
                        },

                    }
                },
                emp_twitter_link: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Twitter Link',
                        },

                    }
                },
                // joining_date:{
                //     validators: {
                //     date: {
                //         format: 'DD/MM/YYYY',
                //         message: 'The format is dd/mm/yyyy'
                //     },
                //     notEmpty: {
                //         message: 'The field can not be empty'
                //     }
                // }
                // },
                employee_id: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Employee Id',
                        },

                    }
                }

            }
        }).on('success.form.bv', function(e) {
            e.preventDefault();
            employeeSave();
        });

        var table = $('#list-employee').DataTable();
        table.on('draw.dt', function() {

            $('.edit-button').click(function() {
                var edit_code = this.id;
                $.ajax({
                    type: 'post',
                    url: "<?php echo e(route('employeeEditData')); ?>",
                    data: {
                        'edit_code': edit_code,
                        '_token': '<?php echo e(csrf_token()); ?>'
                    },
                    dataType: 'json',
                    success: function(datam) {
                        if (datam.status == 1) {
                            var base_url = window.location.hostname;
                            var pageURL = $(location).attr("href");
                            // alert(pageURL)
                            $('#exampleModal').modal('show')
                            $('#code').val(datam.tbl_user.id);
                            $('#user_name').val(datam.tbl_user.user_name);
                            $('#first_name').val(datam.tbl_user.first_name);
                            $('#last_name').val(datam.tbl_user.last_name);
                            $('#gender').val(datam.tbl_user.gender);
                            $('#mob_no').val(datam.tbl_user.mob_no);
                            $('#email').val(datam.tbl_user.email);
                            $('#joining_date').val(datam.date);
                            $('#roll_type').val(datam.tbl_user.roll_type);
                            change_roll(datam.tbl_user.roll_type);
                            $('#employee_id').val(datam.tbl_user.employee_id);
                            $('#emp_department_type').val(datam.tbl_user.emp_department_type);
                            $('#emp_facebook_link').val(datam.tbl_user.emp_facebook_link);
                            $('#emp_twitter_link').val(datam.tbl_user.emp_twitter_link);
                            $('#emp_linkedin_link').val(datam.tbl_user.emp_linkedin_link);
                            //     jQuery("#up_image").attr('src', 'user_image/'+datam.tbl_user.emp_image);
                            //   $(".dropify-render").append('<img src="user_image/'+datam.tbl_user.emp_image+'">');
                            // $('#up_image').html('<img src="localhost/pmtool/public/user_image/'+datam.tbl_user.emp_image+'" />');
                            // $('#up_image').val(datam.tbl_user.emp_image);


                        } else {
                            $.confirm({
                                type: 'red',
                                icon: 'fa fa-warning',
                                title: 'Error!!',
                                content: '<strong>SUCCESS:</strong> Failed to delete data.'
                            });
                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        var msg = "<strong>Failed to Delete data.</strong><br/>";
                        if (jqXHR.status !== 422 && jqXHR.status !== 400) {
                            msg += "<strong>" + jqXHR.status + ": " + errorThrown + "</strong>";
                        } else {
                            if (jqXHR.responseJSON.hasOwnProperty('exception')) {
                                if (jqXHR.responseJSON.exception_code == 23000) {
                                    msg += "Data Already Used!! Cannot Be Deleted.";
                                }
                            } else {
                                msg += "Error(s):<strong><ul>";
                                $.each(jqXHR.responseJSON, function(key, value) {
                                    msg += "<li>" + value + "</li>";
                                });
                                msg += "</ul></strong>";
                            }
                        }
                        $.alert({
                            type: 'red',
                            icon: 'fa fa-warning',
                            title: 'Error!!',
                            content: msg
                        });

                    }
                });
            });

            $('.delete-button').click(function() {

                var reply = confirm('Are you sure to delete the record?');
                if (!reply) {
                    return false;
                }
                var dlt_code = this.id;
                $.ajax({
                    type: 'post',
                    url: "<?php echo e(route('employeeUserDelete')); ?>",
                    data: {
                        'dlt_code': dlt_code,
                        '_token': $('input[name="_token"]').val()
                    },
                    dataType: 'json',
                    success: function(datam) {
                        if (datam.status == 1) {
                            $.confirm({
                                type: 'green',
                                icon: 'fa fa-check',
                                title: 'Success!!',
                                content: '<strong>SUCCESS:</strong> Record deleted successfully.'
                            });
                        } else {
                            $.confirm({
                                type: 'red',
                                icon: 'fa fa-warning',
                                title: 'Error!!',
                                content: '<strong>SUCCESS:</strong> Failed to delete data.'
                            });
                        }
                        create_table();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        var msg = "<strong>Failed to Delete data.</strong><br/>";
                        if (jqXHR.status !== 422 && jqXHR.status !== 400) {
                            msg += "<strong>" + jqXHR.status + ": " + errorThrown + "</strong>";
                        } else {
                            if (jqXHR.responseJSON.hasOwnProperty('exception')) {
                                if (jqXHR.responseJSON.exception_code == 23000) {
                                    msg += "Data Already Used!! Cannot Be Deleted.";
                                }
                            } else {
                                msg += "Error(s):<strong><ul>";
                                $.each(jqXHR.responseJSON, function(key, value) {
                                    msg += "<li>" + value + "</li>";
                                });
                                msg += "</ul></strong>";
                            }
                        }
                        $.alert({
                            type: 'red',
                            icon: 'fa fa-warning',
                            title: 'Error!!',
                            content: msg
                        });

                    }
                });

            });
        });


        var table = $('#list-leave').DataTable();
        table.on('draw.dt', function() {

            $('.approve-button').click(function() {
                var approve_code = this.id;
                $.ajax({
                    type: 'post',
                    url: "<?php echo e(route('leaveStatusChanged')); ?>",
                    data: {
                        'approve_code': approve_code,
                        '_token': $('input[name="_token"]').val()
                    },
                    dataType: 'json',
                    success: function(datam) {
                        $.confirm({
                            type: 'green',
                            icon: 'fa fa-check',
                            title: 'Success!!',
                            content: '<strong>SUCCESS:</strong> Approved successfully.',
                            buttons: {
                                ok: function() {
                                    leave_list();
                                }

                            }
                        });

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        var msg = "<strong>Failed to Delete data.</strong><br/>";
                        if (jqXHR.status !== 422 && jqXHR.status !== 400) {
                            msg += "<strong>" + jqXHR.status + ": " + errorThrown + "</strong>";
                        } else {
                            if (jqXHR.responseJSON.hasOwnProperty('exception')) {
                                if (jqXHR.responseJSON.exception_code == 23000) {
                                    msg += "Data Already Used!! Cannot Be Deleted.";
                                }
                            } else {
                                msg += "Error(s):<strong><ul>";
                                $.each(jqXHR.responseJSON, function(key, value) {
                                    msg += "<li>" + value + "</li>";
                                });
                                msg += "</ul></strong>";
                            }
                        }
                        $.alert({
                            type: 'red',
                            icon: 'fa fa-warning',
                            title: 'Error!!',
                            content: msg
                        });

                    }
                });

            });

        });
    });

    function change_roll(roll_type) {
        if (roll_type == 1) {
            $('#roll_details').show();
        } else {
            $('#roll_details').hide();
            $('#joining_date').val('');
            $('#employee_id').val('');
            $('#emp_department_type').val('');
            $('#emp_facebook_link').val('');
            $('#emp_twitter_link').val('');
            $('#emp_linkedin_link').val('');
        }
    }

    function create_table() {

        $("#list-employee").dataTable().fnDestroy();
        $('#list-employee').dataTable({

            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo e(route('employeeUsersDatatable')); ?>",
                type: "post",
                data: {
                    '_token': $('input[name="_token"]').val()
                },
                dataSrc: "record_details",
            },
            "dataType": 'json',
            "columnDefs": [{
                    className: "table-text",
                    "targets": "_all"
                },
                {
                    "targets": 0,
                    "data": "id",
                    "defaultContent": "",
                    "searchable": false,
                    "sortable": false,
                },
                {
                    "targets": 1,
                    "data": "first_name",
                    "searchable": true,
                    "sortable": true,
                },
                {
                    "targets": 2,
                    "data": "mob_no",
                    "searchable": true,
                    "sortable": true,
                },
                {
                    "targets": 3,
                    "data": "employee_id",
                    "searchable": true,
                    "sortable": true,
                },
                {
                    "targets": 4,
                    "data": "dept_name",
                    "searchable": true,
                    "sortable": true,
                },
                {
                    "targets": 5,
                    "data": "joining_date",
                    "searchable": true,
                    "sortable": true,
                },
                {
                    "targets": -1,
                    "data": 'action',
                    "searchable": false,
                    "sortable": false,
                },
            ],
            "fnInitComplete": function() {
                leave_list();
            }

        });


    }

    function leave_list() {
        $("#list-leave").dataTable().fnDestroy();
        $('#list-leave').dataTable({

            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo e(route('leavesDatatable')); ?>",
                type: "post",
                data: {
                    '_token': $('input[name="_token"]').val()
                },
                dataSrc: "record_details",
            },
            "dataType": 'json',
            "columnDefs": [{
                    className: "table-text",
                    "targets": "_all"
                },
                {
                    "targets": 0,
                    "data": "id",
                    "defaultContent": "",
                    "searchable": false,
                    "sortable": false,
                },
                {
                    "targets": 1,
                    "data": "first_name",
                    "searchable": true,
                    "sortable": true,
                },
                {
                    "targets": 2,
                    "data": "employee_id",
                    "searchable": true,
                    "sortable": true,
                },
                {
                    "targets": 3,
                    "data": "leave_type",
                    "searchable": true,
                    "sortable": true,
                },
                {
                    "targets": 4,
                    "data": "date",
                    "searchable": true,
                    "sortable": true,
                },
                {
                    "targets": 5,
                    "data": "reason",
                    "searchable": true,
                    "sortable": true,
                },
                {
                    "targets": -1,
                    "data": 'action',
                    "searchable": false,
                    "sortable": false,
                },
            ]


        });
    }

    function employeeSave() {
        $('.page-loader-wrapper').show();

        var user_name = $('#user_name').val();
        var password = $('#password').val();
        var cpassword = $('#cpassword').val();
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var gender = $('#gender').val();
        var mob_no = $('#mob_no').val();
        var email = $('#email').val();
        var roll_type = $('#roll_type').val();
        var emp_department_type = $('#emp_department_type').val();
        var emp_facebook_link = $('#emp_facebook_link').val();
        var emp_twitter_link = $('#emp_twitter_link').val();
        var emp_linkedin_link = $('#emp_linkedin_link').val();
        var up_image = $('#up_image')[0].files;
        var employee_id = $('#employee_id').val();
        var joining_date = $('#joining_date').val();
        var code = $('#code').val();
        alert(code)
        var employeeSaveUpdate = new FormData();
        employeeSaveUpdate.append('user_name', user_name);
        employeeSaveUpdate.append('password', password);
        employeeSaveUpdate.append('cpassword', cpassword);
        employeeSaveUpdate.append('first_name', first_name);
        employeeSaveUpdate.append('last_name', last_name);
        employeeSaveUpdate.append('gender', gender);
        employeeSaveUpdate.append('mob_no', mob_no);
        employeeSaveUpdate.append('email', email);
        employeeSaveUpdate.append('roll_type', roll_type);
        employeeSaveUpdate.append('emp_department_type', emp_department_type);
        employeeSaveUpdate.append('emp_facebook_link', emp_facebook_link);
        employeeSaveUpdate.append('emp_twitter_link', emp_twitter_link);
        employeeSaveUpdate.append('emp_linkedin_link', emp_linkedin_link);
        employeeSaveUpdate.append('up_image', up_image[0]);
        employeeSaveUpdate.append('joining_date', joining_date);
        employeeSaveUpdate.append('employee_id', employee_id);





        if (code != '') {
            employeeSaveUpdate.append('code', code);
        }
        employeeSaveUpdate.append('_token', '<?php echo e(csrf_token()); ?>');

        $.ajax({
            type: 'post',
            url: "<?php echo e(route('employeeSaveUpdate')); ?>",
            data: employeeSaveUpdate,
            processData: false,
            contentType: false,
            dataType: "json",

            success: function(data) {
                $('#exampleModal').modal('hide');
                $('.page-loader-wrapper').hide();
                var msg = "";
                if (data.status == 1) {
                    msg = "User Save Successfully";


                } else if (data.status == 2) {
                    msg = "User Update Successfully";
                }

                $.confirm({
                    title: 'Success!!',
                    type: 'green',
                    icon: 'fa fa-check',
                    content: msg,
                    buttons: {
                        ok: function() {
                            location.reload();
                        },
                        close: function() {
                            location.reload();
                        }

                    }
                });


            },
            error: function(jqXHR, textStatus, errorThrown) {

                $('.page-loader-wrapper').hide();
                var msg = "";
                var msg = "<strong>Failed to Save data.</strong><br/>";
                if (jqXHR.status !== 422 && jqXHR.status !== 400) {
                    msg += "<strong>" + jqXHR.status + ": " + errorThrown + "</strong>";
                } else {
                    if (jqXHR.responseJSON.hasOwnProperty('exception')) {
                        if (jqXHR.responseJSON.exception_code == 23000) {
                            msg += "Data Already Used!! Cannot Be Approve.";
                        }
                    } else {
                        msg += "Error(s):<strong><ul>";
                        $.each(jqXHR.responseJSON['errors'], function(key, value) {

                            msg += "<li>" + value + "</li>";
                        });
                        msg += "</ul></strong>";
                    }

                }
                $.alert({
                    type: 'red',
                    icon: 'fa fa-warning',
                    title: 'Error!!',
                    content: msg
                });


            },
        });
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\pmtool\resources\views/employee.blade.php ENDPATH**/ ?>