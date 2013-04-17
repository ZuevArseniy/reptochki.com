<?php defined('SYSPATH') or die('No direct script access.');

class Model_Studio extends ORM{
    protected $_has_many = array(
        'phones'    => array(
            'model'         => 'phone',
            'foreign_key' => 'studio_id',
        ),
        'images'    => array(
            'model' => 'image',
            'through' => 'studios_images'
        ),
    );
    protected $_belongs_to = array(
        'city' =>array(
            'model' => 'city'
        )
    );

    public function filters()
    {
        return array(
            'preview_text' => array(
                array('trim'),
                array('strip_tags', array(':value', '<b><br><br/><a><p><i><ol><ul><li><u>')),
            ),
            'adress' => array(
                array('trim'),
                array('strip_tags', array(':value', '<b><br><br/><a><p><i><ol><ul><li><u>')),
            ),
            'preview_text' => array(
                array('trim'),
                array('strip_tags', array(':value', '<b><br><br/><a><p><i><ol><ul><li><u>')),
            ),
//
//            'username' => array(
//                // PHP Function Callback, default implicit param of ':value'
//                array('trim'),
//            ),
//            'created_on' => array(
//                // Callback static method with params
//                array('Format::date', array(':value', 'Y-m-d H:i:s')),
//            )
            );
    }

    public function get_list_for_admin($user_id){
        $user = ORM::factory('user',$user_id);
        if($user->has('roles',3)){
            return $this->where('city_id','=',CITY_ID)->find_all();
        }else{
            return $this->join('user_studio')
                ->on('user_studio.studio_id','=','id')
                ->where('user_studio.user_id','=',$user_id)
                ->and_where('city_id','=',CITY_ID)
                ->find_all();
        }

    }
    public function updates($post,$studio_id){
        DB::update('studios')
            ->where('id','=',$studio_id)
            ->set(
            array(
                'title' => $post['title'],
                'meta'  => $post['meta'],
                'description' => $post['description'],
                'phones' => $post['phones'],
                'adress' => $post['adress'],
                'schedule' => $post['schedule'],
                'lat' => $post['lat'],
                'lon' => $post['lon'],
            )
        )->execute();
    }
    public function get_markers($city_id = 1){
        $result = DB::select('id','title','lat','lon')
            ->from('studios')
            ->where('city_id','=',CITY_ID)
            ->order_by('sort_index','DESC')
            ->execute()
            ->as_array();

        return $result;
    }


    public function get_list($city_id = 1)
    {
        return $this
            ->where('city_id','=',$city_id)
            ->order_by('sort_index','DESC')
            ->with('city:country')
            ->find_all();
    }

    public function get_owner($id){
        $result = DB::select('user_id')
            ->from('studios')
            ->where('id','=',$id)
            ->execute()
            ->as_array();
        if(count($result)){
            return array_shift($result);
        }else{
            return FALSE;
        }
    }
}