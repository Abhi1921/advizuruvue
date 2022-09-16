<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    @stack('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('assets/admin/images/logo.png')}}">


    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @stack('stylesheets')
    <script>
        window.Laravel = {!!json_encode(["siteUrl" => url("/"), 'csrfToken' => csrf_token()]) !!}
    </script>

    <style>
        .help-block {
            color: red;
        }

        .rounded {
            border-radius: 9rem !important;
        }

        .metismenu a:hover {
            color: #ffffff !important;
            background-color: #bf6a05;
        }

        .side-menu {
            margin-top: 0px;
        }

        .menu-title {
            color: #bf6a05;
        }

        .enlarged #wrapper .left.side-menu #sidebar-menu ul>li:hover>a {
            color: white !important;
            background-color: #bf6a05 !important;
        }

        .enlarged #wrapper #sidebar-menu ul ul {
            color: white !important;
            background-color: #bf6a05 !important;
        }
        .input-group-text { 
            font-size: 13px !important;
        }
    </style>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        @include('admin.partials.header')

        @include('admin.partials.sidebar') 

        <div class="content-page">
            @yield('content')
            @include('admin.partials.footer')
        </div>
    </div>

    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/admin/js/waves.min.js')}}"></script>

    <!-- peity JS -->
    <script src="{{asset('assets/admin/plugins/peity-chart/jquery.peity.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/admin/js/app.js')}}"></script>
    <script>
        window.addEventListener("pageshow", function (event) {
            var historyTraversal = event.persisted ||
                (typeof window.performance != "undefined" &&
                    window.performance.navigation.type === 2);
            if (historyTraversal) {
                // Handle page restore.
                window.location.reload();
            }
        });
    </script>
    @stack('appendJs')
    @stack('appendToBody')

    <script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute(
            'content');
    </script>
    <script src="{{asset('assets/admin/js/post-jobs.js') }}" type="text/javascript" charset="utf-8"></script>
    <script>
        /*$(window).bind('beforeunload', function(){
                $("form").each(function() {
                    this.reset();
                 });
              });*/
    </script>

</body>

</html>