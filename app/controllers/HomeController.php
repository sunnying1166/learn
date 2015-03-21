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
	public function dailyQ(){
		$user = Auth::user();
		$sd = (( Auth::user()->ugrade ) - 1) * 2+ （Auth::user()->uterm）;
		Session::put('sd', $sd);
		
	}

	public function getPinyin(){
		$sd = (( Auth::user()->ugrade ) - 1) * 2+ (Auth::user()->uterm);
		Session::put('sd', $sd);
		// $items = Yicuopinyin::all();
		$sd = Session::get('sd');
		Log::info("********sd******************");
		Log::info($sd);
		LOg::info("*****************************");
		if($sd < 10)
			$sd = "0" . (string)$sd ;
		$sd = "03";
		// $items = DB::raw('select * from yicuobihua where ycbhsd like "'.$sd.'%"');
		$items = DB::raw('select * from yicuobihua');
		$items = DB::table('yicuobihua')->where('ycbhsd', 'like', $sd)->get();
		var_dump($items); 
		// $arr = $this->getNumsofItem($items);

	}

	public function getBihua(){
		$sd = Session::get('sd');
		$items = DB::raw('select * from yicuobihua where "ycbhsd" like '.$sd.'%')->toArray();
		$arr = $this->getNumsofItem($items);
	}

	public function getZixing(){
		$items = YicuoZixing::all();
	}

	/*
	*	选出3个正确的句子 一个错误的句子
	*/
	public function getIllsent(){

	}

	public function getOrdersent(){

	}

	public function getNumsofItem( $items ){


	}
}
