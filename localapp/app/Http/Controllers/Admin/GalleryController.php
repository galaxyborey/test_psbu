<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\MatchGallery;
use Validator;
use Redirect;
class GalleryController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('admin.gallery.index');
  }
  public function create()
  {
      return view('admin.gallery.create');
  }
  public function store(Request $request)
  {
    // print_r($request->all());exit;
    $this->Validate($request, [
      'title' => 'required',
    ]);
    $table = new MatchGallery();
    $table->title = $request->title;
    $table->catalog = $request->catalog;
    $table->image = $request->filepath;
    $table->slug = date('Y-m-d_H_i_s');
    $table->des = $request->body;
    $table->status=1;
    $table->trash=0;
    $table->save();
    return redirect::to('matchgallerys')->with('info', trans('lang.insert_success'));
  }
  public function show($id)
  {
      $edit = MatchGallery::find($id);

      return view('admin.gallery.show', compact('show'));
  }
  public function edit($id)
  {
      $edit = MatchGallery::find($id);

      return view('admin.gallery.edit', compact('edit'));
  }
  public function update(Request $request, $id)
  {
    $this->Validate($request, [
      'title' => 'required',
    ]);
    $table = MatchGallery::find($id);
    $table->title = $request->title;
    $table->catalog = $request->catalog;
    $table->image = $request->filepath;
    $table->des = $request->body;
    $table->status=1;
    $table->trash=0;
    $table->save();
      return redirect::to('matchgallerys')->with('info', trans('lang.update_success'));
  }
  public function destroy($id)
  {
    $eeam = MatchGallery::find($id)->delete();
    return back()->with('info', trans('lang.delete_success'));
  }
}
