<?php
include_once("./config.php");


if( $req == "GET"){ //POST == GET - FALSE
    $frutas[] = ["banana","maca","laranja","tangerina","amoras"];
    mostrar($frutas);
}
 
?>
<br />
<h1>Server...</h1>