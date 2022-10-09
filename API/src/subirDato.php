<?php
//----------------------------------
//subirDato.php
//Jordi Doménech Belda
//----------------------------------

//includes
include 'conexion.php';

    //Método post
    $dato = $_POST['dato'];

    //consulta
    $mysql = "INSERT INTO medidas VALUES ('".$dato."')";

    //conexión
    mysqli_query($conexion, $mysql) or die (mysqli_error());

    //cerramos conexión
    mysqli_close($conexion);


?>