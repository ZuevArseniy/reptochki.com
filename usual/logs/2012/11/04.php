<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-04 02:43:11 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-04 02:43:11 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
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
2012-11-04 02:43:21 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-04 02:43:21 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
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
2012-11-04 02:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/omnio/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-04 02:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: omnio/omnio/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/omnio/index.php(103): Kohana_Request->execute()
#1 {main}
2012-11-04 05:04:54 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-04 05:04:54 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
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
2012-11-04 05:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-04 05:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}
2012-11-04 07:58:55 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-04 07:58:55 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-04 08:15:38 --- ERROR: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
2012-11-04 08:15:38 --- STRACE: ErrorException [ 2 ]: include_once(/home/reptochk/public_html/omnio/putslinkshere/ML.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH/views/test/template.php [ 95 ]
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
2012-11-04 08:36:50 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-04 08:36:50 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-04 10:50:10 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-04 10:50:10 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-04 15:43:00 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-04 15:43:00 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-04 15:43:29 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-04 15:43:29 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-04 15:43:30 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-04 15:43:30 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-04 15:43:31 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-04 15:43:31 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-04 15:43:32 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-04 15:43:32 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-04 15:43:43 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-04 15:43:43 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-04 16:45:10 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-04 16:45:10 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-04 18:45:47 --- ERROR: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
2012-11-04 18:45:47 --- STRACE: Exception [ 0 ]: already voted ~ APPPATH/classes/controller/vote.php [ 22 ]
--
#0 [internal function]: Controller_Vote->before()
#1 /home/reptochk/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Vote))
#2 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#5 {main}
2012-11-04 20:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL &post=19005761_9179 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-04 20:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL &post=19005761_9179 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/reptochk/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/reptochk/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#3 {main}
2012-11-04 20:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++Result:+не+нашлось+формы+для+отправки; ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-04 20:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++Result:+не+нашлось+формы+для+отправки; ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/reptochk/public_html/index.php(104): Kohana_Request->execute()
#1 {main}