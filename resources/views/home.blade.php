<!doctype html>
<html lang="en">
<head>
    <title>Eternity Realm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|" rel="stylesheet" type="text/css">
    <link href="{{\Illuminate\Support\Facades\URL::asset("css/fonts/font-awesome.min.css")}}" rel="stylesheet"
          type="text/css">
    <link href="{{\Illuminate\Support\Facades\URL::asset("css/fonts/lineo-icon/style.css")}}" rel="stylesheet"
          type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset("css/style.css")}}">
</head>
<body class="slider-collapse">
<div id="site-content">
    <div class="site-header">
        <div class="container">
            <a href="{{route("home")}}" id="branding">
                <img src="{{\Illuminate\Support\Facades\URL::asset('image/logo.png')}}" width="45px" height="45px"
                     alt="Logo" class="logo">
                <div class="logo-text">
                    <h1 class="site-title">Eternity Realm</h1>
                    <small class="site-description">"Apes together strong"</small>
                </div>
            </a> <!-- #branding -->

            <div class="right-section pull-right">
                <a href="#">User</a>
            </div> <!-- .right-section -->

            <div class="main-navigation">
                <button class="toggle-menu"><i class="fa fa-bars"></i></button>
                <ul class="menu">
                    <li class="menu-item home current-menu-item"><a href="index.html"><i class="icon-home"></i></a>
                    </li>
                    <li class="menu-item"><a href="products.html">Accessories</a></li>
                    <li class="menu-item"><a href="products.html">Promotions</a></li>
                    <li class="menu-item"><a href="products.html">PC</a></li>
                    <li class="menu-item"><a href="products.html">Playstation</a></li>
                    <li class="menu-item"><a href="products.html">Xbox</a></li>
                    <li class="menu-item"><a href="products.html">Wii</a></li>
                </ul> <!-- .menu -->
                <div class="search-form">
                    <label><img src="images/icon-search.png"></label>
                    <input type="text" placeholder="Search...">
                </div> <!-- .search-form -->

                <div class="mobile-navigation"></div> <!-- .mobile-navigation -->
            </div> <!-- .main-navigation -->
        </div> <!-- .container -->
    </div> <!-- .site-header -->

    <!-- content -->
    <?php
    include_once "../resources/views/content.php"
    ?>
    <!-- footer -->
    <?php
    include_once "../resources/views/footer.php"
    ?>
</div>
<script src="{{\Illuminate\Support\Facades\URL::asset("js/jquery-1.11.1.min.js")}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset("js/plugins.js")}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset("js/app.js")}}"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>
