<?php
include 'conexion.php';
    //**SELECT */
    $mysql = "SELECT * FROM medidas ";
    $result = mysqli_query($conexion, $mysql);
    mysqli_query($conexion, $mysql) or die (mysqli_error());
    while ($fila = mysqli_fetch_array($result)){
        echo " dato $fila[dato] <br>";
    }
    mysqli_close($conexion);


?>