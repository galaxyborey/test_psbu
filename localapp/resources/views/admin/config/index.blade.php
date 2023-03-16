@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2> Message Contact Us</h2>
              <div class="nav navbar-right panel_toolbox text-right">
                <a class="collapse-link font-15"><i class="fa fa-chevron-up"></i></a>
                <a href="{{route('products.create')}}" class="link font-20"><i class="fa fa-plus-circle"></i></a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table class="datatable table table-striped table-bordered no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                  <tr>
                      <th width="10px">{{trans('lang.id')}}</th>
                      <th >Full Name </th>
                      <th style="text-align: center;">{{trans('lang.from')}}</th>                      
                      <th style="text-align: center;">{{trans('lang.to')}}</th>                      
                      <th  style="text-align: center;">{{trans('lang.phone')}}</th>
                      <th  style="text-align: center;">Subject</th>
                      <th  style="text-align: center;">Message</th>
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
       ajax: '{{ url("getSendMassageJson") }}',
       columns: [
            {data: 'id', name: 'id'},
            {data: 'full_name', name: 'full_name'},
            {data: 'from', name: 'from'},
            {data: 'to', name: 'to'},            
            {data: 'phone', name: 'phone'},
            {data: 'subject', name: 'subject'},
            {data: 'message', name: 'message'},
            {data: 'action', name: 'action'},
       ],'fnCreatedRow':function(nRow,aData,iDataIndex){
        $('td:eq(3)',nRow).addClass("text-center");
        $('td:eq(5)',nRow).addClass("text-center");
        $('td:eq(6)',nRow).addClass("text-center");
        $('td:eq(7)',nRow).addClass("text-center");
        $('td:eq(4)',nRow).addClass("text-center");
      },
      order:[[0,'desc']]
   });
});
</script>
@endsection
