<?php
    include('conexion.php');
    $con=conectar();

    $codigo=$_POST['codigo'];
    $dni=$_POST['dni'];
    $nombres=$_POST['nombre'];
    $apellidos=$_POST['apellido'];

    $sql="UPDATE alumno SET dni='$dni', nombre='$nombres', apellido='$apellidos' WHERE codigo='$codigo'";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }else{
        Header("Location: info.php");
    }
?>