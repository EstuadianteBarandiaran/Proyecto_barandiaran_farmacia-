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

$sql="UPDATE proveedor SET  Nombre_Proveedor='$Nombre_Proveedor',Representante_Legal='$Representante_Legal',Direccion='$Direccion',Telefono='$Telefono',Correo_Electronico='$Correo_Electronico',RFID='$RFID' WHERE IdProveedor='$IdProveedor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Proveedor.php");
    }
?>