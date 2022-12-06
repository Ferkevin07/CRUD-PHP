<?php
    require 'conexion.php';
    $con=conectar();
    $sql="SELECT * FROM alumno";
    $query=mysqli_query($con,$sql);
    //$row=mysqli_fetch_array($query);
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
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3"> 
                    <h1>Ingrese datos</h1>
                    <form action="insertar.php" method="POST">
                        <input type="text" class="form-control mb-3" name="codigo" placeholder="cod estudiante">
                        <input type="text" class="form-control mb-3" name="dni" placeholder="dni">
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                        <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos">

                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>

                <div class="col-md-8">
                    <h1>MOSTRAR TABLA</h1>
                    <table class="table"> 
                        <thead class="table-success table-striped">
                            <tr>
                                <th>Codigo</th>
                                <th>DNI</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['codigo']?></th>
                                    <th><?php echo $row['dni']?></th>
                                    <th><?php echo $row['nombre']?></th>
                                    <th><?php echo $row['apellido']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-primary">Editar</a></th>
                                    <th><a href="delete.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </body>
</html>