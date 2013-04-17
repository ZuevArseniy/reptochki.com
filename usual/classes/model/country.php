<?php
class Model_Country extends ORM{

    protected  $_has_many = array(
        'cities' => array()
    );
}