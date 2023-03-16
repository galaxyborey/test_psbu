@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{trans('lang.edit_league')}}</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br>
                  {!! Form::open(['route' => ['leaguescoredetails.update', $league->id], 'method' => 'PUT']) !!}

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      {{ Form::label('league_name', trans('lang.league_name'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                      <select class="form-control" name="league_id">
                        <option value="0">{{trans('lang.please_selete')}} </option>
                        {{\App\Http\Controllers\HomeController::getLeagueList($league->league_id)}}
                      </select>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      {{ Form::label('leagues_name', trans('lang.club_name'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                      <select class="form-control" name="club_id">
                        <option value="0">{{trans('lang.please_selete')}} </option>
                        {{\App\Http\Controllers\HomeController::getClubList($league->team_id)}}
                      </select>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 col-xs-12">
                        {{ Form::label('P','P',['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        {{ Form::text('P', $league->p, ['class' => 'form-control', 'id' => 'P']) }}
                    </div>
                    <div class="form-group col-md-3 col-sm-3 col-xs-12">
                        {{ Form::label('W','W',['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        {{ Form::text('W', $league->w, ['class' => 'form-control', 'id' => 'W']) }}
                    </div>
                    <div class="form-group col-md-3 col-sm-3 col-xs-12">
                        {{ Form::label('D','D',['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        {{ Form::text('D', $league->d, ['class' => 'form-control', 'id' => 'D']) }}
                    </div>
                    <div class="form-group col-md-3 col-sm-3 col-xs-12">
                        {{ Form::label('L','L',['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        {{ Form::text('L', $league->l, ['class' => 'form-control', 'id' => 'L']) }}
                    </div>
                    <div class="form-group col-md-3 col-sm-3 col-xs-12">
                        {{ Form::label('F','F',['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        {{ Form::text('F', $league->f, ['class' => 'form-control', 'id' => 'F']) }}
                    </div>
                    <div class="form-group col-md-3 col-sm-3 col-xs-12">
                        {{ Form::label('A','A',['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        {{ Form::text('A', $league->a, ['class' => 'form-control', 'id' => 'A']) }}
                    </div>
                    <div class="form-group col-md-3 col-sm-3 col-xs-12">
                        {{ Form::label('GD','GD ',['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        {{ Form::text('GD', $league->gd, ['class' => 'form-control', 'id' => 'GD']) }}
                    </div>
                    <div class="form-group col-md-3 col-sm-3 col-xs-12">
                        {{ Form::label('PTS','PTS ',['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        {{ Form::text('PTS', $league->pts, ['class' => 'form-control', 'id' => 'PTS']) }}
                    </div>
                    <div class="form-group">
                        <!-- {{ Form::submit(trans('lang.save'), ['class' => 'btn btn-sm btn-primary fa fa-save']) }} -->
                        <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{trans('lang.save')}} </button>
                        <a href="{{route('leaguescores.index')}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> {{trans('lang.cancel')}}</a>
                    </div>


                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
