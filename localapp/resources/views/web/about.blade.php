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
@foreach(\App\Http\Controllers\Web\PageController::getPositionData('positon_center',$cat->id,$cat->sub_id) as $key=>$value)
  <div class="col-md-12 col-sm-12 col-xs-12">
    @if($value->status==1)
    <!-- <h3 class="title-bg" style="background: #085d7b">{{$value->name}}</h3> -->
    @endif
    <div class="today-match-teams text-center">
      {!! $value->des_p !!}
    </div>
  </div>
@endforeach
