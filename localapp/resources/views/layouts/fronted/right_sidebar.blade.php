          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-right mt-sm-30">
              @if(App::getLocale() == 'kh')
              <h4 class="text-uppercase title line-bottom mt-0 mb-30">ឯកទេស <span class="text-theme-color-2 font-weight-700">សិក្សា</span></h4>
              <div class="widget">
                <div class="services-list">
                  <ul class="list list-border">
                  @foreach($majoring as $major)
                    <li><a href="{{URL('/')}}/contentsubipages/<?php echo @$major->id."?".@$major->subi_slug;?>">{{$major->subi_namekh}}</a></li>
                  @endforeach
                  </ul>
                </div>
              </div>
              @else
              <h4 class="text-uppercase title line-bottom">Our <span class="text-theme-color-2 font-weight-700">Majors</span></h4>
              <div class="widget">
                <div class="services-list">
                  <ul class="list list-border">
                  @foreach($majoring as $major)
                    <li><a href="{{URL('/')}}/contentsubipages/<?php echo @$major->id."?".@$major->subi_slug;?>">{{$major->subi_name}}</a></li>
                  @endforeach
                  </ul>
                </div>
              </div>
              @endif

              <h4 class="widget-title line-bottom">{{trans('lang.news')}} -  <span class="text-theme-color-2">{{trans('lang.events')}}</span></h4>
                @if(App::getLocale() == 'kh')
                  
                  <div class="latest-posts">
                    @foreach($newslist as $listnews)
                      <article class="post media-post clearfix pb-0 mb-10">
                        <a class="post-thumb" href="{{URL('/')}}/viewdetailspages/{{$listnews->id}}?{{$listnews->slug}}"><img src="{{ URL('/')}}{{$listnews->file}}" alt="" width="75"></a>
                        <div class="post-right">
                          <h5 class="post-title mt-0"><a href="{{URL('/')}}/viewdetailspages/{{$listnews->id}}?{{$listnews->slug}}">{{$listnews->title_kh}}</a></h5>
                          <p>{{$listnews->excerpt_kh}}...</p>
                        </div>
                      </article>
                    @endforeach
                  </div>
                @else
                
                  <div class="latest-posts">
                    @foreach($newslist as $listnews)
                      <article class="post media-post clearfix pb-0 mb-10">
                        <a class="post-thumb" href="{{URL('/')}}/viewdetailspages/{{$listnews->id}}?{{$listnews->slug}}"><img src="{{ URL('/')}}{{$listnews->file}}" alt="" width="75"></a>
                        <div class="post-right">
                          <h5 class="post-title mt-0"><a href="{{URL('/')}}/viewdetailspages/{{$listnews->id}}?{{$listnews->slug}}">{{$listnews->title}}</a></h5>
                          <p>{{$listnews->excerpt_kh}}...</p>
                        </div>
                      </article>
                    @endforeach
                  </div>
                @endif
              
            </div>
          </div>
          <style type="text/css">
            .widget .services-list li:hover{
              background-color: #1F386B !important; color: #ffffff !important;
              border-right: 6px solid #E41937 !important;
            }
            .widget .services-list li>a:hover{
              color: #ffffff !important;
            }
          </style>