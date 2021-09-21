<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        コミック貸出・返却管理 System
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/material-kit.css')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
    @include('includes.frontend.header')
    @yield('content')
    @include('includes.frontend.footer')
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/moment.min.js')}}"></script>


    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('assets/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/material-kit.js?v=2.2.0')}}" type="text/javascript"></script>
</body>

</html>