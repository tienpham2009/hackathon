<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="card">
    <div class="card-header">
        <h1>User's List</h1>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Ingame</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $key => $item)
                <tr>
                    <td scope="row">{{$key + 1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->name_ingame}}</td>
                    <td>{{$item->birth_date}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->gender}}</td>
                    <td>
                        <a class="btn btn-success" href="{{route('',['id'=>$item->id])}}">Detail</a>
                    </td>
                </tr>
            @empty
                <p>No data</p>
            </tbody>
            @endforelse
        </table>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
</body>
</html>
