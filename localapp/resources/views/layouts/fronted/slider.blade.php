<!-- Section: home -->
<section id="home">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>
              <?php
                $arrsl_count = 0; $arr_sl = array(); $arrsl_count = count($slideshow);
                if($arrsl_count > 0){ $sl_num = 0;
                  foreach($slideshow as $slkey => $slval){$sl_num++;
                    if($sl_num % 2 == 0){?>
                      <!-- SLIDE 1 -->
                      <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('/')}}<?php echo @$slval->image;?>" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('/')}}<?php echo @$slval->image;?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
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
                          style="z-index: 7; white-space: nowrap; font-weight:500;">
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
                          style="z-index: 7; white-space: nowrap; font-weight:500;">
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
                          style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
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
                          style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><?php if(!empty($slval->sl_slug)){?><!--<a class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20" href="#">View Details</a> --><?php }?>
                        </div>
                      </li>
                    <?php
                    }//end if $sl_num % 2 == 0
                    else{?>
                      <!-- SLIDE 3 -->
                      <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('/')}}<?php echo @$slval->image;?>" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('/')}}<?php echo @$slval->image;?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
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
                          style="z-index: 7; white-space: nowrap; font-weight:500;">
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
                          style="z-index: 7; white-space: nowrap; font-weight:600;"> 
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
                          style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
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
                    style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><?php if(!empty($slval->sl_slug)){?><!--<a class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20" href="#">Apply Now</a>--> <?php }?>
                        </div>
                      </li>
                    <?php
                    }//end else of if $sl_num % 2 == 0
                  }// foreach
                }//end if $arrsl_count > 0
                else{
              ?>
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
                    style="z-index: 7; white-space: nowrap; font-weight:500;">
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
                    style="z-index: 7; white-space: nowrap; font-weight:500;">Website is underconstruction 
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
                    style="z-index: 7; white-space: nowrap; font-weight:500;">
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

                <!-- SLIDE 1 -->
                <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('themes/webfront/images/bg/bg7.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="{{ asset('themes/webfront/images/bg/bg7.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                  <!-- LAYERS -->
    
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                    id="rs-2-layer-1"
    
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
                    style="z-index: 7; white-space: nowrap; font-weight:500;">
                  </div>
    
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                    id="rs-2-layer-2"
    
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
                    style="z-index: 7; white-space: nowrap; font-weight:500;">Website is underconstruction 
                  </div>
    
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme text-white" 
                    id="rs-2-layer-3"
    
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
                    id="rs-2-layer-4"
    
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
              <?php 
                }
              ?>
  
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