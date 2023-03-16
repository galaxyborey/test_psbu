<header>
  <div class="header-top-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="header-top-left">
            <ul>
              <!-- <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{\App\Http\Controllers\Web\PageController::getConfitData('email')}}</a></li> -->
              <li style="padding-left:10px;"><a href="javascript:;" onclick="getLanguage('kh')"><img width="20" src="{{asset('image')}}/logo/kh.png" alt="Logo"> {{trans('lang.khmer')}}</a> </li>
              <li><a href="javascript:;" onclick="getLanguage('en')"> <img width="20" src="{{asset('image')}}/logo/en.jpg" alt="Logo"> {{trans('lang.english')}} </a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="social-media-area">
            <nav>
              <ul>
                <li><a href="https://www.facebook.com/" target="_blank" class="active"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-middle-area menu-sticky">
      <div class="container">
          <div class="row">
              <div class="col-md-2 col-sm-12 col-xs-12 logo">
                  <a href="{{url('')}}"><img src="{{url('')}}/{{\App\Http\Controllers\HomeController::getConfitData('company_logo')}}" alt="logo"></a>
              </div>
              <div class="col-md-10 col-sm-12 col-xs-12 mobile-menu">
                  <div class="main-menu">
                      <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                      <nav class="rs-menu">
                          <ul class="nav-menu">
                              <!-- Home -->
                              <li class="current-menu-item current_page_item">
                                  <a href="{{url('')}}">{{trans('lang.home')}}</a>
                              </li>
                              @foreach(\App\Http\Controllers\Web\PageController::getDataCategory() as $key=>$value)
                                  @if(!empty(\App\Http\Controllers\Web\PageController::getDataSubCategory($value->id)))
                                  <li class="menu-item-has-children">
                                      <a href="{{url('cat')}}/{{$value->slug}}">{{$value->cat_name}}</a>
                                  @else
                                  <li>
                                      <a href="{{url('cat')}}/{{$value->slug}}">{{$value->cat_name}}</a>
                                  @endif
                                  @if(!empty(\App\Http\Controllers\Web\PageController::getDataSubCategory($value->id)))
                                  <ul class="sub-menu">
                                    @foreach(\App\Http\Controllers\Web\PageController::getDataSubCategory($value->id) as $keys=>$sub)
                                      <li>
                                        <a href="{{url('cat')}}/{{$sub->slug}}">{{$sub->sub_name}}</a>
                                      </li>
                                    @endforeach
                                  </ul>
                                  @endif
                                </li>
                              @endforeach
                          </ul>
                     </nav>
                 </div>
             </div>
          </div>
      </div>
  </div>
</header>
