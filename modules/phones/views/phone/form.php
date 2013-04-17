    <div class="span9 phone" style="margin-bottom: 8px">
        <span class="inline">+<?=$country->phone_code?> </span>
        <input type="hidden" <?=$phone->id ? 'value="' . $phone->id . '"' : '';?> class="inp-id" name="phones[id][]">
        <input type="hidden" class="inp-delete" value="0" name="phones[delete][]">
        <select name="phones[code_id][]" style="width: 50px">
            <option value="0">--</option>
            <? foreach ($city->codes->order_by('code','ASC')->find_all() as $code): ?>
            <option <?=$phone->code_id == $code->id ? 'selected' : ''?>
                    value="<?= $code->id?>"><?=$code->code?></option>
            <? endforeach; ?>
        </select>
        <input type="text" value="<?=$phone->number?>" class="input-mini" maxlength="7" name="phones[number][]"
               placeholder='xxxxxxx'>
        <select name="phones[operator_id][]" class="input-medium">
            <option value="0">------</option>
            <?foreach ($city->operators->find_all() as $operator): ?>
            <option <?=$phone->operator_id == $operator->id ? 'selected' : ''?>
                    value="<?=$operator->id?>"><?=$operator->name?></option>
            <? endforeach;?>
        </select>
        <?if(isset($empty)): ?>
        <a class="btn btn-primary add-phone">
            <i class="icon-plus icon-white"></i> Еще...
        </a>
        <? else: ?>
        <a class="btn btn-danger delete-phone">
            <i class="icon-remove icon-white"></i> Удалить
        </a>
        <? endif;?>
    </div>
<? if(isset($empty)): ?>
<script type="text/javascript">
    $(function () {
        $('.phone').parent().on('click', '.phone .add-phone',function () {
            var content = $(this).closest('.phone').clone();
            content.find('input').val('');
            content.insertAfter($(this).closest('.phone'));
            var del_button = '<a class="btn btn-danger delete-phone"><i class="icon-remove icon-white"></i> Удалить</a>';
            $(del_button).insertAfter($(this));
            $(this).remove();
        }).on('click', '.phone .delete-phone', function () {
                    var phone_row = $(this).closest('.phone');
                    if (phone_row.find('input.inp-id').val()) {
                        $(this).closest('.phone').hide().find('input.inp-delete').val(1);
                    } else {
                        phone_row.remove();
                    }

                });

    });

</script>
<? endif; ?>