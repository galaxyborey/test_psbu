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
                  {!! Form::open(['route' => ['champions.update', $edit->id], 'method' => 'PUT']) !!}

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      {{ Form::label('match', trans('lang.match'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                      <select class="form-control" name="match_id">
                        <option value="0">{{trans('lang.please_selete')}} </option>
                        {{\App\Http\Controllers\HomeController::getMatchJsonList($edit->match_id)}}
                      </select>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      {{ Form::label('league', trans('lang.league'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                      <select class="form-control" name="league_id">
                        <option value="0">{{trans('lang.please_selete')}} </option>
                        {{\App\Http\Controllers\HomeController::getLeagueList($edit->league_id)}}
                      </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        {{ Form::label('title', trans('lang.title')) }}
                        {{ Form::text('title', $edit->title, ['class' => 'form-control', 'id' => 'title']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('slug', trans('lang.url')) }}
                        {{ Form::text('slug', $edit->slug, ['class' => 'form-control', 'id' => 'slug']) }}
                    </div>
                    <div class="input-group">
                       <span class="input-group-btn">
                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose
                         </a>
                       </span>
                       <input id="thumbnail" class="form-control" type="text" value="{{$edit->image}}" name="filepath">
                     </div>
                     <img id="holder" src="{{url('')}}/{{$edit->image}}" style="margin-top:15px;max-height:100px;">
                    <div class="form-group">
                        <!-- {{ Form::submit(trans('lang.save'), ['class' => 'btn btn-sm btn-primary fa fa-save']) }} -->
                        <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{trans('lang.save')}} </button>
                        <a href="{{route('champions.index')}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> {{trans('lang.cancel')}}</a>
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
    $(document).ready(function(){
        $("#title, #slug").stringToSlug({
            callback: function(text){
                $('#slug').val(text);
            }
        });
    });
</script>
@endsection
