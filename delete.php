<?php
    include('conexion.php');
    $con=conectar();

    $codigo=$_GET['id'];

    $sql="DELETE FROM alumno WHERE codigo='$codigo'";

    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }

?>