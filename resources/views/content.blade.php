@extends('home')
@section('content')
<section class="content" style="margin-top: 10px">
    <div class="container-fluid ">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box"
                     style="background-size: cover; background-position:center;background-image: url('{{asset('image/LOL.jpg')}}')">
                    <a href="{{route('users.list')}}" class="small-box-footer">
                    <div class="inner" style="height: 200px">
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <p class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></p>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box"
                     style="background-image: url('{{asset('image/pubgpc.jpg')}}'); background-size: cover; background-position:center;background-repeat: no-repeat;">
                    <a href="{{route('users.list')}}" class="small-box-footer">
                    <div class="inner" style="height: 200px">
                    </div>
                    <div class="icon">
                        <i class="ion ion-sta   ts-bars"></i>
                    </div>
                        <p class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></p>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box"
                     style="background-image: url('{{asset('image/csgo.png')}}'); background-size: cover; background-position:center ">
                    <a href="{{route('users.list')}}" class="small-box-footer">
                    <div class="inner" style="height: 200px">
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <p class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></p>
                    </a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box"
                     style="background-size: cover; background-position:center;background-image: url('{{asset('image/freefire.jpeg')}}')">
                    <a href="{{route('users.list')}}" class="small-box-footer">
                    <div class="inner" style="height: 200px">
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <p class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box"
                     style="background-size: cover; background-position:center;background-image: url('{{asset('image/lienquan.jpg')}}')">
                    <a href="{{route('users.list')}}" class="small-box-footer">
                    <div class="inner" style="height: 200px">
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <p class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box"
                     style="background-size: cover; background-position:center;background-image: url('{{asset('image/pubgmobile.jpg')}}')">
                    <a href="{{route('users.list')}}" class="small-box-footer">
                    <div class="inner" style="height: 200px">
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <p class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
