<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Auth</title>
    <!-- Favicon -->
    <!-- <link rel="icon" href="admin/img/brand/favicon.png" type="image/png"> -->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin_assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/argon.css?v=1.2.0')}}" type="text/css">
    <style>
        body {
            position: relative;
            height: 100vh;
        }

        .main-content {
            position: absolute;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
        }

        .auth-text {
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>
@stack('styles')

<body class="bg-default">
    <!-- Main content -->
    <div class="main-content">
        <!-- Page content -->
        @yield('content');
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('admin_assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    @stack('scripts')
</body>

</html>