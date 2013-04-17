<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-17 17:34:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 17:34:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 17:34:47 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 17:34:47 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 17:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 17:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 17:40:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 17:40:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 17:40:57 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.images' doesn't exist [ SELECT `image`.* FROM `images` AS `image` JOIN `studios_images` ON (`studios_images`.`image_id` = `image`.`id`) WHERE `studios_images`.`studio_id` = '1' ] ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-09-17 17:40:57 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.images' doesn't exist [ SELECT `image`.* FROM `images` AS `image` JOIN `studios_images` ON (`studios_images`.`image_id` = `image`.`id`) WHERE `studios_images`.`studio_id` = '1' ] ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(65): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Studio->action_photo()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-09-17 17:40:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 17:40:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 17:40:58 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 17:40:58 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 17:45:03 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios_images' doesn't exist [ SELECT `image`.* FROM `images` AS `image` JOIN `studios_images` ON (`studios_images`.`image_id` = `image`.`id`) WHERE `studios_images`.`studio_id` = '1' ] ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-09-17 17:45:03 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios_images' doesn't exist [ SELECT `image`.* FROM `images` AS `image` JOIN `studios_images` ON (`studios_images`.`image_id` = `image`.`id`) WHERE `studios_images`.`studio_id` = '1' ] ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(65): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Studio->action_photo()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-09-17 17:45:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 17:45:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 17:45:03 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 17:45:03 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 17:45:06 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.studios_images' doesn't exist [ SELECT `image`.* FROM `images` AS `image` JOIN `studios_images` ON (`studios_images`.`image_id` = `image`.`id`) WHERE `studios_images`.`studio_id` = '1' ] ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-09-17 17:45:06 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.studios_images' doesn't exist [ SELECT `image`.* FROM `images` AS `image` JOIN `studios_images` ON (`studios_images`.`image_id` = `image`.`id`) WHERE `studios_images`.`studio_id` = '1' ] ~ MODPATH/profilertoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(65): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Studio->action_photo()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-09-17 17:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 17:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 17:45:06 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 17:45:06 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 17:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 17:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 17:47:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 17:47:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:05:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:05:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:05:08 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:05:08 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:05:18 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:05:18 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:05:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONTINUE ~ MODPATH/files/classes/upload.php [ 52 ]
2012-09-17 18:05:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONTINUE ~ MODPATH/files/classes/upload.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:05:21 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:05:21 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:05:50 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2012-09-17 18:05:50 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/administ...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#4 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#6 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(92): Kohana_ORM->save()
#7 [internal function]: Controller_Admin_Studio->action_photo()
#8 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#12 {main}
2012-09-17 18:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:05:50 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:05:50 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:07:15 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:07:15 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:07:45 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:07:45 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:07:50 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:07:50 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:07:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:07:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:07:54 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:07:54 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:07:58 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:07:58 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:08:01 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:08:01 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:08:02 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:08:02 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:08:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:08:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:09:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:09:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:09:15 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:09:15 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:09:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:09:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:09:53 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:09:53 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:09:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:09:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:09:57 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:09:57 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:09:58 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/admin/classes/controller/admin/studio.php [ 82 ]
2012-09-17 18:09:58 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/admin/classes/controller/admin/studio.php [ 82 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(82): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/administ...', 82, Array)
#1 [internal function]: Controller_Admin_Studio->action_photo()
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-17 18:09:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:09:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:09:58 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:09:58 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:12:13 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/admin/classes/controller/admin/studio.php [ 82 ]
2012-09-17 18:12:13 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/admin/classes/controller/admin/studio.php [ 82 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(82): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/administ...', 82, Array)
#1 [internal function]: Controller_Admin_Studio->action_photo()
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-17 18:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:12:14 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:12:14 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:12:24 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:12:24 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:12:28 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:12:28 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:12:30 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2012-09-17 18:12:30 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/administ...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#4 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#6 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(95): Kohana_ORM->save()
#7 [internal function]: Controller_Admin_Studio->action_photo()
#8 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#12 {main}
2012-09-17 18:12:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:12:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:12:30 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:12:30 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:14:33 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:14:33 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:14:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:14:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:14:38 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:14:38 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:14:41 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:14:41 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:14:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:14:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:14:45 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:14:45 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:14:46 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2012-09-17 18:14:46 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/administ...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#4 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#6 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(88): Kohana_ORM->save()
#7 [internal function]: Controller_Admin_Studio->action_photo()
#8 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#12 {main}
2012-09-17 18:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:14:46 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:14:46 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:16:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:16:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:25:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:25:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:25:43 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:25:43 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-17 18:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-17 18:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-17 18:25:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-17 18:25:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}