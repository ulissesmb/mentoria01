<?php
include_once("./config.php");


if( $req == "GET"){ //POST == GET - FALSE
    $frutas[] = ["banana","maca","laranja","tangerina","amoras","uva", "manga"];
    mostrar($frutas);
    $carnes[] = ["maminha","alcatra","picanha","acém","linguiça_Raul"];
    mostrar($carnes);
}
 
?>
<br />
<h1>Server...</h1>