<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Main extends Controller_Template {

    /**
     * @var View template
     */
    public $template = 'layout/template';
    public  $scripts = array();
    private $styles = array();
    public $title = NULL;
    public $content = NULL;
    public $vk = TRUE;
    public $city_id = NULL;

    public function before(){
        parent::before();
        if(defined('CITY_ID')){
        Cookie::set('city_id',CITY_ID,Date::MONTH);
        }
        $this->scripts[] = MEDIA_SITE . 'js/jquery.js';
        $this->scripts[] = MEDIA_SITE . 'js/meny.min.js';
        $this->styles[] = MEDIA_SITE . 'css/demo.css';
        if(defined('CITY_ID')){
            $this->city_id = CITY_ID;
        }
        $this->template->set_global('city',ORM::factory('city',CITY_ID)->with('country'));
    }

    public function after(){
        $this->scripts[] = 'js/sharing.js';
        if(defined('CITY_ID')){
        $city = ORM::factory('city',CITY_ID);
        }
        $this->template->title = $city->title;
        $this->template->head_title = $city->head_title;
        $this->template->keywords = $city->keywords;
        $this->template->description = $city->description;
        $this->template->scripts = $this->scripts;
        $this->template->styles = $this->styles;
        $this->template->content = $this->content;
        $this->template->vk = $this->vk;
        parent::after();
    }

}