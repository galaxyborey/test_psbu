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
                  {!! Form::open(['route' => ['brands.update', $edit->id], 'method' => 'PUT']) !!}

                    <div class="form-group">
                      {{ Form::label('parent', trans('lang.parent')) }}
                      <select class="form-control" name="parent_id">
                        <option value="0">{{trans('lang.please_selete')}} </option>
                        {{\App\Http\Controllers\HomeController::getProductBrand(0,0,$edit->b_parent)}}
                      </select>
                    </div>
                    <div class="form-group">
                        {{ Form::label('name_kh', trans('lang.name_kh')) }}
                        {{ Form::text('name_kh', $edit->b_name_kh, ['class' => 'form-control', 'id' => 'name_kh']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('name', trans('lang.name_en')) }}
                        {{ Form::text('name', $edit->b_name_en, ['class' => 'form-control', 'id' => 'name']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('code', trans('lang.code')) }}
                        {{ Form::text('code', $edit->code, ['class' => 'form-control', 'id' => 'code']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('slug', trans('lang.url')) }}
                        {{ Form::text('slug', $edit->slug, ['class' => 'form-control', 'id' => 'slug']) }}
                    </div>
                     <img id="holder" src="" style="margin-top:15px;max-height:100px;">

                    <div class="form-group">
                        <!-- {{ Form::submit(trans('lang.save'), ['class' => 'btn btn-sm btn-primary fa fa-save']) }} -->
                        <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{trans('lang.save')}} </button>
                        <a href="{{route('brands.index')}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> {{trans('lang.cancel')}}</a>
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
  $(document).ready(function(){
      $("#name, #slug").stringToSlug({
          callback: function(text){
              $('#slug').val(text);
          }
      });
  });
</script>
@endsection