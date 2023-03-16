@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.list_category')}}</h2>
              <div class="nav navbar-right panel_toolbox text-right">
                <a class="collapse-link font-15"><i class="fa fa-chevron-up"></i></a>
                <a href="{{route('categories.create')}}" class="link font-20"><i class="fa fa-plus-circle"></i></a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                  <tr>
                      <th width="10px">{{trans('lang.id')}}</th>
                      <th>{{trans('lang.name')}}</th>
                      <th>{{trans('lang.khmer')}}</th>
                      <th>{{trans('lang.ordering')}}​​</th>
                      <th>{{trans('lang.view')}}</th>
                      <th>{{trans('lang.edit')}}</th>
                      <th>{{trans('lang.delete')}}</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($categories as $key=>$category)
                    <tr>
                        <td>{{ ($key+1) }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->name_kh }}</td>
                        <td>{{ $category->ordering }}</td>
                        <td width="10px">
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-default"> <i class="fa fa-eye"></i> {{trans('lang.view')}}</a>
                        </td>
                        <td width="10px">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> {{trans('lang.edit')}}</a>
                        </td>
                        <td width="10px">
                            {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">
                                  <i class="fa fa-trash"></i>  {{trans('lang.delete')}}
                                </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
  $('#datatable').DataTable();
</script>
@endsection
