<div id='map' style='height: 400px;'></div>
    <div>
        <h5>Реп точки в твоем городе</h5>
        <ul class="nav nav-pills">
            <?foreach($cities as $city):?>
            <li class="city" id='city_<?=$city->id?>' data-id='<?=$city->id?>'><a href="http://<?=$city->alias?>.reptochki.by"><?=$city->title?></a></li>
            <?endforeach;?>
        </ul>
    </div>