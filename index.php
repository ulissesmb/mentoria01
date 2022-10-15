<?php

/*
 echo "<pre>";
 print_r($_SERVER);
 echo "</pre>";
 */


$req = $_SERVER['REQUEST_METHOD']; //POST

if( $req == "GET"){ //POST == GET - FALSE
    echo "oi ". $req;
}

if($req == "POST"){ //POST == POST -TRUE
    echo "oi ". $req;
}

if($req == "DELETE"){ //POST == DELETE - FALSE
    echo "oi ". $req;
}

if($req == "PATCH"){ //GET == PATCH - FALSE
    echo "oi ".$req;
}

 
?>
<br />
<h1>Sempre vai mostrar!!</h1>