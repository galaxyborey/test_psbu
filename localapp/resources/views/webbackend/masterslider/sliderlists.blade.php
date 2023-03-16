@extends('layouts.backends.app')

@section('content')
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<a href="{{url('/')}}">{{ trans('template.dashboard') }}</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<a href="#">{{ trans('template.slider') }}</a>
		</li>
	</ul>
</div>
<br/>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light portlet-fit portlet-form bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-list font-green"></i>
					<span class="caption-subject font-green sbold uppercase">{{ trans('template.slider') }}</a></span>
				</div>
				<div class="actions">
					<a href="{{url('/adminsite/system/slider/create')}}" title="{{ trans('template.add_new') }}">
						<i class="fa fa-plus"></i>
						<span class="caption-subject font-green sbold uppercase">{{ trans('template.add_new') }}</a></span>
					</a>
				</div>
			</div>
			<div class="portlet-body form-body">
				<div class="col-md-12">
					@if(Session::has('message'))
							<div class="alert alert-success display-show" >
								<button class="close" data-close="alert"></button> 
								{!!Session::get('message')!!} 
							</div>
						@endif
						<table class="table table-striped table-bordered" width="100%" id="table-product">
							<thead>
								<tr class="bg-primary">
									<th class="text-center min-phone-l">{{trans('template.no')}}</th>
									<th class="text-center min-phone-l">{{trans('template.slider')}}</th>
									<th class="text-center min-phone-l">{{trans('template.title')}}</th>
									<th class="text-center min-phone-l">{{trans('template.order')}} </th>
									<th class="text-center min-phone-l">{{trans('template.status')}} </th>
									<th class="text-center min-phone-l">{{trans('template.describe')}}</th>
									<th class="text-center min-phone-l">{{trans('template.action')}}</th>
								</tr>
							</thead>
							<tbody>
							@foreach($listslider as $key=>$slide)
							<tr>
							
								<td>{{ ($key+1) }}</td>
								<td><?php
									if(!empty($slide->image)) {?>
										<img src="{{URL('/')}}{{$slide->image}}" alt="{{ $slide->title }}" width="250">
									<?php
									}
									?>
								</td>
								<td>{{ $slide->title }}</td>
                        		<td>{{ $slide->sl_ordering }}</td>
								<td>
								@if($slide->status == 1)
									<button class="btn btn-primary btn-xs">Active</button>
								@else
									<button class="btn btn-danger btn-xs">Disable</button>
								@endif
								</td>
								<td>{{ $slide->des }}</td>
								<td>
								<div class="btn-group">
					                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">{{trans('template.action')}}
					                        <i class="fa fa-angle-down"></i>
					                    </button>
					                    <ul class="dropdown-menu pull-right" role="menu">
					                        <li>
					                            <a class="font-blue bold" href="{{ url('adminsite/system/slider/editsliders/').'/'.$slide->id }}?slidersdetail">
					                                <i class="font-blue fa fa-edit"></i>{{trans('template.edit')}} </a>
												
					                        </li>
											<li>
					                            <a class="font-red bold" href="{{url('adminsite/system/deleteslider')}}/deleteing?sliders">
					                                <i class="font-red fa fa-trash"></i>{{trans('template.delete')}} </a>
					                        </li>
					                    </ul>
					                </div>
								</td>
							</tr>
							@endforeach
					
							</tbody>
						</table>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('javascript')

<script type="text/javascript">
	$('#table-product').DataTable({
		"lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
	});
/*
	$('#table-product').DataTable({
		"lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
		processing: true,
		serverSide: true,

		ajax: '{{url("products/getproductJsonList")}}',
		columns: [
			{data: 'rownum'},
			{data: 'pid'},
			{data: 'pname'},
			{data: 'prolength'},
			{data: 'pnoted'},
			{data: 'pstatus'},
			{data: 'action', orderable: false, searchable: false},
			
		],'fnCreatedRow':function(nRow,aData,iDataIndex){
			var str="";
			if(aData['pstatus'] == 1){
				str ='<button class="btn btn-primary btn-xs">{{trans("template.active")}}</button>';
			}else{
				str ='<button class="btn btn-danger btn-xs">{{trans("template.disable")}}</button>';
			}
			$('td:eq(7)',nRow).html(str).addClass("text-center");
		}
	});*/
</script> 
@endsection()