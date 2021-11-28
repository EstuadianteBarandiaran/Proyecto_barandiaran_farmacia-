<?php
include("conexion.php");
$con=conectar();

$IdProveedor=$_POST['IdProveedor'];
$Nombre_Proveedor=$_POST['Nombre_Proveedor'];
$Representante_Legal=$_POST['Representante_Legal'];
$Direccion=$_POST['Direccion'];
$Telefono=$_POST['Telefono'];
$Correo_Electronico=$_POST['Correo_Electronico'];
$RFID=$_POST['RFID'];


$sql="INSERT INTO proveedor VALUES('$IdProveedor','$Nombre_Proveedor','$Representante_Legal','$Direccion','$Telefono','$Correo_Electronico','$RFID')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Proveedor.php");
    
}else {
}
?>