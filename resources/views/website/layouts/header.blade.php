<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="ar" lang="ar"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ar" lang="ar">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>{{env('APP_NAME')}}</title>

    <meta name="author" content="themesflat.com">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    @if(app()->getLocale() == 'ar')
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    @else
    <link rel="stylesheet" type="text/css" href="{{asset('style-en.css')}}">
    @endif


    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/colors/color1.css')}}" id="colors">


    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
    @yield('styles')

</head>

<body class="header-fixed page no-sidebar header-style-3 topbar-style-3 site-header-absolute menu-has-search"
    dir="{{LaravelLocalization::getCurrentLocaleDirection()}}">
