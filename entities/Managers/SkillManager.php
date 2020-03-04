<?php

namespace entities\Managers;

class SkillManager {

    public static function learnSkill (\entities\Character $character, \entities\Skills\Skill $skill) {
        if($character->getActualSkill() == null){
            switch($character->getPlayableClass()){
                case "Warrior":
                    if($skill->getType() == "Magico"){
                        echo "Los guerreros no aprenden magia!</br>";
                    break;
                    }
                    elseif($skill->getSubType() == "Picaro") {
                        echo "Los guerreros no aprenden habilidades de picaro!</br>";
                    break;
                    }elseif($skill->getSubType() == "Mago") {
                        echo "Los guerreros no aprenden habilidades de mago!</br>";
                    break;
                    }
                    else{
                        \entities\GameAnnouncer::learnSkill($character, $skill);
                        $character->setActualSkill($skill);
                    break;
                    }
                break;
                case "Mage":
                    if($skill->getType() == "Fisico" && $skill->getSubType() == "Avanzado"){
                        echo "Los magos no aprenden habilidades fisicas avanzadas!</br>";
                    break;
                    }elseif($skill->getSubType() == "Guerrero"){
                        echo "Los magos no aprenden habilidades de guerrero!</br>";
                    break;
                    }elseif($skill->getSubType() == "Picaro"){
                        echo "Los magos no aprenden habilidades de picaro!</br>";
                    break;
                    }else{
                        \entities\GameAnnouncer::learnSkill($character, $skill);
                        $character->setActualSkill($skill);
                    break;
                    }
                break;
                case "Rogue":
                    if($skill->getType() == "Fisico" && $skill->getSubType() == "Avanzado"){
                        echo "Los picaros no aprenden habilidades fisicas avanzadas!</br>";
                    break;
                    }
                    if($skill->getType() == "Magico" && $skill->getSubType() == "Avanzado"){
                        echo "Los picaros no aprenden habilidades magicas avanzadas!</br>";
                    break;
                    }elseif($skill->getSubType() == "Guerrero"){
                        echo "Los picaros no aprenden habilidades de guerrero!</br>";
                    break;
                    }elseif($skill->getSubType() == "Mago"){
                        echo "Los picaros no aprenden habilidades de mago!</br>";
                    break;
                    }else{
                        \entities\GameAnnouncer::learnSkill($character, $skill);
                        $character->setActualSkill($skill);
                    break;
                    }
                break;
            }
        }else{
            echo "Olvidar primero la skill actual</br>";
        }
    }
    public static function forgetSkill (\entities\Character $character) {
        if($character->getActualSkill() != null){
            \entities\GameAnnouncer::forgetSkill($character);
            $character->setActualSkill(null);
        }
    }
}
