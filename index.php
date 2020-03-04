<?php

require './config.php';
// usamos namespaces para estructurar con más orden nuestras clases
// el \ inicial nos ayuda a que la rita sea desde la raíz en lugar de tomar
// la ruta dinámica desde el punto en donde estamos importando una clase
$human = \entities\Managers\CharacterManager::create("Gerald",1,1,\entities\Races\Human::class,"Rogue");
$orc = \entities\Managers\CharacterManager::create("Garrosh",1,1,\entities\Races\Orc::class,"Warrior");

//presentCharacter($human);

\entities\Managers\DamageManager::die($human); 
\entities\Managers\DamageManager::revive($human);
\entities\Managers\LevelManager::levelUp($human, 2);
\entities\Managers\LevelManager::levelDown($human, 1);

    $golpeConArma = new \entities\Skills\Skill("Golpe con Arma", "Fisico", "Basico", "100% de danho con arma derecha o 2 manos. 70% mano izquierda");
    $golpeTrampero = new \entities\Skills\Skill("Golpe Trampero", "Fisico", "Picaro", "150% de danho con armas en ambas manos de una mano.");
    $tajoMortal = new \entities\Skills\Skill("Tajo Mortal","Fisico","Guerrero","200% de danho con armas.");
    $meditacion = new \entities\Skills\Skill("Meditacion","Magico","Basico","Incrementa su agi y intl en 5%.");
    $calcinacion = new \entities\Skills\Skill("Calcinacion","Magico","Mago","40% de danho magico usando intl.");
    $tacticasCombate = new \entities\Skills\Skill("Tacticas de Combate","Fisico","Avanzado","Incrementa str y agi en 5%.");

\entities\Managers\SkillManager::learnSkill($human, $meditacion);
\entities\Managers\SkillManager::forgetSkill($human);
\entities\Managers\SkillManager::learnSkill($human, $tajoMortal);

$daga = new \entities\Weapon("Daga envenenada","1H","All"); 
\entities\Managers\WeaponManager::equipWeapon($human,$daga);




