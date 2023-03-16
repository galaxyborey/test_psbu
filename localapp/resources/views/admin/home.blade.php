@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
          <div class="count">{{\App\Http\Controllers\HomeController::getCountAll('categories')}}</div>
          <h3>{{trans('lang.category')}}</h3>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-comments-o"></i></div>
          <div class="count">{{\App\Http\Controllers\HomeController::getCountAll('users')}}</div>
          <h3>{{trans('lang.user')}}</h3>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
          <div class="count">{{\App\Http\Controllers\HomeController::getCountAll('news')}}</div>
          <h3>{{trans('lang.news')}}</h3>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-check-square-o"></i></div>
          <div class="count">All</div>
          <h3>{{trans('lang.image')}}</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>{{trans('lang.list_news')}}</h2>
            <ul class="nav navbar-right">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table class="datatablenews table table-striped table-bordered no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                  <tr>
                      <th width="10px">{{trans('lang.id')}}</th>
                      <th>{{trans('lang.name')}}</th>                   
                      <th  style="text-align: center;">{{trans('lang.category')}}</th>
                      <th  style="text-align: center;">{{trans('lang.sub_category')}}</th>
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
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
  $('.datatablenews').DataTable({
       processing: true,
       serverSide: true,
       ajax: '{{ url("getNewsJson") }}',
       columns: [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'category', name: 'category'},            
            {data: 'sub_category', name: 'sub_category'},
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

