<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dummy extends Controller {

	public function action_index()
	{
		$this->response->body('hello, dummy!');
	}

	public function action_welcome()
	{
		//We will use it later
	}

} // End