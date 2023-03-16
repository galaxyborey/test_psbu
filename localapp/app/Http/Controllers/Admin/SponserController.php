<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sponser;
use Validator;
use Redirect;
use DB;
class SponserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('admin.sponsor.index');
  }
  public function create()
  {
      return view('admin.sponsor.create');
  }
  public function store(Request $request)
  {
    $this->Validate($request, [
      'title' => 'required',
    ]);
    $table = new Sponser();
    $table->title = $request->title;
    $table->image = $request->filepath;
    $table->slug = date('Y-m-d_H_i_s');
    $table->links = !empty($request->link)?$request->link:url('');
    $table->des = $request->body;
    $table->status=1;
    $table->trash=0;
    $table->save();
    return redirect::to('sponsors')->with('info', trans('lang.insert_success'));
  }
  public function show($id)
  {
      $edit = Sponser::find($id);

      return view('admin.sponsor.show', compact('show'));
  }
  public function edit($id)
  {
      $edit = Sponser::find($id);

      return view('admin.sponsor.edit', compact('edit'));
  }
  public function update(Request $request, $id)
  {
    $this->Validate($request, [
      'title' => 'required',
    ]);
    $table = Sponser::find($id);
    $table->title = $request->title;
    $table->image = $request->filepath;
    $table->links = !empty($request->link)?$request->link:url('');
    $table->des = $request->body;
    $table->status=1;
    $table->trash=0;
    $table->save();
      return redirect::to('sponsors')->with('info', trans('lang.update_success'));
  }
  public function destroy($id)
  {
    $eeam = Sponser::find($id)->delete();
    return back()->with('info', trans('lang.delete_success'));
  }
}
