<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Репетиционные точки</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?=MEDIA_SITE?>/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
    <?= isset($headstring) ? $headstring : ''?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>

    <script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
    <script type="text/javascript" src="<?=MEDIA_SITE?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?=MEDIA_SITE?>/js/bootstrap.min.full.js"></script>
</head>

<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="/">Репетиционные точки</a>
            <?if(isset($user)):?>
            <div class="btn-group" style="float: right;">
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="icon-user"></i> Профиль
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Сменить пароль</a></li>
                    <li class="divider"></li>
                    <li><a href="/admin/index/logout">Выход</a></li>
                </ul>
            </div>
                <?endif;?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
<?/*$menu;*/?>
<?= $content;?>
        </div>

    <hr>
    <footer>
        <p>&copy; reptochki.by</p>
    </footer>
</div>
</body>
</html>
