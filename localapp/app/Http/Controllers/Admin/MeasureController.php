<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Measure;
use DataTables;
use Validator;
use Redirect;
class MeasureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.measure.index');
    }
    public function create()
    {
        return view('admin.measure.create');
    }
    public function store(Request $request)
    {
        // print_r($request->all());exit;
        $this->Validate($request, [
          'name_kh' => 'required',
          'name' => 'required',
        ]);
        $table = new Measure();
        $table->name_kh=$request->name_kh;
        $table->name_en=$request->name;
        $table->code =$request->code;
        $table->status=1;
        $table->trash=0;
        $table->save();
        return redirect::to('measures')->with('info', trans('lang.insert_success'));
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $edit = Measure::find($id);
        return view('admin.measure.edit', compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $this->Validate($request, [
          'name_kh' => 'required',
          'name' => 'required',
        ]);
        $table = Measure::find($id);
        $table->name_kh=$request->name_kh;
        $table->name_en=$request->name;
        $table->code =$request->code;
        $table->status=1;
        $table->trash=0;
        $table->save();
        return redirect::to('measures')->with('info', trans('lang.update_success'));
    }
    public function destroy($id)
    {
        Measure::find($id)->delete();
        return back()->with('info', trans('lang.delete_success'));
    }
}
