@extends('admin.layouts.app')
@push('meta')
<title>Change Password | Riders Ahoy</title>
<meta content="Change Password" name="description" />
<meta content="Riders Ahoy" name="author" />
@endpush
@section('content')

<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">

                <div class="col-sm-6">
                    <h4 class="page-title">Change Password</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Change Password</li>
                    </ol>

                </div>
                <div class="col-sm-6">

                    <div class="float-right d-none d-md-block">
                        <div class="dropdown">
                            <a class="btn btn-primary waves-effect waves-light" href="javascript:history.back()">
                                <i class="mdi mdi-arrow-left mr-2"></i> Back
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{route('admin.password.change.submit')}}" method="post"
                            onsubmit="return formSubmit(this)" class="changePasswordFrm">
                            <div class="alert alert-success" role="alert" id="msg" style="display:none;">
                            </div>
                            @csrf
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Current Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="current_pwd"
                                        placeholder="Current Password">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password"
                                        placeholder="New Password">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">Confirm
                                    Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password_confirmation"
                                        placeholder="Confirm Password">
                                        
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="form-group row m-t-20">

                                <div class="col-sm-12 text-center">
                                    <button class="btn btn-primary w-md waves-effect waves-light saveBtn"
                                        type="submit">Change Password</button>
                                    <button class="btn btn-primary w-md waves-effect waves-light buttonload"
                                        id="ajaxloader" style="display:none;" type="button">
                                        <i class="fa fa-spinner fa-spin"></i> Changing...
                                    </button>
                                </div>
                                <div class="help-block"></div>
                            </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


    </div>
    <!-- container-fluid -->

</div>
<!-- content -->


@endsection