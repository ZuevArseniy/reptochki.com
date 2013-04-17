<?php defined('SYSPATH') or die('No direct script access.');

class Model_Countries_Country extends ORM{

    /**
     * @var array has_many relations
     */
    protected  $_has_many = array(
        'cities' => array()
    );

    /**
     * @return validation rules
     */
    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
                array('max_length', array(':value', 10)),
                array('Valid::decimal', array(':value', 0)), // natural numbers only
            ),
            'phone_code'  => array(
                array('max_length', array(':value', 10)
                ),
            ),
            'flag'  => array(
                array('max_length', array(':value', 100)
                ),
            ),
        );
    }

    /**
     * @return array|void model's filters
     */
    public function filters()
    {
        return array(
            '*' => array('trim'), //trim all the model's fields
        );
    }

    /**
     * @return field labels
     */
    public function labels()
    {
        return array(
            'name'       => 'Country name',
            'phone_code'        => 'Country phone code',
            'flag'        => 'Path to map\'s flag',
        );
    }

}