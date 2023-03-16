<!DOCTYPE html>
<html  dir="ltr" lang="{{ app()->getLocale() }}" xml:lang="{{ app()->getLocale() }}">
<!-- index-mp-layout102:13-->
<head>
<!-- Meta Tags -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="PSBU Education & Courses Website Official, Bachelor Degree, Master Degree" />
<meta name="keywords" content="academy, course, education, education University, learning," />

<!-- Page Title -->
<title>PSBU | Education & Courses University</title>

<!-- Favicon and Touch Icons -->
<link href="{{ asset('themes/webfront/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
<link href="{{ asset('themes/webfront/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{ asset('themes/webfront/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{ asset('themes/webfront/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">
<link href="{{ asset('themes/login/img/PSBU-02_small.png')}}" rel="shortcut icon" type="image/png">

<!-- Stylesheet -->
<link href="{{ asset('themes/webfront/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('themes/webfront/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('themes/webfront/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('themes/webfront/css/css-plugin-collections.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('themes/webfront/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('themes/webfront/css/style-main.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('themes/webfront/css/preloader.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('themes/webfront/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('themes/webfront/css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ asset('themes/webfront/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('themes/webfront/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('themes/webfront/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ asset('themes/webfront/css/colors/theme-skin-color-set-1.css')}}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{ asset('themes/webfront/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{ asset('themes/webfront/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('themes/webfront/js/bootstrap.min.js')}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset('themes/webfront/js/jquery-plugin-collection.js')}}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ asset('themes/webfront/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('themes/webfront/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
  @yield('content')
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="{{ asset('themes/webfront/images/preloaders/5.gif')}}">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="list-inline">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">123-456-789</a> </li>
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Fri 8:00 to 2:00 </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">info@psbu.edu.kh</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline text-right sm-text-center">
                <li>
                  <a href="#" class="text-white">E-Learning</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="#" class="text-white">Help Desk</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="#" class="text-white">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
              <img src="{{ asset('themes/webfront/images/psbu_logo_web_72.png')}}" alt="PSBU LOGO">
            </a>
            <ul class="menuzord-menu">
              <li class="active"><a href="#home">Home</a></li>
              <li><a href="#">Features</a>
                <ul class="dropdown">
                  <li><a href="features-preloader.html">Preloaders</a></li>
                  <li><a href="#">Header</a>
                    <ul class="dropdown">
                      <li><a href="features-header-style1.html">Header Style1</a></li>
                      <li><a href="features-header-style2.html">Header Style2</a></li>
                      <li><a href="features-header-style3.html">Header Style3</a></li>
                      <li><a href="features-header-style4.html">Header Style4</a></li>
                      <li><a href="features-header-style5.html">Header Style5</a></li>
                      <li><a href="features-header-style6.html">Header Style6</a></li>
                      <li><a href="features-header-style7.html">Header Style7</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Page Title</a>
                    <ul class="dropdown">
                      <li><a href="features-page-title-text-left.html">Text Left</a></li>
                      <li><a href="features-page-title-text-center.html">Text Center</a></li>
                      <li><a href="features-page-title-text-right.html">Text Right</a></li>
                      <li><a href="features-page-title-mini-version.html">Mini Version</a></li>
                      <li><a href="features-page-title-big-version.html">Big Version</a></li>
                      <li><a href="features-page-title-extra-big-version.html">Extra Big Version</a></li>
                      <li><a href="features-page-title-bg-white.html">Bg White</a></li>
                      <li><a href="features-page-title-bg-image.html">Bg Image</a></li>
                      <li><a href="features-page-title-bg-image-parallax.html">Bg Image Parallax</a></li>
                      <li><a href="features-page-title-bg-video.html">Bg Video</a></li>
                      <li><a href="features-page-title-full-transparent.html">Full Transparent</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Side Push Panel</a>
                    <ul class="dropdown">
                      <li><a href="features-side-push-panel-left-overlay.html">Left Overlay</a></li>
                      <li><a href="features-side-push-panel-left-push.html">Left Push</a></li>
                      <li><a href="features-side-push-panel-right-overlay.html">Right Overlay</a></li>
                      <li><a href="features-side-push-panel-right-push.html">Right Push</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Sliders</a>
                    <ul class="dropdown">
                      <li><a href="#">Revolution Slider</a>
                        <ul class="dropdown">
                          <li><a href="features-home-revslider.html">Revolution Slider</a></li>
                          <li><a href="features-rev-slider-premium-templates.html">Revolution Slider All In One</a></li>
                        </ul>
                      </li>
                      <li><a href="features-home-bg-image-slider.html">Bg Image Slider</a></li>
                      <li><a href="features-home-owl-fullwidth-carousel.html">Owl Fullwidth Carousel</a></li>
                      <li><a href="features-home-parallax-bg.html">Static/Parallax Image Bg</a></li>
                      <li><a href="features-home-video-bg.html">Video Image Bg</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Form</a>
                    <ul class="dropdown">
                      <li><a href="#">Subscribe Form</a>
                        <ul class="dropdown">
                          <li><a href="form-subscribe.html">Form style 1</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Appointment Form</a>
                        <ul class="dropdown">
                          <li><a href="form-appointment-style1.html">Form style 1</a></li>
                          <li><a href="form-appointment-style2.html">Form style 2</a></li>
                          <li><a href="form-appointment-style3.html">Form style 3</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Job Apply Form</a>
                        <ul class="dropdown">
                          <li><a href="form-job-apply-style1.html">Form style 1</a></li>
                          <li><a href="form-job-apply-style2.html">Form style 2</a></li>
                          <li><a href="form-job-apply-style3.html">Form style 3</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Quick Contact Form</a>
                        <ul class="dropdown">
                          <li><a href="form-quick-contact-style1.html">Form style 1</a></li>
                          <li><a href="form-quick-contact-style2.html">Form style 2</a></li>
                          <li><a href="form-quick-contact-style3.html">Form style 3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Paypal Form <span class="label label-success">New</span></a>
                    <ul class="dropdown">
                      <li><a href="#">Donation Onetime</a>
                        <ul class="dropdown">
                          <li><a href="form-paypal-donate-onetime-style1.html">Style1</a></li>
                          <li><a href="form-paypal-donate-onetime-style2.html">Style2</a></li>
                          <li><a href="form-paypal-donate-onetime-style3.html">Style3</a></li>
                          <li><a href="form-paypal-donate-onetime-style4.html">Style4</a></li>
                          <li><a href="form-paypal-donate-onetime-style5.html">Style5</a></li>
                          <li><a href="form-paypal-donate-onetime-style6.html">Style6</a></li>
                          <li><a href="form-paypal-donate-onetime-style7.html">Style7</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Donation Recurring</a>
                        <ul class="dropdown">
                          <li><a href="form-paypal-donate-recurring-style1.html">Style1</a></li>
                          <li><a href="form-paypal-donate-recurring-style2.html"> Style2</a></li>
                          <li><a href="form-paypal-donate-recurring-style3.html">Style3</a></li>
                          <li><a href="form-paypal-donate-recurring-style4.html">Style4</a></li>
                          <li><a href="form-paypal-donate-recurring-style5.html">Style5</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Both Onetime/Recurring</a>
                        <ul class="dropdown">
                          <li><a href="form-paypal-donate-both-onetime-recurring-style1.html">Style1</a></li>
                          <li><a href="form-paypal-donate-both-onetime-recurring-style2.html">Style2</a></li>
                          <li><a href="form-paypal-donate-both-onetime-recurring-style3.html">Style3</a></li>
                          <li><a href="form-paypal-donate-both-onetime-recurring-style4.html">Style4</a></li>
                          <li><a href="form-paypal-donate-both-onetime-recurring-style5.html">Style5</a></li>
                        </ul>
                      </li>
                      <li><a href="form-paypal-cart-style1.html">Cart Payment</a></li>
                      <li><a href="form-paypal-order-style1.html">Order Payment Style1</a></li>
                      <li><a href="form-paypal-order-style2.html">Order Payment Style2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Popup Promo Box</a>
                    <ul class="dropdown">
                      <li><a href="features-popup-promo-box.html">Default</a></li>
                      <li><a href="features-popup-promo-box-cookie-enabled.html">Cookie Enabled</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Footer</a>
                    <ul class="dropdown">
                      <li><a href="features-footer-style1.html#footer">Footer One</a></li>
                      <li><a href="features-footer-style2.html#footer">Footer Two</a></li>
                      <li><a href="features-footer-style3.html#footer">Footer Three</a></li>
                      <li><a href="features-footer-style4.html#footer">Footer Four</a></li>
                      <li><a href="features-footer-style5.html#footer">Footer Five</a></li>
                      <li><a href="features-footer-style6.html#footer">Footer Six</a></li>
                      <li><a href="features-footer-style7.html#footer">Footer Seven</a></li>
                      <li><a href="features-footer-style8.html#footer">Footer Eight</a></li>
                      <li><a href="features-footer-style9.html#footer">Footer Nine</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Pages</a>
                <ul class="dropdown">
                  <li><a href="#">About</a>
                    <ul class="dropdown">
                      <li><a href="page-about-style1.html">About Style 1</a></li>
                      <li><a href="page-about-style2.html">About Style 2</a></li>
                    </ul>
                  </li>
                  <li><a href="page-students-details.html">Student Details</a></li>
                  <li><a href="#home">Services</a>
                    <ul class="dropdown">
                      <li><a href="page-services-style1.html">Services style 1</a></li>
                      <li><a href="page-services-style2.html">Services style 2</a></li>
                      <li><a href="page-services-details.html">Services Details</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Pricing</a>
                    <ul class="dropdown">
                      <li><a href="page-pricing-style1.html">Pricing Style 1</a></li>
                      <li><a href="page-pricing-style2.html">Pricing Style 2</a></li>
                    </ul>
                  </li>
                  <li><a href="page-timetable.html">Timetable</a></li>
                  <li><a href="#">Calender</a>
                    <ul class="dropdown">
                      <li><a href="page-calendar1.html">Calendar Style1</a></li>
                      <li><a href="page-calendar2.html">Calendar Style2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Events</a>
                    <ul class="dropdown">
                      <li><a href="#">Events Grid</a>
                        <ul class="dropdown">
                          <li><a href="events-grid-2column.html">Grid 2column</a></li>
                          <li><a href="events-grid-3column.html">Grid 3column</a></li>
                          <li><a href="events-grid-4column.html">Grid 4column</a></li>
                          <li><a href="events-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                          <li><a href="events-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Events List</a>
                        <ul class="dropdown">
                          <li><a href="events-list-left-sidebar.html">List Left Sidebar</a></li>
                          <li><a href="events-list-right-sidebar.html">List Right Sidebar</a></li>
                          <li><a href="events-list-no-sidebar.html">List No Sidebar</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Events Details</a>
                        <ul class="dropdown">
                          <li><a href="events-details-style1.html">Details Style1</a></li>
                          <li><a href="events-details-style2.html">Details Style2</a></li>
                          <li><a href="events-details-style3.html">Details Style3</a></li>
                        </ul>
                      </li>
                      <li><a href="events-table.html">Events Table</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Job <span class="label label-success">New</span></a>
                    <ul class="dropdown">
                      <li><a href="job-list.html">Job List</a></li>
                      <li><a href="job-details-style1.html">Job Details Style1</a></li>
                      <li><a href="job-details-style2.html">Job Details Style2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Shop</a>
                    <ul class="dropdown">
                      <li><a href="shop-category.html">Category</a></li>
                      <li><a href="shop-category-sidebar.html">Category Sidebar</a></li>
                      <li><a href="shop-product-details.html">Product Details</a></li>
                      <li><a href="shop-cart.html">Cart</a></li>
                      <li><a href="shop-checkout.html">Checkout</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Contact</a>
                    <ul class="dropdown">
                      <li><a href="page-contact-style1.html">Contact style 1</a></li>
                      <li><a href="page-contact-style2.html">Contact style 2</a></li>
                      <li><a href="page-contact-style3.html">Contact style 3</a></li>
                      <li><a href="page-contact-style4.html">Contact style 4</a></li>
                      <li><a href="page-contact5-with-multiple-marker.html">Contact 5 - Multiple Marker</a></li>
                      <li><a href="page-contact6-with-multiple-marker.html">Contact 6 - Multiple Marker</a></li>
                    </ul>
                  </li>
                  <li><a href="#">FAQ</a>
                    <ul class="dropdown">
                      <li><a href="page-faq-style1.html">FAQ Style1</a></li>
                      <li><a href="page-faq-style2.html">FAQ Style2</a></li>
                      <li><a href="page-faq-style3.html">FAQ Style3</a></li>
                      <li><a href="page-faq-style4.html">FAQ Style4</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Page 404</a>
                    <ul class="dropdown">
                      <li><a href="page-404-style1.html">Style1</a></li>
                      <li><a href="page-404-style2.html">Style2</a></li>
                      <li><a href="page-404-style3.html">Style3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Coming Soon</a>
                    <ul class="dropdown">
                      <li><a href="page-coming-soon-style1.html">Contact style 1</a></li>
                      <li><a href="page-coming-soon-style2.html">Contact style 2</a></li>
                      <li><a href="page-coming-soon-style3.html">Contact style 3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Under Construction</a>
                    <ul class="dropdown">
                      <li><a href="page-under-construction-style1.html">Style1</a></li>
                      <li><a href="page-under-construction-style2.html">Style2</a></li>
                      <li><a href="page-under-construction-style3.html">Style3</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Gallery</a>
                <ul class="dropdown">
                  <li><a href="page-gallery-3col.html">3 Columns</a></li>
                  <li><a href="page-gallery-3col-only-image.html">3 Columns Only Image</a></li>
                  <li><a href="page-gallery-4col.html">4 Columns</a></li>
                  <li><a href="page-gallery-4col-only-image.html">4 Columns Only Image</a></li>
                  <li><a href="page-gallery-grid.html">Grids (2-10 Columns)</a></li>
                  <li><a href="page-gallery-grid-animation.html">Grids with Animation (2-10 Columns)</a></li>
                  <li><a href="page-gallery-3col-tiles.html">3 Columns Tiles</a></li>
                  <li><a href="page-gallery-4col-tiles.html">4 Columns Tiles</a></li>
                  <li><a href="page-gallery-masonry-tiles.html">Tiles (2-10 Columns)</a></li>
                  <li><a href="page-gallery-masonry-tiles-animation.html">Tiles with Animation (2-10 Columns)</a></li>
                  <li><a href="page-gallery-prettyphoto.html">Pretty Photo Gallery</a></li>
                </ul>
              </li>
              <li><a href="#home">Courses</a>
                <ul class="dropdown">
                  <li><a href="page-course-gird.html">Course Gird</a></li>
                  <li><a href="page-course-list.html">Course List</a></li>
                  <li><a href="page-courses-accounting-technologies.html">Accounting Technoloiges</a></li>
                  <li><a href="page-courses-chemical-engineering.html">Chemical Engineering</a></li>
                  <li><a href="page-courses-computer-technologies.html">Computer Technologies</a></li>
                  <li><a href="page-courses-development-studies.html">Development Studies</a></li>
                  <li><a href="page-courses-electrical-electronic.html">Electrical & Electronic</a></li>
                  <li><a href="page-courses-modern-languages.html">Modern Languages</a></li>
                  <li><a href="page-courses-modern-technologies.html">Modern Technologies</a></li>
                  <li><a href="page-courses-software-engineering.html">Software Engineering</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">
        
      <!-- Slider Revolution Start -->
      <div class="rev_slider_wrapper">
        <div class="rev_slider" data-version="5.0">
          <ul>

            <!-- SLIDE 1 -->
            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('themes/webfront/images/bg/bg5.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('themes/webfront/images/bg/bg5.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                id="rs-1-layer-1"

                data-x="['left']"
                data-hoffset="['30']"
                data-y="['middle']"
                data-voffset="['-110']" 
                data-fontsize="['100']"
                data-lineheight="['110']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700;">Education
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                id="rs-1-layer-2"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['-25']" 
                data-fontsize="['35']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">Education For EveryOne 
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white" 
                id="rs-1-layer-3"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['35']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme" 
                id="rs-1-layer-4"

                data-x="['left']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['100']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20" href="#">View Details</a> 
              </div>
            </li>

            <!-- SLIDE 2 -->
            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('themes/webfront/images/bg/bg7.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('themes/webfront/images/bg/bg7.jpg')}}"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase  bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                id="rs-2-layer-1"
              
                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-90']" 
                data-fontsize="['28']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Feed Your Knowledge
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                id="rs-2-layer-2"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['-20']"
                data-fontsize="['48']"
                data-lineheight="['70']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">World's Best University
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white text-center" 
                id="rs-2-layer-3"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['50']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme" 
                id="rs-2-layer-4"

                data-x="['center']"
                data-hoffset="['0']"
                data-y="['middle']"
                data-voffset="['115']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Apply Now</a> 
              </div>
            </li>

            <!-- SLIDE 3 -->
            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('themes/webfront/images/bg/bg1.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('themes/webfront/images/bg/bg1.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                id="rs-3-layer-1"

                data-x="['right']"
                data-hoffset="['30']"
                data-y="['middle']"
                data-voffset="['-90']" 
                data-fontsize="['64']"
                data-lineheight="['72']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">Best Education
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                id="rs-3-layer-2"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['-25']" 
                data-fontsize="['32']"
                data-lineheight="['54']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; white-space: nowrap; font-weight:600;">For Your Better Future 
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption tp-resizeme text-white text-right" 
                id="rs-3-layer-3"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['30']"
                data-fontsize="['16']"
                data-lineheight="['28']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;s:500"
                data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption tp-resizeme" 
                id="rs-3-layer-4"

                data-x="['right']"
                data-hoffset="['35']"
                data-y="['middle']"
                data-voffset="['95']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20" href="#">Apply Now</a> 
              </div>
            </li>

          </ul>
        </div>
        <!-- end .rev_slider -->
      </div>
      <!-- end .rev_slider_wrapper -->
      <script>
        $(document).ready(function(e) {
          $(".rev_slider").revolution({
            sliderType:"standard",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
              arrows: {
                style:"zeus",
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                left: {
                  h_align:"left",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                },
                right: {
                  h_align:"right",
                  v_align:"center",
                  h_offset:30,
                  v_offset:0
                }
              },
              bullets: {
                enable:true,
                hide_onmobile:true,
                hide_under:600,
                style:"metis",
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:1200,
                direction:"horizontal",
                h_align:"center",
                v_align:"bottom",
                h_offset:0,
                v_offset:30,
                space:5,
                tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span>'
              }
            },
            responsiveLevels: [1240, 1024, 778],
            visibilityLevels: [1240, 1024, 778],
            gridwidth: [1170, 1024, 778, 480],
            gridheight: [650, 768, 960, 720],
            lazyType: "none",
            parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
          });
        });
      </script>
      <!-- Slider Revolution Ends -->

    </section>

    <!-- Section: About -->
    <section id="about">
      <div class="container pb-70">
        <div class="section-content">
      <div class="row">
        <div class="col-md-8 col-sm-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="row">
          <div class="col-md-6">
            <h3 class="text-uppercase mt-0">LATEST <span class="text-theme-color-2">  News </span></h3>
          </div>
          <div class="col-md-6">
            <a class="btn btn-default btn-theme-colored btn-flat btn-sm pull-right" href="blog-single-left-sidebar.html">View All</a>
          </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-3col owl-nav-top mb-sm-0" data-dots="true">
              <div class="item">
              <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">
                <div class="entry-header">
                <div class="post-thumb thumb"> <img src="{{ asset('themes/webfront/images/blog/1.jpg')}}" alt="" class="img-responsive img-fullwidth"> </div>
                
                </div>
                <div class="entry-content border-1px p-20">
                <h4 class="entry-title mt-0 pt-0"><a href="#">Post Title Here</a></h4>
                  <span class="text-theme-colored mr-10 font-14"><i class="fa fa-calendar mr-5 text-theme-colored"></i> 21 February 2016</span>
                <p class="text-left mb-20 mt-5 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="blog-single-left-sidebar.html">Read more</a>
                <div class="clearfix"></div>
                </div>
              </article>
              </div>
              <div class="item">
              <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                <div class="entry-header">
                <div class="post-thumb thumb"> <img src="{{ asset('themes/webfront/images/blog/2.jpg')}}" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content border-1px p-20">
                <h4 class="entry-title mt-0 pt-0"><a href="#">Post Title Here</a></h4>
                  <span class="text-theme-colored mr-10 font-14"><i class="fa fa-calendar mr-5 text-theme-colored"></i> 21 February 2016</span>
                <p class="text-left mb-20 mt-5 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="blog-single-left-sidebar.html">Read more</a>
                <div class="clearfix"></div>
                </div>
              </article>
              </div>
              <div class="item">
              <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".6s">
                <div class="entry-header">
                <div class="post-thumb thumb"> <img src="{{ asset('themes/webfront/images/blog/3.jpg')}}" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content border-1px p-20">
                <h4 class="entry-title mt-0 pt-0"><a href="#">Post Title Here</a></h4>
                  <span class="text-theme-colored mr-10 font-14"><i class="fa fa-calendar mr-5 text-theme-colored"></i> 21 February 2016</span>
                <p class="text-left mb-20 mt-5 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="blog-single-left-sidebar.html">Read more</a>
                <div class="clearfix"></div>
                </div>
              </article>
              </div>
              <div class="item">
              <article class="post clearfix maxwidth600 mb-sm-30">
                <div class="entry-header">
                <div class="post-thumb thumb"> <img src="{{ asset('themes/webfront/images/blog/2.jpg')}}" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content border-1px p-20">
                <h4 class="entry-title mt-0 pt-0"><a href="#">Post Title Here</a></h4>
                  <span class="text-theme-colored mr-10 font-14"><i class="fa fa-calendar mr-5 text-theme-colored"></i> 21 February 2016</span>
                <p class="text-left mb-20 mt-5 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="blog-single-left-sidebar.html">Read more</a>
                <div class="clearfix"></div>
                </div>
              </article>
              </div>
              <div class="item">
              <article class="post clearfix maxwidth600 mb-sm-30">
                <div class="entry-header">
                <div class="post-thumb thumb"> <img src="{{ asset('themes/webfront/images/blog/3.jpg')}}" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content border-1px p-20">
                <h4 class="entry-title mt-0 pt-0"><a href="#">Post Title Here</a></h4>
                  <span class="text-theme-colored mr-10 font-14"><i class="fa fa-calendar mr-5 text-theme-colored"></i> 21 February 2016</span>
                <p class="text-left mb-20 mt-5 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="blog-single-left-sidebar.html">Read more</a>
                <div class="clearfix"></div>
                </div>
              </article>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
          <h3 class="text-uppercase mt-0">Social <span class="text-theme-color-2">  Media </span></h3>
          <div id="fb-root"></div>
          <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=305812356488826&autoLogAppEvents=1"></script>
                      <div class="fb-page" data-href="https://web.facebook.com/psbuinformation/" data-tabs="timeline" data-width="" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kohrongservices" class="fb-xfbml-parse-ignore"><a href=https://web.facebook.com/psbuinformation/">ពុទ្ធិកសាកលវិទ្យាល័យព្រះសីហមុនីរាជា</a></blockquote></div>
         
          <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
          <div class="fb-page" data-href="https://www.facebook.com/Preahsihamonyraja-Buddhist-University-598253527202448/" data-tabs="timeline" data-width="" data-height="200" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Preahsihamonyraja-Buddhist-University-598253527202448/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Preahsihamonyraja-Buddhist-University-598253527202448/">Preahsihamonyraja Buddhist University</a></blockquote></div>
          
          <!-- end facebook page plugin -->
        </div>
      </div>
        </div>
      </div>
    </section>
  
  <!-- Section: teachers -->
    <section class="bg-lightest">
      <div class="container pt-50 pb-80">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 wow mt-20 fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="text-uppercase title line-bottom mt-0 mb-30">Our <span class="text-theme-color-2">MAJORS</span></h3>
              <div class="owl-carousel-2col">
                <div class="item">
                  <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                    <div class="team-thumb">
                      <img class="img-fullwidth" alt="" src="{{ asset('themes/webfront/images/team/lg2.jpg')}}">
                      <div class="team-overlay"></div>
                    </div>
                  <div class="team-details bg-silver-light pt-10 pb-10">
                    <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">Jhon Smith</a></h4>
                      <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Teacher Designation</h6>
                      <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                    <div class="team-thumb">
                      <img class="img-fullwidth" alt="" src="{{ asset('themes/webfront/images/team/lg3.jpg')}}">
                      <div class="team-overlay"></div>
                    </div>
                  <div class="team-details bg-silver-light pt-10 pb-10">
                    <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">Jhon Smith</a></h4>
                      <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Teacher Designation</h6>
                      <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                    <div class="team-thumb">
                      <img class="img-fullwidth" alt="" src="{{ asset('themes/webfront/images/team/lg4.jpg')}}">
                      <div class="team-overlay"></div>
                    </div>
                  <div class="team-details bg-silver-light pt-10 pb-10">
                    <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">Jhon Smith</a></h4>
                      <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Teacher Designation</h6>
                      <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="text-uppercase ml-15 title line-bottom">Next <span class="text-theme-color-2 font-weight-700">Events</span></h3>
              <div class="bxslider bx-nav-top p-0 m-0">
                <div class="col-xs-12 pr-0 col-sm-6 col-md-6 mb-20">
                  <div class="pricing table-horizontal maxwidth400">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="thumb">
                        <img class="img-fullwidth mb-sm-0" src="{{ asset('themes/webfront/images/about/as1.jpg')}}" alt="">
                        </div>
                      </div>
                      <div class="col-md-6 p-10 pl-sm-50">
                        <h4 class="mt-0 mb-5 mt-10"><a href="#" class="text-white">Upcoming Event Title</a></h4>
                        <ul class="list-inline font-16 mb-5 text-white">
                          <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                          <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                        </ul>
                        <p class="mb-0 font-13 text-white mr-5 pr-10">Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Quas eveniet.</p>
                        <a class="font-16  text-white mt-20" href="#">Read More →</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 pr-0 col-sm-6 col-md-6 mb-30">
                  <div class="pricing table-horizontal maxwidth400">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="thumb">
                        <img class="img-fullwidth mb-sm-0" src="{{ asset('themes/webfront/images/about/as2.jpg')}}" alt="">
                        </div>
                      </div>
                      <div class="col-md-6 p-10 pl-sm-50">
                        <h4 class="mt-0 mb-5 mt-10"><a href="#" class="text-white">Upcoming Event Title</a></h4>
                        <ul class="list-inline font-16 mb-5 text-white">
                          <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                          <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                        </ul>
                        <p class="mb-0 font-13 text-white mr-5 pr-10">Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Quas eveniet.</p>
                        <a class="font-16  text-white mt-20" href="#">Read More →</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 pr-0 col-sm-6 col-md-6 mb-30">
                  <div class="pricing table-horizontal maxwidth400">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="thumb">
                        <img class="img-fullwidth mb-sm-0" src="{{ asset('themes/webfront/images/about/as3.jpg')}}" alt="">
                        </div>
                      </div>
                      <div class="col-md-6 p-10 pl-sm-50">
                        <h4 class="mt-0 mb-5 mt-10"><a href="#" class="text-white">Upcoming Event Title</a></h4>
                        <ul class="list-inline font-16 mb-5 text-white">
                          <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                          <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                        </ul>
                        <p class="mb-0 font-13 text-white mr-5 pr-10">Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Quas eveniet.</p>
                        <a class="font-16  text-white mt-20" href="#">Read More →</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 pr-0 col-sm-6 col-md-6 mb-30">
                  <div class="pricing table-horizontal maxwidth400">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="thumb">
                        <img class="img-fullwidth mb-sm-0" src="{{ asset('themes/webfront/images/about/as4.jpg')}}" alt="">
                        </div>
                      </div>
                      <div class="col-md-6 p-10 pl-sm-50">
                        <h4 class="mt-0 mb-5 mt-10"><a href="#" class="text-white">Upcoming Event Title</a></h4>
                        <ul class="list-inline font-16 mb-5 text-white">
                          <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                          <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                        </ul>
                        <p class="mb-0 font-13 text-white mr-5 pr-10">Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Quas eveniet.</p>
                        <a class="font-16  text-white mt-20" href="#">Read More →</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  

  <!-- Section: Mission -->
    <section id="mission">
      <div class="container-fluid pt-0 pb-0">
        <div class="row equal-height">
          <div class="col-sm-6 col-md-6 xs-pull-none bg-theme-colored wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="pt-60 pb-40 pl-90 pr-160 p-md-30">
              <h2 class="title text-white text-uppercase line-bottom mt-0 mb-30">Why Choose Us?</h2>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none"> 
                  <i class="fa fa-desktop text-theme-color-2 font-36"></i> 
                </a>
                <div class="ml-120 ml-sm-0">
                  <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Best Lab</h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam. </p>
                </div>
              </div>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                  <i class="fa fa-user text-theme-color-2 font-36"></i> 
                </a>
                <div class="ml-120 ml-sm-0">
                  <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Best Teachers</h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam. </p>
                </div>
              </div>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                  <i class="fa fa-money text-theme-color-2 font-36"></i> 
                </a>
                <div class="ml-120 ml-sm-0">
                  <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Low Cost Services</h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 p-0 bg-img-cover wow fadeInRight hidden-xs" data-bg-img="{{ asset('themes/webfront/images/photos/ab1.jpg')}}" data-wow-duration="1s" data-wow-delay="0.3s">
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Why Choose Us -->
    <section class="bg-lightest">
      <div class="container pt-50 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-7 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="pr-40">
                <h3 class="text-uppercase title line-bottom">Why <span class="text-theme-color-2 font-weight-700">Choose Us ?</span></h3>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-40">
                     <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-scissors text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <h5 class="icon-box-title mt-15 letter-space-1 font-weight-600 mb-5">Less CSS</h5>
                      <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                     </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-40">
                     <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-pen text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <h5 class="icon-box-title mt-15 letter-space-1 font-weight-600 mb-5">Special ShortCode</h5>
                      <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                     </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-40">
                     <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-tools text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <h5 class="icon-box-title mt-15 letter-space-1 font-weight-600 mb-5">Easy Customiz</h5>
                      <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                     </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-40">
                     <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-phone text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <h5 class="icon-box-title mt-15  letter-space-1 font-weight-600 mb-5">Responsive</h5>
                      <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                     </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-30">
                     <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-vector text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <h5 class="icon-box-title mt-15 letter-space-1 font-weight-600 mb-5">W3 Validation</h5>
                      <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                     </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-30">
                     <a href="#" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-light text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <h5 class="icon-box-title mt-15  letter-space-1 font-weight-600 mb-5">Retina Ready</h5>
                      <p class="text-gray">Lorem ipsum dolor sit amet, consectetur.</p>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="col-md-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="text-uppercase title line-bottom">What <span class="text-theme-color-2 font-weight-700">Clients Say ?</span></h3>
              <div class="bxslider bx-nav-top">
                <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                  <div class="comment">
                   <p class="text-white"><em>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui.</em></p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-left flip">
                      <img width="64" src="{{ asset('themes/webfront/images/testimonials/1.jpg')}}" alt="" class="img-circle">
                    </div>
                    <div class="testimonials-details pull-left flip ml-20">
                      <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600">Jonathan Smith</h5>
                      <h6 class="title font-14 m-0 mt-5 mb-5 text-gray-darkgray">cici inc.</h6>
                      <ul class="review_text list-inline">
                        <li>
                          <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">4.50</span></div>
                        </li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                  <div class="comment">
                   <p class="text-white"><em>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui.</em></p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-left flip">
                      <img width="64" src="{{ asset('themes/webfront/images/testimonials/2.jpg')}}" alt="" class="img-circle">
                    </div>
                    <div class="testimonials-details pull-left flip ml-20">
                      <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600">Jonathan Smith</h5>
                      <h6 class="title font-14 m-0 mt-5 mb-5 text-gray-darkgray">cici inc.</h6>
                      <ul class="review_text list-inline">
                        <li>
                          <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">4.50</span></div>
                        </li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                  <div class="comment">
                   <p class="text-white"><em>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui.</em></p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-left flip">
                      <img width="64" src="{{ asset('themes/webfront/images/testimonials/3.jpg')}}" alt="" class="img-circle">
                    </div>
                    <div class="testimonials-details pull-left flip ml-20">
                      <h5 class="author text-theme-color-2 mt-0 mb-0 font-weight-600">Jonathan Smith</h5>
                      <h6 class="title font-14 m-0 mt-5 mb-5 text-gray-darkgray">cici inc.</h6>
                      <ul class="review_text list-inline">
                        <li>
                          <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">4.50</span></div>
                        </li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
      
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact --><!--
    <section class="divider parallax layer-overlay" data-bg-img="images/bg/bg6.jpg" data-parallax-ratio="0.7">
      <div class="container pt-70 pb-60">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="fa fa-users mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="50" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase">Professors</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="fa fa-book mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="75" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase">Class Types</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="fa fa-home mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="204" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase">Class Rooms</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="fa  fa-graduation-cap mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="2324" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase">Students</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
end info tranparency blog -->

    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored">
      <div class="container pt-10 pb-10 pb-sm-0 pt-sm-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col transparent text-center owl-nav-top">
              <div class="item"> <a href="#"><img src="{{ asset('themes/webfront/images/clients/w1.png')}}" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('themes/webfront/images/clients/w2.png')}}" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('themes/webfront/images/clients/w3.png')}}" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('themes/webfront/images/clients/w4.png')}}" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('themes/webfront/images/clients/w5.png')}}" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('themes/webfront/images/clients/w6.png')}}" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('themes/webfront/images/clients/w3.png')}}" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('themes/webfront/images/clients/w4.png')}}" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('themes/webfront/images/clients/w5.png')}}" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('themes/webfront/images/clients/w6.png')}}" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>      

  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <footer id="footer" class="footer bg-black-222" >
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <img class="mt-10 mb-15" alt="PSBU LOGO" src="{{ asset('themes/webfront/images/psbu_logo_web_72.png')}}">
            <ul class="list-border">
              <li><a href="#">Message of Rector</a></li>
              <li><a href="#">Why PSBU?</a></li>
              <li><a href="#">Structure of PSBU</a></li>
              <li><a href="#">Mission Vision and Goal</a></li>
              <li><a href="#">Government Recognition</a></li>
              <li><a href="#">Library and Facility</a></li>
              <li><a href="#">Finance Office</a></li>
            </ul>
            
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Office</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="#">Department of Foundation Year</a></li>
              <li><a href="#">Department of Educational Sciences</a></li>
              <li><a href="#">Department of General Management</a></li>
              <li><a href="#">Department of Philosophy Religion</a></li>
              <li><a href="#">Department of Law</a></li>
              <li><a href="#">Dept. of Information Technology</a></li>
              <li><a href="#">Department of English Literatures</a></li>
              <li><a href="#">Academic and Student Affairs Office</a></li>
              <li><a href="#">Administrative and Staff Office</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Contact Us</h5>
            <ul class="list-border">
              <li><i class="fa fa-map-marker"></i>
                                អាសយដ្ឋាន: Svay Poporpe pagoda, in front of Russian Embassy, Sothearos Blv, Phnom Penh, Cambodia</li>
              <li><i class="fa fa-envelope"></i> អ៊ីមែល: <a href="#" style="color: #fff;">info@psbu.edu.kh</a></li>
              <li><i class="fa fa-phone"></i> ទូរស័ព្ទ: <a href="#" style="color: #fff;"> +855 16 43 43 25 / +855 12 994 089</a></li>
            </ul>
            <ul class="styled-icons icon-dark mt-20">
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="https://www.facebook.com/psbuinformation/" target="_Blank" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="https://www.facebook.com/Preahsihamonyraja-Buddhist-University-598253527202448/" target="_Blank" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="#" data-bg-color="#05A7E3"><i class="fa fa-instagram"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
            </ul>
           
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0"><a target="_blank" href="https://www.templateshub.net">Department of Computer Science</a></p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="{{ asset('themes/webfront/js/custom.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script> 
<script type="text/javascript" src="{{ asset('themes/webfront/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
</body>

<!-- index-mp-layout108:42-->
</html>