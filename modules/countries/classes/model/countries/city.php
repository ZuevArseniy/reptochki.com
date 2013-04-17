<?php defined('SYSPATH') or die('No direct script access.');

    class Model_Countries_City extends ORM {
        /**
         * @var string table name
         */
        protected $_table_name = 'cities';
        /**
         * @var array City belongs to Country. Module relationship
         */
        protected $_belongs_to = array(
            'country' => array(),
        );

        /**
         * @return validation rules
         */
        public function rules()
        {
            return array(
                'alias' => array( // Not empty, <20 symbols, only letters and dashes
                    array('not_empty'),
                    array('max_length', array(':value', 20)),
                    array('Valid::alpha_dash', array(':value')),
                ),
                'name'  => array( // Not empty, <30 symbols
                    array('not_empty'),
                    array('max_length', array(':value', 30)
                    ),
                ),
                'zoom'  => array(// <2 symbols
                    array('max_length', array(':value', 2)
                    ),
                ),
                'lat'   => array(
                    array('Valid::decimal', array(':value', 16)
                    ),
                ),
                'lon'   => array(
                    array('Valid::decimal', array(':value', 16)
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
                'alias'       => 'URL alias',
                'name'        => 'City name',
                'zoom'        => 'Map zoom',
                'lon'         => 'City Longitude',
                'lat'         => 'City Latitude',
                'description' => 'City Description',
            );
        }
    }