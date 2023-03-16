<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;
use App\Player;
use App\Club;
use DataTables;
use Validator;
use Redirect;
class PlayerController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('admin.player.index');
  }
  public function create()
  {
      $cubls = Club::where('status',1)->orderBy('name_en', 'ASC')->pluck('name_en', 'id');
      return view('admin.player.create',compact('cubls'));
  }
  public function store(Request $request)
  {
    $this->Validate($request, [
      'play_name' => 'required',
      'slug' => 'required|unique:players,slug'
    ]);
    $table = new Player();
    $table->team_id=$request->team_id;
    $table->slug=$request->slug;
    $table->play_name=$request->play_name;
    $table->play_code=$request->player_code;
    $table->play_image=$request->filepath;
    $table->play_description=$request->body;
    $table->dob=date('Y-m-d',strtotime(str_replace('/','-',$request->dob)));
    $table->height=$request->height;
    $table->weight=$request->weight;
    $table->status=1;
    $table->trash=0;
    $table->save();
    return redirect::to('players')->with('info', trans('lang.insert_success'));
  }
  public function show($id)
  {
      $Player = Player::find($id);

      return view('admin.player.show', compact('Player'));
  }
  public function edit($id)
  {
      $player = Player::find($id);

      return view('admin.player.edit', compact('player'));
  }
  public function update(Request $request, $id)
  {
      $this->Validate($request, [
        'play_name' => 'required',
        'slug' => 'required',
      ]);
      $table = Player::find($id);
      $table->team_id=$request->team_id;
      $table->slug=$request->slug;
      $table->play_name=$request->play_name;
      $table->play_code=$request->player_code;
      $table->play_image=$request->filepath;
      $table->play_description=$request->body;
      $table->dob=$request->dob;
      $table->height=$request->height;
      $table->weight=$request->weight;
      $table->status=1;
      $table->trash=0;
      $table->save();
      return redirect::to('players')->with('info', trans('lang.update_success'));
  }
  public function destroy($id)
  {
    $eeam = Player::find($id)->delete();
    return back()->with('info', trans('lang.delete_success'));
  }
}
