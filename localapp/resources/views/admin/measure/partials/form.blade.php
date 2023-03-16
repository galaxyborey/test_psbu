<div class="form-group">
    {{ Form::label('name_kh', trans('lang.name_kh')) }}
    {{ Form::text('name_kh', null, ['class' => 'form-control', 'id' => 'name_kh']) }}
</div>
<div class="form-group">
    {{ Form::label('name', trans('lang.name_en')) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('code', trans('lang.code')) }}
    {{ Form::text('code', null, ['class' => 'form-control', 'id' => 'code']) }}
</div>
 <img id="holder" src="" style="margin-top:15px;max-height:100px;">

<div class="form-group">
    <!-- {{ Form::submit(trans('lang.save'), ['class' => 'btn btn-sm btn-primary fa fa-save']) }} -->
    <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{trans('lang.save')}} </button>
    <a href="{{route('measures.index')}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> {{trans('lang.cancel')}}</a>
</div>
@section('scripts')
@endsection
