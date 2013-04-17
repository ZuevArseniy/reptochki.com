<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Unisender extends Controller_Admin_Admin{

    public function action_index(){
        if($post = $this->request->post()){
            $items = Model_Stock::instance()->fetch_stock(array(
                'id'     => $post['actions'],
                'active' => NULL,
                'seller' => TRUE,
            ));
            $body = View::factory('newsfeed')->bind('items', $items);
            $unisender = new Unisender();
            $unisender->create_message($post['title'],$body);
            $messages = array( 'Письмо успешно отправлено адресатам!');
        }
        $stocks = new Model_Stock();
        $stocks = $stocks->get_stocks_list(TRUE);
        $content = View::factory('unisender/index')
            ->bind('stocks',$stocks)
            ->bind('messages',$messages);
        $this->template->content = $content;
        $this->template->menu  = View::factory('menu')->set('uri','/admin/unisender/');
    }
}