<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

use App\Category;
use App\SubCategory;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $subcat = SubCategory::leftJoin('categories','categories.id','sub_categories.category_id')
        ->select('sub_categories.*','categories.name as name_cat','categories.name_kh as name_cat_kh')
        ->orderBy('sub_categories.id', 'DESC')->paginate();
        return view('admin.subcat.index', compact('subcat'));
    }
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.subcat.create', compact('categories'));
    }
    public function store(CategoryStoreRequest $request)
    {
        $subcat = SubCategory::create($request->all());
        // return redirect()->route('subcat.edit', $subcat->id)->with('info', trans('lang.insert_success'));
        return redirect::to('subcategories');
    }
    public function show($id)
    {
        $category = SubCategory::find($id);

        return view('admin.subcat.show', compact('category'));
    }
    public function edit($id)
    {
        $category = SubCategory::find($id);
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.subcat.edit', compact('category', 'categories'));
    }
    public function update(CategoryUpdateRequest $request, $id)
    {
        $subcat = SubCategory::find($id);
        $subcat->fill($request->all())->save();
        // return redirect()->route('subcat.edit', $subcat->id)->with('info',trans('lang.update_success'));
        return redirect::to('subcategories');
    }
    public function destroy($id)
    {
        $subcat = SubCategory::find($id)->delete();
        return back()->with('info', trans('lang.delete_success'));
    }
}
