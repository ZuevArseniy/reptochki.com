<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-22 03:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 03:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 03:37:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 03:37:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 03:40:52 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Lost connection to MySQL server at 'reading initial communication packet', system error: 111 ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 67 ]
2012-09-22 03:40:52 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Lost connection to MySQL server at 'reading initial communication packet', system error: 111 ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 67 ]
--
#0 /home/reptochk/modules/profilertoolbar/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /home/reptochk/modules/profilertoolbar/classes/kohana/database/mysql.php(392): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/reptochk/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('studios')
#3 /home/reptochk/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /home/reptochk/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /home/reptochk/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /home/reptochk/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /home/reptochk/usual/classes/controller/studio.php(18): Kohana_ORM::factory('studio')
#8 [internal function]: Controller_Studio->action_list()
#9 /home/reptochk/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#10 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#13 {main}
2012-09-22 03:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 03:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 03:40:52 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 03:40:52 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 03:44:12 --- ERROR: Database_Exception [ 1044 ]: Access denied for user 'reptochk_rep'@'localhost' to database 'reptochk_u865562244_rep' ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 108 ]
2012-09-22 03:44:12 --- STRACE: Database_Exception [ 1044 ]: Access denied for user 'reptochk_rep'@'localhost' to database 'reptochk_u865562244_rep' ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 108 ]
--
#0 /home/reptochk/modules/profilertoolbar/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('reptochk_u86556...')
#1 /home/reptochk/modules/profilertoolbar/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /home/reptochk/modules/profilertoolbar/classes/kohana/database/mysql.php(392): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/reptochk/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('studios')
#4 /home/reptochk/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#5 /home/reptochk/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#6 /home/reptochk/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#7 /home/reptochk/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#8 /home/reptochk/usual/classes/controller/studio.php(18): Kohana_ORM::factory('studio')
#9 [internal function]: Controller_Studio->action_list()
#10 /home/reptochk/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#11 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#14 {main}
2012-09-22 03:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 03:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 03:49:35 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 03:49:35 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 03:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 03:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 03:49:41 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 03:49:41 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 04:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 04:12:38 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 04:12:38 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 04:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 04:30:40 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 04:30:40 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 04:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 04:30:50 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 04:30:50 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 04:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 04:31:07 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 04:31:07 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 04:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 04:31:48 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 04:31:48 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:36:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 04:36:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 04:36:22 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 04:36:22 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:46:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-22 04:46:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:47:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-22 04:47:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fileupload.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 04:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fileupload.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 04:47:53 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 04:47:53 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fileupload.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 04:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fileupload.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 04:52:36 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 04:52:36 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fileupload.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 04:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fileupload.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 04:53:14 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 04:53:14 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:53:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fileupload.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 04:53:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fileupload.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 04:53:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 04:53:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fileupload.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 04:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fileupload.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 04:57:29 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 04:57:29 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:57:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-22 04:57:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 04:58:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-22 04:58:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:00:37 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:00:37 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:00:43 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:00:43 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:02:19 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ MODPATH/admin/classes/controller/admin/studio.php [ 63 ]
2012-09-22 05:02:19 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ MODPATH/admin/classes/controller/admin/studio.php [ 63 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', '/home/reptochk/...', 63, Array)
#1 /home/reptochk/modules/admin/classes/controller/admin/studio.php(63): mkdir('upload/medium/s...', 1)
#2 [internal function]: Controller_Admin_Studio->action_photo()
#3 /home/reptochk/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#4 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#7 {main}
2012-09-22 05:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:02:20 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:02:20 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:03:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:03:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:03:19 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:03:19 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/rep-baza.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/rep-baza.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/1287993019_131903686_1----1287993019.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/1287993019_131903686_1----1287993019.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:04:34 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:04:34 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:04:34 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:04:34 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/rep-baza.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/rep-baza.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:04:57 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:04:57 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/1287993019_131903686_1----1287993019.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/1287993019_131903686_1----1287993019.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:04:57 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:04:57 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:04:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/rep-baza.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:04:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/rep-baza.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:04:59 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:04:59 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:04:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/1287993019_131903686_1----1287993019.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:04:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/1287993019_131903686_1----1287993019.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:04:59 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:04:59 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:07:27 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:07:27 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:08:18 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:08:18 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:08:31 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:08:31 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/505d8e1e0d77f.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/505d8e1e0d77f.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/505d8e1e13343.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio2/505d8e1e13343.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:08:32 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:08:32 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:08:32 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:08:32 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:17:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:17:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:17:15 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:17:15 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:17:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:17:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:17:28 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:17:28 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:30:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:30:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:30:31 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:30:31 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:33:25 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:33:25 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:33:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:33:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:33:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:33:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:33:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:33:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:33:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:33:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:34:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:34:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:34:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:34:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:34:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:34:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:34:05 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:34:05 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:34:05 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:34:05 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:34:19 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:34:19 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:34:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:34:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:34:23 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:34:23 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:34:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:34:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:34:30 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:34:30 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:42:46 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:42:46 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:42:50 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:42:50 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:46:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:46:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/bootstrap.min.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styles.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styles.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:53:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:53:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:53:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:53:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fileupload.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/fileupload.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:53:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:53:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/detail.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/detail.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:53:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:53:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap-carousel.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap-carousel.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:53:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:53:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:53:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:53:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/velcom.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/velcom.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:53:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:53:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:53:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:53:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/mts.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/mts.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:53:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:53:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:53:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:53:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:53:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:53:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:53:47 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:53:47 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:54:34 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:54:34 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:54:34 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:54:34 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:54:34 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:54:34 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:54:35 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:54:35 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:54:35 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:54:35 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:54:46 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:54:46 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/velcom.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/velcom.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:55:16 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:55:16 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/mts.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/mts.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:55:16 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:55:16 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:57:14 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:57:14 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:57:20 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:57:20 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:57:21 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:57:21 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:57:21 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:57:21 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:57:21 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:57:21 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:57:21 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:57:21 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/velcom.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/velcom.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:57:38 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:57:38 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 05:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/mts.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 05:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/mts.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 05:57:38 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 05:57:38 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:00:15 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:00:15 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:01:16 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:01:16 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:01:17 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:01:17 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:01:17 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:01:17 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:01:17 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:01:17 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:01:17 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:01:17 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:01:36 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:01:36 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:04:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:04:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:04:11 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:04:11 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:04:21 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:04:21 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:04:22 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:04:22 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:04:22 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:04:22 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:04:22 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:04:22 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:04:22 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:04:22 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:04:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:04:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:04:38 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:04:38 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:06:36 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:06:36 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:06:36 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:06:36 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:06:36 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:06:36 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:06:36 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:06:36 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:06:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:06:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:06:37 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:06:37 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:06:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:06:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:06:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:06:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:06:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:06:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:06:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:06:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:06:57 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:06:57 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:09:10 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:09:10 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:12:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:12:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:12:51 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:12:51 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:12:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:12:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:12:57 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:12:57 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:13:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:13:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:13:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:13:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:13:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:13:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:13:03 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:13:03 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:13:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:13:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:13:07 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:13:07 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:13:50 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:13:50 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:13:55 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:13:55 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:14:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:14:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:14:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:14:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:14:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:14:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:14:50 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:14:50 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:15:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:15:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:15:15 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:15:15 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:16:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:16:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:16:02 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:16:02 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:16:07 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:16:07 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:16:15 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:16:15 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:16:19 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:16:19 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db64dfd2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db64dfd2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:16:33 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:16:33 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db66454b.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db66454b.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db6953fa.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db6953fa.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:16:33 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:16:33 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:16:33 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:16:33 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db6ab9e8.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db6ab9e8.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db6da65c.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db6da65c.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:16:33 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:16:33 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:16:33 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:16:33 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:16:34 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:16:34 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:16:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:16:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db64dfd2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db64dfd2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:17:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:17:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db66454b.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db66454b.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db6953fa.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db6953fa.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:17:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:17:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:17:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:17:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db6ab9e8.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db6ab9e8.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:17:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:17:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db6da65c.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9db6da65c.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9e1d40a9a.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9e1d40a9a.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:17:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:17:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:17:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:17:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9e1d5548a.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9e1d5548a.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:17:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:17:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9e1d7ea35.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9e1d7ea35.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:17:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:17:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9e1d9ca71.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9e1d9ca71.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:17:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:17:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9e1dc8603.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: medium/studio18/505d9e1dc8603.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:17:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:17:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:18:24 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:18:24 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:42:59 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:42:59 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:44:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Session_Native::print_r() ~ APPPATH/classes/controller/vote.php [ 14 ]
2012-09-22 06:44:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Session_Native::print_r() ~ APPPATH/classes/controller/vote.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:44:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:44:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:44:14 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:44:14 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 06:48:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: REMOTE_ADDR ~ APPPATH/classes/controller/vote.php [ 13 ]
2012-09-22 06:48:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: REMOTE_ADDR ~ APPPATH/classes/controller/vote.php [ 13 ]
--
#0 /home/reptochk/usual/classes/controller/vote.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/reptochk/...', 13, Array)
#1 [internal function]: Controller_Vote->action_plus()
#2 /home/reptochk/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Vote))
#3 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#6 {main}
2012-09-22 06:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 06:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 06:48:12 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 06:48:12 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 07:05:10 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochk_u865562244_rep.voting' doesn't exist [ SELECT `ip`, `timestamp`, `studio_id` FROM `voting` WHERE `ip` = '93.125.99.18' AND `timestamp` > 1348229110 AND `studio_id` = '' ] ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-09-22 07:05:10 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochk_u865562244_rep.voting' doesn't exist [ SELECT `ip`, `timestamp`, `studio_id` FROM `voting` WHERE `ip` = '93.125.99.18' AND `timestamp` > 1348229110 AND `studio_id` = '' ] ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/reptochk/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ip`, `t...', false, Array)
#1 /home/reptochk/usual/classes/controller/vote.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Vote->before()
#3 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#4 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#7 {main}
2012-09-22 07:05:10 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochk_u865562244_rep.voting' doesn't exist [ SELECT `ip`, `timestamp`, `studio_id` FROM `voting` WHERE `ip` = '93.125.99.18' AND `timestamp` > 1348229110 AND `studio_id` = '' ] ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-09-22 07:05:10 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochk_u865562244_rep.voting' doesn't exist [ SELECT `ip`, `timestamp`, `studio_id` FROM `voting` WHERE `ip` = '93.125.99.18' AND `timestamp` > 1348229110 AND `studio_id` = '' ] ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/reptochk/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ip`, `t...', false, Array)
#1 /home/reptochk/usual/classes/controller/vote.php(19): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Vote->before()
#3 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#4 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#7 {main}
2012-09-22 07:07:32 --- ERROR: Exception [ 0 ]:  ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:07:32 --- STRACE: Exception [ 0 ]:  ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:07:32 --- ERROR: Exception [ 0 ]:  ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:07:32 --- STRACE: Exception [ 0 ]:  ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:08:27 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:08:27 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:08:27 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:08:27 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:08:51 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:08:51 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:08:51 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:08:51 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:10:00 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:10:00 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:10:13 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:10:13 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:11:14 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:11:14 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:11:17 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:11:17 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:11:55 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:11:55 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:11:57 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:11:57 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:19:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-22 07:19:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#3 {main}
2012-09-22 07:19:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 07:19:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 07:19:17 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 07:19:17 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 07:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 07:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 07:19:46 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 07:19:46 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 07:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 07:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 07:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon-precomposed.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 07:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon-precomposed.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 07:20:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 07:20:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 07:20:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 07:20:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 07:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 07:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 07:20:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 07:20:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 07:38:28 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:38:28 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:39:46 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:39:46 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:39:48 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:39:48 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 07:44:49 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 07:44:49 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:18 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:18 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:19 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:19 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:20 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:20 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:21 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:21 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:21 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:21 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:22 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:22 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:23 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:23 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:23 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:23 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:24 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:24 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:24 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:24 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:24 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:24 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:24 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:24 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:25 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:25 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:25 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:25 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:25 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:25 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:25 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:25 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:25 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:25 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:26 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:26 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:26 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:26 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:13:26 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:13:26 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:14:00 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:14:00 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:14:01 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:14:01 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:14:01 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:14:01 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:14:04 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:14:04 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:14:17 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:14:17 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:14:18 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:14:18 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:14:18 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:14:18 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:14:19 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:14:19 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:14:19 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:14:19 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:14:19 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:14:19 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:14:20 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:14:20 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:57:40 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:57:40 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:57:44 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:57:44 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 08:59:27 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 08:59:27 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 09:02:08 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/vote.php [ 21 ]
2012-09-22 09:02:08 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/vote.php [ 21 ]
--
#0 /home/reptochk/usual/classes/controller/vote.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/reptochk/...', 21, Array)
#1 [internal function]: Controller_Vote->before()
#2 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#3 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#6 {main}
2012-09-22 09:03:37 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/vote.php [ 21 ]
2012-09-22 09:03:37 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/vote.php [ 21 ]
--
#0 /home/reptochk/usual/classes/controller/vote.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/reptochk/...', 21, Array)
#1 [internal function]: Controller_Vote->before()
#2 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#3 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#6 {main}
2012-09-22 09:04:20 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 09:04:20 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 09:04:34 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 09:04:34 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 09:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register/kakdnkdjsbdbcskjd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-22 09:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register/kakdnkdjsbdbcskjd was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#3 {main}
2012-09-22 09:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 09:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 09:08:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 09:08:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 09:08:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 09:08:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 09:08:23 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 09:08:23 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 09:09:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 09:09:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 09:09:16 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 09:09:16 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 09:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 09:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 09:09:38 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 09:09:38 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 09:12:29 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 09:12:29 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 09:12:30 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 09:12:30 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 09:52:42 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 09:52:42 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 09:52:46 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 09:52:46 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 09:53:10 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 09:53:10 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 09:53:11 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 09:53:11 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 09:53:12 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 09:53:12 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 09:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 09:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 09:56:51 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 09:56:51 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 11:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 11:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 11:08:01 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 11:08:01 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 12:56:42 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-09-22 12:56:42 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#5 {main}
2012-09-22 13:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 13:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 13:43:02 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 13:43:02 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 13:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon-precomposed.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 13:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon-precomposed.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 13:43:02 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 13:43:02 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 13:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 13:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 13:43:03 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 13:43:03 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 15:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 15:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 15:30:34 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 15:30:34 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 16:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 16:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 16:35:15 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 16:35:15 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 17:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 17:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 17:38:59 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 17:38:59 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 18:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 18:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 18:37:25 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 18:37:25 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 18:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 18:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 18:37:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 18:37:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 18:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 18:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 18:37:28 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 18:37:28 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 20:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 20:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 20:48:43 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 20:48:43 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 20:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 20:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 20:51:55 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 20:51:55 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 21:07:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 21:07:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 21:07:52 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 21:07:52 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 21:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 21:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 21:09:53 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 21:09:53 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 23:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 23:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 23:23:15 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 23:23:15 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-22 23:33:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-22 23:33:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-22 23:33:17 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-22 23:33:17 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}