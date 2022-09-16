@extends('admin.layouts.app')
@push('meta')
<title>Masters | Advizuru</title>
<meta content="City" name="description" />
<meta content="Advizuru" name="author" />
@endpush
@section('content')

<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">

                <div class="col-sm-6">
                    <h4 class="page-title">City</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Cities</li>
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
                            <div class="col-sm-12 ">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="example-text-input" class="col-form-label">City Name</label>
                                        <input class="form-control" id="user_name" type="text" name="city"
                                            value="{{$name ? $name : ''}}">
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                               
                            </div>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <button class="btn btn-primary w-md waves-effect waves-light saveBtn"
                                            type="button" onclick="searchMasterList()">Search</button>
                                        <button class="btn btn-primary w-md waves-effect waves-light buttonload"
                                            id="ajaxloader" style="display:none;" type="button">
                                            <i class="fa fa-spinner fa-spin"></i> Searching...
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-sm-12 ">
                                <div class="row">
                                    <div class="form-group col-sm-2">
                                        {{-- <label for="example-search-input" class="col-form-label">No. of items per pages</label> --}}
                                        <select class="form-control" name="offset" id="offset"
                                            onchange="searchMasterPageList()">
                                            <option value="10" {{$offset && $offset == '10' ? 'selected' : ''}}>10
                                            </option>
                                            <option value="25" {{$offset && $offset == '25' ? 'selected' : ''}}>25
                                            </option>
                                            <option value="50" {{$offset && $offset == '50' ? 'selected' : ''}}>50
                                            </option>
                                            <option value="100" {{$offset && $offset == '100' ? 'selected' : ''}}>100
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-8">

                                    </div>
                                    <div class="form-group col-sm-2">
                                    <a href="{{route('city.create')}}" ><button class="btn btn-primary w-md waves-effect waves-ligh"
                                                id="sample_editable_1_new">Add New</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-sm m-0" id="record-list" data-url="{{route('city.list')}}">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>ID</th>
                                        <th>City</th>                                                                             
                                        <th>Status</th>
                                        <th>Action</th>
                                      
                                    </tr>
                                </thead>

                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="text-right"></td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>


                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


    </div>
    <!-- container-fluid -->

</div>
<!-- content -->

@stop

@push('appendJs')
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
    var searchUrl = "{{route('city.list')}}"
    var listUrl = "{{route('city.index')}}"
    var deleteUrl = "{{route('city.delete')}}"
    var changeUrl = "{{route('city.status')}}"
</script>
<script type="text/javascript" src="{{ asset('assets/admin/js/list-records.js')}}"></script>
@endpush