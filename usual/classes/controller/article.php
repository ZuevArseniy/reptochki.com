<?php
class Controller_Article extends Controller_Template{
    public $template = 'index/template';
    public  $scripts = array();
    public $keywords = NULL;
    public $description = NULL;
    public $styles = array();
    public $title = NULL;
    public $content = NULL;
    public $vk = TRUE;
    public $city_id = NULL;
    public $h_title = NULL;

    public function action_index(){

    }
    public function action_view(){

    }


    public function before(){
        parent::before();
        $this->scripts[] = MEDIA_SITE . 'js/jquery.js';
    }
    public function after(){
        //   $this->scripts[] = 'js/sharing.js';
        $this->template->title = $this->title;
        $this->template->h_title = $this->h_title;
        $this->template->keywords = $this->keywords;
        $this->template->description = $this->description;
        $this->template->scripts = $this->scripts;
        $this->template->styles = $this->styles;
        $this->template->content = $this->content;
        $this->template->vk = false;
        parent::after();
    }

}