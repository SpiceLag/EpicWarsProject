<?php
spl_autoload_register(function($class){
    
     /*
     *  Namespaced Classes
     */
    if(file_exists(__DIR__."/".str_replace('\\','/',$class).".php")){
        require_once __DIR__."/".str_replace('\\','/',$class).".php";
        return 0;
    }
    
    if(file_exists(INTERFACES.$class.".php")){
        require_once INTERFACES.$class.".php";
        return 0;
    }

    if(file_exists(ENTITIES.$class.".php")){
        require_once ENTITIES.$class.".php";
        return 0;
    }

});
