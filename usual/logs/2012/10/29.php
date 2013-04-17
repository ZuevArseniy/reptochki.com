<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-29 02:38:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 02:38:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 02:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 02:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 02:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 02:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 02:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 02:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 03:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 03:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 03:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 33 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-29 03:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 33 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-29 03:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 03:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 04:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 04:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 04:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 04:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 04:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 04:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 05:23:58 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-10-29 05:23:58 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-10-29 05:24:01 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-10-29 05:24:01 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-10-29 07:13:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 07:13:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 07:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 07:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 07:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 07:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 07:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 07:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 07:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 07:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 08:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 08:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 08:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 08:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 09:04:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:04:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 09:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 09:04:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:04:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 09:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 09:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 09:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 09:18:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:18:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 09:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 09:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 09:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 09:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 09:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 09:32:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:32:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 09:32:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:32:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 09:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 09:43:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:43:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 09:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 09:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 09:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 10:16:38 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-10-29 10:16:38 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-10-29 10:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 10:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 10:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 10:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 10:23:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 10:23:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 10:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 10:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 11:56:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 11:56:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 11:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 11:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 11:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 11:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 11:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 11:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 12:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 12:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 12:56:19 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-10-29 12:56:19 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-10-29 13:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 13:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 13:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 13:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 13:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 13:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 13:01:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 13:01:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 13:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/media/cache/fbf7842a335d24fecbc781a0f5cdd2731049ea87.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 13:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/media/cache/fbf7842a335d24fecbc781a0f5cdd2731049ea87.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 13:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/media/cache/be41efc3787060cfc307fcd2bba79c4d225886de.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 13:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/media/cache/be41efc3787060cfc307fcd2bba79c4d225886de.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 13:38:20 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-10-29 13:38:20 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-10-29 13:44:01 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-10-29 13:44:01 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-10-29 13:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 13:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 13:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 13:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 13:59:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 13:59:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 13:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 13:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 15:53:46 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-10-29 15:53:46 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-10-29 17:03:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 17:03:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 17:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL &post=-39137075_104 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-29 17:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL &post=-39137075_104 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-10-29 17:06:50 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-10-29 17:06:50 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-10-29 19:29:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 19:29:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 19:29:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 19:29:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-10-29 19:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 19:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-10-29 19:54:11 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-10-29 19:54:11 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-10-29 21:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-29 21:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}