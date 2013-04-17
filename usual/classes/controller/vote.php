<?php
class Controller_Vote extends Controller{
    private $ip = NULL;
    private $post = NULL;

    public function before(){
        parent::before();
        $ip = $_SERVER['REMOTE_ADDR'];
        $this->ip = $ip;
        $this->post = $this->request->post();
        if(!$this->request->is_ajax()){
            throw new Exception('hacking atempted');
        }
        $voted =    DB::select('ip','timestamp','studio_id')
            ->from('voting')
            ->where('ip','=',$ip)
            ->and_where('timestamp','>',time()-24*60*60)
            ->and_where('studio_id','=',$this->post['studio_id'])
            ->execute()
            ->as_array();
        if(!empty($voted)){
            throw new Exception('already voted');
        }
    }

    public function action_plus(){
        DB::insert('voting',array('ip','timestamp','studio_id'))
            ->values(array($this->ip,time(),$this->post['studio_id']))
            ->execute();
        $studio = ORM::factory('studio',$this->post['studio_id']);
        $studio->sort_index += 1;
        $studio->save();
        $response = array(
            'response' => $studio->sort_index,
        );
        echo json_encode($response);
        die();



    }
    public function action_minus(){
        DB::insert('voting',array('ip','timestamp','studio_id'))
            ->values(array($this->ip,time(),$this->post['studio_id']))
            ->execute();
        $studio = ORM::factory('studio',$this->post['studio_id']);
        $studio->sort_index -= 1;
        $studio->save();
        $response = array(
            'response' => $studio->sort_index,
        );
        echo json_encode($response);
        die();

    }




}