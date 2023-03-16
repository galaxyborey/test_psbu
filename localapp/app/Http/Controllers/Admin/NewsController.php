<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use DataTables;
use Validator;
use Redirect;
class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.news.index');
    }
    public function create()
    {
        return view('admin.news.create');
    }
    public function store(Request $request)
    {
        $this->Validate($request, [
          // 'name_kh' => 'required',
          'name' => 'required',
          'slug' => 'required|unique:news,slug'
        ]);
        $table = new News();
        $table->user_id=0;
        $table->cat_id=$request->cat_id;
        $table->sub_id=0;
        $table->title =$request->name;
        $table->catalog =$request->catalog;
        $table->title_kh =$request->name_kh;
        $table->file =$request->filepath;
        $table->slug =date('H_i_s').$request->slug;
        $table->excerpt =$request->excerpt;
        $table->excerpt_kh =$request->excerpt_kh;
        $table->body =$request->body;
        $table->body_kh =$request->body_kh;
        $table->status=1;
        $table->trash=0;
        $table->save();
        return redirect::to('admin_news')->with('info', trans('lang.insert_success'));
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $edit = News::find($id);
        return view('admin.news.edit', compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $this->Validate($request, [
          // 'name_kh' => 'required',
          'name' => 'required',
        ]);
        $table = News::find($id);
        $table->user_id=0;
        $table->cat_id=$request->cat_id;
        $table->sub_id= 0;
        $table->catalog =$request->catalog;
        $table->title =$request->name;
        $table->title_kh =$request->name_kh;
        $table->file =$request->filepath;
        $table->slug =$request->slug;
        $table->excerpt =$request->excerpt;
        $table->excerpt_kh =$request->excerpt_kh;
        $table->body =$request->body;
        $table->body_kh =$request->body_kh;
        $table->status=1;
        $table->trash=0;
        $table->save();
        return redirect::to('admin_news')->with('info', trans('lang.update_success'));
    }
    public function destroy($id)
    {
        News::where('id',$id)->update(['trash'=>1]);
        return back()->with('info', trans('lang.delete_success'));
    }
}
