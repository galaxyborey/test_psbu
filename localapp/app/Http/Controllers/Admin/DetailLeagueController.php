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
use App\DetailLeague;
use DataTables;
use Validator;
use Redirect;
class DetailLeagueController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('admin.leaguescoredetail.index');
  }
  public function create()
  {
      return view('admin.leaguescoredetail.create');
  }
  public function store(Request $request)
  {
    $this->Validate($request, [
      'league_id' => 'required',
      'club_id' => 'required',
      'P' => 'required',
      'W' => 'required',
      'D' => 'required',
      'L' => 'required',
      'F' => 'required',
      'A' => 'required',
      'GD' => 'required',
      'PTS' => 'required',
    ]);
    $table = new DetailLeague();
    $table->league_id = $request->league_id;
    $table->team_id = $request->club_id;
    $table->p = $request->P;
    $table->w = $request->W;
    $table->d = $request->D;
    $table->l = $request->L;
    $table->f = $request->F;
    $table->a = $request->A;
    $table->gd = $request->GD;
    $table->pts = $request->PTS;
    $table->slug = date('Y-m-d_H_i_s');
    $table->action = 1;
    $table->color = 0;
    $table->status = 1;
    $table->trash = 0;
    $table->save();
    return redirect::to('leaguescoredetails')->with('info', trans('lang.insert_success'));
  }
  public function show($id)
  {
      return view('admin.leaguescoredetail.show', compact('category'));
  }
  public function edit($id)
  {
      $league = DetailLeague::find($id);
      return view('admin.leaguescoredetail.edit', compact('league'));
  }
  public function update(Request $request, $id)
  {
    $this->Validate($request, [
      'league_id' => 'required',
      'club_id' => 'required',
      'P' => 'required',
      'W' => 'required',
      'D' => 'required',
      'L' => 'required',
      'F' => 'required',
      'A' => 'required',
      'GD' => 'required',
      'PTS' => 'required',
    ]);
    $table = DetailLeague::find($id);
    $table->league_id = $request->league_id;
    $table->team_id = $request->club_id;
    $table->p = $request->P;
    $table->w = $request->W;
    $table->d = $request->D;
    $table->l = $request->L;
    $table->f = $request->F;
    $table->a = $request->A;
    $table->gd = $request->GD;
    $table->pts = $request->PTS;
    $table->action = 1;
    $table->color = 0;
    $table->status = 1;
    $table->trash = 0;
    $table->save();
      return redirect::to('leaguescoredetails')->with('info', trans('lang.update_success'));
  }
  public function destroy($id)
  {
    $eeam = DetailLeague::find($id)->delete();
    return back()->with('info', trans('lang.delete_success'));
  }
}
