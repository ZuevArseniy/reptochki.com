<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-18 17:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:40:05 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:40:05 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:40:07 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:40:07 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:40:11 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:40:11 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:40:13 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:40:13 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:40:34 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 146 ]
2012-09-18 17:40:34 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 146 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/upload.php(146): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/administ...', 146, Array)
#1 [internal function]: Kohana_Upload::type(NULL, Array)
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#4 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#6 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(89): Kohana_ORM->save()
#7 [internal function]: Controller_Admin_Studio->action_photo()
#8 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#12 {main}
2012-09-18 17:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:40:35 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:40:35 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:42:22 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:42:22 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:44:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:44:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:44:28 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:44:28 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:44:34 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2012-09-18 17:44:34 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/administ...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#4 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#6 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(89): Kohana_ORM->save()
#7 [internal function]: Controller_Admin_Studio->action_photo()
#8 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#12 {main}
2012-09-18 17:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:44:34 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:44:34 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:45:11 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:45:11 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:45:18 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ MODPATH/admin/classes/controller/admin/studio.php [ 79 ]
2012-09-18 17:45:18 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ MODPATH/admin/classes/controller/admin/studio.php [ 79 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(79): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/administ...', 79, Array)
#1 [internal function]: Controller_Admin_Studio->action_photo()
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-18 17:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:45:18 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:45:18 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:53:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:53:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:53:33 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:53:33 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:01 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:54:01 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:05 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:54:05 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:09 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:54:09 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:54:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/admin/classes/controller/admin/studio.php [ 73 ]
2012-09-18 17:54:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ MODPATH/admin/classes/controller/admin/studio.php [ 73 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/administ...', 73, Array)
#1 [internal function]: Controller_Admin_Studio->action_photo()
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-18 17:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:10 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:54:10 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:54:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: stock_id ~ MODPATH/admin/classes/controller/admin/studio.php [ 75 ]
2012-09-18 17:54:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: stock_id ~ MODPATH/admin/classes/controller/admin/studio.php [ 75 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/administ...', 75, Array)
#1 [internal function]: Controller_Admin_Studio->action_photo()
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-18 17:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:36 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:54:36 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:54:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: filename ~ MODPATH/admin/classes/controller/admin/studio.php [ 81 ]
2012-09-18 17:54:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: filename ~ MODPATH/admin/classes/controller/admin/studio.php [ 81 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/administ...', 81, Array)
#1 [internal function]: Controller_Admin_Studio->action_photo()
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-18 17:54:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:54:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:54:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:54:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:55:23 --- ERROR: Kohana_Exception [ 0 ]: The file property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-18 17:55:23 --- STRACE: Kohana_Exception [ 0 ]: The file property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/admin/studio/images.php(20): Kohana_ORM->__get('file')
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/layout.php(55): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 17:55:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:55:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:55:24 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:55:24 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:56:04 --- ERROR: Kohana_Exception [ 0 ]: The file property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-18 17:56:04 --- STRACE: Kohana_Exception [ 0 ]: The file property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/admin/studio/images.php(20): Kohana_ORM->__get('file')
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/layout.php(55): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 17:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:56:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:56:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/studio/photo/upload/studio1/z_7b0afb22.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/studio/photo/upload/studio1/z_7b0afb22.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/studio/photo/upload/studio1/z_424f994e.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/studio/photo/upload/studio1/z_424f994e.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:56:27 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:56:27 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:56:27 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:56:27 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:56:27 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:56:27 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 17:56:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 17:56:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 17:56:41 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 17:56:41 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:00:07 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:00:07 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:00:09 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:00:09 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:01:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:01:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:01:20 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:01:20 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:01:31 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:01:31 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:01:31 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:01:31 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:02:36 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:02:36 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:02:36 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:02:36 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:02:39 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: /Users/administrator/PhpstormProjects/reptochki.by/public_html ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-18 18:02:39 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: /Users/administrator/PhpstormProjects/reptochki.by/public_html ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('')
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('')
#2 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(55): Kohana_Image::factory('')
#3 [internal function]: Controller_Admin_Studio->action_photo()
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-18 18:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:02:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:02:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:03:38 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:03:38 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:03:38 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:03:38 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:03:41 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: /Users/administrator/PhpstormProjects/reptochki.by/public_html ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-18 18:03:41 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: /Users/administrator/PhpstormProjects/reptochki.by/public_html ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('')
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('')
#2 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(56): Kohana_Image::factory('')
#3 [internal function]: Controller_Admin_Studio->action_photo()
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-18 18:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:03:41 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:03:41 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:03:43 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:03:43 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:03:43 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:03:43 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:04:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:04:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:04:15 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:04:15 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:04:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:04:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:04:15 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:04:15 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:04:21 --- ERROR: ErrorException [ 8 ]: Undefined index: image ~ MODPATH/orm/classes/kohana/orm.php [ 1438 ]
2012-09-18 18:04:21 --- STRACE: ErrorException [ 8 ]: Undefined index: image ~ MODPATH/orm/classes/kohana/orm.php [ 1438 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(1438): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/administ...', 1438, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(49): Kohana_ORM->remove('image', '')
#2 [internal function]: Controller_Admin_Studio->action_photo()
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-09-18 18:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:04:21 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:04:21 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:04:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:04:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:04:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:04:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:04:44 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: /Users/administrator/PhpstormProjects/reptochki.by/public_html ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-18 18:04:44 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: /Users/administrator/PhpstormProjects/reptochki.by/public_html ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('')
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('')
#2 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(58): Kohana_Image::factory('')
#3 [internal function]: Controller_Admin_Studio->action_photo()
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-18 18:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:04:45 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:04:45 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:04:50 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:04:50 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:04:50 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:04:50 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:05:35 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:05:35 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:05:35 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:05:35 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:05:39 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: /Users/administrator/PhpstormProjects/reptochki.by/public_html ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-18 18:05:39 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: /Users/administrator/PhpstormProjects/reptochki.by/public_html ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('')
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('')
#2 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(54): Kohana_Image::factory('')
#3 [internal function]: Controller_Admin_Studio->action_photo()
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-18 18:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:05:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:05:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:06:50 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:06:50 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:06:50 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:06:50 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:06:53 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:06:53 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:06:53 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:06:53 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:06:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:06:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:06:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:06:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:08:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:08:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:08:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:08:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:08:08 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:08:08 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:08:41 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:08:41 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:08:41 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:08:41 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:08:44 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:08:44 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:08:44 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:08:44 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:08:47 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:08:47 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:09:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:09:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:09:25 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:09:25 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:09:29 --- ERROR: Kohana_Exception [ 0 ]: The studio property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-18 18:09:29 --- STRACE: Kohana_Exception [ 0 ]: The studio property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/admin/studio/images.php(19): Kohana_ORM->__get('studio')
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/layout.php(55): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 18:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:09:30 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:09:30 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:11:03 --- ERROR: Kohana_Exception [ 0 ]: The studio property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-18 18:11:03 --- STRACE: Kohana_Exception [ 0 ]: The studio property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/admin/studio/images.php(19): Kohana_ORM->__get('studio')
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/layout.php(55): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 18:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:11:03 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:11:03 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:11:05 --- ERROR: Kohana_Exception [ 0 ]: The studio property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-18 18:11:05 --- STRACE: Kohana_Exception [ 0 ]: The studio property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/admin/studio/images.php(19): Kohana_ORM->__get('studio')
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/layout.php(55): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 18:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:11:05 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:11:05 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-18 18:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-18 18:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:11:44 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:11:44 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:12:01 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:12:01 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:12:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:12:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:12:06 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:12:06 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:12:07 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:12:07 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:12:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:12:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:12:12 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:12:12 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:12:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:12:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:12:59 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:12:59 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:13:00 --- ERROR: ErrorException [ 8 ]: Undefined index: studio_id ~ MODPATH/orm/classes/kohana/orm.php [ 564 ]
2012-09-18 18:13:00 --- STRACE: ErrorException [ 8 ]: Undefined index: studio_id ~ MODPATH/orm/classes/kohana/orm.php [ 564 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(564): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/administ...', 564, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/admin/studio/images.php(19): Kohana_ORM->__get('studio')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/layout.php(55): Kohana_View->__toString()
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#8 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#14 {main}
2012-09-18 18:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:13:01 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:13:01 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:13:42 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:13:42 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:13:44 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:13:44 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:13:47 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:13:47 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:15:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:15:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:15:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:15:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:15:13 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:15:13 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:15:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:15:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:15:34 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:15:34 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:15:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:15:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:15:40 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:15:40 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:15:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:15:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:15:43 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:15:43 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:16:55 --- ERROR: ErrorException [ 8 ]: Undefined index: studio_id ~ MODPATH/orm/classes/kohana/orm.php [ 564 ]
2012-09-18 18:16:55 --- STRACE: ErrorException [ 8 ]: Undefined index: studio_id ~ MODPATH/orm/classes/kohana/orm.php [ 564 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(564): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/administ...', 564, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/admin/studio/images.php(19): Kohana_ORM->__get('studio')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/layout.php(55): Kohana_View->__toString()
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#8 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#14 {main}
2012-09-18 18:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:16:55 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:16:55 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:16:57 --- ERROR: ErrorException [ 8 ]: Undefined index: studio_id ~ MODPATH/orm/classes/kohana/orm.php [ 564 ]
2012-09-18 18:16:57 --- STRACE: ErrorException [ 8 ]: Undefined index: studio_id ~ MODPATH/orm/classes/kohana/orm.php [ 564 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(564): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/administ...', 564, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/admin/studio/images.php(19): Kohana_ORM->__get('studio')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/layout.php(55): Kohana_View->__toString()
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#8 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#14 {main}
2012-09-18 18:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:16:58 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:16:58 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:17:49 --- ERROR: ErrorException [ 8 ]: Undefined index: studio_id ~ MODPATH/orm/classes/kohana/orm.php [ 564 ]
2012-09-18 18:17:49 --- STRACE: ErrorException [ 8 ]: Undefined index: studio_id ~ MODPATH/orm/classes/kohana/orm.php [ 564 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/orm/classes/kohana/orm.php(564): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/administ...', 564, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/admin/studio/images.php(17): Kohana_ORM->__get('studio')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/layout.php(55): Kohana_View->__toString()
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#8 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#14 {main}
2012-09-18 18:17:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:17:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:17:50 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:17:50 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/studio/z_424f994e.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/studio/z_424f994e.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:29:48 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:29:48 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:29:48 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:29:48 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/studio/z_424f994e.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/studio/z_424f994e.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:30:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:30:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:30:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:30:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/studio/z_424f994e.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/studio/z_424f994e.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:30:27 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:30:27 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:30:28 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:30:28 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:31:11 --- ERROR: Kohana_Exception [ 0 ]: The studio property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-18 18:31:11 --- STRACE: Kohana_Exception [ 0 ]: The studio property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/admin/studio/images.php(20): Kohana_ORM->__get('studio')
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/layout.php(55): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 18:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:31:11 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:31:11 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/studio/z_424f994e.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/studio/z_424f994e.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:31:25 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:31:25 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:31:25 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:31:25 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:32:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:32:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:32:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:32:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:33:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:33:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:33:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:33:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:33:33 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:33:33 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:33:52 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:33:52 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:34:14 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:34:14 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:34:22 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:34:22 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:34:35 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:34:35 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:38:12 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:38:12 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:38:40 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:38:40 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:38:44 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:38:44 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:40:18 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:40:18 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:40:22 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:40:22 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:40:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:40:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:40:58 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:40:58 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:41:32 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:41:32 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:42:09 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:42:09 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:42:29 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:42:29 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:44:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:44:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:44:24 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:44:24 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:44:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:44:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:44:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:44:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:44:35 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:44:35 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:44:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:44:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:45:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:45:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:45:42 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:45:42 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:46:06 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:46:06 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:46:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:46:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:46:58 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:46:58 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:47:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:47:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:47:51 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:47:51 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:47:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:47:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:49:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:49:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:51:25 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:51:25 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:51:25 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:51:25 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:52:37 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:52:37 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:52:37 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:52:37 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:53:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:53:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:54:03 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:54:03 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:54:08 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:54:08 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:54:19 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:54:19 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:54:21 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:54:21 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:57:38 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:57:38 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:57:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:57:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:57:51 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:57:51 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:58:53 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:58:53 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 18:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 18:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 18:59:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 18:59:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:00:45 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:00:45 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:01:19 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:01:19 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:02:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:02:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:02:46 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:02:46 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:03:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:03:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:03:37 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:03:37 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:03:44 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:03:44 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:04:07 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:04:07 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:04:27 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:04:27 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:05:41 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:05:41 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:05:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:05:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:05:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:05:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:05:53 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:05:53 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:05:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:05:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:05:59 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:05:59 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:06:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:06:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:06:02 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:06:02 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:06:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:06:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:06:38 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:06:38 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:07:14 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:07:14 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:08:14 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:08:14 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:08:58 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:08:58 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:09:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:09:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:09:05 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:09:05 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:09:06 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:09:06 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:09:13 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:09:13 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:10:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:10:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:10:13 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:10:13 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:10:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:10:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:10:22 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:10:22 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:10:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:10:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:10:41 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:10:41 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:10:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:10:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:10:45 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:10:45 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:12:02 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:12:02 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:13:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:13:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:13:03 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:13:03 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:13:32 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:13:32 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:13:44 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:13:44 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:13:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:13:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:13:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:13:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:13:53 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:13:53 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:13:57 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:13:57 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:14:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:14:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:17:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: false ~ MODPATH/admin/views/admin/studio/images.php [ 10 ]
2012-09-18 19:17:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: false ~ MODPATH/admin/views/admin/studio/images.php [ 10 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/admin/studio/images.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/administ...', 10, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/layout.php(55): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 19:17:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:17:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:17:27 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:17:27 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:17:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: reaming ~ MODPATH/admin/views/admin/studio/images.php [ 16 ]
2012-09-18 19:17:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: reaming ~ MODPATH/admin/views/admin/studio/images.php [ 16 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/admin/studio/images.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/administ...', 16, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/views/layout.php(55): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 19:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:17:38 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:17:38 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:17:55 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:17:55 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:18:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:18:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:18:02 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:18:02 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:18:05 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:18:05 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:18:09 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:18:09 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:18:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:18:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:18:12 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:18:12 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:18:14 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:18:14 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:19:59 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:19:59 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:20:18 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:20:18 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:20:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:20:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:20:42 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:20:42 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:20:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:20:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:20:54 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:20:54 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:21:18 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:21:18 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:21:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:21:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:21:24 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:21:24 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:21:28 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:21:28 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:21:31 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:21:31 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:21:34 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:21:34 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:21:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:21:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:21:36 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:21:36 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:21:43 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:21:43 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:21:46 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:21:46 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:21:51 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:21:51 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:21:52 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:21:52 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:21:58 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:21:58 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:22:00 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:22:00 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:22:03 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:22:03 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:22:06 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:22:06 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:22:10 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:22:10 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:22:16 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:22:16 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:22:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:22:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:22:23 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:22:23 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:23:31 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:23:31 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:25:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:25:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:25:03 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:25:03 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:25:21 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:25:21 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:25:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:25:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:25:50 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:25:50 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:25:52 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:25:52 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:25:53 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:25:53 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:25:55 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:25:55 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:27:41 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:27:41 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:28:29 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:28:29 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:28:30 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:28:30 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:28:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:28:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:28:52 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:28:52 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:29:36 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:29:36 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:29:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:29:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:29:58 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:29:58 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:30:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:30:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:30:47 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:30:47 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:31:37 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:31:37 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:31:44 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:31:44 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:31:48 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:31:48 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:31:52 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:31:52 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:32:09 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:32:09 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:32:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:32:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:32:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:32:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:37:42 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:37:42 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:37:44 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:37:44 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:37:58 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:37:58 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:39:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:39:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:39:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:39:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:41:41 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:41:41 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:41:55 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:41:55 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:41:55 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:41:55 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:41:55 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:41:55 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:41:55 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:41:55 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:42:05 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:42:05 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:42:34 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:42:34 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:42:36 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:42:36 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:42:52 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:42:52 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:42:54 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:42:54 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:42:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:42:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:44:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:44:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:44:28 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:44:28 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:44:32 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:44:32 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:46:25 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:46:25 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:46:59 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:46:59 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:47:31 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:47:31 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:47:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:47:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:47:44 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:47:44 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:47:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:47:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:47:59 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:47:59 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:48:03 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:48:03 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:48:09 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:48:09 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:48:15 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:48:15 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:48:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:48:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:49:32 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:49:32 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:50:27 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:50:27 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:50:30 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:50:30 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:50:31 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:50:31 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 19:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 19:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 19:50:42 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 19:50:42 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 20:02:33 --- ERROR: Kohana_Exception [ 0 ]: The addres property does not exist in the Model_Studio class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-18 20:02:33 --- STRACE: Kohana_Exception [ 0 ]: The addres property does not exist in the Model_Studio class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/studio/detail.php(17): Kohana_ORM->__get('addres')
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/test/template.php(45): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 22:24:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: studio_id ~ APPPATH/views/studio/detail.php [ 18 ]
2012-09-18 22:24:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: studio_id ~ APPPATH/views/studio/detail.php [ 18 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/studio/detail.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/administ...', 18, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/test/template.php(45): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 22:26:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: img ~ APPPATH/views/studio/detail.php [ 24 ]
2012-09-18 22:26:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: img ~ APPPATH/views/studio/detail.php [ 24 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/studio/detail.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/administ...', 24, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/test/template.php(45): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 22:28:57 --- ERROR: Kohana_Exception [ 0 ]: The loaded property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-18 22:28:57 --- STRACE: Kohana_Exception [ 0 ]: The loaded property does not exist in the Model_Image class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/studio/detail.php(15): Kohana_ORM->__get('loaded')
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/test/template.php(45): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 22:29:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/studio/detail.php [ 26 ]
2012-09-18 22:29:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/studio/detail.php [ 26 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/studio/detail.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/administ...', 26, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/test/template.php(45): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 22:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:29:17 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:29:17 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:29:25 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:29:25 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:29:31 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:29:31 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:29:34 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/studio/detail.php [ 26 ]
2012-09-18 22:29:34 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/studio/detail.php [ 26 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/studio/detail.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/administ...', 26, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/test/template.php(45): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 22:29:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/studio/detail.php [ 26 ]
2012-09-18 22:29:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/studio/detail.php [ 26 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/studio/detail.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/administ...', 26, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/test/template.php(45): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 22:29:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH/views/studio/detail.php [ 24 ]
2012-09-18 22:29:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH/views/studio/detail.php [ 24 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/studio/detail.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/administ...', 24, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/test/template.php(45): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 22:30:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH/views/studio/detail.php [ 24 ]
2012-09-18 22:30:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH/views/studio/detail.php [ 24 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/studio/detail.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/administ...', 24, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/administrator/PhpstormProjects/reptochki.by/usual/views/test/template.php(45): Kohana_View->__toString()
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(61): include('/Users/administ...')
#6 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/administ...', Array)
#7 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#10 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#13 {main}
2012-09-18 22:35:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:35:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:35:49 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:35:49 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:38:24 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:38:24 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:38:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:38:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:38:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:38:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:38:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:38:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:38:26 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:38:26 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:38:38 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:38:38 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:38:48 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:38:48 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:38:48 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:38:48 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:38:48 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:38:48 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:38:48 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:38:48 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:38:53 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:38:53 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:39:15 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:39:15 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:39:51 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:39:51 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:50:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:50:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:50:10 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:50:10 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 22:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 22:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 22:51:31 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 22:51:31 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 23:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 23:25:18 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 23:25:18 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-18 23:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-18 23:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-18 23:25:27 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-18 23:25:27 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}