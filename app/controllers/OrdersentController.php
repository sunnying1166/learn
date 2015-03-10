<?php

class OrdersentController extends BaseController{

	/*
	获得所有
	*/
	public function getAll(){
		$ordersent = Ordersent::all()->toArray();
		Log::info($ordersent);
		return View::make('hello')->with('ordersent',$ordersent);
	}
}  