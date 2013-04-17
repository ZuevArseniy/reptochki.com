<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Studio extends Controller_Main {

    public function action_list()
    {

        $this->title = 'Реп.точки Минска';
     //   $this->scripts[] = 'http://maps.google.com/maps/api/js?v=3.2&sensor=false';
//        if($this->request->param('alias') == 'harkov'){
//            $this->request->redirect('http://kharkiv.reptochki.by',301);
//        }
        $this->scripts[] = MEDIA_SITE . 'js/vk.js';
        $this->scripts[] = MEDIA_SITE .'js/leaflet.js';
       // $this->scripts[] = MEDIA_SITE .'js/Google.js';
        $this->scripts[] = MEDIA_SITE .'js/main.js?v=7';
        $this->scripts[] = MEDIA_SITE .'js/bootstrap.index.js';
        $this->scripts[] = MEDIA_SITE .'js/bootstrap-carousel.js';

       // $this->scripts[] = 'http://maps.google.com/maps/api/js?v=3.2&sensor=false';
        $this->vk = false;
        $cities = ORM::factory('city')->find_all();


          if( !$content = Cache::instance('sqlite')->get('studio_list_' . CITY_ID)){
        $studio = ORM::factory('studio');
        $studios = $studio->get_list($this->city_id);
        $content = View::factory('test/list')
            ->bind('studios',$studios)
            ->bind('current_city',$this->city_id)
            ->bind('cities',$cities)
            ->render();
         Cache::instance('sqlite')->set('studio_list_' . CITY_ID,$content);
         }

        $this->content = $content;
    }

    public function action_detail()
    {
        $this->title = 'Реп.точки Минска';
        $this->template->back = true;
        $this->scripts[] = MEDIA_SITE .'js/detail1.js';
        $this->scripts[] = MEDIA_SITE .'js/bootstrap-carousel.js';
        $id = $this->request->param('id');
        $studio = ORM::factory('studio',$id)->with('city:country');
        $this->title = isset($studio->title) ? $studio->title : 'Ошибка' ;
        $content = View::factory('studio/detail')->bind('studio',$studio);
        $this->content = $content;
    }
    public function action_markers(){
     //   if( !$markers = Cache::instance()->get('markers'. $this->city_id)){
            $studio = new Model_Studio();
            $markers = $studio->get_markers($this->city_id);
            $markers = json_encode($markers);
     //       Cache::instance()->set('markers'. $this->city_id,$markers);
     //   }
        echo $markers;
        die();
    }

}
