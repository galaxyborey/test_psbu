<!DOCTYPE html>
<html  dir="ltr" lang="{{ app()->getLocale() }}" xml:lang="{{ app()->getLocale() }}">
<!-- index-mp-layout102:13-->
<head>
<!-- Meta Tags -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="PSBU Education & Courses Website Official, Bachelor Degree, Master Degree" />
<meta name="keywords" content="academy, course, education, education University, learning," />

<!-- Page Title -->
<title>PSBU | Education & Courses University</title>

<!-- Favicon and Touch Icons -->
<link href="{{ asset('themes/login/img/PSBU-02_small.png')}}" rel="shortcut icon" type="image/png">
<link href="{{ asset('themes/webfront/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
<link href="{{ asset('themes/webfront/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{ asset('themes/webfront/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{ asset('themes/webfront/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

<link href="{{ asset('assets/flags/flags.css') }}" rel="stylesheet" type="text/css" />
<!-- Stylesheet -->
<link href="{{ asset('themes/webfront/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('themes/webfront/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('themes/webfront/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('themes/webfront/css/css-plugin-collections.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('themes/webfront/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('themes/webfront/css/style-main.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('themes/webfront/css/preloader.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('themes/webfront/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('themes/webfront/css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ asset('themes/webfront/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('themes/webfront/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('themes/webfront/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ asset('themes/webfront/css/colors/theme-skin-color-set-1.css')}}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{ asset('themes/webfront/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{ asset('themes/webfront/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('themes/webfront/js/bootstrap.min.js')}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset('themes/webfront/js/jquery-plugin-collection.js')}}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ asset('themes/webfront/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('themes/webfront/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
		@font-face {
		   font-family: myKhHanuman;
		   src: url('{{ asset('kh-font/Hanuman.woff') }}');
		}
		@font-face {
		   font-family: myKhFreehand;
		   src: url('{{ asset('kh-font/Kh-Freehand.woff') }}');
		}
		@font-face {
		   font-family: myKhBattambang;
		   src: url('{{ asset('kh-font/KhmerOSbattambang.woff') }}');
		}
		@font-face {
		   font-family: myKhMetal;
		   src: url('{{ asset('kh-font/Kh-Metal-Chrieng.woff') }}');
		}
		@font-face {
		   font-family: KhmerOSDangrek;
		   src: url('{{ asset('kh-font/KhmerOSDangrek.ttf') }}');
		}
		@font-face {
		   font-family: FranklinGothicDemiRegular;
		   src: url('{{ asset('kh-font/FranklinGothicDemiRegular.ttf') }}');
		}
	</style>

<style type="text/css">
        @font-face {font-family: SpectralSC_Regular;src: url('{{asset("en-font/SpectralSC_Regular.ttf")}}');}
        @font-face {font-family: verdanab;src: url('{{asset("en-font/verdanab.ttf")}}');}
        @font-face {font-family: ArialCE;src: url('{{asset("en-font/ArialCE.ttf")}}');}
        @font-face {font-family: myKhHanuman;src: url('{{asset("kh-font/Hanuman.woff")}}');}
      @font-face {font-family: myKhFreehand;src: url('{{asset("kh-font/Kh-Freehand.woff")}}');}
      @font-face { font-family: myKhBattambang;src: url('{{asset("kh-font/KhmerOSbattambang.woff")}}');}
      @font-face { font-family: myKhMetal;src: url('{{asset("kh-font/Kh-Metal-Chrieng.woff")}}');}
      </style>
  @if(App::getLocale() == 'kh' OR App::getLocale() == '')
        <style type="text/css">
          body,h1,h2,h3,h4,h5,h6,a,span,p{ font-family: myKhBattambang !important;}
        </style>
      @endif
</head>
<body class="">
  @yield('content')
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="{{ asset('themes/webfront/images/preloaders/5.gif')}}">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- header -->
  @include('layouts.fronted.header')
  <!-- end header -->

  
  <!-- Start main-content -->
  <div class="main-content">


    <!-- slider -->
    @include('layouts.fronted.slider')
    <!-- end slider -->


    <!-- Section: teachers -->
    @include('layouts.fronted.events');


    <!-- Section: latest News -->
    @include('layouts.fronted.latest_news');
  
  
  <!-- Section: Mission -->
    @include('layouts.fronted.about_mission');

    <!-- Section: Why Choose Us -->
    @include('layouts.fronted.whychooseus');

    <!-- Divider: Funfact 
    @include('layouts.fronted.numberofpeoples');
     end info tranparency blog -->

         

  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  @include('layouts.fronted.footer')
  <!-- end footer -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 

@yield('javascript')
<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="{{ asset('themes/webfront/js/custom.js')}}"></script>
<script type="text/javascript">
			(function($){
				$.ajaxSetup({
						headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
				});
			})(jQuery);
			function getLanguage(val){
	          var locale = val;
	          var _token = $("input[name=_token]").val();
	          $.ajax({
	              url: "{{ asset('/language') }}",
	              type: 'POST',
	              data: {'locale': locale, '_token': _token},
	              datatype: 'json',
	              success: function(data){ },
	              error: function(data){ },
	              beforeSend: function(){ },
	              complete: function(data){
	                  window.location.reload(true);
	              }
	          });
	        }
		</script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
</body>

<!-- index-mp-layout108:42-->
</html>