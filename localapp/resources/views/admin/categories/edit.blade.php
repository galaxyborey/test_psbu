@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.edit_category')}}</h2>
              <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br>
                    {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}

                        @include('admin.categories.partials.form')

                    {!! Form::close() !!}
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
