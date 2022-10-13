<?php

/**
*   @author     Jordi Domenech
*   @date       2022
*   @brief      conexion.php
*   @pre        Lee el README
 */

/**
 * para ejecutar con xampp (parámetros)
 */
$hostname = 'localhost';
$database = 'medidas';
$username = 'root';
$password = '';


/**
 * @brief pasamos  los paramteros y comprobamos si se puede establecer la conexión
 */
$conexion = new mysqli($hostname, $username, $password, $database);
if($conexion->connect_errno){
    echo "no funciona bien la conexion";
}
?>