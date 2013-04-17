<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Admin_Admin extends Controller_Template{

    public $template = 'layout';

    public function before(){
        parent::before();
        if(!defined('CITY_ID')){
            die('Доступ в административную часть возможен только для субдомена Вашего города. Наример http://minsk.reptochki.by/admin/');
        }
        if(!Auth::instance()->logged_in()){
            $this->request->redirect('/admin/');
        }elseif(!Auth::instance()->logged_in('admin')){
            throw new HTTP_Exception_403('Вам сюда нельзя');
        }
        $this->template->user = TRUE;
        $this->superadmin = Auth::instance()->logged_in('superadmin');
        $this->user = Auth::instance()->get_user();
        $belongings = DB::select('studio_id')
            ->from('user_studio')
            ->where('user_id','=',$this->user->id)
            ->execute();
        $this->studios = array();
        foreach($belongings as $studio){
            $this->studios[] = $studio['studio_id'];
        }
        if((!$this->superadmin) AND (!$belongings)){
            throw new Kohana_HTTP_Exception_403('Не твоя точка');
        }
    }
}