<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-11 03:40:44 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'reptochk_dev'@'localhost' (using password: YES) ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 67 ]
2012-11-11 03:40:44 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'reptochk_dev'@'localhost' (using password: YES) ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/profilertoolbar/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/profilertoolbar/classes/kohana/database/mysql.php(392): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/orm.php(15): Kohana_Database_MySQL->list_columns('cities')
#3 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(392): ORM->list_columns(true)
#4 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct('1')
#7 /Users/administrator/PhpstormProjects/dev.reptochki.by/usual/classes/controller/template.php(9): Kohana_ORM::factory('city', '1')
#8 /Users/administrator/PhpstormProjects/dev.reptochki.by/usual/classes/controller/main.php(15): Controller_Template->before()
#9 [internal function]: Controller_Main->before()
#10 /Users/administrator/PhpstormProjects/dev.reptochki.by/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Studio))
#11 /Users/administrator/PhpstormProjects/dev.reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/administrator/PhpstormProjects/dev.reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/administrator/PhpstormProjects/dev.reptochki.by/index.php(104): Kohana_Request->execute()
#14 {main}
2012-11-11 03:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-11 03:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/dev.reptochki.by/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-11 03:40:45 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-11-11 03:40:45 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-11 15:25:38 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'reptochk_dev'@'localhost' (using password: YES) ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 67 ]
2012-11-11 15:25:38 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'reptochk_dev'@'localhost' (using password: YES) ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/profilertoolbar/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/profilertoolbar/classes/kohana/database/mysql.php(392): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/orm.php(15): Kohana_Database_MySQL->list_columns('cities')
#3 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(392): ORM->list_columns(true)
#4 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct('1')
#7 /Users/administrator/PhpstormProjects/dev.reptochki.by/usual/classes/controller/template.php(9): Kohana_ORM::factory('city', '1')
#8 /Users/administrator/PhpstormProjects/dev.reptochki.by/usual/classes/controller/main.php(15): Controller_Template->before()
#9 [internal function]: Controller_Main->before()
#10 /Users/administrator/PhpstormProjects/dev.reptochki.by/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Studio))
#11 /Users/administrator/PhpstormProjects/dev.reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/administrator/PhpstormProjects/dev.reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/administrator/PhpstormProjects/dev.reptochki.by/index.php(104): Kohana_Request->execute()
#14 {main}
2012-11-11 15:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-11 15:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/dev.reptochki.by/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-11 15:25:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-11-11 15:25:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}