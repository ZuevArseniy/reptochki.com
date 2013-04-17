<script type="text/javascript" src="/js/jquery.MultiFile.pack.js"></script>
<script type="text/javascript">
    <?
    if ($count > 15) {
        $reaming = 20 - $count;
    } else {
        $reaming = 5;
    }
    if ($count == 20) {
        $block = true;
    } else {
        $block = false;
    }
    ?>
    <?if (!$block): ?>
    $(function () {
        $('#multi').MultiFile({
            accept:'jpg|gif|bmp|png', max:<?=$reaming?>, STRING:{
                remove:'<img src="/images/delete.png"> ',
                selected:'Выбраны: $file',
                denied:'Неверный тип файла: $ext!',
                duplicate:'Этот файл уже выбран:\n$file!'
            }});
    });
        <? endif;?>
</script>
<a class=" span btn btn-primary" href="/admin/"><i class="icon icon-arrow-left"></i> Назад</a>
<span class="span12">
    <h1 class="span">Мои фотографии</h1>
    <span class="span12">
        <div class="alert alert-info">
            <h2>Информация о свободном месте <span class="label <?=$block ? 'label-important' : 'label-warning'; ?>">Загружено <?=$count?>
                /20</span></h2>
            <div style="" class="progress">
                <div class="bar <?=$reaming<5 ? 'bar-danger' : ''?>" style="width: <?=$count / 0.2?>%;"></div>
            </div>

        </div>


    </span>

<form enctype="multipart/form-data" method="post">
    <!-- <button id='add-file' class="btn btn-primary"><i class="icon icon-plus"></i> Добавить</button>-->
    <span class="span12" style="margin: 22px 0;">
        <?if (!$block): ?>
        <span class="span9">
            <span class="label label-info">Выбери нужные файлы (не более <?=$reaming?>)</span>
            <input style="" id='multi' type="file" name="images[]">
        </span>
        <? endif;?>


        <button type="submit" class="btn btn-primary pull-right"><i class="icon icon-ok"></i> Готово</button>
        <div class="clearfix"></div>
    </span>

    <span class="span12">
            <?foreach ($images as $image): ?>
        <div class="span3" style="margin-left: 10px;">
            <img class='img-polaroid' style="height: 250px;width: 220px;"
                 src="/upload/studio<?=$studio_id?>/<?=$image->filename?>"><br>
            <label class="checkbox">
                <input type="checkbox" name="delete[]" value="<?=$image->id?>">
                Удалить
            </label>
        </div>
        <? endforeach?>

    </span>

    </span>

</form>
</span>
