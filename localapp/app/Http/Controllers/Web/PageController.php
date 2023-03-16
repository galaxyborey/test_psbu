<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Post;
use App\Team;
use App\Club;
use App\Slider;
use App\Category;
use App\SubCategory;
use App\Model\subi_categories;
use App\DataConfig;
use App\ChampionAward;
use App\Player;
use App\League;
use App\News;
use App\Match;
use App\Score;
use App\Photo;
use App\Sponser;
use App\DetailLeague;
use App\CategoryProduct;
use App\Brand;
use App\Measure;
use App\MatchGallery;
use App\Product;
use App\Position;
use App\Model\tbl_peoples;
use App\Model\tbl_sponsors;
use DB;
use Illuminate\Support\Facades\Redirect;
class PageController extends Controller
{
  public function getindex()
  {
    $menu = Category::where('cat_active','1')->where('cat_trash','0')->orderBy('ordering','ASC')->get();
    $submenu = SubCategory::where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $subimenu = subi_categories::where('subi_active','1')->where('subi_trash','0')->orderBy('id','ASC')->get();
    $slideshow = Slider::where('trash','0')->orderBy('sl_ordering','ASC')->get();
    $about = SubCategory::where('category_id',6)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $offices = SubCategory::where('category_id',4)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $newslist = News::where('article_typeid',1)->where('news_event_id',1)->where('status',1)->where('trash',0)->orderBy('id','DESC')->limit(50)->get();
    $eventlist = News::where('article_typeid',1)->where('news_event_id',2)->where('status',1)->where('trash',0)->orderBy('id','DESC')->limit(10)->get();
    $majoring = DB::table('subi_categories')->select('subi_categories.id','subi_namekh','subi_name','subi_slug','subi_body','subi_bodykh','name','name_kh')
                ->join('sub_categories', 'sub_categories.id', '=', 'subcateid')
                ->where('subi_active', 1)->orderBy('sub_categories.id','ASC')->get();

    $peoples = tbl_peoples::where('peo_active','1')->where('peo_trash','0')->orderBy('peo_ordering', 'ASC')->get();
    $partners = tbl_sponsors::where('status', 1)->where('trash',0)->orderBy('ordering', 'ASC')->get();
    return view('webfrontend.webfront', compact('menu','submenu','subimenu','slideshow','about','offices','newslist','eventlist','majoring','peoples','partners'));
  }
  public function getDetails($id)
  {
    $menu = Category::where('cat_active','1')->where('cat_trash','0')->orderBy('ordering','ASC')->get();
    $submenu = SubCategory::where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $subimenu = subi_categories::where('subi_active','1')->where('subi_trash','0')->orderBy('id','ASC')->get();
    $about = SubCategory::where('category_id',6)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $offices = SubCategory::where('category_id',4)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();

    $viewitems = News::where('id',$id)->where('status',1)->where('trash',0)->get();
    $newslist = News::where('article_typeid',1)->where('status',1)->where('trash',0)->orderBy('id','DESC')->limit(50)->get();
    $majoring = DB::table('subi_categories')->select('subi_categories.id','subi_namekh','subi_name','subi_slug','subi_body','subi_bodykh','name','name_kh')
                ->join('sub_categories', 'sub_categories.id', '=', 'subcateid')
                ->where('subi_active', 1)->orderBy('sub_categories.id','ASC')->get();
    $sdetails = Category::where('id',$id)->where('cat_active','1')->where('cat_trash','0')->get();
    $partners = tbl_sponsors::where('status', 1)->where('trash',0)->orderBy('ordering', 'ASC')->get();
    return view('webfrontend.pagedetails', compact('menu','submenu','subimenu','sdetails','about','offices','newslist','viewitems','majoring','partners'));
  }

  public function menuDetails($id)
  {
    
    $menu = Category::where('cat_active','1')->where('cat_trash','0')->orderBy('ordering','ASC')->get();
    $submenu = SubCategory::where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $subimenu = subi_categories::where('subi_active','1')->where('subi_trash','0')->orderBy('id','ASC')->get();
    $about = SubCategory::where('category_id',6)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $offices = SubCategory::where('category_id',4)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $newslist = News::where('article_typeid',1)->where('status',1)->where('trash',0)->orderBy('id','DESC')->limit(50)->get();
    $majoring = DB::table('subi_categories')->select('subi_categories.id','subi_namekh','subi_name','subi_slug','subi_body','subi_bodykh','name','name_kh')
                ->join('sub_categories', 'sub_categories.id', '=', 'subcateid')
                ->where('subi_active', 1)->orderBy('sub_categories.id','ASC')->get();

    $sdetails = Category::where('id',$id)->where('cat_active','1')->where('cat_trash','0')->get();
    $partners = tbl_sponsors::where('status', 1)->where('trash',0)->orderBy('ordering', 'ASC')->get();
    return view('webfrontend.pagemenudetails', compact('menu','submenu','subimenu','sdetails','about','offices','newslist','majoring','partners'));
  }
  public function getSubDetails($id)
  {
    
    $menu = Category::where('cat_active','1')->where('cat_trash','0')->orderBy('ordering','ASC')->get();
    $submenu = SubCategory::where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $subimenu = subi_categories::where('subi_active','1')->where('subi_trash','0')->orderBy('id','ASC')->get();
    $about = SubCategory::where('category_id',6)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $offices = SubCategory::where('category_id',4)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $newslist = News::where('article_typeid',1)->where('status',1)->where('trash',0)->orderBy('id','DESC')->limit(50)->get();
    $majoring = DB::table('subi_categories')->select('subi_categories.id','subi_namekh','subi_name','subi_slug','subi_body','subi_bodykh','name','name_kh')
                ->join('sub_categories', 'sub_categories.id', '=', 'subcateid')
                ->where('subi_active', 1)->orderBy('sub_categories.id','ASC')->get();

    $sdetails = SubCategory::where('id',$id)->where('subcat_active','1')->where('subcat_trash','0')->get();
    $partners = tbl_sponsors::where('status', 1)->where('trash',0)->orderBy('ordering', 'ASC')->get();
    return view('webfrontend.pagesubdetails', compact('menu','submenu','subimenu','sdetails','about','offices','newslist','majoring','partners'));
  }
  public function getSubiDetails($id)
  {
    $menu = Category::where('cat_active','1')->where('cat_trash','0')->orderBy('ordering','ASC')->get();
    $submenu = SubCategory::where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $subimenu = subi_categories::where('subi_active','1')->where('subi_trash','0')->orderBy('id','ASC')->get();
    $about = SubCategory::where('category_id',6)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $offices = SubCategory::where('category_id',4)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $newslist = News::where('article_typeid',1)->where('status',1)->where('trash',0)->orderBy('id','DESC')->limit(50)->get();
    $majoring = DB::table('subi_categories')->select('subi_categories.id','subi_namekh','subi_name','subi_slug','subi_body','subi_bodykh','name','name_kh')
                ->join('sub_categories', 'sub_categories.id', '=', 'subcateid')
                ->where('subi_active', 1)->orderBy('sub_categories.id','ASC')->get();

    $sdetails = subi_categories::where('id',$id)->where('subi_active','1')->where('subi_trash','0')->get();
    $partners = tbl_sponsors::where('status', 1)->where('trash',0)->orderBy('ordering', 'ASC')->get();
    return view('webfrontend.pagesubidetails', compact('menu','submenu','subimenu','sdetails','about','offices','newslist','majoring','partners'));
  }

  //article view
  public function getArticlesListView()
  {
    $menu = Category::where('cat_active','1')->where('cat_trash','0')->orderBy('ordering','ASC')->get();
    $submenu = SubCategory::where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $subimenu = subi_categories::where('subi_active','1')->where('subi_trash','0')->orderBy('id','ASC')->get();
    $slideshow = Slider::where('trash','0')->orderBy('sl_ordering','ASC')->get();
    $about = SubCategory::where('category_id',6)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $offices = SubCategory::where('category_id',4)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $majoring = DB::table('subi_categories')->select('subi_categories.id','subi_namekh','subi_name','subi_slug','subi_body','subi_bodykh','name','name_kh')
                ->join('sub_categories', 'sub_categories.id', '=', 'subcateid')
                ->where('subi_active', 1)->orderBy('sub_categories.id','ASC')->get();

    $newslist = News::where('article_typeid',1)->where('status',1)->where('trash',0)->orderBy('id','DESC')->limit(50)->get();
    $partners = tbl_sponsors::where('status', 1)->where('trash',0)->orderBy('ordering', 'ASC')->get();
    return view('webfrontend.pagenewseventloadlist', compact('menu','submenu','subimenu','about','offices','newslist','majoring','partners'));
  }
  public function pagesnewsdetail($id)
  {
    $menu = Category::where('cat_active','1')->where('cat_trash','0')->orderBy('ordering','ASC')->get();
    $submenu = SubCategory::where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $subimenu = subi_categories::where('subi_active','1')->where('subi_trash','0')->orderBy('id','ASC')->get();
    $slideshow = Slider::where('trash','0')->orderBy('sl_ordering','ASC')->get();
    $about = SubCategory::where('category_id',6)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $offices = SubCategory::where('category_id',4)->where('subcat_active','1')->where('subcat_trash','0')->orderBy('sub_ordering','ASC')->get();
    $majoring = DB::table('subi_categories')->select('subi_categories.id','subi_namekh','subi_name','subi_slug','subi_body','subi_bodykh','name','name_kh')
                ->join('sub_categories', 'sub_categories.id', '=', 'subcateid')
                ->where('subi_active', 1)->orderBy('sub_categories.id','ASC')->get();

    $newslist = News::where('article_typeid',1)->where('status',1)->where('trash',0)->orderBy('id','DESC')->limit(50)->get();
    $viewitems = News::where('id',$id)->where('status',1)->where('trash',0)->get();
    $partners = tbl_sponsors::where('status', 1)->where('trash',0)->orderBy('ordering', 'ASC')->get();
    return view('webfrontend.pageviewdetails', compact('menu','submenu','subimenu','about','offices','newslist','viewitems','majoring','partners'));
  }

  //end article view

  public function index(){
    return view('web.index');
  }
  public function blog(){
  	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
  	return view('web.posts', compact('posts'));
  }
  public function getPage($slug){
    $name_slug = $slug;
    $cat = Category::leftJoin('sub_categories','sub_categories.category_id','categories.id')
    ->select('categories.*','sub_categories.id as sub_id','sub_categories.slug as slug_sub')
    ->where('categories.slug',$slug)->orwhere('sub_categories.slug',$slug)->first();
    $product = Product::where('trash',0)->orderBy('id','DESC')->paginate(12);
    $show_news = News::where('status',1);
    // print_r($cat);exit;
    if(!empty($cat->sub_id)){
      $cat_id = $cat->id;
      $sub_id = $cat->sub_id;
      $show_news = $show_news->where('sub_id',$sub_id)->where('trash',0)->orderBy('id','DESC')->paginate(12);
    }else{
      $cat_id = $cat->id;
      $sub_id = 0;
      $show_news = $show_news->where('cat_id',$cat_id)->where('trash',0)->orderBy('id','DESC')->paginate(12);
    }
    if($slug=='player-staff'){
      $player = Player::get();
      return view('web.player',compact('cat','name_slug','player','show_news'));
    }else{
      return view('web.post',compact('cat','name_slug','product','show_news'));
    }    
  }
  public function getDetailAll($slug){
    $news = News::leftJoin('categories','categories.id','news.cat_id')
       ->leftJoin('sub_categories','sub_categories.id','news.sub_id')
       ->select('news.*',
        'categories.name as cat_name_en',
        'categories.name_kh as cat_name_kh',
        'sub_categories.name as sub_name_kh',
        'sub_categories.name_kh as sub_name_kh')
       ->where('news.trash',0)->where('news.slug',$slug)->first();
    $rel_news = News::where('slug','!=',$slug)->where('trash','0')->limit(10)->get();
    if(!empty($rel_news)){
        foreach ($rel_news as $key => $value) {
          if(strlen($value->title)>30){
            $value->title = substr($value->title, 0,30).'...';
          }          
        }
    }    
    return view('web.detail',compact('news','rel_news'));
  }
  public function getDetailShop($slug){
    $product_detail = Product::leftJoin('category_products','category_products.id','products.cat_id')
    ->leftJoin('brands','brands.id','products.brand_id')
    ->leftJoin('measures','measures.id','products.measure_id')
    ->select('products.*','category_products.name_en','category_products.name_kh','brands.b_name_en',
    'brands.b_name_kh','measures.name_en as m_name_en','measures.name_kh as m_name_kh')
    ->where('products.slug',$slug)->first();
    $photo = Photo::where('product_id',$product_detail->id)->where('status',1)->where('trash',0)->get();
    $related = Product::where('slug','!=',$slug)->where('trash','0')->limit(10)->get();
    return view('web.productDetail',compact('product_detail','related','photo'));
  }
  public function getDetailPayerAll($slug){
      $rel_news = Player::where('slug','!=',$slug)->get();
      $player = Player::where('slug',$slug)->first();
      return view('web.playDetail',compact('player','rel_news'));
  }
  public function category($slug){
      $category = Category::where('slug', $slug)->pluck('id')->first();
      $posts = Post::where('category_id', $category)
          ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
      return view('web.posts', compact('posts'));
  }
  public static function getStatusPListView($selected_id=""){
      $res = [0=>'New Product',1=>'Arrivals',2=>'Latest ',3=>'Best Sellers'];
      foreach($res as  $key=>$value){
          if($key == $selected_id ){
            echo $value;
          }
      }
  }
  public function tag($slug){
      $posts = Post::whereHas('tags', function($query) use ($slug) {
          $query->where('slug', $slug);
      })->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
      return view('web.posts', compact('posts'));
  }
  public function post($slug){
  	$post = Post::where('slug', $slug)->first();
  	return view('web.post', compact('post'));
  }
  public function fixtureTicket(){
    return view('web.ticket');
  }
  public function about(){
    return view('web.about');
  }
  public function news(){
    return view('web.news');
  }
  public function contact(){
    return view('web.contact');
  }
  public function shop(){
    return view('web.shop');
  }
  public function club(){
    return view('web.club');
  }
  public function team(){
    return view('web.team');
  }
  public static function getDataCategory(){
    if(app()->getLocale()=='kh'){
      return Category::select('name_kh as cat_name','slug','id')->orderBy('ordering','ASC')->get();
    }else {
      return Category::select('name as cat_name','slug','id')->orderBy('ordering','ASC')->get();
    }
  }
  public static function getDataSubCategory($id){
     $sub = SubCategory::where('category_id',$id)->get();
    if(!empty($sub) && count($sub)>0){
      if(app()->getLocale()=='kh'){
        return  SubCategory::select('name_kh as sub_name','slug','id')->where('category_id',$id)->orderBy('id','ASC')->get();
      }else {
        return   SubCategory::select('name as sub_name','slug','id')->where('category_id',$id)->orderBy('id','ASC')->get();
      }
    }else {
      return '';
    }
  }
  public static function getConfitData($name=''){
      $data = DataConfig::where('c_name',$name)->first();
      return $data->c_value;
  }
  public static function getSliderData($name=''){
      return Slider::where('status',1)->where('trash',0)->get();
  }
  public static function getSponsoerData(){
      return Sponser::where('status',1)->where('trash',0)->orderBy('id','DESC')->get();
  }
  public static function getPositionData($name='',$cat_id=0,$sub_id=0){
      $posiion = Position::where('position',$name);
      if($sub_id !=0 || $sub_id !=""){
        $posiion =$posiion->where('sub_cat',$sub_id)->where('trash',0)->orderBy('id','ASC')->get();
      }else{
        if($cat_id !=0 || $cat_id !=''){
          $posiion = $posiion->where('cat_id',$cat_id)->where('trash',0)->orderBy('id','ASC')->get();
        }else {
          $posiion = $posiion->where('trash',0)->orderBy('id','ASC')->get();
        }

      }
      return $posiion;
  }
  public static function getMatchData(){
    if(app()->getLocale()=='kh'){
      return Match::select(
        'matches.*',
        DB::raw('(SELECT CONCAT(name_kh) as name FROM leagues WHERE leagues.id=matches.league_id) as leagues_name'),
        DB::raw('(SELECT CONCAT(name_kh) as name FROM clubs WHERE clubs.id=matches.f_teamid) as team_first'),
        DB::raw('(SELECT CONCAT(name_kh) as name FROM clubs WHERE clubs.id=matches.s_teamid) as team_second'),
        DB::raw('(SELECT logo FROM clubs WHERE clubs.id=matches.f_teamid) as image_first'),
        DB::raw('(SELECT logo FROM clubs WHERE clubs.id=matches.s_teamid) as image_second')
      )->where('status',1)->where('trash',0)->orderBy('id','DESC')->limit(5)->get();
    }else {
      return Match::select(
        'matches.*',
        DB::raw('(SELECT CONCAT(name_en) as name FROM leagues WHERE leagues.id=matches.league_id) as leagues_name'),
        DB::raw('(SELECT CONCAT(name_en) as name FROM clubs WHERE clubs.id=matches.f_teamid) as team_first'),
        DB::raw('(SELECT CONCAT(name_en) as name FROM clubs WHERE clubs.id=matches.s_teamid) as team_second'),
        DB::raw('(SELECT logo FROM clubs WHERE clubs.id=matches.f_teamid) as image_first'),
        DB::raw('(SELECT logo FROM clubs WHERE clubs.id=matches.s_teamid) as image_second')
      )->where('status',1)->where('trash',0)->orderBy('id','DESC')->limit(5)->get();
    }
  }
  public static function getMatchResultData($id){
    if(app()->getLocale()=='kh'){
      return Match::select(
        'matches.*',
        DB::raw('(SELECT CONCAT(name_kh) as name FROM leagues WHERE leagues.id=matches.league_id) as leagues_name'),
        DB::raw('(SELECT CONCAT(name_kh) as name FROM clubs WHERE clubs.id=matches.f_teamid) as team_first'),
        DB::raw('(SELECT CONCAT(name_kh) as name FROM clubs WHERE clubs.id=matches.s_teamid) as team_second'),
        DB::raw('(SELECT logo FROM clubs WHERE clubs.id=matches.f_teamid) as image_first'),
        DB::raw('(SELECT logo FROM clubs WHERE clubs.id=matches.s_teamid) as image_second')
      )->where('matches.league_id',$id)->where('status',1)->where('trash',0)->orderBy('id','DESC')->get();
    }else {
      return Match::select(
        'matches.*',
        DB::raw('(SELECT CONCAT(name_en) as name FROM leagues WHERE leagues.id=matches.league_id) as leagues_name'),
        DB::raw('(SELECT CONCAT(name_en) as name FROM clubs WHERE clubs.id=matches.f_teamid) as team_first'),
        DB::raw('(SELECT CONCAT(name_en) as name FROM clubs WHERE clubs.id=matches.s_teamid) as team_second'),
        DB::raw('(SELECT logo FROM clubs WHERE clubs.id=matches.f_teamid) as image_first'),
        DB::raw('(SELECT logo FROM clubs WHERE clubs.id=matches.s_teamid) as image_second')
      )->where('matches.league_id',$id)->where('status',1)->where('trash',0)->orderBy('id','DESC')->get();
    }
  }
  public static function getProductData(){
      return Product::where('trash',0)->orderBy('id','DESC')->limit(12)->get();
  }
  public static function getMatchGalleryData(){
      return MatchGallery::where('status',1)->where('trash',0)->orderBy('id','DESC')->limit(6)->get();
  }
  public static function getMatchGalleryDataAll(){
      return MatchGallery::where('status',1)->where('trash',0)->orderBy('id','DESC')->paginate(24);
  }
  public static function getNewsData(){
      return News::where('status',1)->where('trash',0)->orderBy('id','DESC')->limit(4)->get();
  }
  public static function getLeagueDataActive(){
    if(app()->getLocale()=='kh'){
      return League::select('name_kh as league_name','slug','id')->where('active',1)->where('status',1)->where('trash',0)->orderBy('id','DESC')->first();
    }else {
      return League::select('name_en as league_name','slug','id')->where('active',1)->where('status',1)->where('trash',0)->orderBy('id','DESC')->first();
    }
  }
  public static function getLeagueDataAll(){
    if(app()->getLocale()=='kh'){
      return League::select('name_kh as league_name','slug','id')->where('status',1)->where('trash',0)->orderBy('id','DESC')->get();
    }else {
      return League::select('name_en as league_name','slug','id')->where('status',1)->where('trash',0)->orderBy('id','DESC')->get();
    }
  }

  public static function getDetailLeagueData($id){
    if(app()->getLocale()=='kh'){
      return DetailLeague::leftJoin('leagues','leagues.id','detail_leagues.league_id')
      ->leftJoin('clubs','clubs.id','detail_leagues.team_id')
      ->select(
        'detail_leagues.*',
        DB::raw('clubs.logo'),
        DB::raw(' clubs.name_kh as club_name')
       )->where('detail_leagues.league_id',$id)->where('detail_leagues.status',1)->where('detail_leagues.trash',0)->orderBy('detail_leagues.id','DESC')->get();
    }else {
      return DetailLeague::leftJoin('leagues','leagues.id','detail_leagues.league_id')
      ->leftJoin('clubs','clubs.id','detail_leagues.team_id')
      ->select(
        'detail_leagues.*',
        DB::raw('clubs.logo'),
        DB::raw('clubs.name_en as club_name')
       )->where('detail_leagues.league_id',$id)->where('detail_leagues.status',1)->where('detail_leagues.trash',0)->orderBy('detail_leagues.id','DESC')->get();
    }
  }
  public static function getScoreData($id){
      return Score::where('match_id',$id)->where('status',1)->where('trash',0)->orderBy('id','ASC')->get();
  }
  public static function getNewsRelated(){
     $rel_news = News::where('trash','0')->limit(10)->get();
      return $rel_news;
  }
  public function getDetailListLeague($slug){
    $cat = Category::where('slug','league-table')->first();
    if(app()->getLocale()=='kh'){
      $leagues =  League::select('name_kh as league_name','slug','id')->where('slug',$slug)->where('status',1)->where('trash',0)->orderBy('id','DESC')->first();
    }else {
      $leagues =  League::select('name_en as league_name','slug','id')->where('slug',$slug)->where('status',1)->where('trash',0)->orderBy('id','DESC')->first();
    }
    return view('web.leagueDetail',compact('leagues','cat'));
  }
  public static function getCatNews($slug="",$catalog=""){
      $dataTable = News::leftJoin('categories','categories.id','news.cat_id')
      ->select('news.*','categories.slug as cat_slug');
      if($slug !=""){
          $dataTable =$dataTable->where('categories.slug',$slug);
      } 
      if($catalog !=""){
          $dataTable =$dataTable->where('catalog',$catalog);
      }
      $dataTable = $dataTable->Limit(6)->get();
     return  $dataTable;
  }
  public static function getCatalog($selected_id=""){
        $value = \App\Http\Controllers\HomeController::getConfitData('catalog');
        if(!empty($value)){ 
            $value = explode(',', $value);
        }
        return $value;
    }
}