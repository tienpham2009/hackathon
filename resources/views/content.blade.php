@extends('home')
@section('content')
<!-- Main content -->
<section class="content" style="margin-top: 10px">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box"
                     style="background-size: cover; background-position:center;background-image: url('{{asset('image/LOL.jpg')}}')">
                    <div class="inner" style="height: 200px">
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box"
                     style="background-image: url('{{asset('image/pubgpc.jpg')}}'); background-size: cover; background-position:center;background-repeat: no-repeat;">
                    <div class="inner" style="height: 200px">
                    </div>
                    <div class="icon">
                        <i class="ion ion-sta   ts-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box"
                     style="background-image: url('{{asset('image/csgo.png')}}'); background-size: cover; background-position:center ">
                    <div class="inner" style="height: 200px">
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box"
                     style="background-size: cover; background-position:center;background-image: url('{{asset('image/freefire.jpeg')}}')">
                    <div class="inner" style="height: 200px">
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box"
                     style="background-size: cover; background-position:center;background-image: url('{{asset('image/lienquan.jpg')}}')">
                    <div class="inner" style="height: 200px">
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box"
                     style="background-size: cover; background-position:center;background-image: url('{{asset('image/pubgmobile.jpg')}}')">
                    <div class="inner" style="height: 200px">
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
    {{--        <div class="row">--}}
    {{--            <!-- Left col -->--}}
    {{--            <section class="col-lg-12">--}}
    {{--                <div class="img-slide img-slid-media d-flex justify-content-between mt-3">--}}
    {{--                    <div class="owl-carousel owl-theme">--}}
    {{--                        <div class="slide slide-1">--}}
    {{--                            <div class="slide-content">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="slide slide-2">--}}
    {{--                            <div class="slide-content">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </section>--}}
    {{--            <!-- right col -->--}}
    {{--        </div>--}}
    {{--    </div>--}}
</section>
@endsection
