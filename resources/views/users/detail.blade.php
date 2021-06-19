@extends('home')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>User detail</h2>
        </div>

        <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                        <td>Full name</td>
                        <td>Image</td>
                        <td>Ingame</td>
                        <td>Birth date</td>
                        <td>Email</td>
                        <td>Gender</td>
                    </tr>
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>
                            <img src="" alt="">
                        </td>
                        <td>{{$user->name_ingame}}</td>
                        <td>{{$user->birth_date}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->gender}}</td>
                    </tr>
                </table>

                <a href="{{route('users.list')}}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
