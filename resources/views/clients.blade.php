@extends('layouts.master')

@section('content')

<div id="page_top" class="section-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="left">
                <h1 class="page-title">Clients</h1>
                <div class="input-icon xs-hide">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-icon-addon"><i class="fe fe-search"></i></span>
                </div>      
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
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Clinet Name">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-sm-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Project">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Search</a>
                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" id="add_button"><i class="fe fe-plus mr-2"></i>Add New</button>
                            </div>
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
            {!! Form::open(['url' => '', 'method' => 'post' ,'name' => 'client', 'id'=>'client','class'=>'client']) !!}
            {!! Form::hidden('code',null,['class' => 'form-control','id'=>'code']) !!}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('client_name',null,['class' => 'form-control','id'=>'client_name', 'placeholder' => 'Client Name','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('location',null,['class' => 'form-control','id'=>'location', 'placeholder' => 'Location','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('address',null,['class' => 'form-control','id'=>'address', 'placeholder' => 'Address','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('email',null,['class' => 'form-control','id'=>'email', 'placeholder' => 'Email','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('mobile_no',null,['class' => 'form-control','id'=>'mobile_no', 'placeholder' => 'Mobile Number','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::file('image',['id'=>'image','class'=>'form-control form-control-file','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('twitter_link',null,['class' => 'form-control','id'=>'twitter_link', 'placeholder' => 'Twitter Link','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('linkedin_link',null,['class' => 'form-control','id'=>'linkedin_link', 'placeholder' => 'Linkened In Link','autocomplete'=>'off']) !!}
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
    $(document).ready(function() {
        get_client_details();

        $("#add_button").click(function(){
            $("#client_name").val('');
            $("#location").val('');
            $("#address").val('');
            $("#email").val('');
            $("#mobile_no").val('');
            $("#image").val('');
            $("#twitter_link").val('');
            $("#linkedin_link").val('');
            $("#exampleModal").modal('show');
            $("#client")[0].reset();
            $('#client').bootstrapValidator('resetForm', true);

        });

    $('#exampleModal').on('hide.bs.modal', function (e) {
         $('.form-control-feedback').css('display', 'none');
         $('.has-success').removeClass('has-success');
      });
        //create_table();
       
      
        $('#client').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: '',
                invalid: '',
                validating: '',
            },
            fields: {
                client_name: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Department Name',
                        },

                    }
                },
                location: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Department Head',
                        },

                    }
                },
                address: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Total Number of Employee',
                        }
                        

                    }
                },
                email: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Total Number of Employee',
                        }
                        

                    }
                },
                mobile_no: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Total Number of Employee',
                        }
                        

                    }
                },
                image: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Total Number of Employee',
                        }
                        

                    }
                },
                twitter_link: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Total Number of Employee',
                        }
                        

                    }
                },
                linkedin_link: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Total Number of Employee',
                        }
                        

                    }
                }
               
            }
        }).on('success.form.bv', function(e) {
            e.preventDefault();
            clientSave();
        });
    });

    function get_client_details(){
       
        $.ajax({
            type: 'post',
            url: "{{route('getClientDetails')}}",
            data: {'_token':$("input[name='_token']").val()},
            dataType: "json",
            success: function(data) {
             
                var msg="";

             $.each(data.clientData, function (key, value) {
               
                msg += '<div class="col-xl-3 col-lg-4 col-md-6">';
                msg += '<div class="card">';
                msg += '<div class="card-body text-center ribbon">';
                msg+='<div class="ribbon-box green">New</div>';
                msg+='<img class="rounded-circle img-thumbnail w100" src="./upload/'+value.image +'" alt="">';
                msg+='<h6 class="mt-3 mb-0">'+value.client_name +'</h6>';
                msg+='<span>'+value.client_email +'</span>';
                msg+='<ul class="mt-3 list-unstyled d-flex justify-content-center">';
                if(value.twitter_link != ''){
                msg+='<li><a class="p-3" target="_blank" href="'+value.twitter_link +'"><i class="fa fa-twitter"></i></a></li>';
                }               
                if(value.linkedin_link != ''){
                msg+='<li><a class="p-3" target="_blank" href="'+value.linkedin_link +'"><i class="fa fa-linkedin"></i></a></li>';
                }
                msg+=' </ul>';
                msg+=' <button class="btn btn-default btn-sm view_profile" id="'+value.id +'">View Profile</button>';
                msg+='<button class="btn btn-default btn-sm">Message</button>';
                msg+='<div class="row text-center mt-4">';
                msg+='<div class="col-6 border-right">';
                msg+='<label class="mb-0">Project</label>';
                msg+='<h4 class="font-18">07</h4>';
                msg+='</div>';
                msg+='<div class="col-6">';
                msg+='<label class="mb-0">Deal</label>';
                msg+='<h4 class="font-18">$2,510</h4>';
                msg+='</div>';
                msg+='</div>';
                msg+='</div>';
                msg+='</div>';
                msg+='</div>';
               });
             $(msg).insertAfter( ".col-12" );
             //$("#clients").append(msg);
             $(".view_profile").click(function(){
                var profile_id=this.id;
                $.ajax({
                    type: 'post',
                    url: "{{route('getProfileView')}}",
                    data: {'_token':$("input[name='_token']").val(),'profile_id':profile_id},
                    dataType: "json",
                    success: function(data) {
                        var str = "";
                        str += '<table class="table table-sm table-bordered">';
                        str += '<tbody>';
                       
                        str += '<tr><td width=50%><label>Client Name: </label></td width=50%><td>' + data.clientData.client_name + '</td></tr>';
                        str += '<tr><td><label> Location : </label></td><td>' + data.clientData.location + '</td></tr>';
                        str += '<tr><td><label> Address : </label></td><td>' + data.clientData.address + '</td></tr>';
                        str += '<tr><td><label> Email : </label></td><td>' + data.clientData.client_email + '</td></tr>';
                        str += '<tr><td><label> Contact Number : </label></td><td>' + data.clientData.client_ph + '</td></tr>';

                        if(data.clientData.twitter_link != ''){
                        str += '<tr><td><label> Twitter Link : </label></td><td>' + data.clientData.twitter_link + '</td></tr>';
                        }
                        if(data.clientData.linkedin_link != ''){
                        str += '<tr><td><label> Linkened IN Link : </label></td><td>' + data.clientData.linkedin_link + '</td></tr>';
                        }
                        
                        
                        str += '</tbody>';
                        str += '</table>';


                        $.confirm({
                            title: 'Client Details',
                            content: str,
                            boxWidth: '60%',
                            useBootstrap: false,
                            buttons: {
                                edit: function () {

                                            $("#client_name").val(data.clientData.client_name);
                                            $("#location").val(data.clientData.location);
                                            $("#address").val(data.clientData.address);
                                            $("#email").val(data.clientData.client_email);
                                            $("#mobile_no").val(data.clientData.client_ph);
                                            $("#twitter_link").val(data.clientData.twitter_link);
                                            $("#linkedin_link").val(data.clientData.linkedin_link);
                                            $("#code").val(data.clientData.id);
                                            $("#exampleModal").modal('show');                                   
                               
                                },
                                cancel: function () {}
                            }
                            
                        });
                        
                    }
                });


             });

             

               
             
            }
         
        });


    }


   

    function clientSave() {
        $('.page-loader-wrapper').show();
         
        var client_name = $('#client_name').val();
        var location = $('#location').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var mobile_no = $('#mobile_no').val();
        var image = $('#image')[0].files;
        var linkedin_link = $('#linkedin_link').val();
        var twitter_link = $('#twitter_link').val();
        //var code = $('#code').val();

        var clientSave = new FormData();
        clientSave.append('client_name', client_name);
        clientSave.append('location', location);
        clientSave.append('address', address);
        clientSave.append('email', email);
        clientSave.append('mobile_no', mobile_no);
        clientSave.append('image', image[0]);
        clientSave.append('linkedin_link', linkedin_link);
        clientSave.append('twitter_link', twitter_link);
        
        if (code != '') {
            departmentSaveUpdate.append('code', code);
        }
        clientSave.append('_token', '{{csrf_token()}}');

        $.ajax({
            type: 'post',
            url: "{{route('clientSave')}}",
            data: clientSave,
            processData: false,
            contentType: false,
            dataType: "json",

            success: function(data) {
                $('#exampleModal').modal('hide');
                $('.page-loader-wrapper').hide();
                var msg = "";
                if (data.status == 1) {
                    msg = "Client Saved Successfully";

                } else if (data.status == 2) {
                    msg = "Client Updated Successfully";
                 }

                $.confirm({
                    title: 'Success!!',
                    type: 'green',
                    icon: 'fa fa-check',
                    content: msg,
                    buttons: {
                        ok: function() {
                            get_client_details();
                        }
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

@endsection