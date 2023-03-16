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
use App\ChampionAward;
use DataTables;
use Validator;
use Redirect;
class ChampionController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('admin.champion.index');
  }
  public function create()
  {
      return view('admin.champion.create');
  }
  public function store(Request $request)
  {
    $this->Validate($request, [
      'title' => 'required',
      'slug' => 'required|unique:category_products,slug'
    ]);
    $table = new ChampionAward();
    $table->match_id = $request->match_id;
    $table->league_id = $request->league_id;
    $table->title = $request->title;
    $table->slug =  $request->slug;
    $table->image = $request->filepath;
    $table->status = 1;
    $table->trash = 0;
    $table->save();
    return redirect::to('champions')->with('info', trans('lang.insert_success'));
  }
  public function show($id)
  {
      return view('admin.champion.show', compact('category'));
  }
  public function edit($id)
  {
      $edit = ChampionAward::find($id);
      return view('admin.champion.edit', compact('edit'));
  }
  public function update(Request $request, $id)
  {
      $this->Validate($request, [
        'title' => 'required',
        'slug' => 'required',
      ]);
      $table = ChampionAward::find($id);
      $table->match_id = $request->match_id;
      $table->league_id = $request->league_id;
      $table->title = $request->title;
      $table->slug =  $request->slug;
      $table->image = $request->filepath;
      $table->status = 1;
      $table->trash = 0;
      $table->save();
      return redirect::to('champions')->with('info', trans('lang.update_success'));
  }
  public function destroy($id)
  {
    $eeam = ChampionAward::find($id)->delete();
    return back()->with('info', trans('lang.delete_success'));
  }
}
