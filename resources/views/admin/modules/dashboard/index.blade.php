@extends('admin.layouts.app')
@push('meta')
<title>Dashboard | Riders Ahoy</title>
<meta content="Admin Dashboard" name="description" />
<meta content="Riders Ahoy" name="author" />
@endpush
@section('content')

<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">

                <div class="col-sm-12">
                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Welcome to Riders Ahoy Dashboard</li>
                    </ol>

                </div>

            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="{{asset('assets/admin/images/services-icon/rider.png')}}" alt="">
                            </div>
                            <h5 class="font-12 text-uppercase mt-0">ABC</h5>
                            <h4 class="font-500">0</h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="javascript:void(0)" class="text-white"><i
                                        class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="{{asset('assets/admin/images/services-icon/group.svg')}}" alt="">
                            </div>
                            <h5 class="font-12 text-uppercase mt-0">DEF</h5>
                            <h4 class="font-500">0</h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="javascript:void(0)" class="text-white"><i
                                        class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="{{asset('assets/admin/images/services-icon/past_ride.svg')}}" alt="">
                            </div>
                            <h5 class="font-12 text-uppercase mt-0">GHI</h5>
                            <h4 class="font-500">0</h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="javascript:void(0)" class="text-white"><i
                                        class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="{{asset('assets/admin/images/services-icon/upcoming_ride.svg')}}" alt="">
                            </div>
                            <h5 class="font-12 text-uppercase mt-0">JKL</h5>
                            <h4 class="font-500">0 </h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="javascript:void(0)" class="text-white"><i
                                        class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>
    <!-- container-fluid -->

</div>
<!-- content -->

@stop

@push('appendJs')

@endpush