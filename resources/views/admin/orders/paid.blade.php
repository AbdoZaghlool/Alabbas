@extends('admin.layouts.master')

@section('title')
الطلبات المدفوعة
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
            <a href="{{ url('admin/orders/paid') }}">الطلبات المدفوعة</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>عرض الطلبات المدفوعة</span>
        </li>
    </ul>
</div>

<h1 class="page-title"> الطلبات المدفوعة
    {{--<small>عرض جميع الطلبات المدفوعة</small>--}}
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
                            <th>تاريخ الطلب</th>
                            <th> العمليات </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $orders as $record )
                        <tr class="odd gradeX">
                            <td>{{$record->id}}</td>
                            <td class="no_dec">{{$record->name}}</td>
                            <td>{{$record->created_at->format('Y-m-d H:i') }}</td>
                            <td>
                                <a class="btn btn-info" href="{{route('orders.show',$record->id)}}">عرض</a>
                            </td>
                        </tr>
                        @endforeach
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

<script>
    $(document).ready(function() {
        $('body').on('click', '.delete_data', function() {
            var id = $(this).attr('data');
            // console.log(id);
            var swal_text = 'الغاء ' + $(this).attr('data_name');
            var swal_title = 'هل أنت متأكد من الالغاء ؟';

            swal({
                title: swal_title
                , text: swal_text
                , type: "warning"
                , showCancelButton: true
                , confirmButtonClass: "btn-warning"
                , confirmButtonText: "تأكيد"
                , cancelButtonText: "إغلاق"
            }, function() {

                window.location.href = "{{ url('/') }}" + "/admin/orders/" + id + "/delete";

            });

        });
    });

</script>
@endsection
