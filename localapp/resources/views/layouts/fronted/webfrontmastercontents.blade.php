<!DOCTYPE html>
<!--
<html  dir="ltr" lang="{{ app()->getLocale() }}" xml:lang="{{ app()->getLocale() }}">-->

<html  dir="ltr" lang="en" xml:lang="en">
<!-- index-mp-layout102:13-->
<?php 
	$sess_url = $_SERVER['REQUEST_URI']; 
	$sharephoto = '';
  	$titledes = "";
  	$desc = "";
  	@$arr_n = (array)$viewitems; $n_len = count($arr_n);?>
  	@if(App::getLocale() == 'kh')
		<?php
		  	if($n_len > 0){
				if(is_null(@$viewitems[0]->file)){
					$sharephoto = "themes/login/img/PSBU-02_small.png";
			    }else{ $sharephoto = $viewitems[0]->file;}
			
			    if(is_null(@$viewitems[0]->title_kh)){
					$titledes = 'Preah Sihamoniraja Buddhist University';
			    }else{ $titledes = @$viewitems[0]->title_kh; $desc = $viewitems[0]->excerpt_kh;}	
			} 
		?>
	@else
		<?php
			if($n_len > 0){
				if(is_null(@$viewitems[0]->file)){
					$sharephoto = "themes/login/img/PSBU-02_small.png";
			    }else{ $sharephoto = $viewitems[0]->file;}
			
			    if(is_null(@$viewitems[0]->title)){
					$titledes = 'Preah Sihamoniraja Buddhist University';
			    }else{ $titledes = @$viewitems[0]->title; $desc = $viewitems[0]->excerpt;}	
			} 
		?>
	@endif
<head>
<meta property="og:title" content="<?php echo @$titledes; ?>" />
<!-- Meta Tags -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<meta property="og:image" content="{{URL('/')}}<?php echo @$sharephoto;?>" />
<meta name="generator" content="Laravel 5.6" />
<meta name="author" content="PING INFORMATION TECHNOLOGY GROUP">
<meta name="keywords" content="PSBU <?php echo @$desc;?> ">
<meta name="description" content="PSBU <?php echo @$desc;?>" />
<meta name="keywords" content="Preah Sihamoniraja Buddhist University Website Official,Scholarship, Bachelor Degree, Master Degree and Doctor, High education in Cambodia" />

<!-- Page Title -->
<title><?php echo @$titledes; ?> | PSBU</title>

<!-- Favicon and Touch Icons -->
<link href="{{ asset('themes/login/img/PSBU-02_small.png')}}" rel="shortcut icon" type="image/png">

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
<!-- CSS | Preloader Styles 
<link href="{{ asset('themes/webfront/css/preloader.css')}}" rel="stylesheet" type="text/css">-->
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
    .menuzord .menuzord-menu > li.image-logo-wu:hover > a{
      background:none !important;
    }
    .image-logo-wu a:hover{
      background:none !important;
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
  @if(App::getLocale() == 'kh')
        <style type="text/css">
          body,h1,h2,h3,h4,h5,h6,a,span,p{ font-family: myKhBattambang !important;}
        </style>
  @endif
</head>
<body class="">
  @yield('content')


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
<!-- we're using cookie to faster our website -->
<script type='text/javascript' src="{{ asset('template/js/js-cookie/js.cookie.min.js?ver=2.1.4')}}"></script>
</body>

<!-- index-mp-layout108:42-->
</html>