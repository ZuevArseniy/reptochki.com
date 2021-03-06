<?php

class Controller_Contact extends Controller_Main{

    public function action_index(){
        $this->scripts[] = MEDIA_SITE . 'js/detail1.js';
        $this->title = 'Как с нами связаться?';

        if($post = $this->request->post()){

            $contact = new Model_Contact();
            $result = $contact->add_message($post);
            if($result === true){
                $messages = 'Спасибо, ваше сообщение отправлено администратору';
            }else{
                $errors = $result;
            }
        }

        $content = View::factory('/contact/index')
            ->bind('errors',$errors)
            ->bind('message',$messages);
        $this->content = $content;
    }
    public function action_meanings(){
        $this->scripts[] = MEDIA_SITE . 'js/detail1.js';
        $this->title = 'Отзывы и пожелания проекту';
        $content = View::factory('/contact/meaning');
        $this->content = $content;
    }

}