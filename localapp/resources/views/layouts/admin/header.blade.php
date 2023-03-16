<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="{{url('')}}/{{ Auth::user()->image }}" alt="">
            @if(Auth::user())
            {{ Auth::user()->name }}
            @endif
            <i class="fa fa-chevron-down font-10"></i>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="{{url('users')}}/{{ Auth::user()->id }}/edit"> <i class="fa fa-user"></i> {{trans('lang.profile')}}</a></li>
            <li>
              <a href="{{url('getconfig')}}">
                <span class="badge bg-red pull-right"></span>
                <span> <i class="fa fa-gear"></i> {{trans('lang.setting')}}</span>
              </a>
            </li>
            <li>
              <a href="javascript:;" onclick="getLanguage('kh')">
                <img width="20" src="{{asset('kh.png')}}" alt="Logo"> {{trans('lang.khmer')}}
              </a>
            </li>
            <li>
              <a href="javascript:;" onclick="getLanguage('en')">
                <img width="20" src="{{asset('en.jpg')}}" alt="Logo"> {{trans('lang.english')}}
              </a>
            </li>
            <li>
              <a href="{{url('newadminsDashboard')}}">
                <span class="badge bg-red pull-right"></span>
                <span> <i class="fa fa-gear"></i> Switch to New Theme</span>
              </a>
            </li>
            <li>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out pull-right"></i> {{trans('lang.logout')}}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
