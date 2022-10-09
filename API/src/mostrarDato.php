<?php
//----------------------------------
//mostrarDato.php
//Jordi Doménech Belda
//----------------------------------

//includes
include 'conexion.php';


    //GET
    //seleccionamos toda la tabla de medidas
    $mysql = "SELECT * FROM medidas ";

    //query
    $result = mysqli_query($conexion, $mysql);
    mysqli_query($conexion, $mysql) or die (mysqli_error());


    //recorremos está y la mostrams en la web
    while ($fila = mysqli_fetch_array($result)){
        echo " dato $fila[dato] <br>";
    }
    //cerramos conexión
    mysqli_close($conexion);


?>