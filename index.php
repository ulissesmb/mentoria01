<?php
include_once("./config.php");

$request = $_SERVER['REQUEST_METHOD'];


if($request == "GET"){
    //reponse 204
    header("HTTP/1.1 204 No Content");
    //echo "Registro cadastrado com sucesso";
}

if($request == "POST"){
    //reponse 201
    header("HTTP/1.1 404 Not Found");
    //header("HTTP/1.1 200 No Content");
    echo "registro nao encontrado!";
}



?>
