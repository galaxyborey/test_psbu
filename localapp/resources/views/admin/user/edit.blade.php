@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.edit_user')}}</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br>
                  {!! Form::open(['route' => ['users.update', $edit->id], 'method' => 'PUT']) !!}

                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      {{ Form::label('name', trans('lang.name')) }}
                      {{ Form::text('name', $edit->name, ['class' => 'form-control', 'id' => 'name']) }}
                      @if ($errors->has('name'))
                        <span>
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                      @endif
                  </div>
                  <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                      {{ Form::label('email', trans('lang.email')) }}
                      {{ Form::email('email', $edit->email, ['class' => 'form-control', 'id' => 'email']) }}
                      @if ($errors->has('email'))
                        <span>
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password">Password</label>
                      <input id="password" type="password" class="form-control" name="password" >
                      @if ($errors->has('password'))
                          <span>
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
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
                        <a href="{{route('users.index')}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> {{trans('lang.cancel')}}</a>
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
