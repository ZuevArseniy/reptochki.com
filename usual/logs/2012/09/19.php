<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-19 07:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:03:02 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:03:02 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:03:09 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:03:09 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:03:13 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:03:13 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:03:55 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ MODPATH/admin/classes/controller/admin/studio.php [ 63 ]
2012-09-19 07:03:55 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ MODPATH/admin/classes/controller/admin/studio.php [ 63 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', '/Users/administ...', 63, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(63): mkdir('upload/medium/s...')
#2 [internal function]: Controller_Admin_Studio->action_photo()
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-09-19 07:03:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:03:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:03:55 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:03:55 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:04:47 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH/image/classes/kohana/image.php [ 617 ]
2012-09-19 07:04:47 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH/image/classes/kohana/image.php [ 617 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(66): Kohana_Image->save('upload/medium/s...')
#1 [internal function]: Controller_Admin_Studio->action_photo()
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-19 07:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:04:48 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:04:48 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:05:13 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ MODPATH/admin/classes/controller/admin/studio.php [ 63 ]
2012-09-19 07:05:13 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ MODPATH/admin/classes/controller/admin/studio.php [ 63 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', '/Users/administ...', 63, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(63): mkdir('upload/medium/s...', 1)
#2 [internal function]: Controller_Admin_Studio->action_photo()
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-09-19 07:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:05:13 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:05:13 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:05:17 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ MODPATH/admin/classes/controller/admin/studio.php [ 63 ]
2012-09-19 07:05:17 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ MODPATH/admin/classes/controller/admin/studio.php [ 63 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir() [<a hre...', '/Users/administ...', 63, Array)
#1 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(63): mkdir('upload/medium/s...', 1)
#2 [internal function]: Controller_Admin_Studio->action_photo()
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-09-19 07:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:05:17 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:05:17 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:05:45 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/upload/medium/studio18 ~ MODPATH/image/classes/kohana/image.php [ 617 ]
2012-09-19 07:05:45 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/upload/medium/studio18 ~ MODPATH/image/classes/kohana/image.php [ 617 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(66): Kohana_Image->save('upload/medium/s...')
#1 [internal function]: Controller_Admin_Studio->action_photo()
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-19 07:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:05:45 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:05:45 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:07:21 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/upload/medium/studio18 ~ MODPATH/image/classes/kohana/image.php [ 617 ]
2012-09-19 07:07:21 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/upload/medium/studio18 ~ MODPATH/image/classes/kohana/image.php [ 617 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/modules/admin/classes/controller/admin/studio.php(66): Kohana_Image->save('upload/medium/s...')
#1 [internal function]: Controller_Admin_Studio->action_photo()
#2 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#3 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-09-19 07:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:07:22 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:07:22 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:07:43 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:07:43 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:09:34 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:09:34 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:11:02 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:11:02 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:11:08 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:11:08 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:11:14 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:11:14 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-19 07:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/administrator/PhpstormProjects/reptochki.by/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-19 07:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:24:04 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:24:04 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:24:14 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:24:14 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:24:17 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:24:17 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:24:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:24:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:24:19 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:24:19 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:24:21 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:24:21 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:24:22 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:24:22 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:24:24 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:24:24 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:24:29 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:24:29 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:24:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:24:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:24:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:24:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:24:56 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:24:56 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:26:28 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:26:28 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:26:39 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:26:39 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:26:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:26:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:26:59 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:26:59 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:27:42 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:27:42 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:29:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:29:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:29:41 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:29:41 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:29:46 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:29:46 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 07:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 07:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 07:30:10 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 07:30:10 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 11:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio1/z_cff8a4ea.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 11:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio1/z_cff8a4ea.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 11:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio1/z_424f994e.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 11:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio1/z_424f994e.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 11:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio1/z_7b0afb22.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 11:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio1/z_7b0afb22.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 11:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio1/z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-19 11:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/medium/studio1/z_b12ce440.jpg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/administrator/PhpstormProjects/reptochki.by/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-19 11:16:29 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 11:16:29 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 11:16:29 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 11:16:29 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 11:16:29 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 11:16:29 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-19 11:16:29 --- ERROR: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
2012-09-19 11:16:29 --- STRACE: ErrorException [ 1 ]: Call to a member function route() on a non-object ~ MODPATH/profilertoolbar/classes/kohana/profilertoolbar.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}