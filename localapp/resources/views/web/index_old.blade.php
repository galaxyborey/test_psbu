@extends('layouts.app')

@section('content')

@include('layouts.slider')
<!-- <div class="upcoming-section">
  <div class="container">
    <h2>{{trans('lang.match')}}</h2>
    <div id="upcoming" class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="false" data-md-device-dots="false">
        
    </div>
  </div>
</div> -->
<div class="all-news-area sec-spacer">
  <div class="container">
    <div class="row">
        <div class="col-md-4">
            <!-- <div class="sidebar-area right-side-area">
              <div class="fb-page"
                data-href="https://www.facebook.com/visakhafc/"
                data-width="360"
                data-hide-cover="false"
                data-show-facepile="true">
              </div>
            </div> -->
            @foreach(\App\Http\Controllers\Web\PageController::getPositionData('position_left') as $key=>$value)
            <div class="sidebar-area right-side-area" style="    border: 1px solid #ddd; border-radius: 4px; margin-bottom: 5px;">
              @if($value->name)
                <h3 class="title-bg">{{$value->name}}</h3>
              @endif
              <div class="today-match-teams text-center">
                {!! $value->des_p !!}
              </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-8">
            <h3 class="title-bg">{{trans('lang.lastest_event')}}</h3>
            <div class="row">
              <div class="col-sm-9">
                <div class="latest-news-slider">
                    @foreach(\App\Http\Controllers\Web\PageController::getNewsData() as $key=>$value)
                    <div>
                        <div class="news-normal-block">
                          <div class="news-img">
                            <a href="{{url('cat/detail/')}}/{{$value->slug}}">
                                <img src="{{asset('')}}{{$value->file}}" alt="" />
                            </a>
                          </div>
                          @if(app()->getLocale()=='kh')
                          <h4 class="news-title"><a href="{{url('cat/detail')}}/{{$value->slug}}">{{$value->title_kh}}</a></h4>
                            <p>
                              {{$value->excerpt_kh}}
                            </p>
                          @else
                          <h4 class="news-title"><a href="{{url('cat/detail')}}/{{$value->slug}}">{{$value->title}}</a></h4>
                          <p>
                              <?php echo $value->excerpt; ?>
                          </p>
                          @endif
                          <div class="news-btn">
                            <a class="primary-btn" href="{{url('cat/detail')}}/{{$value->slug}}">{{trans('lang.read_more')}}</a>
                          </div>
                        </div>
                    </div>
                    @endforeach
                </div>
              </div>
              <div class="col-sm-3">
                <div class="latest-news-nav">
                    @foreach(\App\Http\Controllers\Web\PageController::getNewsData() as $key=>$value)
                        <div><img src="{{asset('')}}{{$value->file}}" alt="" /></div>
                    @endforeach
                </div>
              </div>
            </div>
            <br/>
      </div>
    </div>
  </div>
</div>
<div class="gallery-section-area">
    <div class="container" id="grid">
        <h3 class="title-bg">{{trans('lang.gallery')}}</h3>
        <div id="gallery-items" style="border: 1px solid #ddd; padding-top: 15px;
">
            <div class="row padding-0 margin-0" style="    margin: 0 !important; padding-left: 10px;">
                @foreach(\App\Http\Controllers\Web\PageController::getMatchGalleryData() as $key=>$value)
                <a class="image-popup" href="{{asset('')}}{{$value->image}}">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery">
                              +<img src="{{asset('')}}{{$value->image}}" alt="" />
                              <div class="desGalleryList">
                                {!!$value->des!!}
                              </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=305812356488826&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@endsection
