<?php $__env->startSection('content'); ?>
<?php

use App\Http\Controllers\holidayController;

$getData = holidayController::getHolidaydata();
$i = 1;
?>
<div id="page_top" class="section-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="left">
                <h1 class="page-title">Holidays</h1>
                <div class="input-icon xs-hide">
                    <!-- <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-icon-addon"><i class="fe fe-search"></i></span> -->
                </div>
            </div>
            <div class="header-action">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-plus mr-2"></i>Add Holiday</button>
            </div>
        </div>
    </div>
</div>
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table_custom spacing5 border-style mb-0">
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

                                    <?php $__currentLoopData = $getData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $getData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><span><?php echo e($i++); ?></span></td>
                                        <td><span><?php echo e($getData['day_name']); ?></span></td>
                                        <td><span><?php echo e(date('j F Y', strtotime($getData['holiday_date']))); ?></span></td>
                                        <td><span><?php echo e($getData['holiday_name']); ?></span></td>
                                        <td>
                                            <button type="button" class="btn_action btn-warning edit-button" id="<?php echo e($getData['id']); ?>" title="Edit"><i class="fa fa-edit"></i></button>&nbsp;
                                            <button type="button" class="btn_action btn-success delete-button" id="<?php echo e($getData['id']); ?>" title="Delete"><i class="fa fa-trash"></i></button>
                                        </td>

                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php echo Form::open(['url' => '', 'method' => 'post' ,'name' => 'holidaySave', 'id'=>'holidaySave','class'=>'holidaySave']); ?>

            <?php echo Form::hidden('id','',['class' => 'form-control','id'=>'id', 'placeholder' => 'User Name','autocomplete'=>'off']); ?>

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Holiday</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <?php echo Form::text('day_name',null,['class' => 'form-control','id'=>'day_name', 'placeholder' => 'Enter day name','autocomplete'=>'off']); ?>

                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <?php echo Form::text('date_holiday',null,['class' => 'form-control','id'=>'date_holiday', 'placeholder' => 'DD/MM/YYYY','autocomplete'=>'off']); ?>

                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <?php echo Form::text('holiday_name',null,['class' => 'form-control','id'=>'holiday_name', 'placeholder' => 'Enter holiday name','autocomplete'=>'off']); ?>

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
        $('.edit-button').click(function() {
            var edit_code = this.id;
            $.ajax({
                type: 'post',
                url: "<?php echo e(route('holidayEdit')); ?>",
                data: {
                    'edit_code': edit_code,
                    '_token': '<?php echo e(csrf_token()); ?>'
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
                url: "<?php echo e(route('holidayDelete')); ?>",
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
                                    location.reload();
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
                                    location.reload();
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


    function holidaySave() {

        $('.page-loader-wrapper').show();

        var day_name = $('#day_name').val();
        var date_holiday = $('#date_holiday').val();
        var holiday_name = $('#holiday_name').val();
        var id = $('#id').val();

        var holidaySaveUpdate = new FormData();
        holidaySaveUpdate.append('day_name', day_name);
        holidaySaveUpdate.append('date_holiday', date_holiday);
        holidaySaveUpdate.append('holiday_name', holiday_name);
        holidaySaveUpdate.append('_token', '<?php echo e(csrf_token()); ?>');

        if (id != '') {
            holidaySaveUpdate.append('id', id);
        }


        $.ajax({
            type: 'post',
            url: "<?php echo e(route('holidaySaveUpdate')); ?>",
            data: holidaySaveUpdate,
            processData: false,
            contentType: false,
            dataType: "json",

            success: function(data) {
                $('#exampleModal').modal('hide');
                $('.page-loader-wrapper').hide();
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
                            location.reload();
                        },
                        close: function() {

                        }
                    }
                });


            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('.page-loader-wrapper').hide();
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
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\pmtool\resources\views/holidays.blade.php ENDPATH**/ ?>