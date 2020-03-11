@extends('layouts.app')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>PMTOOL</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
@include('admin.partials.error')
      {!! Form::open(['url' => '/admin/login', 'name' => 'opening_stock_form', 'class' =>'', 'id' => 'opening_stock_form', 'method' => 'post','role'=>'','enctype'=>'multipart/form-data']) !!}
        <div class="input-group mb-3">
        {!! Form::email('email', null, ['id'=>'username','class'=>'form-control','placeholder'=>'Enter email','autocomplete'=>'off']) !!}
  
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        {!! Form::password('password',['id'=>'password','class' => 'form-control', 'placeholder' => 'Enter Password', 'type' => 'password','autocomplete'=>'off']) !!}
         
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          {{ Form::submit('Sign In', ['class' => 'btn btn-primary btn-block', 'type' => 'submit','id'=>'Submit']) }}

          </div>
          <!-- /.col -->
        </div>
        {!! Form::close() !!} 

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection
@section('script')
@stop
