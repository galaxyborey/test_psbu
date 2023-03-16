<!DOCTYPE html>
<html  dir="ltr" lang="{{ app()->getLocale() }}" xml:lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PSBU: Log in to the site</title>
    <link rel="shortcut icon" href="{{ asset('themes/login/img/PSBU-02_small.png') }}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="moodle, PSBU Website: Log in to the site" />
  <link rel="stylesheet" type="text/css" href="{{ asset('themes/login/css/yui-moodlesimple-min.css') }}" />
  <script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script>
  <link rel="stylesheet" type="text/css" href="{{ asset('themes/login/css/all.css')}}" />

  <meta name="robots" content="noindex" />
  <link href='https://fonts.googleapis.com/css?family=Open Sans:300,400,500,600,700,300italic' rel='stylesheet'
        type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="{{ asset('themes/login/js/yui-moodlesimple-min.js')}}"></script>
    <!--
    <script type="text/javascript" src="{{ asset('themes/login/js/javascript-static.js')}}"></script>
    <script type="text/javascript">
        //<![CDATA[
        //document.body.className += ' jsenabled';
        //]]>
    </script>-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body  id="page-login-index" class="format-site  path-login chrome dir-ltr lang-en yui-skin-sam yui3-skin-sam  pagelayout-login course-1 context-1 notloggedin ">

    @yield('content')
    
    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}"></script>-->
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