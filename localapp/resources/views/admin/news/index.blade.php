@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.list_news')}}</h2>
              <div class="nav navbar-right panel_toolbox text-right">
                <a class="collapse-link font-15"><i class="fa fa-chevron-up"></i></a>
                <a href="{{route('admin_news.create')}}" class="link font-20"><i class="fa fa-plus-circle"></i></a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table class="datatable table table-striped table-bordered no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                  <tr>
                      <th width="10px">{{trans('lang.id')}}</th>
                      <th>{{trans('lang.name')}}</th>
                      <th>{{trans('lang.name_kh')}}</th>                      
                      <th  style="text-align: center;">{{trans('lang.category')}}</th>
                      <!-- <th  style="text-align: center;">{{trans('lang.sub_category')}}</th> -->
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
       ajax: '{{ url("getNewsJson") }}',
       columns: [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'title_kh', name: 'title_kh'},
            {data: 'category', name: 'category'},            
            // {data: 'sub_category', name: 'sub_category'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action'},
       ],'fnCreatedRow':function(nRow,aData,iDataIndex){
        var str="";
        var active = "'active'";
        var disable = "'disable'";
        var tab = "'news'";
        if(aData['status'] == 1){
          str ='<button class="btn btn-primary btn-xs" onclick="funcActive('+aData['id']+','+active+','+tab+')">{{trans("lang.active")}}</button>';
        }else{
          str ='<button class="btn btn-danger btn-xs" onclick="funcActive('+aData['id']+','+disable+','+tab+')">{{trans("lang.disable")}}</button>';
        }
        $('td:eq(3)',nRow).addClass("text-center");
        $('td:eq(4)',nRow).html(str).addClass("text-center");
        $('td:eq(6)',nRow).addClass("text-center");
        $('td:eq(4)',nRow).addClass("text-center");
      },
      order:[[0,'desc']]
   });
});
</script>
@endsection
