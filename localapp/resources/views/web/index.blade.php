@extends('layouts.app')
@section('content')
@include('layouts.slider')
<div class="content-area hotel-section" style=" border-bottom: 2px solid #eae2e2; background: #f1f1f1;margin-bottom: 15px;">
  <div class="container">
      <!-- Main title -->
      <div class="main-title">
          <h1> {{trans('lang.our_best_package')}}</h1>
          <p>These best Package chosen by our customers</p>
      </div>
      <ul class="list-inline-listing filters filters-listing-navigation">
          <li class="active btn filtr-button home_all">All</li>
          @foreach(\App\Http\Controllers\Web\PageController::getCatalog() as $row)
            <li class="btn btn-inline filtr-button home_{{$row}}"> {{$row}}</li>
          @endforeach
      </ul>
      <div class="row">
          <div class="container row">
              <div class="HomeShow show ClassHomeTab">
                @foreach(\App\Http\Controllers\Web\PageController::getCatNews('services','') as $row)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="hotel-box">
                        <!--header -->
                        <div class="header clearfix">
                            <img src="{{url('')}}/{{$row->file}}" alt="img-1" class="img-responsive" style="min-height: 240px;max-height: 250px;">
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                <a href="{{url('cat/detail')}}/{{$row->slug}}"> {{$row->title}} </a>
                            </h3>
                            @if(app()->getLocale()=='kh')
                            <p>{{$row->excerpt_kh}}</p>
                            @else
                            <p>{{$row->excerpt}}</p>
                            @endif
                            <a href="{{url('cat/detail')}}/{{$row->slug}}" class="read-more-btn"> {{trans('lang.read_more')}}... </a>
                        </div>
                    </div>
                </div>
                @endforeach    
              </div>
              <div class="Classic hide ClassHomeTab">
                @foreach(\App\Http\Controllers\Web\PageController::getCatNews('services','Classic') as $row)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item">
                    <div class="hotel-box">
                        <!--header -->
                        <div class="header clearfix">
                            <img src="{{url('')}}/{{$row->file}}" alt="img-1" class="img-responsive" style="min-height: 240px;max-height: 250px;">
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                @if(app()->getLocale()=='kh')
                                <a href="{{url('cat/detail')}}/{{$row->slug}}"> {{$row->title_kh}} </a>
                                @else
                                <a href="{{url('cat/detail')}}/{{$row->slug}}"> {{$row->title}} </a>
                                @endif
                            </h3>
                            @if(app()->getLocale()=='kh')
                            <p>{{$row->excerpt_kh}}</p>
                            @else
                            <p>{{$row->excerpt}}</p>
                            @endif
                            <a href="{{url('cat/detail')}}/{{$row->slug}}" class="read-more-btn"> {{trans('lang.read_more')}}... </a>
                        </div>
                    </div>
                </div>
                @endforeach
              </div>
              <div class="Deluxe hide ClassHomeTab">
                @foreach(\App\Http\Controllers\Web\PageController::getCatNews('services','Deluxe') as $row)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item">
                    <div class="hotel-box">
                        <!--header -->
                        <div class="header clearfix">
                            <img src="{{url('')}}/{{$row->file}}" alt="img-1" class="img-responsive" style="min-height: 240px;max-height: 250px;">
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                @if(app()->getLocale()=='kh')
                                <a href="{{url('cat/detail')}}/{{$row->slug}}"> {{$row->title_kh}} </a>
                                @else
                                <a href="{{url('cat/detail')}}/{{$row->slug}}"> {{$row->title}} </a>
                                @endif
                            </h3>
                            @if(app()->getLocale()=='kh')
                            <p>{{$row->excerpt_kh}}</p>
                            @else
                            <p>{{$row->excerpt}}</p>
                            @endif
                            <a href="{{url('cat/detail')}}/{{$row->slug}}" class="read-more-btn"> {{trans('lang.read_more')}}... </a>
                        </div>
                    </div>
                </div>
                @endforeach
              </div>
              <div class="Royal hide ClassHomeTab">
                @foreach(\App\Http\Controllers\Web\PageController::getCatNews('services','Royal') as $row)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item">
                    <div class="hotel-box">
                        <!--header -->
                        <div class="header clearfix">
                            <img src="{{url('')}}/{{$row->file}}" alt="img-1" class="img-responsive" style="min-height: 240px;max-height: 250px;">
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                @if(app()->getLocale()=='kh')
                                <a href="{{url('cat/detail')}}/{{$row->slug}}"> {{$row->title_kh}} </a>
                                @else
                                <a href="{{url('cat/detail')}}/{{$row->slug}}"> {{$row->title}} </a>
                                @endif
                            </h3>
                            @if(app()->getLocale()=='kh')
                            <p>{{$row->excerpt_kh}}</p>
                            @else
                            <p>{{$row->excerpt}}</p>
                            @endif
                            <a href="{{url('cat/detail')}}/{{$row->slug}}" class="read-more-btn"> {{trans('lang.read_more')}}... </a>
                        </div>
                    </div>
                </div>
                @endforeach
              </div>          
              <div class="Luxury hide ClassHomeTab">
                @foreach(\App\Http\Controllers\Web\PageController::getCatNews('services','Luxury') as $row)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item">
                    <div class="hotel-box">
                        <!--header -->
                        <div class="header clearfix">
                            <img src="{{url('')}}/{{$row->file}}" alt="img-1" class="img-responsive" style="min-height: 240px;max-height: 250px;">
                        </div>
                        <!-- Detail -->
                        <div class="detail clearfix">
                            <h3>
                                @if(app()->getLocale()=='kh')
                                <a href="{{url('cat/detail')}}/{{$row->slug}}"> {{$row->title_kh}} </a>
                                @else
                                <a href="{{url('cat/detail')}}/{{$row->slug}}"> {{$row->title}} </a>
                                @endif
                            </h3>
                            @if(app()->getLocale()=='kh')
                            <p>{{$row->excerpt_kh}}</p>
                            @else
                            <p>{{$row->excerpt}}</p>
                            @endif
                            <a href="{{url('cat/detail')}}/{{$row->slug}}" class="read-more-btn"> {{trans('lang.read_more')}}... </a>
                        </div>
                    </div>
                </div>
                @endforeach
              </div>          
          </div>
      </div>
  </div>
</div>
<div class="events-secion">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>{{trans('lang.recent_events')}}</h1>
            <p></p>
        </div>
        <div class="row">
          @foreach(\App\Http\Controllers\Web\PageController::getCatNews('accomodation','') as $row)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="events-box">
                    <div class="recent-news-theme">
                        <img src="{{url('')}}/{{$row->file}}" alt="events-img-1" class="img-responsive" style="min-height: 240px;max-height: 250px;">
                    </div>
                    <div class="events-box-content">
                        <h1><a href="{{url('cat/detail')}}/{{$row->slug}}"> {{$row->title}} </a></h1>
                        <p> {{$row->excerpt}} </p>
                        <a href="{{url('cat/detail')}}/{{$row->slug}}" class="read-more-btn"> {{trans('lang.read_more')}}... </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
  $('.home_all').click(function(){
    $('.ClassHomeTab').addClass('hide');
    $('.ClassHomeTab').removeClass('show');
    $('.list-inline-listing li').removeClass('active');
    $('.HomeShow').addClass('show');
  });
  $('.home_Classic').click(function(){
    $('.ClassHomeTab').addClass('hide');
    $('.ClassHomeTab').removeClass('show');
    $('.list-inline-listing li').removeClass('active');
    $('.Classic').addClass('show active');
  });
  $('.home_Deluxe').click(function(){
      $('.ClassHomeTab').addClass('hide');
      $('.ClassHomeTab').removeClass('show');
      $('.list-inline-listing li').removeClass('active');
      $('.Deluxe').addClass('show');
  });
  $('.home_Royal').click(function(){
      $('.ClassHomeTab').addClass('hide');
      $('.ClassHomeTab').removeClass('show');
      $('.list-inline-listing li').removeClass('active');
      $('.Royal').addClass('show');
  });
  $('.home_Luxury').click(function(){
      $('.ClassHomeTab').addClass('hide');
      $('.ClassHomeTab').removeClass('show');
      $('.list-inline-listing li').removeClass('active');
      $('.Luxury').addClass('show');
  });
</script>
@endsection