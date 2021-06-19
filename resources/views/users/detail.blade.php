@extends('home')

@section('title', 'Cập nhật công viêc')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>User detail</h2>
        </div>

        <div class="col-md-12">
            <form method="post" action="{{ route('users', $user->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Full name</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                </div>

                <div class="form-group">
                    <label>Ingame</label>
                    <input type="text" class="form-control" name="name_ingame" value="{{$user->name_ingame}}">
                </div>

                <div class="form-group">
                    <label>Birth date</label>
                    <input type="date" name="birth_date" class="form-control"  value="{{ $task->birth_date }}">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="{{$task->email}}">
                </div>

                <div class="form-group">
                    <label>Gender</label>

                </div>
                <button type="submit" class="btn btn-primary">Detail</button>
                <a href="{{route('users.list')}}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection
