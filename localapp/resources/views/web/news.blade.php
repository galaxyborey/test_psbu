<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>{{$slug}}</h1>
            <ul class="breadcrumbs">
                <li><a href="{{url('')}}">Home</a></li>
                <li class="active">{{$slug}}</li>
            </ul>
        </div>
    </div>
</div>
 <div class="events-secion-2 content-area">
    <div class="container">
        <div class="main-title">
            <h1>{{$slug}}</h1>
        </div>
        <div class="row">
          @foreach(\App\Http\Controllers\Web\PageController::getPositionData('positon_top_center',$cat->id,$cat->sub_id) as $key=>$value)
            <div class="col-md-12 col-sm-12 col-xs-12">
              @if($value->status==1)
              <h3 class="title-bg" style="background: #085d7b">{{$value->name}}</h3>
              @endif
              <div class="today-match-teams text-center">
                {!! $value->des_p !!}
              </div>
            </div>
          @endforeach
          @foreach(\App\Http\Controllers\Web\PageController::getPositionData('positon_center',$cat->id,$cat->sub_id) as $key=>$value)
            <div class="col-md-12 col-sm-12 col-xs-12">
              @if($value->status==1)
              <h3 class="title-bg" style="background: #085d7b">{{$value->name}}</h3>
              @endif
              <div class="today-match-teams text-center">
                {!! $value->des_p !!}
              </div>
            </div>
          @endforeach
          @foreach($show_news as $key=>$value)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="events-box" style="height:470px;">
                    <div class="recent-news-theme">
                        <a href="{{url('cat/detail')}}/{{$value->slug}}">
                          <img src="{{url('')}}{{$value->file}}" alt="events-img-1" class="img-responsive" style="min-height: 200px; max-height: 200px;">
                        </a>
                        <div class="date-box">
                            {{date('d-m-Y',strtotime($value->created_at))}}
                        </div>
                    </div>
                    <div class="events-box-content">
                        @if(app()->getLocale()=='kh')
                        <h1><a href="{{url('cat/detail')}}/{{$value->slug}}">{{$value->title_kh}} </a></h1>
                        <p>{!! $value->excerpt_kh !!}</p>
                        @else
                        <h1><a href="{{url('cat/detail')}}/{{$value->slug}}">{{$value->title}} </a></h1>
                        <p>{!! $value->excerpt !!}</p>
                        @endif                        
                        <a href="{{url('cat/detail')}}/{{$value->slug}}" class="read-more-btn"> {{trans('lang.read_more')}} ...</a>
                    </div>
                </div>
            </div>
          @endforeach
          @foreach(\App\Http\Controllers\Web\PageController::getPositionData('position_buttom_center',$cat->id,$cat->sub_id) as $key=>$value)
            <div class="col-md-12 col-sm-12 col-xs-12">
              @if($value->status==1)
              <h3 class="title-bg" style="background: #085d7b">{{$value->name}}</h3>
              @endif
              <div class="today-match-teams text-center">
                {!! $value->des_p !!}
              </div>
            </div>
          @endforeach
        </div>
        <div class="text-center">
            <nav aria-label="Page navigation">
                {{ $show_news->links() }}
            </nav>
        </div>
    </div>
</div>