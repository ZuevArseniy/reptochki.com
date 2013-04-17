<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-14 17:25:44 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/MAMP/tmp/mysql/mysql.sock' (2) ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 67 ]
2012-09-14 17:25:44 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/MAMP/tmp/mysql/mysql.sock' (2) ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/profilertoolbar/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/admin/PhpstormProjects/reptochki/modules/profilertoolbar/classes/kohana/database/mysql.php(392): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('studios')
#3 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(17): Kohana_ORM::factory('studio')
#8 [internal function]: Controller_Studio->action_list()
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#13 {main}