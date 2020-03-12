@extends('admin.layouts.admin_template')
@section('content')
<style>
    .dropdown-menu {
        /* right: 67%;*/
        /* left: auto; */
        min-width: 0px !important;
        width: 230px !important;
        padding: 1em !important;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User List</h1>
          </div>
          
         
          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="add_button"><i class="fe fe-plus mr-2"></i>Add User</button>&nbsp;
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">User List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="list-employee" class="table table-bordered table-striped">
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
                <tbody>
                
                </tbody>
             
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            {!! Form::open(['url' => '', 'method' => 'post' ,'name' => 'employeesave', 'id'=>'employeesave','class'=>'employeesave']) !!}
            {!! Form::hidden('code','',['class' => 'form-control','id'=>'code', 'placeholder' => 'User Name','autocomplete'=>'off']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('user_name',null,['class' => 'form-control','id'=>'user_name', 'placeholder' => 'User Name','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::password('password',['class' => 'form-control','id'=>'password', 'placeholder' => 'Password','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::password('cpassword',['class' => 'form-control','id'=>'cpassword', 'placeholder' => 'Confirm Password','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('first_name',null,['class' => 'form-control','id'=>'first_name', 'placeholder' => 'First Name','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('last_name',null,['class' => 'form-control','id'=>'last_name', 'placeholder' => 'Last Name','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::select('gender', [' '=>'Select Gender','M' => 'Male', 'F' => 'Female','o'=> 'Other'],null,['id'=>'gender','class'=>'form-control']) !!}

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('mob_no',null,['class' => 'form-control','id'=>'mob_no', 'placeholder' => 'Mobile No.','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('email',null,['class' => 'form-control','id'=>'email', 'placeholder' => 'Email Address.','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::select('roll_type', [' '=>'Select Roll Type', '1' => 'Employee','2'=> 'Client'],null,['id'=>'roll_type','class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="row" id="roll_details" style="display:none;margin-left:0px;margin-right:0px;">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                {!! Form::text('joining_date',null,['class' => 'form-control','id'=>'joining_date', 'placeholder' => 'Select join date','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                {!! Form::text('employee_id',null,['class' => 'form-control','id'=>'employee_id', 'placeholder' => 'Enter Employee Id','autocomplete'=>'off']) !!}
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                {!! Form::select('emp_department_type', $deptData,[],['id'=>'emp_department_type','class'=>'form-control','placeholder'=>'Select Department']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                {!! Form::text('emp_facebook_link',null,['class' => 'form-control','id'=>'emp_facebook_link', 'placeholder' => 'Facebook','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                {!! Form::text('emp_twitter_link',null,['class' => 'form-control','id'=>'emp_twitter_link', 'placeholder' => 'Twitter','autocomplete'=>'off']) !!}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                {!! Form::text('emp_linkedin_link',null,['class' => 'form-control','id'=>'emp_linkedin_link', 'placeholder' => 'Linkedin','autocomplete'=>'off']) !!}
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
                {!! Form::submit('Save changes',['class' => 'btn btn-primary','type'=>'submit','id'=>'save']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div> 

@endsection
  @section('script')
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
                    url: "{{route('employeeEditData')}}",
                    data: {
                        'edit_code': edit_code,
                        '_token': '{{csrf_token()}}'
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
                    url: "{{route('employeeUserDelete')}}",
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
                url: "{{route('employeeUsersDatatable')}}",
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
          

        });


    }

    

    function employeeSave() {
        

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
        employeeSaveUpdate.append('_token', '{{csrf_token()}}');

        $.ajax({
            type: 'post',
            url: "{{route('employeeSaveUpdate')}}",
            data: employeeSaveUpdate,
            processData: false,
            contentType: false,
            dataType: "json",

            success: function(data) {
                $('#exampleModal').modal('hide');
                
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

@stop