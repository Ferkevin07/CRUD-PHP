<?php
    function conectar(){
        $host="localhost";
        $user="root";
        $pass="";
        $bd="basic";

        $con=mysqli_connect($host,$user,$pass,$bd,3308);

        if($con){
            echo "Base bien";
        }else{
            echo "no mismo";
        }
        
        return $con;
    }
?>