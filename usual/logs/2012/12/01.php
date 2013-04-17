<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-01 15:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 15:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 15:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 15:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-12-01 15:37:22 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-12-01 15:37:22 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-12-01 15:37:34 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-12-01 15:37:34 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-12-01 15:37:35 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-12-01 15:37:35 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-12-01 15:37:37 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-12-01 15:37:37 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-12-01 15:37:37 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-12-01 15:37:37 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-12-01 17:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:31:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:31:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL minsk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL minsk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 17:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 17:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kiev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kiev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 17:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 17:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kiev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kiev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 17:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 17:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kiev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kiev was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 17:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 17:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:51:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:51:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:51:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL minsk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:51:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL minsk was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:51:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 17:51:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 17:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 17:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 17:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 18:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 18:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 18:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 18:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 18:03:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 18:03:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 18:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 18:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 18:07:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 18:07:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 18:08:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 18:08:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 18:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 18:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 18:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 18:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 18:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 18:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 18:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 18:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 18:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:28:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:28:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 18:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 18:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 19:01:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 19:01:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 19:31:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 19:31:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 19:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 19:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/tel was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-12-01 19:56:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: studios ~ APPPATH/views/layout/template.php [ 57 ]
2012-12-01 19:56:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: studios ~ APPPATH/views/layout/template.php [ 57 ]
--
#0 /home/reptochk/usual/views/layout/template.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/reptochk/...', 57, Array)
#1 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#2 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#3 /home/reptochk/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/reptochk/usual/classes/controller/main.php(35): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Main->after()
#6 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#7 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-12-01 19:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 19:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 19:56:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: studios ~ APPPATH/views/layout/template.php [ 57 ]
2012-12-01 19:56:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: studios ~ APPPATH/views/layout/template.php [ 57 ]
--
#0 /home/reptochk/usual/views/layout/template.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/reptochk/...', 57, Array)
#1 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#2 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#3 /home/reptochk/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/reptochk/usual/classes/controller/main.php(35): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Main->after()
#6 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#7 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-12-01 19:57:14 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Phone::render() must be an instance of Model_City, none given, called in /home/reptochk/usual/views/test/list.php on line 55 and defined ~ MODPATH/phones/classes/phone.php [ 6 ]
2012-12-01 19:57:14 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Phone::render() must be an instance of Model_City, none given, called in /home/reptochk/usual/views/test/list.php on line 55 and defined ~ MODPATH/phones/classes/phone.php [ 6 ]
--
#0 /home/reptochk/modules/phones/classes/phone.php(6): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/reptochk/...', 6, Array)
#1 /home/reptochk/usual/views/test/list.php(55): Phone::render(Object(Model_Phone))
#2 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#3 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#4 /home/reptochk/usual/classes/controller/studio.php(32): Kohana_View->render()
#5 [internal function]: Controller_Studio->action_list()
#6 /home/reptochk/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#7 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-12-01 19:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 19:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 19:57:20 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Phone::render() must be an instance of Model_City, none given, called in /home/reptochk/usual/views/test/list.php on line 55 and defined ~ MODPATH/phones/classes/phone.php [ 6 ]
2012-12-01 19:57:20 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Phone::render() must be an instance of Model_City, none given, called in /home/reptochk/usual/views/test/list.php on line 55 and defined ~ MODPATH/phones/classes/phone.php [ 6 ]
--
#0 /home/reptochk/modules/phones/classes/phone.php(6): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/home/reptochk/...', 6, Array)
#1 /home/reptochk/usual/views/test/list.php(55): Phone::render(Object(Model_Phone))
#2 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#3 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#4 /home/reptochk/usual/classes/controller/studio.php(32): Kohana_View->render()
#5 [internal function]: Controller_Studio->action_list()
#6 /home/reptochk/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Studio))
#7 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#10 {main}
2012-12-01 19:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 19:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 19:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/9cad244195e88bd404af8795ded0dcdde40ba570.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 19:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/9cad244195e88bd404af8795ded0dcdde40ba570.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 19:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/9cad244195e88bd404af8795ded0dcdde40ba570.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 19:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/9cad244195e88bd404af8795ded0dcdde40ba570.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 19:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/9cad244195e88bd404af8795ded0dcdde40ba570.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 19:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/9cad244195e88bd404af8795ded0dcdde40ba570.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 20:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 20:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 20:16:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 20:16:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-12-01 20:18:32 --- ERROR: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-01 20:18:32 --- STRACE: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/reptochk/usual/classes/controller/main.php(31): Kohana_ORM->__get('head_title')
#1 [internal function]: Controller_Main->after()
#2 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#3 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-12-01 20:18:32 --- ERROR: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-01 20:18:32 --- STRACE: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/reptochk/usual/classes/controller/main.php(31): Kohana_ORM->__get('head_title')
#1 [internal function]: Controller_Main->after()
#2 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-12-01 20:18:32 --- ERROR: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-01 20:18:32 --- STRACE: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/reptochk/usual/classes/controller/main.php(31): Kohana_ORM->__get('head_title')
#1 [internal function]: Controller_Main->after()
#2 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-12-01 20:18:42 --- ERROR: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-01 20:18:42 --- STRACE: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/reptochk/usual/classes/controller/main.php(31): Kohana_ORM->__get('head_title')
#1 [internal function]: Controller_Main->after()
#2 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#3 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-12-01 20:18:43 --- ERROR: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-01 20:18:43 --- STRACE: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/reptochk/usual/classes/controller/main.php(31): Kohana_ORM->__get('head_title')
#1 [internal function]: Controller_Main->after()
#2 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-12-01 20:18:43 --- ERROR: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-01 20:18:43 --- STRACE: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/reptochk/usual/classes/controller/main.php(31): Kohana_ORM->__get('head_title')
#1 [internal function]: Controller_Main->after()
#2 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-12-01 21:03:31 --- ERROR: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-01 21:03:31 --- STRACE: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/reptochk/usual/classes/controller/main.php(31): Kohana_ORM->__get('head_title')
#1 [internal function]: Controller_Main->after()
#2 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#3 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-12-01 21:51:12 --- ERROR: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-01 21:51:12 --- STRACE: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/reptochk/usual/classes/controller/main.php(31): Kohana_ORM->__get('head_title')
#1 [internal function]: Controller_Main->after()
#2 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#3 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-12-01 21:53:45 --- ERROR: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-01 21:53:45 --- STRACE: Kohana_Exception [ 0 ]: The head_title property does not exist in the Model_City class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /home/reptochk/usual/classes/controller/main.php(31): Kohana_ORM->__get('head_title')
#1 [internal function]: Controller_Main->after()
#2 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#3 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#6 {main}