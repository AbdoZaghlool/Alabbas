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
                                <span class="trail-end">  تسجيل الدخول  </span>
                            </div>
                        </div>
                    </div>
                    <div class="featured-title-heading-wrap">
                        <h1 class="feautured-title-heading">
                       تسجيل الدخول         </h1>
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

 <form method="POST" action="{{ route('login') }}">
                        @csrf


               
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="البريد الالكتروني "  required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="كلمة المرور"  name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">

                                    <label class="form-check-label" for="remember">
                                        تذكرني
                                    </label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                </div>
                            </div>
                            
                              <div class="col-md-6" style="text-align:left;">
                                   @if (Route::has('password.request'))
                                    <a   href="{{ route('password.request') }}">
                                        نسيت كلمه المرور
                                    </a>
                                @endif
                                 </div>
                        </div>



 <div class="themesflat-spacer clearfix" data-desktop="31" data-mobile="30" data-smobile="30" ></div>
        
                        <div class="form-group row mb-0">
                            <div class="col-md-12 " style="text-align:center;">
                                <button type="submit" class="wpcf7-form-control wpcf7-submit">
                                     تسجيل دخول
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


