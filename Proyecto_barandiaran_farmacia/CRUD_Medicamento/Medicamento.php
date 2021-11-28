<?php include('../header.php')?>
<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM medicamento";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA FARMACIA MEDICAMENTO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">


                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Antibiotico" placeholder="Antibiotico">
                                    <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion">
                                    <input type="text" class="form-control mb-3" name="Costo" placeholder="Costo">
                                    <input type="text" class="form-control mb-3" name="Proveedor" placeholder="Proveedor">
                                    <input type="text" class="form-control mb-3" name="Existencia" placeholder="Existencia">
                                    <input type="date" class="form-control mb-3" name="Fecha_Caducidad" placeholder="Fecha_Caducidad">

                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_barandiaran_farmacia/index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IdMedicamento</th>
                                        <th>Nombre</th>
                                        <th>Antibiotico</th>
                                        <th>Descripcion</th>
                                        <th>Costo</th>
                                        <th>Proveedor</th>
                                        <th>Existencia</th>
                                        <th>Fecha_Caducidad</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IdMedicamento']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Antibiotico']?></th>
                                                <th><?php  echo $row['Descripcion']?></th> 
                                                <th><?php  echo "$".$row['Costo']?></th>
                                                <th><?php  echo $row['Proveedor']?></th>  
                                                <th><?php  echo $row['Existencia']?></th>
                                                <th><?php  echo $row['Fecha_Caducidad']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['IdMedicamento'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IdMedicamento'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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