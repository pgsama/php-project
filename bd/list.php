<?php
require_once 'conexion.php';

$object = new conexion();
$conexion= $object-> Conectar();

define('query', 'SELECT * FROM products');

$result =  $conexion->prepare(query);
$result->execute();

$data = $result->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data);