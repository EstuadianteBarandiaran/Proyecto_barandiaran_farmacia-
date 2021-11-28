<?php

include("conexion.php");
$con=conectar();

$Id_Cliente=$_POST['Id_Cliente'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$CURP=$_POST['CURP'];
$Direccion=$_POST['Direccion'];
$Telefono=$_POST['Telefono'];
$Correo_Electronico=$_POST['Correo_Electronico'];

$sql="UPDATE clientes SET  Nombres='$Nombres',Apellidos='$Apellidos',CURP='$CURP',Direccion='$Direccion',Correo_Electronico='$Correo_Electronico',Direccion='$Direccion' WHERE Id_Cliente='$Id_Cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Cliente.php");
    }
?>