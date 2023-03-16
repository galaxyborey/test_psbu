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
	  <meta property="og:title" content="{{$player->play_name}}" />
	  <meta name="description" content="{{$player->play_description}}" />
	  <meta name="keywords" content="{{$player->play_description}}" />
    <meta property="og:image"  content="{{asset('/')}}{{$player->play_image}}" />
    <title>Visakha Football Club</title>
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
    <div id="preloader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    @include('layouts.header')
<div class="rs-breadcrumbs sec-color">
  <img src="{{url('storage/images')}}/breadcrumbs/fixtures.jpg" alt="Breadcrubs" />
  <div class="breadcrumbs-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="page-title">{{trans('lang.view_detail')}}</h1>
					<ul>
						<li>
							<a class="active" href="{{url('/')}}">{{trans('lang.home')}}</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
  </div>
</div>
<div class="match-fixtures-page sec-spacer">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-12" style="border: 1px solid #ddd;padding: 0;">
          <h3 class="title-bg"> {{ $player->play_name}}</h3>
          <div style="text-align: center;padding: 10px;">
            <img src="{{url('')}}/{{$player->play_image}}" style="max-width: 100%;">
          </div>
          <div style="padding: 20px;word-break: break-word;">
          	<p>{{trans('lang.code')}} : {{$player->play_code}}</p>
          	<p>{{trans('lang.dob')}} : {{$player->dob}}</p>
          	<p>{{trans('lang.height')}} : {{$player->height}}</p>
          	<p>{{trans('lang.weight')}} : {{$player->weight}}</p>
            {!! $player->play_description !!}
          </div>
        <div style="padding: 10px;">        
          <a style="border: 1px solid #00559f;background: #00559f;margin-bottom:4px;color:#fff;font-size:12px;cursor:pointer;padding: 0 5px;margin: 0 5px;" onClick="FucSocail(1)" ><i class="fa fa-facebook"></i> facebook </a>
          <a style="border: 1px solid #f53033;background: #f53033;margin-bottom:4px;color:#fff;font-size:12px;cursor:pointer;padding: 0 5px;margin: 0 5px;" onClick="FucSocail(2)" ><i class="fa fa-google-plus"></i> google </a>
          <a style="border: 1px solid #007aba;background: #007aba;margin-bottom:4px;color:#fff;font-size:12px;cursor:pointer;padding: 0 5px;margin: 0 5px;" onClick="FucSocail(3)" ><i class="fa fa-linkedin"></i> linkedin </a>
          <a style="border: 1px 00a5f8 #00559f;background: #00a5f8;margin-bottom:4px;color:#fff;font-size:12px;cursor:pointer;padding: 0 5px;margin: 0 5px;" onClick="FucSocail(4)"><i class="fa fa-twitter"></i> twitter </a>
        </div>
      </div>
      <div class="col-md-3 col-sm-12">
        <div class="sidebar-area" style="margin-top:0 !important;">
          <div class="recent-post-area">
            <span class="title-bg"> {{trans('lang.recent_post')}}</span>
            <ul class="news-post" style="margin-top: 5px;">
              @foreach($rel_news as $rows)
                <li>
                  <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                          <div class="item-post">
                              <div class="row">
                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                      <img src="{{url('/')}}{{$rows->play_image}}" alt="" title="News image">
                                  </div>
                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                      <h4><a href="{{url('sport/player/detail')}}/{{$rows->slug}}"> {{$rows->play_name}}</a></h4>
                                      <span class="date">Code : {{$rows->play_code}}</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </li> 
              @endforeach 
              </ul>
            </div>
					</div>
        </div>
    </div>
  </div>
</div>
    @include('layouts.footer')
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
    function FucSocail(val){
        if(val==1){
          window.open('https://www.facebook.com/sharer/sharer.php?u={{url("/sport/shop/")}}{{$player->slug}}','','width='+400+',height='+400);
        }else if(val==2){
          window.open('https://plus.google.com/share?url={{url("/sport/shop/")}}{{$player->slug}}','','width='+400+',height='+400);
        }else if(val==3){
          window.open('http://www.linkedin.com/shareArticle?url={{url("/sport/shop/")}}{{$player->slug}}','','width='+400+',height='+400);
        }else if(val==4){
          window.open('https://twitter.com/intent/tweet?url={{url("/sport/shop/")}}{{$player->slug}}','','width='+400+',height='+400);
        }else{
          window.location.assign(url_site_data);
        }
      }
    </script>
  </body>
</html>
