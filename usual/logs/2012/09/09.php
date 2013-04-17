<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-09 12:17:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:17:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:17:55 --- ERROR: Kohana_HTTP_Exception_503 [ 503 ]: orm,auth,image modules should be installed ~ MODPATH/jqupload/classes/controller/example.php [ 16 ]
2012-09-09 12:17:55 --- STRACE: Kohana_HTTP_Exception_503 [ 503 ]: orm,auth,image modules should be installed ~ MODPATH/jqupload/classes/controller/example.php [ 16 ]
--
#0 [internal function]: Controller_Example->before()
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Example))
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-09-09 12:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:19:19 --- ERROR: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The first argument should be either a string or an integer ~ MODPATH/jqupload/classes/controller/example.php [ 15 ]
2012-09-09 12:19:19 --- STRACE: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The first argument should be either a string or an integer ~ MODPATH/jqupload/classes/controller/example.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(Array, Array)
#1 /Users/admin/PhpstormProjects/reptochki/modules/jqupload/classes/controller/example.php(15): array_key_exists()
#2 [internal function]: Controller_Example->before(Object(Controller_Example))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-09-09 12:19:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:19:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:21:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: modules ~ MODPATH/jqupload/classes/controller/example.php [ 15 ]
2012-09-09 12:21:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: modules ~ MODPATH/jqupload/classes/controller/example.php [ 15 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/jqupload/classes/controller/example.php(15): Kohana_Core::error_handler()
#1 [internal function]: Controller_Example->before(Object(Controller_Example))
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-09 12:21:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:21:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:21:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: modules ~ MODPATH/jqupload/classes/controller/example.php [ 15 ]
2012-09-09 12:21:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: modules ~ MODPATH/jqupload/classes/controller/example.php [ 15 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/jqupload/classes/controller/example.php(15): Kohana_Core::error_handler()
#1 [internal function]: Controller_Example->before(Object(Controller_Example))
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-09 12:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:21:52 --- ERROR: ErrorException [ 8 ]: Undefined index:  image ~ MODPATH/jqupload/classes/controller/example.php [ 15 ]
2012-09-09 12:21:52 --- STRACE: ErrorException [ 8 ]: Undefined index:  image ~ MODPATH/jqupload/classes/controller/example.php [ 15 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/jqupload/classes/controller/example.php(15): Kohana_Core::error_handler()
#1 [internal function]: Controller_Example->before(Object(Controller_Example))
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-09 12:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:23:31 --- ERROR: Kohana_HTTP_Exception_503 [ 503 ]: orm,auth,image modules should be installed ~ MODPATH/jqupload/classes/controller/example.php [ 16 ]
2012-09-09 12:23:31 --- STRACE: Kohana_HTTP_Exception_503 [ 503 ]: orm,auth,image modules should be installed ~ MODPATH/jqupload/classes/controller/example.php [ 16 ]
--
#0 [internal function]: Controller_Example->before()
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Example))
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-09-09 12:23:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:23:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:23:54 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.images' doesn't exist [ SHOW FULL COLUMNS FROM `images` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 12:23:54 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.images' doesn't exist [ SHOW FULL COLUMNS FROM `images` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('images')
#2 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Users/admin/PhpstormProjects/reptochki/modules/jqupload/classes/controller/example.php(33): Kohana_ORM::factory('image')
#7 [internal function]: Controller_Example->action_simple()
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Example))
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#12 {main}
2012-09-09 12:23:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:23:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:25:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/jqupload/classes/controller/example.php [ 41 ]
2012-09-09 12:25:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/jqupload/classes/controller/example.php [ 41 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/jqupload/classes/controller/example.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Example->action_simple(Object(Controller_Example))
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-09 12:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:27:33 --- ERROR: Kohana_HTTP_Exception_403 [ 403 ]: You can't upload the files ~ MODPATH/jqupload/classes/controller/example.php [ 31 ]
2012-09-09 12:27:33 --- STRACE: Kohana_HTTP_Exception_403 [ 403 ]: You can't upload the files ~ MODPATH/jqupload/classes/controller/example.php [ 31 ]
--
#0 [internal function]: Controller_Example->before()
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Example))
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-09-09 12:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 12:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-09 12:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 12:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-09 12:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 12:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-09 12:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 12:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-09 12:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:54:03 --- ERROR: ErrorException [ 2 ]: DirectoryIterator::__construct(/Users/admin/PhpstormProjects/reptochki/public_html/uploads/) [directoryiterator.--construct]: failed to open dir: No such file or directory ~ MODPATH/files/classes/controller/files.php [ 38 ]
2012-09-09 12:54:03 --- STRACE: ErrorException [ 2 ]: DirectoryIterator::__construct(/Users/admin/PhpstormProjects/reptochki/public_html/uploads/) [directoryiterator.--construct]: failed to open dir: No such file or directory ~ MODPATH/files/classes/controller/files.php [ 38 ]
--
#0 [internal function]: Kohana_Core::error_handler('/Users/admin/Ph...')
#1 /Users/admin/PhpstormProjects/reptochki/modules/files/classes/controller/files.php(38): DirectoryIterator->__construct()
#2 [internal function]: Controller_Files->action_index(Object(Controller_Files))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-09-09 12:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:54:45 --- ERROR: Kohana_Exception [ 0 ]: The requested route does not exist: default ~ SYSPATH/classes/kohana/route.php [ 106 ]
2012-09-09 12:54:45 --- STRACE: Kohana_Exception [ 0 ]: The requested route does not exist: default ~ SYSPATH/classes/kohana/route.php [ 106 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/route.php(192): Kohana_Route::get('default')
#1 /Users/admin/PhpstormProjects/reptochki/modules/files/views/files.php(47): Kohana_Route::url('default', Array)
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#4 /Users/admin/PhpstormProjects/reptochki/modules/files/classes/controller/files.php(58): Kohana_View->render()
#5 [internal function]: Controller_Files->action_index()
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-09-09 12:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:54:50 --- ERROR: Kohana_Exception [ 0 ]: The requested route does not exist: default ~ SYSPATH/classes/kohana/route.php [ 106 ]
2012-09-09 12:54:50 --- STRACE: Kohana_Exception [ 0 ]: The requested route does not exist: default ~ SYSPATH/classes/kohana/route.php [ 106 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/route.php(192): Kohana_Route::get('default')
#1 /Users/admin/PhpstormProjects/reptochki/modules/files/views/files.php(47): Kohana_Route::url('default', Array)
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#4 /Users/admin/PhpstormProjects/reptochki/modules/files/classes/controller/files.php(58): Kohana_View->render()
#5 [internal function]: Controller_Files->action_index()
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-09-09 12:54:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:54:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Picture not found ~ MODPATH/files/classes/controller/files.php [ 72 ]
2012-09-09 12:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Picture not found ~ MODPATH/files/classes/controller/files.php [ 72 ]
--
#0 [internal function]: Controller_Files->action_preview()
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-09-09 12:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Picture not found ~ MODPATH/files/classes/controller/files.php [ 72 ]
2012-09-09 12:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Picture not found ~ MODPATH/files/classes/controller/files.php [ 72 ]
--
#0 [internal function]: Controller_Files->action_preview()
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-09-09 12:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 12:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-09 12:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Picture not found ~ MODPATH/files/classes/controller/files.php [ 72 ]
2012-09-09 12:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Picture not found ~ MODPATH/files/classes/controller/files.php [ 72 ]
--
#0 [internal function]: Controller_Files->action_preview()
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-09-09 12:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 12:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Picture not found ~ MODPATH/files/classes/controller/files.php [ 72 ]
2012-09-09 12:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Picture not found ~ MODPATH/files/classes/controller/files.php [ 72 ]
--
#0 [internal function]: Controller_Files->action_preview()
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-09-09 12:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 13:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 13:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 13:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 13:01:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:01:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 13:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 13:02:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:02:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 13:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 13:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 13:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-09 13:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 13:12:58 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.files' doesn't exist [ SELECT `file`.* FROM `files` AS `file` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 13:12:58 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.files' doesn't exist [ SELECT `file`.* FROM `files` AS `file` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `file`.*...', 'Model_File', Array)
#1 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/PhpstormProjects/reptochki/modules/files/classes/controller/files.php(24): Kohana_ORM->find_all()
#4 [internal function]: Controller_Files->action_view()
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Files))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-09-09 13:12:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:12:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 14:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 14:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-09 14:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 14:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 14:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-09 14:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 14:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-09 14:54:39 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Studio as array ~ APPPATH/views/test/list.php [ 13 ]
2012-09-09 14:54:39 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Studio as array ~ APPPATH/views/test/list.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/admin/Ph...', Array)
#1 {main}
2012-09-09 15:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 15:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL files was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-09 15:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 15:35:09 --- ERROR: ErrorException [ 1 ]: Class 'Phone' not found ~ APPPATH/views/test/list.php [ 37 ]
2012-09-09 15:35:09 --- STRACE: ErrorException [ 1 ]: Class 'Phone' not found ~ APPPATH/views/test/list.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/admin/Ph...', Array)
#1 {main}
2012-09-09 15:35:43 --- ERROR: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ MODPATH/phones/classes/phone.php [ 7 ]
2012-09-09 15:35:43 --- STRACE: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ MODPATH/phones/classes/phone.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Model_Studio))
#1 {main}
2012-09-09 15:36:41 --- ERROR: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ MODPATH/phones/classes/phone.php [ 9 ]
2012-09-09 15:36:41 --- STRACE: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ MODPATH/phones/classes/phone.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Model_Studio))
#1 {main}
2012-09-09 15:37:35 --- ERROR: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ MODPATH/phones/classes/phone.php [ 8 ]
2012-09-09 15:37:35 --- STRACE: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ MODPATH/phones/classes/phone.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Model_Studio))
#1 {main}
2012-09-09 15:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 15:44:52 --- ERROR: Kohana_Exception [ 0 ]: The phone property does not exist in the Model_Studio class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-09 15:44:52 --- STRACE: Kohana_Exception [ 0 ]: The phone property does not exist in the Model_Studio class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(8): Kohana_ORM->__get('phone')
#1 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(37): Phone::render(Object(Model_Studio))
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString()
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#14 {main}
2012-09-09 15:45:07 --- ERROR: Kohana_Exception [ 0 ]: The phone property does not exist in the Model_Studio class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-09 15:45:07 --- STRACE: Kohana_Exception [ 0 ]: The phone property does not exist in the Model_Studio class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(8): Kohana_ORM->__get('phone')
#1 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(37): Phone::render(Object(Model_Studio))
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString()
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#14 {main}
2012-09-09 15:45:28 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ MODPATH/phones/classes/phone.php [ 7 ]
2012-09-09 15:45:28 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ MODPATH/phones/classes/phone.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Model_Studio))
#1 {main}
2012-09-09 15:46:09 --- ERROR: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ MODPATH/phones/classes/phone.php [ 9 ]
2012-09-09 15:46:09 --- STRACE: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ MODPATH/phones/classes/phone.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Model_Studio))
#1 {main}
2012-09-09 15:46:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:46:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 15:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 15:47:53 --- ERROR: View_Exception [ 0 ]: The requested view phone/phone could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-09 15:47:53 --- STRACE: View_Exception [ 0 ]: The requested view phone/phone could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(137): Kohana_View->set_filename('phone/phone')
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(30): Kohana_View->__construct('phone/phone', NULL)
#2 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(14): Kohana_View::factory('phone/phone')
#3 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(37): Phone::render(Object(Model_Studio))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString()
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 [internal function]: Kohana_Controller_Template->after()
#12 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#13 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#16 {main}
2012-09-09 15:47:58 --- ERROR: View_Exception [ 0 ]: The requested view phone/phone could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-09 15:47:58 --- STRACE: View_Exception [ 0 ]: The requested view phone/phone could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(137): Kohana_View->set_filename('phone/phone')
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(30): Kohana_View->__construct('phone/phone', NULL)
#2 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(14): Kohana_View::factory('phone/phone')
#3 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(37): Phone::render(Object(Model_Studio))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString()
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 [internal function]: Kohana_Controller_Template->after()
#12 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#13 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#16 {main}
2012-09-09 15:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 15:49:07 --- ERROR: View_Exception [ 0 ]: The requested view phone/phone could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-09 15:49:07 --- STRACE: View_Exception [ 0 ]: The requested view phone/phone could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(137): Kohana_View->set_filename('phone/phone')
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(30): Kohana_View->__construct('phone/phone', NULL)
#2 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(14): Kohana_View::factory('phone/phone')
#3 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(36): Phone::render(Object(Model_Studio))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString()
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 [internal function]: Kohana_Controller_Template->after()
#12 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#13 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#16 {main}
2012-09-09 15:51:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:51:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 15:52:04 --- ERROR: ErrorException [ 8 ]: Undefined index:  code ~ MODPATH/phones/views/phone/phone.php [ 1 ]
2012-09-09 15:52:04 --- STRACE: ErrorException [ 8 ]: Undefined index:  code ~ MODPATH/phones/views/phone/phone.php [ 1 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/phones/views/phone/phone.php(1): Kohana_Core::error_handler('/Users/admin/Ph...', Array)
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(17): Kohana_View->render(Object(Model_Studio))
#4 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(36): Phone::render('/Users/admin/Ph...', Array)
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString('/Users/admin/Ph...', Array)
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after(Object(Controller_Studio))
#13 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#14 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#16 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#17 {main}
2012-09-09 15:52:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  code ~ MODPATH/phones/views/phone/phone.php [ 1 ]
2012-09-09 15:52:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  code ~ MODPATH/phones/views/phone/phone.php [ 1 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/phones/views/phone/phone.php(1): Kohana_Core::error_handler('/Users/admin/Ph...', Array)
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(17): Kohana_View->render(Object(Model_Studio))
#4 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(36): Phone::render('/Users/admin/Ph...', Array)
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString('/Users/admin/Ph...', Array)
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after(Object(Controller_Studio))
#13 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#14 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#16 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#17 {main}
2012-09-09 15:53:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 15:53:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 15:54:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 15:54:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 15:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 15:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL velcom was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 15:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL velcom was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-09 15:56:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 15:56:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 15:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL velcom was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 15:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL velcom was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-09 15:56:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 15:56:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 15:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL velcom was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 15:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL velcom was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-09 15:59:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 15:59:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:00:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:00:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:01:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:01:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:03:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:03:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:03:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:03:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:04:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:04:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:05:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:05:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:06:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:06:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:08:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:08:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:10:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:10:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:10:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:10:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:13:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:13:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:13:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:13:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:15:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:15:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:19:10 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:19:10 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:19:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:19:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:20:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:20:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:21:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:21:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:21:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:21:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:21:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:21:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:25:09 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:25:09 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:25:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:25:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:26:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:26:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:27:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 16:27:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phones' in 'field list' [ SELECT `id`, `title`, `lat`, `lon`, `phones` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(41): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#3 [internal function]: Controller_Studio->action_markers()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 16:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 16:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 16:28:23 --- ERROR: ErrorException [ 8 ]: Undefined index:  phones ~ APPPATH/classes/model/studio.php [ 44 ]
2012-09-09 16:28:23 --- STRACE: ErrorException [ 8 ]: Undefined index:  phones ~ APPPATH/classes/model/studio.php [ 44 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(44): Kohana_Core::error_handler()
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(44): Model_Studio->get_markers()
#2 [internal function]: Controller_Studio->action_markers(Object(Controller_Studio))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-09-09 16:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 16:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 16:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 16:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:05:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/phones/views/phone/form.php [ 6 ]
2012-09-09 17:05:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/phones/views/phone/form.php [ 6 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/phones/views/phone/form.php(6): Kohana_Core::error_handler('/Users/admin/Ph...', Array)
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(35): Kohana_View->render(Object(Model_Studio), 2)
#4 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(37): Phone::render('/Users/admin/Ph...', Array)
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString('/Users/admin/Ph...', Array)
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after(Object(Controller_Studio))
#13 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#14 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#16 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#17 {main}
2012-09-09 17:05:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/phones/views/phone/form.php [ 6 ]
2012-09-09 17:05:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/phones/views/phone/form.php [ 6 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/phones/views/phone/form.php(6): Kohana_Core::error_handler('/Users/admin/Ph...', Array)
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(35): Kohana_View->render(Object(Model_Studio), 2)
#4 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(37): Phone::render('/Users/admin/Ph...', Array)
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString('/Users/admin/Ph...', Array)
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after(Object(Controller_Studio))
#13 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#14 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#16 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#17 {main}
2012-09-09 17:11:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/phones/views/phone/form.php [ 6 ]
2012-09-09 17:11:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/phones/views/phone/form.php [ 6 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/phones/views/phone/form.php(6): Kohana_Core::error_handler('/Users/admin/Ph...', Array)
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(35): Kohana_View->render(Object(Model_Studio), 2)
#4 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(37): Phone::render('/Users/admin/Ph...', Array)
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString('/Users/admin/Ph...', Array)
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after(Object(Controller_Studio))
#13 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#14 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#16 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#17 {main}
2012-09-09 17:14:06 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/phones/views/phone/form.php [ 9 ]
2012-09-09 17:14:06 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/phones/views/phone/form.php [ 9 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/phones/views/phone/form.php(9): Kohana_Core::error_handler('/Users/admin/Ph...', Array)
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(35): Kohana_View->render(Object(Model_Studio), 2)
#4 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(37): Phone::render('/Users/admin/Ph...', Array)
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString('/Users/admin/Ph...', Array)
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after(Object(Controller_Studio))
#13 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#14 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#16 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#17 {main}
2012-09-09 17:15:57 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Phone::render() must be an instance of Model_Phone, instance of Model_Studio given, called in /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php on line 37 and defined ~ MODPATH/phones/classes/phone.php [ 6 ]
2012-09-09 17:15:57 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Phone::render() must be an instance of Model_Phone, instance of Model_Studio given, called in /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php on line 37 and defined ~ MODPATH/phones/classes/phone.php [ 6 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(6): Kohana_Core::error_handler(Object(Model_Studio), 2)
#1 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(37): Phone::render('/Users/admin/Ph...', Array)
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString('/Users/admin/Ph...', Array)
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after(Object(Controller_Studio))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#13 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#14 {main}
2012-09-09 17:16:18 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/phones/views/phone/form.php [ 6 ]
2012-09-09 17:16:18 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/phones/views/phone/form.php [ 6 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/phones/views/phone/form.php(6): Kohana_Core::error_handler('/Users/admin/Ph...', Array)
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(35): Kohana_View->render(Object(Model_Phone), 2)
#4 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(37): Phone::render('/Users/admin/Ph...', Array)
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString('/Users/admin/Ph...', Array)
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after(Object(Controller_Studio))
#13 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#14 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#16 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#17 {main}
2012-09-09 17:17:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH/phones/views/phone/form.php [ 13 ]
2012-09-09 17:17:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ MODPATH/phones/views/phone/form.php [ 13 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/phones/views/phone/form.php(13): Kohana_Core::error_handler('/Users/admin/Ph...', Array)
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(36): Kohana_View->render(Object(Model_Phone), 2)
#4 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(37): Phone::render('/Users/admin/Ph...', Array)
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/PhpstormProjects/reptochki/usual/views/test/template.php(45): Kohana_View->__toString('/Users/admin/Ph...', Array)
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 [internal function]: Kohana_Controller_Template->after(Object(Controller_Studio))
#13 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#14 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#16 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#17 {main}
2012-09-09 17:19:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/phones/classes/phone.php [ 35 ]
2012-09-09 17:19:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH/phones/classes/phone.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Phone')
#1 {main}
2012-09-09 17:19:24 --- ERROR: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ MODPATH/phones/classes/phone.php [ 35 ]
2012-09-09 17:19:24 --- STRACE: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ MODPATH/phones/classes/phone.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Model_Phone), 2)
#1 {main}
2012-09-09 17:31:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:31:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:32:05 --- ERROR: ErrorException [ 8 ]: Undefined index:  phones ~ MODPATH/admin/views/admin/studio/list.php [ 18 ]
2012-09-09 17:32:05 --- STRACE: ErrorException [ 8 ]: Undefined index:  phones ~ MODPATH/admin/views/admin/studio/list.php [ 18 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/admin/views/admin/studio/list.php(18): Kohana_Core::error_handler('/Users/admin/Ph...', Array)
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/PhpstormProjects/reptochki/modules/admin/views/layout.php(55): Kohana_View->__toString('/Users/admin/Ph...', Array)
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Studio))
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-09 17:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:33:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/admin/views/admin/studio/list.php [ 11 ]
2012-09-09 17:33:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/admin/views/admin/studio/list.php [ 11 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/admin/views/admin/studio/list.php(11): Kohana_Core::error_handler('/Users/admin/Ph...', Array)
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/PhpstormProjects/reptochki/modules/admin/views/layout.php(55): Kohana_View->__toString('/Users/admin/Ph...', Array)
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Studio))
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-09 17:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:35:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user_studio.user_id' in 'where clause' [ SELECT `studio`.* FROM `studios` AS `studio` JOIN `studios` ON (`user_studio`.`studio_id` = `studios`.`id`) WHERE `user_studio`.`user_id` = '19' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 17:35:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user_studio.user_id' in 'where clause' [ SELECT `studio`.* FROM `studios` AS `studio` JOIN `studios` ON (`user_studio`.`studio_id` = `studios`.`id`) WHERE `user_studio`.`user_id` = '19' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `studio`...', 'Model_Studio', Array)
#1 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(15): Kohana_ORM->find_all()
#4 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(17): Model_Studio->get_list_for_admin('19')
#5 [internal function]: Controller_Admin_Studio->action_list()
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-09-09 17:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:36:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'studios.id' in 'on clause' [ SELECT `studio`.* FROM `studios` AS `studio` JOIN `user_studio` ON (`user_studio`.`studio_id` = `studios`.`id`) WHERE `user_studio`.`user_id` = '19' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 17:36:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'studios.id' in 'on clause' [ SELECT `studio`.* FROM `studios` AS `studio` JOIN `user_studio` ON (`user_studio`.`studio_id` = `studios`.`id`) WHERE `user_studio`.`user_id` = '19' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `studio`...', 'Model_Studio', Array)
#1 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(15): Kohana_ORM->find_all()
#4 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(17): Model_Studio->get_list_for_admin('19')
#5 [internal function]: Controller_Admin_Studio->action_list()
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-09-09 17:36:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:36:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:36:30 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Studio as array ~ MODPATH/admin/views/admin/studio/list.php [ 12 ]
2012-09-09 17:36:30 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Studio as array ~ MODPATH/admin/views/admin/studio/list.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/admin/Ph...', Array)
#1 {main}
2012-09-09 17:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:39:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Studio::get_by_id() ~ MODPATH/admin/classes/controller/admin/studio.php [ 25 ]
2012-09-09 17:39:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Studio::get_by_id() ~ MODPATH/admin/classes/controller/admin/studio.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-09 17:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:40:29 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Studio as array ~ MODPATH/admin/views/admin/studio/edit.php [ 27 ]
2012-09-09 17:40:29 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Studio as array ~ MODPATH/admin/views/admin/studio/edit.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/admin/Ph...', Array)
#1 {main}
2012-09-09 17:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:40:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/admin/views/admin/studio/edit.php [ 98 ]
2012-09-09 17:40:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/admin/views/admin/studio/edit.php [ 98 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/admin/views/admin/studio/edit.php(98): Kohana_Core::error_handler('/Users/admin/Ph...', Array)
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/PhpstormProjects/reptochki/modules/admin/views/layout.php(55): Kohana_View->__toString('/Users/admin/Ph...', Array)
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Studio))
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-09 17:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:42:16 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Studio as array ~ MODPATH/admin/views/admin/studio/edit.php [ 27 ]
2012-09-09 17:42:16 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Studio as array ~ MODPATH/admin/views/admin/studio/edit.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/admin/Ph...', Array)
#1 {main}
2012-09-09 17:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 17:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:19:05 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::update() must be an instance of Validation, array given, called in /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php on line 29 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 1247 ]
2012-09-09 18:19:05 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::update() must be an instance of Validation, array given, called in /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php on line 29 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 1247 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1247): Kohana_Core::error_handler(Array)
#1 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(29): Kohana_ORM->update()
#2 [internal function]: Controller_Admin_Studio->action_edit(Object(Controller_Admin_Studio))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-09-09 18:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:21:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/admin/views/admin/studio/edit.php [ 27 ]
2012-09-09 18:21:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/admin/views/admin/studio/edit.php [ 27 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/admin/views/admin/studio/edit.php(27): Kohana_Core::error_handler('/Users/admin/Ph...', Array)
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/PhpstormProjects/reptochki/modules/admin/views/layout.php(55): Kohana_View->__toString('/Users/admin/Ph...', Array)
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Studio))
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-09 18:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:22:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:22:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:22:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:22:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:32:06 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete phone model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-09 18:32:06 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete phone model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(29): Kohana_ORM->delete()
#1 [internal function]: Controller_Admin_Studio->action_edit()
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-09 18:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:32:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:32:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:32:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:32:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:32:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:32:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:32:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:32:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:32:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ MODPATH/admin/classes/controller/admin/studio.php [ 29 ]
2012-09-09 18:32:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ MODPATH/admin/classes/controller/admin/studio.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-09 18:32:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:32:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:38:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:38:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:38:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  phone ~ MODPATH/orm/classes/kohana/orm.php [ 1403 ]
2012-09-09 18:38:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  phone ~ MODPATH/orm/classes/kohana/orm.php [ 1403 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1403): Kohana_Core::error_handler('phone', Object(Model_Phone))
#1 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(48): Kohana_ORM->add()
#2 [internal function]: Controller_Admin_Studio->action_edit(Object(Controller_Admin_Studio))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-09-09 18:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:39:23 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ INSERT INTO `` (`studio_id`, `phone_id`) VALUES ('1', 3) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-09 18:39:23 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ INSERT INTO `` (`studio_id`, `phone_id`) VALUES ('1', 3) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `` ...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(48): Kohana_ORM->add('phones', Object(Model_Phone))
#3 [internal function]: Controller_Admin_Studio->action_edit()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-09 18:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 18:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:06:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:06:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:11:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:11:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:13:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:13:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:13:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:13:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:13:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:13:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:13:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:13:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:15:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:15:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:16:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:16:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:20:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:20:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-09 19:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}