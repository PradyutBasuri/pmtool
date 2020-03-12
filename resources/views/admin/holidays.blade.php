@extends('admin.layouts.admin_template')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Holiday List</h1>
          </div>
          
         
          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="add_button"><i class="fe fe-plus mr-2"></i>Add Holiday</button>&nbsp;
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Holiday List</li>
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
              <h3 class="card-title">Holiday List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="list-holiday" class="table table-bordered table-striped">
                <thead>
                <tr>
                                        <th>Sl No</th>
                                        <th>DAY</th>
                                        <th>DATE</th>
                                        <th>HOLIDAY</th>
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
            {!! Form::open(['url' => '', 'method' => 'post' ,'name' => 'holidaySave', 'id'=>'holidaySave','class'=>'holidaySave']) !!}
            {!! Form::hidden('id','',['class' => 'form-control','id'=>'id', 'placeholder' => 'User Name','autocomplete'=>'off']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Holiday</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            {!! Form::text('day_name',null,['class' => 'form-control','id'=>'day_name', 'placeholder' => 'Enter day name','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            {!! Form::text('date_holiday',null,['class' => 'form-control','id'=>'date_holiday', 'placeholder' => 'DD/MM/YYYY','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            {!! Form::text('holiday_name',null,['class' => 'form-control','id'=>'holiday_name', 'placeholder' => 'Enter holiday name','autocomplete'=>'off']) !!}
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
        $("#date_holiday").datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy',
            todayHighlight: true
        }).on('change', function(e) {
            // Revalidate the date field
            $('#holidaySave').bootstrapValidator('revalidateField', 'date_holiday');

        });

        $('#holidaySave').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: '',
                invalid: '',
                validating: '',
            },
            fields: {
                day_name: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter day name',
                        },
                        regexp: {
                            regexp: /^[a-zA-Z\s]+$/i,
                            message: 'Special charecter and Digits not Allowed'
                        }

                    }
                },
                holiday_name: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter holiday name',
                        },
                        regexp: {
                            regexp: /^[a-zA-Z\s',]+$/i,
                            message: 'Special charecter and Digits not Allowed'
                        }
                    }
                },

                // date_holiday:{
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


            }
        }).on('success.form.bv', function(e) {
            e.preventDefault();
            holidaySave();
        });

        var table = $('#list-holiday').DataTable();
        table.on('draw.dt', function() {
            $('.edit-button').click(function() {
            var edit_code = this.id;
            $.ajax({
                type: 'post',
                url: "{{route('holidayEdit')}}",
                data: {
                    'edit_code': edit_code,
                    '_token': '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(datam) {
                    if (datam.status == 1) {
                        $('#exampleModal').modal('show')
                        $('#id').val(datam.tbl_holidays.id);
                        $('#day_name').val(datam.tbl_holidays.day_name);
                        $('#date_holiday').val(datam.date);
                        $('#holiday_name').val(datam.tbl_holidays.holiday_name);
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
                url: "{{route('holidayDelete')}}",
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
                            content: '<strong>SUCCESS:</strong> Record deleted successfully.',
                            buttons: {
                                ok: function() {
                                    create_table();
                                },
                            }
                        });
                    } else {
                        $.confirm({
                            type: 'red',
                            icon: 'fa fa-warning',
                            title: 'Error!!',
                            content: '<strong>SUCCESS:</strong> Failed to delete data.',
                            buttons: {
                                ok: function() {
                                    create_table();
                                },
                            }
                        });
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {


                    var msg = "";
                    var msg = "<strong>Failed to Approve data.</strong><br/>";
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

        });

        });
        


        
    });

    function holidaySave() {
var day_name = $('#day_name').val();
var date_holiday = $('#date_holiday').val();
var holiday_name = $('#holiday_name').val();
var id = $('#id').val();

var holidaySaveUpdate = new FormData();
holidaySaveUpdate.append('day_name', day_name);
holidaySaveUpdate.append('date_holiday', date_holiday);
holidaySaveUpdate.append('holiday_name', holiday_name);
holidaySaveUpdate.append('_token', '{{csrf_token()}}');

if (id != '') {
    holidaySaveUpdate.append('id', id);
}


$.ajax({
    type: 'post',
    url: "{{route('holidaySaveUpdate')}}",
    data: holidaySaveUpdate,
    processData: false,
    contentType: false,
    dataType: "json",

    success: function(data) {
        $('#exampleModal').modal('hide');
      
        var msg = "";
        if (data.status == 1) {
            msg = "Holiday Save Successfully";


        } else if (data.status == 2) {
            msg = "Holiday Update Successfully";
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
                close: function() {

                }
            }
        });


    },
    error: function(jqXHR, textStatus, errorThrown) {
     
        var msg = "";
        var msg = "<strong>Failed to Approve data.</strong><br/>";
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

   


    function create_table() {

$("#list-holiday").dataTable().fnDestroy();
$('#list-holiday').dataTable({

    "processing": true,
    "serverSide": true,
    "ajax": {
        url: "{{route('holidayDatatable')}}",
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
            "data": "day_name",
            "searchable": true,
            "sortable": true,
        },
        {
            "targets": 2,
            "data": "holiday_date",
            "searchable": true,
            "sortable": true,
        },
        {
            "targets": 3,
            "data": "holiday_name",
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
</script>

  @stop