<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-04 17:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-04 17:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-04 17:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-04 17:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-04 17:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-04 17:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-04 17:27:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/scheduler/classes/controller/test.php [ 8 ]
2012-07-04 17:27:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH/scheduler/classes/controller/test.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_test')
#1 {main}
2012-07-04 17:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-04 17:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-04 17:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-04 17:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-04 17:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-04 17:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-04 17:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-04 17:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-04 17:39:08 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, integer given, called in /Users/admin/PhpstormProjects/reptochki/modules/scheduler/classes/model/schedule.php on line 39 and defined ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 80 ]
2012-07-04 17:39:08 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be an array, integer given, called in /Users/admin/PhpstormProjects/reptochki/modules/scheduler/classes/model/schedule.php on line 39 and defined ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 80 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query/builder/insert.php(80): Kohana_Core::error_handler(9)
#1 /Users/admin/PhpstormProjects/reptochki/modules/scheduler/classes/model/schedule.php(39): Kohana_Database_Query_Builder_Insert->values(Array, 1)
#2 /Users/admin/PhpstormProjects/reptochki/modules/scheduler/classes/controller/test.php(9): Model_Schedule->write_to_db()
#3 [internal function]: Controller_Test->action_index(Object(Controller_Test))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-07-04 17:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-04 17:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-04 17:40:02 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `schedule` (`room_id`, `day`, `start_timestamp`, `end_timestamp`, `occupated`) VALUES (1, (0, 1341405000, 1341412200, 0), (0, 1341412200, 1341419400, 0), (0, 1341419400, 1341426600, 0), (0, 1341426600, 1341433800, 0), (0, 1341433800, 1341441000, 0), (0, 1341441000, 1341448200, 0), (0, 1341448200, 1341455400, 0), (0, 1341455400, 1341462600, 0)) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-04 17:40:02 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `schedule` (`room_id`, `day`, `start_timestamp`, `end_timestamp`, `occupated`) VALUES (1, (0, 1341405000, 1341412200, 0), (0, 1341412200, 1341419400, 0), (0, 1341419400, 1341426600, 0), (0, 1341426600, 1341433800, 0), (0, 1341433800, 1341441000, 0), (0, 1341441000, 1341448200, 0), (0, 1341448200, 1341455400, 0), (0, 1341455400, 1341462600, 0)) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `sc...', false, Array)
#1 /Users/admin/PhpstormProjects/reptochki/modules/scheduler/classes/model/schedule.php(40): Kohana_Database_Query->execute()
#2 /Users/admin/PhpstormProjects/reptochki/modules/scheduler/classes/controller/test.php(9): Model_Schedule->write_to_db(Array, 1)
#3 [internal function]: Controller_Test->action_index()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-07-04 17:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-04 17:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-04 17:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-04 17:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-04 17:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-04 17:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}