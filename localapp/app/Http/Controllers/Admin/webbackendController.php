<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Category;
use App\SubCategory;
use App\Model\subi_categories;
use App\Model\pages_categories;
use App\DataConfig;
use App\ChampionAward;
use App\Player;
use App\League;
use App\News;
use App\Match;
use App\Score;
use App\Sponser; 
use App\DetailLeague;
use App\CategoryProduct;
use App\Brand;
use App\Measure;
use App\MatchGallery;
use App\Product;
use App\Position;
use App\User;
use App\SendMail;
use App\Model\tbarticleTypes;
use Yajra\Datatables\Facades\Datatables;
use App\Model\tbl_peoples;
use App\Model\tbl_sponsors;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
date_default_timezone_set("Asia/Bangkok");

class webbackendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function listcategories()
    {
        $categories = Category::orderBy('ordering', 'ASC')->paginate();
        $subcate = SubCategory::where('subcat_active','1')->get();
        $pages_cate = pages_categories::where('pcate_status','1')->get();
        return view('webbackend.categories.catelists', compact('categories','subcate','pages_cate'));
    }
    public function createcategories()
    {
      $pages_cate = pages_categories::where('pcate_status','1')->get();
      return view('webbackend.categories.categories', compact('pages_cate'));
    }
    public function categoriesNewSave(Request $request)
    {
        // print_r($request->all());exit;
        $this->Validate($request, [
            'name_kh' => 'required',
            'name' => 'required',
            'slug' => 'required|unique:categories,slug'
          ]);
          $table = new Category();
                    
          $table->catepageid  = $request->Input('pagecate');
          $table->name_kh  = $request->Input('name_kh');
          $table->name  = $request->Input('name');
          $table->slug  = $request->Input('slug');
          $table->cat_active  = $request->Input('status');
          $table->ordering  = $request->Input('ordering');
          $table->short_body  = $request->Input('excerpt');
          $table->short_body_kh  = $request->Input('excerpt_kh');
          $table->body  = $request->Input('body');
          $table->bodykh  = $request->Input('body_kh');
          $table->created_at   = date('Y-m-d H:i:s');

          $table->save();
          if($request->Input('btnSave') == "save"){
            return Redirect::to('adminsite/catemenu/catelist')->with('info', trans('lang.insert_success'));
          }else{
            return redirect::to('adminsite/catemenu/create')->with('info', trans('lang.insert_success'));
          }
          
    }

    public function catemenuEdit($id)
    {
        $category = Category::find($id);
        $categories = Category::orderBy('ordering', 'ASC')->paginate();
        $subcate = SubCategory::where('subcat_active','1')->get();
        $pages_cate = pages_categories::where('pcate_status','1')->get();
        return view('webbackend.categories.categoriesedit', compact('category','categories','subcate','pages_cate'));
    }
    public function categoriesUpdateSave(Request $request)
    {
      //var_dump($_POST); 
      $this->Validate($request, [
          'name_kh' => 'required',
          'name' => 'required',
          'slug' => 'required'
        ]);
      $id           = $request->Input('cateid');
      $catepageid  = $request->Input('pagecate');
      $name_kh      = $request->Input('name_kh');
      $name         = $request->Input('name');
      $slug         = $request->Input('slug');
      $status       = $request->Input('status');
      $ordering     = $request->Input('ordering');
      $short_body   = $request->Input('excerpt');
      $short_body_kh   = $request->Input('excerpt_kh');
      $body         = $request->Input('body');
      $body_kh      = $request->Input('body_kh');
      $updated_at   = date('Y-m-d H:i:s');

      DB::update('update categories set catepageid = ?,name_kh = ?,name = ?,slug = ?,cat_active = ?,ordering = ?,short_body=?,short_body_kh=?,bodykh=?,body=?, updated_at=? where id = ?',[$catepageid,$name_kh,$name,$slug,$status,$ordering,$short_body,$short_body_kh,$body_kh,$body,$updated_at,$id]);
                $message = "Data has been updated Successfully!";

                if($request->Input('btnUpdate') == "UpdateSave"){
                    return Redirect::to('adminsite/catemenu/catelist')->with('message',$message);
                }

    }
    
//menu 2
    public function subcateNew()
    {
      $catemenu = DB::table('categories')->where('cat_trash','0')
                    ->where('cat_active','1')->get();
      $pages_cate = pages_categories::where('pcate_status','1')->get();
      return view('webbackend.categories.sub_catnew', compact('catemenu','pages_cate'));
    }
    public function subCategoriesNewSave(Request $request)
    {
      /** var_dump($_POST);*/
      
      $validation = Validator::make($request->all(), array('name' => 'min:2|required', 'name_kh' => 'required','slug' => 'required'));
        if($validation->fails()){
            return Redirect::to('adminsite/catemenu/subcatemenu/create')->withErrors($validation);
        }else{
            SubCategory::insert([
                'user_id'=> $request->Input('userid'),
                'category_id'=> $request->Input('catemaster'),
                'scatepageid'=> $request->Input('pagecate'),
                'name_kh'=> $request->Input('name_kh'),
                'name'=> $request->Input('name'),
                'slug'=> $request->Input('slug'),
                'sub_ordering'  => $request->Input('ordering'),
                'subcat_active'=> $request->Input('status'),
                'body'=> $request->Input('body'),
                'subbodykh'=> $request->Input('body_kh'),
                'created_at'=>date('Y-m-d H:i:s')
            ]);
            if($request->Input('btnSave') == "save_new"){
                return Redirect::to('adminsite/catemenu/subcatemenu/create')->with('message','Data has been Insert Successfully !');
            }else{
                return Redirect::to('adminsite/catemenu/subcatemenu/catelists')->with('message','Data has been Insert Successfully !');
            }
        }
        
    }
    public function listsubcategories()
    {
        $categories = Category::orderBy('ordering', 'ASC')->paginate();
        $subcate = SubCategory::where('subcat_trash','0')->get();
        $pages_cate = pages_categories::where('pcate_status','1')->get();
        return view('webbackend.categories.sub_catelists', compact('categories','subcate','pages_cate'));
    }
    public function subCateMenuEdit($id)
    {
      $subcate = SubCategory::find($id);
      $catemenu = DB::table('categories')->where('cat_trash','0')
                    ->where('cat_active','1')->get();
      $pages_cate = pages_categories::where('pcate_status','1')->get();
      return view('webbackend.categories.sub_catdit', compact('catemenu','subcate','pages_cate'));
    }
    public function subCategoriesUpdateSave(Request $request)
    {
      /* var_dump($_POST); */
      $this->Validate($request, [
          'name_kh' => 'required',
          'name' => 'required',
          'slug' => 'required'
        ]);
      $id           = $request->Input('subid');
      $cate_id      = $request->Input('catemaster');
      $pagecate     = $request->Input('pagecate');
      $name_kh      = $request->Input('name_kh');
      $name         = $request->Input('name');
      $image        = $request->Input('filepath');
      $slug         = $request->Input('slug');
      $ordering     = $request->Input('ordering');
      $status       = $request->Input('status');
      $body         = $request->Input('body');
      $subbody_kh      = $request->Input('body_kh');
      $updated_at   = date('Y-m-d H:i:s');

      if(!empty($image)){
        DB::update('update sub_categories set category_id = ?, scatepageid = ?,name_kh = ?,name = ?,is_picture = ?,slug = ?,sub_ordering = ?, subcat_active = ?,subbodykh=?,body=?, updated_at=? where id = ?',[$cate_id,$pagecate,$name_kh,$name,$image,$slug,$ordering,$status,$subbody_kh,$body,$updated_at,$id]);
                $message = "Data has been updated Successfully!";

                if($request->Input('btnUpdate') == "UpdateSave"){
                    return Redirect::to('adminsite/catemenu/subcatemenu/catelists')->with('message',$message);
                }
      }else{
        DB::update('update sub_categories set category_id = ?, scatepageid = ?,name_kh = ?,name = ?,slug = ?,sub_ordering = ?, subcat_active = ?,subbodykh=?,body=?, updated_at=? where id = ?',[$cate_id,$pagecate,$name_kh,$name,$slug,$ordering,$status,$subbody_kh,$body,$updated_at,$id]);
                $message = "Data has been updated Successfully!";

                if($request->Input('btnUpdate') == "UpdateSave"){
                    return Redirect::to('adminsite/catemenu/subcatemenu/catelists')->with('message',$message);
                }
      }
      
    }

    //menu 3 -------------------------------------------------------------------------------------
    public function subicateNew()
    {
      $cate2menu = DB::table('sub_categories')->where('subcat_trash','0')
                    ->where('subcat_active','1')->get();
      $pages_cate = pages_categories::where('pcate_status','1')->get();
      return view('webbackend.categories.subi_catnew', compact('cate2menu','pages_cate'));
    }
    public function subiCategoriesNewSave(Request $request)
    {
      /** var_dump($_POST); */
      
      $validation = Validator::make($request->all(), array('name' => 'min:2|required', 'name_kh' => 'required','slug' => 'required'));
        if($validation->fails()){
            return Redirect::to('adminsite/catemenu/subicatemenu/create')->withErrors($validation);
        }else{
            subi_categories::insert([
                'subi_addedby'=> $request->Input('userid'),
                'subcateid'=> $request->Input('catesubmaster'),
                'sicatepageid'=> $request->Input('pagecate'),
                'subi_namekh'=> $request->Input('name_kh'),
                'subi_name'=> $request->Input('name'),
                'subi_slug'=> $request->Input('slug'),
                'subi_ordering' => $request->Input('ordering'),
                'subi_active'=> $request->Input('status'),
                'subi_body'=> $request->Input('body'),
                'subi_bodykh'=> $request->Input('body_kh'),
                'created_at'=>date('Y-m-d H:i:s')
            ]);
            if($request->Input('btnSave') == "save_new"){
                return Redirect::to('adminsite/catemenu/subicatemenu/create')->with('message','Data has been Insert Successfully !');
            }else{
                return Redirect::to('adminsite/catemenu/subicatemenu/catelists')->with('message','Data has been Insert Successfully !');
            }
        }
        
    }
    public function listsubicategories()
    {
        $subi_categories = subi_categories::where('subi_trash','0')->orderBy('id', 'ASC')->paginate();
        $subcate = SubCategory::where('subcat_trash','0')->get();
        $pages_cate = pages_categories::where('pcate_status','1')->get();
        return view('webbackend.categories.subi_catelists', compact('subi_categories','subcate','pages_cate'));
    }
    public function subiCateMenuEdit($id)
    {
      $subicate = subi_categories::find($id);
      $subcatemenu = DB::table('sub_categories')->where('subcat_trash','0')
                    ->where('subcat_active','1')->get();
      $pages_cate = pages_categories::where('pcate_status','1')->get();
      return view('webbackend.categories.subi_catdit', compact('subcatemenu','subicate','pages_cate'));
    }
    public function subiCategoriesUpdateSave(Request $request)
    {
      /* var_dump($_POST); */

      $this->Validate($request, [
          'name_kh' => 'required',
          'name' => 'required',
          'slug' => 'required'
        ]);
      $id           = $request->Input('subid');
      $subcate_id   = $request->Input('catemaster');
      $sicatepageid = $request->Input('pagecate');
      $name_kh      = $request->Input('name_kh');
      $name         = $request->Input('name');
      $slug         = $request->Input('slug');
      $ordering  = $request->Input('ordering');
      $status       = $request->Input('status');
      $body         = $request->Input('body');
      $subbody_kh      = $request->Input('body_kh');
      $updated_at   = date('Y-m-d H:i:s');

      DB::update('update subi_categories set subcateid = ?, sicatepageid = ?, subi_namekh = ?,subi_name = ?,subi_slug = ?,subi_ordering = ?,subi_active = ?,subi_bodykh=?,subi_body=?, updated_at=? where id = ?',[$subcate_id,$sicatepageid,$name_kh,$name,$slug,$ordering,$status,$subbody_kh,$body,$updated_at,$id]);
                $message = "Data has been updated Successfully!";

                if($request->Input('btnUpdate') == "UpdateSave"){
                    return Redirect::to('adminsite/catemenu/subicatemenu/catelists')->with('message',$message);
                }
      
    }
    public function masterSlideList()
    {
      $listslider = Slider::where('trash','0')->get();
      return view('webbackend.masterslider.sliderlists', compact('listslider'));
    }
    public function masterSlideCreate()
    {
      return view('webbackend.masterslider.slidercreate');
    }
    public function sliderCreateSave(Request $request)
    {
      $this->Validate($request, [
        'name' => 'required',
      ]);

      //$paths = substr($request->filepath, 20);

        $table = new Slider();
        $table->title = $request->name;
        $table->image = $request->filepath;
        $table->sl_slug = $request->slug;
        $table->sl_ordering = $request->ordering;
        $table->des = $request->excerpt;
        $table->status=1;
        $table->trash=0;
        $table->created_at = date('Y-m-d H:i:s');
        $table->save();
        $message = "Data has been saved Successfully!";
      if($request->Input('btnSave') == "save"){
        return Redirect::to('adminsite/system/slider/sliderlist')->with('message',$message);
      }else{
        return Redirect::to('adminsite/system/slider/create')->with('message',$message);
      }
      
    }
    public function slideUpdate($id)
    {
      //$findsl = Slider::where('id',$id)->get();
      $findsl = Slider::find($id);
      return view('webbackend.masterslider.slideredit', compact('findsl'));
    }
    public function sliderUpdatedSave(Request $request)
    {
      $this->Validate($request, [
        'name' => 'required',
      ]);

      $id           = $request->Input('sid');
      $name         = $request->Input('name');
      $image        = $request->Input('filepath');
      $slug         = $request->Input('slug');
      $status       = $request->Input('status');
      $ordering     = $request->Input('ordering');
      $des      = $request->Input('excerpt');
      $updated_at   = date('Y-m-d H:i:s');

      if(!empty($image)){
        DB::update('update sliders set title = ?,image = ?,sl_slug = ?,sl_ordering = ?,status = ?,des=?, updated_at=? where id = ?',[$name, $image,$slug,$ordering,$status,$des,$updated_at,$id]);
                $message = "Data has been updated Successfully!";

                if($request->Input('btnUpdate') == "updateSave"){
                    return Redirect::to('adminsite/system/slider/sliderlist')->with('message',$message);
                }
      }else{
        DB::update('update sliders set title = ?,sl_slug = ?,sl_ordering = ?,status = ?,des=?, updated_at=? where id = ?',[$name, $slug,$ordering,$status,$des,$updated_at,$id]);
                $message = "Data has been updated Successfully!";

                if($request->Input('btnUpdate') == "updateSave"){
                    return Redirect::to('adminsite/system/slider/sliderlist')->with('message',$message);
                }
      }
      
    }
    public function createarticles()
    {
      $categories = Category::where('catepageid',2)->where('cat_trash','0')->orderBy('ordering', 'ASC')->get();
      $subi_categories = subi_categories::where('sicatepageid',2)->where('subi_trash','0')->orderBy('id', 'ASC')->get();
      $subcate = SubCategory::where('scatepageid',2)->where('subcat_trash','0')->get();
      return view('webbackend.articles.articles', compact('categories','subcate','subi_categories'));
    }
    public function articlesInsert(Request $request)
    {

      //var_dump($request->Input('catboxes'));
      //$request->Input('subcatboxes');
      //$request->Input('subicatboxes');
      $event_date = ''; $date_event = '';
      $date_event = $request->Input('ne_date');
      if(($date_event !== '00-00-0000') AND ($date_event !== ''))
      {
        $event_date = date('Y-m-d', strtotime($request->Input('ne_date')));
      }else
      {
        $event_date = date('Y-m-d', strtotime('00-00-0000'));
      }

      $lastid = DB::table('news')->insertGetId([
              'title'        => $request->Input('name'),
              'title_kh'     => $request->Input('name_kh'),
              'slug'         => $request->Input('slug'),
              'status'       => $request->Input('status'),
              'excerpt'      => $request->Input('excerpt'),
              'excerpt_kh'   => $request->Input('excerpt_kh'),
              'body'         => $request->Input('body'),
              'body_kh'      => $request->Input('body_kh'),
              'user_id'      => $request->Input('userid'),
              'created_at'   => date('Y-m-d H:i:s'),
              'file'         => $request->Input('filepath'),
              'news_event_id' => $request->Input('ifs_ne'),
              'news_event_date'       => $event_date,
              'news_event_located'    => $request->Input('e_location'),
      ]);
      if($lastid > 0)
      {
        //Category
        if(isset($request['catboxes'])){
          foreach($request['catboxes'] as $key => $var){
            if(!empty($var)){
                DB::table('tb_catejoinnews')->insert([
                    'newsid'  => $lastid,
                    'cateid'   => $var,
                    'created_at'   => date('Y-m-d H:i:s')
                ]);
            }
          }
        }

        //Sub_Categories
        if(isset($request['subcatboxes'])){
          foreach($request['subcatboxes'] as $key => $vari){
            if(!empty($vari)){
                DB::table('tb_subcatejoinnews')->insert([
                    'newsid'  => $lastid,
                    'subcateid'   => $vari,
                    'created_at'   => date('Y-m-d H:i:s')
                ]);
            }
          }
        }

        //Subi_Categories
        if(isset($request['subicatboxes'])){
          foreach($request['subicatboxes'] as $key => $varii){
            if(!empty($var)){
                DB::table('tb_subicatejoinnews')->insert([
                    'newsid'  => $lastid,
                    'subicateid'   => $varii,
                    'created_at'   => date('Y-m-d H:i:s')
                ]);
            }
          }
        }

        $message = "Data contents has been saved successfully!";
        if($request->Input('btnSave') == "save"){
          return Redirect::to('adminsite/articles/articleslist')->with('message',$message);
        }else{
          return Redirect::to('adminsite/articles/create')->with('message',$message);
        }
      }
    }
    public function listArticles()
    {
      $listnews = News::where('trash','0')
                      ->where('article_typeid',1)->get();
      return view('webbackend.articles.articleslists', compact('listnews'));
    }
    public function articlesEdit($id)
    {
      $findnews = News::find($id);
      $categories = Category::where('catepageid',2)->where('cat_trash','0')->orderBy('ordering', 'ASC')->get();
      $subi_categories = subi_categories::where('sicatepageid',2)->where('subi_trash','0')->orderBy('id', 'ASC')->get();
      $subcate = SubCategory::where('scatepageid',2)->where('subcat_trash','0')->get();

      return view('webbackend.articles.articlesedit', compact('findnews','categories','subcate','subi_categories'));
    }
    public function articleUpdateSave(Request $request)
    {
      $event_date = ''; $date_event = '';
      $date_event = $request->Input('ne_date');
      if(($date_event !== '00-00-0000') AND ($date_event !== ''))
      {
        $event_date = date('Y-m-d', strtotime($request->Input('ne_date')));
      }else
      {
        $event_date = date('Y-m-d', strtotime('00-00-0000'));
      }
        $aid          = $request->Input('a_id');
        $title        = $request->Input('name');
        $title_kh     = $request->Input('name_kh');
        $slug         = $request->Input('slug');
        $status       = $request->Input('status');
        $excerpt      = $request->Input('excerpt');
        $excerpt_kh   = $request->Input('excerpt_kh');
        $body         = $request->Input('body');
        $body_kh      = $request->Input('body_kh');
        $user_id      = $request->Input('userid');
        $updated_at   = date('Y-m-d H:i:s');
        $file         = $request->Input('filepath');
        $news_event_id = $request->Input('ifs_ne');
        $news_event_date       = $event_date;
        $news_event_located    = $request->Input('e_location');

        if(!empty($file)){
        DB::update('update news set user_id = ?,title = ?,title_kh = ?,file = ?,slug = ?,excerpt = ?,excerpt_kh = ?,body=?,body_kh = ?,status = ?, updated_at=?,news_event_id = ?,news_event_date = ?,news_event_located =? where id = ?',[$user_id,$title, $title_kh,$file,$slug,$excerpt,$excerpt_kh,$body,$body_kh,$status,$updated_at,$news_event_id,$news_event_date,$news_event_located,$aid]);
                $message = "Data has been updated Successfully!";

                if($request->Input('btnUpdate') == "updateSave"){
                    return Redirect::to('adminsite/articles/articleslist')->with('message',$message);
                }
        }else{
          DB::update('update news set user_id = ?,title = ?,title_kh = ?,slug = ?,excerpt = ?,excerpt_kh = ?,body=?,body_kh = ?,status = ?, updated_at=?,news_event_id = ?,news_event_date = ?,news_event_located =? where id = ?',[$user_id,$title, $title_kh,$slug,$excerpt,$excerpt_kh,$body,$body_kh,$status,$updated_at,$news_event_id,$news_event_date,$news_event_located,$aid]);
                $message = "Data has been updated Successfully!";

                if($request->Input('btnUpdate') == "updateSave"){
                    return Redirect::to('adminsite/articles/articleslist')->with('message',$message);
                }
        }

    }

    // other cate/article
    public function listotherArticles()
    {
      $listnews = News::where('trash','0')
                      ->where('article_typeid',2)->get();
      $listartcate = DB::table('tbarticle_types')->get();
      return view('webbackend.articleothers.otherarticleslists', compact('listnews','listartcate'));
    }
    public function createotherarticles()
    {
      $categories = Category::where('catepageid',2)->where('cat_trash','0')->orderBy('ordering', 'ASC')->get();
      $subi_categories = subi_categories::where('sicatepageid',2)->where('subi_trash','0')->orderBy('id', 'ASC')->get();
      $subcate = SubCategory::where('scatepageid',2)->where('subcat_trash','0')->get();

      $listartcate = DB::table('tbarticle_types')->get();
      return view('webbackend.articleothers.otherarticles', compact('categories','subcate','subi_categories','listartcate'));
    }
    public function otherarticlesEdit($id)
    {
      $findnews = News::find($id);
      $categories = Category::where('catepageid',2)->where('cat_trash','0')->orderBy('ordering', 'ASC')->get();
      $subi_categories = subi_categories::where('sicatepageid',2)->where('subi_trash','0')->orderBy('id', 'ASC')->get();
      $subcate = SubCategory::where('scatepageid',2)->where('subcat_trash','0')->get();

      return view('webbackend.articleothers.otherarticlesedit', compact('findnews','categories','subcate','subi_categories'));
    }
    public function otherarticlesInsert(Request $request)
    {

      $lastid = DB::table('news')->insertGetId([
              'title'        => $request->Input('name'),
              'title_kh'     => $request->Input('name_kh'),
              'slug'         => $request->Input('slug'),
              'status'       => $request->Input('status'),
              'excerpt'      => $request->Input('excerpt'),
              'excerpt_kh'   => $request->Input('excerpt_kh'),
              'body'         => $request->Input('body'),
              'body_kh'      => $request->Input('body_kh'),
              'user_id'      => $request->Input('userid'),
              'article_typeid'      => $request->Input('catetypeid'),
              'created_at'   => date('Y-m-d H:i:s'),
              'file'         => $request->Input('filepath')
      ]);
      if($lastid > 0)
      {
        //Category
        if(isset($request['catboxes'])){
          foreach($request['catboxes'] as $key => $var){
            if(!empty($var)){
                DB::table('tb_catejoinnews')->insert([
                    'newsid'  => $lastid,
                    'cateid'   => $var,
                    'created_at'   => date('Y-m-d H:i:s')
                ]);
            }
          }
        }

        //Sub_Categories
        if(isset($request['subcatboxes'])){
          foreach($request['subcatboxes'] as $key => $vari){
            if(!empty($vari)){
                DB::table('tb_subcatejoinnews')->insert([
                    'newsid'  => $lastid,
                    'subcateid'   => $vari,
                    'created_at'   => date('Y-m-d H:i:s')
                ]);
            }
          }
        }

        //Subi_Categories
        if(isset($request['subicatboxes'])){
          foreach($request['subicatboxes'] as $key => $varii){
            if(!empty($var)){
                DB::table('tb_subicatejoinnews')->insert([
                    'newsid'  => $lastid,
                    'subicateid'   => $varii,
                    'created_at'   => date('Y-m-d H:i:s')
                ]);
            }
          }
        }

        $message = "Data contents has been saved successfully!";
        if($request->Input('btnSave') == "save"){
          return Redirect::to('adminsite/othercate/othercateslist')->with('message',$message);
        }else{
          return Redirect::to('adminsite/othercate/create')->with('message',$message);
        }
      }
    }
    //people function
    public function createpeoples()
    {
      return view('webbackend.peoples.peoplecreate');
    }
    public function listpeoples()
    {
      $peoples = tbl_peoples::where('peo_trash','0')->orderBy('peo_ordering', 'ASC')->get();
      return view('webbackend.peoples.peoplelists', compact('peoples'));
    }
    public function peoplesNewSave(Request $request)
    {
      $this->Validate($request, [
        'kh_name' => 'required','en_name' => 'required',
      ]);

        $table = new tbl_peoples();
        $table->u_addedby = $request->userid;
        $table->fnamekh = $request->kh_name;
        $table->fname = $request->en_name;
        $table->titlekh = $request->functions_kh;
        $table->title = $request->functions;
        $table->peo_picture = $request->filepath;
        $table->peo_ordering = $request->ordering;
        $table->peo_active = $request->status;;
        $table->peo_trash=0;
        $table->resumeskh = $request->body_kh;
        $table->resumes = $request->body;
        $table->created_at = date('Y-m-d H:i:s');
        $table->save();
        $message = "Data has been saved Successfully!";
      if($request->Input('btnSave') == "save"){
        return Redirect::to('adminsite/system/peoples/peoplelist')->with('message',$message);
      }else{
        return Redirect::to('adminsite/system/peoples/create')->with('message',$message);
      }
    }
    public function peoplesEdit($id)
    {
      $peoples = tbl_peoples::where('peo_id',$id)->get();

      return view('webbackend.peoples.peopleedit', compact('peoples'));
    }
    public function peoplesUpdateSave(request $request)
    {
      $this->Validate($request, [
        'kh_name' => 'required','en_name' => 'required',
      ]);

      $id           = $request->Input('peoid');
      $namekh       = $request->Input('kh_name');
      $name         = $request->Input('en_name');
      $titlekh       = $request->Input('functions_kh');
      $title         = $request->Input('functions');
      $image        = $request->Input('filepath');
      $status       = $request->Input('status');
      $ordering     = $request->Input('ordering');
      $body      = $request->Input('body');
      $bodykh      = $request->Input('body_kh');
      $updated_at   = date('Y-m-d H:i:s');

      if(!empty($image)){
        DB::update('update tbl_peoples set fnamekh = ?,fname = ?,titlekh = ?,title = ?,peo_picture = ?,peo_ordering = ?,peo_active = ?,resumeskh=?,resumes = ?, updated_at=? where peo_id = ?',[$namekh,$name,$titlekh,$title,$image,$ordering,$status,$bodykh,$body,$updated_at,$id]);
                $message = "Data has been updated Successfully!";

                if($request->Input('btnUpdate') == "updateSave"){
                    return Redirect::to('adminsite/system/peoples/peoplelist')->with('message',$message);
                }
      }else{
        DB::update('update tbl_peoples set fnamekh = ?,fname = ?,titlekh = ?,title = ?,peo_ordering = ?,peo_active = ?,resumeskh=?,resumes = ?, updated_at=? where peo_id = ?',[$namekh,$name,$titlekh,$title,$ordering,$status,$bodykh,$body,$updated_at,$id]);
                $message = "Data has been updated Successfully!";

                if($request->Input('btnUpdate') == "updateSave"){
                    return Redirect::to('adminsite/system/peoples/peoplelist')->with('message',$message);
                }
      }
    }
    public function peoplesdelete($id)
    {
      $trash = '1'; $n = 0;
      $n = DB::update('update tbl_peoples set peo_trash = ? where peo_id = ?',[$trash, $id]);
      if($n == 1){
        $message = "<span style='color:red;'>Data has been deleted Successfully!</span>";
        return Redirect::to('adminsite/system/peoples/peoplelist')->with('message',$message);
      }
    }

    // partnership/sponsorship
    public function createpartners()
    {
      return view('webbackend.partnership.partnerscreate');
    }
    public function partnersNewSave(Request $request)
    {
      $this->Validate($request, [
        'title' => 'required',
      ]);

        $table = new tbl_sponsors();
        $table->title = $request->title;
        $table->links = $request->webs;
        $table->image = $request->filepath;
        $table->slug = $request->slug;
        $table->ordering = $request->ordering;
        $table->status = $request->status;
        $table->trash=0;
        $table->des = $request->body;
        $table->created_at = date('Y-m-d H:i:s');
        $table->save();
        $message = "Data has been saved Successfully!";
      if($request->Input('btnSave') == "save"){
        return Redirect::to('adminsite/system/partners/partnerslist')->with('message',$message);
      }else{
        return Redirect::to('adminsite/system/partners/create')->with('message',$message);
      }
    }
    public function listofpartners()
    {
      $partners = tbl_sponsors::where('trash',0)->orderBy('ordering', 'ASC')->get();
      return view('webbackend.partnership.partnerslists', compact('partners'));
    }
    public function partnersEdit($id)
    {
      $partners = tbl_sponsors::where('id',$id)->get();
      return view('webbackend.partnership.partnerseditdata', compact('partners'));
    }
    public function partnersChangeSave(Request $request)
    {
      $this->Validate($request, [
        'title' => 'required',
      ]);

      $id           = $request->Input('id');
      $title         = $request->Input('title');
      $image        = $request->Input('filepath');
      $link         = $request->Input('webs');
      $slug         = $request->Input('slug');
      $status       = $request->Input('status');
      $ordering     = $request->Input('ordering');
      $des          = $request->Input('body');
      $updated_at   = date('Y-m-d H:i:s');

      if(!empty($image)){
        DB::update('update tbl_sponsors set title = ?,image = ?,links = ?,slug = ?,ordering = ?,status = ?,des=?, updated_at=? where id = ?',[$title,$image,$link,$slug,$ordering,$status,$des,$updated_at,$id]);
                $message = "Data has been updated Successfully!";

                if($request->Input('btnUpdate') == "updateSave"){
                    return Redirect::to('adminsite/system/partners/partnerslist')->with('message',$message);
                }
      }else{
        DB::update('update tbl_sponsors set title = ?,links = ?,slug = ?,ordering = ?,status = ?,des=?, updated_at=? where id = ?',[$title,$link,$slug,$ordering,$status,$des,$updated_at,$id]);
                $message = "Data has been updated Successfully!";

                if($request->Input('btnUpdate') == "updateSave"){
                    return Redirect::to('adminsite/system/partners/partnerslist')->with('message',$message);
                }
      }
    }
    public function partnersdelete($id)
    {
      $trash = '1'; $n = 0;
      $n = DB::update('update tbl_sponsors set trash = ? where id = ?',[$trash, $id]);
      if($n == 1){
        $message = "<span style='color:red;'>Data has been deleted Successfully!</span>";
        return Redirect::to('adminsite/system/partners/partnerslist')->with('message',$message);
      }
    }
}

