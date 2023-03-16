<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;
use App\Player;
use App\Club;
use App\League;
use DataTables;
use Validator;
use Redirect;
class LeagueController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('admin.league.index');
  }
  public function create()
  {
      return view('admin.league.create');
  }
  public function store(Request $request)
  {
    $this->Validate($request, [
      'league_name' => 'required',
      'slug' => 'required|unique:leagues,slug'
    ]);
    $table = new League();
    $table->slug=$request->slug;
    $table->name_kh=$request->league_name_kh;
    $table->name_en=$request->league_name;
    $table->logo=$request->filepath;
    $table->season=$request->season;
    $table->start_date=date('Y-m-d',strtotime(str_replace('/','-',$request->start_date)));
    $table->end_date= date('Y-m-d',strtotime(str_replace('/','-',$request->end_date)));
    $table->description =$request->body;
    $table->ordering =$request->ordering;
    $table->status=1;
    $table->trash=0;
    $table->active= !empty($request->active)?$request->active:0;
    $table->save();
    return redirect::to('leagues')->with('info', trans('lang.insert_success'));
  }
  public function show($id)
  {
      return view('admin.league.show', compact('category'));
  }
  public function edit($id)
  {
      $league = League::find($id);

      return view('admin.league.edit', compact('league'));
  }
  public function update(Request $request, $id)
  {
      $this->Validate($request, [
        'league_name' => 'required',
        'slug' => 'required',
      ]);
      $table = League::find($id);
      $table->slug=$request->slug;
      $table->name_kh=$request->league_name_kh;
      $table->name_en=$request->league_name;
      $table->logo=$request->filepath;
      $table->season=$request->season;
      $table->start_date=date('Y-m-d',strtotime(str_replace('/','-',$request->start_date)));
      $table->end_date= date('Y-m-d',strtotime(str_replace('/','-',$request->end_date)));
      $table->description =$request->body;
      $table->ordering =$request->ordering;
      $table->status=1;
      $table->trash=0;
      $table->active= !empty($request->active)?$request->active:0;
      $table->save();
      return redirect::to('leagues')->with('info', trans('lang.update_success'));
  }
  public function destroy($id)
  {
    $eeam = League::find($id)->delete();
    return back()->with('info', trans('lang.delete_success'));
  }
}
