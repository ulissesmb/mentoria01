<?php
include_once("./config.php");

$request = $_SERVER['REQUEST_METHOD'];
echo $request."<br/>";


if($request == "GET"){
    $nome = "bonfim";
    $nome = 35;
    $nome = "ucode.filter@gmail.com";
    //$nome = 3.3;


    echo 'Eu informo o valor:' . $nome ; 
}


?>