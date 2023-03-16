@extends('layouts.backends.app')

@section('content')
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<a href="{{url('/')}}/adminsite">{{ trans('template.dashboard') }}</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<a href="{{url('/adminsite/articles/create')}}">{{ trans('template.members') }}</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>​{{ trans('template.add_new') }}</span>
		</li>
	</ul>
</div>
<br/>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light portlet-fit portlet-form bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-plus font-green"></i>
					<span class="caption-subject font-green sbold uppercase">{{ trans('template.member') }}</a></span>
				</div>
			</div>
			<div class="portlet-body form-body">
				<form class="form-horizontal" method="POST" action="{{url('/adminsite/peopleinsertSave')}}" id="form_validation">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<div class="form-body">
						@if(count($errors))
							@foreach($errors->all() as $error)
								<span class="alert alert-danger" style="display:block;">{{$error}}</span>
							@endforeach
						@endif
						@if(Session::has('message'))
							<div class="alert alert-success display-show" >
								<button class="close" data-close="alert"></button> 
								{!!Session::get('message')!!} 
							</div>
						@endif
						<div class="alert alert-danger display-hide">
							<button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
						<div class="alert alert-success display-hide">
							<button class="close" data-close="alert"></button> Your form validation is successful! </div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="form-group{{ $errors->has('kh_name') ? ' has-error' : '' }}">
									<label for="kh_name" class="col-md-4 control-label"><strong>{{ trans('template.kh_name') }}</strong>
										<span class="">  </span>
									</label>
									<div class="col-md-8">
										<input id="userid" type="hidden" class="form-control" name="userid" value="{{ Auth::user()->id }}" >
										<input id="kh_name" type="text" class="form-control" name="kh_name" value="{{ old('kh_name') }}">
										@if ($errors->has('kh_name'))
											<span class="help-block">
												<strong>{{ $errors->first('kh_name') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('functions_kh') ? ' has-error' : '' }}">
									<label for="functions_kh" class="col-md-4 control-label"><strong>{{ trans('template.functions') }}</strong>
										<span class="">  </span>
									</label>
									<div class="col-md-8">
										<textarea id="functions_kh" class="form-control" name="functions_kh" rows="5">{{ old('functions_kh') }}</textarea>
										
										@if ($errors->has('functions_kh'))
											<span class="help-block">
												<strong>{{ $errors->first('functions_kh') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
									<label for="photo" class="col-md-4 control-label"><strong>{{ trans('template.photo') }}</strong></label>
									<div class="col-md-8">
										<div class="input-group">
											<span class="input-group-btn">
												<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
												<i class="fa fa-picture-o"></i> Choose
												</a>
											</span>
											<input id="thumbnail" class="form-control" type="text" value="" name="filepath" autocomplete="off">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group{{ $errors->has('en_name') ? ' has-error' : '' }}">
									<label for="en_name" class="col-md-4 control-label"><strong>{{ trans('template.latinname') }}</strong>
										<span class="">  </span>
									</label>
									<div class="col-md-8">
										<input id="en_name" type="text" class="form-control" name="en_name" value="{{ old('en_name') }}">
										@if ($errors->has('en_name'))
											<span class="help-block">
												<strong>{{ $errors->first('en_name') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('functions') ? ' has-error' : '' }}">
									<label for="functions" class="col-md-4 control-label"><strong>{{ trans('template.functions') }}</strong>
										<span class="">  </span>
									</label>
									<div class="col-md-8">
										<textarea id="functions" class="form-control" name="functions" rows="5">{{ old('functions') }}</textarea>
										
										@if ($errors->has('functions'))
											<span class="help-block">
												<strong>{{ $errors->first('functions') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('ordering') ? ' has-error' : '' }}">
									<label for="ordering" class="col-md-4 control-label"><strong>{{ trans('template.ordering') }}</strong>
										
									</label>
									<div class="col-md-8">
										<input id="ordering" type="ordering" class="form-control" name="ordering" value="{{ old('ordering') }}">
										@if ($errors->has('ordering'))
											<span class="help-block">
												<strong>{{ $errors->first('ordering') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
									<label for="status" class="col-md-4 control-label"><strong>{{ trans('template.status') }}</strong>
										<span class="required"> * </span>
									</label>
									<?php 
										$status=array(
											'1' => trans("template.active"), '0' => trans("template.disable"),
										);
									?>
									<div class="col-md-8">
										{{ Form::select('status', $status, old('status'), ['id' => 'status','class'=>'form-control']) }}
										@if ($errors->has('status'))
											<span class="help-block">
												<strong>{{ $errors->first('status') }}</strong>
											</span>
										@endif
									</div>
								</div>
							</div>
						</div>
						
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
													{{ Form::label('body', trans('lang.description')) }}
													{{ Form::textarea('body', null, ['class' => 'form-control','id' => 'my-editor_en']) }}
											</div>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
											<div class="form-group">
												{{ Form::label('body', trans('lang.description')) }}
												{{ Form::textarea('body_kh', null, ['class' => 'form-control','id' => 'my-editor']) }}
											</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div style="clear: both;"></div>
						
					</div>					
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-4 col-md-6">
								<button type="submit"  name="btnSave" value="save" class="btn green"> <i class="fa fa-save"> </i> <strong> {{trans('template.save')}}</strong></button>
								<button type="submit"  name="btnSave" value="save_new" class="btn blue"> <strong> {{trans('template.save_new')}} </strong></button>
								<a href="{{url('/adminsite/system/peoples/peoplelist')}}"><button type="button" id="btnClose" class="btn btn-danger"> <i class="fa fa-times-circle"> </i> <strong> {{trans('template.cancel')}}</strong></button> </a>
							</div>
						</div>
					</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('javascript')

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
