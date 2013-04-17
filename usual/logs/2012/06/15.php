<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-15 14:59:43 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-06-15 14:59:43 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(11): Kohana_Database_Query->execute()
#3 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(9): Model_Studio->get_list()
#4 [internal function]: Controller_Studio->action_list()
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-06-15 14:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 14:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 14:59:54 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Admin_Template' not found ~ APPPATH/classes/controller/admin/index.php [ 3 ]
2012-06-15 14:59:54 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Admin_Template' not found ~ APPPATH/classes/controller/admin/index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_admi...')
#1 {main}
2012-06-15 14:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 14:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:01:12 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Admin_Template' not found ~ APPPATH/classes/controller/admin/index.php [ 3 ]
2012-06-15 15:01:12 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Admin_Template' not found ~ APPPATH/classes/controller/admin/index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_admi...')
#1 {main}
2012-06-15 15:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:02:32 --- ERROR: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
2012-06-15 15:02:32 --- STRACE: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-15 15:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:03:35 --- ERROR: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
2012-06-15 15:03:35 --- STRACE: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-15 15:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:05:36 --- ERROR: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
2012-06-15 15:05:36 --- STRACE: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-15 15:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:05:39 --- ERROR: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
2012-06-15 15:05:39 --- STRACE: ErrorException [ 1 ]: Class 'Auth_Orm' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-15 15:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:06:08 --- ERROR: ErrorException [ 1 ]: Class 'Auth_ORM' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
2012-06-15 15:06:08 --- STRACE: ErrorException [ 1 ]: Class 'Auth_ORM' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-15 15:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:09:22 --- ERROR: ErrorException [ 1 ]: Class 'Auth_ORM' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
2012-06-15 15:09:22 --- STRACE: ErrorException [ 1 ]: Class 'Auth_ORM' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-15 15:09:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:09:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:09:25 --- ERROR: ErrorException [ 1 ]: Class 'Auth_ORM' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
2012-06-15 15:09:25 --- STRACE: ErrorException [ 1 ]: Class 'Auth_ORM' not found ~ MODPATH/auth/classes/kohana/auth.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-15 15:09:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:09:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index/login ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index/login ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:12:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index/login ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:12:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index/login ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 15:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 15:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 16:44:20 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-06-15 16:44:20 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(11): Kohana_Database_Query->execute()
#3 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(9): Model_Studio->get_list()
#4 [internal function]: Controller_Studio->action_list()
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-06-15 16:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 16:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 16:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 16:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-15 16:45:40 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-06-15 16:45:40 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(11): Kohana_Database_Query->execute()
#3 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(9): Model_Studio->get_list()
#4 [internal function]: Controller_Studio->action_list()
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-06-15 16:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-15 16:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}