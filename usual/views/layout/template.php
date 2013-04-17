<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$head_title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META Name="keywords" Content="<?=$keywords?>">
    <META Name="description" Content="<?=$description?>">
    <link rel="stylesheet" href='<?=MEDIA_SITE?>css/bootstrap.min.css'>
    <?
   // $result = Compress::instance('stylesheets')->styles(array('css/styles.css'));
    echo HTML::style(MEDIA_SITE .'css/styles.css');
    ?>
    <?if($vk):?>
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?60"></script>
    <script type="text/javascript">
        VK.init({
            apiId: 3139786,
            onlyWidgets: true
        });
    </script>
    <?endif;?>
    <link rel="shortcut icon" href="http://reptochki.by/images/favicon.png" type="image/x-icon" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript">
        //google analytics
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-32392896-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('head')[0]; s.insertBefore(ga, null);
        })();

    </script>
</head>
<body class="meny-left">
<div class="meny">
    <a class="brand" href="/"><?=$title?></a>

    <ul class="nav nav-pills nav-stacked">
                    <li><a href="http://reptochki.by/?force=true">Главная</a></li>
<!--                    <li><a href="http://m.reptochki.by">Мобильная версия</a></li>-->
                    <li><a href="/contact">Контакты</a></li>
                    <li><a href="/meanings">Отзывы</a></li>
        <li><a href="http://kharkiv.reptochki.by/">Реп базы Харькова</a></li>
        <li><a href="http://minsk.reptochki.by/">Реп точки Минска</a></li>
                </ul>
                <ul class="social" style="margin-top: 100px;">
                    <li><div class="fb-like" data-href="http://reptochki.by" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div></li>
                    <li><div id="vk_like"></div></li>
                    <li><a href="https://twitter.com/share" id='tweeter-share' class="twitter-share-button" data-url="http://reptochki.by" data-text="Минские репетиционные точки" data-lang="ru" data-size="large">Твитнуть</a>
                </ul>
    <div style="margin-top: 50px;padding-left: 40px;position: absolute;bottom: 30px;">
        <a href="http://reptochki.by" title='Репетиционные точки Минска' target="_blank"><img src="http://reptochki.by/images/logo.png" alt=""></a>
    </div>

</div>
<div class="meny-arrow">&#9668; Меню</div>
<div class="contents"  style="width: 100%;height: 100%;">
    <div class="container"><?=$content?></div>
</div>
<?if(isset($_GET['debug'])):?>
    <?php ProfilerToolbar::render(true); ?>
    <?endif;?>
<?
//$result = Compress::instance('javascripts')->scripts($scripts);
//echo HTML::script($result);
?>
<?foreach($scripts as $script):?>
    <?=HTML::script($script)?>
    <?endforeach;?>
<script type="text/javascript">
    $('#city').change(function(){
        window.location = 'http://'+ $(this).val()+'.reptochki.by/' ;

    });
</script>
</body>
</html>
