<footer id="footer" class="footer bg-black-222" >
    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored">
      <div class="container pt-10 pb-10 pb-sm-0 pt-sm-0">
        <div class="row">
          <div class="col-md-12">
            
            <div class="owl-carousel-6col transparent text-center owl-nav-top">
              @foreach($partners as $partner)
              <div class="item"> <a href="http://{{$partner->links}}" target="_Blank"><img src="{{URL('/')}}{{$partner->image}}" alt="" style="max-width: 90px; "></a></div>
              @endforeach
            </div>

          </div>
        </div>
      </div>
    </section> 
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h4 class="widget-title line-bottom">{{trans('lang.about')}}</h4>
            <ul class="list-border">
            <?php $about_count = 0; $arr_about = array(); $about_count = count($about);
                if($about_count > 0){?>
                  @if(App::getLocale() == 'kh')
                    <?php
                      foreach($about as $abkey => $abval){?>
                        <li><a href="{{URL('/')}}/content2pages/<?php echo @$abval->id."?".@$abval->slug;?>"><i class="fa fa-angle-double-right"></i> <?php echo $abval->name_kh;?></a></li>
                        <?php
                      }
                    ?>
                  @else

                  <?php
                      foreach($about as $abkey => $abval){?>
                        <li><a href="{{URL('/')}}/content2pages/<?php echo @$abval->id."?".@$abval->slug;?>"><i class="fa fa-angle-double-right"></i> <?php echo $abval->name;?></a></li>
                        <?php
                      }
                    ?>

                  @endif
              
                  <?php
                }else{?>
                  <li><a href="#">Message of Rector</a></li>
                  <li><a href="#">Why PSBU?</a></li>
                  <li><a href="#">Structure of PSBU</a></li>
                  <li><a href="#">Mission Vision and Goal</a></li>
                  <li><a href="#">Government Recognition</a></li>
                  <li><a href="#">Library and Facility</a></li>
                  <li><a href="#">Finance Office</a></li>
                  <li><a href="#">Graduate Studies</a></li>
                  <li><a href="#">Registrar's Office</a></li>
                <?php 
                }
              ?>
              
            </ul>
            
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h4 class="widget-title line-bottom">{{trans('lang.office')}}</h4>
            <!--<ul class="list angle-double-right list-border">-->
            <ul class="list-border">
            <?php $offices_count = 0; $arr_offices = array(); $offices_count = count($offices);
                if($offices_count > 0){?>
                  @if(App::getLocale() == 'kh')
                    <?php
                      foreach($offices as $abkey => $offval){?>
                        <li><a href="{{URL('/')}}/content2pages/<?php echo @$offval->id."?".@$offval->slug;?>"><i class="fa fa-angle-double-right"></i> <?php echo $offval->name_kh;?></a></li>
                        <?php
                      }
                    ?>
                  @else

                  <?php
                      foreach($offices as $abkey => $offval){?>
                        <li><a href="{{URL('/')}}/content2pages/<?php echo @$abval->id."?".@$offval->slug;?>"><i class="fa fa-angle-double-right"></i> <?php echo $offval->name;?></a></li>
                        <?php
                      }
                    ?>

                  @endif
              
                  <?php
                }else{?>
              <li><a href="#">Department of Foundation Year</a></li>
              <li><a href="#">Department of Finance and Economics</a></li>
              <li><a href="#">Department of Management & Hotel-Tourism</a></li>
              <li><a href="#">Department of Architecture and Design</a></li>
              <li><a href="#">Department of Law</a></li>
              <li><a href="#">Dept. of Information Technology</a></li>
              <li><a href="#">Department of English Literatures</a></li>
              <li><a href="#">Academic and Student Affairs Office</a></li>
              <li><a href="#">Administrative and Staff Office</a></li>
                <?php 
                }
              ?>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h4 class="widget-title line-bottom">{{trans('lang.contact_us')}}</h4>
            <ul class="list-border"  style="color:#ffffff !important;">
              @if(App::getLocale() == 'kh')
              <li><i class="fa fa-map-marker"></i>
                                បរិវេណវត្តស្វាយពពែ សង្កាត់ទន្លេបាសាក់ ខណ្ឌចំការមន រាជធានីភ្នំពេញ កម្ពុជា</li>
              @else
              <li><i class="fa fa-map-marker"></i>
                                Address: Svayporpe pagoda in front of Russia Embassy, Sangkat Tonle basac, Khan Chamkarmorn, Phnom Penh, Cambodia</li>
              @endif

              <li><i class="fa fa-envelope"></i> E-mail: <a href="#" style="color: #fff;">info@psbu.edu.kh</a></li>
              <li><i class="fa fa-phone"></i> Contact: <a href="#" style="color: #fff;"> +855 16 43 43 25 / +855 86 402 402 </a></li>
            </ul>
            <ul class="styled-icons icon-dark mt-20">
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="https://www.facebook.com/RectorPSBU" target="_Blank" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="https://www.facebook.com/psbuinformation/" target="_Blank" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="https://www.facebook.com/psbucourse/" target="_Blank" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="https://www.youtube.com/channel/UC7HqDPiIDuGQm7r7-xLodkQ" data-bg-color="#C22E2A" target="_blank"><i class="fa fa-youtube"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="https://www.instagram.com/psb.university/" target="_Blank" data-bg-color="#05A7E3"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <ul>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s"><a href="https://t.me/psbuacademicstudentaffair" target="_Blank"><img class="post-thumb mb-sm-0" src="{{ asset('photos/shares/web_photos/telegram_group_nobg.png')}}" alt="Telegram Group To Register" title="Join Group To Register" style="max-width: 250px;"></a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy; PSB University 2007 - <?php echo date('Y'); ?> Developed by: <a target="_blank" href="http://www.galaxycloud.asia"> PING IT GROUP</a></p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>