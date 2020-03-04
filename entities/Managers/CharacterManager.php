<?php

namespace entities\Managers;

class CharacterManager{

    public static function create($name, $sex, $bodyType, $race, $playableClass){
        

        [$maxHealtPoints, $str,$intl,$agi,$pDef,$mDef] = $race::getStats();
        
        $xp = 1;
        // Al ser creado el personaje tiene tantos puntos de vida actuales
        // como el máximo que puede tener
        $healtPoints = $maxHealtPoints;
        $level = 1;
        $isAlive = true;
        $actualSkill = null;
        $hands = array( 
            "LH" => null,
            "RH" => null,
            "2Ha" => new \entities\Weapon("Punhos", "1H","All")
        );
        $character = new \entities\Character($name, $sex, $bodyType, $race, $playableClass, $str, $intl ,$agi ,$pDef ,
                $mDef ,$xp, $healtPoints,$maxHealtPoints, $level, $isAlive, $actualSkill, $hands);
        
        \entities\GameAnnouncer::presentCharacter($character);
        return  $character;
    }
}
