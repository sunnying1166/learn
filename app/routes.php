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

Route::get('/', function()
{
	return View::make('hello')->with('msg', 'success');
});
Route::get('/index', function(){return View::make('index');});
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
Route::get('info', array('as'=>'info','uses'=>function(){return View::make('info');}));
Route::get('forum', function(){return View::make('forum');});
Route::get('course', function(){return View::make('course');});
/************************Sententce Order******************************/

Route::get('/SentenceOrder','OrdersentController@getAll');

/************************EveryDayaQuestion******************************/

/***********************User info ************************************/

Route::post('user/infochange','UserController@infochange');

/**********************************************************************/
