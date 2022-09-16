<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')

    <link rel="shortcut icon" href="{{asset('assets/admin/images/logo.png')}}">
    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet" type="text/css">
    @stack('stylesheets')
    <script>
        window.Laravel = {!!json_encode(["siteUrl" => url("/"), 'csrfToken' => csrf_token()]) !!}
    </script>
</head>

<body>

    <div class="home-btn d-none d-sm-block">
        <a href="{{route('home')}}" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>

    <div class="wrapper-page">

        @yield('content')
        @include('admin.auth.partials.copyright')
    </div>
    <!-- end wrapper-page -->
    <script>
        /*window.addEventListener( "pageshow", function ( event ) {
        var historyTraversal = event.persisted || 
                               ( typeof window.performance != "undefined" && 
                                    window.performance.navigation.type === 2 );
        if ( historyTraversal ) {
          // Handle page restore.
          window.location.reload();
        }
      });*/
    </script>

    <!-- jQuery  -->
    <script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/admin/js/waves.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/admin/js/app.js')}}"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute(
            'content');
    </script>
    <script src="{{asset('assets/admin/js/post-jobs.js') }}" type="text/javascript" charset="utf-8"></script>
    <script>
        $(window).bind('beforeunload', function () {
            $("form").each(function () {
                this.reset();
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
    <script>
        $(function () {
            // guess user timezone 
            $('#tz').val(moment.tz.guess())
        })
    </script>
    @stack('appendJs')
</body>

</html>