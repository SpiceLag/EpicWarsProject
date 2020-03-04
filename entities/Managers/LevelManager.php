<?php

namespace entities\Managers;

class LevelManager {
    public static $baseExp = 100;
    public static $maxLevel = 100;
    public static $minLevel = 1;

    public static function levelUp(\entities\Character $character, $numLevels) {
        if($character->getLevel() <= \entities\Managers\LevelManager::$maxLevel){
            $totalLevels = $character->getLevel() + $numLevels;
            $character->setLevel($totalLevels);
            \entities\GameAnnouncer::charLevelUp($character, $numLevels);
        }else{
            \entities\GameAnnouncer::charLevelUp($character, $numLevels);
        }
    }
    public static function levelDown(\entities\Character $character, $numLevels) {
        if($character->getLevel() >= \entities\Managers\LevelManager::$minLevel){
            $totalLevels = $character->getLevel() - $numLevels;
            $character->setLevel($totalLevels);
            \entities\GameAnnouncer::charLevelDown($character, $numLevels);
        }else{
            \entities\GameAnnouncer::charLevelDown($character, $numLevels);
        }
    }
    public static function getExpForLevel(\entities\Character $character, $experiencePoints) {
        if($experiencePoints >= \entities\Managers\LevelManager::$baseExp){
            \entities\Managers\LevelManager::levelUp($character, 1);
            $character->setXp(1);
        }
    }
}
