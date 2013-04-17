<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-08 09:56:24 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'reptochk_rep'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-11-08 09:56:24 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'reptochk_rep'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/orm.php(15): Kohana_Database_MySQL->list_columns('studios')
#3 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(392): ORM->list_columns(true)
#4 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /Users/administrator/PhpstormProjects/dev.reptochki.by/usual/classes/controller/studio.php(16): Kohana_ORM::factory('studio')
#8 [internal function]: Controller_Studio->action_list()
#9 /Users/administrator/PhpstormProjects/dev.reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#10 /Users/administrator/PhpstormProjects/dev.reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/dev.reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/dev.reptochki.by/index.php(104): Kohana_Request->execute()
#13 {main}
2012-11-08 09:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-08 09:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/dev.reptochki.by/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-08 13:45:24 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'reptochk_rep'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-11-08 13:45:24 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'reptochk_rep'@'localhost' (using password: YES) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/orm.php(15): Kohana_Database_MySQL->list_columns('cities')
#3 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(392): ORM->list_columns(true)
#4 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/administrator/PhpstormProjects/dev.reptochki.by/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /Users/administrator/PhpstormProjects/dev.reptochki.by/usual/classes/controller/studio.php(8): Kohana_ORM::factory('city')
#8 [internal function]: Controller_Studio->action_list()
#9 /Users/administrator/PhpstormProjects/dev.reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#10 /Users/administrator/PhpstormProjects/dev.reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/dev.reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/dev.reptochki.by/index.php(104): Kohana_Request->execute()
#13 {main}
2012-11-08 13:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-08 13:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/dev.reptochki.by/index.php(104): Kohana_Request->execute()
#1 {main}