<?php
    $bbdd = 'oradores';
    include 'conexion.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tema = $_POST['tema'];
    
    // *ACTUALIZAR
    $actualizar = "UPDATE registro SET nombre='$nombre', apellido='$apellido', tema='$tema' WHERE id=$id";
    $actualizarBBDD = mysqli_query($conexion,$actualizar);

    header("location:lista.php");

    mysqli_close($conexion);
?>