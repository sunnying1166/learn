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
		$sd = (( Auth::user()->ugrade ) - 1) * 2+ （Auth::user()->uterm）;
		Session::put('sd', $sd);
		
	}

	public function getPinyin(){
		$items = Yicuopinyin::all()->toArray();

	}

	public function getBihua(){
		$sd = Session::get('sd');
		$items = DB::raw('select * from yicuobihua where ycbhsd like '.$sd.'%')->toArray();
		$arr = $this->getNumsofItem（$items);
	}

	public function getZixing(){
		$items = YicuoZixing::all()->toArray();
	}

	/*
	*	选出3个正确的句子 一个错误的句子
	*/
	public function getIllsent(){
		$items = 
	}

	public function getOrdersent(){

	}

	public function getNumsofItem( $items ){


	}
}
