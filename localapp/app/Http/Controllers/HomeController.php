<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Club;
use App\Slider;
use App\Category;
use App\SubCategory;
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
use Yajra\Datatables\Facades\Datatables;
use DB;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getIndex()
    {
        return view('webbackend.home');
    }
    public function getDashboard()
    {
        return view('webbackend.home1');
    }

    public static function getCountAll($table=''){
        $count = DB::table($table)->get();
        return count($count);
    }
    public static function getConfitData($name=''){
        $data = DataConfig::where('c_name',$name)->first();
        return $data->c_value;
    }
    public function getconfig(Request $data){
        $company_logo = DataConfig::where('c_name','company_logo')->first();
        $position = DataConfig::where('c_name','position')->first();
        $email = DataConfig::where('c_name','email')->first();
        $address = DataConfig::where('c_name','address')->first();
        $phone = DataConfig::where('c_name','phone')->first();
        $f_des = DataConfig::where('c_name','f_des')->first();
        $catalog = DataConfig::where('c_name','catalog')->first();
        $arr_view=[
            'company_logo'=>$company_logo->c_value,
            'position'=>$position->c_value,
            'address'=>$address->c_value,
            'email'=>$email->c_value,
            'phone'=>$phone->c_value,
            'f_des'=>!empty($f_des->c_value)?$f_des->c_value:'',
            'catalog'=>!empty($catalog->c_value)?$catalog->c_value:'',
        ];
        return view('admin.config',$arr_view);
    }
    public function insertConfig(Request $data){
        foreach($data->all() as $key=>$row){
            DataConfig::where('c_name','=',$key)->update(['c_value'=>$row]);
        }
        return Redirect::to('getconfig')->with('message','Update Successfully !');

    }
    public static function getPositionList($selected_id=""){
        $data = DataConfig::where('c_name','position')->first();
        $res = explode(",",$data->c_value);
        foreach( $res as  $key=>$value){
            $sl="";
            if($value == $selected_id ) $sl = "selected";
            echo '<option '.$sl.' value="'.$value.'">'.$value.'</option>';
        }
    }
    public function index()
    {
        return view('admin.home');
    }
    public function gallery()
    {
        return view('admin.gallery');
    }
    public function getPositionJson(Request $data){
        $news = DB::table('positions')->leftJoin('categories','categories.id','positions.cat_id')
       ->leftJoin('sub_categories','sub_categories.id','positions.sub_cat')
       ->select('positions.*',
        DB::raw('CONCAT(categories.name," - ",categories.name_kh) as category'),
        DB::raw('CONCAT(sub_categories.name," - ",sub_categories.name_kh) as sub_category'))
       ->where('positions.trash',0)->get();
        return Datatables::of($news)
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("positions.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('positions').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getNewsJson(Request $data){
        $news = DB::table('news')->leftJoin('categories','categories.id','news.cat_id')
       ->leftJoin('sub_categories','sub_categories.id','news.sub_id')
       ->select('news.*',
        // DB::raw('CONCAT(categories.name," - ",categories.name_kh) as category'),
        DB::raw('categories.name as category'),
        DB::raw('sub_categories.name as sub_category'))
       ->where('news.trash',0)->get();
        return Datatables::of($news)
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("admin_news.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('admin_news').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getMatchJson(Request $data){
      $query = DB::table('matches')->select(
        'matches.*',
        DB::raw('(SELECT CONCAT(name_en," - ",name_kh) as name FROM leagues WHERE leagues.id=matches.league_id) as leagues_name'),
        DB::raw('(SELECT CONCAT(name_en," - ",name_kh) as name FROM clubs WHERE clubs.id=matches.f_teamid) as team_first'),
        DB::raw('(SELECT CONCAT(name_en," - ",name_kh) as name FROM clubs WHERE clubs.id=matches.s_teamid) as team_second')
        )->where('trash',0)->get();
        return Datatables::of($query)
        ->addColumn('date_match', function ($val) {
            return date('d-m-Y',strtotime($val->date_match));
        })->addColumn('action', function ($val) {
            $score= "'".$val->score."'";
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("matchs.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                      <a class="font-yellow" onClick="funcAddScore('.$val->id.','.$score.')">
                      <i class="font-yellow fa fa-plus-circle"></i> '.trans("lang.score").' </a>
                    </li>
                    <li>
                        <form method="POST" action="'.url('matchs').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getLeagueJson(Request $data){
        return Datatables::of(League::query())
        ->addColumn('start_date', function ($val) {
            return date('d-m-Y',strtotime($val->start_date));
        })->addColumn('end_date', function ($val) {
            return date('d-m-Y',strtotime($val->end_date));
        })
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("leagues.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('leagues').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getClubJson(Request $data){
        return Datatables::of(Club::query())
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("clubs.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('clubs').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getGalleryJson(Request $data){
        return Datatables::of(MatchGallery::query())
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("matchgallerys.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('matchgallerys').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getTeamJson(Request $data){
       $team = DB::table('teams')->leftJoin('clubs','clubs.id','teams.club_id')
       ->select('teams.*',DB::raw('CONCAT(clubs.name_en," - ",clubs.name_kh) as club_name'))->where('teams.status',1)->get();
        return Datatables::of($team)
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("teams.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('teams').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getPlayerJson(Request $data){
        $player = DB::table('players')->leftJoin('teams','teams.id','players.team_id')
       ->select('players.*',DB::raw('CONCAT(teams.team_name_en," - ",teams.team_name_kh) as team_name'))->where('players.status',1)->get();
        return Datatables::of($player)
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("players.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('players').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getScoreJson(Request $data){
       $score = DB::table('scores')->leftJoin('matches','matches.id','scores.match_id')
       ->select(
         'scores.*',
         DB::raw('(SELECT name_en FROM clubs WHERE clubs.id=matches.f_teamid) as team_first'),
         DB::raw('(SELECT name_en FROM clubs WHERE clubs.id=matches.s_teamid) as team_second')
        )->get();
        return Datatables::of($score)
        ->addColumn('match', function ($val) {
          return $val->team_first.' - Vs - '.$val->team_second;
        })->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("leaguescores.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('leaguescores').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getScoreDetailJson(Request $data){
       $scoreDetail = DB::table('detail_leagues')->leftJoin('leagues','leagues.id','detail_leagues.league_id')
       ->leftJoin('clubs','clubs.id','detail_leagues.team_id')
       ->select(
         'detail_leagues.*',
         DB::raw(' CONCAT(leagues.name_en," - ",leagues.name_kh) as league_name'),
         DB::raw('clubs.logo'),
         DB::raw(' CONCAT(clubs.name_en," - ",clubs.name_kh) as club_name')
        )->get();
        return Datatables::of($scoreDetail)
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("leaguescoredetails.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('leaguescoredetails').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getChampionJson(Request $data){
       $champions = DB::table('champion_awards')->leftJoin('leagues','leagues.id','champion_awards.league_id')
       ->leftJoin('matches','matches.id','champion_awards.match_id')
       ->select(
         'champion_awards.*',
         DB::raw(' CONCAT(leagues.name_en," - ",leagues.name_kh) as league_name'),
         DB::raw('(SELECT name_en FROM clubs WHERE clubs.id=matches.f_teamid) as team_first'),
         DB::raw('(SELECT name_en FROM clubs WHERE clubs.id=matches.s_teamid) as team_second')
        )->get();
        return Datatables::of($champions)
        ->addColumn('match', function ($val) {
          return $val->team_first.' - Vs - '.$val->team_second;
        })
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("champions.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('champions').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getSlideJson(Request $data){
        return Datatables::of(Slider::query())
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("sliders.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('sliders').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getUserJson(Request $data){
        return Datatables::of(User::query())
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("users.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                </ul>
            </div>';
       })->make(true);
    }
    public function getSponsorJson(Request $data){
        return Datatables::of(Sponser::query())
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("sponsors.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('sponsors').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getMeasureJson(Request $data){
        return Datatables::of(Measure::query())
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("measures.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('measures').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getCategoryProductJson(Request $data){
       $cat = DB::table('category_products')->select(
        'category_products.*',
         DB::raw('(SELECT CONCAT(cp.name_en," - ", cp.name_kh) as parent FROM category_products as cp WHERE category_products.parent_id = cp.id AND cp.parent_id=0 Limit 1) as parent')
        )->get();
        return Datatables::of($cat)
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("productcats.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('productcats').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getCategoryBrand(Request $data){
       $cat = DB::table('brands')->select(
        'brands.*',
         DB::raw('(SELECT CONCAT(cp.b_name_en," - ", cp.b_name_kh) as parent FROM brands as cp WHERE brands.b_parent = cp.id AND cp.b_parent=0 Limit 1) as parent')
        )->get();
        return Datatables::of($cat)
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("brands.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('brands').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getProductsJson(Request $data){
        return Datatables::of(Product::query())
        ->addColumn('p_sale_price',function($val){
            return '$ '.number_format($val->p_sale_price,2);
        })
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a class="font-yellow" href="'.route("products.edit",$val->id).'">
                        <i class="font-yellow fa fa-edit"></i> '.trans("lang.edit").' </a>
                    </li>
                    <i class="divider"></i>
                    <li>
                        <form method="POST" action="'.url('products').'/'.$val->id.'" accept-charset="UTF-8">
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="'.csrf_token().'">
                            <a class="red data_delete" style="padding-left: 20px;line-height: 35px;" onClick="FuncDelete(this)">
                              <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                            </a>
                        </form>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }
    public function getActiveTable(Request $data){
        if($data->name=='disable'){
            DB::table($data->tab)->where('id',$data->id)->update(['status'=>1]);
            return 1;
        }else{
            DB::table($data->tab)->where('id',$data->id)->update(['status'=>0]);
            return 0;
        }
    }
    public static function getPositonList($selected_id=""){
        $res = DataConfig::where('id',2)->first();
        $arr = explode(",",$res->c_value);
        foreach($arr as  $positon){
            $sl="";
            if($positon == $selected_id ) $sl = "selected";
            echo '<option '.$sl.' value="'.$positon.'">'.$positon.'</option>';
        }
    }
    public static function getLeagueList($selected_id=""){
        $res = League::where('status',1)->get();
        foreach($res as  $value){
            $sl="";
            if($value->id == $selected_id ) $sl = "selected";
            if(app()->getLocale()=='kh'){
                if($value->name_kh){
                    echo '<option '.$sl.' value="'.$value->id.'">'.$value->name_kh.'</option>';
                }else{
                    echo '<option '.$sl.' value="'.$value->id.'">'.$value->name_en.'</option>';
                }

            }else{
                echo '<option '.$sl.' value="'.$value->id.'">'.$value->name_en.'</option>';
            }
        }
    }
    public static function getClubList($selected_id=""){
        $res = Club::where('status',1)->get();
        foreach($res as  $value){
            $sl="";
            if($value->id == $selected_id ) $sl = "selected";
            if(app()->getLocale()=='kh'){
                if($value->name_kh){
                    echo '<option '.$sl.' value="'.$value->id.'">'.$value->name_kh.'</option>';
                }else{
                    echo '<option '.$sl.' value="'.$value->id.'">'.$value->name_en.'</option>';
                }

            }else{
                echo '<option '.$sl.' value="'.$value->id.'">'.$value->name_en.'</option>';
            }
        }
    }
    public static function getTeamJsonList($selected_id=""){
        $res = Team::where('status',1)->get();
        foreach($res as  $value){
            $sl="";
            if($value->id == $selected_id ) $sl = "selected";
            if(app()->getLocale()=='kh'){
                if($value->team_name_kh){
                    echo '<option '.$sl.' value="'.$value->id.'">'.$value->team_name_kh.'</option>';
                }else{
                    echo '<option '.$sl.' value="'.$value->id.'">'.$value->team_name_en.'</option>';
                }

            }else{
                echo '<option '.$sl.' value="'.$value->id.'">'.$value->team_name_en.'</option>';
            }

        }
    }
    public static function getMatchJsonList($selected_id=""){
        $res = Match::select(
          'matches.*',
          DB::raw('(SELECT CONCAT(name_en) as name FROM leagues WHERE leagues.id=matches.league_id) as leagues_name'),
          DB::raw('(SELECT CONCAT(name_en) as name FROM clubs WHERE clubs.id=matches.f_teamid) as team_first'),
          DB::raw('(SELECT CONCAT(name_en) as name FROM clubs WHERE clubs.id=matches.s_teamid) as team_second')
        )->where('status',1)->get();
        foreach($res as  $value){
            $sl="";
            if($value->id == $selected_id ) $sl = "selected";
            echo '<option '.$sl.' value="'.$value->id.'">'.$value->team_first.'-  Vs - '.$value->team_second.'</option>';
        }
    }
    public static function getMeasureList($selected_id=""){
        $res = Measure::get();
        foreach($res as  $value){
            $sl="";
            if($value->id == $selected_id ) $sl = "selected";
            echo '<option '.$sl.' value="'.$value->id.'">'.$value->name_en.' - '.$value->name_kh.'</option>';
        }
    }
    public static function getCategoryNewsList($selected_id=""){
        $res = Category::get();
        foreach($res as  $value){
            $sl="";
            if($value->id == $selected_id ) $sl = "selected";
            echo '<option '.$sl.' value="'.$value->id.'">'.$value->name.'  '.$value->name_kh.'</option>';
        }
    }
    public static function getSubCategoryNewsList($selected_id="",$id=0){
        $res = SubCategory::where('category_id',$id)->get();
        foreach($res as  $value){
            $sl="";
            if($value->id == $selected_id ) $sl = "selected";
            echo '<option '.$sl.' value="'.$value->id.'">'.$value->name.' - '.$value->name_kh.'</option>';
        }
    }
    public function getSubCat($id){
        $res = SubCategory::where('category_id',$id)->get();
        $option=' <option value="0">'.trans('lang.please_selete').'</option>';
        foreach($res as  $value){
            $sl="";
            // if($value->id == $selected_id ) $sl = "selected";
            $option.='<option '.$sl.' value="'.$value->id.'">'.$value->name.' - '.$value->name_kh.'</option>';
        }
        return $option;
    }
    public static function getStatusPList($selected_id=""){
        $res = [0=>'New Product',1=>'Arrivals',2=>'Latest ',3=>'Best Sellers'];
        foreach($res as  $key=>$value){
            $sl="";
            if($key == $selected_id ) $sl = "selected";
            echo '<option '.$sl.' value="'.$key.'">'.$value.'</option>';
        }
    }
    public function addorEditScore(Request $data){
        $table = Match::find($data->id);
        $table->score = $data->score;
        $table->save();
    }
    public static function getProductCatogery($parent_id,$level=0,$selected_id=0){
        $minus="";
        $res = CategoryProduct::where('parent_id','=',$parent_id)->get();
        for($i=$level; $i>0; $i--){
            $minus .= "  -- ";
        }
        foreach($res as $row){
            $name = $row->name_en.' - '.$row->name_kh ;
            $id = $row->id;
            $sl="";
            if($row->id == $selected_id ) $sl = "selected";
            echo '<option '.$sl.' value="'.$id.'">'.$minus.' '.$name.' </option>';
            $i++;
            self::getProductCatogery($id,$level+1,$selected_id);
        }
    }
    public static function getProductBrand($parent_id,$level=0,$selected_id=0){
        $minus="";
        $res = Brand::where('b_parent','=',$parent_id)->get();
        for($i=$level; $i>0; $i--){
            $minus .= "  -- ";
        }
        foreach($res as $row){
            $name = $row->b_name_en.' - '.$row->b_name_kh ;
            $id = $row->id;
            $sl="";
            if($row->id == $selected_id ) $sl = "selected";
            echo '<option '.$sl.' value="'.$id.'">'.$minus.' '.$name.' </option>';
            $i++;
            self::getProductBrand($id,$level+1,$selected_id);
        }
    }
    public function getMessage(){
        return view('admin.config.index');
    }    
    public static function getCatalog($selected_id=""){
        $value = \App\Http\Controllers\HomeController::getConfitData('catalog');
        if(!empty($value)){ 
            $value = explode(',', $value);
            foreach($value as  $positon){
            $sl="";
                if($positon == $selected_id ) $sl = "selected";
                echo '<option '.$sl.' value="'.$positon.'">'.$positon.'</option>';
            }
        }
    }
    public function getSendMassageJson(){
        return Datatables::of(SendMail::query())
        ->addColumn('action', function ($val) {
            return '
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"> '.trans("lang.action").'
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a href="'.url('message/delete').'/'.$val->id.'" class="red data_delete" style="padding-left: 20px;line-height: 35px;">
                          <i class="fa fa-trash"></i>  '.trans("lang.delete").'
                        </a>
                    </li>
                </ul>
            </div>';
       })->make(true);
    }    
}
