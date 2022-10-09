<?php

//----------------------------------
//conexion.php
//Jordi Doménech Belda
//----------------------------------

//para ejecutar con xampp (parámetros)
$hostname = 'localhost';
$database = 'medidas';
$username = 'root';
$password = '';

//pasamos  los paramteros y comprobamos si se puede establecer la conexión
$conexion = new mysqli($hostname, $username, $password, $database);
if($conexion->connect_errno){
    echo "no funciona bien la conexion";
}
?>