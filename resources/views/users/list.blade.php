@extends("home")
@section("content")
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
@endsection
