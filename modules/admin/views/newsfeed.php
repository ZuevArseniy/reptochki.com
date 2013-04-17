<!-- Верхний кусок -->
<?=View::factory('email/_newsfeed/header')?>
<!-- Основная акция -->
<?=View::factory('email/_newsfeed/main_action')->bind('item', $items[0])?>
<!-- Остальные акции -->
<?php
for($i = 1; $i < count($items); $i++) {
    $item = array();
    $item[] = $items[$i];
    $item[] =  isset($items[++$i]) ? $items[++$i] : NULL ;
    echo View::factory('email/_newsfeed/action')->bind('items', $item);
}
?>
<!-- Нижний кусок -->
<?=View::factory('email/_newsfeed/footer')?>