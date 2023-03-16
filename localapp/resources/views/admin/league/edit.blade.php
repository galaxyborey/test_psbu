@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.edit_league')}}</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br>
                  {!! Form::open(['route' => ['leagues.update', $league->id], 'method' => 'PUT']) !!}

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('league_name_kh', trans('lang.league_name_kh'),['class' => 'col-md-6col-sm-6 col-xs-12']) }}
                        {{ Form::text('league_name_kh', $league->name_kh, ['class' => 'form-control', 'id' => 'league_name_kh']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('league_name', trans('lang.league_name'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        {{ Form::text('league_name', $league->name_en, ['class' => 'form-control', 'id' => 'league_name']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('season ', trans('lang.season'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                        {{ Form::text('season', $league->season, ['class' => 'form-control', 'id' => 'season']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('ordering', trans('lang.ordering'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                        {{ Form::text('ordering', $league->ordering, ['class' => 'form-control', 'id' => 'ordering']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('start_date', trans('lang.start_date'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                        {{ Form::text('start_date', $league->start_date, ['class' => 'form-control datesport', 'id' => 'start_date']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('end_date', trans('lang.end_date'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                        {{ Form::text('end_date', $league->end_date, ['class' => 'form-control datesport', 'id' => 'end_date']) }}
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('slug', trans('lang.league_url')) }}
                        {{ Form::text('slug', $league->slug, ['class' => 'form-control', 'id' => 'slug']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('end_date', trans('lang.active'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                        <br>
                        <br>
                        @if($league->active==1)
                          <input type="checkbox" checked value="1" name="active">
                        @else
                          <input type="checkbox" value="1" name="active">
                        @endif

                    </div>
                    <div class="" style="clear:both;"></div>
                    <div class="input-group">
                       <span class="input-group-btn">
                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose
                         </a>
                       </span>
                       <input id="thumbnail" class="form-control" type="text" value="{{$league->logo}}" name="filepath">
                     </div>
                     <img id="holder" src="{{url('')}}/{{$league->logo}}" style="margin-top:15px;max-height:100px;">
                    <div class="form-group">
                        {{ Form::label('body', trans('lang.description')) }}
                        {{ Form::textarea('body', $league->description, ['class' => 'form-control','id' => 'my-editor']) }}
                    </div>
                    <div class="form-group">
                        <!-- {{ Form::submit(trans('lang.save'), ['class' => 'btn btn-sm btn-primary fa fa-save']) }} -->
                        <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{trans('lang.save')}} </button>
                        <a href="{{route('leagues.index')}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> {{trans('lang.cancel')}}</a>
                    </div>


                  {!! Form::close() !!}
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
  CKEDITOR.replace('my-editor',{
    filebrowserImageBrowseUrl: '{{url("laravel-filemanager?type=Images")}}',
    filebrowserImageUploadUrl: '{{url("laravel-filemanager/upload?type=Images&_token=")}}{{csrf_token()}}',
    filebrowserBrowseUrl: '{{url("laravel-filemanager?type=Files")}}',
    filebrowserUploadUrl: '{{url("laravel-filemanager/upload?type=Files&_token=")}}{{csrf_token()}}'
  });
  $(document).ready(function(){
      $("#name, #slug").stringToSlug({
          callback: function(text){
              $('#slug').val(text);
          }
      });
  });
</script>
@endsection
