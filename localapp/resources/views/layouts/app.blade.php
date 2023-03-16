<!doctype html>
<html lang="{{app()->getLocale()}}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="author" content="">
	    <meta name="csrf-token" content="{{ csrf_token() }}">
	    <meta property="og:url" content="{{url('/')}}" />
	    <meta property="og:type" content="website" />
	    <meta property="og:title" content="Home kohronglocalservice.com" />
	    <meta name="description" content="is the official travel guide for Koh Rong Island in Cambodia. We provide all the latest information to help you plan and book your perfect trip – Best accommodation, how to get here, what to see and do, best time to visit, best restaurants and bars, and much more. Kohronglocalservice.com" />
	    <meta name="keywords" content="Travel, Island in Cambodia, The best place tour, Koh Rong, Tour, kohronglocalservice.com" />
	    <meta property="og:image"  content="{{asset('storage/images/logo.png')}}" />
		<title> Home | Koh Rong Local Service </title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('facon.ico')}}">
		<link rel="stylesheet" type="text/css" href="{{url('themes')}}/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="{{url('themes')}}/css/animate.min.css">
	    <link rel="stylesheet" type="text/css" href="{{url('themes')}}/css/bootstrap-submenu.css">
	    <link rel="stylesheet" type="text/css" href="{{url('themes')}}/css/bootstrap-select.min.css">
	    <link rel="stylesheet" type="text/css" href="{{url('themes')}}/fonts/font-awesome/css/font-awesome.min.css">
	    <link rel="stylesheet" type="text/css" href="{{url('themes')}}/fonts/flaticon/font/flaticon.css">
	    <link rel="stylesheet" type="text/css" href="{{url('themes')}}/fonts/linearicons/style.css">
	    <link rel="stylesheet" type="text/css"  href="{{url('themes')}}/css/jquery.mCustomScrollbar.css">
	    <link rel="stylesheet" type="text/css"  href="{{url('themes')}}/css/bootstrap-datepicker.min.css">
	    <link rel="stylesheet" type="text/css" href="{{url('themes')}}/css/style.css">
	    <link href="{{ asset('assets/flags/flags.css') }}" rel="stylesheet" type="text/css" />
	    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{url('themes')}}/css/skins/blue-light-2.css">
	    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
	    <link rel="stylesheet" type="text/css" href="{{url('themes')}}/css/ie10-viewport-bug-workaround.css">
	    <script  src="{{url('themes')}}/js/ie-emulation-modes-warning.js"></script>
    	<style media="screen">
    		@if(app()->getLocale('kh'))
			    @font-face {font-family: myKhHanuman;src: url('{{asset("kh-font/Hanuman.woff")}}');}
			    @font-face {font-family: myKhFreehand;src: url('{{asset("kh-font/Kh-Freehand.woff")}}');}
			    @font-face { font-family: myKhBattambang;src: url('{{asset("kh-font/KhmerOSbattambang.woff")}}');}
			    @font-face { font-family: myKhMetal;src: url('{{asset("kh-font/Kh-Metal-Chrieng.woff")}}');}
			    body,h1,h2,h3,h4,h5,h6,a,span,p{ font-family: myKhBattambang !important;}
		    @endif
	    </style>
	</head>
	<body>
		<!--<div class="page_loader"></div>-->
		@yield('content')		
		@include('layouts.footer')
		<div class="copy-right ">
		    <div class="row" style="color: #fff;width:100%;">
				<p class="col-lg-4 col-md-4 col-sm-4"></p>
		        <p class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="color: #fff;margin:0;">&copy;  2019 <a href="http://www.iwebcambodia.com" target="_blank" style="color: #fff;">KOH RONG LOCAL SERVICE Design by PING IT GROUP</a></p>
		        <p class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="text-align: right;text-align: center;margin: 0;padding: 0;color: #fff;"> {{trans('lang.language')}} : <a onclick="getLanguage('kh')" style="color: #fff;padding: 0 20px;"><i class="flag flag-kh"></i> ខ្មែរ </a> <a onclick="getLanguage('en')" style="color: #fff;"><i class="flag flag-gb"></i> English </a> </p>
		    </div>
		</div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_url" value="{{ url('') }}">
		<script  src="{{url('themes')}}/js/jquery-2.2.0.min.js"></script>
		<script  src="{{url('themes')}}/js/bootstrap.min.js"></script>
		<script  src="{{url('themes')}}/js/bootstrap-submenu.js"></script>
		<script  src="{{url('themes')}}/js/jquery.mb.YTPlayer.js"></script>
		<script  src="{{url('themes')}}/js/wow.min.js"></script>
		<script  src="{{url('themes')}}/js/bootstrap-select.min.js"></script>
		<script  src="{{url('themes')}}/js/jquery.easing.1.3.js"></script>
		<script  src="{{url('themes')}}/js/jquery.scrollUp.js"></script>
		<script  src="{{url('themes')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script  src="{{url('themes')}}/js/jquery.filterizr.js"></script>
		<script  src="{{url('themes')}}/js/bootstrap-datepicker.min.js"></script>
		<script  src="{{url('themes')}}/js/app.js"></script>
		<script  src="{{url('themes')}}/js/ie10-viewport-bug-workaround.js"></script>
		@yield('script')
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
	</body>
</html>
