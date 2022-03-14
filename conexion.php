<?php
    $conexion = mysqli_connect ('localhost','root','',$bbdd);
    if(mysqli_connect_errno()){
        echo 'falló: ' . mysqli_connect_errno(); // muestra el error
    } else {
        echo 'se conecto perfecto';
    }
?>