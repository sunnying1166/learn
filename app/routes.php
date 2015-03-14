<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('hello',array('as' => 'hello', function(){
	$text = Session::get('text');
	Log::info($text);
	return View::make('hello')->with('text', $text);}));
Route::get('/', function()
{
	$allText = Text::all()->toArray();
	Session::put("text", $allText);
	return View::make('hello')->with('text', $allText);
});
Route::get('/index', function(){

	$allText = Text::all()->toArray();
	Session::put("text", $allText);
	return View::make('index')->with('text', $allText);
});
Route::get('/post',function(){return View::make('post');});
/************************User******************************/
Route::get('/user/login',function(){return View::make('login');});
Route::post('/user/login', 'UserController@login');
Route::get('/user/logout', 'UserController@logout');
Route::get('/user/register', function(){return View::make('reg');});
Route::post('/user/register','UserController@register');
Route::post('/user/registPre','UserController@registPre');
Route::get('/user/fromEmail','UserController@completeRegister');
Route::post('/user/completeRegister','UserController@register');
Route::get('post', function(){return View::make('post');});
Route::get('info', array('as'=>'info','uses'=>function(){
	return View::make('info');
}));
Route::get('forum', function(){return View::make('forum');});
Route::get('/course/{textid}', function($textid){
	Log::info("textid->".$textid);
	$single_text = Text::find($textid)->toArray();
	$anno = Word::where('wsd', '=', $single_text['textsd'])->get()->toArray();
	Log::info($anno);
	Log::info($single_text);
	return View::make('course')->with('single_text', $single_text)
							->with('text', Session::get('text'))
							->with('anno', $anno);
});
/************************Sententce Order******************************/

Route::get('/SentenceOrder','OrdersentController@getAll');

/************************EveryDayaQuestion******************************/

/***********************User info ************************************/

Route::post('user/infochange','UserController@infochange');

/**********************************************************************/
