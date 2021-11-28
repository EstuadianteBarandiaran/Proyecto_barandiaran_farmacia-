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




$sql="INSERT INTO medicamento VALUES('$IdMedicamento','$Nombre','$Antibiotico','$Descripcion','$Costo','$Proveedor','$Existencia','$Fecha_Caducidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Medicamento.php");
    
}else {
}
?>