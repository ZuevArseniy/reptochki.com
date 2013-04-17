<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>������� ������������� �����</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META Name="keywords" Content="�����, ��������� ,������������� ������, ��������, ���.�����, ���.�����, ���.�����, ��� ����� �����">
    <META Name="description" Content="������������� ������ � ����� � ������ ����� � ��������">
    <link rel="stylesheet" href='/css/bootstrap.min.css'>
    <?
    //$result = Compress::instance('stylesheets')->styles(array('css/styles.css'));
    echo HTML::style('css/styles.css');
    ?>
    <link rel="shortcut icon" href="http://reptochki.by/images/favicon.png" type="image/x-icon" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="meny-left">
<div class="meny">
    <a class="brand" href="/">������������� ����� ������</a>
    <ul class="nav nav-pills nav-stacked">
        <li><a href="/">�������</a></li>
        <li><a href="http://m.reptochki.by">��������� ������</a></li>
        <li><a href="/contact">��������</a></li>
        <li><a href="/meanings">������</a></li>
    </ul>
    <ul class="social" style="margin-top: 100px;">
        <li><div class="fb-like" data-href="http://reptochki.by" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div></li>
        <li><div id="vk_like"></div></li>
        <li><a href="https://twitter.com/share" id='tweeter-share' class="twitter-share-button" data-url="http://reptochki.by" data-text="������� ������������� �����" data-lang="ru" data-size="large">��������</a>
    </ul>
    <div style="margin-top: 50px;padding-left: 40px;position: absolute;bottom: 30px;">
        <a href="http://reptochki.by" title='������������� ����� ������' target="_blank"><img src="/images/logo.png" alt=""></a>
        <a href="http://gene.by/" title="��������� � ������" target="_blank"><img src="http://gene.by/logo.png" width="73" height="33" border="0" alt="��������� � ������"></a><br>
    </div>

</div>
<div class="meny-arrow">&#9668; ����</div>
<div class="contents"  style="width: 100%;height: 100%;">
    <div class="container"><?=$content?></div>
</div>
<?
//$result = Compress::instance('javascripts')->scripts($scripts);

    foreach($scripts as $script){
        echo HTML::script($script);
    }
?>
</body>
</html>
