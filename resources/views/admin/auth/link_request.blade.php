@extends('admin.auth.layouts.app')
@push('meta')
<title>Forgot Password | Riders Ahoy</title>
<meta content="Forgot Password" name="description" />
<meta content="Riders Ahoy" name="author" />
@endpush
@section('content')

<div class="card overflow-hidden account-card mx-3">

    <div class="bg-primary p-4 text-white text-center position-relative">
        <h4 class="font-20 m-b-5">Riders Ahoy Admin</h4>
        <p class="text-white-50 mb-4">Forgot Password</p>
        <a href="javascript:void(0)" class="logo logo-admin"><img src="{{asset('assets/admin/images/logo.png')}}"
                height="78" alt="logo"></a>
    </div>
    <div class="account-card-content">

        <form id="forgotform" action="{{ route('password.email') }}" onsubmit="return formSubmit(this)" method="post"
            class="form-horizontal m-t-30">
            <div class="alert alert-success" role="alert" id="msg" style="display:none;">
            </div>
            @csrf
            <div class="form-group">
                <label for="username">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                <div class="help-block"></div>
            </div>


            <div class="form-group row m-t-20">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-primary w-md waves-effect waves-light saveBtn" type="submit">Submit</button>
                    <button class="btn btn-primary w-md waves-effect waves-light buttonload" id="ajaxloader"
                        style="display:none;" type="button">
                        <i class="fa fa-spinner fa-spin"></i> Submitting...
                    </button>
                </div>
            </div>

            <div class="form-group m-t-10 mb-0 row">
                <div class="col-12 m-t-20">
                    <a href="{{route('admin.login')}}">Login here</a>
                </div>
            </div>
        </form>

    </div>
</div>

@stop