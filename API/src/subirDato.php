<?php
include 'conexion.php';
    $dato = $_POST['dato'];

    $mysql = "INSERT INTO medidas VALUES ('".$dato."')";
    mysqli_query($conexion, $mysql) or die (mysqli_error());
    mysqli_close($conexion);


?>