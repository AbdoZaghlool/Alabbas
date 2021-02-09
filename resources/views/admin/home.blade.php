@extends('admin.layouts.master')


@section('title')
لوحة التحكم
@endsection

@section('content')

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="/admin/home"> لوحة التحكم</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>الإحصائيات</span>
        </li>
    </ul>
</div>

<h1 class="page-title"> الإحصائيات
    <small>عرض الإحصائيات</small>
</h1>

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue">
            <div class="visual">
                <i class="fa fa-users"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>{{$admins}}</span>
                </div>
                <div class="desc"> المديرين</div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 yellow" href="{{route('cities.index')}}">
            <div class="visual">
                <i class="fa fa-building-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>{{\App\City::count()}}</span>
                </div>
                <div class="desc"> المدن </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="{{route('sliders.index')}}">
            <div class="visual">
                <i class="fa fa-file-image-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>{{\App\Slider::count()}}</span>
                </div>
                <div class="desc"> المدن </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="{{route('orders.index')}}">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>{{\App\Order::where('status','0')->count()}}</span>
                </div>
                <div class="desc"> الطلبات الغير مدفوعة </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="{{route('orders.paid')}}">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>{{\App\Order::where('status','1')->count()}}</span>
                </div>
                <div class="desc"> الطلبات المدفوعة </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="{{route('orders.canceled')}}">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>{{\App\Order::where('status','2')->count()}}</span>
                </div>
                <div class="desc"> الطلبات الملغية </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="{{route('sliders.index')}}">
            <div class="visual">
                <i class="fa fa-file-image-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>{{\App\Slider::count()}}</span>
                </div>
                <div class="desc"> السلايدر</div>
            </div>
        </a>
    </div>



</div>
@endsection
