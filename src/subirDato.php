<?php
/**
*   @author     Jordi Domenech
*   @date       2022
*   @brief      subirDato.php
*   @pre        Lee el README
 */

 /**
  * @brief includes
  */
include 'conexion.php';

    /**
     * @brief POST dato
     */
    $dato = $_POST['dato'];

    /**
     * @brief consulta
     */
    $mysql = "INSERT INTO medidas VALUES ('".$dato."')";

    /**
     * @brief conexión
     */
    mysqli_query($conexion, $mysql) or die (mysqli_error());

    /**
     * @brief cerramos conexion
     */
    mysqli_close($conexion);


?>