<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities;

/**
 * Description of GameAnnouncer
 *
 * @author pabhoz
 */
class GameAnnouncer {
    
    public static function presentCharacter(\entities\Character $character){ 
        echo $character->getName()." se ha unido al mundo</br>";
        echo $character->getName()." es un ".$character->getRace()::getRaceName()."</br>";
        echo "Las estadísticas de ".$character->getName()." son:</br>";
        echo "Su clase es: " .$character->getPlayableClass()."</br>";
        echo "HP Max: ".$character->getMaxHealtPoints()."</br>";
        echo "Str: ".$character->getStr()."</br>";
        echo "Intl: ".$character->getIntl()."</br>";
        echo "Agi: ".$character->getAgi()."</br>";
        echo "PDef: ".$character->getPDef()."</br>";
        echo "MDef: ".$character->getMDef()."</br></br>";
    }

    public static function charDeath(\entities\Character $character){
        if($character->getIsAlive()){
            echo $character->getName() . " ha muerto, lo recordaremos en nuestros corazones :'c </br>";
        }else{
            echo $character->getName() . " ya esta muerto, dejalo en paz >:'c </br>";
        }
    }

    public static function charResurrect(\entities\Character $character){
        if(!$character->getIsAlive()){
            echo $character->getName() . " esta reviviendo!! OMFG!! </br>";
        }else{
            echo $character->getName() . " ya esta vivo, acaso querias mas? </br>";
        }
    }

    public static function charLevelUp(\entities\Character $character, $totalLevels){
        if($character->getLevel() <= \entities\Managers\LevelManager::$maxLevel){
            echo $character->getName() . " ha subido " . $totalLevels . " nivel/es, que crack, ahora es nivel " . $character->getLevel() . "!! </br>";
        }else{
            echo "Ese valor de nivel para " . $character->getName() . " se pasa amiguito </br>";
        }
    }

    public static function charLevelDown(\entities\Character $character, $totalLevels){
        if($character->getLevel() >= \entities\Managers\LevelManager::$minLevel){
            echo $character->getName() . " ha bajado " . $totalLevels . " nivel/es, severo n00b, ahora es un pobre nivel " . $character->getLevel() . " </br>";
        }else{
            echo "Ese valor de nivel para " . $character->getName() . " esta por debajo del nivel normal";
        }     
    }

    public static function learnSkill(\entities\Character $character, \entities\Skills\Skill $skill){
        if($character->getActualSkill() == null){
            echo $character->getName() . " ha aprendido la skill de " . $skill->getName() . " !! Hijo de tu puta madre, esta mamadisimo!! </br>";
        }else{
            echo $character->getName() . " ya posee la skill " . $skill->getName() . ". Debe olvidarla primero para aprender otra. </br>";  
        }
    }

    public static function forgetSkill(\entities\Character $character){
        if($character->getActualSkill() != null){
            echo $character->getName() . " ha olvidado " . $character->getActualSkill()->getName() . ", bye bye! </br>";
        }
    }
}
