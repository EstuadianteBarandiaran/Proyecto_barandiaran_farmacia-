<?php

include("conexion.php");
$con=conectar();

$IdMedicamento=$_POST['IdMedicamento'];
$Nombre=$_POST['Nombre'];
$Antibiotico=$_POST['Antibiotico'];
$Descripcion=$_POST['Descripcion'];
$Costo=$_POST['Costo'];
$Proveedor=$_POST['Proveedor'];
$Existencia=$_POST['Existencia'];
$Fecha_Caducidad=$_POST['Fecha_Caducidad'];

$sql="UPDATE medicamento SET  Nombre='$Nombre',Antibiotico='$Antibiotico',Descripcion='$Descripcion',Costo='$Costo',Proveedor='$Proveedor',Existencia='$Existencia',Fecha_Caducidad='$Fecha_Caducidad' WHERE IdMedicamento='$IdMedicamento'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Medicamento.php");
    }
?>