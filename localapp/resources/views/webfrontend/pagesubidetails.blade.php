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
    $count_detail = 0; $count_detail = count($sdetails);
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
              <h2 class="title text-white text-center">
                @if(App::getLocale() == 'kh')
                  <?php 
                    if($count_detail > 0){
                      echo @$sdetails[0]->subi_namekh;
                    }else{ echo "លម្អិត";}
                  ?>
                @else
                  <?php 
                    if($count_detail > 0){
                      echo @$sdetails[0]->subi_name;
                    }else{ echo "Detail";}
                  ?>
                @endif
                
              </h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="{{URL('/')}}">{{trans('lang.home')}}</a></li>
                <li class="active text-gray-silver">
                  @if(App::getLocale() == 'kh')
                    <?php 
                      if($count_detail > 0){
                        echo @$sdetails[0]->subi_namekh;
                      }else{ echo "ទំព័រ";}
                    ?>
                  @else
                    <?php 
                      if($count_detail > 0){
                        echo @$sdetails[0]->subi_name;
                      }else{ echo "Page";}
                    ?>
                  @endif
                </li>
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
            <div class="single-service">
              <h4 class="text-theme-colored">
                  @if(App::getLocale() == 'kh')
                    <?php 
                      if($count_detail > 0){
                        echo @$sdetails[0]->subi_namekh;
                      }else{ echo "គ្មានទិន្នន័យ";}
                    ?>
                  @else
                    <?php 
                      if($count_detail > 0){
                        echo @$sdetails[0]->subi_name;
                      }else{ echo "No data";}
                    ?>
                  @endif
              </h4>
              
              @if(App::getLocale() == 'kh')
                <?php 
                  if($count_detail > 0){
                    echo @$sdetails[0]->subi_bodykh;
                  }else{ echo "គ្មានទិន្នន័យ";}
                ?>
              @else
                <?php 
                  if($count_detail > 0){
                    echo @$sdetails[0]->subi_body;
                  }else{ echo "No data";}
                ?>
              @endif
              
              
              

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
