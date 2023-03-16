<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }} col-md-6 col-sm-6 col-xs-12">
    {{ Form::label('title', trans('lang.title'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
    @if ($errors->has('title'))
      <small class="red">
          <strong>{{ $errors->first('title') }}</strong>
      </small>
    @endif
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
    
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
    {{ Form::label('slug', trans('lang.url')) }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
    {{ Form::label('code', trans('lang.code'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
    {{ Form::text('code', null, ['class' => 'form-control', 'id' => 'code','placeholder'=>'']) }}
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
    {{ Form::label('price', trans('lang.price'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
    {{ Form::text('price', null, ['class' => 'form-control', 'id' => 'price']) }}
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
    {{ Form::label('qty', trans('lang.qty'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
    {{ Form::text('qty', null, ['class' => 'form-control', 'id' => 'qty']) }}
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
    {{ Form::label('selling_price', trans('lang.selling_price'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
    {{ Form::text('selling_price', null, ['class' => 'form-control', 'id' => 'selling_price']) }}
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
   {{ Form::label('category_name', trans('lang.category_name')) }}
  <select class="form-control" name="category_id">
    <option value="0">{{trans('lang.please_selete')}} </option>
    {{\App\Http\Controllers\HomeController::getProductCatogery(0)}}
  </select>
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
   {{ Form::label('brand_name', trans('lang.brand')) }}
  <select class="form-control" name="brand_id">
    <option value="0">{{trans('lang.please_selete')}} </option>
    {{\App\Http\Controllers\HomeController::getProductBrand(0)}}
  </select>
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
   {{ Form::label('measure_name', trans('lang.measure')) }}
  <select class="form-control" name="measure_id">
    <option value="0">{{trans('lang.please_selete')}} </option>
    {{\App\Http\Controllers\HomeController::getMeasureList()}}
  </select>
</div>
<div class="form-group col-md-6 col-sm-6 col-xs-12">
   {{ Form::label('status', trans('lang.status')) }}
  <select class="form-control" name="sta_id">
    {{\App\Http\Controllers\HomeController::getStatusPList()}}
  </select>
</div>
<div class="input-group col-md-6 col-sm-6 col-xs-12" style="float: left;">
  <div class="col-md-3 col-sm-3 col-xs-3">
     <span class="input-group-btn">
       <a data-input="thumbnail" data-preview="holder" class="btn btn-primary lfm">
         <i class="fa fa-picture-o"></i> Choose
       </a>
     </span>
  </div>
  <div class="col-md-9 col-sm-9 col-xs-9">
    <input id="thumbnail" class="form-control" type="text" value="" name="filepath[]">
  </div>
</div>
<div class="input-group col-md-6 col-sm-6 col-xs-12">
  <i class="fa fa-plus-circle PlusImage" style="font-size: 20px; padding: 0 10px; line-height: 35px; cursor: pointer;"></i>
  <img id="holder" src="" style="margin-top:15px;max-height:30px; padding: 0 40px;">
</div>
<div class="imagePlush">
  
</div>
<div style="clear: both;"></div>
<div class="form-group">
    {{ Form::label('body', trans('lang.description')) }}
    {{ Form::textarea('body', null, ['class' => 'form-control','id' => 'my-editor']) }}
</div>

<div class="form-group clearfix">
    <!-- {{ Form::submit(trans('lang.save'), ['class' => 'btn btn-sm btn-primary fa fa-save']) }} -->
    <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{trans('lang.save')}} </button>
    <a href="{{route('products.index')}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> {{trans('lang.cancel')}}</a>
</div>
@section('scripts')
<script>
  var options = "{{ url('') }}";
  var type = "image";
  $('.lfm').click(function(){
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
  function funImage(val){
    type = type || 'file';
      var route_prefix = (options && options.prefix) ? options.prefix : "{{url('laravel-filemanager?type=Images&CKEditor=my-editor')}}";
      localStorage.setItem('target_input', $(this).data('input'));
      localStorage.setItem('target_preview', $(this).data('preview'));
      window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
      window.SetUrl = function (url, file_path) {
        console.log(url);
          var target_input = $('#thumbnail' +val);
          target_input.val(file_path).trigger('change');
          var target_preview = $('#holder'+val);
          target_preview.attr('src', url).trigger('change');
      };
      return false;
  };
  CKEDITOR.replace('my-editor',{
    filebrowserImageBrowseUrl: '{{url("laravel-filemanager?type=Images")}}',
    filebrowserImageUploadUrl: '{{url("laravel-filemanager/upload?type=Images&_token=")}}{{csrf_token()}}',
    filebrowserBrowseUrl: '{{url("laravel-filemanager?type=Files")}}',
    filebrowserUploadUrl: '{{url("laravel-filemanager/upload?type=Files&_token=")}}{{csrf_token()}}'
  });
  $(document).ready(function(){
      $("#title, #slug").stringToSlug({
          callback: function(text){
              $('#slug').val(text+'{{date("his")}}');
          }
      });
  });
  var i =1;
  $('.PlusImage').click(function(){
    var str='<div class="classImageShoe_'+i+'">';
      str+='<div class="input-group col-md-6 col-sm-6 col-xs-12 " style="float: left;">';
      str+='<div class="col-md-3 col-sm-3 col-xs-3">';
      str+='<span class="input-group-btn">';
        str+='<a data-input="thumbnail" data-preview="holder'+i+'" class="btn btn-primary lfm" onclick="funImage('+i+')">';
          str+='<i class="fa fa-picture-o"></i> Choose';
        str+='</a>';
        str+='</span>';
          str+='</div>';
        str+='<div class="col-md-9 col-sm-9 col-xs-9">';
          str+='<input id="thumbnail'+i+'" class="form-control" type="text" value="" name="filepath[]">';
        str+='</div>';
      str+='</div>';
      str+='<div class="input-group col-md-6 col-sm-6 col-xs-12">';
         str+='<i class="fa fa-trash " onclick="PlusImageRemove('+i+')" style="font-size: 20px; padding: 0 10px; line-height: 35px; cursor: pointer; color:red"></i>';
        str+='<img id="holder'+i+'" src="" style="margin-top:15px;max-height:30px; padding: 0 40px;">';
      str+='</div>';
      str+='</div>';
      i++;
    $('.imagePlush').append(str);
  });
  function PlusImageRemove(val){
    $('.classImageShoe_'+val).html('');
  };
</script>
@endsection
