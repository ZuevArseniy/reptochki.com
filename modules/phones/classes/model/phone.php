<?php
class Model_Phone extends ORM{
    protected $_belongs_to = array(
        'studio'    => array(
            'model'         => 'studio',
            'foreign_key' => 'studio_id',
        ),
        'operator' => array(

        ),
        'code' => array(
            'model' => 'phonecodes',
            'foreign_key' => 'code_id'
        )
    );
    public function set_phones($phones,$id){
        foreach($phones['code_id'] as $key=>$value){
            if($value && $phones['number'][$key] && $phones['operator_id'][$key]){
                if($phone_id = $phones['id'][$key]){
                    $edited_phone = ORM::factory('phone',$phone_id);
                    if($edited_phone->loaded()){
                        if($phones['delete'][$key]){
                            $edited_phone->delete();
                        }else{
                            $edited_phone->values(array(
                                'code_id'     => $value,
                                'number'      => $phones['number'][$key],
                                'operator_id' => $phones['operator_id'][$key],
                            ))->update();
                        }
                    }
                }else{
                    if(!$phones['delete'][$key]){
                        ORM::factory('phone')
                            ->values(array(
                            'code_id'     => $value,
                            'number'      => $phones['number'][$key],
                            'operator_id' => $phones['operator_id'][$key],
                            'studio_id'   => $id
                        ))->create();
                    }
                }
            }
        }
    }

}