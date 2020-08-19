@extends('admin.layout.auth')
@section('styles')
@parent
<style>
     .auto-form-wrapper
    {
        background: #ffffff29 !important;
        padding:0px  !important;
        border-radius: 0px !important;
    }
    .card .card-body
    {
        border-radius: 4px !important;
        -webkit-box-shadow:0 -25px 37.7px 11.3px rgba(8, 143, 220, 0.07) !important;
        box-shadow:0 -25px 37.7px 11.3px rgba(8, 143, 220, 0.07);
    }
</style>
@endsection
@section('content')
<div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
    <div class="row w-100">
        <div class="col-lg-4 mx-auto">  
            <div class="row  w-100">
                <div class="col-md-2 mx-auto"> 
                    <img class="align-items-center" src="{{ asset('images/logo_main.png') }}" alt="logo" style="width: 100px;">
                </div>
            </div>
            <div class="row">       
                <div class="col-md-12 mx-auto"> 
                    <h4 class="text-center text-white">Files & Daks Tracking System</h4> 
                </div>
            </div>
 
             
            <div class="auto-form-wrapper"> 
                <div class="card">
                    <div class="p-4 border-bottom bg-light"> 
                        <h4 class="card-title mb-0">Admin Login</h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'admin.login', 'method'=>'post', 'id'=>'admin_login', 'class' => 'form-horizontal bucket-form']) !!}
                       
                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-12 control-label">User Name/ Mobile No. :</label>
                                    <div class="input-group">                                    
 
                                        {!! Form::text('mobile', null, ['class' =>($errors->has('mobile') ? 'is-invalid ' : '') . 'form-control text-lowercase no-space', 'id' => 'mobile', 'placeholder' => 'User Name/ Mobile No.', 'autocomplete' => 'on', 'required' => 'true', 'autofocus'=>'true']) !!}
                                         <div class="input-group-append">
                                            <span class="input-group-text"> 
                                            </span>
                                        </div>
                                        {!! $errors->first('mobile', '<em class="error invalid-feedback">:message</em>') !!}
                                       
                                    </div>
                                </div>
        

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Password :</label>
                                    <div class="input-group"> 
                                    {!! Form::password('password', ['class'=>($errors->has('password') ? 'in-invalid ': '') . 'form-control', 'id' => 'password', 'placeholder' => 'Password', 'required' => 'true']) !!}
                                
                                        <div class="input-group-append">
                                            <span class="input-group-text"> 
                                            </span>
                                        </div>
                                        {!! $errors->first('password', '<em class="error invalid-feedback">:message</em>') !!}
                                    </div>
                                </div>
                                @if(Session::has('message'))
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                {!! Session::get('message') !!}
                                        </div>
                                        </div>
                                </div>
                                @endif
                                <div class="form-group">
                                {!! Form::button('Login',['class'=>'btn btn-primary submit-btn btn-block', 'id' => 'Login', 'type'=>'submit']) !!}
                                    
                                </div> 
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <p class="text-center text-white mt-5">All right reserved by Directorate of Information Technology, ELectronics & Communication, Government of Assam</p>
            <p class="text-center text-white mt-5">Developed by DITEC, Assam</p>
        </div>
    </div>
</div>
     
@endsection
