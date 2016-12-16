<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
	public $template = 'home';

	public function action_index()
	{
		$header = View::factory('blocks/header');
        $header->set('title', 'Kohana for dummies');
        $this->template->set('header', $header);
        
		$footer = View::factory('blocks/footer');
		$this->template->set('footer', $footer);

		$content = "<p>manHattan</p>";
		$this->template->set('content', $content);

	}
} // End Welcome
