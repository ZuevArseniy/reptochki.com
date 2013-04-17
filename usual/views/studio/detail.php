<style type="text/css">
    .caption h3{
        margin: 0;

    }
    .thumbnail .caption{
        padding: 0;
    }
    h1.navbar-inner,h3.navbar-inner{
        padding: 10px;
        margin-top: 0;
    }
    .schedule{
        padding: 10px;
    }
    pre{
        background: none;
        border: none;
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        padding: 0;
        word-break: normal;
    }
   /* .dl-horizontal dt{
        width: 110px;
    }
    .dl-horizontal dd{
        margin-left: 130px;
    }*/
</style>
<span class="span12 wrap" style="background: #ffffff;">
    <h1 class="navbar-inner"><?=$studio->title?></h1>
    <?$images = $studio->images->find_all()?>

<?if($images->count()):?>
<div id="myCarousel" class="carousel slide">
    <!-- Carousel items -->
    <div class="carousel-inner">
        <?$i = 1;?>
        <?foreach($images as $image):?>

        <div style=": 330px;" class="<?=$i==1? 'active' : ''?> item">
            <img style="margin: 0 auto;" class='img-polaroid' src="/medium/studio<?=$studio->id?>/<?=$image->filename?>">
        </div>
        <?if($i++)?>
            <?endforeach;?>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
<?endif;?>
    <span class="span11"><dl class="dl-horizontal">
        <dt>Телефоны</dt>
        <dd><p><?=Phone::render($studio->phones,ORM::factory('city',$studio->city_id),ORM::factory('city',$studio->city_id)->country)?></p></dd>
        <dt>Адрес</dt>
        <dd><?=$studio->adress?></dd>
        <dt>Описание</dt>
        <dd><?=$studio->description?></dd>
    </dl></span>
<div class="clearfix"></div>
<h3 class="navbar-inner">Свободное время на студии</h3>
<span class="span12 schedule">

    <?=$studio->schedule?>
</span>
    <div class="clearfix"></div>
    <div class="navbar-inner">
        <div style="padding: 9px;" id="ilike"></div>
        <script type="text/javascript">
            window.onload = function () {
                VK.Widgets.Like('ilike', { pageTitle: '<?=$studio->title?>', pageDescription: '<?=$studio->meta?>'});
            }
        </script>
    </div>
    <span class="span11 schedule">
        <div id="vk_comments"></div>

    </span>
</span>
