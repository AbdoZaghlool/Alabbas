@extends('website.layouts.master')
@section('styles')
<link rel="stylesheet" href="{{ URL::asset('inner.css') }}">
@endsection
@section('content')


<div id="featured-title" class="featured-title clearfix">
            <div id="featured-title-inner" class="container clearfix">
                <div class="featured-title-inner-wrap">                    
                    <div id="breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumb-trail">
                                <a href="#" class="trail-begin">الرئيسية</a>
                                <span class="sep">|</span>
                                <span class="trail-end">     {{ __('تسجيل جديد') }}  </span>
                            </div>
                        </div>
                    </div>
                    <div class="featured-title-heading-wrap">
                        <h1 class="feautured-title-heading">
                        {{ __('تسجيل جديد') }}               </h1>
                    </div>
                </div><!-- /.featured-title-inner-wrap -->
            </div><!-- /#featured-title-inner -->            
        </div>
        <div class="themesflat-spacer clearfix" data-desktop="31" data-mobile="30" data-smobile="30" ></div>
        
        
<div class="container full">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            
            
            
            
            
    <div class="themesflat-contact-form style-2 w100 clearfix">
      <div role="form" class="wpcf7" id="wpcf7-f184-p8-o1" lang="ar" dir="rtl">
<div class="screen-reader-response"></div>
 <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
       @csrf
       <input id="name" type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    value="{{ old('name') }}" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="الاسم" 
                                     required autofocus>
                                    
                                      @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                                
              
                   <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" name="email"
                                    value="{{ old('email') }}" placeholder="البريد الالكتروني"  required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                              
            <input id="phone_number" type="text"
                                    class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}"
                                    name="phone_number" value="{{ old('phone_number') }}" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  placeholder="رقم الهاتف "  required>

                                @if ($errors->has('phone_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                                @endif
                                
                                
                 <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password"  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  placeholder="كلمة المرور  "   required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif     
                                
                                
                                
             <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  placeholder="تأكيد كلمة المرور   " required>
                                
 
 
  <div class="form-group row">
                            <label for="image" class="col-md-2 col-form-label text-md-right">الصورة الشخصية</label>

                            <div class="col-md-10">
                                {!! Form::file('image' , ['class'=>'form-control']) !!}
                                @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

 <div class="themesflat-spacer clearfix" data-desktop="31" data-mobile="30" data-smobile="30" ></div>
        
                        <div class="form-group row mb-0">
                            <div class="col-md-12 " style="text-align:center;">
                                <button type="submit" class="wpcf7-form-control wpcf7-submit">
                                    {{ __('تسجيل جديد') }}
                                </button>
                            </div>
                        </div>
                    </form>
 </div>
 <div class="themesflat-spacer clearfix" data-desktop="31" data-mobile="30" data-smobile="30" ></div>



 
        </div>
    </div>
</div></div>
@endsection
