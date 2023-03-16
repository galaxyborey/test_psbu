<div class="banner banner-2">
    <div class="banner-inner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach(\App\Http\Controllers\Web\PageController::getSliderData() as $rowSlide)
                    @if($rowSlide->id==1)
                        <div class="item active">
                            <img src="{{asset('')}}{{$rowSlide->image}}" alt="banner-slider-3">
                            <div class="carousel-caption banner-slider-inner banner-top-align">
                                <div class="banner-content text-center">
                                    <h1 data-animation="animated fadeInDown delay-05s"><span>{{$rowSlide->title}} </span></h1>
                                    <p data-animation="animated fadeInUp delay-1s">{!!$rowSlide->des!!}</p>
                                </div>
                            </div>
                        </div>
                    @else
                    <div class="item">
                        <img src="{{asset('')}}{{$rowSlide->image}}" alt="banner-slider-3">
                        <div class="carousel-caption banner-slider-inner banner-top-align">
                            <div class="banner-content text-center">
                                <h1 data-animation="animated fadeInDown delay-05s"><span>{{$rowSlide->title}} </span></h1>
                                <p data-animation="animated fadeInUp delay-1s">{!!$rowSlide->des!!}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Main header start -->
        @include('layouts.nav')
        <!-- Main header end -->
    </div>
</div>
