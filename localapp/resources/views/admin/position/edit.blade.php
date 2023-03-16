@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.edit_slide')}}</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br>
                  {!! Form::open(['route' => ['positions.update', $edit->id], 'method' => 'PUT']) !!}

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('title', trans('lang.title')) }}
                        {{ Form::text('title', $edit->name, ['class' => 'form-control', 'id' => 'title']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('position', trans('lang.position'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        <select class="form-control" name="position">
                          {{\App\Http\Controllers\HomeController::getPositionList($edit->position)}}
                        </select>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      {{ Form::label('category', trans('lang.category')) }}
                      <select class="form-control" name="cat_id" id="cat_id">
                        <option value="0">{{trans('lang.please_selete')}} </option>
                        {{\App\Http\Controllers\HomeController::getCategoryNewsList($edit->cat_id)}}
                      </select>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      {{ Form::label('sub_category', trans('lang.sub_category')) }}
                      <select class="form-control" name="sub_id" id="sub_id">
                        <option value="0">{{trans('lang.please_selete')}} </option>
                        {{\App\Http\Controllers\HomeController::getSubCategoryNewsList($edit->sub_cat,$edit->cat_id)}}
                      </select>
                    </div>
                    <div class="form-group">
                        {{ Form::label('body', trans('lang.description')) }}
                        {{ Form::textarea('body', $edit->des_p, ['class' => 'form-control','id' => 'my-editor']) }}
                    </div>
                    <div class="form-group">
                        <!-- {{ Form::submit(trans('lang.save'), ['class' => 'btn btn-sm btn-primary fa fa-save']) }} -->
                        <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{trans('lang.save')}} </button>
                        <a href="{{route('positions.index')}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> {{trans('lang.cancel')}}</a>
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
  $('#cat_id').on('change',function(){
    $.get('{{url("getSubCat")}}/'+$(this).val(),function(data){
        $('#sub_id').html('');
        if(data){
          $('#sub_id').html(data);
        }
    });
  });
</script>
@endsection
