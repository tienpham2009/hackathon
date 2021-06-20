@extends("home")
@section("content")
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/list/style.css')}}">
    <style>
        .grow img {
            transition: 1s ease;
        }

        .grow img:hover {
            -webkit-transform: scale(1.2);
            -ms-transform: scale(1.2);
            transform: scale(1.2);
            transition: 1s ease;
        }
    </style>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->
<div class="container">
    <div class="row userMain">
        @foreach($users as $item)
            <div class="col-md-3 col-sm-4">
                <div class="userBlock">
                    <div class="backgrounImg">
                        @if($item->status === "online")
                            <img src="{{asset('image/green.png')}}">
                        @elseif($item->status === "playing")
                        <img src="{{asset('image/red.png')}}">
                        @endif
                    </div>
                    <div class="userImg">
                        <img src="https://image.ibb.co/es4AG7/author4.jpg">
                    </div>
                    <div class="userDescription">
                        <h5>{{$item->name}}</h5>
                        <p>{{$item->name_ingame}}</p>
                        <div class="followrs">
                            <span class="number"><?php echo rand(50, 500) ?></span>
                            <span>Followers</span>
                        </div>
                        <a href="">
                            <button class="btn">Follow</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
</html>
@endsection
