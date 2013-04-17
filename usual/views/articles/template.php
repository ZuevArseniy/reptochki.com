<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META Name="keywords" Content="<?=$keywords?>">
    <META Name="description" Content="<?=$description?>">
    <link rel="stylesheet" href='http://media.reptochki.by/css/bootstrap.min.css'>
    <?
    //$result = Compress::instance('stylesheets')->styles(array('css/styles.css'));
    echo HTML::style('css/styles.css');
    ?>
    <link rel="shortcut icon" href="http://reptochki.by/images/favicon.png" type="image/x-icon" />
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style type="text/css">
        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255,255,255,0.8);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            border-radius: 5px;
            width: 100px;
            height: 60px;
        }
        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }
    </style>
</head>

<div class="container">

    <div class="masthead" style="width: 100%;">

        <h3 style="padding-left: 34px;
background: url('http://reptochki.by/images/logo_n1.png') no-repeat;
background-position: 0 3px;" class="muted">eptochki.by</h3>
    </div>
    <hr>
    <div class="jumbotron">
        <h1><?=$h_title?></h1>
        <?=$content?>
    </div>
    <hr>
    <div class="footer">
        <p>Reptochki.by 2012</p>
    </div>

</div>
<?
//$result = Compress::instance('javascripts')->scripts($scripts);
foreach($scripts as $script){
    echo HTML::script($script);
}
?>
</body>
</html>
