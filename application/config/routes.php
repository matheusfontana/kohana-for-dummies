<?php
#application/config/routes.php
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'index',
));

Route::set('dummy_default', '(<controller>(/<action>))')
	->defaults(array(
		'controller' => 'dummy',
		'action'     => 'index',
));

Route::set('dummy_plus_welcome', '(<controller>(/<action>))')
	->defaults(array(
		'controller' => 'dummy',
		'action'     => 'welcome',
));
?>