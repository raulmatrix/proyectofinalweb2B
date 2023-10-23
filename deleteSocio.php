<?php
include 'conexionBD.php';

$conexionBD = new ConexionBD();
$conexionBD->conectar();  

$idUsuario = $_POST['idSocio'];

$consultaSocio = "DELETE FROM usuario WHERE idUsuario=$idUsuario";

$datos=$conexionBD->conexion->query($consultaSocio); 

?>