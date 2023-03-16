<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Position;
use Validator;
use Redirect;
class PositionController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('admin.position.index');
  }
  public function create()
  {
      return view('admin.position.create');
  }
  public function store(Request $request)
  {
    $this->Validate($request, [
      'title' => 'required',
    ]);
    $table = new Position();
    $table->config_id = 0;
    $table->cat_id = $request->cat_id;
    $table->sub_cat = $request->sub_id;
    $table->name = $request->title;
    $table->position = $request->position;
    $table->des_p = $request->body;
    $table->status=1;
    $table->trash=0;
    $table->save();
    return redirect::to('positions')->with('info', trans('lang.insert_success'));
  }
  public function show($id)
  {
      $category = Position::find($id);

      return view('admin.position.show', compact('category'));
  }
  public function edit($id)
  {
      $edit = Position::find($id);

      return view('admin.position.edit', compact('edit'));
  }
  public function update(Request $request, $id)
  {
      $table = Position::find($id);
      $table->config_id = 0;
      $table->cat_id = $request->cat_id;
      $table->sub_cat = $request->sub_id;
      $table->name = $request->title;
      $table->position = $request->position;
      $table->des_p = $request->body;
      $table->status=1;
      $table->trash=0;
      $table->save();
      return redirect::to('positions')->with('info', trans('lang.update_success'));
  }
  public function destroy($id)
  {
    $eeam = Position::find($id)->delete();
    return back()->with('info', trans('lang.delete_success'));
  }
}
