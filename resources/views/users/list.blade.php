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
<div class="col-12 col-sm-12 row mb-2">
    @foreach($users as $key => $item)
        <div class="col-sm-3 grow" style="margin-top: 10px">
            <div class="card text-center">
                <div>
                    <a href="{{route('users.show',['id'=>$item->id])}}" style="text-decoration: none">
                        <div class="card-body">
                            <img src="{{$item->image}}" style="width: 100% ; height: 150px"/>
                        </div>
                        <div class="card-header">
                            {{$item->name}}<span class="right badge badge-danger">Hot</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
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
