<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	/*
	* 每日一答
	*/ 
	public function dailyQ{
		$user = Auth::user();
		$ugrade = $user->ugrade;

	}

	public function getPinyin(){
		$items = Yicuopinyin::
	}

	public function getBihua(){

	}

	public function getZixing(){

	}

	/*
	*	选出3个正确的句子 一个错误的句子
	*/
	public function getIllsent(){

	}

	public function getOrdersent(){

	}
}
