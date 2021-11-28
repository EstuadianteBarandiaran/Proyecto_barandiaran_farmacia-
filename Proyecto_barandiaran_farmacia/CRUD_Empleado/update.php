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

$sql="UPDATE empleado SET  Nombres='$Nombres',Apellidos='$Apellidos',CURP='$CURP',Direccion='$Direccion',Telefono='$Telefono',Correo_Electronico='$Correo_Electronico' WHERE Id_Empleado='$Id_Empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Empleado.php");
    }
?>