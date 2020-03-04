<?php
    
namespace entities\Managers;

class WeaponManager{

    public static function equipWeapon(\entities\Character $character,\entities\Weapon $weapon){
        $playableClass = $character->getPlayableClass();
        $weaponType = $weapon->getType();

        switch($playableClass){
            case "Warrior":
            break;
            case "Mage":
            break;
            case "Rogue":
                if($weaponType == "2H"){
                    echo "Los picaros no se equipan armas de dos manos!!</br>";
                break;
                }elseif ($weaponType == "1H") {
                    $character->setHands(2,null);

                    if($character->getHands(0) != null && $character->getHands(1) != null){
                        echo "Ya tienes las dos armas equipadas!! </br>";
                    break;
                    }elseif($character->getHands(0) != null && $character->getHands(1) == null){
                        //Arma en la izquierda pero no en la derecha
                        echo "Ya tienes un arma en tu mano izquierda, equipando en la derecha...</br>";
                        $character->setHands("RH",$weapon);
                        echo $character->getName() . " se ha equipado el arma: ". $weapon->getName()."</br>";
                    break;
                    } 
                }
            break;
        }
    }

}
