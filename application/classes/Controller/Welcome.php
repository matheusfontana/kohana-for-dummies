<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
	public $template = 'home';

	public function action_index()
	{
		$this->template->message = "Welcome to kohana-for-dummies";
	}
} // End Welcome
