<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-14 18:05:23 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\projetos\kohana-for-dummies\application\classes\Controller\Welcome.php:8
2016-12-14 18:05:23 --- DEBUG: #0 C:\projetos\kohana-for-dummies\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\projetos\\koh...', 8, Array)
#1 C:\projetos\kohana-for-dummies\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\projetos\kohana-for-dummies\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\projetos\kohana-for-dummies\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\projetos\kohana-for-dummies\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\projetos\kohana-for-dummies\index.php(118): Kohana_Request->execute()
#7 {main} in C:\projetos\kohana-for-dummies\application\classes\Controller\Welcome.php:8
2016-12-14 18:06:41 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\projetos\kohana-for-dummies\application\classes\Controller\Welcome.php:8
2016-12-14 18:06:41 --- DEBUG: #0 C:\projetos\kohana-for-dummies\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\projetos\\koh...', 8, Array)
#1 C:\projetos\kohana-for-dummies\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\projetos\kohana-for-dummies\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\projetos\kohana-for-dummies\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\projetos\kohana-for-dummies\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\projetos\kohana-for-dummies\index.php(118): Kohana_Request->execute()
#7 {main} in C:\projetos\kohana-for-dummies\application\classes\Controller\Welcome.php:8
2016-12-14 18:06:43 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in C:\projetos\kohana-for-dummies\application\classes\Controller\Welcome.php:8
2016-12-14 18:06:43 --- DEBUG: #0 C:\projetos\kohana-for-dummies\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\projetos\\koh...', 8, Array)
#1 C:\projetos\kohana-for-dummies\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\projetos\kohana-for-dummies\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\projetos\kohana-for-dummies\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\projetos\kohana-for-dummies\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\projetos\kohana-for-dummies\index.php(118): Kohana_Request->execute()
#7 {main} in C:\projetos\kohana-for-dummies\application\classes\Controller\Welcome.php:8
2016-12-14 18:07:46 --- CRITICAL: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\projetos\kohana-for-dummies\system\classes\Kohana\View.php:145
2016-12-14 18:07:46 --- DEBUG: #0 C:\projetos\kohana-for-dummies\system\classes\Kohana\View.php(145): Kohana_View->set_filename('home')
#1 C:\projetos\kohana-for-dummies\system\classes\Kohana\View.php(30): Kohana_View->__construct('home', NULL)
#2 C:\projetos\kohana-for-dummies\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('home')
#3 C:\projetos\kohana-for-dummies\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\projetos\kohana-for-dummies\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\projetos\kohana-for-dummies\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\projetos\kohana-for-dummies\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\projetos\kohana-for-dummies\index.php(118): Kohana_Request->execute()
#9 {main} in C:\projetos\kohana-for-dummies\system\classes\Kohana\View.php:145