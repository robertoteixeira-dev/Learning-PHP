<?php

function outoload($className){
    $file = __DIR__ . '/class/' . $className . '.php';
    //This would have a problem with linux, so to it work on any server:
    // create a variable
    $fullPath = str_replace("\\",DIRECTORY_SEPARATOR,$file); 
    //The DIRECTORY_SEPARATOR will say that it has to be on the operator system  
    //Now it will replace the // for \\

    if(is_file($fullPath)){
        require_once($fullPath);
    }
    //The require_once will require the file only if were not initialized yet
}
//Para ele percorrer todos os arquivos na pasta class:
spl_outload_register('outoload');

/*
On your INDEX.PHP put the:
    require('loadClass.php');
*/

// WE ARE GOING TO USE COMPOSER INSTEAD OF THIS OUTOLOAD FUNCTION 
?>