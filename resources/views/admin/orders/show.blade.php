@extends('admin.layouts.master')

@section('title')
الطلبات
@endsection

@section('styles')
<link rel="stylesheet" href="{{ URL::asset('admin/css/datatables.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin/css/datatables.bootstrap-rtl.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin/css/sweetalert.css') }}">
@endsection

@section('page_header')
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ url('admin/home') }}">لوحة التحكم</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{ url('admin/orders') }}">الطلبات</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>عرض الطلب رقم {{$order->id}}</span>
        </li>
    </ul>
</div>

<h1 class="page-title"> عرض الطلب
    {{--<small>عرض جميع الطلبات</small>--}}
</h1>
@include('flash::message')
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-body">
                <div class="table-toolbar">

                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>رقم الطلب</th>
                            <th>اسم العميل</th>
                            <th>الهاتف</th>
                            <th>البريد الالكتروني</th>
                            <th>المدينة</th>
                            <th>وصف الاستشارة</th>
                            <th>القيمة المدفوعة</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="odd gradeX">
                            <td class="no_dec">{{ $order->id }}</td>
                            <td class="no_dec">{{ $order->name }}</td>
                            <td class="no_dec">{{ $order->phone }}</td>
                            <td class="no_dec">{{ $order->email }}</td>
                            <td class="no_dec">{{ $order->city ? $order->city->name : '' }}</td>
                            <td class="no_dec">{{ $order->description }}</td>
                            <td class="no_dec">{{ $order->price }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

@endsection
@section('content')
@if (session('information'))
<div class="alert alert-success">
    {{ session('information') }}
</div>
@endif
@if (session('pass'))
<div class="alert alert-success">
    {{ session('pass') }}
</div>
@endif
@if (session('privacy'))
<div class="alert alert-success">
    {{ session('privacy') }}
</div>
@endif
@endsection

@section('scripts')
<script src="{{ URL::asset('admin/js/datatable.js') }}"></script>
<script src="{{ URL::asset('admin/js/datatables.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/datatables.bootstrap.js') }}"></script>
<script src="{{ URL::asset('admin/js/table-datatables-managed.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/sweetalert.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/ui-sweetalert.min.js') }}"></script>

@endsection
