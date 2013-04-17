<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-27 01:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-27 01:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-27 04:08:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-27 04:08:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-27 04:49:57 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-27 04:49:57 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-27 09:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-27 09:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-27 09:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-27 09:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-27 09:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-27 09:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-27 09:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-27 09:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}