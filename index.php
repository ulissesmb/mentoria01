<?php

include_once("./config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    mostrar($data['product']);
} else {
    echo "fail";
}
?>