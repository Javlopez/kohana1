<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-10 17:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-10 17:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/www/kohana1/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-10 17:37:02 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-11-10 17:37:02 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/www/kohana1/system/classes/kohana/view.php(137): Kohana_View->set_filename('index')
#1 /home/www/kohana1/system/classes/kohana/view.php(30): Kohana_View->__construct('index', NULL)
#2 /home/www/kohana1/application/classes/controller/example.php(7): Kohana_View::factory('index')
#3 [internal function]: Controller_Example->action_index()
#4 /home/www/kohana1/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Example))
#5 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana1/index.php(109): Kohana_Request->execute()
#8 {main}