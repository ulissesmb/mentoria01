<?php
include_once("./config.php");

$request = $_SERVER['REQUEST_METHOD'];


if($request == "GET"){
    //reponse 200
    header("HTTP/1.1 204 No Content");

    echo "Registro cadastrado com sucesso";
}

if($request == "POST"){
    //reponse 201
    header("HTTP/1.1 404 Not Found");
    echo "registro nao encontrado!";
}

if($request == "PUT"){
    //reponse 201
    header("HTTP/1.1 500 Internal Server Error");
    echo "registro nao encontrado!";
}

?>
