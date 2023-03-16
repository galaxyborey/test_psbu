<?php
//start new themes web front
Route::get('/newhomes', function(){
	return view('webfrontend.fronthome');
});
Route::get('/educationhome', function(){

	return view('webfrontend.webfront');
});
Route::get('/', 'Web\PageController@getindex');
Route::get('/contentpagesdetails/{id}', 'Web\PageController@getDetails');
Route::get('/contentpages/{id}', 'Web\PageController@menuDetails');
Route::get('/content2pages/{id}', 'Web\PageController@getSubDetails');
Route::get('/contentsubipages/{id}', 'Web\PageController@getSubiDetails');

Route::get('/articleslistviews', 'Web\PageController@getArticlesListView');
Route::get('/viewdetailspages/{id}', 'Web\PageController@pagesnewsdetail');


// end school website route
//Route::get('/', 'Web\PageController@index')->name('index');
Route::post('language-chooser','LanguageController@changeLanguage');
Route::post('language/', array(
    'before' => 'csrf',
    'as' => 'language-chooser',
    'uses' => 'LanguageController@changeLanguage'
));

Route::auth();
// admin site
Route::group(['prefix' => 'adminsite'], function() {
	Route::get('/','HomeController@getDashboard');
	Route::get('/newadmins','HomeController@getIndex');
  ///categories///
	Route::get('/catemenu/create','Admin\webbackendController@createcategories');
	Route::match(['post','get'],'/cateinsertSave','Admin\webbackendController@categoriesNewSave');
	Route::get('/catemenu/catelist','Admin\webbackendController@listcategories');
	Route::get('/catemenu/edit/{id}','Admin\webbackendController@catemenuEdit');
	Route::match(['post','get'],'/cateUpdateSave','Admin\webbackendController@categoriesUpdateSave');

	//munu 2
	Route::get('/catemenu/subcatemenu/create','Admin\webbackendController@subcateNew');
	Route::match(['post','get'],'/subCateInsertSave','Admin\webbackendController@subCategoriesNewSave');
	Route::get('/catemenu/subcatemenu/catelists','Admin\webbackendController@listsubcategories');
	Route::get('/catemenu/subcate/edit/{id}','Admin\webbackendController@subCateMenuEdit');
	Route::match(['post','get'],'/subCateUpdateSave','Admin\webbackendController@subCategoriesUpdateSave');

	//munu 3
	Route::get('/catemenu/subicatemenu/create','Admin\webbackendController@subicateNew');
	Route::match(['post','get'],'/subiCateInsertSave','Admin\webbackendController@subiCategoriesNewSave');
	Route::get('/catemenu/subicatemenu/catelists','Admin\webbackendController@listsubicategories');
	Route::get('/catemenu/subicate/edit/{id}','Admin\webbackendController@subiCateMenuEdit');
	Route::match(['post','get'],'/subiCateUpdateSave','Admin\webbackendController@subiCategoriesUpdateSave');

	Route::get('/system/slider/sliderlist','Admin\webbackendController@masterSlideList');
	Route::get('/system/slider/create','Admin\webbackendController@masterSlideCreate');
	Route::match(['post','get'],'/sliderInsertSave','Admin\webbackendController@sliderCreateSave');
	Route::get('/system/slider/editsliders/{id}','Admin\webbackendController@slideUpdate');
	Route::match(['post','get'],'/sliderUpdatedSave','Admin\webbackendController@sliderUpdatedSave');
  
// 	Route::get('/jsonSuppliers','suppliersController@getJsonSuppliers');
// 	Route::get('/edit/{id}','suppliersController@suppliersEdit');
// 	Route::match(['post','get'],'/editSave','suppliersController@supplierEditSave');
// 	Route::match(['post','get'],'/delete','suppliersController@onDelete');

	//main slider
	Route::get('/slider/sliderlist', 'Admin\SliderController@listSlider');
	Route::get('/slider/slidercreate', 'Admin\SliderController@createSlider');
	Route::match(['post','get'],'/sliderSave','Admin\SliderController@insertSliderSave');
	Route::get('/slider/sliderEdit/edit/{id}','Admin\SliderController@editSlider');
	Route::match(['post','get'],'/sliderUpdateSave','Admin\SliderController@sliderUpdateSave');

	//article
	Route::get('/articles/create','Admin\webbackendController@createarticles');
	Route::match(['post','get'],'/articleinsertSave','Admin\webbackendController@articlesInsert');
	Route::get('/articles/articleslist', 'Admin\webbackendController@listArticles');
	Route::get('/articles/edit/{id}','Admin\webbackendController@articlesEdit');
	Route::match(['post','get'],'/articleEditSave','Admin\webbackendController@articleUpdateSave');

	// other cate/article
	Route::get('/othercate/create','Admin\webbackendController@createotherarticles');
	Route::match(['post','get'],'/otherarticleinsertSave','Admin\webbackendController@otherarticlesInsert');
	Route::get('/othercate/othercateslist', 'Admin\webbackendController@listotherArticles');
	Route::get('/othercate/edit/{id}','Admin\webbackendController@otherarticlesEdit');

	// our people
	Route::get('/system/peoples/peoplelist','Admin\webbackendController@listpeoples');
	Route::get('/system/peoples/create','Admin\webbackendController@createpeoples');
	Route::match(['post','get'],'/peopleinsertSave','Admin\webbackendController@peoplesNewSave');
	Route::get('/system/peoples/edit/{id}','Admin\webbackendController@peoplesEdit');
	Route::match(['post','get'],'/peopleupdateSave','Admin\webbackendController@peoplesUpdateSave');
	Route::get('/system/peoples/delete/{id}','Admin\webbackendController@peoplesdelete');

	//our partnership / sponsorship
	Route::get('/system/partners/partnerslist','Admin\webbackendController@listofpartners');
	Route::get('/system/partners/create','Admin\webbackendController@createpartners');
	Route::match(['post','get'],'/partnersInsertSave','Admin\webbackendController@partnersNewSave');
	Route::get('/system/partners/editpartners/{id}','Admin\webbackendController@partnersEdit');
	Route::match(['post','get'],'/partnersUpdateSave','Admin\webbackendController@partnersChangeSave');
	Route::get('/system/partners/delete/{id}','Admin\webbackendController@partnersdelete');
});


//////////////Get Json /////////////
$this->get('loginsite', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('loginsite', 'Auth\LoginController@login');

Route::get('getTeamJson','HomeController@getTeamJson');
Route::post('getActiveData','HomeController@getActiveTable');
Route::get('getSlideJson','HomeController@getSlideJson');
Route::get('getClubJson','HomeController@getClubJson');
Route::get('getPlayerJson','HomeController@getPlayerJson');
Route::get('getLeagueJson','HomeController@getLeagueJson');
Route::get('getMatchJson','HomeController@getMatchJson');
Route::get('getScoreJson','HomeController@getScoreJson');
Route::get('getScoreDetailJson','HomeController@getScoreDetailJson');
Route::get('getCategoryProductJson','HomeController@getCategoryProductJson');
Route::get('getCategoryBrand','HomeController@getCategoryBrand');
Route::get('getMeasureJson','HomeController@getMeasureJson');
Route::get('getProductsJson','HomeController@getProductsJson');
Route::get('getSubCat/{id}','HomeController@getSubCat');
Route::get('getNewsJson','HomeController@getNewsJson');
Route::get('getGalleryJson','HomeController@getGalleryJson');
Route::get('getSponsorJson','HomeController@getSponsorJson');
Route::get('getUserJson','HomeController@getUserJson');
Route::get('getChampionJson','HomeController@getChampionJson');
Route::get('getPositionJson','HomeController@getPositionJson');
Route::get('getSendMassageJson','HomeController@getSendMassageJson');
////////////// Json ///////////////
Route::post('addorEditScore','HomeController@addorEditScore');
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    redirect('laravel-filemanager');
});

Route::post('sendContactUs','Admin\SendMailController@store');
Route::get('message','HomeController@getMessage');
Route::get('message/delete/{id}','Admin\SendMailController@delete');



Auth::routes();
Route::get('/blog', 'Web\PageController@blog')->name('blog');
Route::get('/fixtures-and-tickets', 'Web\PageController@fixtureTicket');
Route::get('/about', 'Web\PageController@about');
Route::get('/news', 'Web\PageController@news');
Route::get('/contact', 'Web\PageController@contact');
Route::get('/shop', 'Web\PageController@shop');
Route::get('/club-list', 'Web\PageController@club');
Route::get('/team', 'Web\PageController@team');
Route::get('/gallery', 'HomeController@gallery');
Route::get('home','HomeController@index');
Route::get('getconfig','HomeController@getconfig');
Route::get('insertConfig','HomeController@insertConfig');

Route::get('/post/{slug}', 'Web\PageController@post')->name('post');
Route::get('/category/{slug}', 'Web\PageController@category')->name('category');
Route::get('/tag/{slug}', 'Web\PageController@tag')->name('tag');
Route::get('/cat/{slug}', 'Web\PageController@getPage');
Route::get('/cat/shop/{slug}', 'Web\PageController@getDetailShop');
Route::get('/cat/detail/{slug}', 'Web\PageController@getDetailAll');
Route::get('/cat/player/detail/{slug}', 'Web\PageController@getDetailPayerAll');
Route::get('/cat/league-table/{slug}', 'Web\PageController@getDetailListLeague');

Route::resource('tags', 		'Admin\TagController');
Route::resource('categories', 	'Admin\CategoryController');
Route::resource('players', 	'Admin\PlayerController');
Route::resource('subcategories', 	'Admin\SubCategoryController');
Route::resource('posts', 		'Admin\PostController');
Route::resource('teams', 		'Admin\TeamController');
Route::resource('clubs', 		'Admin\ClubController');
Route::resource('sliders', 		'Admin\SliderController');
Route::resource('measures', 		'Admin\MeasureController');
Route::resource('productcats', 		'Admin\CategoryProductController');
Route::resource('brands', 		'Admin\BrandController');
Route::resource('products', 		'Admin\ProductController');
Route::resource('matchs', 		'Admin\MatchController');
Route::resource('leagues', 		'Admin\LeagueController');
Route::resource('leaguescores', 		'Admin\LeagueScoreController');
Route::resource('leaguescoredetails', 		'Admin\DetailLeagueController');
Route::resource('sponsors', 		'Admin\SponserController');
Route::resource('champions', 		'Admin\ChampionController');
Route::resource('matchgallerys', 		'Admin\GalleryController');
Route::resource('users', 		'Admin\UserController');
Route::resource('positions', 		'Admin\PositionController');
Route::resource('admin_news', 		'Admin\NewsController');

$this->get('/login',function(){  
	return redirect('/');
});

$this->get('/register',function(){
	return redirect('loginsite');
});



