<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {{ Form::label('name', trans('lang.name')) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    @if ($errors->has('name'))
      <span>
          <strong>{{ $errors->first('name') }}</strong>
      </span>
    @endif
</div>
<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
    {{ Form::label('email', trans('lang.email')) }}
    {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
    @if ($errors->has('email'))
      <span>
          <strong>{{ $errors->first('email') }}</strong>
      </span>
    @endif
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password">Password</label>
    <input id="password" type="password" class="form-control" name="password" required>
    @if ($errors->has('password'))
        <span>
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    <label for="password-confirm" >Confirm Password</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
</div>
<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
   <input id="thumbnail" class="form-control" type="text" value="" name="filepath">
 </div>
 <img id="holder" src="" style="margin-top:15px;max-height:100px;">
<div class="form-group">
    <!-- {{ Form::submit(trans('lang.save'), ['class' => 'btn btn-sm btn-primary fa fa-save']) }} -->
    <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{trans('lang.save')}} </button>
    <a href="{{route('users.index')}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> {{trans('lang.cancel')}}</a>
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
</script>
@endsection
