<?php

class Kohana_Exception extends Kohana_Kohana_Exception {

    public static function handler(Exception $e)
    {
        // Тут можно проанализировать ошибку, например если HTTP_Exception что-то одно, иначе другое
        if ($e instanceof HTTP_Exception)
        {
            echo 'Error '.$e->getCode();
        }
        else
        {
            parent::handler($e);
        }
    }
}