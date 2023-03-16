<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MSS Employee System') }}</title>
    <!-- Styles -->
  <style type="text/css">
    @font-face {
       font-family: myKhHanuman;
       src: url('{{ asset('assets/kh-font/Hanuman.woff') }}');
    }
    @font-face {
       font-family: myKhFreehand;
       src: url('{{ asset('assets/kh-font/Kh-Freehand.woff') }}');
    }
    @font-face {
       font-family: myKhBattambang;
       src: url('{{ asset('assets/kh-font/KhmerOSbattambang.woff') }}');
    }
    @font-face {
       font-family: myKhMetal;
       src: url('{{ asset('assets/kh-font/Kh-Metal-Chrieng.woff') }}');
    }
    @font-face {
       font-family: KHmuollight;
       src: url('{{ asset('assets/kh-font/KhmerOS_muollight.ttf') }}');
    }
    body,h1,h2,h3,h4,h5,h6,a{
      font-family:"Open Sans",sans-serif,myKhBattambang!important;
    }
  </style>
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{ asset('assets/invreceipt/style.css') }}" media="all" type="text/css" />

  </head>
  @yield('content')

  
</html>