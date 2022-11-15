<?php

//receber todos os metodo do crud
$req = $_SERVER['REQUEST_METHOD'];


//Meu primeiro metodo para mostrar os arrays das variaveis
function mostrar($print, $die = false){
    echo "<pre>";
    print_r($print);
    echo "</pre>";   

    if($die){
        die();
    }
 }

?>