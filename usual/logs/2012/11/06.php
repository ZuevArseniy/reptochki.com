<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-06 01:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 01:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 03:10:44 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-06 03:10:44 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
--
#0 /home/reptochk/usual/views/test/template.php(95): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/reptochk/...', 95, Array)
#1 /home/reptochk/usual/views/test/template.php(95): include_once()
#2 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#3 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#4 /home/reptochk/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /home/reptochk/usual/classes/controller/main.php(32): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Main->after()
#7 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#8 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#11 {main}
2012-11-06 03:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/27b2a5e8b1b75bbf22312840d22590c31cd17565.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 03:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/27b2a5e8b1b75bbf22312840d22590c31cd17565.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 04:16:30 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-06 04:16:30 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
--
#0 /home/reptochk/usual/views/test/template.php(95): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/reptochk/...', 95, Array)
#1 /home/reptochk/usual/views/test/template.php(95): include_once()
#2 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#3 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#4 /home/reptochk/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /home/reptochk/usual/classes/controller/main.php(32): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Main->after()
#7 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#8 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#11 {main}
2012-11-06 05:26:11 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-06 05:26:11 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
--
#0 /home/reptochk/usual/views/test/template.php(95): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/reptochk/...', 95, Array)
#1 /home/reptochk/usual/views/test/template.php(95): include_once()
#2 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#3 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#4 /home/reptochk/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /home/reptochk/usual/classes/controller/main.php(32): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Main->after()
#7 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#8 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#11 {main}
2012-11-06 06:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 06:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 06:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 06:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 07:12:45 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-06 07:12:45 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
--
#0 /home/reptochk/usual/views/test/template.php(95): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/reptochk/...', 95, Array)
#1 /home/reptochk/usual/views/test/template.php(95): include_once()
#2 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#3 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#4 /home/reptochk/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /home/reptochk/usual/classes/controller/main.php(32): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Main->after()
#7 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#8 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#11 {main}
2012-11-06 08:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 08:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 08:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 08:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 10:03:44 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-06 10:03:44 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-06 11:03:04 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-06 11:03:04 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
--
#0 /home/reptochk/usual/views/test/template.php(95): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/reptochk/...', 95, Array)
#1 /home/reptochk/usual/views/test/template.php(95): include_once()
#2 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#3 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#4 /home/reptochk/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /home/reptochk/usual/classes/controller/main.php(32): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Main->after()
#7 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#8 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#11 {main}
2012-11-06 11:03:34 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/gene/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-06 11:03:34 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/gene/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
--
#0 /home/reptochk/usual/views/test/template.php(95): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/reptochk/...', 95, Array)
#1 /home/reptochk/usual/views/test/template.php(95): include_once()
#2 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#3 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#4 /home/reptochk/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /home/reptochk/usual/classes/controller/main.php(32): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Main->after()
#7 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#8 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#11 {main}
2012-11-06 11:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/27b2a5e8b1b75bbf22312840d22590c31cd17565.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 11:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/27b2a5e8b1b75bbf22312840d22590c31cd17565.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 12:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 12:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 12:54:29 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-06 12:54:29 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-06 12:54:40 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-06 12:54:40 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-06 12:59:58 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-06 12:59:58 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-06 13:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 13:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/omnio/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-06 13:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 13:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/gene/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-06 13:28:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/27b2a5e8b1b75bbf22312840d22590c31cd17565.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 13:28:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/27b2a5e8b1b75bbf22312840d22590c31cd17565.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 13:33:28 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/gene/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-06 13:33:28 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/gene/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
--
#0 /home/reptochk/usual/views/test/template.php(95): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/reptochk/...', 95, Array)
#1 /home/reptochk/usual/views/test/template.php(95): include_once()
#2 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#3 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#4 /home/reptochk/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /home/reptochk/usual/classes/controller/main.php(32): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Main->after()
#7 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#8 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#11 {main}
2012-11-06 13:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/gene/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 13:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: gene/gene/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-06 14:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/27b2a5e8b1b75bbf22312840d22590c31cd17565.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 14:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/27b2a5e8b1b75bbf22312840d22590c31cd17565.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 14:27:22 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/gene/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-06 14:27:22 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/gene/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
--
#0 /home/reptochk/usual/views/test/template.php(95): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/reptochk/...', 95, Array)
#1 /home/reptochk/usual/views/test/template.php(95): include_once()
#2 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#3 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#4 /home/reptochk/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /home/reptochk/usual/classes/controller/main.php(32): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Main->after()
#7 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#8 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#11 {main}
2012-11-06 14:39:23 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/gene/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-06 14:39:23 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/gene/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
--
#0 /home/reptochk/usual/views/test/template.php(95): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/reptochk/...', 95, Array)
#1 /home/reptochk/usual/views/test/template.php(95): include_once()
#2 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#3 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#4 /home/reptochk/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /home/reptochk/usual/classes/controller/main.php(32): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Main->after()
#7 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#8 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#11 {main}
2012-11-06 14:56:53 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-06 14:56:53 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-06 16:29:59 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/gene/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-06 16:29:59 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/gene/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
--
#0 /home/reptochk/usual/views/test/template.php(95): Kohana_Core::error_handler(2, 'include_once(/h...', '/home/reptochk/...', 95, Array)
#1 /home/reptochk/usual/views/test/template.php(95): include_once()
#2 /home/reptochk/system/classes/kohana/view.php(61): include('/home/reptochk/...')
#3 /home/reptochk/system/classes/kohana/view.php(343): Kohana_View::capture('/home/reptochk/...', Array)
#4 /home/reptochk/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /home/reptochk/usual/classes/controller/main.php(32): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Main->after()
#7 /home/reptochk/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Studio))
#8 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/reptochk/public_html/gene/index.php(103): Kohana_Request->execute()
#11 {main}
2012-11-06 18:05:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/27b2a5e8b1b75bbf22312840d22590c31cd17565.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:05:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/cache/27b2a5e8b1b75bbf22312840d22590c31cd17565.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:22:32 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: scripts ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-11-06 18:22:32 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: scripts ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /home/reptochk/usual/classes/controller/contact.php(27): Kohana_View->__get('scripts')
#1 [internal function]: Controller_Contact->action_meanings()
#2 /home/reptochk/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Contact))
#3 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#6 {main}
2012-11-06 18:22:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:22:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.copy.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.copy.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.copy.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.copy.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.copy.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/bootstrap.min.copy.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 18:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 18:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 19:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 19:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 19:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 19:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 19:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-06 19:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-11-06 19:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 19:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 19:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 19:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 19:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 19:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 19:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon-precomposed.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 19:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon-precomposed.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 19:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-06 19:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: apple-touch-icon.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-06 19:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL &post=9089147_2109 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-06 19:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL &post=9089147_2109 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}