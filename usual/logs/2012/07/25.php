<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-25 12:27:41 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-25 12:27:41 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(49): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(17): Model_Studio->get_list()
#3 [internal function]: Controller_Studio->action_list()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-07-25 12:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 12:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 16:46:46 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-25 16:46:46 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(49): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(17): Model_Studio->get_list()
#3 [internal function]: Controller_Studio->action_list()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-07-25 16:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 16:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 16:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 16:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 16:55:34 --- ERROR: ErrorException [ 2048 ]: mktime() [function.mktime]: You should be using the time() function instead ~ MODPATH/scheduler/classes/controller/test.php [ 5 ]
2012-07-25 16:55:34 --- STRACE: ErrorException [ 2048 ]: mktime() [function.mktime]: You should be using the time() function instead ~ MODPATH/scheduler/classes/controller/test.php [ 5 ]
--
#0 [internal function]: Kohana_Core::error_handler()
#1 /Users/admin/PhpstormProjects/reptochki/modules/scheduler/classes/controller/test.php(5): mktime()
#2 [internal function]: Controller_Test->action_index(Object(Controller_Test))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-07-25 16:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 16:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 16:56:41 --- ERROR: ErrorException [ 2048 ]: mktime() [function.mktime]: You should be using the time() function instead ~ MODPATH/scheduler/classes/controller/test.php [ 6 ]
2012-07-25 16:56:41 --- STRACE: ErrorException [ 2048 ]: mktime() [function.mktime]: You should be using the time() function instead ~ MODPATH/scheduler/classes/controller/test.php [ 6 ]
--
#0 [internal function]: Kohana_Core::error_handler()
#1 /Users/admin/PhpstormProjects/reptochki/modules/scheduler/classes/controller/test.php(6): mktime()
#2 [internal function]: Controller_Test->action_index(Object(Controller_Test))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-07-25 16:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 16:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 16:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 16:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 16:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 16:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 16:58:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 16:58:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 16:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 16:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 16:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 16:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 17:04:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 17:04:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 17:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 17:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 02:40:34 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-07-25 02:40:34 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(49): Kohana_Database_Query->execute()
#3 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(17): Model_Studio->get_list()
#4 [internal function]: Controller_Studio->action_list()
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-07-25 02:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 02:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 02:40:49 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-07-25 02:40:49 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(49): Kohana_Database_Query->execute()
#3 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(17): Model_Studio->get_list()
#4 [internal function]: Controller_Studio->action_list()
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-07-25 02:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 02:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-25 02:40:53 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-07-25 02:40:53 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(49): Kohana_Database_Query->execute()
#3 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(17): Model_Studio->get_list()
#4 [internal function]: Controller_Studio->action_list()
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-07-25 02:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-25 02:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}