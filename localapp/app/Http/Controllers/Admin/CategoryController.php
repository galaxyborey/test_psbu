<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;

use App\Http\Controllers\Controller;

use App\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate();

        return view('admin.categories.index', compact('categories'));
    }
    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(CategoryStoreRequest $request)
    {
        $category = Category::create($request->all());

        return redirect()->route('categories.index')->with('info', trans('lang.insert_success'));
    }
    public function show($id)
    {
        $category = Category::find($id);

        return view('admin.categories.show', compact('category'));
    }
    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));
    }
    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = Category::find($id);

        $category->fill($request->all())->save();

        return redirect()->route('categories.edit', $category->id)->with('info',trans('lang.update_success'));
    }
    public function destroy($id)
    {
        $category = Category::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
