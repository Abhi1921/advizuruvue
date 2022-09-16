@extends('admin.auth.layouts.app')
@push('meta')
<title>Admin Advizuru</title>
<meta content="Admin Login" name="description" />
<meta content="Riders Ahoy" name="author" />
@endpush
@section('content')

<div class="card overflow-hidden account-card mx-3">

    <div class="bg-primary p-4 text-white text-center position-relative">
    <a href="javascript:void(0)" class="logo logo-admin"><img src="{{asset('assets/admin/images/log.png')}}" height="70"  alt="logo"></a>
        <h3 class="font-20 m-b-5">Advizuru Admin </h3>
        <p class="text-white-50 mb-4">Sign in to continue to Advizuru.</p>
       
                
    </div>
    <div class="account-card-content">

        <form id="loginform" action="{{ route('admin.login.post')}}" onsubmit="return formLogin(this)" method="post"
            class="form-horizontal m-t-30">
            <input type="hidden" name="tz" id="tz">
            <div class="alert alert-success" role="alert" id="msg" style="display:none;">
            </div>
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                <div class="help-block"></div>
            </div>

            <div class="form-group">
                <label for="userpassword">Password</label>
                <input type="password" class="form-control" id="userpassword" name="password"
                    placeholder="Enter password">
                <div class="help-block"></div>
            </div>

            <div class="form-group row m-t-20">
                <div class="col-sm-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" id="customControlInline">
                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <button class="btn btn-primary w-md waves-effect waves-light saveBtn" type="submit">Log In</button>
                    <button class="btn btn-danger w-md waves-effect waves-light buttonload" id="ajaxloader"
                        style="display:none;" type="button">
                        <i class="fa fa-spinner fa-spin"></i> Logging In...
                    </button>
                </div>
                <div class="help-block"></div>
            </div>

            <div class="form-group m-t-10 mb-0 row">
                <div class="col-12 m-t-20">
                    <a href="{{route('admin.password.email.show')}}">Forgot your
                        password?</a>
                </div>
            </div>
        </form>

    </div>
</div>

@stop