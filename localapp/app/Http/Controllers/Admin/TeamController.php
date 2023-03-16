<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;
use App\Category;
use App\Club;
use DataTables;
use Validator;
use Redirect;
class TeamController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('admin.team.index');
  }
  public function create()
  {
      $cubls = Club::where('status',1)->orderBy('name_en', 'ASC')->pluck('name_en', 'id');
      return view('admin.team.create',compact('cubls'));
  }
  public function store(Request $request)
  {
    $this->Validate($request, [
      'name' => 'required',
      'slug' => 'required|unique:teams,slug'
    ]);
    $table = new Team();
    $table->club_id=$request->club_id;
    $table->slug=$request->slug;
    $table->team_name_kh=$request->name_kh;
    $table->team_name_en=$request->name;
    $table->team_logo=$request->filepath;
    $table->team_noted=$request->body;
    $table->status=1;
    $table->trash=0;
    $table->save();
    return redirect::to('teams')->with('info', trans('lang.insert_success'));
  }
  public function show($id)
  {
      $category = Team::find($id);

      return view('admin.team.show', compact('category'));
  }
  public function edit($id)
  {
      $team = Team::find($id);

      return view('admin.team.edit', compact('team'));
  }
  public function update(Request $request, $id)
  {
      $this->Validate($request, [
        'name' => 'required',
        'slug' => 'required',
      ]);
      $table = Team::find($id);
      $table->club_id=$request->club_id;
      $table->slug=$request->slug;
      $table->team_name_kh=$request->name_kh;
      $table->team_name_en=$request->name;
      $table->team_logo=$request->filepath;
      $table->team_noted=$request->body;
      $table->status=1;
      $table->trash=0;
      $table->save();
      return redirect::to('teams')->with('info', trans('lang.update_success'));
  }
  public function destroy($id)
  {
    $eeam = Team::find($id)->delete();
    return back()->with('info', trans('lang.delete_success'));
  }
}
