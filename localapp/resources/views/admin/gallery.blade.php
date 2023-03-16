@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
  <div class="">
    <iframe src="{{url('laravel-filemanager?type=Images&CKEditor=my-editor')}}" style="min-height:700px;width:100%;border: 1px solid #ddd;"></iframe>
  </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
  $('.panel-title').html('');
  $('.panel-title').html('{{trans("lang.gallery")}}');
</script>
@endsection
