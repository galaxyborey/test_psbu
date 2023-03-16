
<!doctype html>
<html lang="{{app()->getLocale('en')}}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="cornerasiatours.com" />
    <meta name="description" content="cornerasiatours.com" />
    <meta name="keywords" content="cornerasiatours.com" />
    <meta property="og:image"  content="{{asset('storage/images/logo.png')}}" />
		<title> cornerasiatours.com </title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('faicon.ico')}}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('css/rsmenu-main.css') }}">
		<link rel="stylesheet" href="{{ asset('css/rsmenu-transitions.css') }}">
		<link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('css/time-circles.css') }}">
		<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
		<style media="screen">
	    @font-face {font-family: myKhHanuman;src: url('{{asset("kh-font/Hanuman.woff")}}');}
	    @font-face {font-family: myKhFreehand;src: url('{{asset("kh-font/Kh-Freehand.woff")}}');}
	    @font-face { font-family: myKhBattambang;src: url('{{asset("kh-font/KhmerOSbattambang.woff")}}');}
	    @font-face { font-family: myKhMetal;src: url('{{asset("kh-font/Kh-Metal-Chrieng.woff")}}');}
    </style>
	</head>
	<body class="home-two">
		<!-- <div id="preloader">
	        <span></span>
	        <span></span>
	        <span></span>
	        <span></span>
	        <span></span>
	    </div> -->
		@include('layouts.header')
		@yield('content')
    	@include('layouts.footer')
	    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <i aria-hidden="true" class="fa fa-close"></i>
	      </button>
	        <div class="modal-dialog modal-dialog-centered">
	            <div class="modal-content">
	                <div class="search-block clearfix">
	                    <form>
	                        <div class="form-group">
	                            <input class="form-control" placeholder="Search ..." type="text">
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
		<div id="return-to-top">
			<span>Top</span>
		</div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_url" value="{{ url('') }}">
		<script src="{{ asset('js/jquery.min.js')}}"></script>
		<script src="{{ asset('js/rsmenu-main.js')}}"></script>
		<script src="{{ asset('js/jquery-ui.min.js')}}"></script>
		<script src="{{ asset('js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('js/jquery.meanmenu.js')}}"></script>
		<script src="{{ asset('js/wow.min.js')}}"></script>
		<script src="{{ asset('js/slick.min.js')}}"></script>
		<script src="{{ asset('js/masonry.js')}}"></script>
		<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{ asset('js/time-circle.js')}}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.js')}}"></script>
		<script src="{{ asset('js/waypoints.min.js')}}"></script>
		<script src="{{ asset('js/main.js')}}"></script>
		<script src="{{ asset('js/modernizr-2.8.3.min.js')}}"></script>
		<!-- <script src="{{ asset('js/app.js')}}"></script> -->
		<script type="text/javascript">
		(function($){
			$.ajaxSetup({
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
			});
		})(jQuery);
		</script>
	</body>
</html>
