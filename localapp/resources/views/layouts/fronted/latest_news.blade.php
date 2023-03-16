    <section id="about">
      <div class="container pb-70">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 col-sm-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">

					@if(App::getLocale() == 'kh')
                    <div class="row">
                        <div class="col-md-12 col-sm-6">
                            
							<h4 class="text-uppercase title line-bottom mt-0 mb-30">ព័ត៌មាន <span class="text-theme-color-2"> ថ្មី </span> <a class="btn btn-default btn-theme-colored btn-flat btn-sm pull-right" href="{{ asset('articleslistviews?list-announcement-event-news')}}">ទាំងអស់</a></h4> 
                        </div>
                        
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="owl-carousel-3col owl-nav-top mb-sm-0" data-dots="true">
								<?php
									//create array to check have data from table as Khmer
									if(!empty($newslist)){
										foreach($newslist as $nkey => $nvalue){?>
								<div class="item">
									<article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">
										<div class="entry-header">
										<div class="post-thumb thumb"> <img src="{{ URL('/')}}<?php echo @$nvalue['file'];?>" alt="" class="img-responsive img-fullwidth"> </div>
										
										</div>
										<div class="entry-content border-1px p-20">
										<h4 class="entry-title mt-0 pt-0"><a href="{{URL('/')}}/viewdetailspages/<?php echo @$nvalue['id'].'?'.@$nvalue['slug'];?>"><?php echo @$nvalue['title_kh'];?></a></h4>
										<!--<span class="text-theme-colored mr-10 font-14"><i class="fa fa-calendar mr-5 text-theme-colored"></i> 06 August 2021</span>-->
										<p class="text-left mb-20 mt-5 font-13"><?php echo @$nvalue['excerpt_kh'];?></p>
										<a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{URL('/')}}/viewdetailspages/<?php echo @$nvalue['id'].'?'.@$nvalue['slug'];?>">ចូលអាន</a>
										<div class="clearfix"></div>
										</div>
									</article>
								</div>			
										<?php
											}//end foreach $newslist
										}
									?>
							</div>
						</div>
					</div>
					@else
					<div class="row">
                        <div class="col-md-12 col-sm-6">
							<h4 class="text-uppercase title line-bottom mt-0 mb-30">LATEST <span class="text-theme-color-2">News</span> <a class="btn btn-default btn-theme-colored btn-flat btn-sm pull-right" href="{{ asset('articleslistviews?list-announcement-event-news')}}">View All</a></h4>
                        </div>
                    
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="owl-carousel-3col owl-nav-top mb-sm-0" data-dots="true">							
								<?php
									//create array to check have data from table as english
									if(!empty($newslist)){
										foreach($newslist as $nkey => $nvalue){?>
								<div class="item">
									<article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">
										<div class="entry-header">
										<div class="post-thumb thumb"> <img src="{{ URL('/')}}<?php echo @$nvalue['file'];?>" alt="" class="img-responsive img-fullwidth"> </div>
										
										</div>
										<div class="entry-content border-1px p-20">
										<h4 class="entry-title mt-0 pt-0"><a href="{{URL('/')}}/viewdetailspages/<?php echo @$nvalue['id'].'?'.@$nvalue['slug'];?>"><?php echo @$nvalue['title'];?></a></h4>
										<!--<span class="text-theme-colored mr-10 font-14"><i class="fa fa-calendar mr-5 text-theme-colored"></i> 06 August 2021</span>-->
										<p class="text-left mb-20 mt-5 font-13"><?php echo @$nvalue['excerpt'];?></p>
										<a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{URL('/')}}/viewdetailspages/<?php echo @$nvalue['id'].'?'.@$nvalue['slug'];?>">Read more</a>
										<div class="clearfix"></div>
										</div>
									</article>
								</div>			
										<?php
											}//end foreach $newslist
										}
									?>
								
							</div>
						</div>
					</div>
					@endif
                </div>
				<!--
                <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
					<h3 class="text-uppercase mt-0">Social <span class="text-theme-color-2">  Media </span></h3>
					<div id="fb-root"></div>
					<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=305812356488826&autoLogAppEvents=1"></script>
					<div class="fb-page" data-href="https://web.facebook.com/psbuinformation/" data-tabs="timeline" data-width="" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
						<blockquote cite="https://www.facebook.com/kohrongservices" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/psbuinformation/">ពុទ្ធិកសាកលវិទ្យាល័យព្រះសីហមុនីរាជា</a></blockquote></div>
					
					<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
					<div class="fb-page" data-href="https://www.facebook.com/Preahsihamonyraja-Buddhist-University-598253527202448/" data-tabs="timeline" data-width="" data-height="200" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="true">
						<blockquote cite="https://www.facebook.com/Preahsihamonyraja-Buddhist-University-598253527202448/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Preahsihamonyraja-Buddhist-University-598253527202448/">Preahsihamonyraja Buddhist University</a></blockquote></div>
                
                
                </div>-->
            </div>
        </div>
      </div>
    </section>