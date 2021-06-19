<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body class="register-container">
<div>
    <article class="card-body mx-auto" style="max-width: 400px; background-color: whitesmoke">
        <h4 class="card-title mt-3 text-center">Create Account</h4>
        <p class="text-center">Join the Dark Realm of Phantasmal Dream!</p>
        <p>
            <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
            <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via
                facebook</a>
        </p>
        <form method="post" action="{{ route('registration') }}">
            @csrf
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="name" class="form-control" placeholder=" name" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="name_ingame" class="form-control" placeholder="name_ingame" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="email" class="form-control" placeholder="Email address" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="birth_date" class="form-control" placeholder="birth_date" type="date">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" name="password" placeholder="Create password" type="password">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <select name="gender" id="gender" class="form-control">
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <select name="game" id="game" class="form-control">
                    @foreach($games as $game)
                        <option value="{{ $game->id }}">{{$game->name}}</option>
                    @endforeach
                </select>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" name="image" placeholder="" type="file">
            </div> <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Create Account</button>
            </div> <!-- form-group// -->
            <p class="text-center">Have an account? <a href="{{route('showFormLogin')}}">Log In</a></p>
        </form>
    </article>
</div>
</body>
</html>












{{--<form action="{{ route('registration') }}" method="post">--}}
{{--    <p>name</p>--}}
{{--    @csrf--}}
{{--    <input type="text" name="name">--}}
{{--    <p>name in game</p>--}}
{{--    <input type="text" name="name_ingame">--}}
{{--    <p>birth_date</p>--}}
{{--    <input type="date" name="birth_date">--}}
{{--    <p>email</p>--}}
{{--    <input type="email" name="email">--}}
{{--    <p>password</p>--}}
{{--    <input type="password" name="password">--}}
{{--    <p>gender</p>--}}
{{--    <select name="gender" id="gender">--}}
{{--        <option value="male">male</option>--}}
{{--        <option value="female">female</option>--}}
{{--    </select>--}}
{{--    <p>game</p>--}}
{{--    <select name="game" id="game">--}}
{{--        @foreach($games as $game)--}}
{{--            <option value="{{ $game->id }}">{{$game->name}}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--    <p>image</p>--}}
{{--    <input type="file" name="image">--}}
{{--    <button type="submit">dang ki</button>--}}
{{--</form>--}}
