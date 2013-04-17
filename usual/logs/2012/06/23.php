<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-23 05:14:26 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-06-23 05:14:26 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(36): Kohana_Database_Query->execute()
#3 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(9): Model_Studio->get_list()
#4 [internal function]: Controller_Studio->action_list()
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-06-23 05:16:44 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-06-23 05:16:44 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(36): Kohana_Database_Query->execute()
#3 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(9): Model_Studio->get_list()
#4 [internal function]: Controller_Studio->action_list()
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-06-23 05:16:46 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-06-23 05:16:46 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(432): Kohana_Database_MySQL->connect()
#1 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database.php(473): Kohana_Database_MySQL->escape('codecode')
#2 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query/builder.php(116): Kohana_Database->quote('codecode')
#3 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query/builder/select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#4 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#5 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/index.php(57): Kohana_Database_Query->execute()
#6 [internal function]: Controller_Admin_Index->action_registration()
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#11 {main}
2012-06-23 05:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-23 05:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-23 16:48:16 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-06-23 16:48:16 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(36): Kohana_Database_Query->execute()
#3 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(9): Model_Studio->get_list()
#4 [internal function]: Controller_Studio->action_list()
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-06-23 16:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-23 16:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-23 16:49:45 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-23 16:49:45 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(36): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(9): Model_Studio->get_list()
#3 [internal function]: Controller_Studio->action_list()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-06-23 16:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-23 16:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-23 16:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-06-23 16:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-06-23 16:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-23 16:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-23 16:54:18 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-23 16:54:18 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(36): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(9): Model_Studio->get_list()
#3 [internal function]: Controller_Studio->action_list()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-06-23 16:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-23 16:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-23 16:54:38 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-23 16:54:38 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(36): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(9): Model_Studio->get_list()
#3 [internal function]: Controller_Studio->action_list()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-06-23 16:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-23 16:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-23 16:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdad was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-06-23 16:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdad was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-06-23 16:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-23 16:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-23 16:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-23 16:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-23 16:56:35 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-23 16:56:35 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(36): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(9): Model_Studio->get_list()
#3 [internal function]: Controller_Studio->action_list()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-06-23 16:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-23 16:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-06-23 16:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-23 16:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}