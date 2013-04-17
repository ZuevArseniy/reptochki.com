<span class='span9'>
    <?if($messages):?>
    <div class="row">
        <div class="alert-success well span4">
            <div class="span6">
                <span class="inline"><?=$messages[0]?></span>
            </div>
        </div>
    </div>
    <?endif;?>
    <form action='' method="POST">
    <h1>Новое сообщение рассылки</h1>
    <div class="control-group">
        <label class="control-label">Заголовок</label>
        <div class="controls docs-input-sizes">
            <input class="span9" name='title' type="text" placeholder="Заголовок сообщения">
            <p class="help-block">Введите заголовок отправляемого сообщения.</p>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="optionsCheckboxList">Акции</label>
        <div class="controls">
            <?foreach ($stocks as $stock): ?>
            <label class="checkbox">
                <input type="checkbox" name="actions[]" value="<?=$stock['id']?>"><?=$stock['title']?>
            </label>
            <?endforeach;?>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Разослать</button>
        <button class="btn">Назад</button>
    </div>
    </form>
</span>