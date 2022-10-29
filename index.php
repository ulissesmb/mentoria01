<?php
include_once("./config.php");


if( $req == "GET" || $req == "POST"){
    $frutas[] = ["banana","maca","laranja","tangerina","amoras","outra","banana","uva", "manga"];
    mostrar($frutas);
    $carnes[] = ["maminha","alcatra","picanha","acém","linguiça_Raul"];
    mostrar($carnes);
}
 
?>
<br />
<h1>Server...</h1>