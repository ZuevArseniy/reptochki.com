<style type="text/css">
    .accordion-heading{
        position: relative;
    }
    .accordion-heading .voting{
        position: absolute;
        right:25px;
        top:8px;
    }
    .accordion-heading .voting i:hover{
        cursor: pointer;
    }
</style>
<div id='loading' class="visible">
    <span>Пожалуйста, подождите</span>
</div>
<div class="row">
        <span class="span8" style="position: relative;">
            <span class="city-select" style="position: absolute;top: 5px;z-index: 5;right: 10px;">
                <select name="city" id="city" class="span2">
                    <?foreach($cities as $city):?>
                    <option <?=$city->id == $current_city? 'selected':''?> value="<?=$city->alias?>"><a href="http://<?=$city->alias?>.reptochki.by"><?=$city->name?></a></option>
                    <?endforeach;?>
                </select>
            </span>
        <div id='map' style='height: 320px'>

        </div>
            <span id='schedule-wrapper' class="white" style="height: 330px;">
<!--                <h1>Свободное время</h1>-->
<!--                <hr>-->
<!--                <span id='schedule-content-wrapper'>-->
<!--                    <span class='default schedule-active'><i>Репетиционная студия не выбрана</i></span>-->
<!--                    --><?//foreach($studios as $studio):?>
<!--                    <span id='schedule---><?//=$studio->id?><!--' style='display: none;'>-->
<!--                        --><?//if(strlen($studio->schedule)):?>
<!--                        --><?//=$studio->schedule?>
<!--                        --><?//else:?>
<!--                        <i>Информации о свободном времени нет :(</i>-->
<!--                        --><?//endif;?>
<!--                    </span>-->
<!--                    --><?//endforeach;?>
<!--                </span>-->
                                <div class='default schedule-active' style="text-align: center;">
                                    <img style="margin-top: 30px;" src="http://cs405723.userapi.com/v405723147/5e1c/TUadurPRc-M.jpg" alt="">
                                <p class="lead">Репетиционная студия не выбрана</p>
                                </div>

                <?foreach($studios as $studio):?>
                <?$images = $studio->images->limit(5)->find_all()?>
                <?if($count = $images->count()):?>
                <div id="schedule-<?=$studio->id?>" style='display: none;' class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <?$i = 1;?>
                        <?foreach($images as $image):?>

                        <div style=": 330px;" class="<?=$i==1? 'active' : ''?> item">
                            <img style="margin: 0 auto;" class='img-polaroid' src="/imagefly/w480-h320-c-q70/medium/studio<?=$studio->id?>/<?=$image->filename?>">
                        </div>
                        <?if($i++)?>
                            <?endforeach;?>
                    </div>
                    <?if($count>1):?>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                     <?endif;?>
                </div>
                    <?else:?>
                                    <div id="schedule-<?=$studio->id?>" style='display: none;text-align: center;' class="">

                    <img style="margin-top: 30px;" src="http://cs405723.userapi.com/v405723147/5e1c/TUadurPRc-M.jpg" alt="">
                        <p class="lead">Эта студия пока не загрузила свои фото</p>
                            </div>
                <?endif;?>
                <?$images = NULL;?>
                 <?endforeach;?>
            </span>
        </span>
<span class='span4' id='studio-list'>
            <div class="accordion" id="accordion2">
                <?foreach($studios as $studio):?>
                <div class="accordion-group">
                    <div class="accordion-heading" data-studio-id='<?=$studio->id?>'>
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?=$studio->id?>">
                            <?=$studio->title?>
                        </a>
                        <span class="voting" data-studio-id='<?=$studio->id?>'>
                            <i class="icon-thumbs-up"></i>
                            <span><?=Num::format($studio->sort_index,0)?></span>
                            <i class="icon-thumbs-down"></i>
                        </span>
                    </div>
                    <div  id="collapse<?=$studio->id?>" class="accordion-body collapse studio<?=$studio->id?>" rel='<?=$studio->id?>'>
                        <div class="accordion-inner">
                            <h3>Телефоны</h3>
                            <address class="phones">
                                <?=Phone::render($studio->phones,$studio->city,$studio->city->country)?>
                            </address>
                            <h3>Описание</h3>
                            <p><?=$studio->preview_text ? $studio->preview_text :$studio->description?></p>
                            <h3>Адрес</h3>
                            <p><?=$studio->adress?></p>
                            <a href="<?=$studio->url?$studio->url:'/studio_' . $studio->id?>">Подробнее...</a>
                        </div>
                    </div>
                </div>
                <?endforeach;?>
            </div>
        </span></div>
<hr>