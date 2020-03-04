<?php

namespace entities\Managers;

class SkillManager {

    //public $golpeConArma = new \entities\Skills\Skill("Golpe_con_Arma", "Fisico", "Basico", "100% de danho con arma derecha o 2 manos. 70% mano izquierda");
    //public $golpeTrampero = new \entities\Skills\Skill("Golpe Trampero", "Fisico", "Picaro", "150% de danho con armas en ambas manos de una mano.");
    //public $tajoMortal = new \entities\Skills\Skill("Tajo Mortal","Fisico","Guerrero","200% de danho con armas.");
    //public $meditacion = new \entities\Skills\Skill("Meditacion","Magico","Basico","Incrementa su agi y intl en 5%.");
    //public $calcinacion = new \entities\Skills\Skill("Calcinacion","Magico","Mago","40% de danho magico usando intl.");
    //public $tacticasCombate = new \entities\Skills\Skill("Tacticas de Combate","Fisico","Avanzado","Incrementa str y agi en 5%.");

    public static function learnSkill (\entities\Character $character, \entities\Skills\Skill $skill) {
        if($character->getActualSkill() == null){
            switch($character->getPlayableClass()){
                case "Warrior":
                    if($skill->getType() == "Magico"){
                        echo "Los guerreros no aprenden magia!";
                    break;
                    }
                    elseif($skill->getSubType() == "Picaro") {
                        echo "Los guerreros no aprenden habilidades de picaro!";
                    break;
                    }elseif($skill->getSubType() == "Mago") {
                        echo "Los guerreros no aprenden habilidades de mago!";
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
                        echo "Los magos no aprenden habilidades fisicas avanzadas!";
                    break;
                    }elseif($skill->getSubType() == "Guerrero"){
                        echo "Los magos no aprenden habilidades de guerrero!";
                    break;
                    }elseif($skill->getSubType() == "Picaro"){
                        echo "Los magos no aprenden habilidades de picaro!";
                    break;
                    }else{
                        \entities\GameAnnouncer::learnSkill($character, $skill);
                        $character->setActualSkill($skill);
                    break;
                    }
                break;
                case "Rogue":
                    if($skill->getType() == "Fisico" && $skill->getSubType() == "Avanzado"){
                        echo "Los picaros no aprenden habilidades fisicas avanzadas!";
                    break;
                    }
                    if($skill->getType() == "Magico" && $skill->getSubType() == "Avanzado"){
                        echo "Los picaros no aprenden habilidades magicas avanzadas!";
                    break;
                    }elseif($skill->getSubType() == "Guerrero"){
                        echo "Los picaros no aprenden habilidades de guerrero!";
                    break;
                    }elseif($skill->getSubType() == "Mago"){
                        echo "Los picaros no aprenden habilidades de mago!";
                    break;
                    }else{
                        \entities\GameAnnouncer::learnSkill($character, $skill);
                        $character->setActualSkill($skill);
                    break;
                    }
                break;
            }
        }else{
            echo "Olvidar primero la skill actual";
        }
    }
    public static function forgetSkill (\entities\Character $character) {
        if($character->getActualSkill() != null){
            \entities\GameAnnouncer::forgetSkill($character);
            $character->setActualSkill(null);
        }
    }
}
