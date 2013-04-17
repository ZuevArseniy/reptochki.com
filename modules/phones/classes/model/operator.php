<?php
class Model_Operator extends ORM{

    protected $_has_many = array(
        'phones' => array()
    );
    protected $_belongs_to = array(
        'city' =>array(
            'model' => 'cities'
        )
    );
}