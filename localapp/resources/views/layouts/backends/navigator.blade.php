<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="<?php if(Session::get('sidebar')){ echo "page-sidebar-menu  page-header-fixed page-sidebar-menu-closed"; }else{ echo "page-sidebar-menu  page-header-fixed";} ?>" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                    <span></span>
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="nav-item start">
                <a href="{{ url('/') }}" class="nav-link" target="_blank">
                    <i class="icon-globe"></i>
                    <span class="title">Go to {{ trans('template.website') }}</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item start <?php if(Request::is('/adminsite')){echo "active open";} ?>">
                <a href="{{ url('/adminsite') }}" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">{{ trans('template.dashboard') }}</span>
                    <span class="selected"></span>
                </a>
            </li>

			<li class="nav-item start <?php if(Request::is('adminsite/catemenu/*')){echo "active open";} ?>">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">{{ trans('template.category')}} {{trans('lang.content')}}</span>
                    <span class="arrow <?php if(Request::is('adminsite/catemenu/*')){echo "open";} ?>"></span>
                </a>
                <ul class="sub-menu">
                <li class="nav-item <?php if(Request::is('adminsite/catemenu/catelist')){echo "active open";} ?>">
                        <a href="{{url('adminsite/catemenu/catelist')}}" class="nav-link ">
                        <i class="fa fa-list"></i>
                            <span class="title">{{ trans('lang.list_category') }}</span>
                        </a>
                    </li>
                    <li class="nav-item <?php if(Request::is('adminsite/catemenu/create')){echo "active open";} ?>">
                        <a href="{{url('adminsite/catemenu/create')}}" class="nav-link ">
                        <i class="fa fa-plus-circle"></i>
                            <span class="title">{{ trans('lang.add_category') }}</span>
                        </a>
                    </li>

                    <li class="nav-item <?php if(Request::is('adminsite/catemenu/subcatemenu/catelists')){echo "active open";} ?>">
                        <a href="{{url('adminsite/catemenu/subcatemenu/catelists')}}" class="nav-link ">
                        <i class="fa fa-list"></i>
                            <span class="title">{{ trans('lang.list_category') }} 2</span>
                        </a>
                    </li>
                    <li class="nav-item <?php if(Request::is('adminsite/catemenu/subcatemenu/create')){echo "active open";} ?>">
                        <a href="{{url('adminsite/catemenu/subcatemenu/create')}}" class="nav-link ">
                        <i class="fa fa-plus-circle"></i>
                            <span class="title">{{ trans('lang.add_category') }} 2</span>
                        </a>
                    </li>

                    <li class="nav-item <?php if(Request::is('adminsite/catemenu/subicatemenu/catelists')){echo "active open";} ?>">
                        <a href="{{url('adminsite/catemenu/subicatemenu/catelists')}}" class="nav-link ">
                        <i class="fa fa-list"></i>
                            <span class="title">{{ trans('lang.list_category') }} 3</span>
                        </a>
                    </li>
                    <li class="nav-item <?php if(Request::is('adminsite/catemenu/subicatemenu/create')){echo "active open";} ?>">
                        <a href="{{url('adminsite/catemenu/subicatemenu/create')}}" class="nav-link ">
                        <i class="fa fa-plus-circle"></i>
                            <span class="title">{{ trans('lang.add_category') }} 3</span>
                        </a>
                    </li>
                    
                    
                </ul>
            </li>
            <li class="nav-item start <?php if(Request::is('adminsite/articles/*')){echo "active open";} ?>">
                <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-list-alt"></i>
                    <span class="title">{{ trans('template.article') }}</span>
                    <span class="arrow <?php if(Request::is('adminsite/articles/*')){echo "open";} ?>"></span>
                </a>
                <ul class="sub-menu">
                <li class="nav-item <?php if(Request::is('adminsite/articles/articleslist')){echo "active open";} ?>">
                        <a href="{{url('adminsite/articles/articleslist')}}" class="nav-link ">
                        <i class="fa fa-list"></i>
                            <span class="title">{{ trans('lang.article') }}</span>
                        </a>
                    </li>
                    <li class="nav-item <?php if(Request::is('adminsite/articles/create')){echo "active open";} ?>">
                        <a href="{{url('adminsite/articles/create')}}" class="nav-link ">
                        <i class="fa fa-plus-circle"></i>
                            <span class="title">{{ trans('lang.article') }}</span>
                        </a>
                    </li>
                    
                </ul>
            </li>
            <li class="nav-item start <?php if(Request::is('adminsite/othercate/*')){echo "active open";} ?>">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-book"></i>
                    <span class="title">{{ trans('lang.content') }} ({{trans('lang.other')}})</span>
                    <span class="arrow <?php if(Request::is('adminsite/othercate/*')){echo "open";} ?>"></span>
                </a>
                <ul class="sub-menu">
                <li class="nav-item <?php if(Request::is('adminsite/othercate/othercateslist')){echo "active open";} ?>">
                        <a href="{{url('adminsite/othercate/othercateslist')}}" class="nav-link ">
                        <i class="fa fa-list"></i>
                            <span class="title">{{ trans('lang.content') }} ({{trans('lang.other')}})</span>
                        </a>
                    </li>
                    <li class="nav-item <?php if(Request::is('adminsite/othercate/create')){echo "active open";} ?>">
                        <a href="{{url('adminsite/othercate/create')}}" class="nav-link ">
                        <i class="fa fa-plus-circle"></i>
                            <span class="title">{{ trans('lang.content') }} ({{trans('lang.other')}})</span>
                        </a>
                    </li>
                    
                </ul>
            </li>

			<li class="nav-item start <?php if(Request::is('adminsite/system/*')){echo "active open";} ?>">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">{{ trans('template.system_config') }}</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  <?php if(Request::is('adminsite/system/slider/*')){echo "active open";} ?>">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-notebook"></i>
                            <span class="title">{{ trans('template.slider') }}</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="{{url('/adminsite/system/slider/sliderlist')}}"> <i class="fa fa-th-list"></i> {{ trans('template.slider') }} </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{url('/adminsite/system/slider/create')}}" > <i class="fa fa-plus-circle"></i> {{ trans('template.add_new') }} </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  <?php if(Request::is('adminsite/system/peoples/*')){echo "active open";} ?>">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-user"></i>
                            <span class="title">{{ trans('template.member') }}</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="{{url('/adminsite/system/peoples/peoplelist')}}"> <i class="fa fa-th-list"></i> {{ trans('template.member') }} </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{url('/adminsite/system/peoples/create')}}" > <i class="fa fa-plus-circle"></i> {{ trans('template.add_new') }} </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  <?php if(Request::is('adminsite/system/partners/*')){echo "active open";} ?>">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-users"></i>
                            <span class="title">{{ trans('template.our_partners') }}</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="{{url('/adminsite/system/partners/partnerslist')}}"> <i class="fa fa-th-list"></i> {{ trans('template.our_partners') }} </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{url('/adminsite/system/partners/create')}}" > <i class="fa fa-plus-circle"></i> {{ trans('template.add_new') }} </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            
			<li class="nav-item start ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">{{ trans('template.user_control') }}</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ url('/user/index') }}" class="nav-link ">
							<i class="icon-user"></i>
                            <span class="title">{{ trans('template.user_info') }}</span>
                        </a>
                    </li>
					<li class="nav-item  ">
                        <a href="{{url('group/index')}}" class="nav-link ">
							<i class="icon-users"></i>
                            <span class="title">{{ trans('template.user_group') }}</span>
                        </a>
                    </li>
					<li class="nav-item  ">
                        <a href="ui_colors.html" class="nav-link ">
							<i class="icon-shield"></i>
                            <span class="title">{{ trans('template.permission') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
         </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
