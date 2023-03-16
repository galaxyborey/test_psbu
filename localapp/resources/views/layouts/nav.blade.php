<header class="main-header main-header-2 main-header-3">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('')}}" class="logo">
                    <img src="{{url('')}}{{\App\Http\Controllers\HomeController::getConfitData('company_logo')}}" alt="logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <?php $name_slug = !empty($name_slug)?$name_slug:'';?>
                         @if(!empty($name_slug))
                            <a href="{{url('')}}">{{trans('lang.home')}}</a>
                         @else
                            <a class="active" href="{{url('')}}">{{trans('lang.home')}}</a>
                         @endif        
                    </li>
                    @foreach(\App\Http\Controllers\Web\PageController::getDataCategory() as $key=>$value)                        
                        <li class="dropdown">
                        @if($value->slug== $name_slug)
                             <a class="active" href="{{url('cat')}}/{{$value->slug}}">{{$value->cat_name}}</a>
                        @else
                             <a href="{{url('cat')}}/{{$value->slug}}">{{$value->cat_name}}</a>
                        @endif                           
                        </li>                       
                    @endforeach                         
                </ul>
            </div>
        </nav>
    </div>
</header>