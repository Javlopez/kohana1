<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-11 11:19:00 --- ERROR: View_Exception [ 0 ]: The requested view backend/register could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-11-11 11:19:00 --- STRACE: View_Exception [ 0 ]: The requested view backend/register could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/www/kohana1/system/classes/kohana/view.php(137): Kohana_View->set_filename('backend/registe...')
#1 /home/www/kohana1/system/classes/kohana/view.php(30): Kohana_View->__construct('backend/registe...', NULL)
#2 /home/www/kohana1/application/classes/controller/account.php(71): Kohana_View::factory('backend/registe...')
#3 [internal function]: Controller_Account->action_register()
#4 /home/www/kohana1/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#5 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana1/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-11 15:49:20 --- ERROR: ErrorException [ 1 ]: Call to a member function saved() on a non-object ~ APPPATH/classes/controller/account.php [ 77 ]
2011-11-11 15:49:20 --- STRACE: ErrorException [ 1 ]: Call to a member function saved() on a non-object ~ APPPATH/classes/controller/account.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-11 15:58:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2011-11-11 15:58:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-11 16:05:48 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Model_Users::save_user() must be an instance of A1, none given, called in /home/www/kohana1/application/classes/controller/account.php on line 76 and defined ~ APPPATH/classes/model/users.php [ 45 ]
2011-11-11 16:05:48 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Model_Users::save_user() must be an instance of A1, none given, called in /home/www/kohana1/application/classes/controller/account.php on line 76 and defined ~ APPPATH/classes/model/users.php [ 45 ]
--
#0 /home/www/kohana1/application/classes/model/users.php(45): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/home/www/kohan...', 45, Array)
#1 /home/www/kohana1/application/classes/controller/account.php(76): Model_Users->save_user('javier@php.net', 'root')
#2 [internal function]: Controller_Account->action_register()
#3 /home/www/kohana1/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#4 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana1/index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-11 16:10:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `users`.* FROM `users` AS `users` WHERE `username` = 'j@j.com' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-11-11 16:10:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `users`.* FROM `users` AS `users` WHERE `username` = 'j@j.com' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/www/kohana1/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `users`....', false, Array)
#1 /home/www/kohana1/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/www/kohana1/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /home/www/kohana1/application/classes/model/users.php(32): Kohana_ORM->find()
#4 /home/www/kohana1/application/classes/controller/account.php(74): Model_Users->unique_user('j@j.com')
#5 [internal function]: Controller_Account->action_register()
#6 /home/www/kohana1/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#7 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/www/kohana1/index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-11 16:16:42 --- ERROR: Kohana_Exception [ 0 ]: The username property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2011-11-11 16:16:42 --- STRACE: Kohana_Exception [ 0 ]: The username property does not exist in the Model_User class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/www/kohana1/application/views/backend/home.php(9): Kohana_ORM->__get('username')
#1 /home/www/kohana1/system/classes/kohana/view.php(61): include('/home/www/kohan...')
#2 /home/www/kohana1/system/classes/kohana/view.php(343): Kohana_View::capture('/home/www/kohan...', Array)
#3 /home/www/kohana1/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/www/kohana1/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/www/kohana1/application/classes/controller/backend.php(35): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Backend->action_index()
#7 /home/www/kohana1/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend))
#8 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana1/index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-11 16:18:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: logout ~ APPPATH/views/backend/home.php [ 11 ]
2011-11-11 16:18:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: logout ~ APPPATH/views/backend/home.php [ 11 ]
--
#0 /home/www/kohana1/application/views/backend/home.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 11, Array)
#1 /home/www/kohana1/system/classes/kohana/view.php(61): include('/home/www/kohan...')
#2 /home/www/kohana1/system/classes/kohana/view.php(343): Kohana_View::capture('/home/www/kohan...', Array)
#3 /home/www/kohana1/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/www/kohana1/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/www/kohana1/application/classes/controller/backend.php(35): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Backend->action_index()
#7 /home/www/kohana1/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Backend))
#8 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana1/index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-11 16:31:20 --- ERROR: ErrorException [ 8 ]: Undefined property: A1_ORM::$response ~ MODPATH/A1/classes/a1/core.php [ 102 ]
2011-11-11 16:31:20 --- STRACE: ErrorException [ 8 ]: Undefined property: A1_ORM::$response ~ MODPATH/A1/classes/a1/core.php [ 102 ]
--
#0 /home/www/kohana1/modules/A1/classes/a1/core.php(102): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 102, Array)
#1 /home/www/kohana1/application/classes/controller/backend.php(28): A1_Core->logged_in()
#2 [internal function]: Controller_Backend->before()
#3 /home/www/kohana1/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend))
#4 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana1/index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-11 16:33:36 --- ERROR: ErrorException [ 8 ]: Undefined property: A1_ORM::$response ~ MODPATH/A1/classes/a1/core.php [ 103 ]
2011-11-11 16:33:36 --- STRACE: ErrorException [ 8 ]: Undefined property: A1_ORM::$response ~ MODPATH/A1/classes/a1/core.php [ 103 ]
--
#0 /home/www/kohana1/modules/A1/classes/a1/core.php(103): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/www/kohan...', 103, Array)
#1 /home/www/kohana1/application/classes/controller/backend.php(28): A1_Core->logged_in()
#2 [internal function]: Controller_Backend->before()
#3 /home/www/kohana1/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Backend))
#4 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/www/kohana1/index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-11 16:36:09 --- ERROR: ErrorException [ 1 ]: Call to undefined function headers() ~ MODPATH/A1/classes/a1/core.php [ 102 ]
2011-11-11 16:36:09 --- STRACE: ErrorException [ 1 ]: Call to undefined function headers() ~ MODPATH/A1/classes/a1/core.php [ 102 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-11 16:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ac6516165e was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-11 16:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ac6516165e was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/www/kohana1/index.php(110): Kohana_Request->execute()
#3 {main}
2011-11-11 16:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ac6516165e was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-11 16:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ac6516165e was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/www/kohana1/index.php(110): Kohana_Request->execute()
#3 {main}
2011-11-11 16:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ac6516165e was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-11 16:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ac6516165e was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/www/kohana1/index.php(110): Kohana_Request->execute()
#3 {main}
2011-11-11 16:48:51 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-11-11 16:48:51 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/www/kohana1/system/classes/kohana/view.php(137): Kohana_View->set_filename('index')
#1 /home/www/kohana1/system/classes/kohana/view.php(30): Kohana_View->__construct('index', NULL)
#2 /home/www/kohana1/application/classes/controller/example.php(7): Kohana_View::factory('index')
#3 [internal function]: Controller_Example->action_index()
#4 /home/www/kohana1/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Example))
#5 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana1/index.php(110): Kohana_Request->execute()
#8 {main}
2011-11-11 16:49:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: registerurl22 ~ APPPATH/views/backend/login.php [ 32 ]
2011-11-11 16:49:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: registerurl22 ~ APPPATH/views/backend/login.php [ 32 ]
--
#0 /home/www/kohana1/application/views/backend/login.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/www/kohan...', 32, Array)
#1 /home/www/kohana1/system/classes/kohana/view.php(61): include('/home/www/kohan...')
#2 /home/www/kohana1/system/classes/kohana/view.php(343): Kohana_View::capture('/home/www/kohan...', Array)
#3 /home/www/kohana1/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/www/kohana1/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/www/kohana1/application/classes/controller/account.php(104): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Account->after()
#7 /home/www/kohana1/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Account))
#8 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/www/kohana1/index.php(110): Kohana_Request->execute()
#11 {main}
2011-11-11 17:06:24 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-11-11 17:06:24 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/www/kohana1/system/classes/kohana/view.php(137): Kohana_View->set_filename('index')
#1 /home/www/kohana1/system/classes/kohana/view.php(30): Kohana_View->__construct('index', NULL)
#2 /home/www/kohana1/application/classes/controller/example.php(7): Kohana_View::factory('index')
#3 [internal function]: Controller_Example->action_index()
#4 /home/www/kohana1/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Example))
#5 /home/www/kohana1/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/www/kohana1/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/www/kohana1/index.php(110): Kohana_Request->execute()
#8 {main}