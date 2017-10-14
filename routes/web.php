<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', function () {
    return view('login');
});

// Route::any('/',['uses' => 'IndexController@index', 'as' => 'main']);
// Route::post('order', 'DragDropController@drugDrop');
// Route::post('update-settings', 'SettingsController@store');
// //Route::get('/vote', ['uses'=>'NominationAwardsController@history', 'as' => 'history']);
// Route::get('/vote', ['uses'=>'NominationAwardsController@vote', 'as' => 'vote']);
// Route::get('/line-up', ['uses'=>'IndexController@lineUp', 'as' => 'lineup']);
// Route::get('/line-up/{artist}', ['uses'=>'IndexController@lineUp', 'as' => 'lineup']);
// Route::post('/nomination-vote', ['uses'=>'NominationAwardsController@nominationVote', 'as' => 'nominationVote']);
// Route::get('/news', ['uses'=>'PostController@index', 'as' => 'posts']);
// Route::get('/news/{postId}', ['uses'=>'PostController@index', 'as' => 'posts']);
// Route::post('/setMorePost', ['uses'=>'PostController@setMorePost', 'as' => 'setMorePost']);
// Route::get('/buy-tickets', ['uses'=>'IndexController@buyTickets', 'as' => 'buyTickets']);
// Route::get('/contact', ['uses'=>'IndexController@contact', 'as' => 'contact']);
// Route::get('/rules', ['uses'=>'IndexController@rules', 'as' => 'rules']);
// Route::get('/partners', ['uses'=>'PartnersController@index', 'as' => 'partners']);
// Route::get('/about-us', ['uses'=>'AboutController@index', 'as' => 'about']);
// Route::get('/about-us/{postId}', ['uses'=>'AboutController@index', 'as' => 'about']);
// Route::get('/history', ['uses'=>'NominationAwardsController@history', 'as' => 'history']);
// Route::get('/nomination/{nominationId}', ['uses'=>'NominationAwardsController@history', 'as' => 'history']);
// Route::post('/fingerprint-session', function (){
// 	$sessionValue = session('fingerprintId');
// 	if(!isset($sessionValue )){
// 		session(['fingerprintId' => $_POST["fingerprint"]]);
// 	}
// });

// /* Set data for 404 error page */
// \View::composer(['layouts.app', 'errors::404'], function ($view) {
// 	$obj = new \stdClass();
// 	$obj->pages = \Awards\Page::where('public',1)->orderBy('ordering', 'asc')->get();
// 	$obj->globalSettings = \Setting::all();
//     $view->with('obj', $obj);
// });