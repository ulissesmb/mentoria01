<?php

include_once("../config.php");
include_once("./class.Servico.php");

$servico = new Servico();
$servico->setNome("Degradê especial na navalha");
mostrar($servico);

?>