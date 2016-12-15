<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dummy extends Controller {

	public function action_index()
	{
		$this->response->body('hello, dummy!');
	}

	public function action_welcome()
	{
		$view = Request::factory('welcome')->execute();
	 
	    $about_page = (string) $view;
	 
	    $this->response->body($about_page);
	}

} // End