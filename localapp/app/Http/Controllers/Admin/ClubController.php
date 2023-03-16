<?php

namespace App\Http\Controllers\Admin;
use App\Club;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;
class ClubController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('admin.club.index');
  }
  public function create()
  {
      return view('admin.club.create');
  }
  public function store(Request $request)
  {
    $this->Validate($request, [
      'name' => 'required',
      'slug' => 'required|unique:clubs,slug'
    ]);
    $table = new Club();
    $table->slug=$request->slug;
    $table->name_kh=$request->name_kh;
    $table->name_en=$request->name;
    $table->logo=$request->filepath;
    $table->noted=$request->body;
    $table->status=1;
    $table->trash=0;
    $table->save();
    return redirect::to('clubs')->with('info', trans('lang.insert_success'));
  }
  public function show($id)
  {
      return view('admin.club.show', compact('category'));
  }
  public function edit($id)
  {
      $club = Club::find($id);

      return view('admin.club.edit', compact('club'));
  }
  public function update(Request $request, $id)
  {
      $this->Validate($request, [
        'name' => 'required',
        'slug' => 'required',
      ]);
      $table = Club::find($id);
      $table->slug=$request->slug;
      $table->name_kh=$request->name_kh;
      $table->name_en=$request->name;
      $table->logo=$request->filepath;
      $table->noted=$request->body;
      $table->status=1;
      $table->trash=0;
      $table->save();
      return redirect::to('clubs')->with('info', trans('lang.update_success'));
  }
  public function destroy($id)
  {
    $eeam = Club::find($id)->delete();
    return back()->with('info', trans('lang.delete_success'));
  }
}
