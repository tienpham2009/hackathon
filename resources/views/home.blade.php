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
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php?page=default" class="nav-link">Home</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" name="search" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>

    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <img src="image/logo.png" alt="Web Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Eternity Realm</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">User Name</a>
                </div>
            </div>
            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-thumbs-up"></i>
                            <p>

                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fas fa-medal"></i>
                            <p>
                                <span class="right badge badge-danger">Hot</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-bookmark"></i>
                            <p>

                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <div class="form-inline">
                                <div class="input-group" data-widget="sidebar-search">
                                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                           aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-sidebar">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p></p>
                                    <span class="right badge badge-primary"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-feather-alt"></i>
                            <p>

                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?page=author" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p></p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-book"></i>
                            <p>

                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?page=booklist" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p></p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-user"></i>
                            <p>
                                Thông tin cá nhân
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?page=logout" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        Log out
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content" style="margin-top: 10px">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box"
                             style="background-image: url('public/css/box.jpeg'); background-size: cover; background-position:center ">
                            <div class="inner">
                                <h3 style="font-family: fantasy;color: red">??</h3>
                                <p style="font-family: fantasy;color: red">Something</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box"
                             style="background-image: url('public/css/box3.jpg'); background-size: cover; background-position:center ">
                            <div class="inner">
                                <h3 style="font-family: fantasy;color: gold">??</h3>
                                <p style="font-family: fantasy;color: gold">Something</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-sta   ts-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box"
                             style="background-image: url('public/css/box2.jpg'); background-size: cover; background-position:center ">
                            <div class="inner">
                                <h3 style="font-family: fantasy;color: cyan">??</h3>
                                <p style="font-family: fantasy;color: cyan">Something</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12">
                        <div class="img-slide img-slid-media d-flex justify-content-between mt-3">
                            <div class="owl-carousel owl-theme">
                                <div class="slide slide-1">
                                    <div class="slide-content">
                                    </div>
                                </div>
                                <div class="slide slide-2">
                                    <div class="slide-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- right col -->
                </div>
            </div>
        </section>
        @include('content')
        @yield("content")
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>


<!-- content -->

<script src="{{\Illuminate\Support\Facades\URL::asset("js/jquery.min.js")}}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/jquery-ui.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/bootstrap.bundle.min.js")}}"></script>
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
<script src="{{\Illuminate\Support\Facades\URL::asset("js/summernote-bs4.min.js")}}"></script>
<!-- overlayScrollbars -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/jquery.overlayScrollbars.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{\Illuminate\Support\Facades\URL::asset("js/adminlte.js")}}"></script>
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
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items:1,
            loop:true,
            nav:true,
            dots:true,
            autoplay:true,
            autoplaySpeed:2000,
            smartSpeed:2500,
            autoplayHoverPause:true
        });
    });
</script>
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
