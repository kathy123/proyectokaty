<?php 

class studentController extends BaseController {

	public function __construct()
	{ 
		$this->beforeFilter('auth');
	}
	public function getIndex()
	{
		return View::make('est.index');
	}
}