<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Pint IT Group  </title>
    <link href="{{url('template')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('template')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('template')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="{{url('template')}}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="{{url('template')}}/build/css/custom.min.css" rel="stylesheet">
    <!-- <link href="{{url('css/datatables.min.css')}}" rel="stylesheet"> -->
    <link href="{{url('template')}}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{url('template')}}/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{url('template')}}/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('facon.ico')}}">
    <link href="{{url('template')}}/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{url('css/datepicker.css')}}" rel="stylesheet">
    <link href="{{url('template/css/style.css')}}" rel="stylesheet">
    <link href="{{url('css/bootstrap-select.css')}}" rel="stylesheet">
    <style media="screen">
      @font-face {font-family: myKhHanuman;src: url('{{asset("kh-font/Hanuman.woff")}}');}
      @font-face {font-family: myKhFreehand;src: url('{{asset("kh-font/Kh-Freehand.woff")}}');}
      @font-face { font-family: myKhBattambang;src: url('{{asset("kh-font/KhmerOSbattambang.woff")}}');}
      @font-face { font-family: myKhMetal;src: url('{{asset("kh-font/Kh-Metal-Chrieng.woff")}}');}
      body,h1,h2,h3,h4,h5,h6,a,span{ font-family: myKhBattambang !important;}
    </style>
  </head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div id="app">
        @include('layouts.admin.nav')
        @include('layouts.admin.header')
        @yield('content')
        @include('layouts.admin.footer')
      </div>
    </div>
  </div>
  <script src="{{url('template')}}/vendors/jquery/dist/jquery.min.js"></script>
  <script src="{{url('template')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="{{url('template')}}/vendors/fastclick/lib/fastclick.js"></script>
  <script src="{{url('template')}}/vendors/nprogress/nprogress.js"></script>
  <script src="{{url('template')}}/vendors/Chart.js/dist/Chart.min.js"></script>
  <script src="{{url('template')}}/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <script src="{{url('template')}}/vendors/Flot/jquery.flot.js"></script>
  <script src="{{url('template')}}/vendors/Flot/jquery.flot.pie.js"></script>
  <script src="{{url('template')}}/vendors/Flot/jquery.flot.time.js"></script>
  <script src="{{url('template')}}/vendors/Flot/jquery.flot.stack.js"></script>
  <script src="{{url('template')}}/vendors/Flot/jquery.flot.resize.js"></script>
  <script src="{{url('template')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="{{url('template')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="{{url('template')}}/vendors/flot.curvedlines/curvedLines.js"></script>
  <script src="{{url('template')}}/vendors/DateJS/build/date.js"></script>
  <script src="{{url('template')}}/vendors/moment/min/moment.min.js"></script>
  <script src="{{url('template')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="{{url('template')}}/build/js/custom.min.js"></script>
  <script src="{{url('js/datepicker.js')}}"></script>
  <script src="{{url('js/bootstrap-select.js')}}"></script>
  <script src="{{url('template')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="{{url('template')}}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="{{url('template')}}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="{{url('template')}}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="{{url('template')}}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{url('template')}}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="{{url('template')}}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="{{url('template/js/style.js')}}"></script>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="_url" value="{{ url('') }}">

  <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>

  <script src="{{url('ckeditor/ckeditor.js')}}"></script>
  
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
    $('.datesport').datepicker({
        format: "dd/mm/yyyy",
        calendarWeeks: true,
        autoclose: true,
        todayHighlight: true,
        toggleActive: true,
        language:'{{app()->getLocale()}}',
    });
    function funcActive(val,name,tab){
      var val = val;
      var name = name;
      var tab = tab;
      var _token = $("input[name=_token]").val();
      $.ajax({
        url: "{{ asset('/getActiveData') }}",
        type: 'POST',
        data: {'id': val,'name':name,'tab':tab,'_token': _token},
        datatype: 'json',
        success: function(data){ },
        error: function(data){ },
        beforeSend: function(){ },
        complete: function(data){
          window.location.reload(true);
        }
      });
    }
    function FuncDelete(e){
      $(e).parent().submit();
    };
  </script>
  @yield('scripts')
</body>
</html>
