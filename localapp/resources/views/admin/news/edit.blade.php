@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.edit_category')}}</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br>
                  {!! Form::open(['route' => ['admin_news.update', $edit->id], 'method' => 'PUT']) !!}

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      {{ Form::label('category', trans('lang.category')) }}
                      <select class="form-control" name="cat_id" id="cat_id">
                        <option value="0">{{trans('lang.please_selete')}} </option>
                        {{\App\Http\Controllers\HomeController::getCategoryNewsList($edit->cat_id)}}
                      </select>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      {{ Form::label('sub_category', 'Catalog') }}
                      <select class="form-control" name="catalog" id="catalog">
                        <option value="0">{{trans('lang.please_selete')}} </option>
                        <!-- {{\App\Http\Controllers\HomeController::getSubCategoryNewsList($edit->sub_id,$edit->cat_id)}} -->
                        {{\App\Http\Controllers\HomeController::getCatalog($edit->catalog)}}
                      </select>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('name', trans('lang.name')) }}
                        {{ Form::text('name', $edit->title, ['class' => 'form-control', 'id' => 'name']) }}
                    </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('name_kh', trans('lang.name_kh')) }}
                        {{ Form::text('name_kh', $edit->title_kh, ['class' => 'form-control', 'id' => 'name_kh']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('slug', trans('lang.url')) }}
                        {{ Form::text('slug', $edit->slug, ['class' => 'form-control', 'id' => 'slug']) }}
                    </div>
                    <div class="input-group">
                       <span class="input-group-btn">
                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose
                         </a>
                       </span>
                       <input id="thumbnail" class="form-control" type="text" value="{{$edit->file}}" name="filepath">
                     </div>
                     <img id="holder" src="{{url('')}}/{{$edit->file}}" style="margin-top:15px;max-height:100px;">
                     <div style="clear: both;"></div>
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_content">
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">{{trans('lang.english')}}</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">{{trans('lang.khmer')}}</a>
                                </li>
                              </ul>
                              <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                   <div class="form-group">
                                        {{ Form::label('excerpt', trans('lang.excerpt')) }}
                                        {{ Form::textarea('excerpt', $edit->excerpt, ['class' => 'form-control']) }}
                                   </div>
                                   <div class="form-group">
                                        {{ Form::label('body', trans('lang.description')) }}
                                        {{ Form::textarea('body', $edit->body, ['class' => 'form-control','id' => 'my-editor_en']) }}
                                   </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                  <div class="form-group">
                                        {{ Form::label('excerpt_kh', trans('lang.excerpt_kh')) }}
                                        {{ Form::textarea('excerpt_kh', $edit->excerpt_kh, ['class' => 'form-control']) }}
                                  </div>
                                  <div class="form-group">
                                      {{ Form::label('body', trans('lang.description')) }}
                                      {{ Form::textarea('body_kh', $edit->body_kh, ['class' => 'form-control','id' => 'my-editor']) }}
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    <div style="clear: both;"></div>

                    <div class="form-group">
                        <!-- {{ Form::submit(trans('lang.save'), ['class' => 'btn btn-sm btn-primary fa fa-save']) }} -->
                        <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{trans('lang.save')}} </button>
                        <a href="{{route('admin_news.index')}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> {{trans('lang.cancel')}}</a>
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
  CKEDITOR.replace('my-editor_en',{
    filebrowserImageBrowseUrl: '{{url("laravel-filemanager?type=Images")}}',
    filebrowserImageUploadUrl: '{{url("laravel-filemanager/upload?type=Images&_token=")}}{{csrf_token()}}',
    filebrowserBrowseUrl: '{{url("laravel-filemanager?type=Files")}}',
    filebrowserUploadUrl: '{{url("laravel-filemanager/upload?type=Files&_token=")}}{{csrf_token()}}'
  });
  $('#cat_id').on('change',function(){
    $.get('{{url("getSubCat")}}/'+$(this).val(),function(data){
        $('#sub_id').html('');
        if(data){
          $('#sub_id').html(data);
        }
    });
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
