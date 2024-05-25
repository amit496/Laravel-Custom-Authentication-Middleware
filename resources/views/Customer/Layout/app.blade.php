<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Custom Auth</title>
    <!-- Core CSS -->
    <link href="{{asset('Customer/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Customer/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Customer/assets/css/style.css')}}" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{asset('Customer/assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Customer/assets/plugins/timepicker/tempusdominus-bootstrap-4.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Customer/assets/plugins/timepicker/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Customer/assets/plugins/clockpicker/jquery-clockpicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Customer/assets/plugins/colorpicker/asColorPicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Customer/assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Customer/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Customer/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Customer/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('Customer/css/style.css')}}">

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

    <!-- Core Libraries -->
    <script src="{{asset('Customer/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('Customer/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('Customer/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Customer/assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('Customer/assets/js/detect.js')}}"></script>
    <script src="{{asset('Customer/assets/js/fastclick.js')}}"></script>
    <script src="{{asset('Customer/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('Customer/assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('Customer/assets/js/waves.js')}}"></script>
    <script src="{{asset('Customer/assets/js/jquery.scrollTo.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('Customer/assets/plugins/timepicker/moment.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/timepicker/tempusdominus-bootstrap-4.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/timepicker/bootstrap-material-datetimepicker.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/clockpicker/jquery-clockpicker.min.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/colorpicker/jquery-asColor.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/colorpicker/jquery-asGradient.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/colorpicker/jquery-asColorPicker.min.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('Customer/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>

    <!-- Plugins Init -->
    <script src="{{asset('Customer/assets/pages/form-advanced.js')}}"></script>
    <script src="{{asset('Customer/assets/pages/dropify.init.js')}}"></script>

    <!-- Additional Plugins -->
    <script src="{{asset('Customer/assets/js/jquery.nicescroll.js')}}"></script>

    <!-- Custom App Script -->
    <script src="{{asset('Customer/assets/js/app.js')}}"></script>


    @yield('script')

</body>
</html>
