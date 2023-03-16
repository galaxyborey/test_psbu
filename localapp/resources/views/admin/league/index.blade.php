@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.list_league')}}</h2>
              <div class="nav navbar-right panel_toolbox text-right">
                <a class="collapse-link font-15"><i class="fa fa-chevron-up"></i></a>
                <a href="{{route('leagues.create')}}" class="link font-20"><i class="fa fa-plus-circle"></i></a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table class="datatable table table-striped table-bordered no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                  <tr>
                      <th width="10px">{{trans('lang.id')}}</th>
                      <th>{{trans('lang.name')}}</th>
                      <th>{{trans('lang.name')}}​​ {{trans('lang.khmer')}}​​</th>
                      <th  style="text-align: center;">{{trans('lang.image')}}</th>
                      <th  style="text-align: center;">{{trans('lang.start_date')}}</th>
                      <th  style="text-align: center;">{{trans('lang.end_date')}}</th>
                      <th  style="text-align: center;">{{trans('lang.status')}}</th>
                      <th style="text-align: center;">{{trans('lang.action')}}</th>
                  </tr>
                </thead>

              </table>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
  $('.datatable').DataTable({
       processing: true,
       serverSide: true,
       ajax: '{{ url("getLeagueJson") }}',
       columns: [
            {data: 'id', name: 'id'},
            {data: 'name_en', name: 'name_en'},
            {data: 'name_kh', name: 'name_kh'},
            {data: 'logo', name: 'logo'},
            {data: 'start_date', name: 'start_date'},
            {data: 'end_date', name: 'end_date'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action'},
       ],'fnCreatedRow':function(nRow,aData,iDataIndex){
        var str="";
        var active = "'active'";
        var disable = "'disable'";
        var tab = "'leagues'";
        if(aData['status'] == 1){
          str ='<button class="btn btn-primary btn-xs" onclick="funcActive('+aData['id']+','+active+','+tab+')">{{trans("lang.active")}}</button>';
        }else{
          str ='<button class="btn btn-danger btn-xs" onclick="funcActive('+aData['id']+','+disable+','+tab+')">{{trans("lang.disable")}}</button>';
        }
        var image ='<img width="50px" src="{{url("")}}/'+aData['logo']+'"/>';
        $('td:eq(3)',nRow).html(image).addClass("text-center");
        $('td:eq(6)',nRow).html(str).addClass("text-center");
        $('td:eq(7)',nRow).addClass("text-center");
        $('td:eq(4)',nRow).addClass("text-center");
        $('td:eq(5)',nRow).addClass("text-center");
      },
      order:[[0,'asc']]
   });
});
</script>
@endsection
