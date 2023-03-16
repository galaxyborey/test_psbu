@extends('layouts.backends.app')

@section('content')
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<a href="{{url('/')}}">{{ trans('template.dashboard') }}</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<a href="{{url('/adminsite/catemenu/subicatemenu/create')}}">{{ trans('template.category') }} 3</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>​{{ trans('template.update') }}</span>
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
					<span class="caption-subject font-green sbold uppercase">{{ trans('template.category') }} 3</a></span>
				</div>
			</div>
			<div class="portlet-body form-body">
				<form class="form-horizontal" method="POST" action="{{url('/adminsite/subiCateUpdateSave')}}" id="form_validation">
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
								
								<div class="form-group{{ $errors->has('name_kh') ? ' has-error' : '' }}">
									<label for="name_kh" class="col-md-4 control-label"><strong>{{ trans('lang.category_name_kh') }}</strong>
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<input id="userid" type="hidden" class="form-control" name="userid" value="{{ Auth::user()->id }}" >
										<input id="subid" type="hidden" class="form-control" name="subid" value="{{ $subicate->id }}" >
										<input id="name_kh" type="text" class="form-control" name="name_kh" value="{{ $subicate->subi_namekh }}" autofocus>
										@if ($errors->has('name_kh'))
											<span class="help-block">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
									<label for="name" class="col-md-4 control-label"><strong>{{ trans('lang.category_name') }}</strong>
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<input id="name" type="text" class="form-control" name="name" value="{{ $subicate->subi_name }}">
										@if ($errors->has('name'))
											<span class="help-block">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('ordering') ? ' has-error' : '' }}">
									<label for="ordering" class="col-md-4 control-label"><strong>{{ trans('template.ordering') }}</strong>
										
									</label>
									<div class="col-md-8">
										<input id="ordering" type="ordering" class="form-control" name="ordering" value="{{ $subicate->subi_ordering }}">
										@if ($errors->has('ordering'))
											<span class="help-block">
												<strong>{{ $errors->first('ordering') }}</strong>
											</span>
										@endif
									</div>
								</div>
								
							</div>
							<div class="col-md-6">			
								<div class="form-group{{ $errors->has('catemaster') ? ' has-error' : '' }}">
									<label for="catemaster" class="col-md-4 control-label"><strong>In {{ trans('template.category') }}</strong>
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										
										<select name="catemaster" id="catemaster" class="form-control">
											<?php $cate = $subicate->subcateid;?>

		                                <?php $lencm_i =0; $arrcm_i = (array)$subcatemenu; $lencm_i = count($arrcm_i);
		                                if($lencm_i > 0){?>
		                                		<option value=""> {{ trans('template.select') }} </option><?php
			                                foreach($subcatemenu as $val){?>
			                                	<option value="<?php echo @$val->id;?>" <?=$cate==$val->id?'selected':''?>> <?php echo $val->id.' '.$val->name_kh.' - '.$val->name;?> </option>
			                            <?php
			                                }
		                                }else{?>
		                                		<option value=""> {{ trans('template.select') }} </option>
		                                <?php
		                                }
		                                ?>
		                                        
		                                    </select>
										@if ($errors->has('catemaster'))
											<span class="help-block">
												<strong>{{ $errors->first('catemaster') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
									<label for="pagecate" class="col-md-4 control-label"><strong>{{ trans('template.page_view') }}</strong>
										<span class="required"> * </span>
									</label>
									<?php 
										
									?>
									<div class="col-md-8">
										<select name="pagecate" class="form-control">
											<option value="0"> {{ trans('template.select') }} </option><?php $catepid = $subicate->sicatepageid;?>
										<?php 
										foreach($pages_cate as $pagecates => $value){?>
											<option value="<?php echo $value->pcateid;?>" <?=$catepid==$value->pcateid?'selected':''?>> <?php echo $value->pcate_name; ?> </option>
											
										<?php
										}
										
										?>
										</select>
										@if ($errors->has('pagecate'))
											<span class="help-block">
												<strong>{{ $errors->first('pagecate') }}</strong>
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
											'1' => trans("template.active"),
											'0' => trans("template.disable"),
										);
									?>
									<div class="col-md-8">
										<select name="status" id="status" class="form-control">
		                                    <?php $status = $subicate->subi_active;?>
		                                        <option value="1" <?=$status==1?'selected':''?>> {{ trans('template.active') }} </option>
		                                        <option value="0" <?=$status==0?'selected':''?>> {{ trans('template.disable') }} </option>
		                                    </select>

										
										@if ($errors->has('status'))
											<span class="help-block">
												<strong>{{ $errors->first('status') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
									<label for="slug" class="col-md-4 control-label"><strong>{{ trans('lang.category_url') }}</strong>
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
										<input id="slug" type="text" class="form-control" name="slug" value="{{ $subicate->subi_slug }}">
										@if ($errors->has('slug'))
											<span class="help-block">
												<strong>{{ $errors->first('slug') }}</strong>
											</span>
										@endif
									</div>
									<div class="md-checkbox-inline col-md-3">
										<div class="md-checkbox">
											<input type="checkbox" id="checkbox6" class="md-check" name="chb_ispage" value="1">
											<label for="checkbox6">
												<span class="inc"></span>
												<span class="check"></span>
												<span class="box"></span> Is Page </label>
										</div>
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
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab"><!--
               <div class="form-group">
                    {{ Form::label('excerpt', trans('lang.excerpt')) }}
                    {{ Form::textarea('excerpt', null, ['class' => 'form-control']) }}
               </div>-->
               <div class="form-group">
                    {{ Form::label('body', trans('lang.description')) }}
                    {{ Form::textarea('body', $subicate->subi_body, ['class' => 'form-control','id' => 'my-editor_en']) }}
               </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab"><!--
              <div class="form-group">
                    {{ Form::label('excerpt_kh', trans('lang.excerpt_kh')) }}
                    {{ Form::textarea('excerpt_kh', null, ['class' => 'form-control']) }}
              </div>-->
              <div class="form-group">
                  {{ Form::label('body', trans('lang.description')) }}
                  {{ Form::textarea('body_kh', $subicate->subi_bodykh, ['class' => 'form-control','id' => 'my-editor']) }}
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
								
								<button type="submit"  name="btnUpdate" value="UpdateSave" class="btn blue"> <i class="fa fa-refresh"> </i><strong> {{trans('template.save_change')}} </strong></button>
								<a href="{{url('/adminsite/catemenu/subicatemenu/catelists')}}"><button type="button" id="btnClose" class="btn btn-danger"> <i class="fa fa-times-circle"> </i> <strong> {{trans('template.cancel')}}</strong></button> </a>
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
