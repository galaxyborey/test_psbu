<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoryProduct;
use App\Brand;
use DataTables;
use Validator;
use Redirect;
class BrandController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.brand.index');
    }
    public function create()
    {
        return view('admin.brand.create');
    }
    public function store(Request $request)
    {
        // print_r($request->all());exit;
        $this->Validate($request, [
          'name_kh' => 'required',
          'name' => 'required',
          'slug' => 'required|unique:brands,slug'
        ]);
        $table = new Brand();
        $table->slug=$request->slug;
        $table->b_name_kh=$request->name_kh;
        $table->b_name_en=$request->name;
        $table->b_parent=$request->parent_id;
        $table->code =$request->code;
        $table->status=1;
        $table->trash=0;
        $table->save();
        return redirect::to('brands')->with('info', trans('lang.insert_success'));
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $edit = Brand::find($id);
        return view('admin.brand.edit', compact('edit'));
    }
    public function update(Request $request, $id)
    {

        $this->Validate($request, [
          'name_kh' => 'required',
          'name' => 'required',
          'slug' => 'required'
        ]);
        $table = Brand::find($id);
        $table->slug=$request->slug;
        $table->b_name_kh=$request->name_kh;
        $table->b_name_en=$request->name;
        $table->b_parent=$request->parent_id;
        $table->code =$request->code;
        $table->status=1;
        $table->trash=0;
        $table->save();
        return redirect::to('brands')->with('info', trans('lang.update_success'));
    }
    public function destroy($id)
    {
        Brand::find($id)->delete();
        return back()->with('info', trans('lang.delete_success'));
    }
}
