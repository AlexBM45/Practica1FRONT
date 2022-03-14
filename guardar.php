<?php
    $bbdd = 'oradores';
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tema = $_POST['tema'];

    $insertar = "INSERT INTO registro(id,nombre,apellido,tema) VALUES (null,'$nombre','$apellido','$tema')";

    $enviar = mysqli_query($conexion,$insertar);

    header("location:lista.php");

    // cerrar la conexión
    mysqli_close($conexion);
?>