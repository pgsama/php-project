<?php
class conexion{
    public static function Conectar(){
        define("HOST", "localhost");
        define("user", "root");
        define("pass", "");
        define("db", "loginphp");

        $opt = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 

        try
        {
            $conexion = new PDO("mysql:host=".HOST.";dbname=".db, user, pass, $opt);

            return $conexion;
        }
        catch(Exception $e)
        {
            die("Error: " . $e->getMessage());
        }
    }

}
?>