<?php
class Model_City extends Model_Countries_City{

    protected $_has_many = array(
        'studios' => array(
            'model' => 'studio',
            'foreign_key' => 'city_id'
        ),
        'codes' => array(
            'model' => 'phonecodes'
        ),
        'operators' => array(

        )
    );
}