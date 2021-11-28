<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM proveedor WHERE IdProveedor='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="IdProveedor" value="<?php echo $row['IdProveedor']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre_Proveedor" placeholder="Nombre_Proveedor" value="<?php echo $row['Nombre_Proveedor']  ?>">
                                <input type="text" class="form-control mb-3" name="Representante_Legal" placeholder="Representante_Legal" value="<?php echo $row['Representante_Legal']  ?>">
                                <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion" value="<?php echo $row['Direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="Correo_Electronico" placeholder="Correo_Electronico" value="<?php echo $row['Correo_Electronico']  ?>">
                                <input type="text" class="form-control mb-3" name="RFID" placeholder="RFID" value="<?php echo $row['RFID']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>