@extends('website.layouts.master')
@section('styles')
<link rel="stylesheet" href="{{ URL::asset('inner.css') }}">
@endsection
@section('title')
@lang('messages.edit_profile')
@endsection

@section('content')

@include('flash::message')




<div id="featured-title" class="featured-title clearfix">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="#" class="trail-begin">@lang('messages.main')</a>
                        <span class="sep">|</span>
                        <span class="trail-end"> @lang('messages.edit_profile') </span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    @lang('messages.edit_profile') </h1>
            </div>
        </div><!-- /.featured-title-inner-wrap -->
    </div><!-- /#featured-title-inner -->
</div>
<div class="themesflat-spacer clearfix" data-desktop="31" data-mobile="30" data-smobile="30"></div>




<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div>
                {!! Form::model($model, ['action'=>['HomeController@updateProfile'],'method'=>'PUT']) !!}

                <div class="form-group">
                    @if (app()->getLocale() == 'ar')
                    {{Form::label('name','اسم العميل')}}
                    @else
                    {{Form::label('name','Client Name')}}
                    @endif
                    {{Form::text('name',$model->name,['class'=>'form-control','required'])}}
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    @if (app()->getLocale() == 'ar')
                    {{Form::label('email','ايميل العميل')}}
                    @else
                    {{Form::label('email','Client Email')}}
                    @endif
                    {{Form::text('email',$model->email,['class'=>'form-control','required'])}}
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    @if (app()->getLocale() == 'ar')
                    {{Form::label('phone_number','هاتف العميل')}}
                    @else
                    {{Form::label('phone_number','Client phone')}}
                    @endif
                    {{Form::text('phone_number',$model->phone_number,['required','class'=>'form-control'])}}
                    @if ($errors->has('phone_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    @if (app()->getLocale() == 'ar')
                    {{Form::label('password','الرقم السري ')}}
                    @else
                    {{Form::label('password','Password ')}}
                    @endif
                    {{Form::password('password',null,['required','class'=>'form-control'])}}
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    @if (app()->getLocale() == 'ar')
                    {{Form::label('password_confirmation',' تأكيد الرقم السري ')}}
                    @else
                    {{Form::label('password_confirmation',' Password Confirmation ')}}
                    @endif
                    {{Form::password('password_confirmation',null,['required','class'=>'form-control'])}}
                    @if ($errors->has('password_confirmation'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    @if (app()->getLocale() == 'ar')
                    {!! Form::submit('تعديل', ['class' => 'btn btn-primary']) !!}
                    @else
                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                    @endif
                </div>

                {!! Form::close() !!}
            </div>

            <div>
                {!! Form::model($model, ['action'=>['HomeController@updateImg' ,$model->id],'method'=>'PUT', 'enctype'
                => 'multipart/form-data']) !!}

                <div class="form-group">
                    @if (app()->getLocale() == 'ar')
                    {{Form::label('image','تغيير الصورة الشخصية')}}
                    @else
                    {{Form::label('image','Update Image')}}
                    @endif
                    {!! Form::file('image', ['class'=>'form-control']) !!}
                    @if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    @if (app()->getLocale() == 'ar')
                    {!! Form::submit('تعديل', ['class' => 'btn btn-primary']) !!}
                    @else
                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </div>
            <br>

        </div>

        <div class="col-md-3">
            <br>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if($model->image !==null)
                    <img src='{{ asset("uploads/users/$model->image") }}'>
                    @endif
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
@section('scripts')

@endsection
