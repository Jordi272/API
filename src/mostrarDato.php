<?php
/**
*   @author     Jordi Domenech
*   @date       2022
*   @brief      mostrarDato.php
*   @pre        Lee el README
 */

/**
 * @brief includes
 */
include 'conexion.php';


    /**
     * @brief SELECT (seleccona toda la tabla)
     */
    $mysql = "SELECT * FROM medidas ";

    /**
     * @brief query
     */
    $result = mysqli_query($conexion, $mysql);
    mysqli_query($conexion, $mysql) or die (mysqli_error());


    /**
     * recorremos esta y la mostrams en la web
     */
    while ($fila = mysqli_fetch_array($result)){
        echo " dato $fila[dato] <br>";
    }
    //cerramos conexión
    mysqli_close($conexion);


?>