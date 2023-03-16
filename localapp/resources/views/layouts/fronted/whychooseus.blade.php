    <section class="">
      <div class="container pt-50 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-7 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="pr-40">
                @if(App::getLocale() == 'kh')
                <h4 class="text-uppercase title line-bottom">ឯកទេស <span class="text-theme-color-2 font-weight-700">សិក្សា</span></h4>
                 <div class="row">
                  
                  @foreach($majoring as $major)  

                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-40">
                     <a href="{{URL('/')}}/contentsubipages/<?php echo @$major->id."?".@$major->subi_slug;?>" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-pen text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <a href="{{URL('/')}}/contentsubipages/<?php echo @$major->id."?".@$major->subi_slug;?>">
                      <h5 class="icon-box-title mt-15 letter-space-1 font-weight-600 mb-5">{{$major->subi_namekh}}</h5></a>
                      <p class="text-gray">{{$major->name_kh}}</p>
                     </div>
                    </div>
                  </div>

                  @endforeach

                </div>
                @else
                <h4 class="text-uppercase title line-bottom">Our <span class="text-theme-color-2 font-weight-700">Majors</span></h4>
                <div class="row">
                  
                  @foreach($majoring as $major)  

                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="icon-box p-0 mb-40">
                     <a href="{{URL('/')}}/contentsubipages/<?php echo @$major->id."?".@$major->subi_slug;?>" class="icon bg-theme-colored pull-left sm-pull-none flip mr-10">
                      <i class="pe-7s-pen text-white"></i>
                     </a>
                     <div class="icon-box-details ml-sm-0">
                      <a href="{{URL('/')}}/contentsubipages/<?php echo @$major->id."?".@$major->subi_slug;?>">
                      <h5 class="icon-box-title mt-15 letter-space-1 font-weight-600 mb-5">{{$major->subi_name}}</h5></a>
                      <p class="text-gray">{{$major->name}}</p>
                     </div>
                    </div>
                  </div>

                  @endforeach

                </div>
                @endif
                
              </div>
            </div>
                       
            <div class="col-md-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              @if(App::getLocale() == 'kh')
              <h4 class="text-uppercase title line-bottom">ប្រវត្តិនៃ <span class="text-theme-color-2 font-weight-700">ការសិក្សា និងការងារ</span></h4>
              <div class="bxslider bx-nav-top">
              @foreach($peoples as $peo_value)
                <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                  <div class="comment">
                   <p class="text-gray-darkgray"><em>{{$peo_value->titlekh}}</em></p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-left flip">
                      <img width="64" src="{{ asset('/')}}/{{$peo_value->peo_picture}}" alt="" class="img-circle">
                    </div>
                    <div class="testimonials-details pull-left flip ml-20">
                      <h5 class="author text-white mt-0 mb-0 font-weight-600">{{$peo_value->fnamekh}}</h5>
                      <h6 class="title font-14 m-0 mt-5 mb-5 text-gray-darkgray"></h6>
                      
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              @endforeach
                
              </div>
              @else
              <h4 class="text-uppercase title line-bottom">History of <span class="text-theme-color-2 font-weight-700">Study & Work</span></h4>
              <div class="bxslider bx-nav-top">
              @foreach($peoples as $peo_value)
                <div class="testimonial bg-theme-colored border-radius-10px p-20 mb-15">
                  <div class="comment">
                   <p class="text-gray-darkgray"><em>{{$peo_value->title}}</em></p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-left flip">
                      <img width="64" src="{{ asset('/')}}/{{$peo_value->peo_picture}}" alt="" class="img-circle">
                    </div>
                    <div class="testimonials-details pull-left flip ml-20">
                      <h5 class="author text-white mt-0 mb-0 font-weight-600">{{$peo_value->fname}}</h5>
                      <h6 class="title font-14 m-0 mt-5 mb-5 text-gray-darkgray"></h6>
                      
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              @endforeach
                
              </div>
              @endif
            </div>
      
          </div>
        </div>
      </div>
    </section>