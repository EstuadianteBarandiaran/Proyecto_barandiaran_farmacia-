<?php

include("conexion.php");
$con=conectar();

$IdMedicamento=$_GET['id'];

$sql="DELETE FROM medicamento  WHERE IdMedicamento='$IdMedicamento'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Medicamento.php");
    }
?>
