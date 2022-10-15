<?php

//receber todos os metodo do crus
$req = $_SERVER['REQUEST_METHOD'];


//Meu primeiro metodo para mostrar os arrays das variaveis
function mostrar($print){
    echo "<pre>";
    print_r($print);
    echo "</pre>";   
 }

?>