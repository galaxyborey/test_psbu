<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pint IT Group</title>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <meta property="og:image"  content="{{asset('storage/images/logo.png')}}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('facon.ico')}}">
    <style media="screen">
    @font-face {font-family: myKhHanuman;src: url('{{asset("kh-font/Hanuman.woff")}}');}
    @font-face {font-family: myKhFreehand;src: url('{{asset("kh-font/Kh-Freehand.woff")}}');}
    @font-face { font-family: myKhBattambang;src: url('{{asset("kh-font/KhmerOSbattambang.woff")}}');}
    @font-face { font-family: myKhMetal;src: url('{{asset("kh-font/Kh-Metal-Chrieng.woff")}}');}

    </style>
</head>
<body>
    <div id="app">
      @auth
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}" target="_blank" style="padding:1px;margin-left: 2px;">
                        <img width="50px" src="{{url('storage/images/logo.png')}}" alt="">
                    </a>
                    <a class="navbar-brand" href="{{ url('/') }}" target="_blank">
                        {{trans('lang.front')}}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else
                            <li><a href="{{ route('tags.index') }}">Etiquetas</a></li>
                            <li><a href="{{ route('categories.index') }}">Categorías</a></li>
                            <li><a href="{{ route('posts.index') }}">Entradas</a></li>
                            <li style="padding-left:10px;"><a href="javascript:;" onclick="getLanguage('kh')"><img width="20" src="{{asset('storage/images')}}/logo/kh.png" alt="Logo"> {{trans('lang.khmer')}}</a> </li>
                            <li><a href="javascript:;" onclick="getLanguage('en')"> <img width="20" src="{{asset('storage/images')}}/logo/en.jpg" alt="Logo"> {{trans('lang.english')}} </a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @if (session('info'))
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success">
                            {{ session('info') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if(count($errors))
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
        @yield('content')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
      (function($){
  			$.ajaxSetup({
  					headers: {
  							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  					}
  			});
  		})(jQuery);
      function getLanguage(val){
          var locale = val;
          var _token = $("input[name=_token]").val();
          $.ajax({
              url: "{{ asset('/language') }}",
              type: 'POST',
              data: {'locale': locale, '_token': _token},
              datatype: 'json',
              success: function(data){ },
              error: function(data){ },
              beforeSend: function(){ },
              complete: function(data){
                  window.location.reload(true);
              }
          });
      }
    </script>
    @yield('scripts')
</body>
</html>
