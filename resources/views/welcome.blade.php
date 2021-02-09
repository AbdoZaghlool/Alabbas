<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="ar" lang="ar"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ar" lang="ar">
<!--<![endif]-->

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>عبدالعزيز للاستشارات</title>

    <meta name="author" content="themesflat.com">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/lightbox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/colors/color1.css')}}" id="colors">


    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->

</head>

<body dir="rtl" class="  page no-sidebar header-style-3 topbar-style-3 menu-has-search">

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            <div id="site-header-wrap">

                <!-- Header -->
                <header id="site-header">

                    <div id="site-header-inner" class="container">
                        <div class="wrap-inner clearfix">
                            <div id="site-logo" class="clearfix">
                                <div id="site-log-inner">
                                    <a href="home.html" rel="home" class="main-logo">
                                        <img src="{{asset('assets/img/logo.png')}}" style="max-width: 100%;" alt="">
                                    </a>
                                </div>
                            </div><!-- /#site-logo -->

                            <div style="color: #fff; font-size:32px;padding-top:50px; text-align:center;">
                                لحجز الجلسات الاستشارية
                            </div>

                        </div><!-- /.wrap-inner -->

                    </div>

                    <div class="newmenu">
                        <div class="container">
                            <p style="color: #fff; font-size: 20px; text-align: center;">بكالوريوس إدارة اعمال – جامعة الملك سعود. مؤسس وصاحب سلسلة مقاهي أطياف الكيف
                                -
                                مستثمر بمجالات متعددة.</p>
                        </div>

                    </div><!-- /#site-header-inner -->

                </header><!-- /#site-header -->
            </div><!-- #site-header-wrap -->

            <!-- Main Content -->
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">
                                <!-- SLIDER -->

                                <div dir="ltr" id="mobonly" class="rev_slider_wrapper fullwidthbanner-container">
                                    <div id="rev-slider2" class="rev_slider fullwidthabanner">
                                        <ul>

                                            @forelse ($things['sliders'] as $slide)
                                            <li data-transition="random">
                                                <!-- Main Image -->
                                                <img src="{{asset('uploads/sliders/'.$slide->image)}}" alt="" data-bgposition="center center" data-no-retina>
                                            </li>
                                            @empty
                                            <li data-transition="random">
                                                <!-- Main Image -->
                                                <img src="{{asset('assets/img/11.jpg')}}" alt="" data-bgposition="center center" data-no-retina>
                                            </li>
                                            @endforelse


                                        </ul>
                                    </div>
                                </div>




                                <div class="row-news" id="mobonlyhide">
                                    <div class="container">
                                        <div class="row clearfix">
                                            <div class="col-md-4">

                                                <div class="bordwr">
                                                    <img src="{{asset('assets/img/11.jpg')}}" />
                                                </div>


                                            </div>

                                            <div class="col-md-4" style="    margin-top: -55px;">

                                                <div class="bordwr">
                                                    <img src="{{asset('assets/img/img.jpg')}}" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">

                                                <div class="bordwr">
                                                    <img src="{{asset('assets/img/33.jpg')}}" />
                                                </div>

                                            </div>
                                        </div><!-- /.row -->

                                    </div><!-- /.container -->

                                </div>

                                <div class="row-img" style="background: #00000061; padding-top:30px; padding-bottom: 30px; margin-top:20px;">
                                    <div class="container">
                                        <ul style="list-style: disc; color:#fff; font-size:18px;">
                                            <li style="list-style: disc;line-height: 30px;">حائز على عدة دورات لصنع المخبوزات في باريس وبروكسل، والأكاديمية السعودية لفن الطهي (زادك).
                                            </li>
                                            <li style="list-style: disc;line-height: 30px;">حاصل على دورة الرسم على اللاتيه
                                                <span style="color: #f9eb66;">2017 & 2020 </span>
                                                من معهد ليميني –المملكة المتحدةالبريطانية

                                            </li>
                                        </ul>
                                    </div>

                                </div>



                                @include('flash::message')
                                <!-- PARTNER -->
                                <div class="row-partner">
                                    <div class="container">
                                        <div class="row">

                                            <form action="{{route('postOrder')}}" method="post" class="wpcf7-form init" novalidate="novalidate">@csrf
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="184">
                                                    <input type="hidden" name="_wpcf7_version" value="5.2.2">
                                                    <input type="hidden" name="_wpcf7_locale" value="ar">
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f184-o1">
                                                    <input type="hidden" name="_wpcf7_container_post" value="0">
                                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                                </div>
                                                <div class="row formmain">
                                                    <div class="col-md-3">الاسم الثلاثي باللغة العربية:</div>
                                                    <div class="col-md-9">
                                                        <span class="wpcf7-form-control-wrap name">
                                                            <input type="text" name="name" value="{{old('name')}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                            @error('name')
                                                            <span class="help-block">
                                                                <strong style="color: red;">{{ $errors->first('name') }}</strong>
                                                            </span>
                                                            @enderror
                                                        </span>
                                                    </div>

                                                    <div class="col-md-3">رقم الجوال:</div>
                                                    <div class="col-md-9">
                                                        <span class="wpcf7-form-control-wrap phone">
                                                            <input type="text" name="phone" value="{{old('phone')}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                            @error('phone')
                                                            <span class="help-block">
                                                                <strong style="color: red;">{{ $errors->first('phone') }}</strong>
                                                            </span>
                                                            @enderror
                                                        </span>
                                                    </div>

                                                    <div class="col-md-3">البريد الالكتروني:</div>
                                                    <div class="col-md-9">
                                                        <span class="wpcf7-form-control-wrap email">
                                                            <input type="text" name="email" value="{{old('email')}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                            @error('email')
                                                            <span class="help-block">
                                                                <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                                            </span>
                                                            @enderror
                                                        </span>
                                                    </div>

                                                    <div class="col-md-3">اوصف الاستشارة باختصار :</div>
                                                    <div class="col-md-9">
                                                        <span class="wpcf7-form-control-wrap description">
                                                            <input type="text" name="description" value="{{old('description')}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                            @error('description')
                                                            <span class="help-block">
                                                                <strong style="color: red;">{{ $errors->first('description') }}</strong>
                                                            </span>
                                                            @enderror
                                                        </span>
                                                    </div>

                                                    <div class="col-md-3">المدينة:</div>
                                                    <div class="col-md-9">
                                                        <span class="wpcf7-form-control-wrap city">
                                                            <select name="city_id" id="city" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required">
                                                                <option value="0" selected disabled>اختر مدينة </option>
                                                                @forelse ($things['cities'] as $city)
                                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                                                @empty
                                                                <option value="0">لا يوجد مدن حاليا</option>
                                                                @endforelse
                                                            </select>
                                                            @error('city_id')
                                                            <span class="help-block">
                                                                <strong style="color: red;">{{ $errors->first('city_id') }}</strong>
                                                            </span>
                                                            @enderror
                                                        </span>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-3">الدفع:</div>
                                                    <div class="col-md-9">
                                                        <span class="wpcf7-form-control-wrap city">
                                                            <select name="payment_method">
                                                                <option value="0" selected disabled>اختر طريقة الدفع </option>
                                                                <option value="2">فيزا او ماستر</option>
                                                                <option value="6"> بطاقة مدي</option>
                                                                <option value="11">apple pay</option>
                                                            </select>
                                                            @error('payment_method')
                                                            <span class="help-block">
                                                                <strong style="color: red;">{{ $errors->first('payment_method') }}</strong>
                                                            </span>
                                                            @enderror
                                                        </span>
                                                    </div>


                                                    <div class="row-img" style="background: #000000b0; padding-top:30px; padding-bottom: 5px;">
                                                        <div class="container">
                                                            <ul style=" color:#fff; font-size:18px; text-align: center;">
                                                                <li style="line-height: 30px;">
                                                                    <p class="themesflat-button bg-light-white big">قيمه الجلسة الاستشاريه: {{$things['setting']->payment_value}}ريال</p>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                    </div>

                                                    <div class="col-md-4"> </div>
                                                    <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                                                </div>
                                                <input type="submit" value="الدفع">
                                            </form>


                                        </div><!-- /.row -->
                                        <div class="themesflat-spacer clearfix" data-desktop="58" data-mobile="35" data-smobile="35"></div>
                                    </div><!-- /.container -->
                                </div>
                                <!-- END PARTNER -->











                            </div><!-- /.page-content -->
                        </div><!-- /#inner-content -->
                    </div><!-- /#site-content -->
                </div><!-- /#content-wrap -->
            </div><!-- /#main-content -->



        </div><!-- /#page -->
    </div><!-- /#wrapper -->
    <a id="scroll-top"></a>
    <!-- Javascript -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/tether.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/animsition.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/countto.js')}}"></script>
    <script src="{{asset('assets/js/equalize.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel2.thumbs.js')}}"></script>

    <script src="{{asset('assets/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('assets/js/gmap3.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>
    <script src="{{asset('assets/js/shortcodes.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Revolution Slider -->
    <script src="{{asset('includes/rev-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('includes/rev-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('assets/js/rev-slider.js')}}"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{asset('includes/rev-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('includes/rev-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('includes/rev-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('includes/rev-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('includes/rev-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('includes/rev-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('assets/js/lightbox.min.js')}}"></script>
</body>
</html>
