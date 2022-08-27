<?php
session_start();
require_once 'conexion.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$object = new conexion();
$conexion= $object-> Conectar();

$id = $_POST['id'];
$name = $_POST['name'];
$details = $_POST['details'];

define('query', "UPDATE products SET name= '$name' , details= '$details' WHERE id= '$id' ");


$result =  $conexion->prepare(query);
$result->execute();
$data = $result->rowCount();

print $data;

