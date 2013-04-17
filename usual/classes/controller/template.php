<?php
abstract class Controller_Template extends Kohana_Controller_Template{

    protected $city = NULL;

    public function before(){
        parent::before();
        Cookie::$salt = 'qsdjfiascadbfvas2341';
        $this->city = ORM::factory('city',Cookie::get('city_id',1));
        $this->template->bind_global('city',$this->city);
    }


}