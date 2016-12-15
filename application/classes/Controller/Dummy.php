<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dummy extends Controller_Template {
	public $template = 'dummy';

	public function action_index()
	{
		$header = View::factory('blocks/header');
        $header->set('title', 'Kohana for dummies');

        $planes = array(array(
        		'image' => 'https://thepeoplespharmacy-graedonenterpris.netdna-ssl.com/wp-content/uploads/airplane.jpg',
        		'name' => 'Boeing 737-300'
        	));

        $content = View::factory('blocks/gridcolumn');
        $content->set('pageheader', 'PaperAirplanes');
        $footer = View::factory('blocks/footer');

        $this->template->set('header', $header);
        $this->template->set('content', $content);
        $this->template->set('footer', $footer);
        
		View::set_global('planes', $planes);
	}

	public function action_welcome()
	{
		$view = Request::factory('welcome')->execute();
	 
	    $about_page = (string) $view;
	 
	    $this->response->body($about_page);
	}

} // End