
@extends('admin.layouts.admin_template')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Department List</h1>
          </div>
          
         
          <div class="col-sm-6">
          <button type="button" class="btn btn-primary" data-toggle="modal" id="add_button"><i class="fe fe-plus mr-2"></i>Add</button>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Department List</li>
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
              <h3 class="card-title">Department List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="list-department" class="table table-bordered table-striped">
                <thead>
                <tr>
                                        <th>#</th>
                                        <th>Department Name</th>
                                        <th>Department Head</th>
                                        <th>Total Employee</th>
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
            {!! Form::open(['url' => '', 'method' => 'post' ,'name' => 'department', 'id'=>'department','class'=>'department']) !!}
            {!! Form::hidden('code',null,['class' => 'form-control','id'=>'code']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('dept_name',null,['class' => 'form-control','id'=>'dept_name', 'placeholder' => 'Department Name','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('dept_head',null,['class' => 'form-control','id'=>'dept_head', 'placeholder' => 'Department Head','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('total_emp',null,['class' => 'form-control','id'=>'total_emp', 'placeholder' => 'Total Employee','autocomplete'=>'off']) !!}
                        </div>
                    </div>
               
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::submit('Save',['class' => 'btn btn-primary','type'=>'submit','id'=>'save']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
  @endsection
  @section('script')
  <script>
  $(function () {
    create_table();

    $("#add_button").click(function(){
            $("#dept_head").val('');
            $("#dept_name").val('');
            $("#total_emp").val('');
            $("#exampleModal").modal('show');
            $("#department")[0].reset();
            $('#department').bootstrapValidator('resetForm', true);

        });

    $('#exampleModal').on('hide.bs.modal', function (e) {
         $('.form-control-feedback').css('display', 'none');
         $('.has-success').removeClass('has-success');
      });
    $('#department').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: '',
                invalid: '',
                validating: '',
            },
            fields: {
                dept_name: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Department Name',
                        },

                    }
                },
                dept_head: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Department Head',
                        },

                    }
                },
                total_emp: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Total Number of Employee',
                        },
                        digits: {
                            message: 'Total Number of Employee Should be Digits'
                        },
                        stringLength: {
                            min: 1,
                            max: 3,
                            message: 'Total Number of Employee should be 1 to 3 Digits'
                        }

                    }
                }
               
            }
        }).on('success.form.bv', function(e) {
            e.preventDefault();
            departmentSave();
        });
    var table = $('#list-department').DataTable();
        table.on('draw.dt', function() {

            $('.edit_button').click(function() {
                var dapertment_code = this.id;
                //alert(dapertment_code);
                $.ajax({
                    type: 'post',
                    url: "{{route('dapertmentEdit')}}",
                    data: {
                        'dapertment_code': dapertment_code,
                        '_token': $('input[name="_token"]').val()
                    },
                    dataType: 'json',
                    success: function(datam) {
                       if (datam.status == 1) {

                       $("#dept_name").val(datam.data.dept_name);
                       $("#dept_head").val(datam.data.dept_head);
                       $("#total_emp").val(datam.data.dept_employee);
                       $("#code").val(datam.data.id);
                       $("#save").html('Update');
                        $("#exampleModal").modal('show');
   
                        } else {
                            $.confirm({
                                type: 'red',
                                icon: 'fa fa-warning',
                                title: 'Error!!',
                                content: '<strong>UNSUCCESS:</strong> Something going Wrong.'
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

                    }
                });
                
                
            });

            $('.delete_button').click(function() {

                var reply = confirm('Are you sure to delete the record?');
                if (!reply) {
                    return false;
                }
                var dlt_code = this.id;
                $.ajax({
                    type: 'post',
                    url: "{{route('departmentDelete')}}",
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


  function create_table() {

$("#list-department").dataTable().fnDestroy();
$('#list-department').dataTable({

    "processing": true,
    "serverSide": true,
    "ajax": {
        url: "{{route('departmentDatatable')}}",
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
            "data": "dept_name",
            "searchable": true,
            "sortable": true,
        },
        {
            "targets": 2,
            "data": "dept_head",
            "searchable": true,
            "sortable": true,
        },
        {
            "targets": 3,
            "data": "dept_employee",
            "searchable": true,
            "sortable": true,
        },
        
         {
        "targets": -1,
        "data": 'action',
        "searchable": false,
        "sortable": false,
        "render": function (data, type, full, meta) {
           var str_btns="";
           
           str_btns += '<button type="button"  class="btn btn-info  edit_button" id="' + data.c+ '" title="View"><i class="fa fa-view fa-edit"></i></button>&nbsp;';
            str_btns += '<button type="button"  class="btn btn-danger  delete_button" id="' + data.c+ '" title="View"><i class="fa fa-view fa-trash"></i></button>&nbsp;';




            return str_btns;
       }
     }
    ]

});
}

function departmentSave() {
        $('.page-loader-wrapper').show();

        var dept_name = $('#dept_name').val();
        var dept_head = $('#dept_head').val();
        var total_emp = $('#total_emp').val();
        var code = $('#code').val();

        var departmentSaveUpdate = new FormData();
        departmentSaveUpdate.append('dept_name', dept_name);
        
        departmentSaveUpdate.append('dept_head', dept_head);
        departmentSaveUpdate.append('total_emp', total_emp);
        if (code != '') {
            departmentSaveUpdate.append('code', code);
        }
        departmentSaveUpdate.append('_token', '{{csrf_token()}}');

        $.ajax({
            type: 'post',
            url: "{{route('departmentSaveUpdate')}}",
            data: departmentSaveUpdate,
            processData: false,
            contentType: false,
            dataType: "json",

            success: function(data) {
                $('#exampleModal').modal('hide');
               $('.page-loader-wrapper').hide();
                var msg = "";
                if (data.status == 1) {
                    msg = "Employee Save Successfully";


                } else if (data.status == 2) {
                    msg = "Employee Update Successfully";
                }

                $.confirm({
                    title: 'Success!!',
                    type: 'green',
                    icon: 'fa fa-check',
                    content: msg,
                    buttons: {
                        ok: function() {
                            create_table();
                        },
                        

                    }
                });


            },
            error: function(jqXHR, textStatus, errorThrown) {

                $('.page-loader-wrapper').hide();
                var msg = "";
                
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