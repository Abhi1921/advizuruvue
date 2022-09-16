@extends('admin.layouts.app')
@push('stylesheets')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" type="text/css" rel="stylesheet" />
@endpush
@push('meta')
<title>Country | Advizuru</title>
<meta content="Countries" name="description" />
<meta content="Advizuru" name="author" />
@endpush
@section('content')

<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">

                <div class="col-sm-6">
                    <h4 class="page-title">Countries</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('countries.index')}}">Countries</a></li>
                        <li class="breadcrumb-item active">{{$item ? $item->name : 'Add New'}}</li>
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
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <button class="btn btn-primary waves-effect waves-light" id="editBtn"
                                            type="button" onclick="enableEdit(this);">
                                            <i class="mdi mdi-pencil mr-2"></i> Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <form action="{{route('countries.store')}}" method="post" onsubmit="return updateProfile(this)">
                            <div class="alert alert-success" role="alert" id="msg" style="display:none;">
                            </div>
                            @csrf

                            @if($item)
                            <input type="hidden" name="id" id="user_id" value="{{$item->id}}">
                            @endif


                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="example-text-input" class="col-form-label">ID</label>
                                    <input class="form-control" name="uuid" value="{{$item ? $item->id: ''}}" readonly>                                                                      
                                    <div class="help-block"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="example-text-input" class="col-form-label">Country</label>
                                    <input class="form-control" type="text" name="country"
                                        value="{{$item ? $item->country : ''}}" readonly>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            
                                </div>
                            </div>

                            <div class="form-group row m-t-20">

                                <div class="col-sm-12 text-center" style="display:none">
                                    <button class="btn btn-primary w-md waves-effect waves-light saveBtn"
                                        type="submit">Update</button>
                                    <button class="btn btn-primary w-md waves-effect waves-light buttonload"
                                        id="ajaxloader" style="display:none;" type="button">
                                        <i class="fa fa-spinner fa-spin"></i> Updating...
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

@push('appendJs')

<script>
    var enableEdit = function (ele) {
        $('input').attr('readonly', false);
        //$('select').attr('disabled', false);
        $('.saveBtn').parent('div').show();
        $(ele).addClass('invisible');
    }
</script>
@endpush