@extends('layouts.fronted.webfrontmastercontents')

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
    $count_detail = 0; $count_detail = count($viewitems);
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

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-0 pt-30 pb-30">
        <div class="row">
          <div class="col-md-8 blog-pull-left">
          <h4 class="widget-title line-bottom">{{trans('lang.news')}} -  <span class="text-theme-color-2">{{trans('lang.events')}}</span></h4>
            <div class="single-service">
              <h4 class="text-theme-colored">
                  @if(App::getLocale() == 'kh')
                    <?php 
                      if($count_detail > 0){
                        echo @$viewitems[0]->title_kh;
                      }else{ echo "គ្មានទិន្នន័យ";}
                    ?>
                  @else
                    <?php 
                      if($count_detail > 0){
                        echo @$viewitems[0]->title;
                      }else{ echo "No data";}
                    ?>
                  @endif
              </h4>
              
              @if(App::getLocale() == 'kh')
                <?php 
                  if($count_detail > 0){
                    echo @$viewitems[0]->body_kh;
                  }else{ echo "គ្មានទិន្នន័យ";}
                ?>
              @else
                <?php 
                  if($count_detail > 0){
                    echo @$viewitems[0]->body;
                  }else{ echo "No data";}
                ?>
              @endif
              
              <!--
              <div class="row">
                <div class="col-md-12">
                  <h3 class="text-theme-colored">Features of the course </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et optio cum velit autem dolor reprehenderit saepe assumenda eos, qui. Voluptatem eveniet, illum dolor nemo? Velit maiores quaerat a non dolor praesentium, corporis optio ullam, voluptatem fuga consequatur sed cupiditate quam!</p> <br>
                  <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="icon-box box-border text-center mb-20 p-15"> 
                       <i class="fa fa-desktop text-theme-color-2 font-36"></i>
                        <h4>Best Lab</h4>
                      </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="icon-box box-border text-center mb-20 p-15">
                        <i class="fa fa-user text-theme-color-2 font-36"></i>
                        <h4 class="">Best Teachers</h4>
                      </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="icon-box box-border text-center mb-20 p-15">
                        <i class="fa fa-money text-theme-color-2 font-36"></i>
                        <h4 class="">Low Cost Services</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>-->
              

            </div>
          </div>

          <!-- starting right_sidebar -->
          @include('layouts.fronted.right_sidebar')
          
        </div>
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
