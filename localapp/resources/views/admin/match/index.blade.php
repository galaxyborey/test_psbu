@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.list_match')}}</h2>
              <div class="nav navbar-right panel_toolbox text-right">
                <a class="collapse-link font-15"><i class="fa fa-chevron-up"></i></a>
                <a href="{{route('matchs.create')}}" class="link font-20"><i class="fa fa-plus-circle"></i></a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table class="datatable table table-striped table-bordered no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                  <tr>
                      <th width="10px">{{trans('lang.id')}}</th>
                      <th>{{trans('lang.league_name')}}</th>
                      <th>{{trans('lang.first_club')}}</th>
                      <th>{{trans('lang.second_club')}}</th>
                      <th  style="text-align: center;">{{trans('lang.time_match')}}</th>
                      <th  style="text-align: center;">{{trans('lang.match_date')}}</th>
                      <th  style="text-align: center;">{{trans('lang.score')}}</th>
                      <th  style="text-align: center;">{{trans('lang.tv_live')}}</th>
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
<div class="modal fade" id="ModalSocre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> {{trans('lang.score')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" name="score" value="" class="class_score form-control">
        <input type="hidden" name="id_score" value="" class="id_score form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('lang.cancel')}}</button>
        <button type="button" class="btn btn-primary SaveScore">{{trans('lang.save')}}</button>
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
       ajax: '{{ url("getMatchJson") }}',
       columns: [
            {data: 'id', name: 'id'},
            {data: 'leagues_name', name: 'leagues_name'},
            {data: 'team_first', name: 'team_first'},
            {data: 'team_second', name: 'team_second'},
            {data: 'time_match', name: 'time_match'},
            {data: 'date_match', name: 'date_match'},
            {data: 'score', name: 'score'},
            {data: 'tv_live', name: 'tv_live'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action'},
       ],'fnCreatedRow':function(nRow,aData,iDataIndex){
        var str="";
        var active = "'active'";
        var disable = "'disable'";
        var tab = "'matches'";
        if(aData['status'] == 1){
          str ='<button class="btn btn-primary btn-xs" onclick="funcActive('+aData['id']+','+active+','+tab+')">{{trans("lang.active")}}</button>';
        }else{
          str ='<button class="btn btn-danger btn-xs" onclick="funcActive('+aData['id']+','+disable+','+tab+')">{{trans("lang.disable")}}</button>';
        }
        $('td:eq(3)',nRow).addClass("text-center");
        $('td:eq(8)',nRow).html(str).addClass("text-center");
        $('td:eq(7)',nRow).addClass("text-center");
        $('td:eq(4)',nRow).addClass("text-center");
        $('td:eq(5)',nRow).addClass("text-center");
      },
      order:[[0,'desc']]
   });
});
function funcAddScore(val,name){
  $('.class_score').val("");
  $('.class_score').val(name);
  $('.id_score').val("");
  $('.id_score').val(val);
  $('#ModalSocre').modal();
}
$('.SaveScore').click(function(){
  var val= $('.id_score').val();
  var score= $('.class_score').val();
  var _token = $("input[name=_token]").val();
  $.ajax({
    url: "{{ url('/addorEditScore') }}",
    type: 'POST',
    data: {'id': val,'score':score,'_token': _token},
    datatype: 'json',
    success: function(data){ },
    complete: function(data){
      window.location.reload(true);
    }
  });
});
</script>
@endsection
