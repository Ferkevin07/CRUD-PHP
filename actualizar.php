<?php
    require 'conexion.php';
    $con=conectar();

    $codigo=$_GET['id'];
    $sql="SELECT * FROM alumno WHERE codigo=$codigo";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Basic</title>
    </head>
    
    <body>
        <div class="container mt-8">
            <div class="row">
                <div class="col-md-8"> 
                    <h1>Actualice</h1>

                    <form action="update.php" method="POST">
                        <input type="hidden" class="form-control mb-3" name="codigo" placeholder="cod estudiante" value="<?php echo $row['codigo'] ?>">
                        <input type="text" class="form-control mb-3" name="dni" placeholder="dni" 
                        value="<?php echo $row['dni'] ?>">
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" 
                        value="<?php echo $row['nombre'] ?>">
                        <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos" value="<?php echo $row['apellido'] ?>">

                        <input type="submit" class="btn btn-primary" value="Actualizar">
                        

                    </form>
                </div>                
            </div>
        </div>
    </body>
</html>