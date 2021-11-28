<?php

include("conexion.php");
$con=conectar();

$Id_Cliente=$_GET['id'];

$sql="DELETE FROM clientes  WHERE Id_Cliente='$Id_Cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Cliente.php");
    }
?>
