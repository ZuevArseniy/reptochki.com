<?php
class Controller_Index extends Controller_Template{

    public $template = 'index/template';

    public  $scripts = array();
    private $styles = array();
    public $title = NULL;
    public $content = NULL;
    public $vk = TRUE;
    public $city_id = NULL;

    public function before(){
        parent::before();
        if(!isset($_GET['force'])){
            $city_id = Cookie::get('city_alias');
                if($city_id){
                    $this->request->redirect("http://{$city_id}.reptochki.by");
                }
        }else{
            Cookie::delete('city_alias');
            $this->request->redirect('/');
        }
        $this->scripts[] = MEDIA_SITE . 'js/jquery.js';
    }

    public function action_goto(){
        $alias = $this->request->param('alias');
        Cookie::set('city_alias',$alias,Date::MONTH);
        $this->request->redirect("http://{$alias}.reptochki.by");
    }

    public function action_index(){

        $this->scripts[] = MEDIA_SITE . 'js/vk.js';
        $this->scripts[] = MEDIA_SITE .'js/leaflet.js';
        $this->scripts[] = MEDIA_SITE .'js/index_map.js?v=8';
        $this->vk = false;
        $cities = ORM::factory('city')->find_all();


        $content = View::factory('index/index')
            ->bind('cities',$cities);

        $this->content = $content;
    }
    public function after(){
     //   $this->scripts[] = 'js/sharing.js';
        $this->template->title = '';
        $this->template->head_title = '';
        $this->template->keywords = '';
        $this->template->description = '';
        $this->template->scripts = $this->scripts;
        $this->template->styles = $this->styles;
        $this->template->content = $this->content;
        $this->template->vk = false;
        parent::after();
    }

    public function action_ajax()
    {
        $cities = ORM::factory('city')->find_all();
        $result = array();
        foreach($cities as $city){
            $result[] = (object) array(
                'lat' => $city->lat,
                'lon' => $city->lon,
                'name'=> $city->name,
                'alias' => $city->alias,
                'id' => $city->id,
                'count' => $city->studios->count_all()

            );
        }

        echo json_encode((object) $result);
        die();
    }


}