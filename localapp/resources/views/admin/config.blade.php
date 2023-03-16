@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.config')}}</h2>
              <div class="nav navbar-right panel_toolbox text-right">
                <a class="collapse-link font-15"><i class="fa fa-chevron-up"></i></a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br>
              <form method="GET" action="{{url('insertConfig')}}">
              	<div class="form-group col-md-6 col-sm-6 col-xs-12">
              		<label> {{trans('lang.logo')}}</label>
              		<div class="input-group">
	                   <span class="input-group-btn">
	                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
	                       <i class="fa fa-picture-o"></i> Choose
	                     </a>
	                   </span>
	                   <input id="thumbnail" class="form-control" type="text" value="{{$company_logo}}" name="company_logo">
	                </div>
	                <img id="holder" src="{{url('')}}/{{$company_logo}}" style="margin-top:15px;max-height:100px;">
              	</div>
              	<div style="clear: both;"></div>
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    {{ Form::label('address', trans('lang.address'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                    {{ Form::text('address', $address, ['class' => 'form-control', 'id' => 'time_match']) }}
                </div>
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    {{ Form::label('email', trans('lang.email'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                    {{ Form::text('email', $email, ['class' => 'form-control', 'id' => 'email','placeholder'=>' 0 - 0 ']) }}
                </div>
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    {{ Form::label('phone', trans('lang.phone'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                    {{ Form::text('phone', $phone, ['class' => 'form-control', 'id' => 'phone','placeholder'=>' 0 - 0 ']) }}
                </div>
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label> Footer Detail </label>
                  <textarea name="f_des" class="form-control"> {{$f_des}} </textarea>
                </div>
              	<div class="form-group col-md-6 col-sm-6 col-xs-12">
              		<label> {{trans('lang.position')}}</label>
              		<textarea name="position" class="form-control"> {{$position}} </textarea>
              	</div>
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                  <label> Catalog </label>
                  <textarea name="catalog" class="form-control"> {{$catalog}} </textarea>
                </div>
                <div style="clear: both;"></div>
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{trans('lang.save')}} </button>
                </div>
            </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
var options = "{{ url('') }}";
var type = "image";
$('#lfm').click(function(){
  type = type || 'file';
    var route_prefix = (options && options.prefix) ? options.prefix : "{{url('laravel-filemanager?type=Images&CKEditor=my-editor')}}";
    localStorage.setItem('target_input', $(this).data('input'));
    localStorage.setItem('target_preview', $(this).data('preview'));
    window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
    window.SetUrl = function (url, file_path) {
        var target_input = $('#' + localStorage.getItem('target_input'));
        target_input.val(file_path).trigger('change');
        var target_preview = $('#' + localStorage.getItem('target_preview'));
        target_preview.attr('src', url).trigger('change');
    };
    return false;
});
    $(document).ready(function(){
        $("#title, #slug").stringToSlug({
            callback: function(text){
                $('#slug').val(text);
            }
        });
    });
</script>
@endsection

