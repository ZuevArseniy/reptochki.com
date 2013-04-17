<span class="span9">
    <h1>Инфостраницы</h1>
    <br>
    <table class='table'>
        <thead>
        <tr>
            <th>Страница</th>
            <th>Действия</th>
        </tr>
        </thead>
    <?foreach($pages as $page):?>
    <tr>
        <td><?=$page['title']?></td>
        <td style='width:80px'>
            <a class="btn btn-success" href="/admin/pages/edit/<?=$page['id']?>">
                <i class="icon-pencil"></i> </a>
           <a class="btn btn-danger" href="/admin/pages/delete/<?=$page['id']?>">
               <i class="icon-trash icon-white"></i> </a></a>
        </td>
    </tr>
    <?endforeach;?>
    </table>
    <div class="form-actions">
        <a class='btn btn-primary' href='/admin/pages/add'><i class="icon-plus icon-white"></i> Добавить страницу</a>
    </div>
</span>