<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-29 04:24:46 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-29 04:24:46 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios' doesn't exist [ SELECT `id`, `title`, `meta`, `lat`, `lon`, `phones`, `description`, `adress`, `schedule` FROM `studios` ORDER BY `sort_index` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `t...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/usual/classes/model/studio.php(39): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(9): Model_Studio->get_list()
#3 [internal function]: Controller_Studio->action_list()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-06-29 04:24:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-29 04:24:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}