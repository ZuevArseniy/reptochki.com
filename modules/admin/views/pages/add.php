<span class="span9">
    <form class="form-horizontal" method="post" name='from.add'>
        <fieldset>
            <legend><?=$title?></legend>
            <div class="control-group">
                <label class="control-label" for="input01">Название страницы</label>
                <div class="controls">
                    <input name="login" type="text" class="span6" id="input01">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" name="actions[]" value="7"> Активность
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input02">URL-код</label>
                <div class="controls">
                    <input name="password" type="text" class="span6" id="input02">
                    <p class="help-block">Код страницы для отображения в URL (только латинские буквы,цифры и дефис)</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input02">Контент</label>
            <div class="controls">
                <textarea class="span6" id="textarea" rows="30" cols='100' style='width:620px;height: 400px' style="margin: 0px; height: 54px; width: 320px; "></textarea>
            </div>
            </div>
            <div class="form-actions">
                <a class='btn btn-success'><i class=' icon-ok'></i> Сохранить</a>
                <a class='btn btn-primary' href='/admin/pages/list'><i class="icon-arrow-left icon-white"></i> Назад к списку</a>
            </div>
        </fieldset>
    </form>
</span>