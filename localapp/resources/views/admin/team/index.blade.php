@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.list_team')}}</h2>
              <div class="nav navbar-right panel_toolbox text-right">
                <a class="collapse-link font-15"><i class="fa fa-chevron-up"></i></a>
                <a href="{{route('teams.create')}}" class="link font-20"><i class="fa fa-plus-circle"></i></a>
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
                      <th  style="text-align: center;">{{trans('lang.club_name')}}</th>
                      <th  style="text-align: center;">{{trans('lang.image')}}</th>
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
       ajax: '{{ url("getTeamJson") }}',
       columns: [
            {data: 'id', name: 'id'},
            {data: 'team_name_en', name: 'team_name_en'},
            {data: 'team_name_kh', name: 'team_name_kh'},
            {data: 'club_name', name: 'club_name'},
            {data: 'team_logo', name: 'team_logo'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action'},
       ],'fnCreatedRow':function(nRow,aData,iDataIndex){
        var str="";
        var active = "'active'";
        var disable = "'disable'";
        var tab = "'teams'";
        if(aData['status'] == 1){
          str ='<button class="btn btn-primary btn-xs" onclick="funcActive('+aData['id']+','+active+','+tab+')">{{trans("lang.active")}}</button>';
        }else{
          str ='<button class="btn btn-danger btn-xs" onclick="funcActive('+aData['id']+','+disable+','+tab+')">{{trans("lang.disable")}}</button>';
        }
        var image ='<img width="50px" src="{{url("")}}/'+aData['team_logo']+'"/>';
        $('td:eq(4)',nRow).html(image).addClass("text-center");
        $('td:eq(5)',nRow).html(str).addClass("text-center");
        $('td:eq(6)',nRow).addClass("text-center");
      },
      order:[[0,'asc']]
   });
});
</script>
@endsection
