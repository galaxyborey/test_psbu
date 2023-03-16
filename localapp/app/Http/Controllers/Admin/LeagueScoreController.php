<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;
use App\Player;
use App\Club;
use App\League;
use App\Score;
use App\Match;
use DataTables;
use Validator;
use Redirect;
class LeagueScoreController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('admin.leaguescore.index');
  }
  public function create()
  {
      return view('admin.leaguescore.create');
  }
  public function store(Request $request)
  {
    $match = Match::find($request->match_id);
    $table = new Score();
    $table->match_id = $request->match_id;
    $table->team_left = $match->f_teamid;
    $table->team_right = $match->s_teamid;
    $table->play_left = $request->player_team_one;
    $table->play_right = $request->player_team_two;
    $table->score = $request->score;
    $table->s_minute = $request->minute;
    $table->slug = date('Y-m-d_H_i_s');
    $table->ordering = $request->ordering;
    $table->status = 1;
    $table->trash = 0;
    $table->save();
    return redirect::to('leaguescores')->with('info', trans('lang.insert_success'));
  }
  public function show($id)
  {
      return view('admin.leaguescore.show', compact('category'));
  }
  public function edit($id)
  {
      $league = Score::find($id);
      return view('admin.leaguescore.edit', compact('league'));
  }
  public function update(Request $request, $id)
  {
      // print_r($request->match_id);exit;
      $this->Validate($request, [
        // 'leaguescore_name' => 'required',
        // 'slug' => 'required',
      ]);
      $match = Match::find($request->match_id);
      $table = Score::find($id);
      $table->match_id = $request->match_id;
      $table->team_left = $match->f_teamid;
      $table->team_right = $match->s_teamid;
      $table->play_left = $request->player_team_one;
      $table->play_right = $request->player_team_two;
      $table->score = $request->score;
      $table->s_minute = $request->minute;
      $table->slug = date('Y-m-d_H_i_s');
      $table->ordering = $request->ordering;
      $table->status = 1;
      $table->trash = 0;
      $table->save();
      return redirect::to('leaguescores')->with('info', trans('lang.update_success'));
  }
  public function destroy($id)
  {
    $eeam = Score::find($id)->delete();
    return back()->with('info', trans('lang.delete_success'));
  }
}
