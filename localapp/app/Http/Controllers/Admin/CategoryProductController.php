<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoryProduct;
use DataTables;
use Validator;
use Redirect;
class CategoryProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.productcat.index');
    }
    public function create()
    {
        return view('admin.productcat.create');
    }
    public function store(Request $request)
    {
        // print_r($request->all());exit;
        $this->Validate($request, [
          'name_kh' => 'required',
          'name' => 'required',
          'slug' => 'required|unique:category_products,slug'
        ]);
        $table = new CategoryProduct();
        $table->slug=$request->slug;
        $table->name_kh=$request->name_kh;
        $table->name_en=$request->name;
        $table->parent_id=$request->parent_id;
        $table->code =$request->code;
        $table->status=1;
        $table->trash=0;
        $table->save();
        return redirect::to('productcats')->with('info', trans('lang.insert_success'));
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $edit = CategoryProduct::find($id);
        return view('admin.productcat.edit', compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $this->Validate($request, [
          'name_kh' => 'required',
          'name' => 'required',
          'slug' => 'required'
        ]);
        $table = CategoryProduct::find($id);
        $table->slug=$request->slug;
        $table->name_kh=$request->name_kh;
        $table->name_en=$request->name;
        $table->parent_id=$request->parent_id;
        $table->code =$request->code;
        $table->status=1;
        $table->trash=0;
        $table->save();
        return redirect::to('productcats')->with('info', trans('lang.update_success'));
    }
    public function destroy($id)
    {
        CategoryProduct::find($id)->delete();
        return back()->with('info', trans('lang.delete_success'));
    }
}
