@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.list_product')}}</h2>
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
                      <th>{{trans('lang.code')}}</th>
                      <th>{{trans('lang.name')}}</th>                      
                      <th  style="text-align: center;">{{trans('lang.image')}}</th>
                      <th  style="text-align: center;">{{trans('lang.price')}}</th>
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
       ajax: '{{ url("getProductsJson") }}',
       columns: [
            {data: 'id', name: 'id'},
            {data: 'p_code', name: 'p_code'},
            {data: 'p_name', name: 'p_name'},
            {data: 'image', name: 'image'},            
            {data: 'p_sale_price', name: 'p_sale_price'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action'},
       ],'fnCreatedRow':function(nRow,aData,iDataIndex){
        var str="";
        var active = "'active'";
        var disable = "'disable'";
        var tab = "'products'";
        if(aData['status'] == 1){
          str ='<button class="btn btn-primary btn-xs" >Arrivals</button>';
        }else if(aData['status'] == 2){
          str ='<button class="btn btn-primary btn-xs" >Latest </button>';
        }else if(aData['status'] == 3){
          str ='<button class="btn btn-primary btn-xs" >Best Sellers</button>';
        }
        else{
          str ='<button class="btn btn-danger btn-xs" >New Product</button>';
        }
        var image ='<img width="50px" src="{{url("")}}/'+aData['image']+'"/>';
        $('td:eq(3)',nRow).html(image).addClass("text-center");
        $('td:eq(5)',nRow).html(str).addClass("text-center");
        $('td:eq(6)',nRow).addClass("text-center");
        $('td:eq(4)',nRow).addClass("text-center");
      },
      order:[[0,'asc']]
   });
});
</script>
@endsection
