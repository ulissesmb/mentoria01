<?php
include_once("./config.php");


$req = $_SERVER['REQUEST_METHOD'];
if( $req == "GET"){ //POST == GET - FALSE
    $frutasd[] = ["banana","maca","laranja"];
    mostrar($frutasd);
}
 
?>
<br />
<h1>Server...</h1>