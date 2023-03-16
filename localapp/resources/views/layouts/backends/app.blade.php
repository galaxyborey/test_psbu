<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PSBU | Website Content</title>
    <!-- Styles -->
	<style type="text/css">
		@font-face {
		   font-family: myKhHanuman;
		   src: url('{{ asset('themes/backend/metronic3/assets/kh-font/Hanuman.woff') }}');
		}
		@font-face {
		   font-family: myKhFreehand;
		   src: url('{{ asset('themes/backend/metronic3/assets/kh-font/Kh-Freehand.woff') }}');
		}
		@font-face {
		   font-family: myKhBattambang;
		   src: url('{{ asset('themes/backend/metronic3/assets/kh-font/KhmerOSbattambang.woff') }}');
		}
		@font-face {
		   font-family: myKhMetal;
		   src: url('{{ asset('themes/backend/metronic3/assets/kh-font/Kh-Metal-Chrieng.woff') }}');
		}
		@font-face {
		   font-family: KhmerOSDangrek;
		   src: url('{{ asset('themes/backend/metronic3/assets/kh-font/KhmerOSDangrek.ttf') }}');
		}
		@font-face {
		   font-family: FranklinGothicDemiRegular;
		   src: url('{{ asset('themes/backend/metronic3/assets/kh-font/FranklinGothicDemiRegular.ttf') }}');
		}
	</style>
	
	@if(App::getLocale() == 'en')
		<style type="text/css">
			body,h1,h2,h3,h4,h5,h6,a,p{
				font-family:FranklinGothicDemiRegular!important;
			}
		</style>
	@else
		<style type="text/css">
			body,h1,h2,h3,h4,h5,h6,a,p{
				font-family:"Open Sans",sans-serif,KhmerOSDangrek!important;
			}
		</style>
	@endif
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet') }}" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/clockface/css/clockface.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/plugins/icheck/skins/all.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/css/components-rounded.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('themes/backend/metronic3/assets/jquery-confirm/css/jquery-confirm.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('themes/backend/metronic3/assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
	<link href="{{ asset('themes/backend/metronic3/assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('themes/backend/metronic3/assets/flags/flags.css') }}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('themes/backend/metronic3/assets/global/plugins/fancybox/source/jquery.fancybox.css') }}" type="text/css" media="screen" />
	<link href="{{url('')}}/themes/backend/metronic3/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
	<!-- Favicon and Touch Icons -->
	<link href="{{ asset('themes/login/img/PSBU-02_small.png') }}" rel="shortcut icon" type="image/png"> 
	@yield('stylesheet')
	</head>
	<!-- END HEAD -->
</head>
<body class="<?php if(Session::get('sidebar')){ echo "page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-closed"; }else{ echo "page-header-fixed page-sidebar-closed-hide-logo page-content-white";} ?>">
    <!-- BEGIN HEADER -->
    @include('layouts.backends.header')
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
		<div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        @include('layouts.backends.navigator')
		</div>
    <!-- END CONTAINER -->
	<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<!-- BEGIN CONTENT BODY -->
			<div class="page-content">
				@yield('content')
				
			</div>
			<!-- END CONTENT BODY -->
		</div>
		<!-- END CONTENT -->
    <!-- BEGIN FOOTER -->
	@include('layouts.backends.footer')
    <!-- END FOOTER -->
    
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/scripts/app.js') }}" type="text/javascript"></script>

	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/jquery-repeater/jquery.repeater.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/pages/scripts/form-repeater.min.js') }}" type="text/javascript"></script> 

	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/amcharts/amcharts/themes/patterns.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/amcharts/amcharts/themes/chalk.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/pages/scripts/table-datatables-responsive.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/jquery-confirm/js/jquery-confirm.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/pages/scripts/components-select2.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/global/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('themes/backend/metronic3/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
	<script src="{{ asset('themes/backend/metronic3/assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
	<script src="{{url('')}}/js/handlebars.js" type="text/javascript" language="javascript"></script>
	<script src="{{url('')}}/js/date.js" type="text/javascript" language="javascript"></script>
	<script src="{{url('')}}/themes/backend/metronic3/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
	<script src="{{url('')}}/themes/backend/metronic3/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
	<script src="{{url('')}}/themes/backend/metronic3/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
	 <script src="{{url('')}}/themes/backend/metronic3/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
	
	 <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	 <script src="{{url('ckeditor/ckeditor.js')}}"></script>

	<script type="text/javascript">
		window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
		
		var path="{{ url('') }}/themes/backend/metronic3/assets/";
		App.setAssetsPath(path);
		App.setBaseUrl("{{ url('') }}");
		
		function getLanguage(val){
			var locale = val;
			var _token = $("input[name=_token]").val();
			$.ajax({
				url: "{{ asset('/language') }}",
				type: 'POST',
				data: {'locale': locale, '_token': _token},
				datatype: 'json',
				success: function(data){

				},
				error: function(data){

				},
				beforeSend: function(){

				},
				complete: function(data){
					window.location.reload(true);
				}
			});
		}
		
		function setSidebar(){
			var _token = $("input[name=_token]").val();
			$.ajax({
				url: "{{ url('/sidebar') }}",
				type: 'POST',
				data: {'_token': _token},
				datatype: 'json',
				success: function(data){
					console.log(data);
				}
			});
		}
		
		function formatDate(date) {
		  var monthNames = [
			"មករា", "កុម្ភះ", "មីនា",
			"មេសា", "ឧសភា", "មិថុនា", "កក្កដា",
			"សីហា", "កញ្ញា", "តុលា",
			"វិច្ឆិកា", "ធ្នូ"
		  ];

		  var day = date.getDate();
		  var monthIndex = date.getMonth();
		  var year = date.getFullYear();

		  return day + ' ' + monthNames[monthIndex] + ' ' + year;
		}
		
		function formatCurrency(total) {
			var neg = false;
			if(total < 0) {
				neg = true;
				total = Math.abs(total);
			}
			return (neg ? "-$" : '$') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();
		}
		
		function formatQty(total) {
			var neg = false;
			if(total < 0) {
				neg = true;
				total = Math.abs(total);
			}
			return (neg ? "-" : '') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();
		}
		
		var placeholder = "Please Select";
		$.fn.select2.defaults.set("theme", "classic");
		$(".select2").select2({
			allowClear: true,
			placeholder: placeholder
		});
		$('.select2-multiple').select2({allowClear: true,placeholder: placeholder});
		$('.datepicker').datepicker({ 
			format: "dd-M-yyyy",
			autoclose: true,
			pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left"),
			showMeridian: true,
			todayHighlight: true
		});
	</script>
	@yield('javascript')
    <!-- ------------------------------------------------------------- -->
</body>
</html>
