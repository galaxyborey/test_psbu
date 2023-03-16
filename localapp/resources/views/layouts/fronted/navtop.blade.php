
  <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="{{URL('/')}}">
              <img src="{{ asset('themes/webfront/images/psbu_web_72.png')}}" alt="PSBU LOGO" style="height: 89% !important;">
            </a>
            <ul class="menuzord-menu">
              <!--<li class="active"><a href="#home">{{ trans('template.home') }}</a></li>-->
            <?php
            // for general use
            $arr_menuid = array(); $arr_parentid_inSub = array(); $arr_submenuid= array();
            if(!empty($menu)){
              foreach (@$menu as $mnkey => $mnval) {   
                array_push($arr_menuid, $mnval->id);
              }
            }

            if(!empty($submenu)){
              foreach ($submenu as $skey => $sval) {   
                array_push($arr_parentid_inSub, $sval->category_id);
              }
            }

            if(!empty($subimenu)){
              foreach ($subimenu as $subikey => $subival) {   
                array_push($arr_submenuid, $subival->subcateid);
              }
            }
            ?>

            @if(App::getLocale() == 'kh' OR App::getLocale() == '')
            
              <?php // Khmer Language
              if(!empty($menu)){
                  foreach (@$menu as $mkey => $mvalue) {  $menuid = $mvalue->id; 

                    if(in_array($menuid, $arr_parentid_inSub)){
                  ?>

                    <li><a><?php echo @$mvalue->name_kh;?></a>

                    <?php
                    }// end if have sub menu
                    else{
                    ?>

                    <li><a href="{{URL('/')}}/contentpages/<?php echo @$mvalue->id."?".@$mvalue->slug;?>"><?php echo @$mvalue->name_kh;?></a>

                    <?php
                    }// end else for no submenu
                    if(!empty($submenu)){

                      if(in_array($menuid, $arr_parentid_inSub)){
                      ?>

                          <ul class="dropdown">

                        <?php
                            foreach ($submenu as $subkey => $subval) { $parentid = $subval->category_id; $subid = $subval->id;

                              if($menuid == $parentid){

                                if(in_array($subid, $arr_submenuid)){
                                    ?>

                                  <li><a><?php echo @$subval->name_kh;?></a>

                                  <?php 
                                }//end if have subi menu
                                else{?>
                                  <li><a href="{{URL('/')}}/content2pages/<?php echo @$subval->id."?".@$subval->slug;?>"><?php echo @$subval->name_kh;?></a>
                                <?php }// end else for no subi menu
                              if(!empty($subimenu)){

                                if(in_array($subid, $arr_submenuid)){?>

                                  <ul class="dropdown">

                                  <?php

                                  foreach ($subimenu as $subikey => $subival) { $subcatid = $subival->subcateid;

                                    if($subid == $subcatid){?>

                                      <li><a href="{{URL('/')}}/contentsubipages/<?php echo @$subival->id."?".@$subival->subi_slug;?>"><?php echo @$subival->subi_namekh;?></a></li>

                                    <?php

                                    }

                                  }// end foreach subi_menu
                                  ?>
                                  </ul>
                                <?php
                                }
                              }

                              ?>
                              </li>

                            <?php

                              }
                              
                            }// end foreach submenu
                        ?>

                          </ul><?php
                        }//end $arr_menuid in $arr_parentid_inSub
                    }//end if submenu 
                    ?>
                        
                      </li>

                    <?php
                    
                    
                  }//end foreach menu
              } 
              ?>

            @else
              <?php // English Language Menu
              if(!empty($menu)){
                  foreach (@$menu as $mkey => $mvalue) {  $menuid = $mvalue->id; 

                    if(in_array($menuid, $arr_parentid_inSub)){
                  ?>

                    <li><a><?php echo @$mvalue->name;?></a>

                    <?php
                    }// end if have sub menu
                    else{
                    ?>

                    <li><a href="{{URL('/')}}/contentpages/<?php echo @$mvalue->id."?".@$mvalue->slug;?>"><?php echo @$mvalue->name;?></a>

                    <?php
                    }// end else for no submenu
                    if(!empty($submenu)){

                      if(in_array($menuid, $arr_parentid_inSub)){
                      ?>

                          <ul class="dropdown">

                        <?php
                            foreach ($submenu as $subkey => $subval) { $parentid = $subval->category_id; $subid = $subval->id;

                              if($menuid == $parentid){

                                if(in_array($subid, $arr_submenuid)){
                                    ?>

                                  <li><a><?php echo @$subval->name;?></a>

                                  <?php 
                                }//end if have subi menu
                                else{?>
                                  <li><a href="{{URL('/')}}/content2pages/<?php echo @$subval->id."?".@$subval->slug;?>"><?php echo @$subval->name;?></a>
                                <?php }// end else for no subi menu
                              if(!empty($subimenu)){

                                if(in_array($subid, $arr_submenuid)){?>

                                  <ul class="dropdown">

                                  <?php

                                  foreach ($subimenu as $subikey => $subival) { $subcatid = $subival->subcateid;

                                    if($subid == $subcatid){?>

                                      <li><a href="{{URL('/')}}/contentsubipages/<?php echo @$subival->id."?".@$subival->subi_slug;?>"><?php echo @$subival->subi_name;?></a></li>

                                    <?php

                                    }

                                  }// end foreach subi_menu
                                  ?>
                                  </ul>
                                <?php
                                }
                              }

                              ?>
                              </li>

                            <?php

                              }
                              
                            }// end foreach submenu
                        ?>

                          </ul><?php
                        }//end $arr_menuid in $arr_parentid_inSub
                    }//end if submenu 
                    ?>
                        
                      </li>

                    <?php
                    
                    
                  }//end foreach menu
              }
              ?>
            @endif


              

              <li><a href="#"><i class="fa fa-language"></i> {{ trans('template.change_lang') }}</a>
                <ul class="dropdown">
                  <li><a onclick="getLanguage('kh')"><i class="flag flag-kh"></i> {{ trans('lang.khmer') }} </a></li>
                  <li><a onclick="getLanguage('en')"><i class="flag flag-gb"></i> {{ trans('template.english') }} </a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>   