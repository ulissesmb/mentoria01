<?php
include_once("./config.php");


$req = $_SERVER['REQUEST_METHOD'];
if( $req == "GET"){ //POST == GET - FALSE
    $frutas[] = ["banana","maca","laranja","tangerina","amoras"];
    mostrar($frutas);
    $carnes[] = ["maminha","alcatra","picanha","acém"];
    mostrar($carnes);
}
 
?>
<br />
<h1>Server...</h1>