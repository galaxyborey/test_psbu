<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use Validator;
use Redirect;
class SliderController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('admin.slider.index');
  }
  public function create()
  {
      return view('admin.slider.create');
  }
  public function store(Request $request)
  {
    $this->Validate($request, [
      'title' => 'required',
    ]);
    $table = new Slider();
    $table->title = $request->title;
    $table->image = $request->filepath;
    $table->des = $request->body;
    $table->status=1;
    $table->trash=0;
    $table->save();
    return redirect::to('sliders')->with('info', trans('lang.insert_success'));
  }
  public function show($id)
  {
      $category = Slider::find($id);

      return view('admin.slider.show', compact('category'));
  }
  public function edit($id)
  {
      $slider = Slider::find($id);

      return view('admin.slider.edit', compact('slider'));
  }
  public function update(Request $request, $id)
  {
      $table = Slider::find($id);
      $table->title = $request->title;
      $table->image = $request->filepath;
      $table->des = $request->body;
      $table->status=1;
      $table->trash=0;
      $table->save();
      return redirect::to('sliders')->with('info', trans('lang.update_success'));
  }
  public function destroy($id)
  {
    $eeam = Slider::find($id)->delete();
    return back()->with('info', trans('lang.delete_success'));
  }
}
