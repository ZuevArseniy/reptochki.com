<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-05 02:41:41 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-05 02:41:41 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2012-07-05 02:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 02:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-05 07:57:03 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-05 07:57:03 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2012-07-05 07:57:20 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-05 07:57:20 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2012-07-05 07:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 07:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-05 07:57:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 07:57:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-05 07:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 07:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-05 07:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 07:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-05 07:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 07:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-05 07:59:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 07:59:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-05 08:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 08:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-05 08:01:06 --- ERROR: ErrorException [ 1 ]: Call to private Model_Room::__destruct() from context 'Controller_Test' ~ MODPATH/scheduler/classes/controller/test.php [ 0 ]
2012-07-05 08:01:06 --- STRACE: ErrorException [ 1 ]: Call to private Model_Room::__destruct() from context 'Controller_Test' ~ MODPATH/scheduler/classes/controller/test.php [ 0 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-05 08:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 08:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-05 08:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 08:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-05 08:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 08:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-05 08:13:42 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-05 08:13:42 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2012-07-05 08:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-05 08:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-05 11:45:00 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-05 11:45:00 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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