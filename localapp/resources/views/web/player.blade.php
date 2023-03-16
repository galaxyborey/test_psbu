@extends('layouts.app')

@section('content')
<div class="rs-breadcrumbs sec-color">
    <img src="{{url('storage/images')}}/breadcrumbs/blog.jpg" alt="Breadcrubs" />
    <div class="breadcrumbs-inner">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1 class="page-title" style="text-transform: capitalize;">{{$slug}}</h1>
						<ul>
							<li>
								<a class="active" href="index.html">Home</a>
							</li>
							<li style="text-transform: capitalize;">{{$slug}}</li>
						</ul>
					</div>
				</div>
			</div>
    </div>
</div>
<div class="our-products-section our-products-page sec-spacer">
  <div class="container">
    <div class="row">
      @foreach(\App\Http\Controllers\Web\PageController::getPositionData('positon_top_center',$cat->id,$cat->sub_id) as $key=>$value)
      <div class="col-md-12 col-sm-12 col-xs-12">
        @if($value->status==1)
        <h3 class="title-bg">{{$value->name}}</h3>
        @endif
        <div class="today-match-teams text-center">
          {!! $value->des_p !!}
        </div>
      </div>
      @endforeach
      @foreach($player as $key=>$value)
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="single-product text-center">
          <div class="product-image">
            <div class="overly"></div>
            <a href="#"><img src="{{url('')}}{{$value->play_image}}" alt="Product" / style="min-height:250px; max-height:250px;"></a>
          </div>
          <div class="product-details">
              <div class="product-tile">
                  <a href="#">{{$value->play_name}}</a>
              </div>
              <div class="product-cart">
                  <a href="{{url('sport/player/detail')}}/{{$value->slug}}"><i class="fa fa-eye"></i> {{trans('lang.view_detail')}}</a>
              </div>
          </div>
        </div>
    </div>
    @endforeach
    @foreach(\App\Http\Controllers\Web\PageController::getPositionData('position_buttom_center',$cat->id,$cat->sub_id) as $key=>$value)
    <div class="col-md-12 col-sm-12 col-xs-12">
      @if($value->status==1)
      <h3 class="title-bg">{{$value->name}}</h3>
      @endif
      <div class="today-match-teams text-center">
        {!! $value->des_p !!}
      </div>
    </div>
    @endforeach
	 </div>
	 <div class="row">
		<div class="col-sm-12">
				<div class="default-pagination text-center">
					{{ $show_news->links() }}
				</div>
		</div>
</div>
	</div>
</div>
@endsection
