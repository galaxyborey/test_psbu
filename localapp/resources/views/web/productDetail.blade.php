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
    <meta property="og:title" content="{{$product_detail->p_name}}" />
    <meta name="description" content="{{$product_detail->des}}" />
    <meta name="keywords" content="{{$product_detail->des}}" />
    <meta property="og:image"  content="{{asset('/')}}{{$product_detail->image}}" />
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
      <img src="{{url('storage/images')}}/breadcrumbs/shop.jpg" alt="Breadcrubs" />
      <div class="breadcrumbs-inner">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-12 text-center">
      				<h1 class="page-title">Shop Details</h1>
      				<ul>
      					<li>
      						<a class="active" href="index.html">Home</a>
      					</li>
      					<li>Shop</li>
      				</ul>
      			</div>
      		</div>
      	</div>
      </div>
    </div>
    <div class="single-product-page sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="single-product-area left-area">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div class="inner-single-product-slider">
                                    <div class="inner">
                                        <div class="slider single-product-image">
                                            @foreach($photo as $image)
                                            <div>
                                                <div class="images-single" style="text-align:center;">
                                                    <img src="{{url('')}}{{$image->image}}" alt="" style="margin: 0 auto;">
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                               <div class="single-price-info">
                                    <h3>{{$product_detail->p_name}}</h3>
                                    <span class="single-price" style="color: red">$ {{number_format($product_detail->p_sale_price,2)}}</span>
                                    <p>{{trans('lang.code')}} : {{$product_detail->p_code}}</p>
                                    @if(app()->getLocale()=='kh')
                                    <p class="cat"><strong>{{trans('lang.category')}} : </strong> {{$product_detail->name_kh}}</p>
                                    <p class="tag"><strong>{{trans('lang.brand')}} : </strong> {{$product_detail->b_name_kh}}</p>
                                    <p class="tag"><strong> </strong> {{$product_detail->m_name_kh}}</p>
                                    @else
                                    <p class="cat"><strong>{{trans('lang.category')}} : </strong> {{$product_detail->name_en}}</p>
                                    <p class="tag"><strong>{{trans('lang.brand')}} : </strong> {{$product_detail->b_name_en}}</p>
                                    <p class="tag"><strong> </strong> {{$product_detail->m_name_en}}</p>
                                    @endif
                                    <p class="tag"><strong> </strong>{{\App\Http\Controllers\Web\PageController::getStatusPListView($product_detail->status)}}</p>
                                    <a style="border: 1px solid #00559f;background: #00559f;margin-bottom:4px;color:#fff;font-size:12px;cursor:pointer;padding: 0 5px;margin: 0 5px;" onClick="FucSocail(1)" ><i class="fa fa-facebook"></i> facebook </a>
                                    <a style="border: 1px solid #f53033;background: #f53033;margin-bottom:4px;color:#fff;font-size:12px;cursor:pointer;padding: 0 5px;margin: 0 5px;" onClick="FucSocail(2)" ><i class="fa fa-google-plus"></i> google </a>
                                    <a style="border: 1px solid #007aba;background: #007aba;margin-bottom:4px;color:#fff;font-size:12px;cursor:pointer;padding: 0 5px;margin: 0 5px;" onClick="FucSocail(3)" ><i class="fa fa-linkedin"></i> linkedin </a>
                                    <a style="border: 1px 00a5f8 #00559f;background: #00a5f8;margin-bottom:4px;color:#fff;font-size:12px;cursor:pointer;padding: 0 5px;margin: 0 5px;" onClick="FucSocail(4)"><i class="fa fa-twitter"></i> twitter </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="slider single-product-nav">
                                  @foreach($photo as $image)
                                    <div class="images-slide-single" style="height:65px;">
                                       <img src="{{url('')}}{{$image->image}}" width="120" height="120" alt="">
                                    </div>
                                  @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product-description">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                             <!-- Nav tabs -->
                            <ul class="nav-menus">
                              <li class="active"><a data-toggle="tab" href="#tab1">{{trans('lang.description')}}</a></li>
                            </ul>
                            <!-- tabs content -->
                            <div class="tab-content">
                              <div id="tab1" class="tab-pane fade in active">
                                  {!!$product_detail->des!!}
                              </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-3 col-sm-12">
                    <!-- Blog Single Sidebar Start Here -->
                    <div class="sidebar-area">
                        <div class="recent-post-area">
                            <span class="title">{{trans('lang.latest_product')}}</span>
                            <ul class="news-post">
                              @foreach($related as $row)
                                <li>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                            <div class="item-post">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                                        <img src="{{url('')}}/{{$row->image}}" alt="" title="News image" />
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                        <h4><a href="blog-single.html">{{$row->p_name}}</a></h4>
                                                        <span class="date">${{$row->p_sale_price}}</span>
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
    </div>
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
    function FucSocail(val){
        if(val==1){
          window.open('https://www.facebook.com/sharer/sharer.php?u={{url("/sport/shop/")}}{{$product_detail->slug}}','','width='+400+',height='+400);
        }else if(val==2){
          window.open('https://plus.google.com/share?url={{url("/sport/shop/")}}{{$product_detail->slug}}','','width='+400+',height='+400);
        }else if(val==3){
          window.open('http://www.linkedin.com/shareArticle?url={{url("/sport/shop/")}}{{$product_detail->slug}}','','width='+400+',height='+400);
        }else if(val==4){
          window.open('https://twitter.com/intent/tweet?url={{url("/sport/shop/")}}{{$product_detail->slug}}','','width='+400+',height='+400);
        }else{
          window.location.assign(url_site_data);
        }
      }
    </script>
  </body>
</html>