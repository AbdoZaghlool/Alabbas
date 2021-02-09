@extends('website.layouts.master')
@section('styles')
<link rel="stylesheet" href="{{ URL::asset('inner.css') }}">
@endsection
@section('title')
@lang('messages.my-courses')
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
                        <span class="trail-end"> @lang('messages.my-courses') </span>
                    </div>
                </div>
            </div>
            <div class="featured-title-heading-wrap">
                <h1 class="feautured-title-heading">
                    @lang('messages.my-courses') </h1>
            </div>
        </div><!-- /.featured-title-inner-wrap -->
    </div><!-- /#featured-title-inner -->
</div>
<div class="themesflat-spacer clearfix" data-desktop="31" data-mobile="30" data-smobile="30"></div>


<div class="container">
    <div class="row">
        <div class="col-md-9">

            @forelse($bank as $record)

            <div class="col-md-3">
                <div class="item-box  ">
                    <div>
                        <div class="img-item">
                            <img src="{{asset('/uploads/cover_images/'.$record->courses->cover_image)}}"
                                style="height:140px; width:100%;" />
                        </div>
                        <hr>
                        <div class="caption-item">
                            <a style="color:#ff8f01; font-size:18px; margin-bottom:5px; font-weight:600;">
                                @if (app()->getLocale() == 'ar')
                                {{$record->courses->name}}
                                @else
                                {{$record->courses->name_en}}
                                @endif
                            </a>
                        </div>
                        <div class="caption-item-det">
                            <a>
                                @if (app()->getLocale() == 'ar')
                                {{$record->courses->content}}
                                @else
                                {{$record->courses->content_en}}
                                @endif
                            </a><br>
                            <h5 style="color:orange;">{{$record->courses->price}}</h5>
                        </div>
                        <div style="text-align: center;">
                            <a href="{{route('OpenRecord' , $record->courses->id)}}"
                                class="themesflat-button bg-accent2222 big"><span> @lang('messages.Register_now')
                                </span></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            @empty
            {{-- @if($fatoora == null)
            لا يوجد دورات حاليا بادر بحجز دوراتك الان!
            @endif --}}
            @endforelse

            <hr>
            {{-- @if($fatoora->get() != null)

            <h2>دورات تم دفعها باستخدام ماي فاتورة</h2>
            @foreach($fatoora->get() as $record)
            <div class="col-md-3">
                <div class="item-box  ">
                    <div>
                        <div class="img-item">
                            <img src="{{asset('/uploads/cover_images/'.$record->courses->cover_image)}}"
            style="height:140px; width:100%;" />
        </div>
        <hr>
        <div class="caption-item">
            <a style="color:#ff8f01; font-size:18px; margin-bottom:5px; font-weight:600;">
                {{$record->courses->name}} </a>
        </div>
        <div class="caption-item-det">
            <a>
                {{$record->courses->content}}</a>
        </div>
        <div style="text-align: center;">
            <a href="{{route('OpenRecord' , $record->courses->id)}}" class="themesflat-button bg-accent2222 big"><span>
                    سجل
                    معنا الان </span></a>
        </div>
    </div>
</div>
</div>

@endforeach
@else
لا يوجد دورات حاليا بادر بحجز دوراتك الان!
@endif
--}}


</div>
</div>
</div>
@endsection
@section('scripts')

@endsection
