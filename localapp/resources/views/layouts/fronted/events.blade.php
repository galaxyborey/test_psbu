    <section class="bg-lightest">
      <div class="container pt-50 pb-80">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 wow mt-10 fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              @if(App::getLocale() == 'kh')
              <h4 class="text-uppercase title line-bottom mt-0 mb-30">ការិយាល័យ <span class="text-theme-color-2">របស់យើង</span></h4>
              <div class="owl-carousel-1col">
              @foreach($offices as $oval)
                <div class="item">
                  <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                    <div class="team-thumb">
                      <img class="img-fullwidth" alt="{{$oval->name}}" src="{{URL('/')}}{{$oval->is_picture}}">
                      <div class="team-overlay"></div>
                    </div>
                  <div class="team-details bg-silver-light pt-10 pb-10">
                    <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">{{$oval->name_kh}}</a></h4>
                      <h6 class="text-theme-colored font-15 font-weight-400 mt-0">{{$oval->name}}</h6>
                      <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm"><!--
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-telegram"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
                      </ul>
                    </div>
                  </div>
                </div>
              @endforeach
              </div>

              @else
              <h4 class="text-uppercase title line-bottom mt-0 mb-30">Our <span class="text-theme-color-2">Offices</span></h4>
              <div class="owl-carousel-1col">
              @foreach($offices as $oval)
                <div class="item">
                  <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                    <div class="team-thumb">
                      <img class="img-fullwidth" alt="{{$oval->name}}" src="{{URL('/')}}{{$oval->is_picture}}">
                      <div class="team-overlay"></div>
                    </div>
                  <div class="team-details bg-silver-light pt-10 pb-10">
                    <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">{{$oval->name}}</a></h4>
                      <h6 class="text-theme-colored font-15 font-weight-400 mt-0">{{$oval->name}}</h6>
                      <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm"><!--
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-telegram"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
                      </ul>
                    </div>
                  </div>
                </div>
              @endforeach
              </div>
              @endif
            </div>
            @if(App::getLocale() == 'kh')
            <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h4 class="text-uppercase ml-15 title line-bottom">{{trans('lang.events')}} <span class="text-theme-color-2 font-weight-700">ថ្មី</span></h4>
              <div class="bxslider bx-nav-top p-0 m-0">
                <?php
                if(!empty($eventlist))
                {
                  foreach($eventlist as $ekey => $evalue)
                  {?>
                <div class="col-xs-12 pr-0 col-sm-6 col-md-6 mb-20">
                  <div class="pricing table-horizontal maxwidth400">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="thumb">
                        <img class="img-fullwidth mb-sm-0" src="{{ URL('/')}}<?php echo @$evalue['file'];?>" alt="">
                        </div>
                      </div>
                      <div class="col-md-6 p-10 pl-sm-50">
                        <h4 class="mt-0 mb-5 mt-10"><a href="{{URL('/')}}/viewdetailspages/<?php echo @$evalue['id'].'?'.@$evalue['slug'];?>" class="text-white"><?php echo @$evalue['title_kh'];?></a></h4>
                        <ul class="list-inline font-16 mb-5 text-white">
                          <li class="pr-0"><i class="fa fa-calendar mr-5"></i> <?php echo date('d-M-Y',strtotime(@$evalue['news_event_date']));?> |</li>
                          <li class="pl-5"><i class="fa fa-map-marker mr-5"></i><?php echo @$evalue['news_event_located'];?></li>
                        </ul>
                        <p class="mb-0 font-13 text-white mr-5 pr-10"></p>
                        <a class="font-16  text-white mt-20" href="{{URL('/')}}/viewdetailspages/<?php echo @$evalue['id'].'?'.@$evalue['slug'];?>">ចូលអាន →</a>
                      </div>
                    </div>
                  </div>
                </div>
                  <?php
                  }
                }
                ?>
                
                
                <!--
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
                -->
              </div>
            </div>
            @else
            <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h4 class="text-uppercase ml-15 title line-bottom">Next <span class="text-theme-color-2 font-weight-700">Events</span></h4>
              <div class="bxslider bx-nav-top p-0 m-0">
                <?php
                if(!empty($eventlist))
                {
                  foreach($eventlist as $ekey => $evalue)
                  {?>
                <div class="col-xs-12 pr-0 col-sm-6 col-md-6 mb-20">
                  <div class="pricing table-horizontal maxwidth400">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="thumb">
                        <img class="img-fullwidth mb-sm-0" src="{{ URL('/')}}<?php echo @$evalue['file'];?>" alt="">
                        </div>
                      </div>
                      <div class="col-md-6 p-10 pl-sm-50">
                        <h4 class="mt-0 mb-5 mt-10"><a href="{{URL('/')}}/viewdetailspages/<?php echo @$evalue['id'].'?'.@$evalue['slug'];?>" class="text-white"><?php echo @$evalue['title'];?></a></h4>
                        <ul class="list-inline font-16 mb-5 text-white">
                          <li class="pr-0"><i class="fa fa-calendar mr-5"></i> <?php echo date('d-M-Y',strtotime(@$evalue['news_event_date']));?> |</li>
                          <li class="pl-5"><i class="fa fa-map-marker mr-5"></i><?php echo @$evalue['news_event_located'];?></li>
                        </ul>
                        <p class="mb-0 font-13 text-white mr-5 pr-10"></p>
                        <a class="font-16  text-white mt-20" href="{{URL('/')}}/viewdetailspages/<?php echo @$evalue['id'].'?'.@$evalue['slug'];?>">Read more →</a>
                      </div>
                    </div>
                  </div>
                </div>
                  <?php
                  }
                }
                ?>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </section>