<?php
require_once __DIR__ . '/vendor/autoload.php';

$cliente = new MongoDB\Client("mongodb://localhost:27017");
$banco = $cliente->TrabalhoMongoDB;
?>
