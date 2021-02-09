@extends('website.layouts.master')
@section('styles')
<link rel="stylesheet" href="{{ URL::asset('inner.css') }}">
@endsection
@section('title')
@lang('messages.my-certifications')
@endsection

@section('content')

@include('flash::message')




<div id="featured-title" class="featured-title clearfix">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="/home" class="trail-begin">@lang('messages.main')</a>
                        <span class="sep">|</span>
                        <span class="trail-end"> @lang('messages.my-certifications') </span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    @lang('messages.my-certifications') </h1>
            </div>
        </div><!-- /.featured-title-inner-wrap -->
    </div><!-- /#featured-title-inner -->
</div>
<div class="themesflat-spacer clearfix" data-desktop="31" data-mobile="30" data-smobile="30"></div>




<div class="container">
    <div class="row">
        <div class="col-md-9">

            @if($certifications != null)
            <div class="table-responsive">
                <table class="table table-bordered mb-2">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">@lang('messages.name')</th>
                            <th class="text-center">@lang('messages.the-course')</th>
                            <th class="text-center">@lang('messages.date-obtained')</th>

                        </tr>
                    </thead>
                    @foreach($certifications as $record)

                    <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-center">
                                {{$record->name}}
                            </td>
                            <td class="text-center">
                                @if (app()->getLocale() == 'ar')
                                {{$record->course->name}}
                                @else
                                {{$record->course->name_en}}
                                @endif
                            </td>
                            <td class="text-center"> {{$record->created_at->format('d-m-y')}}</td>
                        </tr>
                    </tbody>

                    @endforeach
                </table>
            </div>

            @else

            <div class="alert alert-danger" role="alert">
                <p>لا يوجد بيانات حاليا</p>
            </div>

            @endif
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection
