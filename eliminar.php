<?php
    $bbdd = 'oradores';
    include 'conexion.php';

    $id = $_GET['id'];

    $eliminar = "DELETE FROM registro WHERE id = '$id'";
    $delete = mysqli_query($conexion,$eliminar);

    header("location:lista.php");

    mysqli_close($conexion);
?>