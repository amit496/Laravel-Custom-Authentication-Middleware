<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Custom Auth</title>
    <link href="{{asset('Customer/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Customer/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Customer/assets/css/style.css')}}" rel="stylesheet" type="text/css">

</head>
<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">
        @include('Customer.Layout.sidebar')
        <div class="content-page">
            <div class="content">
                @include('Customer.Layout.header')
                <div class="page-content-wrapper">
                    @yield('content')
                </div>
            </div>
            @include('Customer.Layout.footer')
        </div>
    </div>

    <!-- jQuery  -->
    <script src="{{asset('Customer/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('Customer/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('Customer/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Customer/assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('Customer/assets/js/detect.js')}}"></script>
    <script src="{{asset('Customer/assets/js/fastclick.js')}}"></script>
    <script src="{{asset('Customer/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('Customer/assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('Customer/assets/js/waves.js')}}"></script>
    <script src="{{asset('Customer/assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('Customer/assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('Customer/assets/pages/dashboard.js')}}"></script>
    <script src="{{asset('Customer/assets/js/app.js')}}"></script>

    @yield('script')

</body>
</html>
