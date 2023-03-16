@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.view_category')}}</h2>
              <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="panel-body">
                      <p><strong>{{trans('lang.category_name_kh')}}</strong> : {{ $category->name_kh }}</p>
                      <p><strong>{{trans('lang.category_name')}}</strong>  : {{ $category->name }}</p>
                      <p><strong>{{trans('lang.slug')}}</strong> : {{ $category->slug }}</p>
                      <p><strong>{{trans('lang.description')}}</strong> : {{ $category->body }}</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
