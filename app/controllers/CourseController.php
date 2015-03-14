<?php
class CourseController extends BaseController{

	public function getByGrade(){
		
		return View::make('course')->with('text', $allText);
	}
}