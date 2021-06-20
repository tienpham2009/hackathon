<!doctype html>
<html lang="en">
<head>
    <title>Eternity Realm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/tempusdominus-bootstrap-4.min.css")}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/icheck-bootstrap.min.css")}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/jqvmap.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/adminlte.min.css")}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/OverlayScrollbars.min.css")}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/daterangepicker.css")}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/summernote-bs4.min.css")}}">
    <!-- lazy owl -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/owl.theme.default.min.css")}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset("css/style.css")}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

{{--Preloader
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{\Illuminate\Support\Facades\URL::asset('image/logo.png')}}" width="211px" height="211px" alt="Bookstore Logo">
</div>--}}
<!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        @include('navbar')
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
       @include('sidebar')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/jquery.min.js")}}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/jquery-ui.min.js")}}"></script>
<!-- Bootstrap 4 -->
{{--<script src="{{\Illuminate\Support\Facades\URL::asset("js/bootstrap.bundle.min.js")}}"></script>--}}
<!-- ChartJS -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/Chart.min.js")}}"></script>
<!-- Sparkline -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/sparkline.js")}}"></script>
<!-- JQVMap -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/jquery.vmap.min.js")}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset("js/jquery.vmap.usa.js")}}"></script>

<!-- jQuery Knob Chart -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/jquery.knob.min.js")}}"></script>
<!-- daterangepicker -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/moment.min.js")}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/tempusdominus-bootstrap-4.min.js")}}"></script>
<!-- Summernote -->
{{--<script src="{{\Illuminate\Support\Facades\URL::asset("js/summernote-bs4.min.js")}}"></script>--}}
<!-- overlayScrollbars -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/jquery.overlayScrollbars.min.js")}}"></script>
<!-- AdminLTE App -->
{{--<script src="{{\Illuminate\Support\Facades\URL::asset("js/adminlte.js")}}"></script>--}}
<!-- AdminLTE for demo purposes -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/demo.js")}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/dashboard.js")}}"></script>
<!-- MAIN JS -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/my.js")}}"></script>
<!-- LAZY OWL -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/jquery.min.js")}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset("js/owl.carousel.min.js")}}"></script>
<!-- content -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'
        integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo'
        crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>

