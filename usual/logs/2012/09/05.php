<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-05 17:35:20 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-09-05 17:35:20 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
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
2012-09-05 17:35:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-05 17:35:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-05 17:39:57 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-09-05 17:39:57 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'mysql.hostinger.com.ua' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
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
2012-09-05 17:40:31 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'reptocki' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-09-05 17:40:31 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'reptocki' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('reptocki')
#1 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#3 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(49): Kohana_Database_Query->execute()
#4 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(17): Model_Studio->get_list()
#5 [internal function]: Controller_Studio->action_list()
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-09-05 17:40:47 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-05 17:40:47 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2012-09-05 17:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL im was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-05 17:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL im was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-05 17:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ima was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-05 17:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ima was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-05 17:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL imag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-05 17:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL imag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-05 17:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-05 17:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL image was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-05 17:45:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/l was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-05 17:45:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/l was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-05 17:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/lis was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-05 17:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/lis was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-05 17:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-05 17:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-05 17:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-05 17:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list_ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-05 17:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list_b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-05 17:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list_b was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-05 17:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/list_bg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-05 17:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/list_bg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-05 17:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/list_bg. ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-05 17:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/list_bg. ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-05 17:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/list_bg.p ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-05 17:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/list_bg.p ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-05 17:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/list_bg.pn ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-05 17:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/list_bg.pn ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-05 17:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/list_bg_.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-05 17:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/list_bg_.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}