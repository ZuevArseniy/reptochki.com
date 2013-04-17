<?php
class Phone {
    const SHOW = 1;
    const EDIT = 2;

    public static  function render(Model_Phone $phones, Model_City $city , Model_Country $country ,$type = Phone::SHOW) {
            $phones = $phones->with('operator')->with('code')->find_all();
            if ($type === self::SHOW) {
                ob_start();
                   try{
                        foreach ($phones as $phone) {
                            echo  View::factory('phone/phone')
                                ->bind('city',$city)
                                ->bind('country',$country)
                                ->bind('phone', $phone)
                                ->render();
                        }
                   } catch (Exception $e) {
                       ob_clean();
                   }
                return ob_get_clean();
            } elseif ($type === self::EDIT) {
                ob_start();
                try{
                    foreach ($phones as $phone) {
                        echo  View::factory('phone/form')
                            ->bind('city',$city)
                            ->bind('country',$country)
                            ->bind('phone', $phone)
                            ->render();
                    }
                    $phone_dummy = ORM::factory('phone');
                    echo  View::factory('phone/form')
                        ->bind('city',$city)
                        ->bind('country',$country)
                        ->bind('phone', $phone_dummy)//attach empty phone
                        ->set('empty',TRUE)
                        ->render();
                } catch (Exception $e) {
                    ob_clean();
                }
                return ob_get_clean();
            }
        }

}