<template>
     <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top main-header">
            <div class="container">
                <div class="d-flex align-items-center logo-group">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon top"></span>
                        <span class="navbar-toggler-icon middle"></span>
                        <span class="navbar-toggler-icon bottom"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="~assets/img/logo.png" alt="logo" class="large-logo" width="180" height="48" />
                        <img src="~assets/img/small-logo.png" class="small-logo d-none" alt="logo" width="31"
                            height="26" />
                    </a>
                </div>
                <div class="d-flex mobile-search">
                    <div class="search-bar d-none">
                        <input type="text" name="search" class="form-control" placeholder="Search here..." />
                        <button type="submit" class="search-btn">
                            <i class="flaticon flaticon-loupe"></i>
                        </button>
                    </div>
                    <div class="mobile-options d-none">
                        <div class="dropdown message dropdown-widget">
                            <a href="javascript:void(0);" class="m-icon dropdown-toggle" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="flaticon flaticon-email"></i>
                                <span class="badge badge-success badge-notify">14</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-content">
                                    <div class="dropdown-top d-flex justify-content-between rounded-top bg-primary">
                                        <span class="text-white">Messages</span>
                                    </div>
                                    <div class="ag-scroll">
                                        <ul class="dropdown-list list-unstyled mb-0">
                                            <li>
                                                <div class="media">
                                                    <img src="~assets/img/alok.jpg" class="me-2" alt="user img" width="50" height="50" />
                                                    <div class="media-body">
                                                        <div class="d-flex justify-content-between">
                                                            <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                            <span class="text-muted">2021-04-08 11:51:20</span>
                                                        </div>
                                                        <span class="text-dark d-block">Notifications have been designed to make it easy to scan.</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img src="~assets/img/alok.jpg" class="me-2" alt="user img" width="50" height="50" />
                                                    <div class="media-body">
                                                        <div class="d-flex justify-content-between">
                                                            <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                            <span class="text-muted">2021-04-08 11:51:20</span>
                                                        </div>
                                                        <span class="text-dark d-block">Notifications have been designed to make it easy to scan.</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img src="~assets/img/alok.jpg" class="me-2" alt="user img" width="50" height="50" />
                                                    <div class="media-body">
                                                        <div class="d-flex justify-content-between">
                                                            <h5 class="mb-0 text-primary">Elisabeth Ortega</h5>
                                                            <span class="text-muted">2021-04-08 11:51:20</span>
                                                        </div>
                                                        <span class="text-dark d-block">Notifications have been designed to make it easy to scan.</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img src="~assets/img/alok.jpg" class="me-2" alt="user img" width="50" height="50" />
                                                    <div class="media-body">
                                                        <div class="d-flex justify-content-between">
                                                            <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                            <span class="text-muted">2021-04-08 11:51:20</span>
                                                        </div>
                                                        <span class="text-dark d-block">Notifications have been designed to make it easy to scan.</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img src="~assets/img/alok.jpg" class="me-2" alt="user img" width="50" height="50" />
                                                    <div class="media-body">
                                                        <div class="d-flex justify-content-between">
                                                            <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                            <span class="text-muted">2021-04-08 11:51:20</span>
                                                        </div>
                                                        <span class="text-dark d-block">Notifications have been designed to make it easy to scan.</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-foot">
                                        <a href="message-inbox.html" class="btn-sm btn btn-primary">View all</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown notification dropdown-widget">
                            <a href="javascript:void(0);" class="m-icon dropdown-toggle" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="flaticon flaticon-alarm i-bold"></i>
                                <span class="badge badge-danger badge-notify">10</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-content">
                                    <div class="dropdown-top d-flex justify-content-between rounded-top bg-primary">
                                        <span class="text-white">Recent Notifications</span>
                                        <span class="badge bg-warning mb-0">1 NEW</span>
                                    </div>
                                    <div class="ag-scroll">
                                        <ul class="dropdown-list list-unstyled mb-0">
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                    <span class="text-muted">2021-04-08 11:51:20</span>
                                                </div>
                                                <span class="text-dark d-block mb-1">Aalok N Koomar wants to connect with you,, Call Cancelled.</span>
                                                <span class="badge-outline-success badge mb-0">Cancelled</span>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                    <span class="text-muted">2021-04-08 11:51:20</span>
                                                </div>
                                                <span class="text-dark d-block mb-1">Isha Usha wants to connect with you,, Call Cancelled.</span>
                                                <span class="badge-outline-success badge mb-0">Cancelled</span>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                    <span class="text-muted">2021-04-08 11:51:20</span>
                                                </div>
                                                <span class="text-dark d-block mb-1">Aalok N Koomar wants to connect with you,, Call Cancelled.</span>
                                                <span class="badge-outline-success badge mb-0">Cancelled</span>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                    <span class="text-muted">2021-04-08 11:51:20</span>
                                                </div>
                                                <span class="text-dark d-block mb-1">Isha Usha wants to connect with you,, Call Cancelled.</span>
                                                <span class="badge-outline-success badge mb-0">Cancelled</span>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                    <span class="text-muted">2021-04-08 11:51:20</span>
                                                </div>
                                                <span class="text-dark d-block mb-1">Aalok N Koomar wants to connect with you,, Call Cancelled.</span>
                                                <span class="badge-outline-success badge mb-0">Cancelled</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-foot">
                                        <a href="javascript:void(0);" class="btn-sm btn btn-primary">View all</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="javascript:void(0);" class="ms-2"><img src="~assets/img/alok.jpg" alt="user profile"
                                width="45" height="45" /></a> -->
                        <div class="profile-dropdown dropdown dropdown-widget">
                            <a href="javascript:void(0);" class="dropdown-toggle ms-2" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="~assets/img/alok.jpg" class="rounded-circle" alt="user profile"
                                width="45" height="45" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-content">
                                    <div class="ag-scroll-x">
                                        <ul class="dropdown-list list-unstyled mb-0">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="flaticon flaticon-user"></i>
                                                    <span>My Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="flaticon flaticon-rupee"></i>
                                                    <span>My Interests Sent</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="flaticon flaticon-group"></i>
                                                    <span>Admin Recommendations</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="flaticon flaticon-settings"></i>
                                                    <span>Change Password</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="flaticon flaticon-credit-card"></i>
                                                    <span>Pay Now</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="flaticon flaticon-note"></i>
                                                    <span>Transaction History</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="flaticon flaticon-star"></i>
                                                    <span>Points History</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="flaticon flaticon-cloud-sync"></i>
                                                    <span>Services</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="flaticon flaticon-membership"></i>
                                                    <span>Redeem</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="flaticon flaticon-lock"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="line-inline navbar-menu mb-0 p-0">
                        <li class="list-inline-item">
                            <NuxtLink to="/">Home</NuxtLink>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);">Rate</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);">Training</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);">Post</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);">My Team</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);">Recruiter</a>
                        </li>
                    </ul>
                    <div class="d-flex ms-auto head-btn">
                        <ul class="list-inline mb-0 d-flex align-items-center">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);">
                                    <i class="flaticon flaticon-bebo-social-logotype"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);">
                                    <i class="flaticon flaticon-membership"></i>
                                </a>
                            </li>
                            <li class="list-inline-item dropdown message dropdown-widget">
                                <a href="javascript:void(0);" class="dropdown-toggle" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="flaticon flaticon-email"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-content">
                                        <div class="dropdown-top d-flex justify-content-between rounded-top bg-primary">
                                            <span class="text-white">Messages</span>
                                        </div>
                                        <div class="ag-scroll">
                                            <ul class="dropdown-list list-unstyled mb-0">
                                                <li>
                                                    <div class="media">
                                                        <img src="~assets/img/alok.jpg" class="me-2" alt="user img" width="50" height="50" />
                                                        <div class="media-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                                <span class="text-muted">2021-04-08 11:51:20</span>
                                                            </div>
                                                            <span class="text-dark d-block">Notifications have been designed to make it easy to scan.</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <img src="~assets/img/alok.jpg" class="me-2" alt="user img" width="50" height="50" />
                                                        <div class="media-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                                <span class="text-muted">2021-04-08 11:51:20</span>
                                                            </div>
                                                            <span class="text-dark d-block">Notifications have been designed to make it easy to scan.</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <img src="~assets/img/alok.jpg" class="me-2" alt="user img" width="50" height="50" />
                                                        <div class="media-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h5 class="mb-0 text-primary">Elisabeth Ortega</h5>
                                                                <span class="text-muted">2021-04-08 11:51:20</span>
                                                            </div>
                                                            <span class="text-dark d-block">Notifications have been designed to make it easy to scan.</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <img src="~assets/img/alok.jpg" class="me-2" alt="user img" width="50" height="50" />
                                                        <div class="media-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                                <span class="text-muted">2021-04-08 11:51:20</span>
                                                            </div>
                                                            <span class="text-dark d-block">Notifications have been designed to make it easy to scan.</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <img src="~assets/img/alok.jpg" class="me-2" alt="user img" width="50" height="50" />
                                                        <div class="media-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                                <span class="text-muted">2021-04-08 11:51:20</span>
                                                            </div>
                                                            <span class="text-dark d-block">Notifications have been designed to make it easy to scan.</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-foot">
                                            <a href="message-inbox.html" class="btn-sm btn btn-primary">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item dropdown notification dropdown-widget">
                                <a href="javascript:void(0);" class="dropdown-toggle" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="flaticon flaticon-alarm"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-content">
                                        <div class="dropdown-top d-flex justify-content-between rounded-top bg-primary">
                                            <span class="text-white">Recent Notifications</span>
                                            <span class="badge bg-warning mb-0">1 NEW</span>
                                        </div>
                                        <div class="ag-scroll">
                                            <ul class="dropdown-list list-unstyled mb-0">
                                                <li>
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                        <span class="text-muted">2021-04-08 11:51:20</span>
                                                    </div>
                                                    <span class="text-dark d-block mb-1">Aalok N Koomar wants to connect with you,, Call Cancelled.</span>
                                                    <span class="badge-outline-success badge mb-0">Cancelled</span>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                        <span class="text-muted">2021-04-08 11:51:20</span>
                                                    </div>
                                                    <span class="text-dark d-block mb-1">Isha Usha wants to connect with you,, Call Cancelled.</span>
                                                    <span class="badge-outline-success badge mb-0">Cancelled</span>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                        <span class="text-muted">2021-04-08 11:51:20</span>
                                                    </div>
                                                    <span class="text-dark d-block mb-1">Aalok N Koomar wants to connect with you,, Call Cancelled.</span>
                                                    <span class="badge-outline-success badge mb-0">Cancelled</span>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                        <span class="text-muted">2021-04-08 11:51:20</span>
                                                    </div>
                                                    <span class="text-dark d-block mb-1">Isha Usha wants to connect with you,, Call Cancelled.</span>
                                                    <span class="badge-outline-success badge mb-0">Cancelled</span>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="mb-0 text-primary">Jhon Smith</h5>
                                                        <span class="text-muted">2021-04-08 11:51:20</span>
                                                    </div>
                                                    <span class="text-dark d-block mb-1">Aalok N Koomar wants to connect with you,, Call Cancelled.</span>
                                                    <span class="badge-outline-success badge mb-0">Cancelled</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-foot">
                                            <a href="javascript:void(0);" class="btn-sm btn btn-primary">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);">
                                    <i class="flaticon flaticon-cogs"></i>
                                </a>
                            </li>
                            <li class="profile-dropdown dropdown dropdown-widget">
                                <a href="javascript:void(0);" class="dropdown-toggle" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="~assets/img/alok.jpg" class="img-fluid rounded-circle" alt="user profile"
                                    width="40" height="40" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <div class="dropdown-content">
                                        <div class="ag-scroll-x">
                                            <ul class="dropdown-list list-unstyled mb-0">
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="flaticon flaticon-user"></i>
                                                        <span>My Profile</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="flaticon flaticon-rupee"></i>
                                                        <span>My Interests Sent</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="flaticon flaticon-group"></i>
                                                        <span>Admin Recommendations</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="flaticon flaticon-settings"></i>
                                                        <span>Change Password</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="flaticon flaticon-credit-card"></i>
                                                        <span>Pay Now</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="flaticon flaticon-note"></i>
                                                        <span>Transaction History</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="flaticon flaticon-star"></i>
                                                        <span>Points History</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="flaticon flaticon-cloud-sync"></i>
                                                        <span>Services</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="flaticon flaticon-membership"></i>
                                                        <span>Redeem</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="flaticon flaticon-lock"></i>
                                                        <span>Logout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="main-wrapper spacing">
            <div class="container">
                <div class="row row-full">
                    <div class="col-md-4 col-28 mobile-filter">
                        <button class="btn_filter d-none"><i class="flaticon flaticon-filter"></i>
                            <span>Filter</span></button>
                            <div class="profile-block">
                                <div class="profile-card gray-card">
                                    <div class="update-prof">
                                        <img src="~assets/img/alok.jpg" class="img-fluid rounded-circle" alt="profile fig"
                                            width="100" height="100" />
                                        <div class="upload-prof">
                                            <input type="file" id="upload" name="myfile" />
                                            <label for="upload"><i class="flaticon flaticon-dslr-camera"></i></label>
                                        </div>
                                    </div>
                                    <div class="badge-block">
                                        <ul class="rating mb-0 list-inline">
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star"></i>
                                            </li>
                                        </ul>
                                        <ul class="medal-list mb-2 list-inline">
                                            <li class="list-inline-item">
                                                <img src="~assets/img/surface.png" class="img-fluid" alt="secure image"
                                                    width="" height="" />
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-medal text-yellow"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-medal text-blue"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-medal text-purple"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-medal text-green"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-medal text-red"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-between edit-prof">
                                        <h5>Aalok N Koomar</h5>
                                        <a href="javascript:void(0);"><i class="flaticon flaticon-pen"></i></a>
                                    </div>
                                    <span class="complete">Profile Completeness<a href="javascript:void(0);">(Complete
                                            Profile)</a></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!-- <div class="d-between google-contact">
                                        <span>[IMMEDIATE, WEEKEND]</span><a href="javascript:void(0);">Google contact</a>
                                    </div> -->
                                </div>
                                <div class="gray-card">
                                    <div class="d-between card-title">
                                        <h6>Remuneration</h6>
                                        <a href="javascript:void(0);"><i class="flaticon flaticon-pen i-bold"></i></a>
                                    </div>
                                    <ul class="u-list list-unstyled">
                                        <li>
                                            <span>Country</span>
                                            <span>:India</span>
                                        </li>
                                        <li>
                                            <span>Hourly Rate</span>
                                            <span>:200</span>
                                        </li>
                                        <li>
                                            <span>Daily Rate</span>
                                            <span>:2000</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gray-card">
                                    <div class="d-between card-title">
                                        <h6>Remuneration</h6>
                                        <a href="javascript:void(0);"><i class="flaticon flaticon-pen i-bold"></i></a>
                                    </div>
                                    <ul class="u-list list-unstyled">
                                        <li>
                                            <span>Full Time Availability</span>
                                            <span>:Within Two Months</span>
                                        </li>
                                        <li>
                                            <span>Part Time Availability</span>
                                            <span>:Weekly 20 hours</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion mb-3 gray-acc" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Experience <span class="text-primary ps-2"> - Five Years </span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Experience
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Education <span class="text-primary ps-2"> - M.Sc in CS </span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Education
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <ul class="list-unstyled prof-list mb-0">
                                        <li>
                                            <span>City</span>
                                            <span>: Delhi,India</span>
                                        </li>
                                        <li>
                                            <span>Profession</span>
                                            <span>: IT-Software, Software Services</span>
                                        </li>
                                        <li>
                                            <span>Company</span>
                                            <span>: PPN Solutions</span>
                                        </li>
                                        <li>
                                            <span>Mobile</span>
                                            <span>: 9650502334</span>
                                        </li>
                                        <li>
                                            <span>Email id</span>
                                            <span>: ashishdhiman@gmail.com</span>
                                        </li>
                                        <div class="moretext">
                                            <li>
                                                <span>Landline</span>
                                                <span>: 0129-234567</span>
                                            </li>
                                            <li>
                                                <span>Address</span>
                                                <span>: 231,2nd Floor,sec-14, Faridabad-121001 India</span>
                                            </li>
                                        </div>
                                        <a href="#" class="load-more">Click here to load more <i
                                                class="flaticon flaticon-arrow-down-sign-to-navigate"></i></a>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-8 col-72">
                        <div class="tab-wrap full-tab">
                            <nav class="cust-nav-tab">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-skill-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-skill" type="button" role="tab" aria-controls="nav-skill"
                                        aria-selected="true">Skill</button>
                                    <button class="nav-link" id="nav-project-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-project" type="button" role="tab"
                                        aria-controls="nav-project" aria-selected="false">Project</button>
                                    <button class="nav-link" id="nav-edu-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-edu" type="button" role="tab" aria-controls="nav-edu"
                                        aria-selected="false">Education</button>
                                    <button class="nav-link" id="nav-exp-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-exp" type="button" role="tab" aria-controls="nav-exp"
                                        aria-selected="false">Experience</button>
                                    <button class="nav-link" id="nav-other-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-other" type="button" role="tab" aria-controls="nav-other"
                                        aria-selected="false">Other</button>
                                </div>
                            </nav>
                            <div class="tab-content cust-tab" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-skill" role="tabpanel"
                                    aria-labelledby="nav-skill-tab">
                                    <div class="d-flex justify-content-end top-thead">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#addSkills"><i
                                                class="flaticon flaticon-add me-2"></i> Skills</a>
                                    </div>
                                    <div class="exp-list skill-list">
                                        <div class="exp-card">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Skill</span>
                                                    <span>:Team Work</span>
                                                </li>
                                                <li>
                                                    <span>Level</span>
                                                    <span>:Advanced</span>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Experience(Yrs)</span>
                                                    <span>:3</span>
                                                </li>
                                                <li>
                                                    <span>Self Assesment</span>
                                                    <ul class="rating list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star"></i>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled align-self-center">
                                                <li class="flex-end">
                                                    <a href="javascript:void(0);" class="btn-ssm btn-primary-light"
                                                    data-bs-toggle="modal" data-bs-target="#editSkill">
                                                        <i class="flaticon flaticon-pen m-0 i-bold"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn-ssm btn-danger-light"
                                                    data-bs-toggle="modal" data-bs-target="#deletePopup">
                                                        <i class="flaticon flaticon-delete m-0"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="exp-card">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Skill</span>
                                                    <span>:Team Work</span>
                                                </li>
                                                <li>
                                                    <span>Level</span>
                                                    <span>:Advanced</span>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Experience(Yrs)</span>
                                                    <span>:3</span>
                                                </li>
                                                <li>
                                                    <span>Self Assesment</span>
                                                    <ul class="rating list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star"></i>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled align-self-center">
                                                <li class="flex-end">
                                                    <a href="javascript:void(0);" class="btn-ssm btn-primary-light"
                                                    data-bs-toggle="modal" data-bs-target="#editSkill">
                                                        <i class="flaticon flaticon-pen m-0 i-bold"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn-ssm btn-danger-light"
                                                    data-bs-toggle="modal" data-bs-target="#deletePopup">
                                                        <i class="flaticon flaticon-delete m-0"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="exp-card">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Skill</span>
                                                    <span>:Team Work</span>
                                                </li>
                                                <li>
                                                    <span>Level</span>
                                                    <span>:Advanced</span>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Experience(Yrs)</span>
                                                    <span>:3</span>
                                                </li>
                                                <li>
                                                    <span>Self Assesment</span>
                                                    <ul class="rating list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star"></i>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled align-self-center">
                                                <li class="flex-end">
                                                    <a href="javascript:void(0);" class="btn-ssm btn-primary-light"
                                                    data-bs-toggle="modal" data-bs-target="#editSkill">
                                                        <i class="flaticon flaticon-pen m-0 i-bold"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn-ssm btn-danger-light"
                                                    data-bs-toggle="modal" data-bs-target="#deletePopup">
                                                        <i class="flaticon flaticon-delete m-0"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="exp-card">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Skill</span>
                                                    <span>:Team Work</span>
                                                </li>
                                                <li>
                                                    <span>Level</span>
                                                    <span>:Advanced</span>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Experience(Yrs)</span>
                                                    <span>:3</span>
                                                </li>
                                                <li>
                                                    <span>Self Assesment</span>
                                                    <ul class="rating list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="flaticon flaticon-star"></i>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled align-self-center">
                                                <li class="flex-end">
                                                    <a href="javascript:void(0);" class="btn-ssm btn-primary-light"
                                                    data-bs-toggle="modal" data-bs-target="#editSkill">
                                                        <i class="flaticon flaticon-pen m-0 i-bold"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn-ssm btn-danger-light"
                                                    data-bs-toggle="modal" data-bs-target="#deletePopup">
                                                        <i class="flaticon flaticon-delete m-0"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="comment-section">
                                        <h4>Comments (56)</h4>
                                        <div class="media">
                                            <img src="~assets/img/alok.jpg" class="img-fluid rounded-circle me-3"
                                                alt="user" width="50" height="50" />
                                            <div class="media-body align-self-center">
                                                <p class="mb-1"><b class="fw-600">Ashish Dhiman</b> Good Skills, An
                                                    Ecosystem for Organizations & Professionals for Promotion</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0)">Reply</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0)">Edit</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void()">Like</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        30 min ago
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <img src="~assets/img/no-user.png" class="img-fluid rounded-circle me-3"
                                                alt="user" width="50" height="50" />
                                            <div class="media-body align-self-center">
                                                <p class="mb-1"><b class="fw-600">Ashish Dhiman</b> Good Skills, An
                                                    Ecosystem for Organizations & Professionals for Promotion</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0)">Reply</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0)">Edit</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void()">Like</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        30 min ago
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <img src="~assets/img/alok.jpg" class="img-fluid rounded-circle me-3"
                                                alt="user" width="50" height="50" />
                                            <div class="media-body align-self-center">
                                                <p class="mb-1"><b class="fw-600">Ashish Dhiman</b> Good Skills, An
                                                    Ecosystem for Organizations & Professionals for Promotion</p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0)">Reply</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0)">Edit</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void()">Like</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        30 min ago
                                                    </li>
                                                </ul>
                                                <div class="media">
                                                    <img src="~assets/img/no-user.png"
                                                        class="img-fluid rounded-circle me-3" alt="user" width="50"
                                                        height="50" />
                                                    <div class="media-body align-self-center">
                                                        <p class="mb-1"><b class="fw-600">Ashish Dhiman</b> Good Skills,
                                                            An Ecosystem for Organizations.</p>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript:void(0)">Reply</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="javascript:void(0)">Edit</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="javascript:void()">Like</a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                30 min ago
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <img src="~assets/img/no-user.png" class="img-fluid rounded-circle me-3"
                                                alt="user" width="50" height="50" />
                                            <div class="text-wrap">
                                                <textarea class="form-control mb-4" rows="6"
                                                    placeholder="Write your comment here* ( 100 to 200 words limit)"></textarea>
                                                <button type="submit" class="btn btn-primary">Post Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-project" role="tabpanel"
                                    aria-labelledby="nav-project-tab">
                                    <div class="d-flex justify-content-end top-thead">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm"><i
                                                class="flaticon flaticon-add me-2"></i> Project</a>
                                    </div>
                                    <div class="project-list">
                                        <ul class="list-card list-unstyled">
                                            <li>
                                                <span>Project Name</span>
                                                <span>:Sap Bpc</span>
                                            </li>
                                            <li>
                                                <span>Project Duration</span>
                                                <span>:12</span>
                                            </li>
                                            <li>
                                                <span>Skill Used</span>
                                                <span>:Android,Laravel</span>
                                            </li>
                                            <li>
                                                <span>Project Description</span>
                                                <span>:8 Months</span>
                                            </li>
                                            <li class="d-btn-block">
                                                <a href="javascript:void(0);" class="btn-ssm btn-primary-light">
                                                    <i class="flaticon flaticon-pen"></i>
                                                    Edit
                                                </a>
                                                <a href="javascript:void(0);" class="btn-ssm btn-danger-light">
                                                    <i class="flaticon flaticon-delete"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="list-card list-unstyled">
                                            <li>
                                                <span>Project Name</span>
                                                <span>:Sap Bpc</span>
                                            </li>
                                            <li>
                                                <span>Project Duration</span>
                                                <span>:12</span>
                                            </li>
                                            <li>
                                                <span>Skill Used</span>
                                                <span>:Android,Laravel</span>
                                            </li>
                                            <li>
                                                <span>Project Description</span>
                                                <span>:Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book. It has survived not
                                                    only five centuries, but also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was popularised in the 1960s
                                                    with the release of Letraset sheets</span>
                                            </li>
                                            <li class="d-btn-block">
                                                <a href="javascript:void(0);" class="btn-ssm btn-primary-light">
                                                    <i class="flaticon flaticon-pen"></i>
                                                    Edit
                                                </a>
                                                <a href="javascript:void(0);" class="btn-ssm btn-danger-light">
                                                    <i class="flaticon flaticon-delete"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-edu" role="tabpanel" aria-labelledby="nav-edu-tab">
                                    <div class="d-flex justify-content-end top-thead">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm"><i
                                                class="flaticon flaticon-add me-2"></i> Education</a>
                                    </div>
                                    <div class="edu-list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="edu-card">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>
                                                            <span>Degree</span>
                                                            <span>:B.Tech</span>
                                                        </li>
                                                        <li>
                                                            <span>Institution</span>
                                                            <span>:iec college of engg & technology</span>
                                                        </li>
                                                        <li>
                                                            <span>Major</span>
                                                            <span>:IT</span>
                                                        </li>
                                                        <li>
                                                            <span>Completion Year</span>
                                                            <span>:2005</span>
                                                        </li>
                                                        <li class="mt-3">
                                                            <a href="javascript:void(0);"
                                                                class="btn-ssm btn-primary-light">
                                                                <i class="flaticon flaticon-pen"></i>
                                                                Edit
                                                            </a>
                                                            <a href="javascript:void(0);"
                                                                class="btn-ssm btn-danger-light">
                                                                <i class="flaticon flaticon-delete"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="edu-card">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>
                                                            <span>Degree</span>
                                                            <span>:B.Tech</span>
                                                        </li>
                                                        <li>
                                                            <span>Institution</span>
                                                            <span>:iec college of engg & technology</span>
                                                        </li>
                                                        <li>
                                                            <span>Major</span>
                                                            <span>:IT</span>
                                                        </li>
                                                        <li>
                                                            <span>Completion Year</span>
                                                            <span>:2005</span>
                                                        </li>
                                                        <li class="mt-3">
                                                            <a href="javascript:void(0);"
                                                                class="btn-ssm btn-primary-light">
                                                                <i class="flaticon flaticon-pen"></i>
                                                                Edit
                                                            </a>
                                                            <a href="javascript:void(0);"
                                                                class="btn-ssm btn-danger-light">
                                                                <i class="flaticon flaticon-delete"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="edu-card">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>
                                                            <span>Degree</span>
                                                            <span>:B.Tech</span>
                                                        </li>
                                                        <li>
                                                            <span>Institution</span>
                                                            <span>:iec college of engg & technology</span>
                                                        </li>
                                                        <li>
                                                            <span>Major</span>
                                                            <span>:IT</span>
                                                        </li>
                                                        <li>
                                                            <span>Completion Year</span>
                                                            <span>:2005</span>
                                                        </li>
                                                        <li class="mt-3">
                                                            <a href="javascript:void(0);"
                                                                class="btn-ssm btn-primary-light">
                                                                <i class="flaticon flaticon-pen"></i>
                                                                Edit
                                                            </a>
                                                            <a href="javascript:void(0);"
                                                                class="btn-ssm btn-danger-light">
                                                                <i class="flaticon flaticon-delete"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="edu-card">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>
                                                            <span>Degree</span>
                                                            <span>:B.Tech</span>
                                                        </li>
                                                        <li>
                                                            <span>Institution</span>
                                                            <span>:iec college of engg & technology</span>
                                                        </li>
                                                        <li>
                                                            <span>Major</span>
                                                            <span>:IT</span>
                                                        </li>
                                                        <li>
                                                            <span>Completion Year</span>
                                                            <span>:2005</span>
                                                        </li>
                                                        <li class="mt-3">
                                                            <a href="javascript:void(0);"
                                                                class="btn-ssm btn-primary-light">
                                                                <i class="flaticon flaticon-pen"></i>
                                                                Edit
                                                            </a>
                                                            <a href="javascript:void(0);"
                                                                class="btn-ssm btn-danger-light">
                                                                <i class="flaticon flaticon-delete"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-exp" role="tabpanel" aria-labelledby="nav-exp-tab">
                                    <div class="d-flex justify-content-end top-thead">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm"><i
                                                class="flaticon flaticon-add me-2"></i> Work
                                            Experience</a>
                                    </div>
                                    <div class="exp-list">
                                        <div class="exp-card">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Company Name</span>
                                                    <span>:Sap PPN Solution</span>
                                                </li>
                                                <li>
                                                    <span>From Date</span>
                                                    <span>:1 January, 2017</span>
                                                </li>
                                                <li>
                                                    <span>Description</span>
                                                    <span>:Worked on multiple projects</span>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Designation</span>
                                                    <span>:UI/UX Designer</span>
                                                </li>
                                                <li>
                                                    <span>To Date</span>
                                                    <span>:1 January, 2017</span>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li class="flex-end">
                                                    <a href="javascript:void(0);" class="btn-ssm btn-primary-light">
                                                        <i class="flaticon flaticon-pen"></i>
                                                        Edit
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn-ssm btn-danger-light">
                                                        <i class="flaticon flaticon-delete"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="exp-card">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Company Name</span>
                                                    <span>:Sap PPN Solution</span>
                                                </li>
                                                <li>
                                                    <span>From Date</span>
                                                    <span>:1 January, 2017</span>
                                                </li>
                                                <li>
                                                    <span>Description</span>
                                                    <span>:Worked on multiple projects</span>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Designation</span>
                                                    <span>:UI/UX Designer</span>
                                                </li>
                                                <li>
                                                    <span>To Date</span>
                                                    <span>:1 January, 2017</span>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li class="flex-end">
                                                    <a href="javascript:void(0);" class="btn-ssm btn-primary-light">
                                                        <i class="flaticon flaticon-pen"></i>
                                                        Edit
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn-ssm btn-danger-light">
                                                        <i class="flaticon flaticon-delete"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="exp-card">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Company Name</span>
                                                    <span>:Sap PPN Solution</span>
                                                </li>
                                                <li>
                                                    <span>From Date</span>
                                                    <span>:1 January, 2017</span>
                                                </li>
                                                <li>
                                                    <span>Description</span>
                                                    <span>:Worked on multiple projects</span>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Designation</span>
                                                    <span>:UI/UX Designer</span>
                                                </li>
                                                <li>
                                                    <span>To Date</span>
                                                    <span>:1 January, 2017</span>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li class="flex-end">
                                                    <a href="javascript:void(0);" class="btn-ssm btn-primary-light">
                                                        <i class="flaticon flaticon-pen"></i>
                                                        Edit
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn-ssm btn-danger-light">
                                                        <i class="flaticon flaticon-delete"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-other" role="tabpanel"
                                    aria-labelledby="nav-other-tab">
                                    <div class="other-list">
                                        <h4 class="heading">Remuneration <a href="javascript:void(0);">Add Expected
                                                Remuneration [+]</a></h4>
                                        <div class="exp-card mb-5">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Country</span>
                                                    <span>:India</span>
                                                </li>
                                                <li>
                                                    <span>Hourly Rate</span>
                                                    <span>:200</span>
                                                </li>
                                                <li>
                                                    <span>Daily Rate</span>
                                                    <span>:2000</span>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span>Currency</span>
                                                    <span>:India</span>
                                                </li>
                                                <li>
                                                    <span>Monthly Rate</span>
                                                    <span>:120000</span>
                                                </li>
                                                <li>
                                                    <span>Annually Rate</span>
                                                    <span>:320000</span>
                                                </li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li class="flex-end">
                                                    <a href="javascript:void(0);" class="btn-ssm btn-danger-light">
                                                        <i class="flaticon flaticon-delete"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="heading">Availability <a href="javascript:void(0);">Add Availability
                                                [+]</a></h4>
                                        <div class="table-responsive mb-5">
                                            <table class="table table-left border">
                                                <tbody>
                                                    <tr>
                                                        <th>Full Time Availabilty</th>
                                                        <td>:Within Two Months</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Part Time Availabilty</th>
                                                        <td>:Weekly 20 hours</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h4 class="heading">Visa <a href="javascript:void(0);">Add Visa [+]</a></h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="visa-card">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>
                                                            <span>Country</span>
                                                            <span>:India</span>
                                                        </li>
                                                        <li>
                                                            <span>Visa Status</span>
                                                            <span>:Passport</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="visa-card">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>
                                                            <span>Country</span>
                                                            <span>:India</span>
                                                        </li>
                                                        <li>
                                                            <span>Visa Status</span>
                                                            <span>:Passport</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="visa-card">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>
                                                            <span>Country</span>
                                                            <span>:India</span>
                                                        </li>
                                                        <li>
                                                            <span>Visa Status</span>
                                                            <span>:Passport</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="visa-card">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>
                                                            <span>Country</span>
                                                            <span>:India</span>
                                                        </li>
                                                        <li>
                                                            <span>Visa Status</span>
                                                            <span>:Passport</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--main wrapper closed-->
        <!-- Wizard Modal -->
        <div class="modal fade ag-modal" id="editSkill" tabindex="-1" aria-labelledby="addSkillsLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <ul class="sbs sbs--circles list-unstyled mb-5">
                            <li class="finished">
                                <div class="step">
                                    <span class="indicator">1</span>
                                    <span class="description">
                                        Add Skills
                                    </span>
                                    <span class="line"></span>
                                </div>
                            </li>
                            <li>
                                <div class="step">
                                    <span class="indicator">2</span>
                                    <span class="description">
                                        Work Experience
                                    </span>
                                    <span class="line"></span>
                                </div>
                            </li>
                            <li>
                                <div class="step">
                                    <span class="indicator">3</span>
                                    <span class="description">
                                        Project
                                    </span>
                                    <span class="line"></span>
                                </div>
                            </li>
                            <li>
                                <div class="step">
                                    <span class="indicator">4</span>
                                    <span class="description">
                                        Education
                                    </span>
                                    <span class="line"></span>
                                </div>
                            </li>
                        </ul>
                        <div class="form-wrap">
                            <div class="form-head">
                                <h6 class="mb-0">Add Other Skill</h6>
                            </div>
                            <div class="form-body">
                                <h6 class="sub-tittle">Team Work</h6>
                                <div class="form-group">
                                    <label>Skill Level<sup class="text-danger">*</sup></label>
                                    <select class="form-select" placeholder="Type Skills">
                                        <option>Select Skills</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Self Assesment</label>
                                    <div class="rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description ( Briefly describe the tasks performed earlier using the skill in 200 to 1000 words)*
                                        <sup class="text-danger">*</sup>
                                    </label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                                <h6 class="sub-tittle">Attitude</h6>
                                <div class="form-group">
                                    <label>Skill Level<sup class="text-danger">*</sup></label>
                                    <select class="form-select" placeholder="Type Skills">
                                        <option>Select Skills</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Self Assesment</label>
                                    <div class="rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description ( Briefly describe the tasks performed earlier using the skill in 200 to 1000 words)*
                                        <sup class="text-danger">*</sup>
                                    </label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                                <h6 class="sub-tittle">communication Skill</h6>
                                <div class="form-group">
                                    <label>Skill Level<sup class="text-danger">*</sup></label>
                                    <select class="form-select" placeholder="Type Skills">
                                        <option>Select Skills</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Self Assesment</label>
                                    <div class="rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description ( Briefly describe the tasks performed earlier using the skill in 200 to 1000 words)*
                                        <sup class="text-danger">*</sup>
                                    </label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                                <h6 class="sub-tittle">Analytical Skill</h6>
                                <div class="form-group">
                                    <label>Skill Level<sup class="text-danger">*</sup></label>
                                    <select class="form-select" placeholder="Type Skills">
                                        <option>Select Skills</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Self Assesment</label>
                                    <div class="rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="flaticon flaticon-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description ( Briefly describe the tasks performed earlier using the skill in 200 to 1000 words)*
                                        <sup class="text-danger">*</sup>
                                    </label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger-light btn-sm"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-success-light btn-sm">Submit</button>
                        <button type="button" class="btn btn-primary-light btn-sm">Experience</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Skill modal -->
        <div class="modal fade ag-modal" id="addSkills" tabindex="-1" aria-labelledby="addSkillsLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addSkillsLabel">Add Skill</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Skill<sup class="text-danger">*</sup></label>
                            <select id="single" class="js-states form-control" style="width:100%">
                                <option>Java</option>
                                <option>Javascript</option>
                                <option>PHP</option>
                                <option>Visual Basic</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Skill Level<sup class="text-danger">*</sup></label>
                            <select class="form-select" placeholder="Select Skill Level">
                                <option>Select Skill Level</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Year Of Experience</label>
                            <select class="form-select" placeholder="Year Of Experience">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Year Of Experience</label>
                            <select class="form-select" placeholder="Year Of Experience">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Implementations</label>
                            <select class="form-select" placeholder="Implementations">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Self Assesment</label>
                            <div class="rating-wrap">
                                <div class="rating-list">
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" id="starhalf" name="rating" value="half" />
                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>DESCRIPTION ( BRIEFLY DESCRIBE THE TASKS PERFORMED EARLIER USING THE SKILL IN 200 TO
                                1000 WORDS)
                                <sup class="text-danger">*</sup>
                            </label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary-light btn-sm">Add</button>
                        <button type="button" class="btn btn-danger-light btn-sm"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Delete Popup -->
        <div class="modal fade ag-modal" id="deletePopup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="deletePopupLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deletePopupLabel">Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0">Are you sure you want to delete this item?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>