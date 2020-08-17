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
                    <img class="align-items-center" src="{{ asset('images/emblem.png') }}" alt="logo" style="width: 100px;">
                </div>
            </div>
            <div class="row">       
                <div class="col-md-12 mx-auto"> 
                    <h4 class="text-center text-white">File & Dak management System</h4> 
                </div>
            </div>
 
             
            <div class="auto-form-wrapper"> 
                <div class="card">
                    <div class="p-4 border-bottom bg-light"> 
                        <h4 class="card-title mb-0">Login</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-12 control-label">User Name/ Mobile No. :</label>
                                    <div class="input-group">                                    
                                        <input id="name"  type="text" class="form-control" placeholder="User Name/ Mobile No."  name="name" value="{{ old('name') }}" autofocus>
                                        <div class="input-group-append">
                                            <span class="input-group-text"> 
                                            </span>
                                        </div>
                                    </div>
                                </div>
        

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Password :</label>
                                    <div class="input-group"> 
                                        <input id="password" type="password" placeholder="Password"  name="password"   class="form-control" >                                   
                                        <div class="input-group-append">
                                            <span class="input-group-text"> 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block">Register</button>
                                </div> 
                        </form>
                    </div>
                </div>
            </div>
            <p class="text-center text-white mt-5">All right reserved by Directorate of Information Technology, ELectronics & Communication, Govt. of Assam</p>
            <p class="text-center text-white mt-5">Developed by DITEC, Assam</p>
        </div>
    </div>
</div>
     
@endsection
