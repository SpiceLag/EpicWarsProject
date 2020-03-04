<?php

namespace entities\Managers;

class DamageManager{
        public static function die(\entities\Character $character) {
                if($character->getIsAlive()){
                        \entities\GameAnnouncer::charDeath($character);
                        $character->setIsAlive(false);
                        $character->setHealtPoints(0);
                }else{
                        \entities\GameAnnouncer::charDeath($character);
                }
        }
        
        public static function revive(\entities\Character $character) {
                if(!$character->getIsAlive()){
                        \entities\GameAnnouncer::charResurrect($character);
                        $character->setIsAlive(true);
                        $character->setHealtPoints(10);
                }else{
                        \entities\GameAnnouncer::charResurrect($character);
                }
        }
        
        public static function attack() {

        }
        
        public static function takeDamage() {

        }
        
}
