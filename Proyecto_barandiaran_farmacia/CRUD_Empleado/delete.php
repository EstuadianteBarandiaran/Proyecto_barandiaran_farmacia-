<?php

include("conexion.php");
$con=conectar();

$Id_Empleado=$_GET['id'];

$sql="DELETE FROM empleado  WHERE Id_Empleado='$Id_Empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Empleado.php");
    }
?>
