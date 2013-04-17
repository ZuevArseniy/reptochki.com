<span class='span12'><h1>Ваши репетиционные точки</h1>
    <br>
        <table class='table'>
            <thead>
            <th>Название</th>
            <th>Краткая информация</th>
            <th>Действия</th>
            </thead>
<?foreach($studios as $studio):?>
            <tr>
                <td><?=$studio->title?></td>
                <td><?=$studio->preview_text?></td>
                <td >
                    <a style="width: 100px;margin-bottom: 10px" href='/admin/studio/edit/<?= $studio->id?>' class='btn btn-info block'><i class='icon-pencil icon-white'></i> Править</a>
                    <a style="width: 100px;" href="/admin/studio/photo/<?= $studio->id?>" class="btn btn-primary block"><i class="icon-white icon-camera"></i> Фотографии</a>
                </td>
            </tr>
<?endforeach;?>
 </table>
    </span>