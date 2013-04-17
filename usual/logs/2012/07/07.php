<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-07 04:12:21 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.invites' doesn't exist [ SELECT * FROM `invites` JOIN `studios` ON (`invites`.`studio_id` = `studios`.`id`) WHERE `invites`.`code` = 'codecode' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-07 04:12:21 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.invites' doesn't exist [ SELECT * FROM `invites` JOIN `studios` ON (`invites`.`studio_id` = `studios`.`id`) WHERE `invites`.`code` = 'codecode' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/index.php(57): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin_Index->action_registration()
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-07-07 04:12:23 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.invites' doesn't exist [ SELECT * FROM `invites` JOIN `studios` ON (`invites`.`studio_id` = `studios`.`id`) WHERE `invites`.`code` = 'kscudjnskxksjdnecusjdn' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-07 04:12:23 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.invites' doesn't exist [ SELECT * FROM `invites` JOIN `studios` ON (`invites`.`studio_id` = `studios`.`id`) WHERE `invites`.`code` = 'kscudjnskxksjdnecusjdn' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/index.php(57): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin_Index->action_registration()
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-07-07 04:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-07 04:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}