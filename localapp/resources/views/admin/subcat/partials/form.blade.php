<div class="form-group">
	{{ Form::label('category_id', trans('lang.category_name')) }}
	{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('name_kh', trans('lang.sub_category_name_kh')) }}
    {{ Form::text('name_kh', null, ['class' => 'form-control', 'id' => 'name_kh']) }}
</div>
<div class="form-group">
    {{ Form::label('name', trans('lang.sub_category_name')) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', trans('lang.category_url')) }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('body', trans('lang.description')) }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>
{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="form-group">

    <!-- {{ Form::submit(trans('lang.save'), ['class' => 'btn btn-sm btn-primary fa fa-save']) }} -->
    <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{trans('lang.save')}} </button>
    <a href="{{route('subcategories.index')}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> {{trans('lang.cancel')}}</a>
</div>

@section('scripts')
<script>
	$(document).ready(function(){
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $('#slug').val(text);
	        }
	    });
	});
</script>
@endsection
