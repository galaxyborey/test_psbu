@extends('layouts.backends.app')

@section('content')
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<a href="{{url('/')}}/adminsite">{{ trans('template.dashboard') }}</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<a href="{{url('/adminsite/articles/create')}}">{{ trans('template.article') }} / {{ trans('lang.content') }} ({{ trans('lang.other') }})</a>
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
					<span class="caption-subject font-green sbold uppercase">{{ trans('template.article') }} / {{ trans('lang.content') }} ({{ trans('lang.other') }})</a></span>
				</div>
			</div>
			<div class="portlet-body form-body">
				<form class="form-horizontal" method="POST" action="{{url('/adminsite/otherarticleinsertSave')}}" id="form_validation">
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
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
									<label for="name" class="col-md-2 control-label"><strong>{{ trans('lang.title_kh') }}</strong>
										<span class="">  </span>
									</label>
									<div class="col-md-10">
										<input id="userid" type="hidden" class="form-control" name="userid" value="{{ Auth::user()->id }}" >
										<input id="name_kh" type="text" class="form-control" name="name_kh" value="{{ old('name_kh') }}" autofocus>
										@if ($errors->has('name_kh'))
											<span class="help-block">
												<strong>{{ $errors->first('name_kh') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
									<label for="name" class="col-md-2 control-label"><strong>{{ trans('lang.title_en') }}</strong>
										<span class="">  </span>
									</label>
									<div class="col-md-10">
										<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
										@if ($errors->has('name'))
											<span class="help-block">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@endif
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group{{ $errors->has('ordering') ? ' has-error' : '' }}">
									<label for="ordering" class="col-md-4 control-label"><strong>{{ trans('template.photo') }}</strong>
										
									</label>
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
								<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
									<label for="status" class="col-md-4 control-label"><strong>{{ trans('template.status') }}</strong>
										<span class="required"> * </span>
									</label>
									<?php 
										$status=array(
											'1' => trans("template.active"),
											'0' => trans("template.disable"),
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
								<div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
									<label for="slug" class="col-md-4 control-label"><strong>{{ trans('lang.link') }}</strong>
										<span class="required"> </span>
									</label>
									<div class="col-md-8">
										<input id="slug" type="text" class="form-control" name="slug" value="{{ old('slug') }}" placeholder="Entry auto">
										@if ($errors->has('slug'))
											<span class="help-block">
												<strong>{{ $errors->first('slug') }}</strong>
											</span>
										@endif
									</div>              
								</div>	
								<div class="form-group{{ $errors->has('catetypeid') ? ' has-error' : '' }}">
									<label for="catetypeid" class="col-md-4 control-label"><strong></strong></label>		
									<div class="col-md-8">
										<select name="catetypeid" id="catetypeid" class="form-control">
											<?php	$id = 2;
												foreach($listartcate as $cval){?>
													<option value="<?php echo $cval->art_type_id;?>" <?=$id==$cval->art_type_id?'selected':''?>> <?php echo $cval->art_type_name ." - ".$cval->art_type_name_latin; ?> </option>
											<?php
												}//end foreach
											?>
										</select>
										@if ($errors->has('catetypeid'))
											<span class="help-block">
												<strong>{{ $errors->first('catetypeid') }}</strong>
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
													{{ Form::label('excerpt', trans('lang.excerpt')) }}
													{{ Form::textarea('excerpt', null, ['class' => 'form-control']) }}
											</div>
											<div class="form-group">
													{{ Form::label('body', trans('lang.description')) }}
													{{ Form::textarea('body', null, ['class' => 'form-control','id' => 'my-editor_en']) }}
											</div>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
											<div class="form-group">
													{{ Form::label('excerpt_kh', trans('lang.excerpt_kh')) }}
													{{ Form::textarea('excerpt_kh', null, ['class' => 'form-control']) }}
											</div>
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
						<div class="col-md-12 col-sm-12 col-xs-12">
							<?php 	$arr_count_cat = 0; $arr_count_cat = count($categories); $arr_count_subcat = 0; $arr_count_subcat = count($subcate);
									$arr_count_subicat = 0; $arr_count_subicat = count($subi_categories);
							?>
								<?php
							if ($arr_count_cat > 0) {?>
								<div class="col-md-4">
									<strong>- Choose Menu</strong><br><br/>
									<table class="table table-striped table-bordered table-advance table-hover">
										<thead>
											<tr>
												<th width="60"><input type="checkbox" disabled></th><th>Menu Name </th>
											</tr>
										</thead>
										<tbody>
											@foreach($categories as $cate)
											<tr>
												<td>
													<label class="mt-checkbox mt-checkbox-outline">
													<input type="checkbox" name="catboxes[]" value="{{$cate->id}}"> <span></span>
													</label>
												</td>
												<td>{{$cate->name_kh}} {{$cate->name}}</td>
											</tr>
												
											@endforeach
											
										</tbody>
									</table>
								</div>
								<?php
							}// end $arr_count_cate > 0

							if ($arr_count_subcat > 0) {?>
								<div class="col-md-4">
									<strong>- Choose Menu2</strong><br><br/>
									<table class="table table-striped table-bordered table-advance table-hover">
										<thead>
											<tr>
												<th width="60"><input type="checkbox" disabled></th><th>Menu2 Name </th>
											</tr>
										</thead>
										<tbody>
											@foreach($subcate as $scate)
											<tr>
												<td>
													<label class="mt-checkbox mt-checkbox-outline">
													<input type="checkbox" name="subcatboxes[]" value="{{$scate->id}}"> <span></span>
													</label>
												</td>
												<td>{{$scate->name_kh}} {{$scate->name}}</td>
											</tr>
												
											@endforeach
											
										</tbody>
									</table>
								</div>
								<?php
							}// end $arr_count_subcat > 0

							if ($arr_count_subicat > 0) {?>
								<div class="col-md-4">
									<strong>- Choose Menu3</strong><br><br/>
									<table class="table table-striped table-bordered table-advance table-hover">
										<thead>
											<tr>
												<th width="60"><input type="checkbox" disabled></th><th>Menu3 Name </th>
											</tr>
										</thead>
										<tbody>
											@foreach($subi_categories as $sicate)
											<tr>
												<td>
													<label class="mt-checkbox mt-checkbox-outline">
													<input type="checkbox" name="subicatboxes[]" value="{{$sicate->id}}"> <span></span>
													</label>
												</td>
												<td>{{$sicate->subi_namekh}} {{$sicate->subi_name}}</td>
											</tr>
												
											@endforeach
											
										</tbody>
									</table>
								</div>
								<?php
							}// end $arr_count_subicat > 0
								?>
								
							
						</div>
						<div style="clear: both;"></div>
						
					</div>					
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-4 col-md-6">
								<button type="submit"  name="btnSave" value="save" class="btn green"> <i class="fa fa-save"> </i> <strong> {{trans('template.save')}}</strong></button>
								<button type="submit"  name="btnSave" value="save_new" class="btn blue"> <strong> {{trans('template.save_new')}} </strong></button>
								<a href="{{url('/adminsite/othercate/othercateslist')}}"><button type="button" id="btnClose" class="btn btn-danger"> <i class="fa fa-times-circle"> </i> <strong> {{trans('template.cancel')}}</strong></button> </a>
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

		//hidden any attribute
		var selectOpt = document.getElementById('catetypeid');
		selectOpt.style.visibility = 'hidden';
	});

	
</script>
@endsection
