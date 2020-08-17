@extends('admin.layout.auth')

@section('content')
<div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
            <div class="col-lg-4 mx-auto">
                <h2 class="text-center mb-4">Register</h2>
                <div class="auto-form-wrapper">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name :</label>
                            <div class="input-group">                                    
                                <input id="name"  type="text" class="form-control" placeholder="Name"  name="name" value="{{ old('name') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Mobile No. :</label>
                            <div class="input-group">                                    
                                <input id="mobile"  type="text" class="form-control" placeholder="Mobile No."  name="mobile" value="{{ old('mobile') }}" >
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Create Password :</label>
                            <div class="input-group"> 
                            <input id="password" type="password" placeholder="Password"  name="password"   class="form-control" >                                   
                                
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-primary submit-btn btn-block">Register</button>
                        </div> 
                    </form>
                </div>
        </div>
    </div>
</div>
 
@endsection
