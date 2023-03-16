<!doctype html>
<html lang="{{app()->getLocale()}}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:url" content="{{url('cat/detail')}}/{{$news->slug}}" />
    <meta property="og:type" content="website" />
	@if(app()->getLocale()=='kh')
    <meta property="og:title" content="{{$news->title_kh}}" />
	<meta name="keywords" content="{{$news->excerpt_kh}}" />
    <meta name="description" content="{{$news->excerpt_kh}}" />
	@else
	<meta property="og:title" content="{{$news->title}}" />
	<meta name="keywords" content="{{$news->excerpt}}" />
    <meta name="description" content="{{$news->excerpt}}" />
	@endif 

    <meta property="og:image"  content="{{asset('')}}{{$news->file}}" />
    <title>{{$news->title}}</title>
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
          body,h1,h2,h3,h4,h5,h6,a,span{ font-family: myKhBattambang !important;}
        @endif
      </style>
  </head>
  <body>
    @include('layouts.nav')
    <div class="sub-banner overview-bgi">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>{{trans('lang.view_detail')}}</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{url('')}}">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <div class="blog-1 mb-50" style="border: 1px solid #ddd;">
                    <div class="blog-photo">
                        <img src="{{url('')}}{{ $news->file}}" alt="blog-big" class="img-responsive">
                    </div>
                    <div class="detail">
                        <h3>
                            @if(app()->getLocale()=='kh')
                             <a href="#">{{ $news->title_kh}} </a>
                            @else
                             <a href="#">{{ $news->title}} </a>
                            @endif  
                        </h3>
                        @if(app()->getLocale()=='kh')
                        <p>{!! $news->body_kh !!}</p>
                        @else
                        <p>{!! $news->body !!}</p>
                        @endif  
                        <div class="row clearfix t-s">
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <div class="tags-box hidden-mb-10"> </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div class="blog-share">
                                    <h2>{{trans('lang.share')}}</h2>
                                    <ul class="social-list">
                                        <li>
                                            <a  onClick="FucSocail(1)" href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a onClick="FucSocail(4)" href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a onClick="FucSocail(2)" href="#" class="google">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a onClick="FucSocail(3)" href="#"  class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fb-comments" data-href="{{url('/cat/detail')}}/{{$news->slug}}" data-width="100%" data-numposts="5"></div>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=305812356488826&autoLogAppEvents=1"></script>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="sidebar">
                    <!-- Recent nesw start -->
                    <div class="sidebar-widget recent-news"  style="border: 1px solid #ddd;">
                        <div class="main-title-2">
                            <h1>{{trans('lang.recent_post')}}</h1>
                        </div>
                        @foreach($rel_news as $rows)
                        <div class="media">
                            <div class="media-left">
                                <a href="{{url('/cat/detail')}}/{{$rows->slug}}"> 
                                  <img class="media-object" src="{{url('/')}}{{$rows->file}}" alt="small-img">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    @if(app()->getLocale()=='kh')
                                    <a href="{{url('cat/detail')}}/{{$rows->slug}}">{{$rows->title_kh}} </a>
                                    @else
                                    <a href="{{url('cat/detail')}}/{{$rows->slug}}">{{$rows->title}} </a>
                                    @endif  
                                </h4>
                                <p>Date : {{date('d/m/Y',strtotime($rows->created_at))}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="sidebar-widget category-posts"  style="border: 1px solid #ddd;">
                        <div class="main-title-2">
                            <h1>{{trans('lang.category')}}</h1>
                        </div>
                        <ul class="list-unstyled list-cat">
                             <li><a href="{{url('')}}">{{trans('lang.home')}} </a></li>
                            @foreach(\App\Http\Controllers\Web\PageController::getDataCategory() as $key=>$value)                        
                              <li>
                                   <a href="{{url('cat')}}/{{$value->slug}}">{{$value->cat_name}}</a>                   
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
    <div class="copy-right">
        <div class="container" style="color: #fff;">
            &copy;  2019 <a href="#" target="_blank" style="color: #fff;">KOH RONG LOCAL SERVICE</a>
            <p style="text-align: right;text-align: right;margin: 0;padding: 0;margin-top: -25px;color: #fff;"> {{trans('lang.language')}} : <a onclick="getLanguage('kh')" style="color: #fff;padding: 0 20px;"> ខ្មែរ </a> <a onclick="getLanguage('en')" style="color: #fff;"> English </a> </p>
        </div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_url" value="{{ url('') }}">
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
    <script type="text/javascript">
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
    (function($){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    })(jQuery);
    function FucSocail(val){
        if(val==1){
          window.open('https://www.facebook.com/sharer/sharer.php?u={{url("cat/detail")}}/{{$news->slug}}','','width='+400+',height='+400);
        }else if(val==2){
          window.open('https://plus.google.com/share?url={{url("cat/detail")}}/{{$news->slug}}','','width='+400+',height='+400);
        }else if(val==3){
          window.open('http://www.linkedin.com/shareArticle?url={{url("cat/detail")}}/{{$news->slug}}','','width='+400+',height='+400);
        }else if(val==4){
          window.open('https://twitter.com/intent/tweet?url={{url("cat/detail")}}/{{$news->slug}}','','width='+400+',height='+400);
        }else{
          window.location.assign(url_site_data);
        }
      }
    </script>
  </body>
</html>
