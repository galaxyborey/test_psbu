<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;
use App\Player;
use App\Club;
use App\League;
use App\Match;
use App\DateMatch;
use DataTables;
use Validator;
use Redirect;
use DB;
class MatchController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('admin.match.index');
  }
  public function create()
  {
      return view('admin.match.create');
  }
  public function store(Request $request)
  {
    // print_r($request->all());exit;
    $this->Validate($request, [
      // 'league_name' => 'required',
      'slug' => 'required|unique:leagues,slug'
    ]);
    $id_date = DB::table('date_matches')->insertGetId([
      'date_match'=>date('Y-m-d',strtotime(str_replace('/','-',$request->match_date))),
      'status'=>1,
      'trash'=>0
    ]);
    $table = new Match();
    $table->slug=$request->slug;
    $table->league_id=$request->league_id;
    $table->f_teamid=$request->club_left;
    $table->s_teamid=$request->club_rigth;
    $table->time_match=$request->time_match;
    $table->score=$request->score;
    $table->date_match=date('Y-m-d',strtotime(str_replace('/','-',$request->match_date)));
    $table->date_id= $id_date;
    $table->play_location =$request->play_location;
    $table->tv_live =$request->tv_live;
    $table->active_main =$request->on_active;
    $table->tv_img =$request->filepath;
    $table->status=1;
    $table->trash=0;
    $table->save();
    return redirect::to('matchs')->with('info', trans('lang.insert_success'));
  }
  public function show($id)
  {
      return view('admin.match.show', compact('category'));
  }
  public function edit($id)
  {
      $match = Match::find($id);

      return view('admin.match.edit', compact('match'));
  }
  public function update(Request $request, $id)
  {
      $this->Validate($request, [
        // 'match_name' => 'required',
        'slug' => 'required',
      ]);
      DB::table('date_matches')->where('id',$request->date_id)->update([
        'date_match'=>date('Y-m-d',strtotime(str_replace('/','-',$request->match_date))),
        'status'=>1,
        'trash'=>0
      ]);
      $table = Match::find($id);
      $table->slug=$request->slug.date('s');
      $table->league_id=$request->league_id;
      $table->f_teamid=$request->club_left;
      $table->s_teamid=$request->club_rigth;
      $table->time_match=$request->time_match;
      $table->score=$request->score;
      $table->date_match=date('Y-m-d',strtotime(str_replace('/','-',$request->match_date)));
      $table->date_id= $request->date_id;
      $table->play_location =$request->play_location;
      $table->tv_live =$request->tv_live;
      $table->active_main =$request->on_active;
      $table->tv_img =$request->filepath;
      $table->status=1;
      $table->trash=0;
      $table->save();
      return redirect::to('matchs')->with('info', trans('lang.update_success'));
  }
  public function destroy($id)
  {
    $eeam = Match::find($id)->delete();
    return back()->with('info', trans('lang.delete_success'));
  }
}
