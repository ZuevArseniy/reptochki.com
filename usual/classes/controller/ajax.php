<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller_Main {

    public function action_map()
    {
        $city = $this->city->id;
        $map_info = DB::select()->from('cities')->where('id','=',$city)->execute()->current();
        $result = (object) array(
            'lat' => $map_info['lat'],
            'lon' => $map_info['lon'],
            'zoom'=> $map_info['zoom']
        );
        echo json_encode($result);
        die();
    }


}