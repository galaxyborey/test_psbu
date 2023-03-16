<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{url('home')}}" class="site_title"> <i class="fa fa-home"> </i> <span> WU </span></a>
    </div>
    <div class="clearfix"></div>
    <div class="profile clearfix">
      
      <div class="profile_info">
        <span>{{trans('lang.welcome')}} </span>
        <a href="{{url('')}}" target="_blank"> {{trans('lang.front_page')}}</a>
      </div>
    </div>
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li class=""><a href="{{url('home')}}"><i class="fa fa-home"></i> Home </a> </li>
          <li><a><i class="fa fa-table"></i> {{trans('lang.category')}} <i class="fa fa-chevron-down font-10 float-right"></i> </a>
            <ul class="nav child_menu">
              <li><a  href="{{ route('categories.index') }}"> <i class="fa fa-list-ul"></i> {{trans('lang.list_category')}} </a></li>
              <li><a href="{{ route('categories.create') }}"> <i class="fa fa-plus-circle"></i> {{trans('lang.add_category')}} </a></li>
<!--               <li><a  href="{{ route('subcategories.index') }}"> <i class="fa fa-list-ul"></i> {{trans('lang.list_sub_category')}} </a></li>
              <li><a href="{{ route('subcategories.create') }}"> <i class="fa fa-plus-circle"></i> {{trans('lang.add_sub_category')}} </a></li> -->
            </ul>
          </li>
         <!--  <li><a><i class="fa fa-desktop"></i> {{trans('lang.product')}} <i class="fa fa-chevron-down font-10 float-right"></i> </a>
            <ul class="nav child_menu">
              <li><a  href="{{ route('productcats.index') }}"> <i class="fa fa-list-ul"></i> {{trans('lang.list_category')}} </a></li>
              <li><a  href="{{ route('brands.index') }}"> <i class="fa fa-list-ul"></i> {{trans('lang.list_brand')}} </a></li>
              <li><a  href="{{ route('measures.index') }}"> <i class="fa fa-list-ul"></i> {{trans('lang.list_measure')}} </a></li>
              <li><a  href="{{ route('products.index') }}"> <i class="fa fa-list-ul"></i> {{trans('lang.list_product')}} </a></li>
              <li><a href="{{ route('products.create') }}"> <i class="fa fa-plus-circle"></i> {{trans('lang.add_product')}} </a></li>
            </ul>
          </li> -->
          <li><a><i class="fa fa-table"></i> {{trans('lang.article')}} <i class="fa fa-chevron-down font-10 float-right"></i> </a>
            <ul class="nav child_menu">
              <li><a  href="{{ route('admin_news.index') }}"> <i class="fa fa-list-ul"></i> {{trans('lang.list_news')}} </a></li>
              <li><a href="{{ route('admin_news.create') }}"> <i class="fa fa-plus-circle"></i> {{trans('lang.add_news')}} </a></li>
            </ul>
          </li>
          <!-- <li><a><i class="fa fa-clone"></i> {{trans('lang.team')}} <i class="fa fa-chevron-down font-10 float-right"></i> </a>
            <ul class="nav child_menu">
              <li><a  href="{{ route('teams.index') }}"> <i class="fa fa-list-ul"></i> {{trans('lang.list_team')}} </a></li>
              <li><a href="{{ route('teams.create') }}"> <i class="fa fa-plus-circle"></i> {{trans('lang.add_team')}} </a></li>
              <li><a  href="{{ route('players.index') }}"> <i class="fa fa-list-ul"></i> {{trans('lang.list_player')}} </a></li>
              <li><a href="{{ route('players.create') }}"> <i class="fa fa-plus-circle"></i> {{trans('lang.add_player')}} </a></li>
            </ul>
          </li> -->
          <li><a href="{{url('gallery')}}"><i class="fa fa-clone"></i> {{trans('lang.gallery')}}  </a> </li>
          <li><a href="{{url('message')}}"><i class="fa fa-clone"></i> Message Contact Us  </a> </li>
          <li><a><i class="fa fa-gear"></i> {{trans('lang.setting')}} <i class="fa fa-chevron-down font-10 float-right"></i> </a>
            <ul class="nav child_menu">
              <li><a  href="{{ url('getconfig') }}"> <i class="fa fa-list-ul"></i> {{trans('lang.config')}} </a></li>
              <li><a href="{{ route('users.index') }}"> <i class="fa fa-user"></i> {{trans('lang.user')}} </a></li>
              <li><a href="{{ route('positions.index') }}"> <i class="fa fa-th"></i> {{trans('lang.position')}} </a></li>
              <li><a href="{{ route('sliders.index') }}"> <i class="fa fa-th"></i> {{trans('lang.slide')}} </a></li>
              <li><a href="{{ route('sponsors.index') }}"> <i class="fa fa-th"></i> {{trans('lang.sponsor')}} </a></li>
              <!-- <li><a href="{{ route('champions.index') }}"> <i class="fa fa-th"></i> {{trans('lang.champion')}} </a></li> -->
              <li><a href="{{ route('matchgallerys.index') }}"> <i class="fa fa-th"></i> {{trans('lang.match_gallery')}} </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
