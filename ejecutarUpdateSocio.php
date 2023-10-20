<?php

echo "ingreso a ejecutarUpdate";
include 'conexionBD.php';

$conexionBD = new ConexionBD();
$conexionBD->conectar();  

$idUsuario = $_POST['idSocio']; 

$usuario = $_POST['usuario'];
$passw = $_POST['passw'];
$nombre = $_POST['nombre'];
$apellidoPat = $_POST['apellidoPat'];
$apellidoMat = $_POST['apellidoMat'];
$telefono = $_POST['telefono'];
$fechaNac = $_POST['fechaNac'];
$carnet = $_POST['carnet'];
$rol = $_POST['rol'];
$sexo = $_POST['sexo'];
$datosAdi = $_POST['datosAdi'];
$direccion = $_POST['direccion'];


$consultaUpdate = "UPDATE usuario SET usuario='$usuario', password='$passw', nombre='$nombre', apellidoPat='$apellidoPat', apellidoMat='$apellidoMat', telefono='$telefono', fechaNac='$fechaNac', carnet='$carnet', datosAdi='$datosAdi', direccionEsp='$direccion' WHERE idUsuario='$idUsuario'";

$datos=$conexionBD->conexion->query($consultaUpdate); //ejecutar la consulta

?>

