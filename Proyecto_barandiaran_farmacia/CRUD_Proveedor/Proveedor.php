<?php include('../header.php')?>
<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM proveedor";
    $query=mysqli_query($con,$sql);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA REGISTRO PROVEEDORES</title>
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


                                    <input type="text" class="form-control mb-3" name="Nombre_Proveedor" placeholder="Nombre_Proveedor">
                                    <input type="text" class="form-control mb-3" name="Representante_Legal" placeholder="Representante_Legal">
                                    <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono">
                                    <input type="email" class="form-control mb-3" name="Correo_Electronico" placeholder="Correo Electronico">
                                    <input type="text" class="form-control mb-3" name="RFID" placeholder="RFID">

                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_barandiaran_farmacia/index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IdProveedor</th>
                                        <th>Nombre_Proveedor</th>
                                        <th>Representante_Legal</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Correo_Electronico</th>
                                        <th>RFID</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IdProveedor']?></th>
                                                <th><?php  echo $row['Nombre_Proveedor']?></th>
                                                <th><?php  echo $row['Representante_Legal']?></th>
                                                <th><?php  echo $row['Direccion']?></th> 
                                                <th><?php  echo $row['Telefono']?></th>   
                                                <th><?php  echo $row['Correo_Electronico']?></th>   
                                                <th><?php  echo $row['RFID']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['IdProveedor'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IdProveedor'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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