<?php
$hostname = 'localhost';
$database = 'medidas';
$username = 'root';
$password = '';

$conexion = new mysqli($hostname, $username, $password, $database);
if($conexion->connect_errno){
    echo "no funciona bien la conexion";
}
?>