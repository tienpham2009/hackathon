<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('css/login/style.css') }}">
</head>
<body style="background-image: url({{url('image/login-bg-bg.jpg')}});
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap py-5">
                    <div class="img d-flex align-items-center justify-content-center"
                         style="background-image: url(image/logo.png);"></div>
                    <h3 class="text-center mb-0">Chào mừng bạn trở lại!</h3>
                    <p class="text-center">Đăng nhập bằng tài khoản của Realm</p>
                    <form method="post" action="{{ route('submitLogin') }}" class="login-form">
                        @csrf
                        @if(session()->has('login-error'))
                            <p>
                                {{ session()->get('login-error') }}
                            </p>
                        @endif
                        <div class="form-group">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-user"></span></div>
                            <input type="email" name="email" class="form-control"
                                   placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <div class="icon d-flex align-items-center justify-content-center"><span></span>
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-user"></span></div>
                                <input type="email" name="email" class="form-control"
                                       placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-lock"></span></div>
                                <input type="password" name="password" class="form-control"
                                       placeholder="Password" required>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-100 text-md-right">
                                    <a href="#">Quên mật khẩu</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                        class="btn form-control btn-primary rounded submit px-3">
                                    Đăng nhập
                                </button>
                            </div>
                        </div>
                    </form>
            <div class="w-100 text-center mt-4 text">
                <p class="mb-0">Bạn chưa đăng ký?</p>
                <a href="{{ route('showFormRegistration') }}">Đăng ký ngay!</a>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<script src="{{ \Illuminate\Support\Facades\URL::asset("js/login/jquery.min.js") }}"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset("js/login/popper.js") }}"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset("js/login/bootstrap.min.js") }}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset("js/login/main.js")}}"></script>
</body>
</html>
