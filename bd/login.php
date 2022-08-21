<?php
session_start();

require_once 'conexion.php';

$object = new conexion();
$conexion= $object-> Conectar();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


define("query", "SELECT * FROM users  WHERE username = '$username' AND password = '$password'");

$result = $conexion->prepare(query);
$result->execute();

if($result->rowCount() > 0){
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_username"] = $username;
}else{
    $data = null;
    $_SESSION["s_username"] = null;
}

print json_encode($data);

$conexion = null;
?>