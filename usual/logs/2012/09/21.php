<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-21 01:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 01:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/u865562244/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-21 01:06:24 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-21 01:06:24 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 01:21:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 01:21:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/u865562244/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-21 01:21:19 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-21 01:21:19 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 05:17:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 05:17:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/u865562244/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-21 05:17:36 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-21 05:17:36 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 21:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 21:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(103): Kohana_Request->execute()
#1 {main}
2012-09-21 21:19:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-21 21:19:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-21 22:37:10 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Lost connection to MySQL server at 'reading initial communication packet', system error: 111 ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 67 ]
2012-09-21 22:37:10 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Lost connection to MySQL server at 'reading initial communication packet', system error: 111 ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 67 ]
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