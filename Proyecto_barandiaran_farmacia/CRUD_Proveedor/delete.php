<?php

include("conexion.php");
$con=conectar();

$IdProveedor=$_GET['id'];

$sql="DELETE FROM proveedor  WHERE IdProveedor='$IdProveedor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Proveedor.php");
    }
?>
