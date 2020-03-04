<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities\Races;

/**
 * Description of Race
 *
 * @author pabhoz
 */
abstract class Race implements \interfaces\HumanoidI{
    
    public static function getRaceName() {
        $nameArray = explode('\\',get_called_class());
        return $nameArray[sizeof($nameArray) - 1];
    }

    public abstract function getStats(): Array;

}
