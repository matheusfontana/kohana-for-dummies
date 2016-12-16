<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dummy extends Controller_Template {
	public $template = 'dummy';

	public function action_index()
	{
		$header = View::factory('blocks/header');
        $header->set('title', 'Racing');

        $planes = array(
        	array(
        		'image' => 'http://www.executiveline.com.br/blog/wp-content/uploads/2016/11/GP-Brasil-de-f%C3%B3rmula-1-150x150.jpg',
        		'name' => 'Formula1'
        	), 
        	array(
        		'image' => 'http://www.gannett-cdn.com/-mm-/ee91b76622c66a1bf595bd8a9d96c4263bd07e28/c=1145-0-3551-2406&r=x153&c=150x150/local/-/media/2015/11/22/USATODAY/USATODAY/635838232834419025-2015-11-22-NASCAR6.jpg',
        		'name' => 'NASCAR'
        	),
        	array(
        		'image' => 'http://sportscar365.com/wp-content/uploads/2013/09/fiagtzandvoort-150x150.jpg',
        		'name' => 'FIA GT'
        	),
        	array(
        		'image' => 'http://www.gannett-cdn.com/-mm-/e3b4ea1e008f8e02e7008c3ebd033edbe8c2d2a7/c=0-170-1807-1977&r=x153&c=150x150/local/-/media/2015/01/29/USATODAY/USATODAY/635581466932586839-C08-INDYCAR-04.jpg',
        		'name' => 'IndyCAR'
        	),//
        );

        $content = View::factory('blocks/gridcolumn');
        $content->set('pageheader', 'RACE CARS');
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