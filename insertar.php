<?php
    include('conexion.php');
    $con=conectar();

    $codigo=$_POST['codigo'];
    $dni=$_POST['dni'];
    $nombres=$_POST['nombre'];
    $apellidos=$_POST['apellido'];

    $sql="INSERT INTO alumno VALUES('$codigo','$dni','$nombres','$apellidos')";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }else{

    }
?>