<?php
include_once("./config.php");

try
{
    //your code here.
}
catch(PDOException $exception)
{
    die($exception->getMessage());
}


if( $req == "GET"){ //POST == GET - FALSE
    $frutas[] = ["banana","maca","laranja","tangerina","amoras"];
    mostrar($frutas);
    $carnes[] = ["maminha","alcatra","picanha","acém"];
    mostrar($carnes);
}
 
?>
<br />
<h1>Server...</h1>