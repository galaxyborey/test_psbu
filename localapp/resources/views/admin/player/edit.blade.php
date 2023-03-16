@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.edit_player')}}</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br>
                  {!! Form::open(['route' => ['players.update', $player->id], 'method' => 'PUT']) !!}
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      {{ Form::label('team_name', trans('lang.team_name'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                      <select class="form-control" name="team_id">
                        <option value="0">{{trans('lang.please_selete')}} </option>
                        {{\App\Http\Controllers\HomeController::getTeamJsonList($player->team_id)}}
                      </select>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('player_code', trans('lang.player_code'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                        {{ Form::text('player_code', $player->play_code, ['class' => 'form-control', 'id' => 'player_code']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('player_name', trans('lang.player_name'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                        {{ Form::text('play_name', $player->play_name, ['class' => 'form-control', 'id' => 'play_name']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('dob', trans('lang.dob'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                        {{ Form::text('dob', $player->dob, ['class' => 'form-control datesport', 'id' => 'dob']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('height', trans('lang.height'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                        {{ Form::text('height', $player->height, ['class' => 'form-control', 'id' => 'height']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('weight', trans('lang.weight'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                        {{ Form::text('weight', $player->weight, ['class' => 'form-control', 'id' => 'weight']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('slug', trans('lang.payler_url')) }}
                        {{ Form::text('slug', $player->slug, ['class' => 'form-control', 'id' => 'slug']) }}
                    </div>
                    <div class="input-group">
                       <span class="input-group-btn">
                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose
                         </a>
                       </span>
                       <input id="thumbnail" class="form-control" type="text" value="{{$player->play_image}}" name="filepath">
                     </div>
                     <img id="holder" src="{{url('')}}/{{$player->play_image}}" style="margin-top:15px;max-height:100px;">
                    <div class="form-group">
                        {{ Form::label('body', trans('lang.description')) }}
                        {{ Form::textarea('body', $player->play_description, ['class' => 'form-control','id' => 'my-editor']) }}
                    </div>
                    <div class="form-group">
                        <!-- {{ Form::submit(trans('lang.save'), ['class' => 'btn btn-sm btn-primary fa fa-save']) }} -->
                        <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{trans('lang.save')}} </button>
                        <a href="{{route('players.index')}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> {{trans('lang.cancel')}}</a>
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
