<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/favicon.png">
    <title>Sandbox</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors/purple.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="">
    <div class="content-wrapper overflow-hidden">
        <header class="wrapper bg-soft-primary">
            @include('layouts.navbar')
            <!-- /.navbar -->
        </header>
        <!-- /header -->
        @yield('section-content')
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    @include('layouts.footer')
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/bs/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>
