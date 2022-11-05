<?php
include_once("./config.php");

$request = $_SERVER['REQUEST_METHOD'];

$help = "HTTP/1.1 ";
$erro1 = "503 Service Unavailable";
$erroFatal = "500 Internal Server Error";
$create = "201 Created";
$sucesso = "200 OK";

if($request == "GET"){  
    header($help . $erro1);
} elseif ($request == "POST" ||$request == "PUT") {
    header($help . $create);
} elseif ($request == "DELETE") {
    header($help . $sucesso);
} else {
    header($help . $erroFatal);
}


?>
