<?php
class CourseController extends BaseController{

	public function getByGrade(){
		$allText = Text::all()->toArray();
		Log::info($allText);
		return View::make('course')->with('text', $allText);
	}
}