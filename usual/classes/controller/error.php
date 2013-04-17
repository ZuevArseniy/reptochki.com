<?php
class Controller_Error extends Controller{


    public function action_404(){
        $response = View::factory('error/404')->render();
        $this->response->body($response);
    }
}