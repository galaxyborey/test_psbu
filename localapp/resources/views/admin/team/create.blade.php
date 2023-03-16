@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.add_team')}}</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br>
                  {!! Form::open(['route' => 'teams.store']) !!}

                      @include('admin.team.partials.form')

                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
