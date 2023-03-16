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
                  {!! Form::open(['route' => ['leaguescores.update', $league->id], 'method' => 'PUT']) !!}

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      {{ Form::label('leauge_name', trans('lang.league_name'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                      <select class="form-control" name="match_id">
                        <option value="0">{{trans('lang.please_selete')}} </option>
                        {{\App\Http\Controllers\HomeController::getMatchJsonList($league->match_id)}}
                      </select>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('score', trans('lang.score'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        {{ Form::text('score', $league->score, ['class' => 'form-control', 'id' => 'score','placeholder'=>' 0 - 0 ']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('player_team_one', trans('lang.player_team_one'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        {{ Form::text('player_team_one', $league->play_left, ['class' => 'form-control', 'id' => 'player_team_one']) }}
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('player_team_two', trans('lang.player_team_two'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        {{ Form::text('player_team_two', $league->play_right, ['class' => 'form-control', 'id' => 'player_team_two']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('minute', trans('lang.minute'),['class' => 'col-md-6 col-sm-6 col-xs-12']) }}
                        {{ Form::text('minute', $league->s_minute, ['class' => 'form-control', 'id' => 'minute']) }}
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        {{ Form::label('ordering', trans('lang.ordering'),['class' => 'col-md-3 col-sm-6 col-xs-12']) }}
                        {{ Form::text('ordering', $league->ordering, ['class' => 'form-control', 'id' => 'ordering']) }}
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
