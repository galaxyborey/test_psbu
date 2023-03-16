@extends('layouts.fronted.webfrontmaster')

@section('content')
<div id="wrapper" class="clearfix">
  <!-- preloader 
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="{{ asset('themes/webfront/images/preloaders/5.gif')}}">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>-->
  <!-- header -->
  @include('layouts.fronted.header')
  <!-- end header -->
  <?php
    $count_list = 0; $count_list = count($newslist);
  ?>
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('themes/webfront/images/bg/bg6.jpg')}}">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h4 class="title text-white text-center">
              {{trans('lang.news')}} - {{trans('lang.events')}}
              </h4>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="{{URL('/')}}">{{trans('lang.home')}}</a></li>
                <li class="active text-gray-silver">{{trans('lang.news')}}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Course list -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-pull-left">
            
              <h4 class="text-uppercase title line-bottom mt-0 mb-30">{{trans('lang.news')}} - <span class="text-theme-color-2">{{trans('lang.events')}}</span></h4>
            
            <?php
                if($count_list > 0){ 
            ?>
                      @if(App::getLocale() == 'kh')
                        @foreach($newslist as $listnews)
                          <div class="row mb-15">
                            <div class="col-sm-6 col-md-4">
                              <div class="thumb"> <img alt="featured Photo" src="{{ URL('/')}}{{$listnews->file}}" class="img-fullwidth"></div>
                            </div>
                            <div class="col-sm-6 col-md-8">
                              <h5 class="line-bottom mt-0 mt-sm-20">{{ $listnews->title_kh }}</h5>
                              <p>{{ $listnews->excerpt_kh }}</p>
                              <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="{{URL('/')}}/viewdetailspages/{{$listnews->id}}?{{$listnews->slug}}">ចូលអាន</a>
                            </div>
                          </div>
                          <hr>

                        @endforeach
                      @else
                        @foreach($newslist as $listnews)
                          <hr>
                          <div class="row mb-15">
                            <div class="col-sm-6 col-md-4">
                              <div class="thumb"> <img alt="featured Photo" src="{{ URL('/')}}{{$listnews->file}}" class="img-fullwidth"></div>
                            </div>
                            <div class="col-sm-6 col-md-8">
                              <h5 class="line-bottom mt-0 mt-sm-20">{{ $listnews->title }}</h5>
                              <p>{{ $listnews->excerpt }}</p>
                              <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="{{URL('/')}}/viewdetailspages/{{$listnews->id}}?{{$listnews->slug}}">view details</a>
                            </div>
                          </div>
                          <hr>

                        @endforeach

                      @endif

                <?php } else { ?>
            
                  <div class="row mb-15">
                    <div class="col-sm-6 col-md-4">
                      <div class="thumb"> <img alt="featured project" src="{{ asset('themes/webfront/')}}/images/project/lg4.jpg" class="img-fullwidth"></div>
                    </div>
                    <div class="col-sm-6 col-md-8">
                      <h4 class="line-bottom mt-0 mt-sm-20">Computer Technologies</h4>
                      <ul class="review_text list-inline">
                        <li><h4 class="mt-0"><span class="text-theme-color-2">Price :</span> $125</h4></li>
                        <li>
                          <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
                        </li>
                      </ul>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.Aliquam ipsum quis ipsum facilisis sit ame ipsum quis ipsum facilisis sit amet facilisis consecte.</p>
                      <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-modern-languages.html">view details</a>
                    </div>
                  </div>
                  <hr>
                <?php } ?>
          </div>
          
          <!-- starting right_sidebar -->
          @include('layouts.fronted.right_sidebar')
          

        </div>

        <!--
        <div class="row">
          <div class="col-sm-12">
            <nav>
              <ul class="pagination xs-pull-center m-0">
                <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">...</a></li>
                <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
              </ul>
            </nav>
          </div>
        </div>-->
      </div>
    </section>
    
    

  

  </div>
  <!-- end main-content -->
  
  <!-- Footer 
  <footer id="footer" class="footer bg-black-222" data-bg-img="images/footer-bg.png">-->
  <!-- Footer -->
  @include('layouts.fronted.footer')
  <!-- end footer -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!-- Footer Scripts --> 
@endsection
@section('javascript')
<!-- JS | Custom script for all pages 
<script src="js/custom.js"></script>--> 
@endsection
