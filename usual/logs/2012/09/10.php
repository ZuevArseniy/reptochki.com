<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-10 18:09:48 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Phone::render() must be an instance of Model_Phone, string given, called in /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php on line 37 and defined ~ MODPATH/phones/classes/phone.php [ 6 ]
2012-09-10 18:09:48 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Phone::render() must be an instance of Model_Phone, string given, called in /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php on line 37 and defined ~ MODPATH/phones/classes/phone.php [ 6 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(6): Kohana_Core::error_handler('<p><strong>+375...')
#1 /Users/admin/PhpstormProjects/reptochki/usual/views/test/list.php(37): Phone::render('/Users/admin/Ph...', Array)
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /Users/admin/PhpstormProjects/reptochki/usual/classes/controller/studio.php(19): Kohana_View->render()
#5 [internal function]: Controller_Studio->action_list(Object(Controller_Studio))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-09-10 18:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:09:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:09:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:10:09 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Phone::render() must be an instance of Model_Phone, string given, called in /Users/admin/PhpstormProjects/reptochki/modules/admin/views/admin/studio/list.php on line 18 and defined ~ MODPATH/phones/classes/phone.php [ 6 ]
2012-09-10 18:10:09 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Phone::render() must be an instance of Model_Phone, string given, called in /Users/admin/PhpstormProjects/reptochki/modules/admin/views/admin/studio/list.php on line 18 and defined ~ MODPATH/phones/classes/phone.php [ 6 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/phones/classes/phone.php(6): Kohana_Core::error_handler('<p><strong>+375...')
#1 /Users/admin/PhpstormProjects/reptochki/modules/admin/views/admin/studio/list.php(18): Phone::render('/Users/admin/Ph...', Array)
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/admin/PhpstormProjects/reptochki/modules/admin/views/layout.php(55): Kohana_View->__toString('/Users/admin/Ph...', Array)
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Studio))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#13 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#14 {main}
2012-09-10 18:10:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:10:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:10:55 --- ERROR: Database_Exception [ 1146 ]: Table 'reptochki.phones' doesn't exist [ SHOW FULL COLUMNS FROM `phones` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-10 18:10:55 --- STRACE: Database_Exception [ 1146 ]: Table 'reptochki.phones' doesn't exist [ SHOW FULL COLUMNS FROM `phones` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('phones')
#2 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(584): Kohana_ORM::factory('phone')
#7 /Users/admin/PhpstormProjects/reptochki/modules/admin/views/admin/studio/list.php(18): Kohana_ORM->__get('phones')
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(228): Kohana_View->render()
#11 /Users/admin/PhpstormProjects/reptochki/modules/admin/views/layout.php(55): Kohana_View->__toString()
#12 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#13 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Ph...', Array)
#14 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#15 [internal function]: Kohana_Controller_Template->after()
#16 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#17 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#20 {main}
2012-09-10 18:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:14:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:14:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:21:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:21:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:22:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:22:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:23:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:23:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:24:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:24:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/photo/edit/18 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-10 18:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/photo/edit/18 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-10 18:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:34:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/photo/edit/18 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-10 18:34:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/photo/edit/18 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-10 18:34:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:34:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/photo/edit/18 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-10 18:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/photo/edit/18 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-09-10 18:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:35:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:35:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:35:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-10 18:35:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('image')
#1 {main}
2012-09-10 18:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:35:33 --- ERROR: View_Exception [ 0 ]: The requested view studio/images could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-10 18:35:33 --- STRACE: View_Exception [ 0 ]: The requested view studio/images could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(137): Kohana_View->set_filename('studio/images')
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(30): Kohana_View->__construct('studio/images', NULL)
#2 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(54): Kohana_View::factory('studio/images')
#3 [internal function]: Controller_Admin_Studio->action_photo()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-10 18:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:37:58 --- ERROR: View_Exception [ 0 ]: The requested view studio/images could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-10 18:37:58 --- STRACE: View_Exception [ 0 ]: The requested view studio/images could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(137): Kohana_View->set_filename('studio/images')
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(30): Kohana_View->__construct('studio/images', NULL)
#2 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(54): Kohana_View::factory('studio/images')
#3 [internal function]: Controller_Admin_Studio->action_photo()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-10 18:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:38:01 --- ERROR: View_Exception [ 0 ]: The requested view studio/images could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-10 18:38:01 --- STRACE: View_Exception [ 0 ]: The requested view studio/images could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(137): Kohana_View->set_filename('studio/images')
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(30): Kohana_View->__construct('studio/images', NULL)
#2 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(54): Kohana_View::factory('studio/images')
#3 [internal function]: Controller_Admin_Studio->action_photo()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-10 18:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:38:19 --- ERROR: View_Exception [ 0 ]: The requested view studio/images could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-10 18:38:19 --- STRACE: View_Exception [ 0 ]: The requested view studio/images could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(137): Kohana_View->set_filename('studio/images')
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(30): Kohana_View->__construct('studio/images', NULL)
#2 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(54): Kohana_View::factory('studio/images')
#3 [internal function]: Controller_Admin_Studio->action_photo()
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#8 {main}
2012-09-10 18:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:38:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/admin/views/layout.php [ 55 ]
2012-09-10 18:38:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ MODPATH/admin/views/layout.php [ 55 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/admin/views/layout.php(55): Kohana_Core::error_handler('/Users/admin/Ph...', Array)
#1 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(61): include('/Users/admin/Ph...')
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Admin_Studio))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#9 {main}
2012-09-10 18:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:40:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:40:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:43:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:43:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:46:06 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2012-09-10 18:46:06 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(NULL)
#1 [internal function]: Kohana_Upload::not_empty(NULL, Array)
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs()
#3 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check(NULL)
#4 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create()
#6 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(47): Kohana_ORM->save()
#7 [internal function]: Controller_Admin_Studio->action_photo(Object(Controller_Admin_Studio))
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#11 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#12 {main}
2012-09-10 18:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:46:39 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2012-09-10 18:46:39 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(NULL)
#1 [internal function]: Kohana_Upload::not_empty(NULL, Array)
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs()
#3 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check(NULL)
#4 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create()
#6 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(50): Kohana_ORM->save()
#7 [internal function]: Controller_Admin_Studio->action_photo(Object(Controller_Admin_Studio))
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#11 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#12 {main}
2012-09-10 18:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:50:36 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2012-09-10 18:50:36 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(NULL)
#1 [internal function]: Kohana_Upload::not_empty(NULL, Array)
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs()
#3 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check(NULL)
#4 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create()
#6 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(50): Kohana_ORM->save()
#7 [internal function]: Controller_Admin_Studio->action_photo(Object(Controller_Admin_Studio))
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#11 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#12 {main}
2012-09-10 18:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:55:35 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2012-09-10 18:55:35 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(NULL)
#1 [internal function]: Kohana_Upload::not_empty(NULL, Array)
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs()
#3 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check(NULL)
#4 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create()
#6 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(57): Kohana_ORM->save()
#7 [internal function]: Controller_Admin_Studio->action_photo(Object(Controller_Admin_Studio))
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#11 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#12 {main}
2012-09-10 18:55:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:55:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:55:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:55:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/images/delete.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:55:58 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2012-09-10 18:55:58 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(NULL)
#1 [internal function]: Kohana_Upload::not_empty(NULL, Array)
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs()
#3 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check(NULL)
#4 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create()
#6 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(57): Kohana_ORM->save()
#7 [internal function]: Controller_Admin_Studio->action_photo(Object(Controller_Admin_Studio))
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#11 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#12 {main}
2012-09-10 18:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:57:10 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
2012-09-10 18:57:10 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH/classes/kohana/upload.php [ 129 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/upload.php(129): Kohana_Core::error_handler(NULL)
#1 [internal function]: Kohana_Upload::not_empty(NULL, Array)
#2 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs()
#3 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check(NULL)
#4 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create()
#6 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(58): Kohana_ORM->save()
#7 [internal function]: Controller_Admin_Studio->action_photo(Object(Controller_Admin_Studio))
#8 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#11 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#12 {main}
2012-09-10 18:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:58:21 --- ERROR: ErrorException [ 8 ]: Undefined index:  image ~ MODPATH/orm/classes/kohana/orm.php [ 1403 ]
2012-09-10 18:58:21 --- STRACE: ErrorException [ 8 ]: Undefined index:  image ~ MODPATH/orm/classes/kohana/orm.php [ 1403 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/modules/orm/classes/kohana/orm.php(1403): Kohana_Core::error_handler('image', '/Users/admin/Ph...')
#1 /Users/admin/PhpstormProjects/reptochki/modules/admin/classes/controller/admin/studio.php(58): Kohana_ORM->add()
#2 [internal function]: Controller_Admin_Studio->action_photo(Object(Controller_Admin_Studio))
#3 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/PhpstormProjects/reptochki/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#7 {main}
2012-09-10 18:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-09-10 18:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 18:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/admin/PhpstormProjects/reptochki/public_html/index.php(104): Kohana_Request->execute()
#1 {main}