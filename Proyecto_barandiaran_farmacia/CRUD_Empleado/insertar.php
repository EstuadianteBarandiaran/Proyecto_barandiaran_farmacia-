<?php
include("conexion.php");
$con=conectar();

$Id_Empleado=$_POST['Id_Empleado'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$CURP=$_POST['CURP'];
$Direccion=$_POST['Direccion'];
$Telefono=$_POST['Telefono'];
$Correo_Electronico=$_POST['Correo_Electronico'];


$sql="INSERT INTO empleado VALUES('$Id_Empleado','$Nombres','$Apellidos','$CURP','$Direccion','$Telefono','$Correo_Electronico')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Empleado.php");
    
}else {
}
?>