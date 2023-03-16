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

  
  <!-- Start main-content -->
  <div class="main-content">


    <!-- slider -->
    @include('layouts.fronted.slider')
    <!-- end slider -->
    <!-- Section: Why Choose Us -->
    @include('layouts.fronted.whychooseus');
    

    <!-- Section: teachers and event-->
    
    <!-- end Section: teachers and event-->
    @include('layouts.fronted.events');
    

    <!-- Section: Mission 
    @include('layouts.fronted.about_mission'); -->


     <!-- Section: latest News -->
    @include('layouts.fronted.latest_news');

    <!-- Divider: Funfact 
    @include('layouts.fronted.numberofpeoples');
     end info tranparency blog -->

         

  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  @include('layouts.fronted.footer')
  <!-- end footer -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 
@endsection

@section('javascript')

@endsection