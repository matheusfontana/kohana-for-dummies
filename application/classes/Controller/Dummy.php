<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dummy extends Controller_Template {
	public $template = 'dummy';

	public function action_index()
	{
		try{
			$header = View::factory('blocks/header');
	        $header->set('title', 'Racing');

	        $cars = array(
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
	        	),
	        );

	        $helis = array(
	        	array(
	        		'image' => 'http://www.helihub.com/wordpress/wp-content/uploads/uh1h-huey-ii-iraq3-150x150.jpg',
	        		'name' => 'Bell UH-1H HUEY II'
	        	), 
	        	array(
	        		'image' => 'http://www.helihub.com/wordpress/wp-content/uploads/ich47f-italy2-150x150.jpg',
	        		'name' => 'Boeing CH-47 Chinook'
	        	),
	        	array(
	        		'image' => 'http://www.helihub.com/wordpress/wp-content/uploads/ah64-6-150x150.jpg',
	        		'name' => 'Boeing AH-64 Apache'
	        	),
	        	array(
	        		'image' => 'http://www.helihub.com/wordpress/wp-content/uploads/uh601-150x150.jpg',
	        		'name' => 'Sikorsky UH-60 Black Hawk'
	        	),//
	        );

	        $content1 = View::factory('blocks/gridcolumn');
	        $content1->set('pageheader', 'RACE CARS');
	        $content1->set('arrayData', $cars);

	        $content2 = View::factory('blocks/gridcolumn');
	        $content2->set('pageheader', 'HELICOPTERS');
	        $content2->set('arrayData', $helis);

	        $footer = View::factory('blocks/footer');

	        $this->template->set('header', $header);
	        $this->template->set('content', $content1.$content2);
	        $this->template->set('footer', $footer);
        } catch (Exception $e) {
        	throw $e->getMessage();
        }
	}

	public function action_welcome()
	{
		$view = Request::factory('welcome')->execute();
	 
	    $about_page = (string) $view;
	 
	    $this->response->body($about_page);
	}

} // End