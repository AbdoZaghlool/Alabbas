@extends('admin.layouts.master')

@section('title')
اضف سلايد جديدة
@endsection
@section('styles')
<link rel="stylesheet" href="{{ URL::asset('admin/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin/css/select2-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin/css/bootstrap-fileinput.css') }}">

@endsection

@section('page_header')
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="/admin/home">لوحة التحكم</a>
            <i class="fa fa-circle"></i>
        </li>

        <li>
            <a href="/admin/sliders">السلايدر</a>
            <i class="fa fa-circle"></i>
        </li>

        <li>
            <span> اضف سلايد جديدة</span>
        </li>
    </ul>
</div>

<h1 class="page-title"> اضف سلايد جديدة
    <small> اضف سلايد جديدة</small>
</h1>
@endsection

@section('content')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="row">

    <div class="col-md-8">
        <!-- BEGIN TAB PORTLET-->
        @if(count($errors))
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        @include('flash::message')
        <form action="{{route('sliders.store')}}" method="post" enctype="multipart/form-data">
            <input type='hidden' name='_token' value='{{Session::token()}}'>

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->

                <div class="row">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered table-responsive">
                        <div class="portlet-body form">
                            <div class="form-horizontal" role="form">
                                <div class="form-body">
                                    <div class="form-body">
                                        <div class="form-group ">
                                            <label class="control-label col-md-3">الصورة </label>
                                            <div class="col-md-9">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; ">
                                                    </div>
                                                    <div>
                                                        <span class="btn red btn-outline btn-file">
                                                            <span class="fileinput-new"> اختر الصورة </span>
                                                            <span class="fileinput-exists"> تغيير </span>
                                                            <input type="file" name="image"> </span>
                                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> إزالة </a>
                                                    </div>
                                                </div>
                                                @if ($errors->has('image'))
                                                <span class="help-block">
                                                    <strong style="color: red;">{{ $errors->first('image') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->

            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn green">حفظ</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END TAB PORTLET-->





    </div>
</div>

@endsection

@section('scripts')

<script src="{{ URL::asset('admin/js/select2.full.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/components-select2.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/bootstrap-fileinput.js') }}"></script>

@endsection
