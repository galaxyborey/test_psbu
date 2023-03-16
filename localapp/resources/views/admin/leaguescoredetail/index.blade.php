@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.list_league_score_detail')}}</h2>
              <div class="nav navbar-right panel_toolbox text-right">
                <a class="collapse-link font-15"><i class="fa fa-chevron-up"></i></a>
                <a href="{{route('leaguescoredetails.create')}}" class="link font-20"><i class="fa fa-plus-circle"></i></a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table class="datatable table table-striped table-bordered no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                  <tr>
                      <th width="10px">{{trans('lang.id')}}</th>
                      <th>{{trans('lang.image')}}</th>
                      <th>{{trans('lang.club_name')}}</th>
                      <th  style="text-align: center;">P</th>
                      <th  style="text-align: center;">W</th>
                      <th  style="text-align: center;">D</th>
                      <th  style="text-align: center;">L</th>
                      <th  style="text-align: center;">F</th>
                      <th  style="text-align: center;">A</th>
                      <th  style="text-align: center;">GD</th>
                      <th  style="text-align: center;">PTS</th>
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
       ajax: '{{ url("getScoreDetailJson") }}',
       columns: [
            {data: 'id', name: 'id'},
            {data: 'logo', name: 'logo'},
            {data: 'club_name', name: 'club_name'},
            {data: 'p', name: 'p'},
            {data: 'w', name: 'w'},
            {data: 'd', name: 'd'},
            {data: 'l', name: 'l'},
            {data: 'f', name: 'f'},
            {data: 'a', name: 'a'},
            {data: 'gd', name: 'fd'},
            {data: 'pts', name: 'pts'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action'},
       ],'fnCreatedRow':function(nRow,aData,iDataIndex){
        var str="";
        var active = "'active'";
        var disable = "'disable'";
        var tab = "'detail_leagues'";
        if(aData['status'] == 1){
          str ='<button class="btn btn-primary btn-xs" onclick="funcActive('+aData['id']+','+active+','+tab+')">{{trans("lang.active")}}</button>';
        }else{
          str ='<button class="btn btn-danger btn-xs" onclick="funcActive('+aData['id']+','+disable+','+tab+')">{{trans("lang.disable")}}</button>';
        }
        var image ='<img width="50px" src="{{url("")}}/'+aData['logo']+'"/>';
        $('td:eq(1)',nRow).html(image).addClass("text-center");
        $('td:eq(11)',nRow).html(str).addClass("text-center");
        $('td:eq(3)',nRow).addClass("text-center");
        $('td:eq(4)',nRow).addClass("text-center");
        $('td:eq(5)',nRow).addClass("text-center");
        $('td:eq(6)',nRow).addClass("text-center");
        $('td:eq(7)',nRow).addClass("text-center");
        $('td:eq(8)',nRow).addClass("text-center");
        $('td:eq(9)',nRow).addClass("text-center");
        $('td:eq(10)',nRow).addClass("text-center");
        $('td:eq(12)',nRow).addClass("text-center");
      },
      order:[[0,'desc']]
   });
});
</script>
@endsection
