<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoryProduct;
use App\Measure;
use App\Product;
use App\Photo;
use DataTables;
use Validator;
use Redirect;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.product.index');
    }
    public function create()
    {
        return view('admin.product.create');
    }
    public function store(Request $request)
    {
        $this->Validate($request, [
          'title' => 'required',
          'code' => 'required',
          'slug' => 'required|unique:products,slug',
          'selling_price' => 'required',
        ]);
        $image = !empty($request->filepath)?$request->filepath:'';
        $table = new Product();
        $table->cat_id=$request->category_id;
        $table->img_id=0;
        $table->measure_id =$request->measure_id;
        $table->brand_id =$request->brand_id;
        $table->tag_id =$request->sta_id;
        $table->p_name =$request->title;
        $table->p_code =$request->code;
        $table->slug =$request->slug;
        $table->p_qty =$request->qty;
        $table->p_price =$request->price;
        $table->p_sale_price =$request->selling_price;
        $table->p_discount =0;
        $table->image =!empty($image[0])?$image[0]:'';
        $table->des =$request->body;
        $table->votes =0;
        $table->status=$request->sta_id;
        $table->trash=0;
        $table->save();
        if($image !=''){
            for ($i=0; $i < count($image); $i++) { 
                $tp = new Photo;
                $tp->product_id = $table->id;
                $tp->gellary_id = 0;
                $tp->article_id = 0;
                $tp->title = $image[$i];
                $tp->image = $image[$i];
                $tp->slug = $i.'_'.date('Y-m-d-H-i-s');
                $tp->status=1;
                $tp->trash=0;
                $tp->save();
            }
        }
        return redirect::to('products')->with('info', trans('lang.insert_success'));
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $edit = Product::find($id);
        $photo= Photo::where('product_id',$id)->get();
        return view('admin.product.edit', compact('edit','photo'));
    }
    public function update(Request $request, $id)
    {
       $this->Validate($request, [
          'title' => 'required',
          'code' => 'required',
          'slug' => 'required',
          'selling_price' => 'required',
        ]);
        $image = !empty($request->filepath)?$request->filepath:'';
        $table = Product::find($id);
        $table->cat_id=$request->category_id;
        $table->img_id=0;
        $table->measure_id =$request->measure_id;
        $table->brand_id =$request->brand_id;
        $table->tag_id =$request->sta_id;
        $table->p_name =$request->title;
        $table->p_code =$request->code;
        $table->slug =$request->slug;
        $table->p_qty =$request->qty;
        $table->p_price =$request->price;
        $table->p_sale_price =$request->selling_price;
        $table->p_discount =0;
        $table->image =!empty($image[0])?$image[0]:'';
        $table->des =$request->body;
        $table->votes =0;
        $table->status=$request->sta_id;
        $table->trash=0;
        $table->save();
        if($image !=''){
            Photo::where('product_id',$id)->delete();
            for ($i=0; $i < count($image); $i++) { 
                $tp = new Photo;
                $tp->product_id = $id;
                $tp->gellary_id = 0;
                $tp->article_id = 0;
                $tp->title = $image[$i];
                $tp->image = $image[$i];
                $tp->slug = $i.'_'.date('Y-m-d-H-i-s');
                $tp->status=1;
                $tp->trash=0;
                $tp->save();
            }
        }
        return redirect::to('products')->with('info', trans('lang.update_success'));
    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        Photo::where('product_id',$id)->delete();
        return back()->with('info', trans('lang.delete_success'));
    }
}
