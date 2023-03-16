<div class="partners-block" style="border: none;">
     <div class="main-title" style="margin-bottom:0;">
        <h1>{{trans('lang.our_partners')}}</h1>
    </div>
</div>
<div class="partners-block">   
    <div class="container">        
        <div class="row">
            <div class="col-md-12" style="padding: 10px;">
                <div class="carousel our-partners slide" id="ourPartners">
                    <div class="carousel-inner">
                        
                        <div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <img src="{{url('/photos/shares/logo.png')}}" alt="audiojungle">
                                </a>
                            </div>
                        </div>
                        @foreach(\App\Http\Controllers\Web\PageController::getSponsoerData() as $key=>$value)
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href="{{$value->links}}">
                                    <img src="{{asset('')}}{{$value->image}}" alt="audiojungle">
                                </a>
                            </div>
                        </div>
                        @endforeach                        
                    </div>
                    <a class="left carousel-control" href="#ourPartners" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="main-footer clearfix" style="padding: 30px 0 0px !important;">
    <div class="container">
        <!-- Footer info-->
        <div class="footer-info">
            <div class="row footer-widget subscribe-widget">
                <!-- About us -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a href="{{url('/')}}">
                                <img src="{{url('')}}{{\App\Http\Controllers\HomeController::getConfitData('company_logo')}}" alt="white-logo">
                            </a>
                        </div>
                        <p> {{\App\Http\Controllers\HomeController::getConfitData('f_des')}}  </p>
                    </div>
                    
                </div>
                <!-- Contact Us -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2 text-center">
                            <h1>{{trans('lang.contact_us')}}</h1>
                        </div>
                        <ul class="personal-info" style="padding-left: 20px;">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                {{trans('lang.address')}}: {{\App\Http\Controllers\HomeController::getConfitData('address')}}
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                {{trans('lang.email')}}:<a href="#" style="color: #fff;">{{\App\Http\Controllers\HomeController::getConfitData('email')}}</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                {{trans('lang.phone')}}: <a href="tel:+55-417-634-7071" style="color: #fff;">{{\App\Http\Controllers\HomeController::getConfitData('phone')}}</a>
                            </li>
                        </ul>
                        <ul class="social list-inline" style="padding-left: 22px;">
                            <li><a href="https://www.facebook.com/kohrongservices" target="_BLANK"><i class="fa fa-facebook" style="margin-top:10px;"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin" style="margin-top:10px;"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter" style="margin-top:10px;"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus" style="margin-top:10px;"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Gallery -->
                <!-- Newsletter -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-item newsletter text-center">
                        <div class="main-title-2">
                            <h1>{{trans('lang.socail')}}</h1>
                        </div>
                        <div id="fb-root">
                            
                        </div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=305812356488826&autoLogAppEvents=1"></script>
                      <div class="fb-page" data-href="https://www.facebook.com/kohrongservices" data-tabs="timeline" data-width="" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/kohrongservices" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kohrongservices">កោះរុង Kohrong Local Service</a></blockquote></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .footer-item .social li a {
            width: 35px;
            height: 35px;
            border: 1px solid #d2d2d2;
            color: #d2d2d2;
            text-align: center;
            display: block;
            border-radius: 50%;
            -webkit-transition: all .4s ease;
            transition: all .4s ease;
            margin-right: 5px;
        }
        .social li a{
            
            
        }
    </style>
    
</footer>