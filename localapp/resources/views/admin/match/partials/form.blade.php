<div class="form-group col-md-6 col-sm-6 col-xs-12">
  {{ Form::label('leauge_name', trans('lang.league_name'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
  <select class="form-control" name="league_id">
    <option value="0">{{trans('lang.please_selete')}} </option>
    {{\App\Http\Controllers\HomeController::getLeagueList()}}
  </select>
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
    {{ Form::label('match_date', trans('lang.match_date'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
    {{ Form::text('match_date', null, ['class' => 'form-control datesport', 'id' => 'match_date']) }}
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
  {{ Form::label('leauge_name', trans('lang.first_club'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
  <select class="form-control" name="club_left">
    <option value="0">{{trans('lang.please_selete')}} </option>
    {{\App\Http\Controllers\HomeController::getClubList()}}
  </select>
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
  {{ Form::label('club_name', trans('lang.second_club'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
  <select class="form-control" name="club_rigth">
    <option value="0">{{trans('lang.please_selete')}} </option>
    {{\App\Http\Controllers\HomeController::getClubList()}}
  </select>
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
    {{ Form::label('time_match', trans('lang.time_match'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
    {{ Form::text('time_match', null, ['class' => 'form-control', 'id' => 'time_match']) }}
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
    {{ Form::label('score', trans('lang.score'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
    {{ Form::text('score', null, ['class' => 'form-control', 'id' => 'score','placeholder'=>' 0 - 0 ']) }}
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
    {{ Form::label('play_location', trans('lang.play_location'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
    {{ Form::text('play_location', null, ['class' => 'form-control', 'id' => 'play_location']) }}
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
    {{ Form::label('on_active', trans('lang.on_active'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
    {{ Form::text('on_active', null, ['class' => 'form-control', 'id' => 'on_active']) }}
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
    {{ Form::label('tv_live', trans('lang.tv_live'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
    {{ Form::text('tv_live', null, ['class' => 'form-control', 'id' => 'tv_live']) }}
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
  {{ Form::label('tv_live', trans('lang.image_tv_live'),['class' => 'col-md-12 col-sm-12 col-xs-12']) }}
  <div class="col-md-2 col-sm-2 col-xs-2">
    <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
  </div>
  <div class="col-md-10 col-sm-10 col-xs-10">
    <input id="thumbnail" class="form-control" type="text" value="" name="filepath">
  </div>
 </div>
 <img id="holder" src="" style="margin-top:15px;max-height:100px;">
<div class="form-group">
    {{ Form::label('slug', trans('lang.match_url')) }}
    {{ Form::text('slug', 'match'.date('His'), ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    <!-- {{ Form::submit(trans('lang.save'), ['class' => 'btn btn-sm btn-primary fa fa-save']) }} -->
    <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{trans('lang.save')}} </button>
    <a href="{{route('matchs.index')}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> {{trans('lang.cancel')}}</a>
</div>
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
      $("#match_date, #slug").stringToSlug({
          callback: function(text){
              $('#slug').val('match-{{date("his")}}-'+text);
          }
      });
  });
</script>
@endsection
